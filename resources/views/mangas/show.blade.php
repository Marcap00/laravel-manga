@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic">
                    Manga Show !
                </h1>
            </div>
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Publisher</th>
                            <th>Price</th>
                            <th>Thumbs</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $manga['title'] }}
                            </td>
                            <td>
                                {{ $manga['autor'] }}
                            </td>
                            <td>
                                {{ $manga['genre'] }}
                            </td>
                            <td>
                                {{ $manga['publisher'] }}
                            </td>
                            <td>
                                {{ $manga['price'] }}
                            </td>
                            <td>
                                {{ $manga['thumbs'] }}
                            </td>
                            <td>
                                {{ $manga['description'] }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
