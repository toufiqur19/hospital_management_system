@extends('layout.app')

@section('content')
@if (session()->has('message'))
<div class="pr-10 my-4 float-end font-semibold text-green-500 role="alert">
    {{ session()->get('message') }}
</div>
@endif
<div class="w-full h-[50vh]">
<h1>Home</h1>
{{-- {{Auth::user()->name}} --}}
</div>
@endsection
