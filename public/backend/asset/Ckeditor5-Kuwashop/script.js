document.querySelectorAll('.editor').forEach(element => {
    ClassicEditor
        .create(element, {
            // Cấu hình của trình soạn thảo
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(handleSampleError);
});

function handleSampleError(error) {
    const issueUrl = 'https://github.com/ckeditor/ckeditor5/issues';

    const message = [
        'Oops, something went wrong!',
        `Please, report the following error on ${issueUrl} with the build id "7o149hkueqo4-tsin2o7cgauu" and the error stack trace:`
    ].join('\n');

    console.error(message);
    console.error(error);
}
