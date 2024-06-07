const slider = document.querySelector('.slide');
let items = document.querySelectorAll('.slide-item');
let currentItems;
const dots = document.querySelectorAll('.dot');
let totalItems = items.length;

let currentIndex = 0;
let startX;
let currentTranslate = 0;
let prevTranslate = 0;
let animationID;
let isDragging = false;

// slider.addEventListener('touchstart', touchStart);
// slider.addEventListener('touchmove', touchMove);
// slider.addEventListener('touchend', touchEnd);

// slider.addEventListener('mousedown', mouseDown);
// slider.addEventListener('mousemove', mouseMove);
// slider.addEventListener('mouseup', mouseUp);
// slider.addEventListener('mouseleave', mouseUp);

function moveFirstItemToEnd(arr) {
    const firstItem = arr.shift(); 
    arr.push(firstItem);
    return arr;
}

function moveLastItemToStart() {
    var arr = Array.from(items);
    const lastItem = arr.pop();
    arr.unshift(lastItem);
    return arr;
}

function setUpSlide() {
    const firstElement = slider.firstElementChild.cloneNode(true);
    const secondElement = slider.children[1].cloneNode(true);
    const lastElement = slider.lastElementChild.cloneNode(true);
    slider.insertBefore(lastElement, slider.firstElementChild);
    slider.appendChild(firstElement);
    slider.appendChild(secondElement);

    // Cập nhật danh sách các phần tử
    items = document.querySelectorAll('.slide-item');
    totalItems = items.length;
    updateSlide();
}


function updateSlide() {
    items.forEach((item, index) => {
        if (index == 1) {
            item.style.left = "0%";
        } else if (index == 0) {
            item.style.left = "-100%";
        } else {
            item.style.left = (index-1)*100 + "%";
        }
    });
}
setUpSlide();

function previousSlide() {
    // if (currentIndex <= 0) return;
    // currentIndex--;
    changeSlide();
}
let isTransitioning = false; // Biến để kiểm soát trạng thái chuyển đổi


function nextSlide() {
    if (currentIndex == totalItems-3) {
        currentIndex++;
        changeSlide();
        setTimeout(() => {
            requestAnimationFrame(() => {
                currentIndex = 1;
                slider.style.transition = 'none';
                slider.style.transform = "translateX(-100%)";
            });
        }, 400);
    } else {
        slider.style.transition = '0.4s';
        currentIndex++;
        changeSlide();
    }
}

function changeSlide() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}


// function touchStart(event) {
//     startX = event.touches[0].clientX;
//     isDragging = true;
//     slider.style.transition = 'none';
//     cancelAnimationFrame(animationID);
// }

// function touchMove(event) {
//     if (!isDragging) return;
//     const currentPosition = event.touches[0].clientX;
//     const distance = currentPosition - startX;
//     currentTranslate = prevTranslate + distance;
//     slider.style.transform = `translateX(${currentTranslate}px)`;
// }

// function touchEnd() {
//     isDragging = false;
//     const moveBy = currentTranslate - prevTranslate;
//     if (moveBy < -100 && currentIndex < totalItems - 1) {
//         currentIndex += 1;
//     } else if (moveBy > 100 && currentIndex > 0) {
//         currentIndex -= 1;
//     }
//     changeSlide();
// }

// function mouseDown(event) {
//     startX = event.pageX;
//     isDragging = true;
//     slider.style.transition = 'none';
//     cancelAnimationFrame(animationID);
// }

// function mouseMove(event) {
//     if (!isDragging) return;
//     const currentPosition = event.pageX;
//     const distance = currentPosition - startX;
//     currentTranslate = prevTranslate + distance;
//     slider.style.transform = `translateX(${currentTranslate}px)`;
// }

// function mouseUp() {
//     isDragging = false;
//     const moveBy = currentTranslate - prevTranslate;
//     if (moveBy < -100 && currentIndex < totalItems - 1) {
//         currentIndex += 1;
//     } else if (moveBy > 100 && currentIndex > 0) {
//         currentIndex -= 1;
//     }
//     changeSlide();
// }

// const imageWrapper = document.querySelector('.image-wrapper')
// const imageItems = document.querySelectorAll('.image-wrapper > *')
// const imageLength = imageItems.length
// const perView = 3
// let totalScroll = 0
// const delay = 2000

// imageWrapper.style.setProperty('--per-view', perView)
// for(let i = 0; i < perView; i++) {
//   imageWrapper.insertAdjacentHTML('beforeend', imageItems[i].outerHTML)
// }

// let autoScroll = setInterval(scrolling, delay)

// function scrolling() {
//   totalScroll++
//   if(totalScroll == imageLength + 1) {
//     clearInterval(autoScroll)
//     totalScroll = 1
//     imageWrapper.style.transition = '0s'
//     imageWrapper.style.left = '0'
//     autoScroll = setInterval(scrolling, delay)
//   }
//   const widthEl = document.querySelector('.image-wrapper > :first-child').offsetWidth + 24
//   imageWrapper.style.left = `-${totalScroll * widthEl}px`
//   imageWrapper.style.transition = '.3s'
// }