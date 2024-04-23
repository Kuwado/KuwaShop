$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#img-file').on('change', () => {
    var formData = new FormData()
    var files = $('#img-file')[0].files
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
                for (let index = 0; index < result.url.length; index++) {
                    html += '<img src="' + result.paths[index] + '" alt=""><input type="hidden" value="' + result.paths[index] + '" class="product-images" name="product_images[]">'
                    $('#input-file-imgs').html(html)
                }
            }
        }
    })
});