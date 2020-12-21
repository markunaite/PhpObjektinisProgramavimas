

function SetOpacity(foto, opacity) {    
    var temp = opacity / 100;
    foto.style.opacity = temp;
    foto.style.MozOpacity = temp;
    foto.style.KhtmlOpacity = temp;
}

function neryski(foto) {
    SetOpacity(foto, 70);

}

function ryski(foto) {
    SetOpacity(foto, 100);
}
