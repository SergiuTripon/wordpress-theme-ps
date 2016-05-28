<?php get_header(); ?>

<div class="blog-body col-lg-8 col-md-8 col-sm-12 col-xs-12">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="single-post">
<div class="panel panel-default panel-custom">

<div class="panel-heading">
<h3 class="panel-title">
<?php the_title(); ?>
</h3>
<p class="text-left">
Posted by <b><?php the_author() ?></b> on <b><?php the_time('l, F jS, Y') ?></b> under <b><?php the_category(', ') ?></b>.
</p>
</div>

<div class="panel-body text-justify">
<?php the_content(); ?>
</div>

<div class="panel-footer">
<?php comments_template(); ?>
</div>

</div><!--/.panel-custom -->
</div><!--/.single-post -->

<div class="post-nav clearfix">
<div class="prev-post pull-left">
<?php previous_post_link('%link', '<i class="fa fa-angle-left"></i> %title'); ?>
</div>
<div class="next-post text-right">
<?php next_post_link('%link', '%title <i class="fa fa-angle-right"></i>'); ?>
</div>
</div>

<?php endwhile; else: ?>

<p><?php _e('Sorry, there are no posts.'); ?></p>

<?php endif; ?>

</div><!--/.col-lg-8 -->

<div class="blog-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">

<?php require_once('components/search-box.php'); ?>

<?php get_sidebar(); ?>
</div><!--/.col-lg-4 -->

<?php get_footer(); ?>
