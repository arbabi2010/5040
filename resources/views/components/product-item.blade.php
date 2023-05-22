<div class="col-lg-4">
    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
         alt="Generic placeholder image" width="140" height="140">
    <h2>{{ $product->title }}</h2>
    <p>{{ number_format($product->price) }} تومان</p>
    <p>
        @if($product->stock > 0)
            <a class="btn btn-secondary" href="{{ route('add.to.cart',$product->id) }}" role="button">اضافه به سبد
                خرید</a>
        @else
            <button class="btn btn-secondary" disabled role="button">ناموجود</button>

        @endif
    </p>
</div><!-- /.col-lg-4 -->
