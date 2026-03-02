@extends('frontend.layout')

@section('content')

    <div class="container">
        <h2>Tra cứu bảo hành</h2>

        <form method="POST" action="{{ route('warranty.search') }}">
            @csrf
            <input type="text" name="phone" placeholder="Nhập số điện thoại" required>
            <button type="submit">Tra cứu</button>
        </form>

        @isset($customer)

            <h4>Kết quả cho: {{ $customer->name }}</h4>

            @if($customer->warranties->count())

                <table border="1" cellpadding="10">
                    <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Serial</th>
                        <th>Bắt đầu</th>
                        <th>Kết thúc</th>
                        <th>Trạng thái</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customer->warranties as $warranty)
                        <tr>
                            <td>{{ $warranty->product->name }}</td>
                            <td>{{ $warranty->serial_number }}</td>
                            <td>{{ $warranty->start_date }}</td>
                            <td>{{ $warranty->end_date }}</td>
                            <td>
                                @if(now()->lessThanOrEqualTo($warranty->end_date))
                                    <span style="color:green">Còn hạn</span>
                                @else
                                    <span style="color:red">Hết hạn</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @else
                <p>Không có sản phẩm bảo hành.</p>
            @endif

        @endisset

    </div>

@endsection
