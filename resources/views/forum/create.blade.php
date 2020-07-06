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
					<div id="question-typing-area">
						<!-- displaying text editor -->
					</div>

					<form method="POST" action="{{ route('forum.store') }}" id="question-form">
						@csrf
						<!-- hidden textarea -->
						<textarea id="question-hidden-textarea" name="content" hidden></textarea>
						<input id="question-submit-button" class="btn btn-primary mt-4" type="submit" value="Unggah Pertanyaanmu">
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