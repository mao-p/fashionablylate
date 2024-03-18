@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

 
    <form  method="POST"　action="/login">
        @csrf
        <div class="create-form__button">
        <button class="create-form__button-submit" type="submit">register</button>
        <div>
            <label for="email">メールアドレス</label>
            <input name="email" type="email" value="{{old('email')}}"/>
        </div>
        <div>
            <label for="password">パスワード</label>
            <input name="password" type="password" />
        </div>
        <div>
            <button type="submit">送信</button>
        </div>

    </form>
