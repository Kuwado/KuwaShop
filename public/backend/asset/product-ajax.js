$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#img-files').on('change', () => {
    var formData = new FormData()
    var files = $('#img-files')[0].files
    for (let index = 0; index < files.length; index++) {
        formData.append('files[]', files[index])
    }
    $.ajax({
        url: '/uploads',
        method: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success: function (result) {
            if (result.success = true) {
                html = ''
                for (let index = 0; index < result.paths.length; index++) {
                    html += '<img src="' + result.paths[index] + '" alt=""><input type="hidden" value="' + result.paths[index] + '" class="product-images" name="images[]">'
                    $('#input-file-imgs').html(html)
                }
            }
        }
    })
});

$('#img-file').on('change', () => {
    var formData = new FormData();
    var file = $('#img-file')[0].files[0]
    formData.append('file', file)
    $.ajax({
        url: '/upload',
        processData: false,//illega invocation
        dataType: 'json',
        data: formData,
        method: 'POST',
        contentType: false,// khong hien o preview
        success: function (result) {
            if (result.success == true) {
                html = '';
                html += '<img src="' + result.path + '" alt="">';
                $('#input-file-img').html(html)
                $('#product-image').val(result.path)
            }
        }
    })
});

// Xóa dữ liệu trong db
function removeRow(product_id, url) {
    if (confirm('Xác nhận xóa')) {
        $.ajax({
            url: url,
            data: { product_id },
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