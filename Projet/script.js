"use strict"; 
     $("#Sh").click(function(){
          if($("#search-text").is(":hidden")){
               $("#Sh").attr('src','img/cancel.png');          
          }else $("#Sh").attr('src','img/Search.png');          
          $("#search-text").toggle();
          $("#btnsh").toggle();
     });
     function replace(){
     var mright = document.getElementById('mright');
     $(mright).empty();
     var li = document.createElement("li");
     var li2 = document.createElement("li");
     li2.innerHTML = "<a href='question.php'>Poser Une Question</a>";
     li.innerHTML = "<a href='logout.php'>Se Déconnecter</a>";
     (mright).appendChild(li2);
     (mright).appendChild(li);
     };
     function de() {$('#erreur').css('display','block');}
//le window.location normalement c'est une méthode pas trop sécurisé mais il sera pas dangereuse dans ce cas
function redirect() {window.setTimeout(function() {window.location = 'login.php';}, 3000)};
