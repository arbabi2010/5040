@extends('partials.app')

@section('content')
    <div class="col-md-8 col-offset-md-2 mt-5">
        <form action="{{ route('product.store') }}" method="post" class="mt-5">
            @csrf
            <div class="form-group">
                <label for="exampleInputTitle">Product title</label>
                <input type="text" name="title" class="form-control" id="exampleInputTitle" value="{{ old('title') }}"
                       placeholder="Enter product title">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPrice">Password</label>
                <input type="number" name="price" class="form-control" id="exampleInputPrice" placeholder="Price" value="{{ old('price') }}">
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputStock">Password</label>
                <input type="number" name="stock" class="form-control" id="exampleInputStock" placeholder="Stock" value="{{ old('stock') }}">
                @error('stock')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection


