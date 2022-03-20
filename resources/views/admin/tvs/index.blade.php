@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="mb-3">Tv</h1>

        <a class="btn btn-success mb-3" href="{{ route('admin.tvs.create') }}">Create new TV</a>

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
                        <td>
                            <a href="{{ route('admin.tvs.show', $tv->id) }}" class="btn btn-primary">SHOW</a>
                        </td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection