<?php
require ("header.php");
include("dbs.php");
if(empty($_POST["search"]) AND !isset($_POST["recherche"]))
header ('Location: index.php');
else $search =$_POST["search"];

?>

<div class="container">
<div class="content_index">
<div class="content-header">
<b id="lgbefore">Résultat</b>
<i class="fa fa-dot-circle-o famember" aria-hidden="true"></i>
</div>
<?php


$query = "SELECT * FROM question WHERE title LIKE ? OR ask LIKE ?";
$query2 = "SELECT * FROM reponse WHERE response LIKE ?";
$res = $db->prepare($query);
$res2 = $db->prepare($query2);
$res->execute(array('%'.$search.'%','%'.$search.'%'));
$res2->execute(array('%'.$search.'%'));
if($res->rowCount()>0 || $res2->rowCount()>0){
while($question = $res->fetch()){
 
    echo "<div class='ask'>
    <img src='img/question.png' id='imgask'/>
    <form action='afficher.php?id=".$question['id']."' method='POST'>
    <a href='afficher.php?id=".$question['id']."'>".$question['title']."</a>
    <p id='info'>écrit par ".$question['asker']." le ".$question['date']."</p>
    <p id='contask'>".$question['ask']."</p>
    <div>
    <input type='submit' name='show' id='repondre' value='Voir les réponses...'/>
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
            
        }
while($answer = $res2->fetch()){
            echo "<div class='reponse'>
            <img src='img/reponse.png' id='imgask'/>
            <div>
            <p id='info' style='line-height: normal'>réponse écrite par ".$answer['responder']." le ".$answer['date']."</p>
            <p id='p'>".$answer['response']."</p>
                    </div></div>";
                }
    }else echo 'Malheureusement aucune résultat trouvée.';           
require ("footer.php");
?>

