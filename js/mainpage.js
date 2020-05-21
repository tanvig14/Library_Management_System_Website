var myIndex = 0;
window.onload = function slide(){
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++){
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(slide, 5000);
}

$(document).ready(function(){
    $(".contact").mouseover(function(){
        $(".coninfo").fadeIn();
        $(".contact").css("background-color","#b2b8c4");
        //$("pre.coninfo > a").css("color","red");
    });
    $(".contact").mouseout(function(){
        $(".coninfo").hide();
        $(".contact").css("background-color","#d7dce5");
    });

    $(".coninfo").mouseover(function(){
        $(".coninfo").show();
        $(".contact").css("background-color","#b2b8c4");
    });
    $(".coninfo").mouseout(function(){
        $(".coninfo").fadeOut();
        $(".contact").css("background-color","#d7dce5");
    });
    $("pre.coninfo > a").mouseover(function(){
        $(".coninfo").fadeIn();
    });
});
