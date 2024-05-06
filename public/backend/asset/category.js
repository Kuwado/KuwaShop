function addNewField(container, labelName, inputName) {
    const newDiv = document.createElement('div');
    newDiv.classList.add('add-detail');
    newDiv.innerHTML = `
        <label>${labelName}:</label>
        <input type="text" name="${inputName}[]" class="category-add-input">
    `;
    container.appendChild(newDiv);
}

// Sử dụng hàm addNewField để thêm loại mới
const modalBodyType = document.querySelector(".type-body");
const modalBodySub = document.querySelector(".sub-body");
const modalBodyMini = document.querySelector(".mini-body");

function moreType() {
    addNewField(modalBodyType, 'Tên Type', 'types');
}

function moreSub() {
    addNewField(modalBodySub, 'Tên SubType', 'subs');
}

function moreMini() {
    addNewField(modalBodyMini, 'Tên MiniType', 'minis');
}
