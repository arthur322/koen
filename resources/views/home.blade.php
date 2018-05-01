@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                	@if (Auth::user()->images->isEmpty())
                		<p>Nenhuma imagem cadastrada</p>
                	@else
	                	@foreach (Auth::user()->images as $image)
	                		<img src="{{ asset("storage/{$image->image}") }}" class="img-fluid">
	                	@endforeach
                	@endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
