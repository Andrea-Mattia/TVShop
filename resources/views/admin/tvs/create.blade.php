@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create new TV</h1>

        <form action="{{ route('admin.tvs.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-md-8 offset-md-2">

                    @if ($errors->any())
                        <div class="alert alert-danger mb-5">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <div class="feedback">{{ $message }}</div>
                        @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="description" class="form-label">Description*</label>
                        <textarea class="form-control" name="description" 
                            id="description" rows="6"
                        >{{ old('description') }}</textarea>
                        @error('description')
                            <div class="feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="inch" class="form-label">Inch*</label>
                        <input type="number" name="inch" id="inch" class="form-control" value="{{ old('inch') }}">
                        @error('inch')
                            <div class="feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price*</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}">
                        @error('price')
                            <div class="feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Create new TV</button>
                </div>
            </div>
        </form>
    </div>
@endsection