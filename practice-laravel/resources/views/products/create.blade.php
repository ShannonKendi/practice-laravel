<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method ="post" action ="{{route('product.store')}}">
@csrf
@method ('post')
    <div>
    <label>Name</label>
    <input type="text" name="name" placeholder="name"/>
</div>
<div>
    <label>Quantity</label>
    <input type="integer" name="qty" placeholder="quantity"/>
</div>
<div>
    <label>Description</label>
    <input type="text" name="description" placeholder="description"/>
</div>
<div>
    <input type="submit" value="save a new Product"/>
</div>
</body>
</html>
  