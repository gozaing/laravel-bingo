@extends('layouts.app')

@section('content')
    <div>
        @foreach ($items as $item)
        <div>
            <a href="{{ $item->link }}">{{ $item->title }}</a>
        </div>
        @endforeach
    </div>
@endsection