<!DOCTYPE html>
<html>
<head>
  <title>{{$Data['Title']}}</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
  
  @include('Components.Sidebar.Head')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

@include('Components.Sidebar.Body')
<div id="main" class="frame">
<div id="app" >
{{-- <Card></Card> --}}
<MyTable></MyTable>

{{-- <p id="var"> has not been set </p> --}}
{{-- <button id="bton" class="uk-button uk-button-default">asdfad</button> --}}


</div>
</div> 



<script src="{{ asset('js/app.js') }}"></script> 


</body>
</html>
  