<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel seeder @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <nav>
    <div class="navbar">
      <a href="{{ route('home') }}">Home</a>
      <a href="{{ route('products.index') }}">Product</a>
      <a href="{{ route('category.index') }}">Categories</a>
      <a href="{{ route('customers.index') }}">Customers</a>
    </div>
  </nav>
  <main>
    @yield('content')
  </main>
</body>
</html>