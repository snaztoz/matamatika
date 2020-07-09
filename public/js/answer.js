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
