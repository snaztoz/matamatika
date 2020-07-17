let mentoringCreationEditor = new Quill('#mentoring-email-typing-area', {
	modules: {
		toolbar: {
			container: [
				['bold', 'italic', 'underline'],
				['link']
			],
		}
	},
	placeholder: 'Tuliskan email',
	theme: 'snow'
});