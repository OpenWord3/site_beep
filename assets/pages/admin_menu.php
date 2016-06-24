<section id="container" >

  <header class="header black-bg">
		  <div class="sidebar-toggle-box">
			  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
		  </div>

		<a href="admin_index.php" class="logo"><img src="./assets/img/logo.png" width="80"></img></a>
		<div class="nav notify-row" id="top_menu">
		  
			<ul class="nav top-menu">
		  
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo INDEX ?>?index=vue_accueil_admin">
						<i class="fa fa-tasks"></i>
						<span class="badge bg-theme">4</span>
					</a>
					<ul class="dropdown-menu extended tasks-bar">
						<div class="notify-arrow notify-arrow-green"></div>
						<li>
							<p class="green">Vous avez 4 notifications</p>
						</li>
						<li>
							<a href="<?php echo INDEX ?>?index=vue_accueil_admin">
								<div class="task-info">
									<div class="desc">Utilisation de la mémoire</div>
									<div class="percent">40%</div>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
										<span class="sr-only">40% Complete (success)</span>
									</div>
								</div>
							</a>
						</li> <div class="main-panel">
						<nav class="navbar navbar-default navbar-fixed">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">Accueil</a>
								</div>
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav navbar-left">
										<li>
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-dashboard"></i>
											</a>
										</li>
										<li class="dropdown">
											  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-globe"></i>
													<b class="caret"></b>
													<span class="notification">2</span>
											  </a>
											  <ul class="dropdown-menu">
												<li><a href="#">Vous avez réçu un message vocale</a></li>
												<li><a href="#">Vous avez manqué 2 appels</a></li>
											  </ul>
										</li>
										<li>
										   <a href="">
												<i class="fa fa-search"></i>
											</a>
										</li>
									</ul>

									<ul class="nav navbar-nav navbar-right">
										<li>
											<a href="<?php echo INDEX ?>?=vue_accueil">
												Deconnexion
											</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
						<li>
							<a href="<?php echo INDEX ?>?index=vue_accueil_admin">
								<div class="task-info">
									<div class="desc">Base de données</div>
									<div class="percent">60%</div>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
										<span class="sr-only">60% Complete (warning)</span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="<?php echo INDEX ?>?index=vue_accueil_admin">
								<div class="task-info">
									<div class="desc">Utilisateurs DHADI</div>
									<div class="percent">80%</div>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
										<span class="sr-only">80% Complete</span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="<?php echo INDEX ?>?index=vue_accueil_admin"
								<div class="task-info">
									<div class="desc">Flux de communication</div>
									<div class="percent">70%</div>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
										<span class="sr-only">70% Complete (Important)</span>
									</div>
								</div>
							</a>
						</li>
						<li class="external">
							<a href="#">Voir toutes les tâches</a>
						</li>
					</ul>
				</li>

				<li id="header_inbox_bar" class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="admin_index.php#">
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-theme">5</span>
					</a>
					<ul class="dropdown-menu extended inbox">
						<div class="notify-arrow notify-arrow-green"></div>
						<li>
							<p class="green">Vous avez 5 nouveaux messages</p>
						</li>
						<li>
							<a href="<?php echo INDEX ?>?index=vue_accueil_admin">
								<span class="photo"><img alt="avatar" src="./assets/img/ui-zac.jpg"></span>
								<span class="subject">
								<span class="from">Zac Snider</span>
								<span class="time">Maintenant</span>
								</span>
								<span class="message">
									Yo mon pote, comment tu vas ?
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo INDEX ?>?index=vue_accueil_admin">
								<span class="photo"><img alt="avatar" src="./assets/img/ui-divya.jpg"></span>
								<span class="subject">
								<span class="from">Divya Manian</span>
								<span class="time">40 mins.</span>
								</span>
								<span class="message">
								 Bonjour, j'ai besoin de votre aide.
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo INDEX ?>?index=vue_accueil_admin">
								<span class="photo"><img alt="avatar" src="./assets/img/ui-danro.jpg"></span>
								<span class="subject">
								<span class="from">Dan Rogers</span>
								<span class="time">2 hrs.</span>
								</span>
								<span class="message">
									Je n'arrive pas à me connecter à l'IPBX.
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo INDEX ?>?index=vue_accueil_admin">
								<span class="photo"><img alt="avatar" src="./assets/img/ui-sherman.jpg"></span>
								<span class="subject">
								<span class="from">Dj Sherman</span>
								<span class="time">4 hrs.</span>
								</span>
								<span class="message">
									Le réseau d'IN'TECH est bizarre.
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo INDEX ?>?index=vue_accueil_admin">Voir tous les messages</a>
						</li>
					</ul>
				</li>
				<!-- inbox dropdown end -->
			</ul>
			<!--  notification end -->
			</div>
			<div class="top-menu">
			  <ul class="nav pull-right top-menu">
					<li><a class="logout" href="<?php echo INDEX ?>?=vue_accueil">Deconnexion</a></li>
			  </ul>
			</div>
		</header>
	  <!--header end-->
  
  <!-- **********************************************************************************************************************************************************
  MAIN SIDEBAR MENU
  *********************************************************************************************************************************************************** -->
  <!--sidebar start-->
  <aside>
	  <div id="sidebar"  class="nav-collapse ">
		  <!-- sidebar menu start-->
		  <ul class="sidebar-menu" id="nav-accordion">
		  
			  <p class="centered"><a href="admin_profile.php"><img src="./assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
			  <h5 class="centered">Louis-Adolphe Mougnin</h5>
				
			  <li class="mt">
				  <a class="active" href="<?php echo INDEX ?>?index=vue_accueil_admin">
					  <i class="fa fa-dashboard"></i>
					  <span>Tableau de bord</span>
				  </a>
			  </li>

			  <li class="sub-menu">
				  <a href="admin_javascript:;" >
					  <i class="fa fa-users"></i>
					  <span>Utilisateurs & Groupes</span>
				  </a>
				  <ul class="sub">
					  <li><a  href="<?php echo INDEX ?>?index=show_users">Personnes</a></li>
					  <li><a  href="<?php echo INDEX ?>?index=show_contextes">Groupes</a></li>
				  </ul>
			  </li>

			  <li class="sub-menu">
				  <a href="<?php echo INDEX ?>?index=show_conferences" >
					  <i class="fa fa-bank"></i>
					  <span>Salles de conférences</span>
				  </a>
			  </li>

			  <li class="sub-menu">
				  <a href="<?php echo INDEX ?>?index=vue_gestion_droit" >
					  <i class="fa fa-plus-circle"></i>
					  <span>Droits</span>
				  </a>
			  </li>
			  
			  <li class="sub-menu">
				  <a href="<?php echo INDEX ?>?index=vue_gestion_callcenter" >
					  <i class="fa fa-phone-square"></i>
					  <span>Centres d'appels</span>
				  </a>
			  </li>

			  <li class="sub-menu">
				  <a href="<?php echo INDEX ?>?index=vue_gestion_standard" >
					  <i class="fa fa-sitemap"></i>
					  <span>Standard</span>
				  </a>
			  </li>
			  <li class="sub-menu">
				  <a href="admin_javascript:;" >
					  <i class="fa fa-random"></i>
					  <span>Gateway, numeros entrants et switch</span>
				  </a>
				  <ul class="sub">
					  <li><a href="<?php echo INDEX ?>?index=vue_gestion_gateway" >Gateways</a></li>
					  <li><a href="<?php echo INDEX ?>?index=vue_gestion_numero_entrant">Numeros entrants</a></li>
					  <li><a href="<?php echo INDEX ?>?index=vue_gestion_switch">switchs</a></li>
					  <li><a href="<?php echo INDEX ?>?index=vue_gestion_groupes_externes">Groupes externes</a></li>
				  </ul>
			  </li>

			  <li class="sub-menu">
				  <a href="admin_javascript:;" >
					  <i class="fa fa-wrench"></i>
					  <span>Widgets</span>
				  </a>
				  <ul class="sub">
					  <li><a  href="<?php echo INDEX ?>?index=vue_prise_note">Prise de note</a></li>
					  <li><a  href="<?php echo INDEX ?>?index=vue_calendrier">Calendrier</a></li>
					  <li><a  href="<?php echo INDEX ?>?index=vue_gallerie">Gallerie</a></li>
					  <li><a  href="<?php echo INDEX ?>?index=vue_todo_list">ToDo List</a></li>
					  <li><a  href="<?php echo INDEX ?>?index=vue_verrouillage">Verrouiller l'écran</a></li>
				  </ul>
			  </li>
		  </ul>
		  <!-- sidebar menu end-->
	  </div>
  </aside>
  <!--sidebar end-->
  
  <!-- **********************************************************************************************************************************************************
  MAIN CONTENT
  *********************************************************************************************************************************************************** -->
  <!--main content start-->