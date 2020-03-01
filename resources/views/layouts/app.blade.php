<!DOCTYPE html>
<html lang="en">
  <head>
      @include('layouts.inc.head')
  </head>
  <body>
    {{--  @include('layouts.inc.header')  --}}
    {{--  <div class="container-fluid text-center">  --}}
        {{--  <div class="row content">  --}}
<dv class="app">
            @include('layouts.inc.nav')
            <main class="py-4">
                    @yield('content')
                </main>
            </div>
    @include('layouts.inc.footer')

    @include('layouts.inc.foot')

    $(document).ready(function() {
        $('#example').DataTable();
    } );
  </body>
</html>
