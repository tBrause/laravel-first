{{-- Erweiterung --}}
@extends('welcome')

{{-- Festlegung --}}
@section('title', 'Product')

{{-- Section beginnen --}}
@section('content')

    
    <h1>show product</h1>
    <p>id : {{ $productId }}</p>

    {{-- if --}}
    @if ($productId == 1)

        {{-- output --}}
        <p>if : id ist 1</p>

    {{-- elseif --}}
    @elseif($productId >= 5)

        {{-- output --}}
        <p>elseif : id ist größer 5</p>

    {{-- else --}}
    @else

        {{-- output --}}
        <p>else : id ist nicht 1</p>

    {{-- endif --}}
    @endif


    {{-- unless --}}
    @unless($productId == 1)
        {{-- output --}}
        <p>unless : id ist nicht 1</p>
    {{-- endunless --}}
    @endunless

    {{-- switsh --}}
    @switch($productId)
        {{-- case --}}
        @case(1)
            {{-- output --}}
            <p>case : id ist 1</p>
        {{-- breack --}}
        @break
        @case(2)
            <p>case : id ist 2</p>
        @break
        {{-- default --}}
        @default
            <p>case : id ist default</p>
    {{-- endswitsh --}}
    @endswitch

{{-- Section beenden --}}
@endsection