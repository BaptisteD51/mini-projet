var cadre = document.querySelector(".cadre-gibbon")

var observer = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
        if(entry.isIntersecting){
            var elmt = entry.target
            elmt.classList.add("play-animation")
            observer.unobserve(elmt)
        }
    })
},{
    threshold:0.8
})

observer.observe(cadre)