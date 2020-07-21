var emailEditor = new Quill('#mentoring-email-typing-area', {
		modules: {
			toolbar: {
				container: [
					['bold', 'italic', 'underline'],
					['link']
				],
			}
		},
		placeholder: 'Tulis pertanyaanmu di sini',
		theme: 'snow',
	});
;

$('#mentoring-email-submit').click(function(event) {
	/* Mencegah isi email yang dikirimkan hanya berupa
	 * pesan kosong.
	 */
	if (!emailEditor.getText().trim().length) {
		event.preventDefault();
		$('#mentoring-email-typing-area-empty-message').addClass('d-inline');
		return;
	}

	/* Menyalin isi dari editor ke dalam hidden textarea */
	$('#mentoring-email-hidden-textarea')
			.val(emailEditor.root.innerHTML);	
});

$(document).ready(function() {
	emailEditor.root.innerHTML = 
			$('#mentoring-email-hidden-textarea').val();
});