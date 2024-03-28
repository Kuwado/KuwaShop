// Show menu avatar
const avtBtn = document.querySelector(".admin-option i");
const avtMenu = document.querySelector(".admin-option-detail");

avtBtn.addEventListener("click", function(){
    if (avtMenu.classList.contains("show")){
        avtMenu.classList.remove("show");
    }
    else
        avtMenu.classList.add("show");

});

// Confirm order
const cfOrderBtns = document.querySelectorAll(".admin-cf-btn");

cfOrderBtns.forEach(function(btn){
    btn.addEventListener("click", function(){
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