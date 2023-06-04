


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
					<li data-id="small-car">
					
						<div>
							
							<!-- Name -->
							<div>Small Car</div>
						
						</div>
					
					</li>
					
					<!-- Vehicle -->
					<li data-id="medium-car">
						<div>
							<div>Medium Car</div>
						</div>
					</li>
					
					<!-- Vehicle -->
					<li data-id="small-suv">
						<div>
							<div>Small SUV</div>
						</div>
					</li>
					
					<!-- Vehicle -->
					<li data-id="large-suv">
						<div>
							<div>Large Suv</div>
						</div>
					</li>
					
					<!-- Vehicle -->
					<li data-id="truck">
						<div>
							<div>Truck</div>
						</div>
					</li>
					
				</ul>
				
			</div>	
			
		</li>