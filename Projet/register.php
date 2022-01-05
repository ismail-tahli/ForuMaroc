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
<b id="rgbefore">S'inscrire</b>
<i class="fa fa-dot-circle-o famember" aria-hidden="true"></i>
</div>
<p id="erreur"></p>
<div class="register">
<form action="" method="POST" style="margin-top: 25px;">
Nom : <input type="text" name="nom" /></br />
Prénom : <input type="text" name="prenom" /></br />
Age : <input type="number" name="age" max="100" /></br />
Identifiant : <input type="text" name="user" /></br />
Mot de passe : <input type="password" name="pass" /><br />
<div class="bouton">
<input type="submit" name="submit" value="S'inscrire !"/>
<input type="reset" value="Tout effacer"/>
</form>
</div>
</div>
</div>
<?php
if(isset ($_POST["submit"])){
    if(!empty($_POST["user"]) AND !empty($_POST["pass"]) AND !empty($_POST["nom"]) AND !empty($_POST["prenom"]) AND is_numeric($_POST["age"])){
        $user = htmlspecialchars($_POST["user"]);
        $nom = strtoupper(htmlspecialchars($_POST["nom"]));
        $prenom = strtoupper(htmlspecialchars($_POST["prenom"]));
        $age = intval($_POST["age"]);
        $pass = md5($_POST["pass"]);
        $query = "INSERT INTO compte(user,pass,nom,prenom,age) VALUE(?,?,?,?,?)";
        $res = $db->prepare($query);
        $res->execute(array($user,$pass,$nom,$prenom,$age));
        if($res){
            echo "<script> de(); document.getElementById('erreur').innerHTML ='Bienvenu(e) ".strtoupper($user)." Parmi nous .';
            $('.register').css('display','none');
            redirect();
            </script>";
            }else echo "<script>de(); document.getElementById('erreur').innerHTML ='Vous navez pas été inscris !.</script>".$db->error();
    }else echo "<script>de(); document.getElementById('erreur').innerHTML ='Veuillez remplir tous les champs'</script>";;
}
require ("footer.php");
?>

