@extends('frontend.layout')

@section('content')

    <h2>Liên hệ</h2>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Họ tên">
        <input type="text" name="phone" placeholder="Số điện thoại">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="subject" placeholder="Tiêu đề">
        <textarea name="message" placeholder="Nội dung"></textarea>

        <button type="submit">Gửi</button>
    </form>

@endsection
