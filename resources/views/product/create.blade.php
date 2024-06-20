@extends('layouts.jtech_layout')

@section('page')
<h2>Create New Product</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/product/add" method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Product Name:</td>
            <td><input type="text" name="name" class="form-control"></td>
        </tr>
        <tr>
            <td>Product Model:</td>
            <td><input type="text" name="model" class="form-control"></td>
        </tr>
        <tr>
            <td>Product Price:</td>
            <td><input type="text" name="price" class="form-control"></td>
        </tr>
        <tr>
            <td>Product Picture:</td>
            <td><input type="file" name="picture" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Create Product" class="form-control" style="background:#336699; color:white"></td>
        </tr>

    </table>
</form>

@endsection