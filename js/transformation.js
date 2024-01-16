function getId(id) {
    return(document.getElementById(id))
}
    
function apparition(){
    getId('codesource').classList.add("codecible")
    getId('bouton').classList.add("test2")
}
    
function disparition(){
    getId('codesource').classList.remove("codecible")
    getId('bouton').classList.remove("test2")
}