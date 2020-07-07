@extends ('layouts.app')

@section ('scripts')
<script type="text/javascript" src="{{ asset('js/quill/quill.min.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('js/answer.js') }}" defer></script>
@endsection

@section ('content')
<div class="container">
	<div class="d-flex justify-content-center">
		<!-- List untuk pertanyaan (question) -->
		<div class="col-md-8">
			<main class="card mb-4">
				<header class="card-header">
					<h1>Forum</h1>
				</header>

				<section class="card-body">
					<article class="container">
						<h2 class="mb-3">{{ $question->title }}</h2>
						{!! $question->content !!}	
					</article>

					<section class="container mb-4">
						<div class="pt-3">
							<h4 class="mb-3">Bagikan jawabanmu!</h4>	
							<div id="answer-typing-area"></div>
							<form method="POST">
								@csrf
								<textarea id="answer-hidden-textarea" name="content" hidden></textarea>
								<input type="submit" value="Kirim Jawabanmu" class="btn btn-primary mt-3">
							</form>
						</div>
					</section>

					<section class="container">
						<div class="pt-3">
							<h4>2 jawaban</h4>

							<!-- All answers -->
							<section class="mt-4">
								<!-- Individual answer -->
								<div class="mb-4">
									<p class="mb-3">user3412312</p>
									<p>Jawabannya adalah x = 5</p>
									<div class="d-flex pb-2">
										<small class="d-block mr-4">Balas</small>
										<small class="d-block">2 balasan</small>
									</div>

									<!-- Answer's replies -->
									<section class="container mt-2">
										<div class="p-1 pl-3 pr-2 mb-3 border-left border-warning bg-light">
											<p class="mb-2">user12341</p>
											<p>Bukannya 7 ya?</p>
										</div>
										<div class="p-1 pl-3 pr-2 mb-3 border-left border-warning bg-light">
											<p class="mb-2">user3412312</p>
											<p>Oiya deng bener juga :) . Maaf salah</p>
										</div>
									</section>
								</div>

								<!-- Individual answer -->
								<div>
									<p class="mb-3">user12543</p>
									<p>7 gan jawabannya</p>
									<div class="d-flex pb-2">
										<small class="d-block mr-4">Balas</small>
									</div>

									<section class="container mt-2"></section>
								</div>

							</section>
						</div>
					</section>
				</section>
			</main>
		</div>

		<!-- Sidebar untuk pengumuman terkait kegiatan mentoring -->
		@include ('forum.sidebar')
	</div>
</div>
@endsection