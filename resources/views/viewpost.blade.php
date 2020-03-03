@extends('layouts.app')

@section('content')
<div class="container">

<table class="table table-bordered">
<thead>
<tr>
<th>title</th>
<th>description</th>
<th>action</th>
</tr>
</thead>
<tbody>
@foreach($posts as $post)
<tr>
<td>{{ $post->title }}</td>
<td>{{ $post->description }}</td>
<td>
	@can('edit-post', $post)
		<a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
	@endcan	
	@can('delete', $post)
		<button type="button" class="btn btn-danger">Delete</button>
	@endcan	
	@can('view', $post)
		<a href="{{ route('posts.show', $post) }}" class="btn btn-info">view</a>
	@endcan	
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

@endsection
