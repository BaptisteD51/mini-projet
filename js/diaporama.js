var sliding

function slider(){
    var carrousel = document.querySelector("div.carrousel")
    var slides = document.querySelectorAll("div.slide")

    mainWidth = document.querySelector("main").offsetWidth
    carrousel.style.width = mainWidth*slides.length + "px"
    carrousel.style.left = -mainWidth + "px"

    slides.forEach(function(slide){
        slide.style.width = mainWidth + "px"
    })

    function slideIn(elmt){
        var position = parseInt(elmt.dataset.position)
        if( position==2 ){
            position = 0
            elmt.dataset.position = position
            elmt.style.zIndex = "0"
        }else{
            position++
            elmt.dataset.position = position
            elmt.style.zIndex = "1"
        }
        elmt.style.left = (position * mainWidth) + "px" 
    }

    slides.forEach(function(slide){
        slideIn(slide)
    })

    sliding = setInterval(function(){
        slides.forEach(function(slide){
            slideIn(slide);
        })
    },4000)
}

slider()

window.addEventListener("resize", function(){
    clearInterval(sliding)
    slider()
})