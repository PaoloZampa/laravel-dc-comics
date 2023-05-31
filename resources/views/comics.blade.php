@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-md-4">
            @forelse ($comics as $comic)
                <div class="col my-3">
                    <div class="card h-100 shadow">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">{{ $comic->price }}</h6>
                            <p class="card-text">{{ $comic->type }}</p>
                            <p class="card-text">{{ $comic->series }}</p>
                            <a class="btn btn-primary" href="{{ route('admin.comics.show', $comic->id) }}"
                                role="button">View</a>
                            <a class="btn btn-secondary" href="{{ route('admin.comics.edit', $comic->id) }}"
                                role="button">Edit</a>
                        </div>
                    </div>
                </div>



            @empty
                <tr class="">
                    <td>No results</td>
                </tr>
            @endforelse
        </div>
    </div>
@endsection