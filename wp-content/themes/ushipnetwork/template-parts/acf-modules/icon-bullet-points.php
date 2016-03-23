<section class="iconBulletPoints">
  <div class="iconBulletPoints-container">
    <?php while(have_rows('icon_bullet_points_row')): the_row(); ?>
      <div class="iconBulletPoints-row">
        <div class="iconBulletPoints-icon">
          <?php include("icons.php");?>
        </div>
        <div class="iconBulletPoints-text">
          <h5 class="iconBulletPoints-text-title"><?php the_sub_field('icon_bullet_points_row_title'); ?></h5>
          <div class="iconBulletPoints-text-body"><?php the_sub_field('icon_bullet_points_row_text'); ?></div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>


