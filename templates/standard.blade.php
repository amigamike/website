@extends('layouts.app', ["page" => $page])

@section('content')
<div class="flex-center position-ref full-height">
    <div class="jumbotron bg-white p-2">
        <div class="code float-left">{{ $page->code }}</div>
        <div class="message float-left" style="padding: 10px;">{{ $page->content }}</div>
    </div>
</div>
@endsection
