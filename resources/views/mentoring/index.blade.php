@extends ('mentoring.base')

@section ('main')

<h4>Kegiatan Mentoring</h4>

<div class="site-border-top-grey mt-3 p-3">
@forelse ($mentorings as $mentoring)
	<article class="card">
		<div class="card-body">
			<h5>{{ $mentoring->title }}</h5>

		@if (Auth::check() && Auth::user()->name === 'admin')
			<a href="{{ route('mentoring.show', ['mentoring' => $mentoring] )}}"
				class="stretched-link">
				Update Berita
				</a>
		@endif

		@if ($mentoring->users->contains(Auth::user()))
			<form method="POST" action="#">
				@csrf
				<input type="submit" value="Batalkan Mentoring" class="btn btn-secondary">
			</form>

		@else
			<form method="POST" action="#">
				@csrf
				<input type="submit" name="Gabung Mentoring" class="btn btn-primary">
			</form>

		@endif
		</div>
	</article>

@empty
	<p><i>Belum ada kegiatan mentoring yang akan diselenggarakan</i></p>

@endforelse
</div>

@endsection