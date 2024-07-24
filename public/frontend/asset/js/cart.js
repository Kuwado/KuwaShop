function deleteProductFromCart(key) {
    if (confirm('Bạn có chắc muốn xóa sản phẩm?')) {
        window.location.href = '/cart/delete/' + key;
    }
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function decreaseProductFromCart(element) {
    var div = $(element).closest('.cart-preview-number');
    var quantityInput = div.find('.cart-preview-input');
    var quantity = parseInt(quantityInput.val());
    var button = $(element);
    var key = button.attr('formaction').split('/').pop();
    quantity--;
    quantityInput.val(quantity);
    var data = {
        'key': key,
        'quantity': quantity
    };
    $.ajax({
        type: 'POST',
        url: '/cart/update',
        data: data,
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                if (quantity == 0) {
                    alert('Đã xóa sản phẩm.')
                } else {
                    alert('Giảm bớt thành công!!')
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
}

function increaseProductFromCart(element) {
    var div = $(element).closest('.cart-preview-number');
    var quantityInput = div.find('.cart-preview-input');
    var quantity = parseInt(quantityInput.val());
    var button = $(element);
    var key = button.attr('formaction').split('/').pop();

    if (quantity < 10) {
        quantity++;
        quantityInput.val(quantity);
        var data = {
            'key': key,
            'quantity': quantity
        };
        $.ajax({
            type: 'POST',
            url: '/cart/update',
            data: data,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    alert('Thêm thành công !!!');
                    location.reload();
                } else {
                    alert('Chưa thể thêm sản phẩm. Vui lòng thử lại');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                alert('Lỗi !!!');
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
        window.location.href = '/';
    }
}

function orderCart(number) {
    if (number > 0) {
        window.location.href = '/cart/order';
    } else {
        alert('Hiện chưa có hàng trong giỏ. Vui lòng thêm hàng !!!');
    }
}