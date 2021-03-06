<?php
    session_start();
    include ('functions.php');
    gatekeeper();

    $user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>NJIT MRS | New Request</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
    <link href="/fonts/fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/NJITMRS.jpg);">
					<span class="login100-form-title-1">
                        &nbsp;
					</span>
				</div>

                <nav class="navbar navbar-expand-md navbar-dark navbarColor">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="newrequest.php">New Request</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="myrequests.php">My Requests</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </nav>
                
				<form class="request-form" action="handler_newrequest.php" method="post">
                    <div class="mx-auto">
                        <div class="requestStep">
                            <div class="col=lg-5">
                                <h3>Step 1:</h3>
                                <p>What is the location of your request?</p>
                                <select name="location" class="form-control">
                                    <option value=NULL>(select location)</option>
                                    <option value=NULL>--Residence Halls--</option>
                                    <option value="Cypress Residence Hall">Cypress Residence Hall</option>
                                    <option value="Dorman Residence Hall">Dorman Residence Hall</option>
                                    <option value="Laurel Hall">Laruel Residence Hall</option>
                                    <option value="Oak Residence Hall">Oak Residence Hall</option>
                                    <option value=NULL>--Greek Housing--</option>
                                    <option value="Greek Way 05">Greek Way 05</option>
                                    <option value="Greek Way 07">Greek Way 07</option>
                                    <option value="Greek Way 09">Greek Way 09</option>
                                    <option value="Greek Way 11">Greek Way 11</option>
                                    <option value="Greek Way 13">Greek Way 13</option>
                                    <option value="Greek Way 15">Greek Way 15</option>
                                    <option value="Greek Way 17">Greek Way 17</option>
                                    <option value="Greek Way 19">Greek Way 19</option>
                                    <option value="Greek Way 21">Greek Way 21</option>
                                    <option value="Greek Way 23">Greek Way 23</option>
                                    <option value=NULL>--Other Campus Locations--</option>
                                    <option value="Campbell Hall">Campbell Hall</option>
                                    <option value="Campus Center">Campus Center</option>
                                    <option value="Campus Wide">Campus-Wide</option>
                                    <option value="Central Avenue Building">Central Avenue Building</option>
                                    <option value="Central King Building">Central King Building</option>
                                    <option value="CHEN">CHEN</option>
                                    <option value="Colton Hall">Colton Hall</option>
                                    <option value="Coullimore Hall">Cullimore Hall</option>
                                    <option value="Eberhardt Hall">Eberhardt Hall</option>
                                    <option value="ECEC">ECEC</option>
                                    <option value="EDC1 (240 MLK)">EDC1 (240 MLK)</option>
                                    <option value="EDC2 (105 Lock)">EDC2 (105 Lock)</option>
                                    <option value="EDC3 (211 Warren)">EDC3 (211 Warren)</option>
                                    <option value="Facilities Services Building">Facilities Services Building</option>
                                    <option value="Facilities Services Warehouse">Facilities Services Warehouse</option>
                                    <option value="Faculty Memorial Hall">Faculty Memorial Hall</option>
                                    <option value="Fenster Hall">Fenster Hall</option>
                                    <option value="GITC">GITC</option>
                                    <option value="Grounds">Grounds</option>
                                    <option value="Kupfrian Hall">Kupfrian Hall</option>
                                    <option value="Life Sciences & Engineering Center">Life Sciences & Engineering Center</option>
                                    <option value="Mechanical Engineering Center">Mechanical Engineering Center</option>
                                    <option value="Microelectronics Center">Microelectronics Center</option>
                                    <option value="Naimoli Family Athletic Center">Naimoli Family Athletic Center</option>
                                    <option value="Parking Deck">Parking Deck</option>
                                    <option value="Parking Lots">Parking Lots</option>
                                    <option value="Redwood Residence Hall">Redwood Residence Hall</option>
                                    <option value="Science & Technology Park Garage">Science & Technology Park Garage</option>
                                    <option value="Specht Building">Specht Building</option>
                                    <option value="Tiernan Hall">Tiernan Hall</option>
                                    <option value="Wellness & Events Center">Wellness & Events Center</option>
                                    <option value="Weston Hall">Weston Hall</option>
                                    <option value="York Center">York Center</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="requestStep">
                            <h3>Step 2:</h3>
                            <p>What area is the request in?</p>
                            <div class="wrap-input100 validate-input m-b-26" data-validate="Area is required">
                                <input class="input100" type="text" name="area" placeholder="Back stairwell">
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="requestStep col-12">
                            <h3>Step 3:</h3>
                            <p>Category?</p>
                            <br>
                            <div class="container-fluid">
                                <!--Row-->
                                <div class="row">
                                    <!--Carpentry-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Carpentry">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-hammer"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Carpentry</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Custodial-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Carpentry">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-broom"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Custodial</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Electrical-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Electrical">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-plug"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Electrical</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <!--End Row-->
                                <!--Row-->
                                <div class="row">
                                    <!--Elevators-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Elevators">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-arrow-circle-up"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Elevators</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Equipment-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Equipment">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-tv"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Equipment</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Event Setup-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Event Setup">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-calendar-check"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Event Setup</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <!--End Row-->
                                <!--Row-->
                                <div class="row">
                                    <!--Fire Alarm-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Fire Alarm">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-fire-extinguisher"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Fire Alarm</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Fire Alarm-->
                                    <!--General Maintenance-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="General Maintenance">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-clinic-medical"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">General Maintenance</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--General Maintenance-->
                                    <!--Grounds-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Grounds">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-tractor"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Grounds</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <!--End Row-->
                                <!--Row-->
                                <div class="row">
                                    <!--Health/Safety-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Health/Safety">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Health/Safety</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Health/Safety-->
                                    <!--HVAC-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="HVAC">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-thermometer-half"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">HVAC</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--HVAC-->
                                    <!--Housing-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Housing">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-home"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Housing</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <!--End Row-->
                                <!--Row-->
                                <div class="row">
                                    <!--Key & Lock-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Key & Lock">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-key"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Key & Lock</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Kiln Repair-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Kiln Repair">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-calendar-week"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Kiln Repair</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Lighting-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Lighting">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-lightbulb"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Lighting</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <!--End Row-->
                                <!--Row-->
                                <div class="row">
                                    <!--Miscellaneous-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Miscellaneous">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-question"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Miscellaneous</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Moving-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Moving">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-truck-moving"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Moving</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Painting-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Painting">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-paint-roller"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Painting</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <!--End Row-->
                                <!--Row-->
                                <div class="row">
                                    <!--Pest Control-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Pest Control">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-spider"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Pest Control</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Plumbing-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Plumbing">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-toilet"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Plumbing</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Roof-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Roof">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-house-damage"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Roof</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <!--End Row-->
                                <!--Row-->
                                <div class="row">
                                    <!--Security-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Security">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-shield-alt"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Security</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Special Projects-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Special Projects">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-tasks"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Special Projects</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--Vehicle Maintenance-->
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" class="card-input-element" name="category" value="Vehicle Maintenance">
                                            <div class="card card-input bg-light">
                                                <div class="center-icon">
                                                    <i class="fas fa-car"></i>
                                                </div>
                                                <div class="card-body mx-auto">
                                                    <h6 class="card-title">Vehicle Maintenance</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <!--End Row-->
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="requestStep">
                            <h3>Step 4:</h3>
                            <p>What is the request?</p>
                            <br>
                            <div class="wrap-input100 validate-input m-b-26" data-validate="Description is required">
                                <textarea class="input100" name="description" rows="10" cols="50" placeholder="The sink is broken."></textarea>
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                        <div class="requestStep">
                            <h3>Step 5:</h3>
                            <p>Photos or Videos?</p>
                            <br>
                            <div class="wrap-input100 validate-input m-b-26">
                                <input type="file">
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                    </div>
                    
					<!--<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>-->

					<div class="newrequest-login100-form-btn">
						<button class="request-form-btn mx-auto">
							Submit Request
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>