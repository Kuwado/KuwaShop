const bigCon = document.querySelector("#product-detail-img-big-list");
const smallCon = document.querySelector("#product-detail-img-small-list");
const bigImages = document.querySelectorAll(".product-detail-img-big-item");
const smallImages = document.querySelectorAll(".product-detail-img-small-item");
const imgNumber = bigImages.length;
let n = imgNumber;
let currentIndex = 0;
const upBtn = document.querySelector("#product-detail-img-small-up-btn");
const downBtn = document.querySelector("#product-detail-img-small-down-btn");
const smallContainer =  document.querySelector("#product-detail-img-small-container");

// Set up small images
function setUpSmallImages() {
    smallImages.forEach(function (img, i) {
        img.style.height = `calc((100% - 10px * ${n-1}) / ${n})`;
        img.style.top = `calc(((100% - 10px * ${n-1}) / ${n} + 10px) * ${i})`;
        img.addEventListener("click", function () {
            updateSlider(i);
        });
    });    
}

// Hàm để cập nhật vị trí
function updateSlider(index) {
    currentIndex = index;
    bigCon.style.left = "-" + index * 100 + "%";

    smallImages.forEach(function (img) {
        img.classList.remove("active");
    });
    smallImages[index].classList.add("active");
    var smallHeight = document.querySelector(".product-detail-img-small-item").offsetHeight;
    if (index > 2 && index < imgNumber - 1) {
        smallCon.style.top = "-" + (index - 2) * (smallHeight + 10) + "px";
    } else if (index <= 2) {
        smallCon.style.top = "0";
    } else if (index == imgNumber - 1) {
        smallCon.style.top = "-" + (index - 3) * (smallHeight + 10) + "px";
    }
}

// Sang ảnh khác
function nextImage() {
    currentIndex++;
    if (currentIndex >= imgNumber) {
        currentIndex = 0;
    }
    updateSlider(currentIndex);
}

// Quay lại ảnh trước
function previousImage() {
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = imgNumber - 1;
    }
    updateSlider(currentIndex);
}

// Kéo thanh ảnh lên 
function upImage() {
    var currentTop = parseInt(smallCon.style.top);
    var smallHeight = document.querySelector(".product-detail-img-small-item").offsetHeight;
    if (currentTop < 0) {
        smallCon.style.top = (currentTop + smallHeight + 10) + "px";
    } else {
        smallCon.style.top = "-" + (imgNumber - 4) * (smallHeight + 10) + "px";
    }
}

// Hạ thanh ảnh xuống
function downImage() {
    var currentTop = parseInt(smallCon.style.top);
    var smallHeight = document.querySelector(".product-detail-img-small-item").offsetHeight;
    if (currentTop > -(imgNumber - 4) * (smallHeight + 10)) {
        smallCon.style.top = (currentTop - smallHeight -10) + "px";
    } else {
        smallCon.style.top = "0";
    }
}

// Set up
if (imgNumber >= 4) {
    n = 4;
}

bigImages.forEach(function (img, i) {
    img.style.left = i * 100 + "%";
});

setUpSmallImages();
updateSlider(0);

if (imgNumber <= 4) {
    upBtn.style.visibility = "hidden";
    downBtn.style.visibility = "hidden";
    smallCon.style.paddingTop = `calc(100% * 4 / 3 * ${n} + 10px * ${n-1})`;
}

window.addEventListener("resize", function () {
    setUpSmallImages();
    updateSlider(currentIndex);
});