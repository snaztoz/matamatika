/**
 * Mengubah ukuran dari typing area agar menyesuaikan
 * dengan konten yang ada di dalamnya.
 */
$('#mentoring-desc-typing-area').on("input", function() {
	this.style.height = '2.5rem';
	this.style.height = `${this.scrollHeight}px`;
});

/**
 * Validasi form ketika tombol submit ditekan.
 * Juga mengganti setiap karakter 'newline' yang
 * ditemui di desc typing area menjadi <br>.
 */
$('#mentoring-submit-button').click(function(event) {
	if ($('#mentoring-title-typing-area').val().trim() === '') {
		event.preventDefault();
		$('#title-empty-message').addClass('d-inline');
		return;
	}

	if ($('#mentoring-desc-typing-area').val().trim() === '') {
		event.preventDefault();
		$('#desc-empty-message').addClass('d-inline');
		return;
	}

	$('#mentoring-desc-typing-area').val(
		$('#mentoring-desc-typing-area').val().split('\n').join('<br>')
	);
});