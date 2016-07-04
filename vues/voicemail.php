<!doctype html>
<html lang="en">
<head>
	<title>Bienvenue chez Beep</title>
	<?php include("./assets/pages/css.php"); ?>
</head>
<body>

<div class="wrapper">
    
	<?php include("./assets/pages/menu.php"); ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Messagerie vocale</h4>
                                <p class="category">Ces messages seront envoyés dans votre boite de messagerie personnelle</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    	<th>Message</th>
                                    </thead>
                                    <tbody>
                                        <tr>
											<?php for($i=0; $i <= 20; $i++){?>
											<td>								
											<audio controls="controls">
											<source src="./voicemail/voicemail/<?php echo $num; ?>/INBOX/msg000<?php echo $i; ?>.wav" type="audio/wav" />
												Votre navigateur n'est pas compatible
											</audio>
											</td>
											<?php } ?>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
						</div>
					</div>
					<?php echo $count_vocale; ?>
					<?php include("./assets/pages/footer.php"); ?>

				</div>
			</div>

			<?php include("./assets/pages/phone.php"); ?>

</body>

    <!--   Core JS Files   -->
    <script src="./assets/pages/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="./assets/pages/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="./assets/pages/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="./assets/pages/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="./assets/pages/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="./assets/pages/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="./assets/pages/js/demo.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="vendor/js/jquery.2.1.0.min.js"><\/script>')</script>
	<script src="./assets/pages/vendor/js/bootstrap.min.js"></script>
	<script src="./assets/pages/js/man.js"></script>


</html>
