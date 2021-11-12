@extends('template')

@section('title')Cart
@endsection

@section('content')
    @php
        use \Illuminate\Support\Facades\Session;
        $user = Session::get('user');
    @endphp

    @if(count($cartItems)==0)
        <h3>В корзине ничего нет.</h3>
        <p>Судя по всему вы нищеброд :))</p>
    @else
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($cartItems as $cartItem)
            @php $product = $cartItem->product; @endphp
            <div class="col" id="cart_{{$cartItem->id}}">
                <div class="card shadow-sm">
                    <img src="{{asset($product->image_path)}}">
                    <div class="card-body">
                        <p class="card-text">{{$product->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">${{$product->price}}</small>
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-danger" onclick="buttonDeleteClick({{$cartItem->id}},{{$user->id}})">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    @endif
@endsection
