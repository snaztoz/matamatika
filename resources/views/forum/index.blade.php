@extends ('layouts.app')

@section ('content')
<div class="container">
	<div class="d-flex justify-content-center">
		<!-- List untuk pertanyaan (question) -->
		<div class="col-md-8">	
			<main class="card">
				<header class="card-header">
					<h1>Forum</h1>
				</header>

				<section class="card-body">
					<!-- Template untuk setiap pertanyaan yang ada -->
					<article class="card mb-4">
						<div class="card-body pb-2">
							<p class="mb-2">user1537264, ditanyakan 5 hari yang lalu</p>
							<h4>Jika terdapat f(x) = 5x, tentukan integral pertama dari f(x)</h4>
							<p class="mb-2">0 jawaban</p>
							<!-- hidden-link -->
							<a class="stretched-link" href="#">Lihat pertanyaan</a>
						</div>
					</article>

					<article class="card mb-4">
						<div class="card-body pb-2">
							<p class="mb-2">Andi Andrew, ditanyakan 10 hari yang lalu</p>
							<h4>Jika terdapat f(x) = 5x, tentukan integral pertama dari f(x)</h4>
							<p class="mb-2">2 jawaban</p>
							<!-- hidden-link -->
							<a class="stretched-link" href="#">Lihat pertanyaan</a>
						</div>
					</article>

					<article class="card mb-4">
						<div class="card-body pb-2">
							<p class="mb-2">Kevin, ditanyakan 4 hari yang lalu</p>
							<h4>Jika terdapat f(x) = 5x, tentukan integral pertama dari f(x)</h4>
							<p class="mb-2">5 jawaban, <u class="text-success">Terjawab</u></p>
							<!-- hidden-link -->
							<a class="stretched-link" href="#">Lihat pertanyaan</a>
						</div>
					</article>
				</section>

				<footer class="card-footer">
					1 2 3 ...
				</footer>
			</main>
		</div>

		<!-- Sidebar untuk pengumuman terkait kegiatan mentoring -->
		@include ('forum.sidebar')
	</div>
</div>
@endsection