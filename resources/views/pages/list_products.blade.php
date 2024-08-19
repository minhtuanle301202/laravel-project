@extends('layouts.users.master')
@section('title','Home')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/partials/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/support.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/banner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/new_product.css')}}">
    <link rel="stylesheet" href="{{ asset('css/partials/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/small_news.css') }}">
    <div class="header-content">
        @include('layouts.partials.sidebar')
        @include('layouts.partials.banner')
    </div>
    <div class="col-12 link">
      <div class="container">
          <div class="breadcrumb">
              <a class="home" href="{{ route('home') }}">Trang chủ</a>
              <span>>></span>
              <a class="category-link" data-category-id="{{ $category->id }}">{{ $category->name }}</a>
          </div>
      </div>
  </div>
    <div class="middle-content">
        <div class="left-middle-content">
            @include('layouts.partials.support')
        </div>

        <div class="right-content">
          <div class="title-category">{{ $category->name }}</div>
          <div id="products-list">
            @include('layouts.partials.list_product',['products' => $products])
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/list_products.js') }}" 
@endsection