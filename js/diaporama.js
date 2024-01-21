var slides = document.querySelectorAll("div.slide");

function slideIn(elmt){
    var position = parseInt(elmt.dataset.position);
    if( position==2 ){
        position = 0
        elmt.dataset.position = position
        elmt.style.zIndex = "0";
    }else{
        position++
        elmt.dataset.position = position
        elmt.style.zIndex = "1";
    }
    elmt.style.left = (position * 900) + "px" 
}

slides.forEach(function(slide){
    slideIn(slide)
})


setInterval(function(){
    slides.forEach(function(slide){
        slideIn(slide);
    })
},4000)