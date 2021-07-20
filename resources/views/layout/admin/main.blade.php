<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|	
-->
<body class="hold-transition sidebar-mini">
  <div>
  <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Vào trang web</a>
      </li>
                <a href="{{ route('category.index') }}" class="nav-link">
                  <p>Danh mục</p>
                </a>
                <a href="{{ route('product.index') }}" class="nav-link">
                  <p>Sản phẩm</p>
                </a>  
  </div>
    <div class="content">
     @yield('content')
    </div>  
 <div>
     @include('layout.admin.footer')
 </div>
</body>
</html>
