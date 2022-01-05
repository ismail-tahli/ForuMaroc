<?php
include ("dbs.php");
?>

<html>
<head>
<title>ForuMaroc</title>
<meta http-equiv="Content-Type" charset="UTF-8" />
<link href='img/favicon.png' rel='icon' type="image/png"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="scroll.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
<div class="navbar">
     <!-- //A Revoir Responsive -->
<div class="nav-left">
<ul class="nav">
<li><a href="">Qui nous sommes</a></li>
<li><a href="">Nos objectifs</a></li>
<li><a href="">Rejoignez notre groupe</a></li>
<li><a href="">Aide</a></li>
<li id="time"><a><?php echo "Aujourd'hui : ".date("d-m-Y");?></a></li>
<li id="flag" title="MAROC"><img src="img/ma.png"/></li>
</ul>
</div>
<div class="social">
<ul class="social-top">
<li><a><img src="img/Search.png" id="Sh"></a></li>
<li><a href="#googleplus" target="_blank"><img src="img/Gp.png" id="Gp"></a></li>
<li><a href="#youtube" target="_blank"><img src="img/Yt.png" id="Yt"></a></li>
<li><a href="#facebook" target="_blank"><img src="img/Fb.png" id="Fb"></a></li>
<li><a href="#twitter" target="_blank"><img src="img/Tw.png" id="Tw"></a></li>
</ul>
</div>
<div class="search">
<form action="search.php" method="POST">
<input id="search-text" type="text" name="search" placeholder="Rechercher une question ou une réponse...">
<input type="image" src="img/Search.png" alt="Rechercher" id="btnsh" name="recherche">
</form>
</div>
</div>
<div class="header">
<div class="logo">
<a href="index.php"><img src="img/logo.png" title="ForuMaroc"></a>
</div>
</div>
<div class="menu">
<ul>
<li><a href="index.php" title="Acceuil"><img src="img/home.png" class="rotation"></a></li>
<li><a href="#services" title="Service">Nos Services</a></li>
<li><a href="#nouvelles" title="Produits">Les Produits</a></li>
<li><a href="#Clients" title="Sponsors">Nos Sponseurs</a></li>
<li><a href="contact-us.php" title="Contactez-Nous">Contactez-Nous</a></li>
</ul>
<ul id="mright">
<li><a href="register.php" title="Inscrivez-Vous">S'inscrire</a></li>
<li><a href="login.php" title="Se Connecter">Se Connecter</a></li>
</ul>
</div>
</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>

<?php
if(isset ($_SESSION["pass"])){
     echo"<script>replace();</script>";
     }
     ?>