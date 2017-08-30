<?php get_header(); ?>

<?php //The banner Section ?>
<?php $query = new WP_Query(array('category_name' => 'homepage_slider', 'posts_per_page' => 1)); ?>
<?php if($query->have_posts()): ?>
	<?php while($query->have_posts()): $query->the_post(); ?>
		<?php if(has_post_thumbnail()): ?>
			<div class='banner' style='background-image:url("<?php print get_the_post_thumbnail_url(); ?>")'>
				<div class='overlay'>
					<div class='container'>
						<div class='wrap wow fadeInLeft'>
							<h2><?php the_title(); ?></h2>
							<h4><?php the_content(); ?></h4>
						</div>
					</div>
				</div>
			</div>
		<?php else: ?>
			<div class='jumbotron'>
				<div class='container'>
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<div class='jumbotron'>
		<div class='container'>
			<h2><?php print get_blogInfo('name'); ?></h2>
		</div>
	</div>
<?php endif; ?>
<?php wp_reset_query(); ?>

<?php //The homepage services section. ?>
<div class='container'>
	<br><br>
	<div class='row'>
		<?php $query = new WP_Query(array('category_name' => 'homepage_services', 'posts_per_page' => 6)); ?>
		<?php if($query->have_posts()): ?>
			<?php while($query->have_posts()): $query->the_post(); ?>
				<a href='<?php the_permalink(); ?>'>
					<div class='col-md-4'>
						<div class='thumbnail'>
							<?php if(has_post_thumbnail()): ?>
								<div style='background-image: url("<?php print get_the_post_thumbnail_url(); ?>"); background-size: 100% 100%; width: 100%; height: 200px;'></div>
							<?php else: ?>
								<img src='http://hdimages.org/wp-content/uploads/2017/03/placeholder-image10.jpg' width='100%'>
							<?php endif; ?>
							<h3><?php the_title(); ?></h3>
							<p style='text-decoration: none;'><?php the_content(); ?></p>
						</div>
					</div>
				</a>
	 		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<br>

<?php //The homepage second slider ?>
<?php $query = new WP_Query(array('category_name' => 'homepage_secondary_slider', 'posts_per_page' => 1)); ?>
<?php if($query->have_posts()): ?>
	<?php while($query->have_posts()): $query->the_post(); ?>
		<?php if(has_post_thumbnail()): ?>
			<div class='banner' style='background-image: url("<?php print get_the_post_thumbnail_url(); ?>");'>
				<div class='overlay'>
					<div class='container'>
						<div class='wrap wow fadeInRight'>
							<h2 class='text-right'><?php the_title(); ?></h2>
							<h4 class='text-right'><?php the_content(); ?></h4>
						</div>
					</div>
				</div>
			</div>
		<?php else: ?>
			<div class='jumbotron'>
				<div class='container'>
					<h2><?php the_title(); ?></h2>
					<h4><?php the_content(); ?></h4>
				</div>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php //The About Us Section ?>
<?php $query = new WP_Query(array('category_name' => 'homepage_about_us', 'posts_per_page' => 1)); ?>
<?php if($query->have_posts()): ?>
	<?php while($query->have_posts()): $query->the_post(); ?>
		<br><br>
		<div class='container'>
			<div class='row'>
				<div class='col-md-8'>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
				<div class='col-md-4'>
					<br>
					<?php if(has_post_thumbnail()): ?>
						<img src='<?php print get_the_post_thumbnail_url(); ?>' width='100%'>
					<?php else: ?> 
						<img src='http://hdimages.org/wp-content/uploads/2017/03/placeholder-image10.jpg' width='100%'>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
