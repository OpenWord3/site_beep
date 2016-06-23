<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Tableau de bord - Beep</title>
	
	<?php include ("./assets/pages/admin_css.php") ?>
	
  </head>

  <body>

  <section id="container" >

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

  <?php include ("./assets/pages/admin_js.php") ?>
    
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
