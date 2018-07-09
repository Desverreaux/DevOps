<!DOCTYPE html>
<html>
<head>
  <title>We're in Kansas anymore</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
  
  @include('Components.GlobalScripts')
  @include('Components.Sidebar.Head')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

<div class="Missing">
<div id="main">

<span class="heading"> Well this is embrassing...</span>
<p> Unfortunately my little server bot here couldn't find the page you requested. 
 Apprently, this is a 404 error page (you know the kind). But thats his words not mine, if you think this was a mistake though, I would really appreciate
 it if you could send me a message via the contact page or via any of the social media sites that server bot has provided at the bottom of the page.</p>

</div>
</div>

</body>
</html>
