<div class="sidebar-widget">
<div class="panel panel-default panel-custom">

<div class="panel-heading">
<h3 class="panel-title text-center">
Search
</h3>
</div>

<div class="panel-body text-center">
<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-horizontal form-custom">
<input type="text" class="form-control" name="s" id="search" placeholder="<?php _e("Search","passports_and_shades"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
<button type="submit" class="btn btn-light"><?php _e("Search","passports_and_shades"); ?></button>
</form>
</div>

</div>
</div>