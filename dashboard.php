<?php
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    ini_set('display_errors' , 1);
    include ('functions.php');
    gatekeeper();

    $user = $_SESSION['user'];
    $building = getBuilding($user);
    $room = getRoom($user);
    $role = getRole($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>NJIT MRS | Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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

				<form class="request-form validate-form" action="#">
                    <div class="row">
                        <div>
                            <h3>Dashboard:</h3>
                            <p>What would you like to do?</p>
                            <br>
                            <div class="mx-auto" id="accountPreview">
                                <?php
                                    echo "<h5>Hello $user</h5>";
                                    echo "<p>You are a <b>$role</b>.<br>You live in <b>$building</b>, in room <b>$room</b>.</p>";
                                ?>
                            </div>
                            <br>
                            
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

					<div class="request-login100-form-btn">
						<a class="request-form-btn mx-auto" href="newrequest.php">
							New Request
						</a>
                        <a class="request-form-btn mx-auto" href="myrequests.php">
							My Requests
						</a>
                        <!--if staff member-->
                        <?php
                        if ($role != 'Resident'){
                            echo "<a class='request-form-btn mx-auto' href='allrequests.php''> All Requests </a>";
                        }
                        if ($role == 'Maintenance Employee'){
                            echo "<a class='request-form-btn mx-auto' href='management.php''> Management Portal </a>";
                        }
                        ?>
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