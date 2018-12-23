@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-2-offset">

            @foreach ($posts as $post)
            	<div class="card card-default">
                <div class="card-header">

                <a href="{{ route('post.show', $post) }}" class="btn btn-xs btn-default">{{ $post->title }}</a>
                <div align="right" class="pull-right">
                    <a href="{{ route('post.edit', $post)}}" class="btn btn-xs btn-success">Edit</a>
                    <form class="" action="{{ route('post.destroy', $post) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                    </form>
                </div>
            </div>

                <div class="card-body">
                	<p>{{ str_limit($post->content, 100, ' ...') }}</p>
                </div>
            
            @endforeach
            
        </div>
    </div>
</div>

@endsection
