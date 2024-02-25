<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
		<div class='container-fluid'>
			<a class='navbar-brand  ' href='index.php'>Students</a>
			<!-- <img src='images/logo.png' alt='BrandName' width='30' height='30'> -->
			<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
				<span class='navbar-toggler-icon'></span>
			</button>
			<div class='collapse navbar-collapse text-center' id='navbarSupportedContent'>
				<ul class='navbar-nav me-auto mb-2 mb-lg-0'>
					<?php
					if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
						echo "
								<li class='nav-item'>
										<a class='nav-link active ' href='index.php'>All Students</a>
										</li>
								<li class='nav-item'>
										<a class='nav-link active ' href='add_student.php'>Add Student</a>
										</li>
										";
					}
					?>
				</ul>

				<?php
				if (!isset($_SESSION['loggedin'])) {
					echo "<a href='login.php' class='btn btn-primary' >Login</a>";
				} else {
					echo "
							<div class='btn-group'>
							<button id='userMenu' type='button' class='btn btn-primary dropdown-toggle ' data-bs-toggle='dropdown' aria-expanded='false' value=''>
							User
							</button>
							<ul class='dropdown-menu dropdown-menu-end'>
							<li><a class='dropdown-item ' href='change_password.php'>Change Password</a></li>
							<li><a class='dropdown-item ' href='logout.php'>Logout</a></li>
							</ul>
							</div>";
				}
				?>
			</div>
		</div>
	</nav>
	<style>
		body {
			font-family: 'Poppins', sans-serif;
		}

		.dropdown:hover .dropdown-menu {
			display: block;
		}

		@media only screen and (min-width: 960px) {
			.navbar .navbar-nav .nav-item .nav-link {
				padding: 0 0.5em;
			}

			.navbar .navbar-nav .nav-item:not(:last-child) .nav-link {
				border-right: 1px solid #f8efef;
			}
		}
	</style>
	<?php
	if (isset($_SESSION['alert'])) {
		$alert_type = $_SESSION['alert'][0];
		$alert_message = $_SESSION['alert'][1];
		echo "<div class='alert alert-$alert_type' role='alert'><b>$alert_message</b></div>";
		unset($_SESSION['alert']);
	}
	?>