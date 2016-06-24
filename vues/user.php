<!doctype html>
<html lang="en">
<head>
	<title>Bienvenue chez Beep</title>
	<?php include("./assets/pages/css.php"); ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="lienvers/html2canvas.js"></script>
</head>
<body>

<div class="wrapper">
    
	<?php include("./assets/pages/menu.php"); ?>
		
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Modifications du profil</h4>
                            </div>
                            <div class="content">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Numéro de téléphone</label>
                                                <input type="text" class="form-control" disabled placeholder="extension" value="1010">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Login</label>
                                                <input type="text" class="form-control" name="login" disabled placeholder="Login" value="michael23">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Adresse Mail</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" class="form-control" placeholder="Nom" name="nom" value="Mike">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Prénoms</label>
                                                <input type="text" class="form-control" placeholder="Prénoms" name="prenoms" value="Andrew">
                                            </div>
                                        </div>
										<div class="col-md-3">
                                            <div class="form-group">
                                                <label>Numéro de transfert</label>
                                                <input type="text" class="form-control" placeholder="Numéro" value="012564632">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Addresse</label>
                                                <input type="text" class="form-control" placeholder="Adresse" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Ville</label>
                                                <input type="text" class="form-control" placeholder="Ville" value="Paris">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pays</label>
                                                <input type="text" class="form-control" placeholder="Pays" value="France">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Code Postal</label>
                                                <input type="number" class="form-control" placeholder="Code Postal" value="75000">
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Image de Profil</label>
												<input id="input-3a" type="file" class="file" readonly="true" name="photo" class="btn btn-info">
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Petite description</label>
                                                <textarea rows="5" class="form-control" placeholder="Description" name="description">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                            </div>
                                        </div>
                                    </div>
									<button type="submit" value="apercu" id="apercu" name="apercu" class="btn btn-info-outline"><i class="fa fa-eye"></i></button>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">MODIFIER</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
						<center><label><h3>Apercu</h3></label></center>
						<?php
							// on teste la déclaration de nos variables
							if (isset($_POST['apercu'])) {
								// on enregistre les resultats
								$nom = $_POST['nom'];
								$prenoms = $_POST['prenoms'];
								$description = $_POST['description'];
								$photo = $_POST['photo'];
						?>
						<div class="card card-user" id="ma-div" class="ma-div">
                            <div class="image">
                                <img src="./assets/img/back.jpg" alt="font"/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="./assets/img/faces/face-1.jpg" alt="..."/>
                                      <h4 class="title"><?php echo $nom ?> <?php echo $prenoms ?><br />
                                         <small>michael23</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "<?php echo $description ?>"</p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
						
						<center>
							<form method=POST>
								<button type="submit" id="enregistrer" name="enregistrer" class="btn btn-info-outline"><i class="fa fa-arrow-down"></i></button>
							</form>
						</center>
                    </div>
					<?php } ?>

                </div>
            </div>
        </div>
		
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
		
	<script language="javascript">
	$("#enregistrer").click(function() {
		var capture = {};
		var target = $('#ma-div');
		html2canvas(target, {
			onrendered: function(canvas) {
				capture.img = canvas.toDataURL( "image/png" );
				capture.data = { 'image' : capture.img };
				$.ajax({
				url: "/ajax.php",
				data: capture.data,
				type: 'post',
				success: function( result ) {
					console.log( result );
				}
				});
			}
		});
	});
	</script>
	
	<?php
		$save = str_replace('data:image/png;base64,', '', $_POST['image'] );
		file_put_contents( 'img/image.png', base64_decode( $save ) );
	?>

</html>
