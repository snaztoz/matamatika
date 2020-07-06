var editor = new Quill('#question-typing-area', {
	modules: {
		toolbar: {
			container: [
				['bold', 'italic', 'underline'],
				['image', 'link']
			],
		}
	},
	placeholder: 'Tulis pertanyaanmu di sini',
	theme: 'snow',
});

/**
 * Salin isi dari div #question-typing-area ke dalam
 * hidden textarea sebelum form disubmit.
 */
$('#question-submit-button').click(function(event) {
	$('#question-hidden-textarea').value = editor.root.innerHTML;
	$('#question-form').submit();
})
