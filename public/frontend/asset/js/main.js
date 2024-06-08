// ------------------------------------------------ Avatar Menu -----------------------------------------------------------
const avatarMenu = document.querySelector('#avatar-menu');
var avtMenuStt = false;

function showAvatarMenu() {
    if (!avtMenuStt) {
        avatarMenu.style.display = "block";
        setTimeout(function() {
            avatarMenu.style.right = "1%";
            avtMenuStt = true;
        }, 10); 
    } else {
        hideAvatarMenu();
    }
}

function hideAvatarMenu() {
    avatarMenu.style.right = "-20%";
    setTimeout(function() {
        avatarMenu.style.display = "none";
        avtMenuStt = false;
    }, 300);
}

document.addEventListener('click', function(event) {
    if(avtMenuStt) {
        const targetElement = event.target; 
        const isClickInsideAvatarMenu = avatarMenu.contains(targetElement);
        if (targetElement !== document.querySelector('#avatar-button') && !isClickInsideAvatarMenu) {
            hideAvatarMenu();
        }
    }
});

//------------------------------------------------Cart Preview------------------------------------
const cartPreview = document.querySelector('#cart-preview');

function showCartPreview() {
    // cartPreview.style.display = "flex";
    // setTimeout(function() {
    //     cartPreview.style.right = "0%";
    // }, 10); 
    cartPreview.classList.add('active');

}

function closeCartPreview() {
    // cartPreview.style.right = "-30%";
    // setTimeout(function() {
    //     cartPreview.style.display = "none";
    // }, 500);
    cartPreview.classList.remove('active');
}

/* --------------------------------------------------- Side bar ---------------------------------------------------*/
function closeAllSubMenu() {
    const items = document.querySelectorAll('.sidebar-item-bar');
    if (items.length > 0) {
        items.forEach(item => {
            item.classList.remove('active');
            const icon = item.querySelector('i');
            if (icon.classList.contains('fa-circle-chevron-up')) {
                icon.classList.remove('fa-circle-chevron-up');
                icon.classList.add('fa-circle-chevron-down');
                item.querySelector('.sidebar-more-item-btn').setAttribute('status', 'false');
            }
        });
    }

    const subMenus = document.querySelectorAll('.sidebar-sub-menu');
    if (subMenus.length > 0) {
        subMenus.forEach(sub => {
            sub.classList.remove('active');
            const miniMenus = sub.querySelectorAll('.sidebar-mini-menu');
            if (miniMenus.length > 0) {
                miniMenus.forEach(mini => {
                    mini.classList.remove('active');
                })
            }
        })
    }
}

function showSubMenu(element) {
    var stt = element.getAttribute('status');
    const itemBar = element.closest('.sidebar-item-bar');
    const subMenu = itemBar.nextElementSibling;
    const icon = itemBar.querySelector('i');
    if (stt === 'false') {
        closeAllSubMenu();
        subMenu.classList.add('active');
        itemBar.classList.add('active');
        element.setAttribute('status', 'true');
        icon.classList.remove('fa-circle-chevron-down');
        icon.classList.add('fa-circle-chevron-up');
    } else {
        subMenu.classList.remove('active');
        itemBar.classList.remove('active');
        element.setAttribute('status', 'false');
        icon.classList.remove('fa-circle-chevron-up');
        icon.classList.add('fa-circle-chevron-down');
    }
}

function showMiniMenu(element) {
    var stt = element.getAttribute('status');
    const itemBar = element.closest('.sidebar-item-bar');
    const miniMenu = itemBar.nextElementSibling;
    const icon = itemBar.querySelector('i');
    if (stt === 'false') {
        miniMenu.classList.add('active');
        itemBar.classList.add('active');
        element.setAttribute('status', 'true');
        icon.classList.remove('fa-circle-chevron-down');
        icon.classList.add('fa-circle-chevron-up');
    } else {
        miniMenu.classList.remove('active');
        itemBar.classList.remove('active');
        element.setAttribute('status', 'false');
        icon.classList.remove('fa-circle-chevron-up');
        icon.classList.add('fa-circle-chevron-down');
    }
}

// Show sidebar
const sidebar = document.querySelector('#sidebar');

function showSidebar() {
    sidebar.classList.add('active');
}

function hideSidebar() {
    sidebar.classList.remove('active');
}

// -------------------------------------- Footer --------------------------------------------------
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

    // Ẩn thông báo đi sau 5s kaka
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

function toggleActive(index) {
    // Loại bỏ class "active" khỏi tất cả các dot
    var dots = document.querySelectorAll('.dot');
    dots.forEach(function(dot) {
        dot.classList.remove('active');
    });

    // Thêm class "active" vào dot được click
    var selectedDot = document.querySelector('.dot:nth-child(' + index + ')');
    selectedDot.classList.add('active');
}
