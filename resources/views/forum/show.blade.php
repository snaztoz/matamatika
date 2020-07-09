@extends ('forum.base')

@section ('scripts')
<script type="text/javascript" src="{{ asset('js/quill/quill.min.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('js/answer.js') }}" defer></script>
@endsection

@section ('main')
<article class="container">
	<h2 class="mb-3">{{ $question->title }}</h2>
	{!! $question->content !!}	
</article>

<section class="container mb-4">
	<div class="pt-3">
		<h4 class="mb-3">Bagikan jawabanmu!</h4>	
		<div id="answer-typing-area"></div>
		<form method="POST">
			@csrf
			<textarea id="answer-hidden-textarea" name="content" hidden></textarea>
			<input type="submit" value="Kirim Jawabanmu" class="btn btn-primary mt-3">
		</form>
	</div>
</section>

<section class="container">
	<div class="pt-3">
		<h4>2 jawaban</h4>

		<!-- All answers -->
		<div class="mt-4">
			<!-- Individual answer -->
			<div class="mb-4">
				<div class="container pl-0 d-flex">
					<img class="site-shape-circle" src="{{ asset('storage/images/default_user.png') }}" width="30px" height="30px" alt="user">
					<p class="ml-2">user3412312</p>
				</div>
				<p>Jawabannya adalah x = 5</p>
				
				<a href="#" class="site-replies-show-button d-inline-block text-dark ">
					<small class="d-block">2 balasan <span class="small">&#9660;</span></small>
				</a>
			
				<!-- Answer's replies -->
				<section class="site-replies d-none container site-border-left-red site-bg-grey pt-2 pb-2 mt-2 ml-3">
					<div class="p-0 pl-2 pr-2 mb-4">
						<div class="container pl-0 d-flex">
							<img class="site-shape-circle" src="{{ asset('storage/images/default_user.png') }}" width="30px" height="30px" alt="user">
							<p class="ml-2">user123421</p>
						</div>
						<p>Bukannya 7 ya?</p>
					</div>
					<div class="p-0 pl-2 pr-2 mb-4">
						<div class="container pl-0 d-flex">
							<img class="site-shape-circle" src="{{ asset('storage/images/default_user.png') }}" width="30px" height="30px" alt="user">
							<p class="ml-2">user3412312</p>
						</div>
						<p>Oiya deng bener juga :) . Maaf salah</p>
					</div>

					<!-- Replying box -->
					<div class="p-0 pl-2 pr-2">
						<div class="reply-typing-area"></div>
						<button id="reply-to-2432" class="btn btn-secondary">Balas</button>
					</div>
				</section>
			</div>

			<!-- Individual answer -->
			<div class="mb-4">
				<div class="container pl-0 d-flex">
					<img class="site-shape-circle" src="{{ asset('storage/images/me.jpg') }}" width="30px" height="30px" alt="user">
					<p class="ml-2">user12543</p>
				</div>
				<p>7 gan jawabannya</p>
				<a href="#" class="site-replies-show-button d-inline-block text-dark ">
					<small class="d-block">0 balasan <span class="small">&#9660;</span></small>
				</a>

				<section class="site-replies d-none container site-border-left-red site-bg-grey pt-2 pb-2 mt-2 ml-3">
					<!-- Replying box -->
					<div class="p-0 pl-2 pr-2">
						<div class="reply-typing-area"></div>
						<button id="reply-to-2432" class="btn btn-secondary">Balas</button>
					</div>
				</section>
			</div>

		</div>
	</div>
</section>
@endsection