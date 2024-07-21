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
function showOtherColor(imagesJson, productId, quanId, sizeQuan, element) {
    var card = element.closest('.card-product');
    var imagesList = JSON.parse(imagesJson);
    var cardImageContainer = card.querySelector('.card-image');
    var linkProduct = card.querySelector('.card-name');
    var quan = card.querySelector('.product-detail-quan');
    var sizeList = JSON.parse(sizeQuan);
    var sizeCon = card.querySelectorAll('.btn-size');

    // Cập nhật src của các thẻ hình ảnh
    var images = cardImageContainer.querySelectorAll('img');
    if (imagesList.length > 1) {
        images[0].src = imagesList[1];
    } else {
        images[0].src = imagesList[0];
    }
    images[1].src = imagesList[0];

    // Thêm lớp active vào dot được click và loại bỏ từ các dot khác
    var colorDots = card.querySelectorAll('.color-dot');
    colorDots.forEach(function (dot) {
        dot.classList.remove('active');
    });
    element.classList.add('active');

    // Thay link
    linkProduct.href = `/product/detail/${productId}/${quanId}`;
    quan.value = quanId;

    sizeCon.forEach((size, i) => {
        size.value = sizeList[i];
    });
    checkQuantity(card);
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

//Check số lượng
function checkQuantity(card) {
    const btnSizes = card.querySelectorAll('.btn-size');
    btnSizes.forEach(btn => {
        if (btn.value == 0) {
            btn.classList.add('oos');
        } else {
            btn.classList.remove('oos');
        }
    })
}

const cards = document.querySelectorAll('.card-product');
cards.forEach(card => {
    checkQuantity(card);
})

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

// Chọn size
// let cartActive = false;

function setSize(size, element) {
    var form = $(element).closest('.size-option');
    form.find('[name="product-detail-size"]').val(size);

    $.ajax({
        type: 'POST',
        url: '/cart/preview/add',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                alert(response.message);
                // cartPreview ở main.js
                if (cartPreview.classList.contains('active')) {
                    localStorage.setItem('cartPreviewActive', 'true');
                } else {
                    localStorage.setItem('cartPreviewActive', 'false');
                }
                location.reload();
            } else {
                alert('Chưa thể thêm sản phẩm. Vui lòng thử lại');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            alert('Failed to add product to cart. Please try again.');
        }
    });
}

