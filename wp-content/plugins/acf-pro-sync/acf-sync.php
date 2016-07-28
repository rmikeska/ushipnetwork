<?php 
/*
Plugin Name: ACF Pro JSON Sync
Description: Sync Advanced Custom Fields fields stored in json files into the database. Ideal for using ACF in multiple environments or in a team setting.
Version: 1.0.1
Author: O3 World
Author URI: http://o3world.com
*/


 

function acf_sync_check_json_dirs() {
	//Get all json save points
	$json_dirs = acf_get_setting('load_json');

	$missing_dirs = array();

	foreach ( $json_dirs as $dir ) {
	    if (!file_exists($dir)) {
	    	$missing_dirs[] = $dir;
	    }
	}

	if(!empty($missing_dirs)) {
		return $missing_dirs;
	}

	return false;
}

function acf_sync_import_json_folder() {
	// tell ACF NOT to save to JSON
	add_filter('acf/settings/save_json', 'acf_sync_import_json_no_save', 99 );
	
	
	// Remove previous field groups in DB
	$args = array(
	    'post_type'   => 'acf-field-group',
	    'post_status' => 'any',
	    'posts_per_page' => -1
	);
	
	$query = new WP_Query( $args );
	
	foreach ( $query->posts as $acf_group ) {
	    wp_delete_post( $acf_group->ID, true);
	}

	//Get all json save points
	$json_dirs = acf_get_setting('load_json');

	foreach ( $json_dirs as $dir ) {
	    acf_sync_import_json_field_groups($dir);
	}

}

 
// Import field groups from local JSON to make them editable via Admin UI (dev mode)
function acf_sync_import_json_field_groups($directory) {
 	
 	$dir = new DirectoryIterator( $directory );
    
    foreach( $dir as $file ) {
        
        if ( !$file->isDot() && $file->getExtension() == 'json' ) {
 
            $json = json_decode( file_get_contents( $file->getPathname() ), true );
 
            // What follows is basically a copy of import() in ACF admin/settings-export.php
 
            // if importing an auto-json, wrap field group in array
            if( isset($json['key']) ) {
                
                $json = array( $json );
                
            }
            
            // vars
            $added   = array();
            $ignored = array();
            $ref     = array();
            $order   = array();
            
            foreach( $json as $field_group ) {
                
                // remove fields
                $fields = acf_extract_var($field_group, 'fields');
             
                
                // format fields
                $fields = acf_prepare_fields_for_import( $fields );
 
                
                // save field group
                $field_group = acf_update_field_group( $field_group );
                
                
                // add to ref
                $ref[ $field_group['key'] ] = $field_group['ID'];
                
                
                // add to order
                $order[ $field_group['ID'] ] = 0;
                
                
                // add fields
                foreach( $fields as $field ) {
                    
                    // add parent
                    if( empty($field['parent']) ) {
                        
                        $field['parent'] = $field_group['ID'];
                        
                    } elseif( isset($ref[ $field['parent'] ]) ) {
                        
                        $field['parent'] = $ref[ $field['parent'] ];
                            
                    }
                    
                    // add field menu_order
                    if( !isset($order[ $field['parent'] ]) ) {
                        
                        $order[ $field['parent'] ] = 0;
                        
                    }
                    
                    $field['menu_order'] = $order[ $field['parent'] ];
                    $order[ $field['parent'] ]++;
                    
                    // save field
                    $field = acf_update_field( $field );
                    
                }
                
            }
        }
    }
 
}

function acf_sync_get_fields_list() {
    $json_dirs = acf_get_setting('load_json');

    $json_files = array();

    foreach ( $json_dirs as $dir ) {
        if (file_exists($dir)) {
            $files = new DirectoryIterator( $dir );
            foreach( $files as $file ) {
                if ( !$file->isDot() && $file->getExtension() == 'json' ) {
                    $path = $file->getPathname();
                    $path_uri = strstr($path, '/wp-content');

                    $contents = file_get_contents($path);
                    $json = json_decode($contents,true);
                    $title = $json['title'];

                    $json_files[] = array('title'=>$title, 'path'=>$path_uri);
                }
            }
        }
    }
    return $json_files;
}

 
function acf_sync_import_json_no_save($paths) {
    return null;
}


function acf_sync_admin_css() {
    wp_register_style( 'acf_sync_css', plugins_url( 'css/acf-sync.css', __FILE__ ), false, '1.0.0' );
    wp_enqueue_style( 'acf_sync_css' );
}
add_action( 'admin_enqueue_scripts', 'acf_sync_admin_css' );


function acf_sync_menu_page(){
    add_menu_page( 'Sync Advanced Custom Fields', 'Sync ACF', 'manage_options', 'sync_acf', 'acf_sync_page', '',111 ); 
}
add_action( 'admin_menu', 'acf_sync_menu_page' );


function acf_sync_submenu_page() {
    add_submenu_page( 'sync_acf', 'Run ACF Sync', 'Run Sync', 'manage_options', 'run_acf_sync', 'run_acf_sync' ); 
}
add_action('admin_menu', 'acf_sync_submenu_page');



function acf_sync_page(){
	include 'views/sync.php';
}


function run_acf_sync() {
    acf_sync_import_json_folder();
    include 'views/sync-complete.php';
}
