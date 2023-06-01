@extends('layouts.app')

@section('content')
    <div class="bg-dark">
        <div class="container">
            <div class="row row-cols-md-4">
                @forelse ($comics as $comic)
                    <div class="col my-3">
                        <div class="card h-100 shadow">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-white">{{ $comic->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">{{ $comic->price }}</h6>
                                <p class="card-text text-white">{{ $comic->type }}</p>
                                <p class="card-text text-white">{{ $comic->series }}</p>
                                
                            </div>
                            <div class="bg-dark text-center border-top-0 rounded-bottom py-2">
                                <a class="btn btn-danger  " href="{{ route('admin.comics.show', $comic->id) }}"
                                    role="button">View</a>
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
    </div>
@endsection
