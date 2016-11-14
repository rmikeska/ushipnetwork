<div class="admin ajax-load-more" id="alm-licenses">	
	<div class="wrap">
		<div class="header-wrap">
	   		<h1>
   	   		<?php echo ALM_TITLE; ?>: <strong><?php _e('Licenses', 'ajax-load-more'); ?></strong>
	   		   <em><?php _e('Enter your license keys to enable automatic updates for <a href="admin.php?page=ajax-load-more-add-ons">ALM Add-ons</a>.', 'ajax-load-more'); ?></em>
	   		</h1>
		</div>
		<div class="cnkt-main">
		   <div class="group">
		      <h3><?php _e('License Keys', 'ajax-load-more'); ?></h3>
		   
		      <p><?php _e('Manage your Ajax Load More license key\'s below - enter a key for each of your add-ons to receive plugin update notifications directly within the <a href="plugins.php">WP Plugins dashboard</a>.', 'ajax-load-more'); ?></p>
		      		      
		      <?php 
   		      // alm_cache_installed
   		      // alm_cta_installed
   		      // alm_comments_installed
   		      // alm_unlimited_installed
   		      // alm_layouts_installed
   		      // alm_preload_installed
   		      // alm_paging_installed
   		      // alm_prev_post_installed
   		      // alm_rest_api_installed
   		      // alm_seo_installed   
   		      // alm_theme_repeaters_installed
   		   ?>
   		   
   		   <?php 
      		   // Check if any add ons are installed. 
      		   if(alm_has_addon()) : ?>	  
		     		      
		      
		      <?php 
   		      if (has_action('alm_cache_installed')){
   		      // CACHE 
				   $alm_cache_license = get_option( 'alm_cache_license_key' );
               $alm_cache_status = get_option( 'alm_cache_license_status' );
               $alm_cache_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/cache/';
		      ?>
	         <div class="license" id="license-cache">
		         <div class="license-title"> 
   		         <div class="status <?php if($alm_cache_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>        
         			<h2><?php _e('Cache', 'ajax-load-more'); ?></h2> 
		         </div>	
               <div class="license-wrap">
   			      <form method="post" action="options.php">               			
         			
         			   <?php if( $alm_cache_status !== false && $alm_cache_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_cache_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=Cache" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>
         			   
	         			<?php settings_fields('alm_cache_license'); ?>  
	         			 
	         			<label class="description offscreen" for="alm_cache_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	         			<div class="license-key-field">
	         			   <input id="alm_cache_license_key" name="alm_cache_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_cache_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	         			   <?php if( $alm_cache_status !== false && $alm_cache_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	         			</div>
	         			
	         			<?php wp_nonce_field( 'alm_cache_license_nonce', 'alm_cache_license_nonce' ); ?>
	         			<div class="license-btn-wrap"	         			
						   		data-name="<?php echo ALM_CACHE_ITEM_NAME; ?>" 
				         		data-url="<?php echo ALM_STORE_URL; ?>" 
					         	data-option-status="alm_cache_license_status" 
						         data-option-key="alm_cache_license_key"
						         data-upgrade-url="<?php echo $alm_cache_url; ?>">
		         			<button type="button" class="activate license-btn <?php if($alm_cache_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
							   	<?php _e('Activate License', 'ajax-load-more'); ?>
							   </button>
							   
							   <button type="button" class="deactivate license-btn <?php if($alm_cache_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
							   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
							   </button>  
	         			</div>
         			
               	</form>
			      </div> 
			      <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End CACHE 
            ?>	
		      
		      <?php 
   		      if (has_action('alm_cta_installed')){
   		      // Call to Actions 
				   $alm_cta_license = get_option( 'alm_cta_license_key' );
               $alm_cta_status = get_option( 'alm_cta_license_status' );
               $alm_cta_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/call-to-actions/';
		      ?>
	         <div class="license" id="license-cta">
		         <div class="license-title"> 
   		         <div class="status <?php if($alm_cta_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>        
         			<h2><?php _e('Call to Actions', 'ajax-load-more'); ?></h2> 
		         </div>	
               <div class="license-wrap">
   			      <form method="post" action="options.php">       
      			      
      			      <?php if( $alm_cta_status !== false && $alm_cta_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_cta_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=CTA" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>        			
         			
	         			<?php settings_fields('alm_cta_license'); ?> 
	         			  
	         			<label class="description offscreen" for="alm_cta_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	         			<div class="license-key-field">
	         			   <input id="alm_cta_license_key" name="alm_cta_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_cta_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	         			   <?php if( $alm_cta_status !== false && $alm_cta_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	         			</div>
	         			
	         			<?php wp_nonce_field( 'alm_cta_license_nonce', 'alm_cta_license_nonce' ); ?>
	         			<div class="license-btn-wrap"	         			
						   		data-name="<?php echo ALM_CTA_ITEM_NAME; ?>" 
				         		data-url="<?php echo ALM_STORE_URL; ?>" 
					         	data-option-status="alm_cta_license_status" 
						         data-option-key="alm_cta_license_key"
						         data-upgrade-url="<?php echo $alm_cta_url; ?>">
		         			<button type="button" class="activate license-btn <?php if($alm_cta_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
							   	<?php _e('Activate License', 'ajax-load-more'); ?>
							   </button>
							   
							   <button type="button" class="deactivate license-btn <?php if($alm_cta_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
							   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
							   </button>  
	         			</div>
         			
               	</form>
			      </div> 
			      <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End Call to Actions 
            ?>	
            
            <?php 
   		      if (has_action('alm_comments_installed')){
   		      // Comments 
				   $alm_comments_license = get_option( 'alm_comments_license_key' );
               $alm_comments_status = get_option( 'alm_comments_license_status' );
               $alm_comments_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/comments/';
		      ?>
	         <div class="license" id="license-comments">
		         <div class="license-title"> 
   		         <div class="status <?php if($alm_comments_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>        
         			<h2><?php _e('Comments', 'ajax-load-more'); ?></h2> 
		         </div>	
               <div class="license-wrap">
   			      <form method="post" action="options.php">      
      			      
      			      <?php if( $alm_comments_status !== false && $alm_comments_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_comments_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=Comments" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>         			
         			
	         			<?php settings_fields('alm_comments_license'); ?>  
	         			 
	         			<label class="description offscreen" for="alm_comments_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	         			<div class="license-key-field">
	         			   <input id="alm_comments_license_key" name="alm_comments_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_comments_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	         			   <?php if( $alm_comments_status !== false && $alm_comments_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	         			</div>
	         			
	         			<?php wp_nonce_field( 'alm_comments_license_nonce', 'alm_comments_license_nonce' ); ?>
	         			<div class="license-btn-wrap"	         			
						   		data-name="<?php echo ALM_COMMENTS_ITEM_NAME; ?>" 
				         		data-url="<?php echo ALM_STORE_URL; ?>" 
					         	data-option-status="alm_comments_license_status" 
						         data-option-key="alm_comments_license_key"
						         data-upgrade-url="<?php echo $alm_comments_url; ?>">
		         			<button type="button" class="activate license-btn <?php if($alm_comments_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
							   	<?php _e('Activate License', 'ajax-load-more'); ?>
							   </button>
							   
							   <button type="button" class="deactivate license-btn <?php if($alm_comments_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
							   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
							   </button>  
	         			</div>
         			
               	</form>
			      </div> 
			      <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End Comments 
            ?>		      
		      
		      
		      <?php 
   		      if (has_action('alm_unlimited_installed')){
   		      // Custom Repeaters 
				   $alm_unlimited_license = get_option( 'alm_unlimited_license_key' );
               $alm_unlimited_status = get_option( 'alm_unlimited_license_status' );
               $alm_unlimited_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/custom-repeaters/';
		      ?>
	         <div class="license" id="license-repeaters">
		         <div class="license-title">       
   		         <div class="status <?php if($alm_unlimited_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>   
         			<h2><?php _e('Custom Repeaters', 'ajax-load-more'); ?></h2> 
		         </div>	
               <div class="license-wrap">
   			      <form method="post" action="options.php">               			
         			
	         			<?php if( $alm_unlimited_status !== false && $alm_unlimited_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_unlimited_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=Custom Repeaters" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>
	         			
	         			<?php settings_fields('alm_unlimited_license'); ?>   
	         			
	         			<label class="description offscreen" for="alm_unlimited_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	         			<div class="license-key-field">
	         			   <input id="alm_unlimited_license_key" name="alm_unlimited_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_unlimited_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	         			   <?php if( $alm_unlimited_status !== false && $alm_unlimited_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	         			</div>
         			
         				<?php wp_nonce_field( 'alm_unlimited_license_nonce', 'alm_unlimited_license_nonce' ); ?>
         				<div class="license-btn-wrap"	         			
						   		data-name="<?php echo ALM_UNLIMITED_ITEM_NAME; ?>" 
				         		data-url="<?php echo ALM_STORE_URL; ?>" 
					         	data-option-status="alm_unlimited_license_status" 
						         data-option-key="alm_unlimited_license_key"
						         data-upgrade-url="<?php echo $alm_unlimited_url; ?>">
		         			<button type="button" class="activate license-btn <?php if($alm_unlimited_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
							   	<?php _e('Activate License', 'ajax-load-more'); ?>
							   </button>
							   
							   <button type="button" class="deactivate license-btn <?php if($alm_unlimited_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
							   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
							   </button>  
	         			</div>
         			
               	</form>
			      </div> 
			      <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End Custom Repeaters v2 
            ?>
            
            
            
            <?php 
   		      if (has_action('alm_layouts_installed')){
   		      // LAYOUTS 
				   $alm_layouts_license = get_option( 'alm_layouts_license_key' );
               $alm_layouts_status = get_option( 'alm_layouts_license_status' );
               $alm_layouts_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/layouts/';
		      ?>
	         <div class="license" id="license-layouts">
		         <div class="license-title">       
   		         <div class="status <?php if($alm_layouts_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>   
         			<h2><?php _e('Layouts', 'ajax-load-more'); ?></h2> 
		         </div>	
               <div class="license-wrap">
   			      <form method="post" action="options.php">       
            		
	            		<?php if( $alm_layouts_status !== false && $alm_layouts_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_layouts_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=Layouts" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>
         			   
	         			<?php settings_fields('alm_layouts_license'); ?>   
	         			
	         			<label class="description offscreen" for="alm_layouts_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	         			<div class="license-key-field">
	         			   <input id="alm_layouts_license_key" name="alm_layouts_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_layouts_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	         			   <?php if( $alm_layouts_status !== false && $alm_layouts_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	         			</div>
         			
         				<?php wp_nonce_field( 'alm_layouts_license_nonce', 'alm_layouts_license_nonce' ); ?>
         				<div class="license-btn-wrap"	         			
						   		data-name="<?php echo ALM_LAYOUTS_ITEM_NAME; ?>" 
				         		data-url="<?php echo ALM_STORE_URL; ?>" 
					         	data-option-status="alm_layouts_license_status" 
						         data-option-key="alm_layouts_license_key"
						         data-upgrade-url="<?php echo $alm_layouts_url; ?>">
		         			<button type="button" class="activate license-btn <?php if($alm_layouts_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
							   	<?php _e('Activate License', 'ajax-load-more'); ?>
							   </button>
							   
							   <button type="button" class="deactivate license-btn <?php if($alm_layouts_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
							   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
							   </button>  
	         			</div>
         			
               	</form>
			      </div> 
			      <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End LAYOUTS 
            ?>	
            
            
            
            <?php 
   		      if (has_action('alm_paging_installed')){
   		      // PAGING 
				   $alm_paging_license = get_option( 'alm_paging_license_key' );
               $alm_paging_status = get_option( 'alm_paging_license_status' );
               $alm_paging_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/paging/';
		      ?>
	         <div class="license" id="license-paging">
		         <div class="license-title">       
   		         <div class="status <?php if($alm_paging_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>   
         			<h2><?php _e('Paging', 'ajax-load-more'); ?></h2> 
		         </div>	
               <div class="license-wrap">
   			      <form method="post" action="options.php">               			
            		
	            		<?php if( $alm_paging_status !== false && $alm_paging_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_paging_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=Paging" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>           			
         			
	         			<?php settings_fields('alm_paging_license'); ?>  
	         			 
	         			<label class="description offscreen" for="alm_paging_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	         			<div class="license-key-field">
	         			   <input id="alm_paging_license_key" name="alm_paging_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_paging_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	         			   <?php if( $alm_paging_status !== false && $alm_paging_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	         			</div>
         			
         				<?php wp_nonce_field( 'alm_paging_license_nonce', 'alm_paging_license_nonce' ); ?>
         				<div class="license-btn-wrap"	         			
						   		data-name="<?php echo ALM_PAGING_ITEM_NAME; ?>" 
				         		data-url="<?php echo ALM_STORE_URL; ?>" 
					         	data-option-status="alm_paging_license_status" 
						         data-option-key="alm_paging_license_key"
						         data-upgrade-url="<?php echo $alm_paging_url; ?>">
		         			<button type="button" class="activate license-btn <?php if($alm_paging_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
							   	<?php _e('Activate License', 'ajax-load-more'); ?>
							   </button>
							   
							   <button type="button" class="deactivate license-btn <?php if($alm_paging_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
							   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
							   </button>  
	         			</div>
         			
               	</form>
			      </div> 
			      <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End PAGING 
            ?>	
            
            <?php 
               if (has_action('alm_preload_installed')){
               // PRELOADED 
               $alm_preloaded_license = get_option( 'alm_preloaded_license_key' );
               $alm_preloaded_status = get_option( 'alm_preloaded_license_status' );
               $alm_preloaded_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/preloaded/';
            ?>
            <div class="license" id="license-preloaded">
               <div class="license-title">   
   		         <div class="status <?php if($alm_preloaded_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>       
            		<h2><?php _e('Preloaded', 'ajax-load-more'); ?></h2> 
               </div>	
               <div class="license-wrap">
                  <form method="post" action="options.php">               			
            		
	            		<?php if( $alm_preloaded_status !== false && $alm_preloaded_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_preloaded_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=Preloaded" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>
	            		
	            		<?php settings_fields('alm_preloaded_license'); ?>   
	            		
	            		<label class="description offscreen" for="alm_preloaded_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	            		<div class="license-key-field">
	            		   <input id="alm_preloaded_license_key" name="alm_preloaded_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_preloaded_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	            		   <?php if( $alm_preloaded_status !== false && $alm_preloaded_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	            		</div>
	            		<?php wp_nonce_field( 'alm_preloaded_license_nonce', 'alm_preloaded_license_nonce' ); ?>
	            		<div class="license-btn-wrap"	         			
						   		data-name="<?php echo ALM_PRELOADED_ITEM_NAME; ?>" 
				         		data-url="<?php echo ALM_STORE_URL; ?>" 
					         	data-option-status="alm_preloaded_license_status" 
						         data-option-key="alm_preloaded_license_key"
						         data-upgrade-url="<?php echo $alm_preloaded_url; ?>">
		         			<button type="button" class="activate license-btn <?php if($alm_preloaded_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
							   	<?php _e('Activate License', 'ajax-load-more'); ?>
							   </button>
							   
							   <button type="button" class="deactivate license-btn <?php if($alm_preloaded_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
							   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
							   </button>  
	         			</div>
	         			
               	</form>
               </div> 
			      <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End PRELOADED 
            ?>	
            
            <?php 
               if (has_action('alm_prev_post_installed')){
               // PREVIOUS POST 
               $alm_prev_post_license = get_option( 'alm_prev_post_license_key' );
               $alm_prev_post_status = get_option( 'alm_prev_post_license_status' );
               $alm_prev_post_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/previous-post/';
            ?>
            <div class="license" id="license-previous-post">
               <div class="license-title">   
   		         <div class="status <?php if($alm_prev_post_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>       
            		<h2><?php _e('Previous Post', 'ajax-load-more'); ?></h2> 
               </div>	
               <div class="license-wrap">
                  <form method="post" action="options.php">      			
         			   
         			   <?php if( $alm_prev_post_status !== false && $alm_prev_post_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_prev_post_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=Previous Post" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>
         			   
	         			<?php settings_fields('alm_prev_post_license'); ?>   
	            		
	            		<label class="description offscreen" for="alm_prev_post_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	            		<div class="license-key-field">
	            		   <input id="alm_prev_post_license_key" name="alm_prev_post_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_prev_post_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	            		   <?php if( $alm_prev_post_status !== false && $alm_prev_post_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	            		</div>
	            		
	            		<?php wp_nonce_field( 'alm_prev_post_license_nonce', 'alm_prev_post_license_nonce' ); ?>
	            		<div class="license-btn-wrap"	         			
						   		data-name="<?php echo ALM_PREV_POST_ITEM_NAME; ?>" 
				         		data-url="<?php echo ALM_STORE_URL; ?>" 
					         	data-option-status="alm_prev_post_license_status" 
						         data-option-key="alm_prev_post_license_key"
						         data-upgrade-url="<?php echo $alm_prev_post_url; ?>">
		         			<button type="button" class="activate license-btn <?php if($alm_prev_post_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
							   	<?php _e('Activate License', 'ajax-load-more'); ?>
							   </button>
							   
							   <button type="button" class="deactivate license-btn <?php if($alm_prev_post_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
							   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
							   </button>  
	         			</div> 
	         			
               	</form>
               </div> 
               <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End PREVIOUS POST 
            ?>	
            
            
            <?php 
   		      if (has_action('alm_rest_api_installed')){
   		      // REST API 
				   $alm_restapi_license = get_option( 'alm_rest_api_license_key' );
               $alm_restapi_status = get_option( 'alm_rest_api_license_status' );
               $alm_restapi_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/rest-api/';
		      ?>
	         <div class="license" id="license-rest">
		         <div class="license-title"> 
   		         <div class="status <?php if($alm_restapi_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>        
         			<h2><?php _e('REST API', 'ajax-load-more'); ?></h2> 
		         </div>	
               <div class="license-wrap">
   			      <form method="post" action="options.php">               			
         			   
         			   <?php if( $alm_restapi_status !== false && $alm_restapi_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_restapi_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=RESTAPI" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>
         			   
	         			<?php settings_fields('alm_rest_api_license'); ?>   
	         			
	         			<label class="description offscreen" for="alm_rest_api_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	         			<div class="license-key-field">
	         			   <input id="alm_rest_api_license_key" name="alm_rest_api_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_restapi_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	         			   <?php if( $alm_restapi_status !== false && $alm_restapi_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	         			</div>
	         			
	         			<?php wp_nonce_field( 'alm_rest_api_license_nonce', 'alm_rest_api_license_nonce' ); ?>
	         			<div class="license-btn-wrap"	         			
						   		data-name="<?php echo ALM_RESTAPI_ITEM_NAME; ?>" 
				         		data-url="<?php echo ALM_STORE_URL; ?>" 
					         	data-option-status="alm_rest_api_license_status" 
						         data-option-key="alm_rest_api_license_key"
						         data-upgrade-url="<?php echo $alm_restapi_url; ?>">
		         			<button type="button" class="activate license-btn <?php if($alm_restapi_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
							   	<?php _e('Activate License', 'ajax-load-more'); ?>
							   </button>
							   
							   <button type="button" class="deactivate license-btn <?php if($alm_restapi_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
							   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
							   </button>  
	         			</div>    
	         			   			
               	</form>
			      </div> 
			      
			      <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End REST API 
            ?>
            
            <?php 
   		      if (has_action('alm_seo_installed')){
   		      // SEO 
				   $alm_seo_license = get_option( 'alm_seo_license_key' );
               $alm_seo_status = get_option( 'alm_seo_license_status' );
               $alm_seo_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/search-engine-optimization/';
		      ?>
	         <div class="license" id="license-seo">
		         <div class="license-title"> 
   		         <div class="status <?php if($alm_seo_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>        
         			<h2><?php _e('Search Engine Optimization', 'ajax-load-more'); ?></h2> 
		         </div>	
               <div class="license-wrap">
   			      <form method="post" action="options.php">                  			
         			   
         			   <?php if( $alm_seo_status !== false && $alm_seo_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_seo_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=SEO" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>
         			   
	         			<?php settings_fields('alm_seo_license'); ?>   
	         			
	         			<label class="description offscreen" for="alm_seo_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	         			<div class="license-key-field">
	         			   <input id="alm_seo_license_key" name="alm_seo_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_seo_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	         			   <?php if( $alm_seo_status !== false && $alm_seo_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	         			</div>
	         			
	         			<?php wp_nonce_field( 'alm_seo_license_nonce', 'alm_seo_license_nonce' ); ?>
	         			<div class="license-btn-wrap"	         			
						   		data-name="<?php echo ALM_SEO_ITEM_NAME; ?>" 
				         		data-url="<?php echo ALM_STORE_URL; ?>" 
					         	data-option-status="alm_seo_license_status" 
						         data-option-key="alm_seo_license_key"
						         data-upgrade-url="<?php echo $alm_seo_url; ?>">
		         			<button type="button" class="activate license-btn <?php if($alm_seo_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
							   	<?php _e('Activate License', 'ajax-load-more'); ?>
							   </button>
							   
							   <button type="button" class="deactivate license-btn <?php if($alm_seo_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
							   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
							   </button>  
	         			</div>    
	         			   			
               	</form>
			      </div> 
			      
			      <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End SEO 
            ?>
            
            
            <?php 
   		      if (has_action('alm_theme_repeaters_installed')){
   		      // Theme Templates 
	         	
				   $alm_theme_repeaters_license = get_option( 'alm_theme_repeaters_license_key' );
               $alm_theme_repeaters_status = get_option( 'alm_theme_repeaters_license_status' );
               $alm_theme_repeaters_url = 'https://connekthq.com/plugins/ajax-load-more/add-ons/theme-repeaters/';
		      ?>
	         <div class="license" id="license-theme_repeaters">
		         <div class="license-title">       
   		         <div class="status <?php if($alm_theme_repeaters_status == 'valid'){echo 'valid';}else{echo 'invalid';} ?> "></div>   
         			<h2><?php _e('Theme Repeaters', 'ajax-load-more'); ?> </h2> 
		         </div>	
               <div class="license-wrap">
   			      <form method="post" action="options.php">               			
         			   
         			   <?php if( $alm_theme_repeaters_status !== false && $alm_theme_repeaters_status == 'valid' ) { ?>
         			   <!-- nothing -->
         			   <?php } else { ?>
         			   <div class="no-license">
            	         <h4><?php _e('Don\'t have a license?', 'ajax-load-more'); ?></h4>
            	         <p><?php _e('A valid license is required to activate and receive plugin updates directly in your WordPress dashboard', 'ajax-load-more'); ?> &rarr; <a href="<?php echo $alm_theme_repeaters_url; ?>?utm_source=WP%20Admin&utm_medium=Licenses&utm_campaign=Theme Repeaters" target="blank"><strong><?php _e('Purchase Now', 'ajax-load-more'); ?>!</strong></a></p>
                     </div> 
         			   <?php } ?>
         			   
	         			<?php settings_fields('alm_theme_repeaters_license'); ?>
	         			   
	         			<label class="description offscreen" for="alm_theme_repeaters_license_key"><?php _e('Enter License Key', 'ajax-load-more'); ?></label>
	         			<div class="license-key-field">
	         			   <input id="alm_theme_repeaters_license_key" name="alm_theme_repeaters_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $alm_theme_repeaters_license ); ?>" placeholder="<?php _e('Enter License Key', 'ajax-load-more'); ?>" />
	         			   <?php if( $alm_theme_repeaters_status !== false && $alm_theme_repeaters_status == 'valid' ) { ?>
	            		   <span class="status active">
	            		      <?php _e('Active', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } else { ?>
	            		   <span class="status inactive">
	            		      <?php _e('Inactive', 'ajax-load-more'); ?>
	            		   </span>
	            		   <?php } ?>
	         			</div>
	         			<?php wp_nonce_field( 'alm_theme_repeaters_license_nonce', 'alm_theme_repeaters_license_nonce' ); ?>
	         			
	         			<div class="license-btn-wrap"	         			
						   	data-name="<?php echo ALM_THEME_REPEATERS_ITEM_NAME; ?>" 
			         		data-url="<?php echo ALM_STORE_URL; ?>"
				         	data-upgrade-url="<?php echo $alm_theme_repeaters_url; ?>"
				         	data-option-status="alm_theme_repeaters_license_status" 
					         data-option-key="alm_theme_repeaters_license_key"
		         			>
						   <button type="button" class="activate license-btn <?php if($alm_theme_repeaters_status === 'valid'){ echo 'hide'; } ?> button-primary" data-type="activate">
						   	<?php _e('Activate License', 'ajax-load-more'); ?>
						   </button>
						   
						   <button type="button" class="deactivate license-btn <?php if($alm_theme_repeaters_status !== 'valid'){ echo 'hide'; } ?> button-secondary" data-type="deactivate">
						   	<?php _e('Deactivate License', 'ajax-load-more'); ?>
						   </button>
	         			</div>
         			
               	</form>
               	
			      </div> 
			      <div class="loading"></div>
            </div> 	
            <?php 
               }
               // End Theme Repeaters 
            ?>
            
            
            <?php else : ?>
                        
            <div class="license-no-addons">
               <p><?php _e('You do not have any Ajax Load More add-ons installed', 'ajax-load-more'); ?>. &raquo; <a href="admin.php?page=ajax-load-more-add-ons"><strong><?php _e('Browse Add-ons', 'ajax-load-more'); ?></strong></a></p>
            </div>
            
            <?php endif; ?>               
               
   			   
		   </div>
	   </div>
	   
	   <div class="cnkt-sidebar">
   	   <div class="cta padding-bottom">
            <h3><?php _e('About Licenses', 'ajax-load-more'); ?></h3>
            <div class="cta-wrap">
               <ul>
                  <li><?php _e('Add-on licenses will enable updates directly in your WP dashboard.', 'ajax-load-more');?></li>
                  <li><?php _e('License keys are found in the purchase receipt email that was sent immediately after your successful purchase and in the <a target="_blank" href="https://connekthq.com/account/">Account</a> section on our website', 'ajax-load-more');?></li>
                  <li><?php _e('If you cannot locate your key please open a support ticket by filling out the <a href="https://connekthq.com/contact/">form</a> on our website and reference the email address used when you completed the purchase.', 'ajax-load-more'); ?></li>
               </ul>
            </div>
            <a class="visit" target="_blank" href="https://connekthq.com/account/"><i class="fa fa-chevron-circle-right"></i> Sign Into Your Account</a>
         </div> 
         <div class="cta">
            <h3><?php _e('Legacy Users', 'ajax-load-more'); ?></h3>
            <div class="cta-wrap">
               <ul>
               <li>If you have made a purchase prior to <u>July 6, 2015</u> you will require a license after updating your add-ons. Please <a href="https://connekthq.com/plugins/ajax-load-more/support/#contact-form" target="_blank">email us</a> with a reference to the email address used when you completed the add-on purchase and we will send your license key.</li>
               </ul>
            </div>
         </div>  	   
	   </div>	      
	   	
	</div>
</div>