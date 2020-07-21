@extends ('mails.base')

@section ('content')
<h3>{{ $mentoring_mail->mentoring->title }}</h3>
<div>{!! $mentoring_mail->content !!}</div>
@endsection