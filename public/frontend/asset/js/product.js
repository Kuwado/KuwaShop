const bigCon = document.querySelector("#product-detail-img-big-list");
const smallCon = document.querySelector("#product-detail-img-small-list");
const bigImages = document.querySelectorAll(".product-detail-img-big-item");
const smallImages = document.querySelectorAll(".product-detail-img-small-item");
let imgNumber = bigImages.length;
let currentIndex = 0;

// Đặt vị trí cho các ảnh lớn dựa trên index của chúng
bigImages.forEach(function (img, i) {
    img.style.left = i * 100 + "%";
});

smallImages.forEach(function (img, i) {
    img.style.top = i * 130 + "px";
    img.addEventListener("click", function () {
        updateSlider(i);
    });
});


// Hàm để cập nhật vị trí của slider và class active cho ảnh nhỏ
function updateSlider(index) {
    currentIndex = index;
    bigCon.style.left = "-" + index * 100 + "%";

    smallImages.forEach(function (img) {
        img.classList.remove("active");
    });
    smallImages[index].classList.add("active");

    if (index > 2 && index < imgNumber - 1) {
        smallCon.style.top = "-" + (index - 2) * 130 + "px"; // 130 = 120 (height) + 10 (margin)
    } else if (index <= 2) {
        smallCon.style.top = "0px";
    } else if (index == imgNumber - 1) {
        smallCon.style.top = "-" + (index - 3) * 130 + "px";
    }
}

updateSlider(0);

// Sang Ảnh khác
function nextImage() {
    currentIndex++;
    if (currentIndex >= imgNumber) {
        currentIndex = 0;
    }
    updateSlider(currentIndex);
}

// Quay lại anh trước
function previousImage() {
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = imgNumber - 1;
    }
    updateSlider(currentIndex);
    console.log(currentIndex);
}

// Kéo thanh ảnh lên
function upImage() {
    let currentTop = parseInt(smallCon.style.top);
    if (currentTop < 0) {
        smallCon.style.top = (currentTop + 130) + "px";
    } else if (currentTop == 0) {
        smallCon.style.top = "-" + (imgNumber - 4) * 130 + "px";
    }
}

// Hạ thanh ảnh xuống
function downImage() {
    let currentTop = parseInt(smallCon.style.top);
    if (currentTop > -(imgNumber - 4) * 130) {
        smallCon.style.top = (currentTop - 130) + "px";
    } else if (currentTop == -(imgNumber - 4) * 130) {
        smallCon.style.top = "0px";
    }
}

const upBtn = document.querySelector("#product-detail-img-small-up-btn");
const downBtn = document.querySelector("#product-detail-img-small-down-btn");
const smallContainer =  document.querySelector("#product-detail-img-small-container");
// Ẩn button lên xuống khi ít ảnh
if (imgNumber <= 4) {
    upBtn.style.visibility = "hidden";
    downBtn.style.visibility = "hidden";
    if (imgNumber == 1) {
        smallContainer.style.height = "120px";
    } else if (imgNumber == 2) {
        smallContainer.style.height = "250px";
    } else if (imgNumber == 3) {
        smallContainer.style.height = "380px";
    }
}

























// Đảm bảo chỉ chọn đc 1 size
const checkboxes = document.querySelectorAll('.product-detail-size .btn-check');

// Thêm sự kiện 'change' cho mỗi checkbox
checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', function() {
        // Nếu checkbox được chọn
        if (this.checked) {
            // Loại bỏ chọn trước đó từ tất cả các checkbox khác
            checkboxes.forEach((otherCheckbox) => {
                if (otherCheckbox !== this) {
                    otherCheckbox.checked = false;
                }
            });
        }
    });
});

// Tăng giảm số lượng cần mua
document.addEventListener("DOMContentLoaded", function() {
    const decreaseBtn = document.querySelector('.decrease-btn');
    const increaseBtn = document.querySelector('.increase-btn');
    const quantityField = document.querySelector('.quantity-field');

    decreaseBtn.addEventListener('click', function() {
        let value = parseInt(quantityField.value);
        if (value > 1) {
            value--;
            quantityField.value = value;
        }
    });

    increaseBtn.addEventListener('click', function() {
        let value = parseInt(quantityField.value);
        if (value < 10) {
            value++;
            quantityField.value = value;
        }
    });
});

// Đảm bảo phần infor chỉ có 1 action tại 1 thời điểm và có border-bottom
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.product-infor-btn');
    const collapses = document.querySelectorAll('.collapse');

    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            const target = document.querySelector(this.getAttribute('data-bs-target'));

            // Kiểm tra xem button hiện tại đã có border chưa
            const hasBorder = this.style.borderBottom === '3px solid black';

            // Loại bỏ border bottom từ tất cả các button
            buttons.forEach(function(btn) {
                btn.style.borderBottom = 'none';
            });
            
            // Nếu button hiện tại đã có border, loại bỏ border. Ngược lại, thêm border vào button
            if (hasBorder) {
                this.style.borderBottom = 'none';
            } else {
                this.style.borderBottom = '3px solid black';
            }

            collapses.forEach(function(collapse) {
                if (collapse !== target) {
                    collapse.classList.remove('show');
                }
            });
        });
    });
});
