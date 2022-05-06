{{-- Erweiterung --}}
@extends('welcome')

{{-- Festlegung --}}
@section('title', 'Products')

{{-- Section beginnen --}}
@section('content')

{{-- verwendet Festlegung 'title' --}}
<h1>@yield('title')</h1>

{{-- foreach --}}
<ul>
@foreach ($data as $product)
<li>name : {{ $product->name }}<br>
price : {{ $product->price }}</li>
@endforeach
</ul>
{{-- foreach end --}}

{{-- Section beenden --}}
@endsection