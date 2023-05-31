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

                                <a type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modal- {{$comic->id}}">
                                    Delete
                                </a>

                                <div class="modal fade" id="{{ $comic->id }}" tabindex="-1" data-bs-backdrop="static"
                                    data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitle-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">Delete
                                                    {{ $comic->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                are you sure?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('admin.comics.destroy', $comic->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger ">yes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Optional: Place to the bottom of scripts -->
                                <script>
                                    const myModal = new bootstrap.Modal(document.getElementById('{{ $comic->id }}'), options)
                                </script>

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
