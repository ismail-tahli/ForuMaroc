<?php
require ("header.php");
include("dbs.php");
if(!isset ($_SESSION["pass"])){
    header('Location: login.php');
    }
?>
<div class="container">
<div class="content" style="background-image: url(img/footer2.png)">
<div class="content-header">
<b id="lgbefore">Poser votre question</b>
<i class="fa fa-dot-circle-o famember" aria-hidden="true"></i>
</div>
<p id="erreur"></p>
<div class="question">
<img src="img/bg2.png" />
<form action="" method="POST">
Title : <input type="text" name="title" /><br /><br />
Votre question : <textarea name="message" placeholder="Saisissez votre question....."></textarea><br/>
<div class="btn2 bouton">
    <input type="reset" value="Tout effacer"/>
    <input type="submit" name="sent" value="Questionner"/>
</div>
</form>
</div>
</div>
</div>
<?php
if(isset ($_POST["sent"])){
    if(!empty($_POST["title"]) AND !empty($_POST["message"])){ 
        $title = htmlspecialchars($_POST["title"]);
        $message = htmlspecialchars($_POST["message"]);
        $user = $_SESSION["user"];
        $date = date('Y-m-d');
        $query = "INSERT INTO question(title,ask,asker,date) VALUE(?,?,?,?)";
        $res = $db->prepare($query);
        $res->execute(array($title,$message,$user,$date));
        if($res){
            echo "<script> de(); document.getElementById('erreur').innerHTML ='Votre question a bien été envoyée.';
            $('.question').css('display','none');
            </script>";
            }else echo "<script>de(); document.getElementById('erreur').innerHTML ='Votre question malheureusement n'a pas été envoyée!.</script>";
    }else echo "<script>de(); document.getElementById('erreur').innerHTML ='Veuillez remplir dabord tous les champs'</script>";;
}
require ("footer.php");
?>

