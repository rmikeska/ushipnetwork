<ul class="share-list">
  <li class="facebook">
     <a target="_blank" class="share-icon share-icon-facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>"></a>
  </li>
  <li class="twitter">
     <a target="_blank" class="share-icon share-icon-twitter" href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>: <?php the_permalink(); ?>"></a>
  </li>
  <li class="linkedin">
     <a target="_blank" class="share-icon share-icon-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&amp;source=LinkedIn"></a>
  </li>
</ul>