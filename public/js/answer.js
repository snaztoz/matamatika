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
