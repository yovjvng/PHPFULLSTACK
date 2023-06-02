@extends('layout.layout') {{-- 부모의 경로 --}}

@section('title', 'Login')

@section('contents')
    @include('layout.errors')
    <form action="{{route('user.loginpost')}}" method="post">
        @csrf
        <label for="email">EMAIL : </label>
        <input type="text" id="email" name="email">
        <label for="password">PASSWORD : </label>
        <input type="text" id="password" name="password">
        <br>
        <button type="submit">로그인</button>
    </form>
@endsection
    
