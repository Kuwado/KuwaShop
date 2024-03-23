const bigCon = document.querySelector(".product-detail-img-big");
const smallCon = document.querySelector(".product-detail-img-small");
const bigImages = document.querySelectorAll(".product-img-big-item");
const smallImages = document.querySelectorAll(".product-detail-img-small img");
const nextBtn = document.querySelector(".product-detail-img-big-next-btn");
const prevBtn = document.querySelector(".product-detail-img-big-prev-btn");
const upBtn = document.querySelector(".product-detail-img-small-up-btn");
const downBtn = document.querySelector(".product-detail-img-small-down-btn");
let imgNumber = bigImages.length;
let x = 0; // Không cần thiết nếu không sử dụng trong phần code này
let y = 0; // Không cần thiết nếu không sử dụng trong phần code này
let i = 0;

// Đặt vị trí cho các ảnh lớn dựa trên index của chúng
bigImages.forEach(function(img, i){
    img.style.left = i * 100 + "%"; // Dùng 105% để tạo khoảng trống giữa các ảnh
});

nextBtn.addEventListener("click", function(){
    i++;
    if (i >= imgNumber) {
        i = 0;
    }
    slider(i);
});

prevBtn.addEventListener("click", function(){
    i--;
    if (i < 0) {
        i = imgNumber - 1;
    }
    slider(i);
})

smallImages.forEach(function(img, i){
    img.style.top = i * 125 + "px"; // Dùng 105% để tạo khoảng trống giữa các ảnh
    
    img.addEventListener("click", function(){
        slider(i);
    })
});







function slider(index) {
    bigCon.style.left = "-" + index * 100 + "%";
    smallCon.style.top = "-" + index * 125 + "px";
}


