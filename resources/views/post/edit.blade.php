@@extends('adminlte::page')

@section('title', 'Profesores')

@section('content_header')
    <h1>Posts</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Post</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.update', $post->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('post.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


