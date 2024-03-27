const kaka = document.querySelector(".kaka-btn");
const tieude = document.querySelector(".tieude");

kaka.addEventListener("click", function(){
    if (tieude.classList.contains("tieudeshow")){
        tieude.classList.remove("tieudeshow");
    }
    else
    tieude.classList.add("tieudeshow");
})