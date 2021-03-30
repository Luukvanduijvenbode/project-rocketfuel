var slideShowArray = ['zero.png', 'origineelblikje.png']

var index = 0;

window.onload = function(){
    slideshow = document.getElementById("slideshow");

    setInterval(slideShow, 1500);
}

function slideShow(){
    slideshow.style.backgroundImage = "url(fotos/" + slideShowArray[index];
    index++;
    if(index == slideShowArray.length-1){
        index = 0;  
    }
}