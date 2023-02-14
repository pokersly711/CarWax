			
			<!-- Google Map -->
			<div class="template-component-google-map">
				
				<!-- Content -->
				<div class="template-component-google-map-box">
					<div class="template-component-google-map-box-content"></div>
				</div>
				
			</div>
			
			<script type="text/javascript">

				jQuery(document).ready(function()
				{
					$('.template-component-google-map').templateGoogleMap(
					{
						coordinate		:
						{
							lat			:	'-37.823952',
							lng			:	'144.958766'
						},
						dimension		:
						{
							width		:	'100%',
							height		:	'100%'
						},
						marker			:	'media/image/map_pointer.png'
					});
				});
				
			</script>