@extends('layouts.main')
@section('html-content')
    {{--    <div class="flex gap-4">--}}
    {{--        <div class="flex-1">--}}
    {{--            <h1>Post -- <code>{{$posts->count()}}</code></h1>--}}
    {{--            <h1>Images in Post -- <code>{{--}}
    {{--    $posts->filter(fn($el) => $el->comments !== null)->map(fn($el) => $el->comments)->count()--}}
    {{-- }}</code></h1>--}}

    {{--            <x-list-items :items="$posts" class="bg-green-100"></x-list-items>--}}
    {{--        </div>--}}
    {{--        <div class="flex-1">--}}
    {{--            <h1>Images -- <code>{{$images->count()}}</code></h1>--}}
    {{--            <x-list-items :items="$images" class="bg-red-100"></x-list-items>--}}
    {{--        </div>--}}
    {{--        <div class="flex-1">--}}
    {{--            <h1>Comments -- <code>{{$comments->count()}}</code></h1>--}}
    {{--            <x-list-items :items="$comments" class="bg-amber-200"></x-list-items>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
