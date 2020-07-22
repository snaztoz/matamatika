<div class="col-4 d-none d-md-block">
	<aside class="card site-border-radius-rounded-topleft">
		<div class="card-body pt-5">
			<h5 class="site-title-section site-bg-red text-light">Mentoring</h5>
			<ol class="pl-3">
			@forelse ($mentorings as $mentoring)
				<li><a href="{{ route('mentoring.index') }}">{{ $mentoring->title }}</a></li>	

			@empty
				<p><i>Tidak ada kegiatan mentoring</i></p>

			@endforelse
			</ol>

			@if ($mentorings->count())
			<p class="container">
				<a class="btn btn-outline-info btn-sm" href="{{ route('mentoring.index') }}">Lihat Selengkapnya</a></p>
			@endif

		</div>
	</aside>
</div>