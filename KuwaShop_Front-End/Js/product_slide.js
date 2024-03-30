const bigCon = document.querySelector(".product-detail-img-big");
const smallCon = document.querySelector(".product-detail-img-small");
const bigImages = document.querySelectorAll(".product-img-big-item");
const smallImages = document.querySelectorAll(".product-detail-img-small img");
const nextBtn = document.querySelector(".product-detail-img-big-next-btn");
const prevBtn = document.querySelector(".product-detail-img-big-prev-btn");
const upBtn = document.querySelector(".product-detail-img-small-up-btn");
const downBtn = document.querySelector(".product-detail-img-small-down-btn");
let imgNumber = bigImages.length;
let currentIndex = 0;

// Đặt vị trí cho các ảnh lớn dựa trên index của chúng
bigImages.forEach(function (img, i) {
    img.style.left = i * 100 + "%";
});

// Hàm để cập nhật vị trí của slider và class active cho ảnh nhỏ
function updateSlider(index) {
    currentIndex = index;
    bigCon.style.left = "-" + index * 100 + "%";
    // Loại bỏ class active từ tất cả các ảnh nhỏ
    smallImages.forEach(function (img) {
        img.classList.remove("active");
    });

    // Thêm class active cho ảnh nhỏ tương ứng với index đã chọn
    smallImages[index].classList.add("active");

    // Cập nhật vị trí của container ảnh nhỏ nếu cần
    if (index > 2 && index < imgNumber - 1) {
        smallCon.style.top = "-" + (index - 2) * 125 + "px";
    } else if (index <= 2) {
        smallCon.style.top = "0px";
    }

}

function updateSmallSlider(index) {
    smallCon.style.top = "-" + index * 125 + "px";
}

// Xử lý sự kiện click cho nút next
nextBtn.addEventListener("click", function () {
    currentIndex++;
    if (currentIndex >= imgNumber) {
        currentIndex = 0;
    }
    updateSlider(currentIndex);
});

// Xử lý sự kiện click cho nút prev
prevBtn.addEventListener("click", function () {
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = imgNumber - 1;
    }
    updateSlider(currentIndex);
});

// Xử lý sự kiện click cho ảnh nhỏ
smallImages.forEach(function (img, i) {
    img.style.top = i * 125 + "px";
    img.addEventListener("click", function () {
        updateSlider(i);
    });
});

upBtn.addEventListener("click", function () {
    let currentTop = parseInt(smallCon.style.top);
    if (currentTop < 0) {
        smallCon.style.top = (currentTop + 125) + "px"; // Di chuyển lên 125px mỗi lần click
    }
})

downBtn.addEventListener("click", function () {
    let currentTop = parseInt(smallCon.style.top);
    if (currentTop > -(imgNumber - 4)*125) {
        smallCon.style.top = (currentTop - 125) + "px"; // Di chuyển lên 125px mỗi lần click
    }
})

// Ẩn button lên xuống khi ít ảnh
if (imgNumber <= 4) {
    upBtn.style.visibility = "hidden";
    downBtn.style.visibility = "hidden";
}

// Mặc định hiển thị ảnh đầu tiên khi tải trang
updateSlider(0);
