<html>
	<head>
		<title>test</title>
		
	</head>
	<body>
		
		<!--<form id="verif_admin" action="#">-->
          <table width="300">
            <tr>
              <p>Etrez votre mot de passe admin</p>
              <input type="password" id="password" name="password"/>
              <span id="resultat" style="color:green;"></span>
              <span id="resultat2" style="color:red;"></span> 
            </tr>
          </table>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="non">Non</button>
            <button type="button" class="btn btn-primary" id="submit">Valider</button>
          </div> 
        <!--</form>-->
		
		<script src="jquery-1.11.2.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
	      //custom select box
	        $("#submit").on('click', function(){
	        	var password = $("#password").val();
	        	$.ajax
                    ({
						
	        		type: "POST",
	        		url: "admin.php",
	        		data: "p=" + password,
	        		success: function(msg)
                        {
	        				$("#resultat").html(msg);
	        			} 
	        	});
					
	        });
	        	
	    });
	     
	  	</script>
	</body>
</html>