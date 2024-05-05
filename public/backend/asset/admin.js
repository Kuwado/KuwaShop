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
const prdTypeMenu = document.querySelector(".product-type-menu");
const prdTypeItem = document.querySelectorAll(".product-type-item");
const prdTypeSubItem = document.querySelectorAll(".product-type-sub-item");
const prdTypeSmallItem = document.querySelectorAll(".product-type-small-item");
const prdTypeText = document.querySelector("#product-type-text");
const prdTypeInput = document.querySelector("#product-type-input");

let stt = true;

// Khi ấn nút Loại sản phẩm
function productTypeHandle() {
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
};

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
const discountBTN = document.querySelector("#discount-btn");
const opP = document.querySelector("#discount-option-p");
const opN = document.querySelector("#discount-option-n");
const disP = document.querySelector(".discount-p");
const disN = document.querySelector(".discount-n");
const discountUL = document.querySelector("#discount-ul");
const disText = document.querySelector("#discount-text");
const priceDiscount = document.querySelector("#product-price-discount");

let discountSTT = true;

// Khi ấn nút giảm giá
function discountHandle() {
    if (discountSTT) {
        discountUL.classList.add("discount-active");
        discountBTN.classList.add("cl-red");
        discountSTT = false;
    }
    else {
        closeDiscount();
    }
}

function discountPercentHandle() {
    disN.classList.remove("discount-active");
    disP.classList.add("discount-active");
    closeDiscount();
    disText.textContent = opP.textContent.toLowerCase();
};

function discountNumberHandle() {
    disP.classList.remove("discount-active");
    disN.classList.add("discount-active");
    closeDiscount();
    disText.textContent = opN.textContent.toLowerCase();
};

function closeDiscount(){
    discountUL.classList.remove("discount-active");
    discountBTN.classList.remove("cl-red");
    discountSTT = true;
}

function handleDiscountP() {
    var inputElement = document.getElementById('product-discount-p');
    var priceElement = document.getElementById('product-price');
    
    // Kiểm tra xem input và priceElement có tồn tại
    if (inputElement && priceElement.value.trim() && inputElement.value.trim() !== '') {
        var discountValue = parseFloat(inputElement.value); // Chuyển đổi giá trị nhập vào thành số thực
        var price = parseFloat(priceElement.value); // Lấy giá trị giá sản phẩm từ input

        // Kiểm tra giá trị giảm giá có hợp lệ không
        if (discountValue > 100) {
            alert("Số phần trăm không hợp lệ (phải ≤ 100)");
        } else if (discountValue <= 0) {
            alert("Số phần trăm không hợp lệ (phải > 0)");
        } else {
            // Tính toán giá sản phẩm sau khi áp dụng giảm giá
            var discountedPrice = price - (price * discountValue / 100);
            priceDiscount.value = discountedPrice.toFixed(0); // Làm tròn giá trị đến 2 chữ số thập phân và gán vào input
            
        }
    } else {
        alert("Vui lòng nhập giá sản phẩm.");
        inputElement.value = '';
    }
}

function handleDiscountN() {
    var inputElement = document.getElementById('product-discount-n');
    var priceElement = document.getElementById('product-price');
    
    // Kiểm tra xem input và priceElement có tồn tại
    if (inputElement && priceElement.value.trim() && inputElement.value.trim() !== '') {
        var discountValue = parseFloat(inputElement.value); // Chuyển đổi giá trị nhập vào thành số thực
        var price = parseFloat(priceElement.value); // Lấy giá trị giá sản phẩm từ input

        // Kiểm tra giá trị giảm giá có hợp lệ không
        if (discountValue > price) {
            alert("Số tiền giảm không hợp lệ (phải ≤ giá gốc)");
        } else if (discountValue <= 0) {
            alert("Số tiền giảm không hợp lệ (phải > 0)");
        } else {
            // Tính toán giá sản phẩm sau khi áp dụng giảm giá
            var discountedPrice = price - discountValue;
            priceDiscount.value = discountedPrice.toFixed(0); // Làm tròn giá trị đến 2 chữ số thập phân và gán vào input
            
        }
    } else {
        alert("Vui lòng nhập giá sản phẩm.");
        inputElement.value = '';    }
}

// Size and quantity
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

// Color
const selectColor = document.getElementById("select-color");
const color = document.getElementById("product-color");
const colorCode = document.getElementById("product-color-code");

function inputColor() {
    var selectedOption = selectColor.options[selectColor.selectedIndex].text;
    color.value = selectedOption;
    colorCode.value = selectColor.options[selectColor.selectedIndex].value;
}

function selectColorHnadle() {
    inputColor();
};
