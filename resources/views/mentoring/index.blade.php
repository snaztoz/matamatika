@extends ('mentoring.base')

@section ('main')

@if (Session::has('registered'))
<div id="clear-target">
	<div id="screen-cover" class="site-screen-cover"></div>
	<div id="popup" class="site-registration-popup bg-light p-3 rounded
			d-flex flex-column justify-content-center align-items-center">
		<p class="site-popup-close-button h3">
			<a id="close-popup" href="#" class="text-danger"><b>&times;</b></a>
		</p>
		<p class="h1 text-center text-success mb-3">&#10004;</p>
		<p class="text-center h5">{{ Session::get('registered') }}</p>
	</div>
</div>
@endif

<div class="d-flex px-2 py-1 align-items-center">
	<h4 class="">Kegiatan Mentoring</h4>
	@if (Auth::check() && Auth::user()->name === 'admin')
	<p class="ml-auto mb-0"><a class="btn btn-primary" href="{{ route('mentoring.create') }}">Buat Baru+</a></p>
	@endif	
</div>

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

@if (Session::has('registered'))
<script type="text/javascript">
	document.querySelector('#close-popup').addEventListener('click', function() {
		document.querySelector('#clear-target').innerHTML = '';
	});
</script>
@endif

@endsection