/**
 * Mentrigger hidden input ketika gambar diklik.
 */
$('#profile-pict').click(function() {
	$('#profile-pict-hidden-input').click()
});

/**
 * Memilih gambar yang akan digunakan dan langsung mensubmit
 * form ketika gambar valid untuk digunakan.
 */
$('#profile-pict-hidden-input').on('change', function(event) {
	let LEGAL_FILE_FORMATS = ["image/jpg", "image/jpeg", "image/png"];

	if (this.files && this.files[0]) {
		if (LEGAL_FILE_FORMATS.includes(this.files[0].type)) {
			$('#profile-pict-hidden-input').parent().submit();
			return;
		}
	}

	event.preventDefault();
});

/* Menginisialisasikan tooltip */
$('[data-toggle="tooltip"]').tooltip();