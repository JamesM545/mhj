
<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>
	<br><br><br>
	<div class='jumbotron'>
		<div class='container'>
			<h2><?php the_title(); ?></h2>
		</div>
	</div>
	<div class='container'>
		<div class='row'>
			<div class='col-md-8'>
				<div class='panel panel-default'>
					<div class='panel-heading'>
						Fill out the form below
					</div>
					<div class='panel-body'>
						<div class='row'>
							<div class='col-md-6'>
								<div class='form-group'>
									<lable>First Name</lable>
									<input type='text' class='form-control' name='first_name'>
								</div>
							</div>
							<div class='col-md-6'>
								<div class='form-group'>
									<lable>Last Name</lable>
									<input type='text' class='form-control' name='last_name'>
								</div>
							</div>
						</div>
						<div class='row'>
							<div class='col-md-6'>
								<div class='form-group'>
									<lable>Email Address</lable>
									<input type='email' class='form-control' name='email'>
								</div>
							</div>
							<div class='col-md-6'>
								<div class='form-group'>
									<lable>Phone Number</lable>
									<input type='phone' class='form-control' name='phone'>
								</div>
							</div>
						</div>
						<div class='row'>
							<div class='col-md-12'>
								<div class='from-group'>
									<lable>Enter a message</lable>
									<textarea class='form-control' name='
									message'></textarea>
								</div>
							</div>
						</div>
						<div class='row'>
							<div class='col-md-12'>
								<br>
								<div class='form-group'>
									<input type='submit' class='btn btn-success pull-right' value='Send'>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='col-md-4'>
				<div class='panel panel-default'>
				<div class='panel-heading text-center'>
					Call Or Email Us
				</div>
				<div class='panel-body'>
		          <h3 class='' style='margin-top: 26px'>01636 707522</h3>
		          <p>
		            <b>Opening Hours:</b>
		            <br>
		            Monday - Friday, 9am - 5pm
		            <br>
		            Weekend, Closed
		          </p>
		          <p>
		            For any out of hours issues, please leave a message and we will get back to you
		          </p>
		          <p style='font-size: 16px'>
		            <b>For Sales</b>
		            <br>
		            <a href="mailto:sales@newarkts.co.uk">
		              sales@newarkts.co.uk
		            </a>
		          </p>
		          <br><br>
				</div>
			</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>