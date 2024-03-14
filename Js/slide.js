const imgPosition = document.querySelectorAll(".slide img")     // Lấy vị trí các ảnh
const imgContainer = document.querySelector(".slide")           // Lấy vị trí container chứa các ảnh
const dotItem = document.querySelectorAll(".dot")               // Lấy tất cả dot
const prevBtn = document.querySelector(".prev-btn")             // 
const nextBtn = document.querySelector(".next-btn")
const textPosition = document.querySelectorAll(".overlay")
const textContainer = document.querySelector(".over")
let imgNumber = imgPosition.length
let index = 0
let interval; // Biến lưu trữ interval

// Hàm để bắt đầu hoặc restart interval
function startInterval() {
    clearInterval(interval); // Xóa interval hiện tại (nếu có)
    interval = setInterval(imgSlide, 5000); // Khởi tạo interval mới
}

imgPosition.forEach(function (image, i) {
    startInterval(); // Bắt đầu hoặc restart interval
    image.style.left = i * 120 + "%"                            // trải dài các ảnh sang trái
    textPosition[i].style.left = 50 + i * 120 + "%"; // Đặt vị trí của phần overlay
    dotItem[i].addEventListener("click", function () {
        slider(i)
        index = i
        startInterval(); // Bắt đầu hoặc restart interval
    })
})

// Nếu hết ảnh --> ảnh đầu
function imgSlide() {
    index++;
    if (index >= imgNumber) {
        index = 0
    }
    slider(index)
}

prevBtn.addEventListener("click", function(){
    index--;
    if (index < 0) {
        index = imgNumber - 1
    }
    slider(index)
    startInterval(); // Bắt đầu hoặc restart interval
})

nextBtn.addEventListener("click", function(){
    imgSlide()
    startInterval(); // Bắt đầu hoặc restart interval
})

// hiện thị ảnh với vị trí tương ứng đồng thời clear hết active và set active mới cho dot hiện tại
// active làm bôi đen dot
function slider(index) {
    imgContainer.style.left = "-" + index * 120 + "%"
    textContainer.style.left = "-" + index * 120 + "%"
    const dotActive = document.querySelector(".active")
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")

}

//setInterval(imgSlide, 5000)
