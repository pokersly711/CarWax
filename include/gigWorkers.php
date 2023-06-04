		
		<?php  
	/* Microsoft Azure Database PHP login protected page by childofcode.com */

	// Initialize the session, Check if the user is logged in, if not then redirect him to login page
	session_start();  
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){  
    		header("location: login.php");
    			exit;
		}
?>
		<!-- Header + subheader -->
		<div class="template-component-header-subheader template-align-left">
			<h2>We are looking for driven individuals<br></br> with a close attention to detail.
			</h2>
			<div></div>
			<span>Great oppurunities for both individuals and pre-existing companies who wan to<br></br>
			want to EXPAND THEIR BUSINESS.</span>
		</div>	

		<!-- Text -->
		<p class="template-padding-reset">
			We utilize todays technology, providing the most secure connection throughout our app. 
		</p>

		<!-- Image -->
		<div class="template-component-image template-component-image-preloader template-margin-top-1 template-margin-bottom-1">
			<a href="media/image/sample/760x506/image_10.jpg">
				<img src="media/image/sample/760x506/image_10.jpg" alt=""/>
				<span class="template-component-image-hover"></span>
			</a>
		</div>
		
		<!-- Layout 50x50% -->
		<div class="template-layout-50x50">

			<!-- Left column -->
			<div class="template-layout-column-left">
				
				<!-- List -->
				<ul class="template-component-list">
					<li><span class="template-icon-meta-check"></span>We offer multiple services at a great value</li>
					<li><span class="template-icon-meta-check"></span>You book the time and location.</li>
					<li><span class="template-icon-meta-check"></span>We come to you and fulfill your order,</li>
					<li><span class="template-icon-meta-check"></span>While your busy with things that are important.</li>
					<li><span class="template-icon-meta-check"></span>Safe and secure process, easy booking.</li>
				</ul>
				
			</div>

			<!-- Right column -->
			<div class="template-layout-column-right">
				
				<!-- List -->
				<!--<ul class="template-component-list">
					<li><span class="template-icon-meta-check"></span>We are very open and easy to reach company</li>
					<li><span class="template-icon-meta-check"></span>Our email is checked hourly during the day</li>
					<li><span class="template-icon-meta-check"></span>Book an appointment online under 3 minutes</li>
					<li><span class="template-icon-meta-check"></span>Our tool free number will be answered</li>
					<li><span class="template-icon-meta-check"></span>You can pay online for your appointment</li>
				</ul>
				-->
			</div>

		</div>

		<!-- Header -->
		<div class="template-component-header-subheader template-align-left">
			<h4>We are a Gig Workers Dream!</h4>
			<div>We are accepting partnerships in locations all over the U.S. </br>
		    If you are a highly motivated individual that </div>
		</div>	

		<!-- Text -->
		<p class="template-padding-reset">
			
		</p>
		<!-- Booking -->
		<div class="template-component-booking template-component-booking-style-2" id="template-booking">

			<form>

				<ul>>
								
					<?php Template::includeFile(''); ?>
					<?php Template::includeFile(''); ?>

				</ul>

			</form>

		</div>
						
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$('#template-booking').booking();
							});
						</script>