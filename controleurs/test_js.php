<html>
	<head>
		<title>test</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	</head>
	<body>
		
		<form id="verif_admin" action="#">
		<!--<form action="#">-->
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
            <button type="submit" class="btn btn-primary" id="submit">Valider</button>
          </div> 
        </form>
        <script>
	      //custom select box
	      $(document).ready(function(){

	      	/*$("#submit").click(function(){	      		
	      		$.post(
	      				'admin.php', {password : $("#password").val()},
	      				function(data){
	      					if(data == '1'){
	      						$("#resultat").html("Le mot de passe est : bien.");
	      					} else {
	      						$("#resultat2").html("Entrez le bon mot de passe admin.");
	      					}
	      				}
      			);
	      	});*/


	        $("#verif_admin").submit(function(){
	        	var password = $("#password").val();
	        	$.ajax({
	        		type: "POST",
	        		url: "admin.php",
	        		data: "password=" + password,
	        		datatype: "txt",
	        		success: function(msg){
	        			if(msg==1){
	        				//$("#resultat").fadeOut();
	        				//console.log("yeah");
	        				$("#result").html("Le mot de passe est : bien.");
	        			} else {
	        				//$("#resultat2").fadeOut();
	        				//console.log("no");
	        				$("#result2").html("Entrez le bon mot de passe admin.");
	        			}
	        		},
	        		error: function(data){alert('error')}
	        	});
	        	return false;
	        });
	      });
	  	</script>
	</body>
</html>