<x-mail::message>
<img src="{{ $message->embed(public_path(). '/' . 'assets/data-privacy/lvcclogo.png') }}" style="height:100px; width:100px">

# La Verdad Christian College
## Enrollment Payment Validation System
***

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


<img src="{{ $message->embed(public_path(). '/' . $data['receipt']) }}">


Thanks,

{{ config('app.name') }}
</x-mail::message>
