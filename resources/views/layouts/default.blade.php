<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container-fluid">
                        
      <nav class="navbar navbar-expand-lg navbar-light py-4 shadow-sm">
        @include('includes.header')
      </nav>
                        
      {{-- <section class="py-5">
        <div class="container">
          <div class="row"> --}}
            @yield('content')
          {{-- </div>
        </div>
      </section> --}}
                        
      <footer class="py-5">
        @include('includes.footer')        
      </footer>
    </div>
    
</body>
</html>