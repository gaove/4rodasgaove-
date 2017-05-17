<?php get_header(); ?>

<div class="wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
       <?php if(have_posts()): while (have_posts()): the_post(); ?>
          <div class="page-header post">
             <h1 class="title"><?php the_title(); ?></h1>
             <p><em>
             Por <?php the_author() ;?> 
             em  <?php the_time(' j, F Y');?>
             <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
             </em></p>
             <hr>
             <?php the_content(); ?>
          </div>       
          
          <?php comments_template(); ?>
        <?php endwhile;else:  ?>
          <div class="page-header">
             <h1>Oops!</h1>
          </div>
          <p>Nenhum conteúdo foi encontrado para esta página.</p>
        <?php  endif; ?>
      </div>
      <?php get_sidebar('blog'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>