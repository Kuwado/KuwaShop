// ------------------------------------------------------ Ảnh -------------------------------------------------------
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

// ------------------------------------------------------ Chọn size ---------------------------------------------------------
const quantity = document.querySelector("#product-detail-quantity span");
let sizeCons = document.querySelectorAll(".choose-size-btn");

sizeCons = Array.from(sizeCons).filter(sc => {
    var inputId = sc.getAttribute("for");
    var input = document.querySelector(`#${inputId}`);
    if (input.value == 0) {
        sc.classList.add("oos");
        return false; // Loại bỏ phần tử khỏi mảng
    }
    return true; // Giữ lại phần tử trong mảng
});

function removeSizeCons() {
    sizeCons.forEach(sc => {
        sc.classList.remove("active");
    })
}

function chooseSize(size, element) {
    var sizeCon = element.closest(".choose-size-btn");
    removeSizeCons();
    sizeCon.classList.add("active");
    
    var inputId = element.getAttribute("for"); // Lấy giá trị của thuộc tính 'for' của label
    var input = document.querySelector(`#${inputId}`); // Tìm input tương ứng
    quantity.textContent = input.value; // Gán giá trị của input cho quantity
}

window.onload = function() {
    var oosLabels = document.querySelectorAll('.choose-size-btn.oos');
    oosLabels.forEach(function(label) {
        label.onclick = function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của label
            event.stopPropagation(); // Ngăn chặn sự kiện lan truyền ra các phần tử cha
        };
    });
};

const cartBtn = document.querySelector('#product-detail-cart-btn');
const buyBtn = document.querySelector('#product-detail-buy-btn');
const numberBar = document.querySelector('#product-detail-number-bar')
// Kiểm tra hết hàng
function checkOutOfStock() {
    console.log(sizeCons.length);
    // Nếu hết hàng
    if (sizeCons.length == 0) {
        cartBtn.classList.add('oos');
        buyBtn.classList.add('oos');
        cartBtn.textContent = "Hết hàng";
        numberBar.classList.add('oos');
    } else { // Nếu còn hàng
        sizeCons[0].classList.add("active");
        var inputId = sizeCons[0].getAttribute("for");
        var input = document.querySelector(`#${inputId}`); 
        quantity.textContent = input.value; 
    }
}

checkOutOfStock();

// ------------------------------------------------------ Chọn số lượng -------------------------------------------------------
const decreaseBtn = document.querySelector('#product-detail-decrease-btn');
const increaseBtn = document.querySelector('#product-detail-increase-btn');
const inputNumber = document.querySelector('#product-detail-number-input');

// Tăng giảm số lượng cần mua
function increaseNumber() {
    let value = parseInt(inputNumber.value);
    if (value < 10) {
        value++;
        inputNumber.value = value;
    } else {
        alert("Số lượng quá lớn, bạn chỉ có thể chọn số lượng <= 10");
    }
}

function decreaseNumber() {
    let value = parseInt(inputNumber.value);
    if (value > 1) {
        value--;
        inputNumber.value = value;
    } else {
        alert("Số lượng quá bé, bạn chỉ có thể chọn số lượng >= 1");
    }
}

// ------------------------------------------------------ Thả tym ----------------------------------------------
const likeBtn = document.querySelector("#product-detail-like-btn");
function like() {
    if (likeBtn.classList.contains("active")) {
        likeBtn.classList.remove("active");
    } else {
        likeBtn.classList.add("active");
    }
}

// --------------------------------------------------- Xem infor ------------------------------------------------
const inforBtns = document.querySelectorAll('.product-detail-infor-btn');
const inforContents = document.querySelectorAll('.product-detail-collapse');
const moreBtn = document.querySelector('#product-detail-right-more-btn i');
const mainRight = document.querySelector('#product-detail-main-right');

// Xóa hết active của các thông tin
function removeInfors() {
    inforBtns.forEach(btn => {
        btn.classList.remove('active');
    })
    inforContents.forEach(con => {
        con.classList.remove('active');
    })
}

// Hiển thị thông tin
function showInfor(element) {
    var inforBtn = element.closest('.product-detail-infor-btn');
    var inforId = inforBtn.getAttribute('data-bs-target');
    var inforContent = document.querySelector(inforId);
    removeInfors();
    inforBtn.classList.add('active');
    inforContent.classList.add('active');
}

// Mở rộng để xem
function moreInfor() {
    if (mainRight.classList.contains('hidden')) {
        moreBtn.classList.remove('fa-chevron-down');
        moreBtn.classList.add('fa-chevron-up');
        mainRight.classList.remove('hidden');
    } else {
        moreBtn.classList.remove('fa-chevron-up');
        moreBtn.classList.add('fa-chevron-down');
        mainRight.classList.add('hidden');

        const inforLocation = moreBtn.getBoundingClientRect();
        const scrollPosition = inforLocation.bottom + window.scrollY;
        const windowHeight = window.innerHeight;
        const targetScrollPosition = scrollPosition - windowHeight + 20;
        // Cuộn trang đến vị trí đó
        window.scrollTo({
            top: targetScrollPosition,
            behavior: "smooth"
        });
    }
}