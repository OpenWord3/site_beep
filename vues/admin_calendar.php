<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Tableau de bord - Beep</title>

	<?php include ("./assets/pages/admin_css.php") ?>
  
  </head>

  <body>

  
      <?php include ("./assets/pages/admin_menu.php") ?>
	
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Calendar</h3>
              <!-- page start-->
              <div class="row mt">
                  <aside class="col-lg-3 mt">
                      <h4><i class="fa fa-angle-right"></i> Draggable Events</h4>
                      <div id="external-events">
                          <div class="external-event label label-theme">Mon évènement 1</div>
                          <div class="external-event label label-success">Mon évènement 2</div>
                          <div class="external-event label label-info">Mon évènement 3</div>
                          <div class="external-event label label-warning">Mon évènement 4</div>
                          <div class="external-event label label-danger">Mon évènement 5</div>
                          <div class="external-event label label-default">Mon évènement 6</div>
                          <div class="external-event label label-theme">Mon évènement 7</div>
                          <div class="external-event label label-info">Mon évènement 8</div>
                          <div class="external-event label label-success">Mon évènement 9</div>
                          <p class="drop-after">
                              <input type="checkbox" id="drop-remove">
                              Effacer à la sortie
                          </p>
                      </div>
                  </aside>
                  <aside class="col-lg-9 mt">
                      <section class="panel">
                          <div class="panel-body">
                              <div id="calendar" class="has-toolbar"></div>
                          </div>
                      </section>
                  </aside>
              </div>
              <!-- page end-->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

	  <!--main content end-->
      <!--footer start-->
		<?php include ("./assets/pages/admin_footer.php") ?>
      <!--footer end-->
  </section>

<<<<<<< HEAD
  <?php include ("./assets/pages/admin_js.php") ?>
    
=======
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="./assets/js/fullcalendar/fullcalendar.min.js"></script>    
    <script src="./assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="./assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="./assets/js/jquery.scrollTo.min.js"></script>
    <script src="./assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="./assets/js/common-scripts.js"></script>

>>>>>>> 7689b9871eaeaa341337558257bdbbd57a2e35fb
    <!--script for this page-->
    <script src="./assets/js/calendar-conf-events.js"></script> 
    <script>
        //custom select box

        $(function(){
            $("select.styled").customSelect();
        });

    </script>

  </body>
</html>
