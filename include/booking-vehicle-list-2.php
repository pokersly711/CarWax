
<?php  
/* Microsoft Azure Database PHP login protected page by childofcode.com */

// Initialize the session, Check if the user is logged in, if not then redirect him to login page
session_start();  
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){  
    header("location: login.php");
    exit;
}
?>
<li>
			
			<!-- Content -->
			<div class="template-component-booking-item-content">
				
				<!-- Vehicle list -->
				<ul class="template-component-booking-vehicle-list">
					
					<!-- Vehicle -->
					<li data-id="regular-size-car">
						
						<div>
							
							<!-- Icon -->
							<div class="template-icon-vehicle-small-car"></div>					
							
							<!-- Name -->
							<div>Economy Size</div>
							
						</div>
						
					</li>
					
					<!-- Vehicle -->
					<li data-id="medium-size-car">
						<div>
							<div class="template-icon-vehicle-car-mid-size"></div>					
							<div>Medium Size Car</div>
						</div>
					</li>
					
					<!-- Vehicle -->
					<li data-id="compact-suv">
						<div>
							<div class="template-icon-vehicle-suv"></div>					
							<div>Compact SUV</div>
						</div>
					</li>
					
					<!-- Vehicle -->
					<li data-id="minivan">
						<div>
							<div class="template-icon-vehicle-minivan"></div>					
							<div>Minivan</div>
						</div>
					</li>
					
					<!-- Vehicle -->
					<li data-id="pickup-truck">
						<div>
							<div class="template-icon-vehicle-pickup"></div>					
							<div>Pickup Truck</div>
						</div>
					</li>
					
					<!-- Vehicle -->
					<li data-id="cargo-truck">
						<div>
							<div class="template-icon-vehicle-truck-mid-size"></div>					
							<div>Cargo Truck</div>
						</div>
					</li>
					
				</ul>
				
			</div>
			
		</li>