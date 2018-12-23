@extends('layouts.app')

@section('content')

<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-8">
					
				<div class="card card-default">
                <div class="card-header">{{ $posts->title }} | <small>{{ $posts->category->name }}</small></div>


                <div class="card-body"><p>{{ $posts->content }}</p></div>
            </div>

            <div class="card card-default">
                <div class="card-header">Add Comments</div>


                <div class="card-body">
                	<form action="{{ route('post.comment.store', $posts) }}" method="post" class="form-harizontal">
                		{{ csrf_field() }}
                		<div class="form-group">
                		<textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Write Comments ..."></textarea>
                		</div>
                		<div class="form-group">
                			<input type="submit" value="Comments" class="btn btn-primary">
                		</div>	
                	</form>
                </div>

            </div>
		</div>
	</div>
</div>

@endsection