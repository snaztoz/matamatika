@extends ('layouts.app')

@section ('scripts')
<script src="{{ asset('js/quill/quill.min.js') }}" defer></script>
<script src="{{ asset('js/question.js') }}" defer></script>
@endsection

@section ('content')
<div class="container">
	<div class="d-flex justify-content-center">
		<div class="col-md-8">
			<main class="card">
				<header class="card-header">
					<h1>Forum</h1>
				</header>

				<content class="card-body">
					<h4 class="mb-4">Ada yang ingin ditanyakan? Tuliskan pertanyaanmu!</h4>

					<form method="POST" action="{{ route('forum.store') }}" id="question-form">
						@csrf

						<div class="form-group container">
							<label for="title" class="">Judul pertanyaan</label>
							<input name="title" value="{{ old('title') }}" placeholder="judul akan ditampilkan di halaman utama forum" class="form-control">	
						</div>						

						<div class="form-group container">
							<label for="question-typing-area">Isi pertanyaan</label>
							<div id="question-typing-area">
								<!-- displaying text editor -->
							</div>
						</div>

						<!-- hidden textarea -->
						<textarea id="question-hidden-textarea" name="content" hidden></textarea>

						<div class="container">
							<input id="question-submit-button" class="btn btn-primary mt-2" type="submit" value="Unggah Pertanyaanmu">	
						</div>
						
					</form>
				</content>
			</main>
		</div>

		<!-- Sidebar untuk pengumuman terkait kegiatan mentoring -->
		<div class="col-4 d-none d-md-block">
			<aside class="card">
				<header class="card-header">
					<h3>Mentoring</h3>
				</header>

				<content class="card-body">
					<ol class="pl-4">
						<li><a href="#">Kelas online untuk materi limit kelas XI</a></li>
					</ol>
				</content>
			</aside>
		</div>
	</div>
</div>
@endsection