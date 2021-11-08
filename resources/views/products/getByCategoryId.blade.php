@extends('template')

@section('title')Products
@endsection

@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($products as $product)
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{asset($product->image_path)}}">
                <div class="card-body">
                    <p class="card-text">{{$product->description}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary" onclick="buttonAddClick({{$product->id}})">В корзину</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                        </div>
                        <small class="text-muted">${{$product->price}}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <script src="{{asset('myjs/addNewItemToUser.js')}}"></script>
@endsection
