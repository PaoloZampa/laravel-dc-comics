@extends('layouts.app')
@section('title','Add new item')

@section('content')
    <div class="container w-25">
        <form action="{{ route('admin.comics.store') }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="comic here " value="{{ $comic->title }}">
                <small id="helpId" class="form-text text-muted">insert here comic' title</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                    placeholder="" value="{{ $comic->price }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">thumb url</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                    placeholder="" value="{{ $comic->thumb }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId"
                    placeholder="comic here " value="{{ $comic->series }}">
                <small id="helpId" class="form-text text-muted">insert here comic' title</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                    placeholder="" value="{{ $comic->type }}">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" name="description" id="description" rows="3" value="{{ $comic->description }}"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">send</button>
        </form>
    </div>
@endsection
