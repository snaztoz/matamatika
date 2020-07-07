@extends ('layouts.app')

@section ('content')
<div class="container">
	<div class="d-flex justify-content-center">
		<!-- List untuk pertanyaan (question) -->
		<div class="col-md-8">	
			<main class="card site-border-radius-rounded-topleft">
				<section class="card-body pt-5">
					<h5 class="site-title-section site-bg-blue text-light">Forum Matamatika</h5>
					<div class="mt-1">
						@yield ('main')
					</div>
				</section>
			</main>
		</div>

		<!-- Sidebar untuk pengumuman terkait kegiatan mentoring -->
		@include ('forum.sidebar')
	</div>
</div>
@endsection