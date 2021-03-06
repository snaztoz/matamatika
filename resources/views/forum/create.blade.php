@extends ('forum.base')

@section ('scripts')
<script src="{{ asset('js/quill/quill.min.js') }}" defer></script>
<script src="{{ asset('js/question.js') }}" defer></script>
@endsection

@section ('main')
<h4 class="mb-4">Ada yang ingin ditanyakan? Tuliskan pertanyaanmu!</h4>

<form method="POST" action="{{ route('forum.store') }}" id="question-form">
	@csrf

	<div class="form-group container">
		<label for="title">Judul pertanyaan</label>
		<input name="title" value="{{ old('title') }}" placeholder="judul akan ditampilkan di halaman utama forum" class="form-control" required>	
	</div>						

	<div class="form-group container">
		<label for="question-typing-area">Isi pertanyaan</label>
		<div id="question-typing-area">
			<!-- displaying text editor -->
		</div>
		<small id="question-typing-area-empty-message" class="text-danger d-none">*Isi pertanyaan tidak boleh kosong</small>
	</div>

	<!-- hidden textarea -->
	<textarea id="question-hidden-textarea" name="content" hidden></textarea>

	<div class="container">
		<input id="question-submit-button" class="btn btn-primary mt-2" type="submit" value="Unggah Pertanyaanmu">	
	</div>
	
</form>
@endsection