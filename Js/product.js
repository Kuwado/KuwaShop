// Lấy tất cả các container chứa các dot
const cardContainers = document.querySelectorAll(".product");

// Lặp qua mỗi container và thêm sự kiện click cho các dot bên trong
cardContainers.forEach(dotContainer => {
    // Lấy tất cả các dot trong container hiện tại
    const dots = dotContainer.querySelectorAll(".color-dot");

    // Lặp qua mỗi dot và thêm sự kiện click
    dots.forEach(dot => {
        dot.addEventListener("click", function () {
            // Ẩn tất cả các check
            dotContainer.querySelectorAll(".color-dot i").forEach(check => {
                check.classList.remove("show");
            });

            // Hiển thị check trong dot được click
            this.querySelector("i").classList.add("show");

            // Lấy đường dẫn của ảnh từ thuộc tính data-src của dot
            const firstImageSrc = dot.getAttribute("product-img-first-id");
            const secondImageSrc = dot.getAttribute("product-img-second-id");

            // Thay đổi src của ảnh tương ứng với container chứa dot đó
            dotContainer.querySelector(".product-img-second").src = secondImageSrc;
            dotContainer.querySelector(".product-img-first").src = firstImageSrc;

        });
    });
});

const hearts = document.querySelectorAll(".favorite");

// Lặp qua từng phần tử "favorite" và thêm sự kiện click cho mỗi phần tử
hearts.forEach(heart => {
    heart.addEventListener("click", function () {
        const heartStatus = window.getComputedStyle(heart).color;
        if (heartStatus === "rgb(255, 255, 255)" || heartStatus === "white") {
            heart.style.color = "red";
        } else {
            heart.style.color = "white";
        }
    });
});


const carts = document.querySelectorAll(".cart-menu");

// Ẩn tất cả các size-option khi trang web được tải


carts.forEach(cart => {
    const cartIcon = cart.querySelector(".product-cart-icon");
    const cartMenu = cart.querySelector(".size-option");

    cartIcon.addEventListener("click", function () {

        // Lấy giá trị tính toán của thuộc tính visibility của size-option
        const cartStatus = window.getComputedStyle(cartMenu).visibility;
        if (cartStatus === "hidden") {
            // Ẩn tất cả các size-option
            document.querySelectorAll('.size-option').forEach(option => {
                option.style.visibility = "hidden";
                option.style.bottom = "0";
            });
            cartMenu.style.visibility = "visible"; // Hiển thị size-option được nhấp vào
            cartMenu.style.bottom = "45px";
        }
        else {
            cartMenu.style.visibility = "hidden"; // Ẩn size-option nếu đã được hiển thị
            cartMenu.style.bottom = "0";
        }
    })
})

