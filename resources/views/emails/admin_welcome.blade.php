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
				<table height="36" align="center" valign="middle" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
					<tbody>
					<tr>
						<td width="auto" align="center" valign="middle" height="36" style="border-collapse:collapse;background-color:#004cad;border-top-left-radius:4px;border-bottom-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;background-clip:padding-box;font-size:13px;font-family:Helvetica,arial,sans-serif;text-align:center;color:#ffffff;font-weight:300">
						   <span style="color:#ffffff;font-weight:300">
							  <a href="{{request()->getSchemeAndHttpHost()}}/hack/{{$short_url}}" style="color:#ffffff;text-align:center;text-decoration:none;display:block;padding-left:25px;padding-right:25px;background-clip:padding-box;height:36px;line-height:36px">{{$hackathon_title}}</a>
						   </span>
						</td>
					</tr>
					</tbody>
				</table>
				{{-- @include('beautymail::templates.minty.button', ['text' => $hackathon_title, 'link' => "{{request()->getSchemeAndHttpHost()}}/hack/{{$short_url}}"]) --}}
			</td>
		</tr>
		<tr>
			<td width="100%" height="25"></td>
		</tr>
	@include('beautymail::templates.minty.contentEnd')

@stop
