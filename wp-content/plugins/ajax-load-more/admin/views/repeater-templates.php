<div class="admin ajax-load-more" id="alm-repeaters">	
	<div class="wrap">
		<div class="header-wrap">
			<h1>
   			<?php echo ALM_TITLE; ?>: <strong><?php _e('Repeater Templates', 'ajax-load-more'); ?></strong>
            <em><?php _e('The library of editable templates for use within your theme', 'ajax-load-more'); ?></em>
         </h1>
		</div>
		<div class="cnkt-main form-table repeaters">				
		   <!-- Repeaters -->
		   <div class="group">
   		   
		      <?php 
            if (has_action('alm_custom_repeaters') || has_action('alm_unlimited_repeaters')){ ?>
				<span class="toggle-all">
					<span class="inner-wrap">
						<em class="collapse"><?php _e('Collapse All', 'ajax-load-more'); ?></em>
						<em class="expand"><?php _e('Expand All', 'ajax-load-more'); ?></em>
					</span>
				</span> 
            <?php } ?>
						
			   <!-- Default Template -->
			   <div class="row template default-repeater" id="default-template">
   			   
   			   <?php      			   
      			   // Check for local repeater template
         			$local_template = false;
         			$readOnly = 'false';
         			$template_dir = 'alm_templates';	
               	if(is_child_theme()){
               		$template_theme_file = get_stylesheet_directory().'/'. $template_dir .'/default.php';
               		if(!file_exists($template_theme_file)){
                  		$template_theme_file = get_template_directory().'/'. $template_dir .'/default.php';
               		}
               	}
               	else{
               		$template_theme_file = get_template_directory().'/'. $template_dir .'/default.php';
               	}
               	// if theme or child theme contains the template, use that file
               	if(file_exists($template_theme_file)){
               		$local_template = true;
               		$readOnly = true;
               	}      
						
                  $filename = alm_get_default_repeater(); // Get default repeater template
							               
	               $handle = fopen ($filename, "r"); // Open file
      				$contents = '';
      				if(filesize ($filename) != 0){
      				   $contents = fread ($handle, filesize ($filename));		               
      				}
      				fclose ($handle);
	            ?> 
	            <h3 class="heading"><?php _e('Default Template', 'ajax-load-more'); ?></h3>	            
	            <div class="expand-wrap">           	            
		            <div class="wrap repeater-wrap<?php if($local_template){ echo ' cm-readonly'; } ?>" data-name="default" data-type="default">							
							<label class="template-title" for="template-default">
							   <?php _e('Enter the HTML and PHP code for the default template', 'ajax-load-more'); ?>:
                     </label>		
                                 
							<?php 
                        do_action('alm_get_layouts'); // Layouts - Template Selection
      			      ?> 
			            <textarea rows="10" id="template-default" class="_alm_repeater"><?php echo $contents; ?></textarea>
			            <script>
                        var editorDefault = CodeMirror.fromTextArea(document.getElementById("template-default"), {
                          mode:  "application/x-httpd-php",
                          lineNumbers: true,
                          lineWrapping: true,
                          indentUnit: 0,
                          matchBrackets: true,
                          readOnly: <?php echo $readOnly; ?>,
                          viewportMargin: Infinity,
                          extraKeys: {"Ctrl-Space": "autocomplete"},
                        });
                     </script>   
                     <?php if(!$local_template){ ?>  		            
							<input type="submit" value="<?php _e('Save Template', 'ajax-load-more'); ?>" class="button button-primary save-repeater" data-editor-id="template-default">
		            	<div class="saved-response">&nbsp;</div>  
							<?php include( ALM_PATH . 'admin/includes/components/repeater-options.php'); ?>
							<?php } else { ?>
							<p class="warning-callout"><?php _e('It appears you are loading the <a href="https://connekthq.com/plugins/ajax-load-more/docs/repeater-templates/#default-template" target="_blank"><b>default template</b></a> (<em>default.php</em>) from your current theme directory. To modify this template, you must edit the file directly on your server.', 'ajax-load-more'); ?></p>
							<?php } ?>       	
		            </div>		               		               	            
	            </div>	            	
			   </div>
			   
			   <!-- End Default Template -->		
			   
			   <!-- Custom Repeaters -->	   
            <?php               
               
            	if (!has_action('alm_get_unlimited_repeaters') && !has_action('alm_get_custom_repeaters')){ 
               	// If Custom Repeaters & Theme Repeaters is NOT installed
                  echo '<div class="row no-brd">';
                  include( ALM_PATH . 'admin/includes/cta/extend.php');
                  echo '</div>';                  
				   }				   
				    
			   	if (has_action('alm_custom_repeaters')){ // List custom repeaters v1
						do_action('alm_custom_repeaters'); 						
					}	
			   	if (has_action('alm_unlimited_repeaters')){ // List custom repeaters v2
						do_action('alm_unlimited_repeaters'); 
               }
				?>
					   
				<script>
					jQuery(document).ready(function($) {					   
					   "use strict";
						var _alm_admin = {};				
						
					    /*
					    *  _alm_admin.saveRepeater
					    *  Save Custom Repeater Value
					    *
					    *  @since 2.0.0
					    */  
						
						_alm_admin.saveRepeater = function(btn, editorId) {							   
							var container = btn.parent('.repeater-wrap'),
								el = $('textarea._alm_repeater', container),
								textarea = el.next('.CodeMirror'),
								btn = btn,
								value = '',
								repeater = container.data('name'), // Get templete name
								type = container.data('type'), // Get template type (default/repeater/unlimited)
								alias = ($('input._alm_repeater_alias', container).length) ? $('input._alm_repeater_alias', container).val() : '',
								responseText = $(".saved-response", container);
                     
                     if(type === undefined) // Fix for custom repeaters v1
                        type = 'undefined';
                     	
							//Get value from CodeMirror textarea						
							var id = editorId.replace('template-', ''); // Editor ID								
							
							if(id === 'default'){ // Default Template						   
								value = editorDefault.getValue();
						   }else{ // Repeater Templates	
						      var eid = window['editor_'+id]; // Set editor ID
						      value = eid.getValue();   						   
						   }
						   	
						   // if value is null, then set repeater to non breaking space
						   if(value === '' || value === 'undefined'){
						      value = '&nbsp;';
						   }   
						                     
						   //If template is not already saving, then proceed
							if (!btn.hasClass('saving')) {
							   btn.addClass('saving');
							   textarea.addClass('loading');
								responseText.addClass('loading').html('<?php _e('Saving template...', 'ajax-load-more') ?>');
								responseText.animate({'opacity' : 1});
								
								$.ajax({
									type: 'POST',
									url: alm_admin_localize.ajax_admin_url,
									data: {
										action: 'alm_save_repeater',
										value: value, 
										repeater: repeater,
										type: type,
										alias: alias,
										nonce: alm_admin_localize.alm_admin_nonce,
									},
									success: function(response) {											  		
									  
									  $('textarea#'+editorId).val(value); // Set the target textarea val to 'value'
									  
									  setTimeout(function() { 
										   responseText.delay(500).html(response).removeClass('loading');
										   textarea.removeClass('loading');				
									  }, 250);
									  						  
									  setTimeout(function() { 
										   responseText.animate({'opacity': 0}, function(){
   										   responseText.html('&nbsp;');
                                    btn.removeClass('saving');
										   });
											
										}, 4500);	
															
									},
									error: function(xhr, status, error) {
										responseText.html('<?php _e('Something went wrong and the data could not be saved.', 'ajax-load-more') ?>').removeClass('loading');
										btn.removeClass('saving');
										textarea.removeClass('loading');
									}
                        });                        
							}
						}
						
						
						$(document).on('click', 'input.save-repeater', function(){
							var btn = $(this),
							    editorId = btn.data('editor-id');								
							_alm_admin.saveRepeater(btn, editorId);
						});						
						
						
						/*
					    *  _alm_admin.updateRepeater
					    *  Update Repeater Value
					    *  
					    *  @since 2.5
					    */  
						
						_alm_admin.updateRepeater = function(btn, editorId) {							   
							var container = btn.closest('.repeater-wrap'),
								el = $('textarea._alm_repeater', container),
								btn = btn,
								btn_text = btn.html(),
								editor = $('.CodeMirror', container),
								repeater = container.data('name'), // Get templete name
								type = container.data('type'); // Get template type (default/repeater/unlimited)								
						   
							//Get value from CodeMirror textarea						
							var editorId = repeater,
								 id = editorId.replace('template-', ''); // Editor ID								
						   	            
						   //If template is not already saving, then proceed
							if (!btn.hasClass('updating')) {
							   btn.addClass('updating').text("<?php _e('Updating template...', 'ajax-load-more'); ?>");
							   editor.addClass('loading');								
								$.ajax({
									type: 'POST',
									url: alm_admin_localize.ajax_admin_url,
									data: {
										action: 'alm_update_repeater',
										repeater: repeater,
										type: type,
										nonce: alm_admin_localize.alm_admin_nonce,
									},
									success: function(response) {	
									   if(id === 'default'){ // Default Template						   
         								editorDefault.setValue(response);
                              }else{ // Repeater Templates	
         						      var eid = window['editor_'+id]; // Set editor ID
         						      eid.setValue(response);   						   
         						   }
									  		
									  	// Clear button styles				  
									   setTimeout(function() { 
                                 btn.text("<?php _e('Template Updated', 'ajax-load-more'); ?>").blur();                                 
                                 setTimeout(function() { 
                                    btn.closest('.alm-drop-btn').trigger('click'); // CLose drop menu
	                                 btn.removeClass('updating').html(btn_text).blur();		
	                                 editor.removeClass('loading');									
											}, 400);										
										}, 400);		
													
									},
									error: function(xhr, status, error) {
                              btn.removeClass('updating').html(btn_text).blur();	
                              editor.removeClass('loading');	
									}
                        });                        
							}
						}						
						
						$('.option-update a').click(function(){
							var btn = $(this);								
							_alm_admin.updateRepeater(btn);
						});
								
					});		
				</script>
				
		   </div>
		   <!-- End Repeaters -->	
		   	   
	   </div>
	   
	   <div class="cnkt-sidebar">
   	   <?php if (has_action('alm_unlimited_repeaters')){ 
      	   // Add TOC if users has Custom Repeaters
   	   ?>
   	   <div class="table-of-contents repeaters-toc">
   	   	<div class="cta">
   	   	   <select class="toc"></select>
   	   	</div>
   	  <?php } ?>
      	   <div class="cta padding-bottom">
   				<h3><?php _e('Repeater Template Help', 'ajax-load-more'); ?></h3>
   				<div class="item">
   					<p><strong><?php _e('What is a repeater template?', 'ajax-load-more'); ?></strong></p>
   					<p><?php _e('A <a href="https://connekthq.com/plugins/ajax-load-more/docs/repeater-templates/" target="_blank">repeater template</a> is a snippet of code that will execute over and over within a <a href="http://codex.wordpress.org/The_Loop" target="_blank">WordPress loop</a>', 'ajax-load-more'); ?>.</p>
   				</div>
   				<a class="visit" href="https://connekthq.com/plugins/ajax-load-more/docs/repeater-templates/" target="_blank"><i class="fa fa-chevron-circle-right"></i> <?php _e('More About Templating', 'ajax-load-more'); ?></a>		
   	   	</div>
            <?php include_once( ALM_PATH . 'admin/includes/cta/writeable.php'); ?>
            
         <?php if (has_action('alm_unlimited_repeaters')){ ?>
   	   </div>
   	   <?php } ?>
   	   
	   </div>	
	   
	</div>
</div>