@extends('layouts.home')
@section('content')

@foreach ($data as $product)
  	<p> {{ $product->name }} </p>
@endforeach


@endsection
