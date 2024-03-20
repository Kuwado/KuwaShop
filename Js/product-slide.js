const bigCon = document.querySelector(".product-detail-img-big");
const smallCon = document.querySelector(".product-img-small");
const bigImages = document.querySelectorAll(".product-detail-img-big img");
const smallImages = document.querySelectorAll(".product-detail-small-big img");
const nextBtn = document.querySelector(".product-detail-img-big-next-btn");
const prevBtn = document.querySelector(".product-detail-img-big-prev-btn");
const upBtn = document.querySelector(".product-detail-img-small-up-btn");
const downBtn = document.querySelector(".product-detail-img-small-down-btn");
let imgNumber = bigImages.length;
var x = 0, y = 0;


nextBtn.addEventListener("click", function(){
    y += -550;
    bigCon.style.transform = `translateY(${y}px)`;
});

bigImages.forEach(function(img, i){
    img.style.left = i * 100 + "%";
});


