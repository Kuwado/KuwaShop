const categoryColorDots = document.querySelectorAll(".category-color-bar");

categoryColorDots.forEach(c => {
    const dots = c.querySelectorAll(".color-dot");

    dots.forEach(dot => {
        const i = dot.querySelector("i");
        dot.addEventListener("click", function(){
            if (i.classList.contains("show")){
                i.classList.remove("show");
            }
            else {
                i.classList.add("show");
            }
        })
    })
})