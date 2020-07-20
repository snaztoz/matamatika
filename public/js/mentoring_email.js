$('#mentoring-email-submit').click(function(event) {
	/* Mencegah isi email yang dikirimkan hanya berupa
	 * pesan kosong.
	 */
	if (!$('#mentoring-email-typing-area').val().trim().length) {
		event.preventDefault();
		$('#mentoring-email-typing-area-empty-message').addClass('d-inline');
		return;
	}
});

/**
 * Ukuran dari text editor dapat berubah sesuai dengan konten
 * yang ada di dalamnya.
 */
$('#mentoring-email-typing-area').on("input", function() {
	this.style.height = '2.5rem';
	this.style.height = `${this.scrollHeight}px`;
});


$(document).ready(function() {
	/**
	 * Menyesuaikan ukuran text editor dengan konten ketika page 
	 * pertama kali dimuat.
	 */
	$('#mentoring-email-typing-area').css(
			'height', 
			$('#mentoring-email-typing-area').prop('scrollHeight')
	);
});