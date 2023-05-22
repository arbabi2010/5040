<tbody>
@foreach($carts as $id=>$cart)
    <tr>
        <td>{{ $cart['name'] }}</td>
        <td>{{ number_format($cart['price']) }}</td>
        <td>{{ $cart['quantity'] }}</td>
        <td>{{ number_format($cart['price'] * $cart['quantity']) }}</td>
        <td>
            <form action="{{ route('delete.from.cart',$id) }}" method="post">@csrf
                <button class="btn btn-outline-danger">حذف</button>
            </form>
        </td>
    </tr>

@endforeach
</tbody>
<tfoot>
<tr>

    <td colspan="5">مبلغ کل :  <b>{{ number_format($total_price) }}</b> تومان</td>
</tr>
</tfoot>
