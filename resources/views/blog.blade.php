@extends('layouts.template')

@section('content')
    <header class="ex-header">
        <div class="container">
           <h1>Blog</h1>
        </div>
    </header>
    <div class="container">
                    
            @foreach ($post as $item )
                @if ($item->id%2==0)
                <div class="card m-3">
                    <div class="row g-0">
                        <div class="col-6">
                            <div class="card mb-3">
                                <img src="/images/{{ $item->image }}" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div> 
                        </div>                
                    </div>
                </div>
                @else
                <div class="card m-3">
                    <div class="row g-0">
                        <div class="col-6">
                            <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div> 
                        </div>
                        <div class="col-6">
                            <div class="card mb-3">
                                <img src="/images/{{ $item->image }}" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>                
                    </div>
                </div>
                @endif                
            @endforeach                   
    </div>
@endsection