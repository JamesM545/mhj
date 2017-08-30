		<br><br><br><br>
		<footer>
		    <div class="footer" id="footer">
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-3  col-md-3 col-sm-8 col-xs-6">
		                    <h3>Our Address</h3>
		                    <ul>
		                        <li>Mark Harris Joinery</li>
								<li>23 Marshall Drive/li>
								<li>Bramcote</li>
								<li> Nottingham,NG9 3LE<</li>
								<li><a href='mailto:info@yourcompanyhere.co.uk'>info@yourcompanyemailhere.co.uk</a></li>
		                    </ul>
		                </div>
		                <div class="col-lg-4  col-md-2 col-sm-4 col-xs-6">
		                    <h3>About Timber</h3>
		                    <p>All our timber is FSC/PEFC from sustainable sources. we serve a wide customer base from our trade centre in Newark-on-Trent Nottinghamshire. From trade to DIY, at Newark Timber Supplies, Nottingham</p>
		                </div>
		                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
		                    <h3>Pages</h3>
		                    <ul>
		                    	<li><a href='<?php print get_blogInfo("url"); ?>'>Home</a></li>
		                    	<?php $query = new WP_Query(array('post_type' => 'page', 'posts_per_page' => 5)); ?>
		                    	<?php if($query->have_posts()): ?>
		                    		<?php while($query->have_posts()): $query->the_post(); ?>
				                        <li> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </li>
				                    <?php endwhile; ?>
			                    <?php endif; ?>
			                    <?php wp_reset_query(); ?>
		                    </ul>
		                </div>
		                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
		                    <h3>Our Newsletter</h3>
		                    <ul>
		                        <li>
		                            <div class="input-append newsletter-box text-center">
		                                <input type="text" class="full text-center form-control" placeholder="Email ">
		                                <button class="btn  bg-gray" type="button">Subscribe <i class="fa fa-long-arrow-right"> </i> </button>
		                            </div>
		                        </li>
		                    </ul>
		                    <ul class="social">
		                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
		                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
		                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
		                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
		                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
		                    </ul>
		                </div>
		            </div>
		            <!--/.row--> 
		        </div>
		        <!--/.container--> 
		    </div>
		    <!--/.footer-->
		    
		    <div class="footer-bottom">
		        <div class="container">
		            <p class="pull-left"> Copyright © <?php print get_blogInfo('name'); ?> <?php print date('Y'); ?>. All right reserved. </p>
		            <div class="pull-right">
		                <ul class="nav nav-pills payments">
		                    <li><i class="fa fa-cc-visa"></i></li>
		                    <li><i class="fa fa-cc-mastercard"></i></li>
		                    <li><i class="fa fa-cc-amex"></i></li>
		                    <li><i class="fa fa-cc-paypal"></i></li>
		                </ul> 
		            </div>
		        </div>
		    </div>
		    <!--/.footer-bottom--> 
		</footer>
	</body>
</html>
