<?php 
$filename = get_template_directory()  . '/acf-json';

 ?>


<div class="wrap">
	<div id="welcome-panel" class="welcome-panel acf-sync-panel" style="padding: 20px;">
		<h3><i class="dashicons dashicons-download"></i> ACF Pro JSON Sync</h3>

		<?php if (!acf_sync_check_json_dirs()): ?>
			<p>Syncing will remove all ACF fields from the database and replace them with json fields from your acf-json folder.</p>
			<h4>The following json files will be pulled into the database:</h4>
			<ul class="sync-file-list">
				<?php $files = acf_sync_get_fields_list(); ?>
				<?php foreach($files as $file): ?>
					<li><a target="_blank" href="<?php echo get_bloginfo('url') .  $file['path']; ?>"><i class="dashicons dashicons-media-default"></i><?php echo $file['title']; ?></a></li>
				<?php endforeach; ?>
			</ul>
			<a class="button button-primary button-hero" href="admin.php?page=run_acf_sync">Sync Now</a>
		<?php else: ?>
			<div class="acf-sync-warning">
				<h4>the following json directories are missing from your theme:</h4>
				<ul>
					<?php foreach (acf_sync_check_json_dirs() as $dir) { ?>
						<li class="welcome-icon dashicons-category"><?php echo $dir ?></li>
					<?php } ?>
				</ul>
			</div>
			
		<?php endif; ?>
		
	</div>
</div> 