const categoryColorDots = document.querySelectorAll(".category-color-bar");
categoryColorDots.forEach(c => {
    const dots = c.querySelectorAll(".color-dot");

    dots.forEach(dot => {
        const i = dot.querySelector("i");
        dot.addEventListener("click", function () {
            if (i.classList.contains("show")) {
                i.classList.remove("show");
            }
            else {
                i.classList.add("show");
            }
        })
    })
})

// ----------------------------------------------- Chuyển màu của sản phẩm ---------------------------------------------
function showOtherColor(imagesJson, element) {
    var imagesList = JSON.parse(imagesJson);
    // Tìm phần tử cha chứa các hình ảnh
    var cardImageContainer = element.closest('.card-product').querySelector('.card-image');
    // Cập nhật src của các thẻ hình ảnh
    var images = cardImageContainer.querySelectorAll('img');
    if (imagesList.length > 1) {
        images[0].src = imagesList[1];
    } else {
        images[0].src = imagesList[0];
    }
    images[1].src = imagesList[0];

    // Thêm lớp active vào dot được click và loại bỏ từ các dot khác
    var colorDots = element.closest('.card-product').querySelectorAll('.color-dot');
    colorDots.forEach(function (dot) {
        dot.classList.remove('active');
    });
    element.classList.add('active');
}

// Cho dot đầu tiên được tick
const cardContainers = document.querySelectorAll(".card-product");
cardContainers.forEach(dotContainer => {
    const dot = dotContainer.querySelector(".color-dot");
    dot.classList.add("active");
});

// Sản phẩm favorite
function likeProduct(element) {
    var heart = element.closest('.favorite');
    if (heart.classList.contains("active")) {
        heart.classList.remove("active");
    } else {
        heart.classList.add("active");
    }
}

// ---------------------------------------------------- Hiển thị bảng chọn size -------------------------------------------
var sizeMenuStt = false;
const sizeMenus = document.querySelectorAll(".size-menu");

function showSizeMenu(element) {
    var sizeMenu = element.closest('.size-menu');
    if (!sizeMenu.classList.contains("active")) {
        hideSizeMenu();
        sizeMenu.classList.add("active")
        sizeMenuStt = true;
    } else {
        hideSizeMenu();
    }
}

function hideSizeMenu() {
    sizeMenus.forEach(menu => {
        menu.classList.remove("active");
    })
    sizeMenuStt = false
}

// Kiểm tra nếu click bên ngoài thì ẩn đi
document.addEventListener('click', function (event) {
    if (sizeMenuStt) {
        const targetElement = event.target;
        let isClickInsideAnyMenu = false;
        sizeMenus.forEach(menu => {
            if (menu.contains(targetElement)) {
                isClickInsideAnyMenu = true;
            }
        });

        if (!isClickInsideAnyMenu) {
            hideSizeMenu();
        }
    }
})