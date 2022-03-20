@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="mb-3">Tv</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tvs as $tv)
                    <tr>
                        <td>
                            {{ $tv->id }}
                        </td>
                        <td>
                            {{ $tv->name }}
                        </td>
                        <td>SHOW</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection