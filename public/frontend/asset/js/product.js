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
