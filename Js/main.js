var listEmail = []; // Khởi tạo mảng để lưu trữ các email đã đăng ký
var zIndexCounter = 1; // Đếm số thứ tự z-index

document.getElementById("footer-btn-submit").addEventListener("click", function(event) {
    event.preventDefault(); // Ngăn chặn việc gửi form và tải lại trang

    // Lấy giá trị email từ input
    var emailInput = document.getElementById("footer-email-subscribe");
    var email = emailInput.value;

    // Hiển thị thông báo tương ứng
    if (email.includes("@gmail.com")) {
        if (listEmail.includes(email)){
            document.getElementById("footer-subscribe-fail").style.visibility = "visible";
            document.getElementById("footer-subscribe-fail").style.zIndex = zIndexCounter++; // Tăng giá trị z-index và gán cho thông báo
        }
        else {
            document.getElementById("footer-subscribe-success").style.visibility = "visible";
            document.getElementById("footer-subscribe-success").style.zIndex = zIndexCounter++; // Tăng giá trị z-index và gán cho thông báo
            listEmail.push(email);
        }
    }
    else {
        document.getElementById("footer-subscribe-error").style.visibility = "visible";
        document.getElementById("footer-subscribe-error").style.zIndex = zIndexCounter++; // Tăng giá trị z-index và gán cho thông báo
    }

    // Ẩn thông báo sau 5s
    var timeoutId = setTimeout(function() {
        document.getElementById("footer-subscribe-error").style.visibility = "hidden";
        document.getElementById("footer-subscribe-fail").style.visibility = "hidden";
        document.getElementById("footer-subscribe-success").style.visibility = "hidden";
    }, 5000);

    // Xóa timeout cũ trước khi đặt timeout mới
    var previousTimeoutId = document.getElementById("footer-btn-submit").getAttribute("data-timeout-id");
    if (previousTimeoutId) {
        clearTimeout(previousTimeoutId);
    }

    // Lưu ID của timeout mới vào thuộc tính data-timeout-id của nút đăng ký
    document.getElementById("footer-btn-submit").setAttribute("data-timeout-id", timeoutId);

    // Xóa nội dung trong input
    emailInput.value = '';
});
