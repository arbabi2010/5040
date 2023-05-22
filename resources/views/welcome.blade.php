@extends('partials.app')

@section('content')
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            @foreach($products as $product)
                <x-product-item :product="$product" />
            @endforeach


        </div><!-- /.row -->


    </div><!-- /.container -->
@endsection


