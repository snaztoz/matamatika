@extends ('forum.base')

@section ('scripts')
<script type="text/javascript" src="{{ asset('js/quill/quill.min.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('js/answer.js') }}" defer></script>
@endsection

@section ('main')
<div class="container mb-4">
	<a href="{{ route('forum.index') }}"
			class="btn btn-outline-dark btn-sm align-middle">&#8592; Kembali</a>
</div>

<article class="container">
	<div class="container pl-0 d-flex align-items-center mb-3">
		<img class="site-shape-circle" width="30px" height="30px"
			src="{{ $question->user->profile_picture->profile_picture_link }}" alt="user">
		<p class="ml-2 mb-0">{{ $question->user->name }}</p>
	</div>
	<h2 class="mb-3">{{ $question->title }}</h2>
	{!! $question->content !!}	
</article>

<section class="container mt-4 mb-4">
	<div class="pt-3">
		<h4 class="mb-3">Bagikan jawabanmu!</h4>	
		<div id="answer-typing-area"></div>
		<small id="answer-typing-area-empty-message" class="text-danger d-none">*Isi jawaban tidak boleh kosong</small>
		<form id="answer-form" method="POST" action="{{ route('forum.answers.store', 
																['forum' => $question]) }}">
			@csrf
			<textarea id="answer-hidden-textarea" name="content" hidden></textarea>
			<input type="submit" value="Kirim Jawabanmu" id="answer-submit-button" class="btn btn-primary mt-3">
		</form>
	</div>
</section>

<section class="container">
	<div class="pt-3">
		<h4>{{ $question->answers->count() }} jawaban</h4>

		<div class="mt-4">
		@forelse ($question->answers as $answer)
			<div class="mb-4">
				<div class="container pl-0 d-flex align-items-center mb-2">
					<img class="site-shape-circle" width="30px" height="30px"
						src="{{ $answer->user->profile_picture->profile_picture_link }}"  alt="user">
					<p class="ml-2 mb-0">{{ $answer->user->name }}</p>
				</div>

				{!! $answer->content !!}
				
				<a href="#" class="site-replies-show-button d-inline-block text-dark">
					<small class="d-block">{{ $answer->replies->count() }} balasan <span class="small">&#9660;</span></small>
				</a>

				<section class="site-replies d-none container site-border-left-red site-bg-grey pt-2 pb-2 mt-2 ml-3">
		
				@forelse ($answer->replies as $reply)
					<div class="p-0 pl-2 pr-2 mb-4">
						<div class="container pl-0 d-flex align-items-center mb-2">
							<img class="site-shape-circle" width="30px" height="30px" alt="user"
								src="{{ $reply->user->profile_picture->profile_picture_link }}" >
							<p class="ml-2 mb-0">{{ $reply->user->name }}</p>
						</div>
						<p>{{ $reply->content }}</p>
					</div>
		
				@empty
					<p class="pt-2 pl-2"><i>Belum ada balasan</i></p>
		
				@endforelse

					<!-- Replying box -->
					<div class="p-0 pl-2 pr-2">
						<form method="POST" action="{{ route('answer.replies.store', ['answer' => $answer]) }}" class="d-flex">
							@csrf
							<textarea name="content" placeholder="Berikan balasan..." class="reply-typing-area d-block col-md-8 mr-2"></textarea>
							<input type="submit" value="Balas" class="reply-submit-button btn btn-secondary d-block align-self-end">
						</form>
						<small class="reply-textarea-empty-message d-none text-danger">*balasan tidak boleh kosong</small>
					</div>
				</section>

			</div>
		
		@empty
			<div><p><i>Belum ada jawaban</i></p></div>
		
		@endforelse
		</div>
	</div>
</section>
@endsection