@extends ('mentoring.base')

@section ('scripts')
<script src="{{ asset('js/mentoring.js' )}}" defer></script>
@endsection

@section ('main')
<h4>Buat Mentoring Baru</h4>

<div class="site-border-top-grey mt-3 p-3">
	<form method="POST" action="{{ route('mentoring.store') }}">
		@csrf
		
		<div class="form-group container">
			<label for="title">Judul Mentoring</label>
			<input name="title" value="{{ old('title') }}" placeholder="judul akan ditampilkan di halaman utama forum" id="mentoring-title-typing-area" class="form-control" required>
			<small id="title-empty-message" class="text-danger d-none">*Judul tidak boleh kosong</small>
		</div>						

		<div class="form-group container">
			<label for="mentoring-desc-typing-area">Deskripsi Mentoring</label>
			<textarea name="content" id="mentoring-desc-typing-area" class="mentoring-desc-typing-area form-control w-100" placeholder="tuliskan deskripsi kegiatan mentoring yang akan dibuat"></textarea>
			<small id="desc-empty-message" class="text-danger d-none">*Deskripsi tidak boleh kosong</small>
		</div>

		<div class="container">
			<input id="mentoring-submit-button" class="btn btn-primary mt-2" type="submit" value="Buat Kegiatan Mentoring">	
		</div>
	</form>
</div>
@endsection