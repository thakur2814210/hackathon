@extends('beautymail::templates.minty')

@section('content')

	@include('beautymail::templates.minty.contentStart')
		<tr>
			<td class="title">
				A New Solution is submitted. <a href="{{request()->getSchemeAndHttpHost()}}/challenges/{{$short_url}}">{{$challenge_name}}</a>
			</td>
		</tr>
		<tr>
			<td width="100%" height="10"></td>
		</tr>
		<tr>
			<td class="paragraph">
				By : {{$name}} - {{$email}} <br>
				
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
				<table height="36" align="center" valign="middle" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
					<tbody>
					<tr>
						<td width="auto" align="center" valign="middle" height="36" style="border-collapse:collapse;background-color:#004cad;border-top-left-radius:4px;border-bottom-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:4px;background-clip:padding-box;font-size:13px;font-family:Helvetica,arial,sans-serif;text-align:center;color:#ffffff;font-weight:300">
						   <span style="color:#ffffff;font-weight:300">
							  <a href="{{request()->getSchemeAndHttpHost()}}/main/users/show_code/{{$code_id}}" style="color:#ffffff;text-align:center;text-decoration:none;display:block;padding-left:25px;padding-right:25px;background-clip:padding-box;height:36px;line-height:36px">View Code</a>
						   </span>
						</td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td width="100%" height="25"></td>
		</tr>
	@include('beautymail::templates.minty.contentEnd')

@stop
