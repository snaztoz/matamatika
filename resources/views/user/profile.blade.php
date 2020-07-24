@extends ('layouts.app')

@section ('scripts')
<script src="{{ asset('js/profile.js') }}" defer></script>
@endsection

@section ('content')
<div class="container d-flex justify-content-center">
	<main class="card col-md-8 p-0 site-border-radius-rounded-topleft">
		<h5 class="site-title-section site-bg-blue text-light">Profil</h5>

		<section class="card-header p-4 d-flex border-bottom border-light
						site-border-radius-rounded-topleft">
			<div class="col-6 col-lg-4 ml-3 d-flex flex-column 
						align-items-center justify-content-center">
				<div style="width: 10rem; height: 10rem">
					<img id="profile-pict" class="site-shape-circle site-hover-pointer w-100 h-100"
						data-toggle="tooltip" data-placement="left" title="Ganti Foto Profil" 
						src="{{ Auth::user()->profile_picture->profile_picture_link }}">
				</div>
				<form method="POST" action="{{ route('profile-picture.update', [
									'profile_picture' => Auth::user()->profile_picture]) }}" 
									enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<input id="profile-pict-hidden-input" type="file" name="pict" hidden>
				</form>
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

		<div class="card-body py-4 px-2 d-md-flex justify-content-center">
			<section class="col-md-6 mr-md-3 mb-4 mb-md-0">
				<h5 class="mb-4"><strong class="text-secondary"><i>Daftar pertanyaan</i></strong></h5>

				<div class="mb-4">
				@forelse (Auth::user()->questions as $question)
					<div class="card mb-3">
						<div class="card-body p-2 pl-3">
							<p class="h5 ml-0">
								<a href="{{ route('forum.show', ['question' => $question]) }}"
								class="stretched-link text-dark">
								{{ $question->title }}</a></p>
							<small>{{ $question->answers->count() }} jawaban</small>
						</div>
					</div>

				@empty
					<p><i>Belum ada pertanyaan yang diajukan</i></p>

				@endforelse
				</div>

				<a class="btn btn-outline-info mb-4" href="{{ route('forum.create') }}">
					Ajukan Pertanyaan
				</a>
			</section>

			<section class="col-md-6">
				<h5 class="mb-4"><strong><i class="text-secondary">Kegiatan mentoring</i></strong></h5>

				<ol class="pl-4 mb-4">
				@forelse (Auth::user()->mentorings->all() as $mentoring)
					<li class="h5">
						<a href="{{ route('mentoring.index') }}" class="text-dark">
							{{ $mentoring->title }}
						</a>
					</li>
		
				@if($loop->last)</ol>@endif

				@empty
				</ol>
				<p class="mb-4"><i>Belum ada kegiatan mentoring yang diikuti</i></p>

				@endforelse
				<a class="btn btn-outline-secondary mb-4" href="{{ route('mentoring.index') }}">
					Lihat Daftar Mentoring
				</a>
			</section>
		</div>
	</main>	
</div>
@endsection