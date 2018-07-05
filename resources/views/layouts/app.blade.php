<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Helpful</title>
        

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
       <script>
        $(function() {
        $( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
});
       </script>
    </head>
    <body>
          @include('commons.navbar')
        <div class="container">
            @include('commons.error_messages')

            @yield('content')
        </div> 
    </body>
    @include('commons.footer')
</html>