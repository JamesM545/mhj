<?php get_header(); ?>
	<br><br><br><br>
	<div class='jumbotron'>
		<div class='container'>
			<h2><?php the_title(); ?></h2>
		</div>
	</div>
	<div class='container'>
		<div class='row'>
			<div class='col-md-8'>
				<br><br>
				<?php while(have_posts()): the_post(); ?>
					<p><?php the_content(); ?></p>
				<?php endwhile; ?>
			</div>
			<div class='col-md-4'>
				<?php if(has_post_thumbnail()): ?>
					<br><br><br>
					<img src='<?php print get_the_post_thumbnail_url(); ?>' width='100%'>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>