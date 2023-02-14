
		
				<!-- Header -->
				<div class="template-header template-header-background template-header-background-4">
<?php
		Template::includeTemplateHeaderTop();
		Template::includeTemplateHeaderBottom('Gallery',array(array(Template::getPageURL('home',false),'Home'),array('#','Gallery')));
?>
				
				</div>

				<!-- Content -->
				<div class="template-content">
					
					<!-- Section -->
					<div class="template-section template-section-padding-1 template-main template-align-center">
						<?php Template::includeFile('gallery-1'); ?>
					</div>
					
					<!-- Google Maps -->
					<div class="template-section template-section-padding-reset template-clear-fix">
						<?php Template::includeFile('google-map-1'); ?>
					</div>
					
				</div>