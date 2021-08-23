@extends('beautymail::templates.minty')

@section('content')

	@include('beautymail::templates.minty.contentStart')
		<tr>
			<td class="title">
				A New Solution is submitted. <a href="/challenge/{{$short_url}}">{{$challenge_name}}</a>
			</td>
		</tr>
		<tr>
			<td width="100%" height="10"></td>
		</tr>
		<tr>
			<td class="paragraph">
				By : {{$username}} - {{$email}}
			</td>
		</tr>
		{{-- <tr>
			<td width="100%" height="25"></td>
		</tr>
		<tr>
			<td class="title">
				This is a heading
			</td>
		</tr>
		<tr>
			<td width="100%" height="10"></td>
		</tr>
		<tr>
			<td class="paragraph">
				More paragraph text.
			</td>
		</tr> --}}
		<tr>
			<td width="100%" height="25"></td>
		</tr>
		<tr>
			<td>
				@include('beautymail::templates.minty.button', ['text' => 'View Code', 'link' => '/challenges/{{$short_url}}'])
			</td>
		</tr>
		<tr>
			<td width="100%" height="25"></td>
		</tr>
	@include('beautymail::templates.minty.contentEnd')

@stop
