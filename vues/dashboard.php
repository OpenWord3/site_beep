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
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Utilisations de votre ligne</h4>
                                <p class="category">Consommation hebdomadaire</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Lundi
                                        <i class="fa fa-circle text-danger"></i> Mardi
                                        <i class="fa fa-circle text-warning"></i> Mercredi
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Dernière mise à jour il y'a 2 minutes
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Votre consommation</h4>
                                <p class="category">Consommation mensuelle </p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>
								
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Interne à la société
                                        <i class="fa fa-circle text-danger"></i> Externe à la société
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Dernière mise à jour il y'a 28 jours
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Mes derniers appels</h4>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="" data-toggle="checkbox">
                                                    </label>
                                                </td>
                                                <td>Hassane</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Rappeler" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Effacer" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    </label>
                                                </td>
                                                <td>Steephenraaj : 28 minutes</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Rappleler" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Effacer" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Mise à jour il y'a 3 minutes
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<h2>Votre consommation téléphonique pour aujourd'hui</h2>
<?php  echo "<img src='$graph_day'>"; ?>
		<h2>Votre consommation voix pour ce mois</h2>		
		<h2>Votre consommation téléphonique pour cette semaine</h2>
<?php  echo "<img src='$graph_week'>"; ?>
		<h2>Votre consommation voix pour ce mois</h2>
			<?php echo $total_consomation[0], "secondes"; ?>

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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Bienvenue sur Beep client <?PHP echo "$pseudo" ?>."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="vendor/js/jquery.2.1.0.min.js"><\/script>')</script>
	<script src="./assets/pages/vendor/js/bootstrap.min.js"></script>
	<script src="./assets/pages/js/man.js"></script>

</html>
