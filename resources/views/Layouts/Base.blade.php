<!DOCTYPE html>
<html>
<head>
  <title>{{$Data['Title']}}</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
  
  @include('Components.GlobalScripts')  //TODO remove this by incorperating sass complialation
  @include('Components.Sidebar.Head')   //TODO remove this by implementing vue components
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

@include('Components.Sidebar.Body')  //TODO remove this by implementing vue components
<div id="main" class="frame">
<div id="app" >

<ConstructionNotice></ConstructionNotice>

</div>
</div> 



<script src="{{ asset('js/app.js') }}"></script> 


</body>
</html>
  