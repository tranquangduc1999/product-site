@extends('frontend.layout')

@section('content')

    <h2>Giỏ hàng</h2>

    @if($cart && count($cart))
        <table>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th></th>
            </tr>

            @foreach($cart as $key => $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ number_format($item['price']) }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>
                        <a href="{{ route('cart.remove', $key) }}">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Giỏ hàng trống</p>
    @endif

@endsection
