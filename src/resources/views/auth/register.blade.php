@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

<form  method="POST"　action="{{ route("register") }}">
    @csrf
    <div>
        <label for="name">ユーザ名</label>
        <input name="name" type="text" value="{{ old('name') }}"/>
    </div>
    <div>
        <label for="email">メールアドレス</label>
        <input name="email" type="email" value="{{ old('email') }}"/>
    </div>
    <div>
        <label for="email">パスワード</label>
        <input name="password" type="password"/>
    </div>

    <div>
        <button type="submit">登録</button>
    </div>
</form>
</body>
</html>