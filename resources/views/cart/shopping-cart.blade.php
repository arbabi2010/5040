@extends('partials.app')


@section('content')

    <div class="row">
        @if(count(session('cart')))

        <table class="table table-bordered table-striped">
            <tr>
                <th>نام محصول</th>
                <th>قیمت</th>
                <th>تعداد</th>
                <th>جمع کل</th>
                <th></th>
            </tr>
            <x-shopping-cart />

        </table>

        @else
            <p class="alert alert-secondary alert-block">
                سبد خرید خالی می باشد.
                <br>
                محصول جدید به سبد خود <a href="/">اضافه</a> کنید.
            </p>
        @endif
    </div>
@endsection
