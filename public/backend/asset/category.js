function addCategory(container, labelName, inputName, id) {
    const newDiv = document.createElement('div');
    newDiv.classList.add('add-detail');
    newDiv.innerHTML = `
        <label>${labelName}:</label>
        <input type="text" name="${inputName}[]" class="category-add-input" id="${inputName}-${id}">
    `;
    container.appendChild(newDiv);
}

function removeCategory(inputName, id) {
    let body; // Khai báo biến body ở ngoài để có thể truy cập bên ngoài if-else

    if (id === 'type') {
        body = document.querySelector(`#${inputName}-body`);
    } else {
        body = document.querySelector(`#${inputName}-body-${id}`);
    }

    const divs = body.querySelectorAll('div');
    if (divs.length === 0) {
        return;
    }

    // Lấy phần tử div cuối cùng trong danh sách
    const lastDiv = divs[divs.length - 1];
    body.removeChild(lastDiv);
}


// Sử dụng hàm addCategory để thêm loại mới
const modalBodyType = document.querySelector("#type-body");

function moreType() {
    addCategory(modalBodyType, 'Tên Type', 'types', ''); // Để thêm loại mới, id có thể là chuỗi trống hoặc null
}

function moreSub(id) {
    const modalBodySub = document.querySelector(`#sub-body-${id}`);
    addCategory(modalBodySub, 'Tên SubType', 'subs', id);
}

function moreMini(id) {
    const modalBodyMini = document.querySelector(`#mini-body-${id}`);
    addCategory(modalBodyMini, 'Tên MiniType', 'minis', id);
}

// Xóa dòng
function lessType(id) {
    removeCategory('type', id);
}

function lessSub(id) {
    removeCategory('sub', id);
}

function lessMini(id) {
    removeCategory('mini', id);
}

// Xóa dữ liệu trong db
function deleteCategory(category_id, url, name) {
    if (confirm(`Bạn có chắc muốn xóa Category: ${name} này không`)) {
        $.ajax({
            url: url,
            data: { category_id },
            method: 'GET',
            dataType: 'JSON',
            success: function (res) {
                if(res.success == true) {
                    location.reload();
                }
            }
        });
    }
}