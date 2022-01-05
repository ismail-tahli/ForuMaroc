<?php
require ("header.php");
include("dbs.php");
?>

<div class="container">
<div class="content_index">
<div class="content-header">
<b id="lgbefore">Les Questions</b>
<i class="fa fa-dot-circle-o famember" aria-hidden="true"></i>
</div>
<?php
$query = "SELECT * FROM question";
$res = $db->prepare($query);
$res->execute();

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

// if(isset ($_SESSION["pass"])){
//     echo" <script>if($('#reponse:hidden')){
//     $('#reponse').css('visibility','visible');
//     }
//     </script>";
// }
require ("footer.php");
?>

