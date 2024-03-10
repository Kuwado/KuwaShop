const imgPosition = document.querySelectorAll(".slide img")     // Lấy vị trí các ảnh
const imgContainer = document.querySelector(".slide")           // Lấy vị trí container chứa các ảnh
const dotItem = document.querySelectorAll(".dot")               // Lấy tất cả dot
let imgNumber = imgPosition.length
let index = 0

imgPosition.forEach(function (image, i) {
    image.style.left = i * 120 + "%"                            // trải dài các ảnh sang trái
    dotItem[i].addEventListener("click", function () {
        slider(i)
        index = i
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

// hiện thị ảnh với vị trí tương ứng đồng thời clear hết active và set active mới cho dot hiện tại
// active làm bôi đen dot
function slider(index) {
    imgContainer.style.left = "-" + index * 120 + "%"
    const dotActive = document.querySelector(".active")
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")

}
setInterval(imgSlide, 7000)