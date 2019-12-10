﻿@extends('client.layouts.master')
@section('content')
    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-main">
                        <div class="product-view">
                            <div class="product-essential">
                                <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                                    <div class="new-label new-top-left"></div>
                                    <div class="product-image">
                                        <div class="product-full">
                                            <img class="img-responsive" id="product-zoom" src="{{ asset('storage/images/products/'.$product->images->first()->getAttribute('image')) }}" data-zoom-image="{{ asset('storage/images/products/'.$product->images->first()->getAttribute('image')) }}" width="400">
                                        </div>
                                    </div>
                                    <!-- more-images -->
                                </div>
                                <div class="product-shop col-lg-7 col-sm-7 col-xs-12">
                                    <div class="product-name">
                                        <h1 class="product-detail-name m-text16 p-b-13" data-value="{{ $product->name }}">
                                            {{ $product->name }}
                                        </h1>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="price-block">
                                        <div class="price-box">
                                            <p class="special-price"><span id="product-price-48" class="price">${{ number_format($product->price_sale) }}</span></p>
                                            <p class="old-price"><span class="price">${{ number_format($product->price) }}</span> </p>
                                        </div>
                                    </div>
                                    <div class="info-orther">
                                        <p>@lang('product.status'): <span class=" label label-{{ $product->quantity>0?'success':'danger' }}">{{ $product->quantity>0?__(trans('product.ins')): __(trans('product.outs')) }}</span></p>
                                    </div>
                                    <div class="short-description">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="form-option">
                                        <p class="form-option-title">@lang('product.mem'): {{ $product->memory->name }}</p>
                                        <p class="form-option-title">@lang('product.trade'): {{ $product->trademark->name }}</p>
                                        <div class="add-to-box">
                                            <div class="add-to-cart">
                                                <div class="pull-left">
                                                    <div class="custom pull-left">
                                                        <label>@lang('product.num'): </label>
                                                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) && qty>1) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                                        <input type="text" class="input-text qty" title="Qty" value="1" id="qty" name="qty">
                                                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                                                    </div>
                                                    <label>{{ $product->quantity }} @lang('product.qty')</label>
                                                </div>
                                                <a href="{{ route('home.carts.add') }}">
                                                    <button class="button btn-cart" data-id="{{$product->id}}" type="button">
                                                        @lang('cartp.add')
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fb-share-button" data-href="http://127.0.0.1:8000/products/{{ $product->id }}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2Fproducts%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                    <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                        <div class="add_info">
                            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                <li class="active"> <a href="#product_tabs_description" data-toggle="tab">@lang('product.cmt')</a></li>
                            </ul>
                            <div id="productTabContent" class="tab-content">
                                <div class="fb-comments" data-href="http://127.0.0.1:8000/products/{{ $product->id }}" data-width="" data-numposts="5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Container End -->
@endsection
@push('js')
    <script>
        $(document).ready(function(){
            $('.btn-cart').click(function(e){
                e.preventDefault();
                let id = $(this).attr('data-id');
                let num = $('#qty').val();
                $.ajax({
                    url: '/carts/add',
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: id,
                        product_num : num
                    },
                    success: function(data){
                        $('.cart-quantity').text(data.quantity);
                        alert("Successfully!! " + num +" products are added in your cart!");
                        window.location = "http://127.0.0.1:8000/products/" + id;
                    }
                });
            });
        });
    </script>
@endpush
