@extends ('mentoring.base')

@section ('main')

<h4>Kegiatan Mentoring</h4>

<div class="site-border-top-grey mt-3 p-3">
@forelse ($mentorings as $mentoring)
	<article class="card">
		<div class="card-body">
			<h5>{{ $mentoring->title }}</h5>
			<p>{{ $mentoring->description }}</p>

		@if (Auth::check() && Auth::user()->name === 'admin')
			<a href="{{ route('mentoring.show', ['mentoring' => $mentoring] )}}"
				class="btn btn-info">
				Update+
				</a>

		@else
			@if ($mentoring->users->contains(Auth::user()))
				<form method="POST" class="d-inline-block" 
						action="{{ route('mentoring-unregister', ['mentoring' => $mentoring]) }}">
					@csrf
					<input type="submit" value="Batalkan Mentoring" class="btn btn-secondary">
				</form>

			@else
				<form method="POST" class="d-inline-block"
						action="{{ route('mentoring-register', ['mentoring' => $mentoring]) }}">
					@csrf
					<input type="submit" value="Gabung Mentoring" class="btn btn-primary">
				</form>

			@endif
		@endif
		</div>
	</article>

@empty
	<p><i>Belum ada kegiatan mentoring yang akan diselenggarakan</i></p>

@endforelse
</div>

@endsection