@extends('template')

@section('title')Cart
@endsection

@section('content')
    @if(count($cartItems)==0)
        <h3>В корзине ничего нет.</h3>
        <p>Судя по всему вы нищеброд :))</p>
    @else
        @foreach($cartItems as $cartItem)
            @php $product = $cartItem->product; @endphp
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{asset($product->image_path)}}">
                    <div class="card-body">
                        <p class="card-text">{{$product->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">${{$product->price}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
