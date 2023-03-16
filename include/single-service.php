		
		<!-- Header + subheader -->
		<div class="template-component-header-subheader template-align-left">
			<h2>Pre-paid Subscriptions and fleet Packages</h2>
			<div></div>
			<span>Pick your Packages</span>
		</div>	

		<!-- Text -->
		<p class="template-padding-reset">
			Let me Explain
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
					<li><span class="template-icon-meta-check"></span>Multiple car wash locations throughout Portland</li>
					<li><span class="template-icon-meta-check"></span>Biodegradable and eco-friendly products</li>
					<li><span class="template-icon-meta-check"></span>Pay for your wash electronically and securely</li>
					<li><span class="template-icon-meta-check"></span>Trained and skilled car wash crew members</li>
				</ul>
				
			</div>

			<!-- Right column -->
			<div class="template-layout-column-right">
				
				<!-- List -->
				<ul class="template-component-list">
					<li><span class="template-icon-meta-check"></span>We are very open and easy to reach company</li>
					<li><span class="template-icon-meta-check"></span>Our email is checked hourly during the day</li>
					<li><span class="template-icon-meta-check"></span>Book an appointment online under 3 minutes</li>
					<li><span class="template-icon-meta-check"></span>Our tool free number will be answered</li>
					<li><span class="template-icon-meta-check"></span>You can pay online for your appointment</li>
				</ul>
				
			</div>

		</div>

		<!-- Header -->
		<div class="template-component-header-subheader template-align-left">
			<h4>Carlots and Fleets</h4>
			<div></div>
		</div>	

		<!-- Text -->
		<p class="template-padding-reset">
			
		</p>
		<!-- Booking -->
		<div class="template-component-booking template-component-booking-style-2" id="template-booking">

			<form>

				<ul>
								
					<?php Template::includeFile('booking-vehicle-list-3'); ?>
					<?php Template::includeFile('booking-service-list-3'); ?>

				</ul>

			</form>

		</div>
						
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				$('#template-booking').booking();
			});
		</script>