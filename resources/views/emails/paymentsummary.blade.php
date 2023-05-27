<x-mail::message>
    {{-- <img src="{{public_path() .'/assets/data-privacy/lvcclogo.png' }}">
<img src="{{public_path() .'/assets/data-privacy/lvcclogo.png' }}" class="logo" alt="EPVS Logo"> --}}

Hi {{ $data['name'] }},

Thanks for filling out Enrollment Payment Form.

Here's what was received.

<table>
@foreach ($data['data']['summary']['receipt'] as $key => $value )
<tr>
<td><strong>{{$key}}</strong></td>
<td>{{$value}}</td>
</tr>
@endforeach

@foreach ($data['data']['summary']['studentsInfo'] as $key => $value )
<tr>
<td colspan="2" style="background-color:seashell"><strong>{{ $data['data']['summary']['studentsInfo'][$key]['Full Name']}}'s Details</strong></td>
</tr>
@foreach ($value as $key1 => $value1 )
<tr>
<td><strong>{{$key1}}</strong></td>
<td>{{$value1}}</td>
</tr>
@endforeach
@endforeach
</table>



Thanks,

{{ config('app.name') }}
</x-mail::message>
