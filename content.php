<article>
  <header class="page-header">
    <div class="col-12 p-0">
		<h2 class="page-title mt-3 mb-0 h2">
			<?php the_title(); ?>
		</h2>
		<hr class="mt-0 mb-4" style="height:2px; background-color:#343a40;">
    </div>
    <div class="col-12 px-0">
      <a href="<?php the_permalink(); ?>" class="post-link">
        <?php the_post_thumbnail(
    'medium',
    array(
'alt' => the_title_attribute('echo=0'),
'title' => the_title_attribute('echo=0'),
'class' => 'card-img img-thumbnail',
)
); ?>
      </a>
    </div>
  </header>

  <section class="entry-content">
    <div class="col-12 p-0 py-3" id="content">
      <?php the_content(); ?>
    </div>
    <?php
    if (is_single()) :
    ?>
    <hr>
    <div id="content_date_author">
      <ul class="list-inline text-right">
        <li class="list-inline-item">
          <time pubdate="pubdate" datetime"<?php the_time('Y-m-d'); ?>" class="entry-date">
              <small class="text-muted">
				  <?php switch_date(); ?>
			</small>
          </time>
        </li>
        <li class="list-inline-item">
          <small class="text-muted">
            <?php the_author_posts_link(); ?></small>
        </li>
      </ul>
    </div>
    <?php
  endif;
    ?>
  </section>
  <!-- /entry-content -->

  <!-- ページ間ナビゲーション -->
  <?php
if (is_single()) :
?>
  <div class="container mb-5">
    <div class="row">
      <div class="col-md-6 text-left">
        <?php next_post_link('%link', '%title<i class="fas fa-chevron-left fa-2x float-left text-secondary"></i>', true); ?>
      </div>
      <div class="col-md-6 text-right">
        <?php previous_post_link('%link', '%title<i class="fas fa-chevron-right fa-2x float-right text-secondary"></i>', true); ?>
      </div>
    </div>
  </div>
  <?php
endif;
?>
  <!-- ページ間ナビゲーション -->
</article>
