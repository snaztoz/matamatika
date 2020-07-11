/* Editor untuk menulis jawaban terhadap pertanyaan 
 * terkait.
 */
var answerEditor = new Quill('#answer-typing-area', {
	modules: {
		toolbar: {
			container: [
				['bold', 'italic', 'underline'],
				['image', 'link']
			],
		}
	},
	placeholder: 'Tulis jawabanmu di sini',
	theme: 'snow'
});

/* Mencegah jawaban kosong yang disubmit. */
$('#answer-submit-button').click(function(event) {
	event.preventDefault();

	// cek apakah isi jawaban kosong
	if (!answerEditor.getText().trim().length 
		&& !answerEditor.container.firstChild.innerHTML.includes("img")) 
	{
		$('#answer-typing-area-empty-message').addClass('d-inline');
		return;			
	}

	$('#answer-hidden-textarea').val(answerEditor.root.innerHTML);
	$('#answer-form').submit();
})

/* Membuka dan menutup bagian balasan dari jawaban
 * tertentu.
 */
$('.site-replies-show-button').each(function() {
	$(this).click(event => {
		event.preventDefault();
		$(this).siblings('.site-replies').toggleClass('d-block');
	});
});

/* Membuat reply typing area menjadi resize secara
 * otomatis ketika tulisan melebihi ukuran box.
 */
$('.reply-typing-area').each(function() {
	$(this).on('input', function() {
		this.style.height = '2.5rem';
		this.style.height = `${this.scrollHeight}px`;
	});
});

/* Memastikan reply typing area tidak kosong ketika
 * balasan disubmit.
 */
$('.reply-submit-button').each(function() {
	$(this).click(event => {
		if ($(this).siblings('textarea').val().trim() === '') {
			event.preventDefault();
			$(this).parent()
					.siblings('.reply-textarea-empty-message')
					.addClass('d-inline');
			return;
		}
	});
});