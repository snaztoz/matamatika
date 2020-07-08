@extends ('forum.base')

@section ('main')
<article class="card mb-4">
	<div class="card-body pb-2">
		<div class="container pl-0 d-flex">
			<img class="site-shape-circle" src="{{ asset('storage/images/default_user.png') }}" width="30px" height="30px" alt="user">
			<p class="ml-2">user123421</p>
		</div>
		<h4>Jika terdapat f(x) = 5x, tentukan integral pertama dari f(x)</h4>
		<p class="mb-2">0 jawaban</p>
		<!-- hidden-link -->
		<a class="stretched-link" href="#">Lihat pertanyaan</a>
	</div>
</article>

<article class="card mb-4">
	<div class="card-body pb-2">
		<div class="container pl-0 d-flex">
			<img class="site-shape-circle" src="{{ asset('storage/images/default_user.png') }}" width="30px" height="30px" alt="user">
			<p class="ml-2">Andi Andrew</p>
		</div>
		<h4>Jika terdapat f(x) = 5x, tentukan integral pertama dari f(x)</h4>
		<p class="mb-2">2 jawaban</p>
		<!-- hidden-link -->
		<a class="stretched-link" href="#">Lihat pertanyaan</a>
	</div>
</article>

<article class="card mb-4">
	<div class="card-body pb-2">
		<div class="container pl-0 d-flex">
			<img class="site-shape-circle" src="{{ asset('storage/images/default_user.png') }}" width="30px" height="30px" alt="user">
			<p class="ml-2">Kevin</p>
		</div>
		<h4>Jika terdapat f(x) = 5x, tentukan integral pertama dari f(x)</h4>
		<p class="mb-2">5 jawaban, <u class="text-success">Terjawab</u></p>
		<!-- hidden-link -->
		<a class="stretched-link" href="#">Lihat pertanyaan</a>
	</div>
</article>

<footer>
	1 2 3 ...
</footer>

@endsection