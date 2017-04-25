<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
            <article class="xiong-single-article">
                <div class="xiong-article-wrapper">
                  <header>
                    <h1><?php the_title( );?></h1>
                  </header>
                  <content>
                    <p><?php the_content( );?></p>
                  </content>
                </div>
            </article>
        
      </div><!--/col8 -->
      <div class="col-md-4">
        <aside class="xiong-post-sidebar">
          



        </aside>
      </div><!--/col4-->
    </div><!--/row -->
  </div><!--/container -->
</section>

<?php endwhile; endif; ?>

<?php get_footer();?>