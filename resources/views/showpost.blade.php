
@extends('layouts.app')

@section('content')
<div class="container">

	<table class="table">
		<tbody>
			<tr>
				<td>Title</td>
				<td>{{ $post->title }}</td>
			</tr>
			<tr>
				<td>Description</td>
				<td>{{ $post->description }}</td>
			</tr>
			<tr>
				<td colspan="2">
					<a href="{{ route('posts.index') }}" class="btn btn-danger text-right">Back</a>
				</td>
			</tr>
		</tbody>
	</table>

</div>

@endsection
