@extends('layouts.app')
@section('title',$comic->name)
@section('content')
    <div class="container w-25">
        <div class="card shadow">
            <img class="card-img-top " width="200" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <div class="card-body">
                <h4 class="card-title">{{ $comic->title }}</h4>
                <p class="card-text">description:{{ $comic->description }}</p>
                <p class="card-text">{{ $comic->series }}</p>
                <p class="card-text">{{ $comic->type }}</p>
            </div>
            <div class="card-footer">
                <p class="card-text">{{ $comic->price }}</p>
            </div>
        </div>
    </div>
@endsection
