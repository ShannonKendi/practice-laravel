<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <h1>Update a Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method ="post" action ="{{route('product.update',['product' => $product])}}">
@csrf
@method ('put')
    <div>
    <label>Name</label>
    <input type="text" name="name" placeholder="name" value="{{
    $product->name}}"/>
</div>
<div>
    <label>Quantity</label>
    <input type="integer" name="qty" placeholder="quantity"value="{{
    $product->qty}}"/>

</div>
<div>
    <label>Description</label>
    <input type="text" name="description" placeholder="description"value="{{
    $product->description}}"/>
</div>

<div>
    <input type="submit" value="Update"/>
</div>
</div>
</body>
</html>
  