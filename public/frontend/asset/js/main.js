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
    cartPreview.classList.add('active');
}

function closeCartPreview() {
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
    closeAllSubMenu();
}

/* ---------------------------------------------- search ----------------------------------------------------------------*/

function suggestSearch(element) {
    const searchBar = element.closest('#search-bar');
    const searchInput = searchBar.querySelector('#search-input');
    const searchText = element.textContent;
    searchInput.value = searchText;
}






















// -------------------------------------- Footer --------------------------------------------------
var listEmail = []; // Khởi tạo mảng để lưu trữ các email đã đăng ký
const emailInput = document.querySelector('#footer-email-subscribe');
const notices = document.querySelectorAll('.footer-subscribe-notice');
const successNotice = document.querySelector('#footer-subscribe-success');
const errorNotice = document.querySelector('#footer-subscribe-error');
const failNotice = document.querySelector('#footer-subscribe-fail');
let timeoutId = null;

function hideAllNotices() {
    notices.forEach(nt => {
        nt.classList.remove('active');
    });
}

function subscribeEmail(event) {
    event.preventDefault(); // Ngăn chặn việc gửi form và tải lại trang
    hideAllNotices();
    const email = emailInput.value;
    // Hiển thị thông báo tương ứng
    if (email.includes("@gmail.com")) {
        if (listEmail.includes(email)) {
            failNotice.classList.add('active');
            // console.log('fail: email already exists');
        } else {
            successNotice.classList.add('active');
            // console.log('success: email subscribed');
            listEmail.push(email);
        }
    } else {
        errorNotice.classList.add('active');
        // console.log('fail: invalid email');
    }

    // Reset bộ hẹn giờ nếu đã tồn tại
    if (timeoutId) {
        clearTimeout(timeoutId);
    }
    // Thiết lập một bộ hẹn giờ mới
    timeoutId = setTimeout(hideAllNotices, 3000);
}

