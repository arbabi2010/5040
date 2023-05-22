@extends('partials.app')

@section('content')
    <div class="col-md-8 col-offset-md-2 mt-5">
        <form action="{{ route('product.store') }}" method="post" class="mt-5">
            @csrf
            <div class="form-group">
                <label for="exampleInputTitle">عنوان محصول</label>
                <input type="text" name="title" class="form-control" id="exampleInputTitle" value="{{ old('title') }}"
                       placeholder="نام محصول را وارد نمایید">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPrice">قیمت</label>
                <input type="number" name="price" class="form-control" id="exampleInputPrice" placeholder="قیمت" value="{{ old('price') }}">
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputStock">موجودی</label>
                <input type="number" name="stock" class="form-control" id="exampleInputStock" placeholder="موجودی" value="{{ old('stock') }}">
                @error('stock')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">ایجاد محصول جدید</button>
        </form>
    </div>

@endsection


