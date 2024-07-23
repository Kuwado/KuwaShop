function deleteProductFromCart(key) {
    if (confirm('Bạn có chắc muốn xóa sản phẩm?')) {
        window.location.href = '/cart/delete/' + key;
    }
}

function decreaseProductFromCart(element) {
    var form = $(element).closest('.cart-preview-number');
    var quantityInput = form.find('.cart-preview-input');
    var quantity = parseInt(quantityInput.val());
    var key = form.attr('action').split('/').pop(); // Get the key from the form action URL
    quantity--;
    quantityInput.val(quantity);
    $.ajax({
        type: 'POST',
        url: '/cart/preview/update/' + key,
        data: form.serialize(),
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                // alert(response.message);
                // cartPreview ở main.js
                if (cartPreview.classList.contains('active')) {
                    localStorage.setItem('cartPreviewActive', 'true');
                } else {
                    localStorage.setItem('cartPreviewActive', 'false');
                }
                location.reload();
            } else {
                alert('Chưa thể thêm sản phẩm. Vui lòng thử lại');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            alert('Failed to add product to cart. Please try again.');
        }
    });
    if (quantity == 0) {
        alert('Đã xóa sản phẩm.')
    }
}

function increaseProductFromCart(element) {
    var form = $(element).closest('.cart-preview-number');
    var quantityInput = form.find('.cart-preview-input');
    var quantity = parseInt(quantityInput.val());
    var key = form.attr('action').split('/').pop();
    if (quantity < 10) { 
        quantity++;
        quantityInput.val(quantity);
        $.ajax({
            type: 'POST',
            url: '/cart/preview/update/' + key,
            data: form.serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // alert(response.message);
                    // cartPreview ở main.js
                    if (cartPreview.classList.contains('active')) {
                        localStorage.setItem('cartPreviewActive', 'true');
                    } else {
                        localStorage.setItem('cartPreviewActive', 'false');
                    }
                    location.reload();
                } else {
                    alert('Chưa thể thêm sản phẩm. Vui lòng thử lại');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                alert('Failed to add product to cart. Please try again.');
            }
        });
    } else {
        alert('Giới hạn sản phẩm là 10.');
    }
}

function cartBack() {
    if (document.referrer) {
        window.history.back();
    } else {
        window.location.href = '/home';
    }
}