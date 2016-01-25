<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ushipnetwork
 *
 * template name: Blog
 */

get_header(); ?>

  <?php if (have_rows('top_content')): ?>
    <?php while (have_rows('top_content')) : the_row(); ?>
      <?php if (get_row_layout() == 'hero'): ?>

        <?php include("template-parts/acf-modules/hero.php");?>

      <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php $cats = get_categories('include=3,4,5,6,7');

    echo '<div class="catmenu">';

    echo '<li class="catall"><a>All Posts</a></li>';

    foreach ($cats as $cat) {
      $cat_id= $cat->term_id;
      echo '<li class="cat'.$cat_id.'">';
      echo '<a>'.$cat->name.'</a>';
      echo '</li>';
    }

    echo '</div>';

    echo '<div class="posts-group">';

    echo '<div class="posts-group-container catall">';
    query_posts("posts_per_page=12");

    if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post">
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="post-featureImage" style="background-image: url('<?php echo $image[0]; ?>')"></div>
      <?php endif; ?>
      <div>
        <?php
        $categories = get_the_category();
        $separator = ', ';
        $output = '';
        if ( ! empty( $categories ) ) {
            foreach( $categories as $category ) {
                $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
            }
            echo trim( $output, $separator );
        }
        ?>
      </div>
      <h4 class="post-title"><?php the_title(); ?></h4>
      <a class="emphasisLink" target="_blank" href="<?php the_permalink();?>">Read Article</a>
    </div>

    <?php endwhile; endif;

    echo '</div>';

    foreach ($cats as $cat) {
      $cat_id= $cat->term_id;
      echo '<div class="posts-container cat'.$cat_id.'">';
      query_posts("cat=$cat_id&posts_per_page=12");

      if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div>
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <div class="post-featureImage" style="background-image: url('<?php echo $image[0]; ?>')"></div>
        <?php endif; ?>
        <div>
          <?php
          $categories = get_the_category();
          $separator = ', ';
          $output = '';
          if ( ! empty( $categories ) ) {
              foreach( $categories as $category ) {
                  $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
              }
              echo trim( $output, $separator );
          }
          ?>
        </div>
        <h4 class="post-title"><?php the_title(); ?></h4>
        <a class="emphasisLink" target="_blank" href="<?php the_permalink();?>">Read Article</a>
      </div>

      <?php endwhile; endif; echo '</div>';?>

    <?php }
    echo '</div>';
  ?>

<?php get_footer(); ?>