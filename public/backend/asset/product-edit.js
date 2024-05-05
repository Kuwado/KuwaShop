function takeColor(productId) {
    $.ajax({
        url: '/admin/product/edit/' + productId, // Replace {id} with the actual productId
        method: 'GET',
        dataType: 'JSON',
        success: function (result) {
            if (result.success) {
                var selectElement = $('#select-color');
                var optionName = result.product.color;
                selectElement.val(optionName); // Set the value of select to the desired option
            } else {
                console.error('Failed to fetch product color');
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX request failed:', error);
        }
    });
}

