@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-header shadow p-3 mb-5 bg-white roundedz text-center h3">{{ __('Youtube Embed') }}</div>
                <div class="card-body shadow p-3 mb-5 bg-white rounded">
                    
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_-dosoWh6pY?list=PL4rffjx6t6O7hLIETCtxy1A4KzLakHYAJ" allowfullscreen></iframe>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
