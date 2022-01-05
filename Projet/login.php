<?php
require ("header.php");
include("dbs.php");
if(isset ($_SESSION["pass"])){
    header('Location: index.php');
    }
?>

<div class="container">
<div class="content">
<div class="content-header">
<b id="lgbefore">Se Connecter</b>
<i class="fa fa-dot-circle-o famember" aria-hidden="true"></i>
</div>
<p id="erreur"></p>
<div class="login">
<form action="" method="POST">
Identifiant : <input type="text" name="user" placeholder="Votre identifiant"/><br /><br />
Mot de passe : <input type="password" name="pass" placeholder="Votre mot de passe"/><br />
<div class="bouton">
<input type="submit" name="connect" value="Se Connecter"/>
<input type="reset" value="Tout effacer"/>
</form>
</div>
</div>
</div>

<?php
if(isset ($_POST["connect"])){
    if(!empty($_POST["user"]) AND !empty($_POST["pass"])){
        $user = htmlspecialchars($_POST["user"]);
        $pass = md5($_POST["pass"]);
        $query = "SELECT * FROM compte WHERE user = ? and pass = ?";
        $res = $db->prepare($query);
        $res->execute(array($user,$pass));
        if($res->rowCount() == 1){
            echo "<script>
            $('#erreur').css('display','block');
            document.getElementById('erreur').innerHTML ='Bienvenu ".strtoupper($user)."';
            $('.login').css('display','none');
            </script>";
            $info = $res->fetch();
            $_SESSION["user"] = $info["user"];
            $_SESSION["pass"] = $info["pass"];
            header("Refresh:0");
            }else echo "<script>$('#erreur').css('display','block');
            document.getElementById('erreur').innerHTML ='Mot de passe OU identifiant incorrect'</script>";
    }else echo "<script>$('#erreur').css('display','block');
    document.getElementById('erreur').innerHTML ='Veuillez remplir tous les champs'</script>";;
}
require ("footer.php");
?>

