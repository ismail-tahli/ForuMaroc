"use strict"; 
//Vu que le fichier est importer par header.php Tout les scripts du projet seront en mode strict. 
jQuery(document).ready(function($) {
if(document.body.scrollTop == 0){
        $(".haut").hide();
    }
$(window).scroll(function(){
    if(document.body.scrollTop == 0){
        $(".haut").fadeOut();
    }else $(".haut").fadeIn();
});
$(".haut, .haut img ").click(function(event) {
$("html, body").animate({ scrollTop: 0 }, "slow");
return false;
});
$("html,body").bind("scroll mousedown wheel DOMMouseScroll mousewheel keyup", function(e){
    if (e.which > 0 || e.type == "mousedown" || e.type == "mousewheel"){
    $("html,body").stop();
    }
});

});
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