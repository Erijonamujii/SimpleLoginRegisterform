var i = 0;
var imgArray = [
"ac2.jpeg",
"selfcare1.jpg",
"sc3.jpg",
"sc4.jpg"






];



function ndrroImg() {
    document.getElementById('slideshow').src = imgArray[i];
    if (i < imgArray.length - 1) {
    i++;
    } else {
    i = 0;
    }
    //setTimeout("ndrroImg()", 2600)
    }
    document.body.addEventListener('load', ndrroImg());