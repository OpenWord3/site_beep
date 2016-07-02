<div class="sidebar" data-color="purple" data-image="./assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <img src="./assets/img/logo.png">
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?php echo INDEX ?>?index=vue_tableau_bord">
                        <i class="pe-7s-graph"></i>
                        <p>Accueil</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo INDEX ?>?index=vue_user">
                        <i class="pe-7s-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo INDEX ?>?index=vue_voicemail">
                        <i class="pe-7s-note2"></i>
                        <p>Messagerie vocale</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo INDEX ?>?index=vue_contacts">
                        <i class="pe-7s-news-paper"></i>
                        <p>Contacts</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo INDEX ?>?index=vue_chat">
                        <i class="pe-7s-science"></i>
                        <p>Chat</p>
                    </a>
                </li>
				<li>
                    <a href="" data-toggle="modal" data-dismiss="modal" data-target="#telephone">
                        <i class="pe-7s-phone"></i>
                        <p>Clavier Rapide</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo INDEX ?>?index=vue_notifications">
                        <i class="pe-7s-bell"></i>
                        <p>Plus</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="http://beep.itinet.fr">
                        <i class="pe-7s-rocket"></i>
                        <p>www.beep.itinet.fr</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
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