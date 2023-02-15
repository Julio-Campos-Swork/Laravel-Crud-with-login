<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{$metaDescription ?? 'Default meta description'}})">
    <title>Proyecto - {{ $title ?? '' }}</title>
    @vite('resources/css/app.css')
</head>
<body>
  <x-layouts.navigation />
  @if (session('status'))

  <div>{{session('status')}}</div>
  @endif
  {{$slot}}
  <script src="js/app.js"></script>
</body>
</html>
