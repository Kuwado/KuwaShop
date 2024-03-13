// Lấy tất cả các container chứa các dot
const cardContainers = document.querySelectorAll(".product");

// Lặp qua mỗi container và thêm sự kiện click cho các dot bên trong
cardContainers.forEach(dotContainer => {
    // Lấy tất cả các dot trong container hiện tại
    const dots = dotContainer.querySelectorAll(".color-dot");

    // Lặp qua mỗi dot và thêm sự kiện click
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            // Ẩn tất cả các check
            dotContainer.querySelectorAll('.color-dot i').forEach(check => {
                check.classList.remove('show');
            });
            
            // Hiển thị check trong dot được click
            this.querySelector('i').classList.add('show');

            // Lấy đường dẫn của ảnh từ thuộc tính data-src của dot
            const firstImageSrc = dot.getAttribute('product-img-first-id');
            const secondImageSrc = dot.getAttribute('product-img-second-id');

            // Thay đổi src của ảnh tương ứng với container chứa dot đó
            dotContainer.querySelector('.product-img-first').src = firstImageSrc;
            dotContainer.querySelector('.product-img-second').src = secondImageSrc;
        });
    });
});
