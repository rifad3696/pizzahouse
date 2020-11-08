<!DOCTYPE html>
<html>
   <head>
      <title>Laravel</title>
      <link href = "https://fonts.googleapis.com/css?family=Lato:100" rel = "stylesheet" 
         type = "text/css">
      
      <style>
         html, body {
            height: 100%;
         }
         body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
         }
         .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
         }
         .content {
            text-align: center;
            display: inline-block;
         }
         .title {
            font-size: 96px;
         }
      </style>
   </head>
   
   <body>
      <div class = "container">
         
         <div class = "content">
            <div class = "title">Pizza House List</div>
         </div>
		<p>{{ $type ?? '' }} - {{ $base ?? '' }} - {{ $price ?? '' }}</p>   

            @if($price ?? '' > 15)
                <p> This pizza is expensive </p>
            @elseif($price ?? '' < 5)
                <p> This pizza is cheap</p>
            @else
                <p>This pizza is normally priced</p>
            @endif

            @unless($base ?? '' == 'cheesy crust')
                <p>You don't have a cheesy crust</p>
            @endless

            @php
             $name = 'shaun';
             echo($name);
             @endphp
    
      </div>
   </body>
</html>