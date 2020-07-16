@extends ('layouts.app')

@section ('content')
<div class="container">
	<div class="d-flex justify-content-center">
		<div class="col-lg-8">	
			<main class="card site-border-radius-rounded-topleft">
				<section class="card-body pt-5">
					<h5 class="site-title-section site-bg-blue text-light">Mentoring Matamatika</h5>
					<div class="mt-1">
						@yield ('main')
					</div>
				</section>
			</main>
		</div>
	</div>
</div>
@endsection