@extends('beautymail::templates.minty')

@section('content')

	@include('beautymail::templates.minty.contentStart')
		<tr>
			<td class="title">
				A New User Registered For Hackathon - {{$hackathon_title}}
			</td>
		</tr>
		<tr>
			<td width="100%" height="10"></td>
		</tr>
		<tr>
			<td class="paragraph">
				Name : {{$name}}
                Email : {{$email}}
			</td>
		</tr>
		<tr>
			<td width="100%" height="25"></td>
		</tr>
		{{-- <tr>
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
				@include('beautymail::templates.minty.button', ['text' => '{{$hackathon_title}}', 'link' => '#'])
			</td>
		</tr>
		<tr>
			<td width="100%" height="25"></td>
		</tr>
	@include('beautymail::templates.minty.contentEnd')

@stop
