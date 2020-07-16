@extends ('mentoring.base')

@section ('main')
<h4>Buat Mentoring Baru</h4>

<div class="site-border-top-grey mt-3 p-3">
	<form method="POST" action="{{ route('mentoring.store') }}">
		@csrf
		
		<div class="form-group container">
			<label for="title">Judul Mentoring</label>
			<input name="title" value="{{ old('title') }}" placeholder="judul akan ditampilkan di halaman utama forum" class="form-control" required>	
		</div>						

		<div class="form-group container">
			<label for="question-typing-area">Deskripsi Mentoring</label>
			<textarea name="content" id="mentoring-desc-textarea" class="form-control w-100" placeholder="tuliskan deskripsi kegiatan mentoring yang akan dibuat"></textarea>
			<small id="question-typing-area-empty-message" class="text-danger d-none">*Isi pertanyaan tidak boleh kosong</small>
		</div>

		<div class="container">
			<input id="mentoring-submit-button" class="btn btn-primary mt-2" type="submit" value="Buat Kegiatan Mentoring">	
		</div>
	
	</form>
</div>
@endsection