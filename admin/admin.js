$(document).ready(function (e) {
    $('.add_tag').click(function () {
        let text = $('textarea[name="map"]').val();
        let curr = $(this).data('value');
        $('textarea[name="map"]').val(text + '\n' + curr);
    });
});