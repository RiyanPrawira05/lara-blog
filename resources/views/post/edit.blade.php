@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-8 col-md-2-offset">
					<div class="card card-default">
						<div class="card-header">Edit Post</div>

					<div class="card-body">
					<form class="" action="{{ route('post.update', $posts) }}" method="post">
					{{ csrf_field() }}
					{{ method_field('PATCH') }}
			
					<div class="form-group">
						<label for="">Tittle</label>
						<input type="text" name="title" class="form-control" placeholder="Title" value="{{ $posts->title }}"></i>
					</div>
					<div class="form-group">
						<label for="">Category</label>
							<select name="category_id" id="" class="form-control">

								@foreach ($categories as $category)
									<option 
									value="{{ $category->id }}"
										@if ($category->id === $posts->category_id)
										selected
										@endif
									>{{ $category->name }} 
									
									</option>
								@endforeach

							</select>
					</div>
					<div class="form-group">
						<label for="">Content</label>
						<textarea name="content" rows="5" class="form-control" placeholder="Content">{{ $posts->content }}</textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="Save">
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection