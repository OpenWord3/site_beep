<html>
	<head>

		<title>test</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</head>
	<body>
		


	<div class="container">
	  <h2>Modal Example</h2>
	  <!-- Trigger the modal with a button -->
	  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Modal Header</h4>
	        </div>
	        <div class="modal-body">
	          	<table width="300">
		            <tr>
		              <p>Etrez votre mot de passe admin</p>
		              <input type="password" id="password" name="password"/>
		              <span id="resultat"></span> 
		            </tr>
		        </table>		        
	        </div>
	        <div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal" id="non">Fermer</button>
	            <button type="button" class="btn btn-primary" id="submit">Valider</button>
	        </div>
	      </div>
	      
	    </div>
	  </div>
	  
	</div>

		
		<!--<script src="jquery-1.11.2.min.js"></script>-->
				
        <script type="text/javascript">
        $(document).ready(function(){
	      //custom select box
	        $("#submit").on('click', function(){
	        	var password = $("#password").val();
	        	console.log(password);
	        	//console.error(alert(e.message));
	        	$.ajax
                    ({		
                    	type: "POST",
	        			url: "admin.php",
	        			data: "p=" + password,
	        			datatype: 'html',
	        			success: function(msg)
                        {
	        				$("#resultat").html(msg);
	        				$("#resultat").fadeIn();
	        			}
	        	});
					
	        });

	        $("#non").on('click',function(){
	        	$("#resultat").fadeOut();
	        	$("#password").val("");
	        });	        	
	    });
	     
	  	</script>
	</body>
</html>