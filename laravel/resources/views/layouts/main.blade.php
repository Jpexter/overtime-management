@include('layouts.header')


  <div class="wrapper"><!-- Content Wrapper. Contains page content -->

    {{-- @include('layouts.header'); --}}

    @include('layouts.navbar')
    
    @yield('content')

    

    {{-- @include('layouts.content'); --}}
    
    @include('layouts.sidebar')
    
    {{-- @include('layouts.footer'); --}}

</div>
<!-- /.content-wrapper -->
 @include('layouts.footer')

  

  
  
