var slides = document.querySelectorAll("div.slide");

function changeOrder(elmt){
    var order = parseInt(elmt.style.order);
    if(order == 2){
        order = 0;
    }else{
        order++
    }
    elmt.style.order = order
}

setInterval(function(){
    slides.forEach(function(slide){
        changeOrder(slide)
    })
},5000)