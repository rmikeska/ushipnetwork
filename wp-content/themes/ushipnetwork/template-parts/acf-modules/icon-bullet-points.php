<section class="iconBulletPoints">
  <div class="iconBulletPoints-container">
    <?php while(have_rows('icon_bullet_points_row')): the_row(); ?>
      <h5 class="iconBulletPoints-title"><?php the_sub_field('icon_bullet_points_row_title'); ?></h5>
      <div class="iconBulletPoints-row">
        <div class="iconBulletPoints-icon">
          <?php include("icons.php");?>
        </div>
        <div class="iconBulletPoints-body"><?php the_sub_field('icon_bullet_points_row_text'); ?></div>
      </div>
    <?php endwhile; ?>
  </div>
</section>


