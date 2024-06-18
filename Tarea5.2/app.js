const fulImgDiv = document.getElementById("fulImgsDiv"),
fulImg = document.getElementById("fulImg");

function closeimg(){
    fulImgDiv.style.display = "none";
}

function openFul(reference){
    fulImgDiv.style.display = "flex";
    fulImg.src = reference
}

