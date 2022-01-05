<?php
require ("header.php");
include("dbs.php");
if(!isset($_GET["id"])){
   header('Location: index.php');
}
if(isset($_POST["answer"])){
    header("Location: reponse.php?id=".$_GET['id']);
}
?>

<div class="container">
<div class="content_index">
<div class="content-header">
<b id="lgbefore">Les Questions</b>
<i class="fa fa-dot-circle-o famember" aria-hidden="true"></i>
</div>
<?php
$query = "SELECT * FROM question WHERE id=".$_GET["id"];
$res = $db->prepare($query);
$res->execute();
$res = $res->fetch();
 
echo "<div class='ask'>
<img src='img/question.png' id='imgask'/>
<form action='reponse.php?id=".$res['id']."' method='POST'>
<a href=''>".$res['title']."</a>
<p id='info'>écrit par ".$res['asker']." le ".$res['date']."</p>
<p id='contask'>".$res['ask']."</p>
<div>
";
if(isset ($_SESSION["pass"])){
    echo"
<input type='submit' name='answer' id='reponse' value='Répondre à la question'/>
</div>
</form>
</div>";
        }else echo"</div>
        </form>
        </div>";
$requete = "SELECT * FROM reponse WHERE id=".$_GET["id"];
$answers = $db->prepare($requete);
$answers->execute();
if($answers->rowCount() == 0){
    echo "Aucune réponse à cette question";
    exit();
}
// une div seulement pour le bon fonctionnement du flex-box
while($answer = $answers->fetch()){
    echo "<div class='reponse'>
    <img src='img/reponse.png' id='imgask'/>
    <div>
    <p id='info' style='line-height: normal'>réponse écrite par ".$answer['responder']." le ".$answer['date']."</p>
    <p id='p'>".$answer['response']."</p>
            </div></div>";
        }

require ("footer.php");
?>

