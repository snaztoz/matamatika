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
 * hidden textarea sebelum question-form disubmit.
 */
$('#question-submit-button').click(function(event) {
	event.preventDefault();

	// cek apakah isi pertanyaan kosong
	if (!editor.getText().trim().length 
		&& !editor.container.firstChild.innerHTML.includes("img")) 
	{
		$('#question-typing-area-empty-message').addClass('d-inline');
		return;			
	}

	$('#question-hidden-textarea').val(editor.root.innerHTML);
	$('#question-form').submit();
})
