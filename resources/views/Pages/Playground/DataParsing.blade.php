<!DOCTYPE html>
<html>
    <head>
        <title>{{$Data['Title']}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
        
        <link rel="stylesheet" href="{{ asset('CSS/Lib/DataParsing.css') }}">

      </head>
<body>

<div id="main" class="page">
  <div class="uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
</div>
  {{-- <div class="indent">
      <table class="">
        <thead>
          <tr>
            <th> Key </th>
            <th> Path </th>
          </tr>
        </thead>
        <tbody>
          @foreach( $Data['lines'] as $key => $value) 
          <tr>
            <td> {{$key}} </td>
            <td> {{$value}} </td>
          </tr>
          @endforeach
        </tbody> 
      </table>
  </div> --}}
</div>

<script src="{{ asset('js/app.js') }}"></script> 

</body>
</html>
