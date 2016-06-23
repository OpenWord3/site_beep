<script src="./assets/js/sip-0.7.5.min.js" type="text/javascript"></script>
<script>
	var config = {
	  // Replace this IP address with your Asterisk IP address
	  uri: 'adolphe@labo.itinet.fr:4060',

	  // Replace this IP address with your Asterisk IP address,
	  // and replace the port with your Asterisk port from the http.conf file
	  ws_servers: 'ws://labo.itinet.fr:4060/ws',

	  // Replace this with the username from your sip.conf file
	  authorizationUser: 'adolphe',

	  // Replace this with the password from your sip.conf file
	  password: 'azerty',

	  // HackIpInContact for Asterisk
	  hackIpInContact: true,

	};

	var ua = new SIP.UA(config);

	// Invite with audio only
	ua.invite('1000',{
	  media: {
		constraints: {
		  audio: true,
		  video: false
		}
	  }
	});
</script>

<div class="modal fade" id="telephone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title" id="myModalLabel">Composez ...</h4>
	  </div>
	  <div id="modal-body wrapper">
		<div class="dialpad compact">
			<div class="number"></div>
			<div class="dials">
				<ol>
					<li class="digits"><p><strong>1</strong></p></li>
					<li class="digits"><p><strong>2</strong><sup>abc</sup></p></li>
					<li class="digits"><p><strong>3</strong><sup>def</sup></p></li>
					<li class="digits"><p><strong>4</strong><sup>ghi</sup></p></li>
					<li class="digits"><p><strong>5</strong><sup>jkl</sup></p></li>
					<li class="digits"><p><strong>6</strong><sup>mno</sup></p></li>
					<li class="digits"><p><strong>7</strong><sup>pqrs</sup></p></li>
					<li class="digits"><p><strong>8</strong><sup>tuv</sup></p></li>
					<li class="digits"><p><strong>9</strong><sup>wxyz</sup></p></li>
					<li class="digits"><p><strong>*</strong></p></li>
					<li class="digits"><p><strong>0</strong><sup>+</sup></p></li>
					<li class="digits"><p><strong>#</strong></p></li>
					<li class="digits"><p><strong><i class="fa fa-refresh"></i></strong><sup> Reset</sup></p></li>
					<li class="digits"><p><strong><i class="fa fa-times"></i></strong><sup> Effacer</sup></p></li>
					<li class="digits pad-action"><p><strong><i class="fa fa-phone"></i></strong> <sup>Appeler</sup></p></li>
				</ol>
			</div>
		</div>
	  </div>
	</div>
  </div>
</div>