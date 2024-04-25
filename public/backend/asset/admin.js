// Show menu avatar
const avtBtn = document.querySelector(".admin-option i");
const avtMenu = document.querySelector(".admin-option-detail");

avtBtn.addEventListener("click", function () {
    if (avtMenu.classList.contains("show")) {
        avtMenu.classList.remove("show");
    }
    else
        avtMenu.classList.add("show");

});

// Confirm order
const cfOrderBtns = document.querySelectorAll(".admin-cf-btn");

cfOrderBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
        if (btn.textContent === "Xác nhận") {
            // Nếu là "Chưa", thay đổi nội dung thành "Có"
            btn.textContent = "Đã xác nhận";
            btn.style.backgroundColor = "blue";
            btn.style.color = "white";
        } else {
            // Nếu không, thay đổi nội dung thành "Chưa"
            btn.textContent = "Xác nhận";
            btn.style.backgroundColor = "#ace534";
            btn.style.color = "black";
        }
    })
})

//-----------------------------------------------------------------------------------------------------
// List of product-type
const prdBTN = document.querySelector("#product-type");
const prdContainer = document.querySelector(".product-type-list");
const iBTN = document.querySelector("#product-type i");
const prdTypeMenu = prdContainer.querySelector(".product-type-menu");
const prdTypeItem = prdContainer.querySelectorAll(".product-type-item");
const prdTypeSubItem = prdContainer.querySelectorAll(".product-type-sub-item");
const prdTypeSmallItem = prdContainer.querySelectorAll(".product-type-small-item");
const prdTypeText = prdContainer.querySelector("#product-type-text");
const prdTypeInput = prdContainer.querySelector("#product-type-input");

let stt = true;

prdBTN.addEventListener("click", function () {
    if (stt) {
        iBTN.classList.remove("fa-chevron-down");
        iBTN.classList.add("fa-chevron-up");
        prdTypeMenu.classList.add("product-active");
        prdTypeItem.forEach(function (item) {
            item.classList.add("product-active");
        });

        stt = false;
    } else {
       closeMenu();
    }
});

// Gắn sự kiện click cho từng prdTypeItem
prdTypeItem.forEach(function (item) {
    item.addEventListener("click", function () {
        prdTypeItem.forEach(function(item){
            item.classList.remove("highlight");
        })
        // Đóng tất cả các options tương đương và small items
        prdTypeSubItem.forEach(function(item){
            item.classList.remove("product-active")
        })
        // Mở option tương ứng với prdTypeItem được chọn
        item.classList.add("product-active");
        item.classList.add("highlight");
        const subItems = item.querySelectorAll(".product-type-sub-item");
        if (subItems.length > 0){
            subItems.forEach(function (subItem) {
                subItem.classList.add("product-active");
            });
        }
        else {
            printTypeText(item.textContent);
        }
        
    });
});

// Gắn sự kiện click cho từng prdTypeSubItem
prdTypeSubItem.forEach(function (item) {
    item.addEventListener("click", function () {
        prdTypeSubItem.forEach(function(item){
            item.classList.remove("highlight");
        })
        // Đóng tất cả các small items
        prdTypeSmallItem.forEach(function(item){
            item.classList.remove("product-active")
        })
        // Mở small item tương ứng với prdTypeSubItem được chọn
        item.classList.remove("product-active");
        item.classList.add("highlight");
        const smallItems = item.querySelectorAll(".product-type-small-item");
        if (smallItems.length > 0){
            smallItems.forEach(function (smallItem) {
                smallItem.classList.add("product-active");
            });
        }
        else {
            printTypeText(item.textContent);
        }

    });
});

prdTypeSmallItem.forEach(function(item){
    item.addEventListener("click", function(){
        prdTypeSmallItem.forEach(function(item){
            item.classList.remove("highlight");
        })
        printTypeText(item.textContent);
        item.classList.add("highlight");
    })
})

function printTypeText(type){
    prdTypeText.textContent = type;
    prdTypeInput.value = type;
    closeMenu();
}

function closeMenu(){
    iBTN.classList.add("fa-chevron-down");
    iBTN.classList.remove("fa-chevron-up");
    prdTypeMenu.classList.remove("product-active");
    prdTypeItem.forEach(function (item) {
        item.classList.remove("product-active");
        item.classList.remove("highlight");
    });
    prdTypeSubItem.forEach(function (item) {
        item.classList.remove("product-active");
        item.classList.remove("highlight");
    });
    prdTypeSmallItem.forEach(function (item) {
        item.classList.remove("product-active");
        item.classList.remove("highlight");
    });
    stt = true;
}

//-------------------------------------------------------------------------------------------------------
// Discount
const prdCount = document.querySelector(".product-discount");
const discountBTN = prdCount.querySelector("#discount-btn");
const opP = prdCount.querySelector("#discount-option-p");
const opN = prdCount.querySelector("#discount-option-n");
const disP = prdCount.querySelector(".discount-p");
const disN = prdCount.querySelector(".discount-n");
const discountUL = prdCount.querySelector("ul");
const disText = prdCount.querySelector("#discount-text");

let discountSTT = true;

discountBTN.addEventListener("click", function(){
    if (discountSTT) {
        discountUL.classList.add("discount-active");
        discountBTN.classList.add("cl-red");
        discountSTT = false;
    }
    else {
        closeDiscount();
    }
});

opP.addEventListener("click", function(){
    disN.classList.remove("discount-active");
    disP.classList.add("discount-active");
    closeDiscount();
    disText.textContent = ": " + opP.textContent;
});

opN.addEventListener("click", function(){
    disP.classList.remove("discount-active");
    disN.classList.add("discount-active");
    closeDiscount();
    disText.textContent = ": " + opN.textContent;
});

function closeDiscount(){
    discountUL.classList.remove("discount-active");
    discountBTN.classList.remove("cl-red");
    discountSTT = true;
}

// more and less
document.addEventListener("DOMContentLoaded", function() {
    const moreBtn = document.getElementById("more-btn");
    const lessBtn = document.getElementById("less-btn");
    const prdAdd = document.getElementById("product-add");
    const hiddenMoreContent = document.getElementById("hidden-more-content").innerHTML;

    moreBtn.addEventListener("click", function() {
        // Sao chép nội dung từ div ẩn và thêm vào prdAdd
        prdAdd.insertAdjacentHTML('beforeend', hiddenMoreContent);
    });
});



// Size
const sizeOpt = document.querySelectorAll(".product-size-opt");

sizeOpt.forEach(s => {
    const sName = s.querySelector(".product-size-name");
    const sQuan = s.querySelector("input");
    sName.addEventListener("click", function(){
        if (sName.classList.contains("size-btn-active")) {
            sName.classList.remove("size-btn-active");
            sQuan.value = "";
            sQuan.classList.remove("size-active");
        }
        else {
            sName.classList.add("size-btn-active");
            sQuan.classList.add("size-active");
        }
    });
});


// Product-list
function pDelete(x) {
    var tr =  x.closest('tr');
    tr.remove();
}