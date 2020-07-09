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

/* Editor untuk menuliskan balasan terhadap jawaban-jawaban
 * yang ada.
 * Mengingat satu editor hanya dapat dipasang di satu object,
 * maka penggunaan editor ini akan sedikit berbeda. 
 */
var replyEditor;

/* Membuka dan menutup bagian balasan dari jawaban
 * tertentu.
 */
$('.site-replies-show-button').each(function() {
	$(this).click(event => {
		event.preventDefault();
		$(this).siblings('.site-replies').toggleClass('d-block');
	});
});