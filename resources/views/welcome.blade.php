@extends('partials.app')

@section('content')
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            @if($products->count())
                @foreach($products as $product)
                    <x-product-item :product="$product" />
                @endforeach
            @else
                <p class="alert alert-secondary">محصولی یافت نشد. یک محصول جدید ایجاد نمایید.

                    <a href="{{ route('product.create') }}" class="btn btn-outline-primary">ایجاد محصول جدید</a>
                </p>

            @endif



        </div><!-- /.row -->


    </div><!-- /.container -->
@endsection


