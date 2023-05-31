@extends('layouts.app')
@section('title', 'ADMIN PAGE')

@section('content')
    <div class="container w-75">
        <a name="" id="" class="btn btn-primary" href="{{ route('admin.comics.create') }}" role="button">New
            Product +</a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-light">
                    <caption>comics</caption>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>PRICE</th>
                        <th>IMAGE</th>
                        <th>SERIES</th>
                        <th>TYPE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse ($comics as $comic)
                        <tr class="table-primary">
                            <td scope="row">{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->price }}</td>
                            <td><img src="{{ $comic->thumb }}" width="100" alt="{{ $comic->title }}"></td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a name="" id="" class="btn btn-success"
                                    href="{{ route('admin.comics.show', $comic->id) }}" role="button">View</a>
                                <a name="" id="" class="btn btn-primary"
                                    href="{{ route('admin.comics.edit', $comic->id) }}" role="button">Edit</a>
                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger " data-bs-toggle="modal"
                                    data-bs-target="#{{ $comic->id }}">
                                    Delete
                                </button>


                            </td>
                        </tr>
                    @empty
                        <tr class="table-primary">
                            <td scope="row">comics are not in stock</td>
                        </tr>
                    @endforelse

                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>
@endsection
