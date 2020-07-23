@extends ('layouts.app')

@section ('content')
<div class="container d-flex justify-content-center">
	<main class="card col-md-8 p-0 site-border-radius-rounded-topleft">
		<h5 class="site-title-section site-bg-blue text-light">Profil</h5>

		<section class="card-header p-4 d-flex border-bottom border-light
						site-border-radius-rounded-topleft">
			<div class="col-6 col-lg-4 d-flex flex-column justify-content-center">
				<div class="align-middle">
					<img class="site-shape-circle col-12" src="{{ Auth::user()->profile_picture->profile_picture_link }}">
				</div>
			</div>
			<div class="p-3 d-flex flex-column justify-content-center">
				<p class="h4">{{ Auth::user()->name }}</p>
				<p class="h5"><i>{{ Auth::user()->email }}</i></p>
				<div class="mt-3">
					<p class="mb-0">{{ Auth::user()->questions->count() }} pertanyaan</p>
					<p class="">{{ Auth::user()->answers->count() }} jawaban</p>
				</div>
			</div>
		</section>

		<div class="card-body p-4 d-md-flex">
			<section class="p-1 col-md-6 mr-md-4">
				<h5 class="mb-4">Daftar pertanyaan</h5>

				<div class="mb-4">
				@forelse (Auth::user()->questions as $question)
					<div class="card mb-3">
						<div class="card-body p-2 pl-3">
							<p class="h5 ml-0">
								<a href="{{ route('forum.show', ['question' => $question]) }}"
								class="stretched-link text-dark">
								{{ $question->title }}</a></p>
							<small>2 Agustus 2020, {{ $question->answers->count() }} jawaban</small>
						</div>
					</div>

				@empty
					<p><i>Belum ada pertanyaan yang diajukan</i></p>

				@endforelse
				</div>

				<a class="btn btn-outline-info mb-4" href="{{ route('forum.create') }}">Ajukan Pertanyaan</a>
			</section>

			<section class="p-1 col-md-6">
				<h5 class="mb-4">Kegiatan mentoring</h5>

				<div>
					<p><i>Wah, belum ada fitur mentoring nih :(</i></p>

				</div>

				<a class="btn btn-outline-secondary mb-4" href="#">Lihat Daftar Mentoring</a>
			</section>
		</div>
	</main>	
</div>
@endsection