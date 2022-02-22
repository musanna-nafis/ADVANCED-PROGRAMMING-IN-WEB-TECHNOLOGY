<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>
    
    <a class="btn btn-primary" href ="{{route('login')}}">LogIn</a>
    <a class="btn btn-secondary" href ="{{route('product')}}">View All Products</a>
    <a class="btn btn-warning" href ="{{route('createproduct')}}">Create a Product</a>
    <a class="btn btn-success"  href ="{{route('deleteproduct')}}">Delete a product </a>
    <a class="btn btn-danger" href ="{{route('updateproduct')}}">Update a product </a>
    <a class="btn btn-danger" href ="{{route('logout')}}">Logout </a>

    @yield('content')

    <div> Copy Right @copy 18-38040-2 </div>
</body>
</html>