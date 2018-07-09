<!DOCTYPE html>
<html>
    <head>
        <title>{{$Data['Title']}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
        
        @include('Components.Sidebar.Head')

        <link rel="stylesheet" href="{{ asset('CSS/Lib/Playground.css') }}">

      </head>
<body>
      @include('Components.Sidebar.Body')

<div id="main" class="page">

  <span style="font-size:60px;color:white">Debuging Portal</span>

  <div id="app" sytle="margin:0px">
    <div class="row">
      <Card></Card>
      <Card></Card>
      <Card></Card>
      <Card></Card>
    </div>
  </div>

<a class="uk-button uk-button-default" href="{{route('Faker')}}">asdfad</a>


</div>

<script src="{{ asset('js/app.js') }}"></script> 

</body>
</html>
