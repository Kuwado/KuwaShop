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
function showOtherColor(imagesJson, productId, quanId, element) {
    var imagesList = JSON.parse(imagesJson);
    
    // Tìm phần tử cha chứa các hình ảnh
    var cardImageContainer = element.closest('.card-product').querySelector('.card-image');
    var linkProduct = element.closest('.card-product').querySelector('.card-name');

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

    // Thay link
    linkProduct.href = `/product/detail/${productId}/${quanId}`;
    quan.value = quanId;
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

// Chọn size
// const cartPreview = document.querySelector('#cart-preview');
let cartActive = false;

function setSize(size, element) {
    var form = $(element).closest('.size-option');
    form.find('[name="product-detail-size"]').val(size);

    $.ajax({
        type: 'POST',
        url: '/cart/add',
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                alert(response.message);

                // Lưu trạng thái của cartPreview
                if (cartPreview.classList.contains('active')) {
                    localStorage.setItem('cartPreviewActive', 'true');
                } else {
                    localStorage.setItem('cartPreviewActive', 'false');
                }

                // Reload lại trang
                location.reload();
            } else {
                alert('Failed to add product to cart. Please try again.');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            alert('Failed to add product to cart. Please try again.');
        }
    });
}

// Khôi phục trạng thái của cartPreview sau khi trang được tải lại
window.addEventListener('load', function() {
    const cartPreviewActive = localStorage.getItem('cartPreviewActive');
    if (cartPreviewActive === 'true') {
        cartPreview.classList.add('active');
    }
    // Xóa trạng thái sau khi khôi phục để tránh ảnh hưởng đến các lần reload sau
    localStorage.removeItem('cartPreviewActive');
});
