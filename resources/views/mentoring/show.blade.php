@extends ('mentoring.base')

@section ('scripts')
<script src="{{ asset('js/quill/quill.min.js') }}" defer></script>
<script src="{{ asset('js/mentoring_create.js') }}" defer></script>
@endsection

@section ('main')
<h5>Update berita kegiatan mentoring</h5>
<h3>{{ $mentoring->title }}</h3>

<div class="site-border-top-grey mt-3 p-3">
	<form>
		<div class="form-group">
			<label for="mentoring-email-typing-area">Tulis Email</label>
			<div id="mentoring-email-typing-area">
				<!-- displaying text editor -->
			</div>
			<small id="mentoring-email-typing-area-empty-message" class="text-danger d-none">*Isi pertanyaan tidak boleh kosong</small>
		</div>

		<textarea id="mentoring-email-hidden-textarea" name="mail" hidden>{{ $latest_mail }}</textarea>

		<input type="submit" value="Kirim Email" class="btn btn-primary">
	</form>		
</div>
@endsection