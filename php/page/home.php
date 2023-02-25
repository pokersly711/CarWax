

				<!-- Header -->
				<div class="template-header">
<?php
		Template::includeTemplateHeaderTop();
?>
					<div class="template-header-bottom">
						<?php Template::includeFile('slider'); ?>
					</div>
					
				</div>

				<!-- Content -->
				<div class="template-content">

					<!-- Section -->
					<div class="template-section template-section-padding-1 template-clear-fix template-main">
						
						<!-- Header + subheader -->
						<div class="template-component-header-subheader">
							<h2>Carvenience</h2>
							<div></div>
							<span>On Demand &amp; Carwash</span>
						</div>	
						
						<!-- Layout 33x66% -->
						<div class="template-layout-33x66 template-clear-fix">
							
							<!-- Left column -->
							<div class="template-layout-column-left">
								<img src="media/image/sample/460x678/image_01.JPG" alt=""/>
							</div>
							
							<!-- Right column -->
							<div class="template-layout-column-right">
								
								<!-- Text -->
								<p class="template-padding-reset">
									We are one of the first on-demand 
									automotive service providers in the 
									U.S. We use the best products in the industry from Chemical Guys Inc. By trained gig workers, who love your automobiles shine just as much as you do.
									Our company was founded back in 2021 by James Russell, CEO, of JHR Enterprises LLC. Who takes special interest in the environment. 
									We utilize todays technology and tomorrows innovation to bring our services to you. Our goal is to provide our customers with the friendliest, most convenient 
									Automotive service experience possible. 
									Our products are all biodegradable and eco-friendly.
								</p>
																
								<!-- Feature list -->
								<div class="template-component-feature-list template-component-feature-list-position-top template-clear-fix">
									
									<!-- Layout 50x50% -->
									<ul class="template-layout-50x50 template-clear-fix">
										
										<!-- Left column -->
										<li class="template-layout-column-left template-margin-bottom-reset">
											<div class="template-component-space template-component-space-2"></div>
											<span class="template-icon-feature-water-drop"></span>
											<h5>The Best Car Wash</h5>
											<ul class="template-component-list">
												<li><span class="template-icon-meta-check"></span>We offer multiple services at a great value</li>
												<li><span class="template-icon-meta-check"></span>booking online with future mobile app is under development.</li>
												<li><span class="template-icon-meta-check"></span>Biodegradable and eco-friendly products</li>
												<li><span class="template-icon-meta-check"></span>Utilizing payments through electronically with security at the front of our mind.</li>
												<li><span class="template-icon-meta-check"></span>Trained and skilled car wash crew members</li>
											</ul>
										</li>
										
										<!-- Right column -->
										<li class="template-layout-column-right template-margin-bottom-reset">
											<div class="template-component-space template-component-space-2"></div>
											<span class="template-icon-feature-user-chat"></span>
											<h5>Contacting Us</h5>
											<ul class="template-component-list">
												<li><span class="template-icon-meta-check"></span>We are very open and easy to reach company</li>
												<li><span class="template-icon-meta-check"></span>Our email is checked hourly during the day</li>
												<li><span class="template-icon-meta-check"></span>Book an appointment online under 3 minutes</li>
												<li><span class="template-icon-meta-check"></span>Our toll free number will be answered</li>
												<li><span class="template-icon-meta-check"></span>You can pay online for your appointment</li>
											</ul>											
										</li>
										
									</ul>
									
								</div>
								
							</div>
								
						</div>
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-section-padding-reset template-clear-fix template-background-color-1">
						
						<!-- Call to action -->
						<div class="template-component-call-to-action">
							<div class="template-main">
								<h3>Convenient and Secure!</h3>
								<a href="<?php Template::getPageURL('book-your-wash'); ?>" class="template-component-button">Book Now</a>
							</div>
						</div>
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-background-image template-background-image-5 template-background-image-parallax template-color-white template-clear-fix">
						
						<!-- Mian -->
						<div class="template-main">

							<!-- Header + subheader -->
							<div class="template-component-header-subheader">
								<h2>On Demand Carwash</h2>
								<div></div>
								<span>We know your time is valuable</span>
							</div>	

							<!-- Space -->							
							<div class="template-component-space template-component-space-1"></div>
							
							<!-- Process list -->							
							<div class="template-component-process-list template-clear-fix">
								
								<!-- Layout 25x25x25x25% -->
								<ul class="template-layout-25x25x25x25 template-clear-fix template-layout-margin-reset">
									
									<!-- Left column -->
									<li class="template-layout-column-left">
										<span class="template-icon-feature-check"></span>
										<h5>1. Package</h5>
										<span class="template-icon-meta-arrow-large-rl"></span>
									</li>
									
									<!-- Center left column -->
									<li class="template-layout-column-center-left">
										<span class="template-icon-feature-car-check"></span>
										<h5>2. Time</h5>
										<span class="template-icon-meta-arrow-large-rl"></span>
									</li>
									
									<!-- Center right column -->
									<li class="template-layout-column-center-right">
										<span class="template-icon-feature-payment"></span>
										<h5>3. Location</h5>
										<span class="template-icon-meta-arrow-large-rl"></span>
									</li>
									
									<!-- Right column -->
									<li class="template-layout-column-right">
										<span class="template-icon-feature-vacuum-cleaner"></span>
										<h5>4. Book</h5>
									</li>
									
								</ul>
								
							</div>
							
						</div>
							
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-section-padding-1 template-clear-fix template-main">
						
						<!-- Header + subheader -->
						<div class="template-component-header-subheader">
							<h2>Wash Packages</h2>
							<div></div>
							<span>Which wash is the best for your vehicle?</span>
						</div>	
						
						<!-- Booking -->
						<div class="template-component-booking" id="template-booking">

							<form>

								<ul>
									
									<?php Template::includeFile('booking-vehicle-list-2'); ?>
									<?php Template::includeFile('booking-package-list-2'); ?>

								</ul>

							</form>

						</div>
						
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$('#template-booking').booking();
							});
						</script>
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-section-padding-reset template-clear-fix">
						
						<!-- Flex layout 50x50% -->
						<div class="template-layout-flex template-background-color-1 template-clear-fix">

							<!-- Left column -->
							<div class="template-background-image template-background-image-1"></div>

							<!-- Right column -->
							<div class="template-section-padding-1">
								
								<!-- Features list -->
								<div class="template-component-feature-list template-component-feature-list-position-top">
									
									<!-- Layout 50x50% -->
									<ul class="template-layout-50x50 template-clear-fix">
										
										<!-- Left column -->
										<li class="template-layout-column-left">
											<span class="template-icon-feature-location-map"></span>
											<h5>Convenience</h5>
											<p>We are dedicated to providing quality service, customer satisfaction at a great value at you convenient location and time.</p>
										</li>
										
										<!-- Right column -->
										<li class="template-layout-column-right">
											<span class="template-icon-feature-eco-nature"></span>
											<h5>Organic products</h5>
											<p>Our products are eco-friendly and interior products are all organic. We use less than a gallon of water with absolutely zero-waste.</p>											
										</li>
										
										<!-- Left column -->
										<li class="template-layout-column-left">
											<span class="template-icon-feature-team"></span>
											<h5>Experienced Team</h5>
											<p>Our crew members are all trained and skilled and fully equiped with equipment and supplies needed that we can deliver the best results.</p>											
										</li>
										
										<!-- Right column -->
										<li class="template-layout-column-right">
											<span class="template-icon-feature-spray-bottle"></span>
											<h5>Great Value</h5>
											<p>We offer multiple services at a great value to meet your needs. We offer a premium service while saving your time and money.</p>											
										</li>
										
									</ul>
									
								</div>

							</div>

						</div>
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-clear-fix template-main">
						
						<!-- Header + subheader -->
						<div class="template-component-header-subheader">
							<h2>Latest Projects</h2>
							<div></div>
							<span>Car wash gallery</span>
						</div>	
						
						<?php Template::includeFile('gallery-1'); ?>
						
						<!-- Button -->
						<div class="template-align-center">
							<a href="<?php Template::getPageURL('gallery'); ?>" class="template-component-button">Browse More Projects</a>
						</div>
						
					</div>		
					
					<!-- Section -->
					<div class="template-section template-section-padding-reset template-clear-fix">
						
						<!-- Flex layout 50x50% -->
						<div class="template-layout-flex template-clear-fix template-background-color-1">
							
							<!-- Left column -->
							<div>
								
								<!-- Header + subheader -->
								<div class="template-component-header-subheader">
									<h2>Testimonials</h2>
									<div></div>
									<span>Our customers love us</span>
								</div>		
								
								<!-- Space -->		
								<div class="template-component-space template-component-space-2"></div>
								
								<!-- Testimonials list -->							
								<div class="template-component-testimonial-list template-clear-fix">
									
									<!-- Content -->
									<ul class="template-clear-fix">
										<li>
											<p>I could not be happier with the job you did on my car. It looks great. Thank you for your great service and I will continue to refer friends and family to you all.</p>
											<h6>Dotti Newman</h6>
											<span>Audi Q5</span>
										</li>
										<li>
											<p>I think Auto Spa is the best car washers ever. Love the price, convenience and customer service. Thanks so much! My car looks like new. I will definitely come again.</p>
											<h6>David Magnus</h6>
											<span>Nissan Titan X5</span>
										</li>
										<li>
											<p>Finally a car wash that does pay attention to the detail. I have a little extra time and money and I let them do the full detail and it always has turned out great.</p>
											<h6>Josh Williams</h6>
											<span>Toyota Avensis</span>
										</li>
									</ul>
									
									<!-- Navigation -->
									<div class="template-component-testimonial-list-navigation">
										<a href="#" class="template-component-testimonial-list-navigation-left template-icon-meta-arrow-large-rl"></a>
										<span class="template-component-testimonial-list-navigation-center template-icon-feature-testimonials"></span>
										<a href="#" class="template-component-testimonial-list-navigation-right template-icon-meta-arrow-large-rl"></a>
									</div>
									
								</div>
								
							</div>
							
							<!-- Right column -->
							<div class="template-background-image template-background-image-2 template-color-white">
							
								<!-- Header + subheader -->
								<div class="template-component-header-subheader">
									<h2>Recent News</h2>
									<div></div>
									<span>Recent from the blog</span>
								</div>
								
								<!-- Recent posts list -->
								<ul class="template-component-recent-post">
									<li>
										<a href="<?php Template::getPageURL('single-post-right-sidebar'); ?>">
											<span>How to choose car detailing company</span>
											<span>April 14, 2015</span>
										</a>
									</li>
									<li>
										<a href="<?php Template::getPageURL('single-post-right-sidebar'); ?>">
											<span>Interior car wash and detailing service</span>
											<span>March 25, 2015</span>
										</a>
									</li>
									<li>
										<a href="<?php Template::getPageURL('single-post-right-sidebar'); ?>">
											<span>How to book a car wash online</span>
											<span>March 05, 2015</span>
										</a>
									</li>
								</ul>
								
							</div>
							
						</div>
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-section-padding-1 template-clear-fix template-main">
						
						<!-- Features list -->
						<div class="template-component-feature-list template-component-feature-list-position-left template-clear-fix">
							
							<!-- Layout 33x33x33% -->
							<ul class="template-layout-33x33x33 template-clear-fix">
								
								<!-- Left column -->
								<li class="template-layout-column-left">
									<span class="template-icon-feature-phone-circle"></span>
									<h5>Call Us At</h5>
									<p>
										(+505) 122 225 225<br/>
										(+505) 122 225 224<br/>
									</p>
								</li>
								
								<!-- Center column -->
								<li class="template-layout-column-center">
									<span class="template-icon-feature-location-map"></span>
									<h5>Our Address</h5>
									<p>
										464 Rhode Island Av.<br/>
										Portland, OR 97219
									</p>
								</li>
								
								<!-- Right column -->
								<li class="template-layout-column-right">
									<span class="template-icon-feature-clock"></span>
									<h5>Working hours</h5>
									<p>
										Monday - Friday: 8 am - 6 pm<br/>
										Saturday: 8 am - 3 pm
									</p>
								</li>
								
							</ul>
						</div>
						
					</div>
					
					<!-- Google Maps -->
					<div class="template-section template-section-padding-reset template-clear-fix">
						<?php Template::includeFile('google-map-1'); ?>
					</div>
					
				</div>