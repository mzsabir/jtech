@extends('layouts.jtech_layout')

@section('page')
    <h2>Products</h2>
    <a href="/product/create">Create New Product</a>

    <div style="display: flex;">
        @foreach($products as $p)
            <div style="width: 20%;">
                <img src="{{url('images/products'.$p->pictre)}}" width="250" height="250">
                <p>{{$p->name}}</p>
                
            </div>
        @endforeach
    </div>
    
@endsection