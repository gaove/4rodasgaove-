<?php 
/* 
  Template Name: Front Page Template
*/ 
?>
<?php get_header(); ?>
<div class="wrap">
  <div class="jumbotron">
    <div class="container">
      <?php if(have_posts()): while (have_posts()): the_post(); ?>

        <?php the_content(); ?> 

        <!-- INSERT CONTENT INTO FRONT PAGE TEMPLATE -->
        
        <!-- <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-default btn-lg" role="button">Learn more &raquo;</a></p> -->

      <?php endwhile; endif; ?>
    </div>
  </div>

  <div class="container widget-front">
    <div class="row">
      <div class="col-md-4 widget-front-box">
        <div class="box-info">
        <?php if(dynamic_sidebar('front-left')) ?>
            
           <!-- USE THE WIDGET AREA TO INSERT CONTENT -->

                 <!--  <h3>Heading</h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->

        </div>
      </div>
      <div class="col-md-4 widget-front-box">
        <div class="box-info">
        <?php if(dynamic_sidebar('front-center')) ?>

          <!-- USE THE WIDGET AREA TO INSERT CONTENT -->

                <!--  <h3>Heading</h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->

        </div>
      </div>
      <div class="col-md-4 widget-front-box">
        <div class="box-info">
        <?php if(dynamic_sidebar('front-right')) ?>
          
         <!--  USE THE WIDGET AREA TO INSERT CONTENT -->

                <!--  <h3>Heading</h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
            
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>