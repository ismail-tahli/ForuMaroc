<?php
require ("header.php");
include("dbs.php");
if(!isset ($_SESSION["pass"])){
    header('Location: login.php');
    }
if(!isset($_GET["id"]) AND !isset($_POST["answer"])){
    header('Location: index.php');
}else{
    //Vérification de l'existence de la question on peut la mettre dans une fonction et l'appeler quand on aura besoin
    $query = "SELECT * FROM question WHERE id = ?";
    $res = $db->prepare($query);
    $res->execute(array($_GET["id"]));
    if($res->rowCount() > 0 ){
        $res = $res->fetch();
        $title = $res['title'];
        $question = $res["ask"];
    }else header('Location: index.php');
}
?>
<div class="container">
<div class="content" style="background-image: url(img/footer2.png)">
<div class="content-header">
<b id="lgbefore">Répondre à la question</b>
<i class="fa fa-dot-circle-o famember" aria-hidden="true"></i>
</div>
<p id="erreur"></p>
<div class="question">
<img src="img/bg2.png" />
<form action="" method="POST">
<p>Le titre de la question : <a href="afficher?id=<?=$_GET['id']?>"><?= $title?></a></p>
Votre question : <textarea name="reponse" placeholder="Saisissez votre réponse à la question....."></textarea><br/>
<div class="btn2 bouton">
    <input type="reset" value="Tout effacer"/>
    <input type="submit" name="sent" value="Répondre"/>
</div>
</form>
</div>
</div>
</div>
<?php
if(isset ($_POST["sent"])){
    if(!empty($_POST["reponse"])){
        $id =  $_GET["id"];
        $response = htmlspecialchars($_POST["reponse"]);
        $user = $_SESSION["user"];
        $date = date('Y-m-d');
        $query = "INSERT INTO reponse(id,responder,response,date) VALUE(?,?,?,?)";
        $res = $db->prepare($query);
        $res->execute(array($id,$user,$response,$date));
        if($res){
            echo "<script> de(); document.getElementById('erreur').innerHTML ='Votre réponse a bien été envoyée.';
            $('.question').css('display','none');
            </script>";
            }else echo "<script>de(); document.getElementById('erreur').innerHTML ='Votre réponse n'a malheureusement pas été envoyée!.</script>";
    }else echo "<script>de(); document.getElementById('erreur').innerHTML ='Veuillez remplir dabord tous les champs'</script>";;
}
require ("footer.php");
?>

