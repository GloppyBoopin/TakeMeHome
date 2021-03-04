function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(input).closest('.form-input-image-label').find('.input-image-preview')
                .attr('src', e.target.result)
                .width(176);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function showName() {
	var name = document.getElementById('input-image-1');
    var text = document.getElementById('value');
    text.textContent = name.files.item(0).name;
}

$('.clear-input-image').click(function() {
	var img = $(this).closest('div').find('.input-image-preview');
	var input = $(this).closest('div').find('input:file');

	$(img).attr('src', '');
	$(input).val('');
	$('#value').html('');
});
