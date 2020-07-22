@extends ('forum.base')

@section ('main')

<header class="d-lg-flex align-items-center p-2">
	<h3>Forum Tanya Jawab</h3>
	<p class="m-0 ml-auto">
		<a class="btn btn-primary" href="{{ route('forum.create') }}">Tulis Pertanyaan</a></p>
</header>

<section class="site-border-top-grey p-2 py-3">
@forelse ($questions as $question)
	<article class="card mb-4">
		<div class="card-body pb-1">
			<div class="container pl-0 d-flex align-items-center mb-2">
				<img class="site-shape-circle" width="30px" height="30px"
					src="{{ $question->user->profile_picture->profile_picture_link }}" alt="user">
				<p class="ml-2 mb-0">{{ $question->user->name }}</p>
			</div>
			<h4>{{ $question->title }}</h4>
			<p class="d-inline-block mr-2">{{ $question->answers->count() }} jawaban</p>
			<!-- hidden-link -->
			<a class="stretched-link" href="{{ route('forum.show', ['question' => $question]) }}">Lihat pertanyaan</a>
		</div>
	</article>

@empty
	<h5><i>Wah, belum ada pertanyaan nih</i></h5>

@endforelse	
</section>

<footer class="card-footer bg-white d-flex justify-content-center">
	{{ $questions->links() }}
</footer>

@endsection