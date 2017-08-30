<?php get_header(); ?>
	<div class='jumbotron'>
		<h2><?php the_title(); ?></h2>
	</div>
	<div class='container'>
		<div class='col-md-8'>
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
		</div>
		<div class='col-md-4'>
			<img src='<?php print get_the_post_thumbnail_url(); ?>' width='100%'>
		</div>
	</div>
<?php get_footer(); ?>