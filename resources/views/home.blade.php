@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')

    <div class="bg-dark">
        <div class="container">
            <div class="row row-cols-md-6">
                @forelse ($comics as $comic)
                    <div class="col my-2">
                        <div class="card h-100 rounded-0">
                            <img src="{{ $comic->thumb }}" class="img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <h6 class="card-subtitle text-muted ">{{ $comic->price }}</h6>

                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary" href="{{ route('admin.comics.show', $comic->id) }}"
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
