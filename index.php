<?php get_header(); ?>

<div class="blog-body col-lg-8 col-md-8 col-sm-12 col-xs-12">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="blog-post">
<div class="panel panel-default panel-custom">

<div class="panel-heading">
<h3 class="panel-title">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h3>
</div>

<div class="panel-body text-justify">
<?php the_content(); ?>
</div>

<div class="panel-footer">
<div class="text-left">
Posted by <b><?php the_author() ?></b> on <b><?php the_time('l, F jS, Y') ?></b> under <b><?php the_category(', ') ?></b>.
</div>
</div>

</div><!--/.panel-custom -->
</div><!--/blog-post -->

<?php endwhile; else: ?>

<p><?php _e('Sorry, there are no posts.'); ?></p>

<?php endif; ?>

<div class="post-nav clearfix">
<div class="prev-page pull-left">
<?php next_posts_link('<i class="fa fa-angle-left"></i> Older'); ?>
</div>
<div class="next-page text-right">
<?php previous_posts_link('Newer <i class="fa fa-angle-right"></i>'); ?>
</div>
</div>

</div><!--/.col-lg-8 -->

<div class="blog-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">

<?php require_once('components/search-box.php'); ?>

<?php get_sidebar(); ?>
</div><!--/.col-lg-4 -->

<?php get_footer(); ?>
