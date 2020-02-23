<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.blocks.head')
<body>
<div>@yield('content')</div>
</body>
</html>
