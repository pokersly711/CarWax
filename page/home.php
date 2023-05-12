

				<!-- Header -->
				<div class="template-header">
<?php Template::includeTemplateHeaderTop(); ?>
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
							<div>On Demand Carwash</div>

                            <span>A new way to shine!</span>

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
                                    Carvenience OnDemand Carwash is a startup company that provides on-demand car wash services to busy individuals who value a clean and well-maintained car. The concept behind Carvenience OnDemand Carwash is to offer a convenient solution for people who want to keep their vehicles clean, but struggle to find the time in their busy schedules to do so.
                                    <br>
                                    With Carvenience OnDemand Carwash, we bring the shine to you. Book a time and location and we come to you. Letting you do the things that are important.
                                    <br>
                                    We understand that our customers' time is valuable, which is why we offer flexible scheduling options and a variety of packages to suit different needs. Our services are available seven days a week, so customers can choose a time that fits their schedule.
                                    <br>
                                    Our mission is to provide an exceptional car wash experience wherever it is convenient for our clients. We believe that a clean and well-maintained car is important in helping people get through their busy schedules. At Carvenience OnDemand Carwash, we value reliability, professionalism, and customer satisfaction.
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
												<li><span class="template-icon-meta-check"></span>We utilize the best products in the industry made by, Chemical Guys.</li>
												<li><span class="template-icon-meta-check"></span>Well trained Shine Specialist, with close attention to detail.</li>
												<li><span class="template-icon-meta-check"></span>We strive on highly secure technology</li>
												<li><span class="template-icon-meta-check"></span>We want to hear from you.</li>
											</ul>
										</li>
										
										<!-- Right column -->
										<li class="template-layout-column-right template-margin-bottom-reset">
											<div class="template-component-space template-component-space-2"></div>
											<span class="template-icon-feature-user-chat"></span>
											<h5>In search of partners</h5>
											<ul class="template-component-list">
												<li><span class="template-icon-meta-check"></span>You love automobiles</li>
												<li><span class="template-icon-meta-check"></span>have close attention to detail,</li>
												<li><span class="template-icon-meta-check"></span>Entrepreneur Spirit</li>
												<li><span class="template-icon-meta-check"></span>Phenomenal Drive</li>
												<li><span class="template-icon-meta-check"></span>Outstanding Personality</li>
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
								<h3>Packages</h3>
								<a href="<?php Template::getPageURL('packagesPrepaid.php'); ?>" class="template-component-button">Limited Time</a>
							</div>
						</div>
						
					</div>
					
					<!-- Section -->
					<div class="template-section template-background-image template-background-image-5 template-background-image-parallax template-color-white template-clear-fix">
						
						<!-- Mian -->
						<div class="template-main">

							<!-- Header + subheader -->
							<div class="template-component-header-subheader">
								<h2>Carvenience Ondemand</h2>
								<div></div>
								<span>We provide the best service at your convenience.</span>
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
										<h5>4. Booking</h5>
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
							<span>External Wash & Wax</span>
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
											<h5>A Ondemand Service</h5>
											<p>A new concept for those with busy schedules. We bring our top grade service to you, whether at your home or work.</p>
										</li>
										
										<!-- Right column -->
										<li class="template-layout-column-right">
											<span class="template-icon-feature-eco-nature"></span>
											<h5>Top Service</h5>
											<p>We gaurantee the same top service to everyone.</p>
										</li>
										
										<!-- Left column -->
										<li class="template-layout-column-left">
											<span class="template-icon-feature-team"></span>
											<h5>Our Shine Specialists</h5>
											<p>All services provided by highly trained individuals with a phenomenal drive and attention to detail.</p>
										</li>
										
										<!-- Right column -->
										<li class="template-layout-column-right">
											<span class="template-icon-feature-spray-bottle"></span>
											<h5>Start-up Packages</h5>
											<p>During our start-up phase, we are offering our services at discounted prices for a limited time.</p>
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
										(+1) 334 326 8734<br/>
										(+1) <br/>
									</p>
								</li>
								
								<!-- Center column -->
								<li class="template-layout-column-center">
									<span class="template-icon-feature-location-map"></span>
									<h5>Our Address</h5>
									<p>
										1208  10th ave<br/>
										Jasper, AL 35501
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