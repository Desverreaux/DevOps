<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title> Viewer </title>
    {{-- <title>{{ $Data['PageTitle'] }}</title> --}}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $Sites = array(
            env('APP_URL'),
            env('APP_URL') . "/Playground",
            env('APP_URL') . "/Home",
            env('APP_URL') . "/phpinfo"
        );
        ?>
    
    <style> 
        
        body, html {
            height: 100%;
            margin: 0;
            background-color: #000000;
        }
        
        .grid2x2 {
            min-height: 100%;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            background-color: #000000;
        }
        .grid2x2 > div {
            display: flex; 
            flex-basis: calc(50% - 40px);  
            justify-content: center;
            flex-direction: column;
        }
        .grid2x2 > div > div {
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
        .box { margin: 20px; }
        p {
            text-align: center;
            font-size: 2em;
            color: whitesmoke;
        }
        iframe {
            border: none;
        }

    </style>


</head>

    
<body class="viewer">

<div class="grid2x2">
@foreach($Sites as $view)
    <div class="box">
        <div>
            <p> {{$view}} </p>
        </div>
        <iframe src="{{ $view }}" height="90%" width="100%"></iframe>
    </div>
@endforeach
</div>
</body>