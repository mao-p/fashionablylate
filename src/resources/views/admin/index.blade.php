@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


<form class="search-form" action="/contacts/search" method="get">
    <div class="search-form__item">
        <input class="search-form__item-select" type="text" name="keyword" value="{{ old('keyword') }}">
        <select class="search-form__item-select" name="contact_id">
            <option value="">性別</option>
            <option value="">1.男性</option>
            <option value="">2.女性</option>
            <option value="">3.その他</option>

        </select>
        <select class="search-form__item-select" name="contact_id">
            <option value="">1.商品のお届けについて</option>
            <option value="">2.商品の交換について</option>
            <option value="">3.商品トラブル</option>
            <option value="">4.ショップへの問い合わせ</option>
            <option value="">5.その他</option>

        </select>
        <input name="date" type="date" />
    </div>
    <div class="search-form__button">
      <button class="search-form__button-submit" type="submit">検索</button>
</form>
