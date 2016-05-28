<?php get_header(); ?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="panel panel-default panel-custom">

<div class="panel-heading">
<h3 class="panel-title">
<?php the_title(); ?>
</h3>
</div>

<div class="panel-body text-justify">
<?php the_content(); ?>
</div>

</div>

<?php endwhile; else: ?>

<p><?php _e('Sorry, there are no posts.'); ?></p>

<?php endif; ?>

</div><!--/.col-lg-12 -->

<?php get_footer(); ?>
