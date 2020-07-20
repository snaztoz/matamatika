let mentoringEmailEditor = new Quill('#mentoring-email-typing-area', {
	modules: {
		toolbar: {
			container: [
				[{'header': 1}, {'header': 2}],
				['bold', 'italic', 'underline'],
				['link']
			],
		}
	},
	placeholder: 'Tuliskan email',
	theme: 'snow'
});

$('#mentoring-email-submit').click(function(event) {
	// mencegah isi email kosong
	if (!mentoringEmailEditor.getText().trim().length) {
		event.preventDefault();
		$('#mentoring-email-typing-area-empty-message').addClass('d-inline');
		return;
	}

	$('#mentoring-email-hidden-textarea')
			.val(mentoringEmailEditor.root.innerHTML);
});

/**
 * Mengisi text editor ketika page pertama kali dimuat 
 * dengan isi dari email yang terakhir kali dikirim.
 */
mentoringEmailEditor.root.innerHTML = 
		$('#mentoring-email-hidden-textarea').val();