@extends ('mentoring.base')

@section ('scripts')
<script src="{{ asset('js/quill/quill.min.js') }}" defer></script>
<script src="{{ asset('js/mentoring_create.js') }}" defer></script>
@endsection

@section ('main')
<h5>Update berita kegiatan mentoring</h5>
<h3>{{ $mentoring->title }}</h3>

<div class="site-border-top-grey mt-3 p-3">
	<form method="POST" action="#">
		@csrf
		<div class="form-group">
			<label for="mentoring-email-typing-area">Tulis Email</label>
			<div id="mentoring-email-typing-area">
				<!-- displaying text editor -->
			</div>
			<small id="mentoring-email-typing-area-empty-message" class="text-danger d-none">*Isi email tidak boleh kosong</small>
		</div>

		<textarea id="mentoring-email-hidden-textarea" name="mail" hidden>{{ $latest_mail }}</textarea>

		<input type="submit" value="Kirim Email*" id="mentoring-email-submit" class="btn btn-primary">
		<small class="d-block mt-2 text-info">
				*Email terbaru yang akan dikirim ke semua peserta yang tergabung
				dengan kegiatan ini</small>
	</form>		
</div>

<div class="mt-4 pt-2">
	<form method="POST" action="{{ route('mentoring.destroy', ['mentoring' => $mentoring]) }}" 
			class="container">
		@csrf
		@method('DELETE')
		<div class="form-group container rounded col-md-6 p-3">
			<label class="text-center">Tandai kegiatan mentoring menjadi sudah selesai:</label>
			<div class="border-top border-light d-flex flex-column align-items-center">
				<input type="submit" value="Selesai" class="btn btn-info mb-2 text-white">
				<small class="d-block text-danger text-center">PERHATIAN: kegiatan yang sudah selesai 
						tidak dapat dikembalikan lagi</small>	
			</div>
		</div>
	</form>
</div>
@endsection