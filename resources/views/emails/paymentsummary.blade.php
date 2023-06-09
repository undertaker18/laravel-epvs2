<x-mail::message>
<style>
/* Add any custom styles for the email here */
/* For example: */
table {
width: 100%;
}
th {
background-color: #1266B4;
color: #ffffff;
padding: 10px;
}
th, td {
padding: 10px;
text-align: left;
border-bottom: 1.5px solid #ddd;
}
img.logo {
height: 110%;
width: 100%;
}
h6 {
text-align: center;
color: red;
}
</style>
<img src="{{ $message->embed('assets/data-privacy/emaillogo.jpg') }}" class="logo">
<h1>La Verdad Christian College</h1>
<h2>Enrollment Payment Validation System</h2>
<h6 >FOR DEMO PURPOSES ONLY!</h6>
<hr>

<p>Hi {{ $data['name'] }},</p>
<p>Thanks for filling out the Enrollment Payment Form. Here's what we received:</p>
<table>
@php $id_student = 1; @endphp
@foreach ($data['data']['summary']['studentsInfo'] as $value)
<thead>

<tr>
<th colspan="2">Student {{ $id_student++ }}</th>
</tr>
</thead>
<tbody>
@foreach ($value as $key1 => $value1)
    
<tr>
<td><strong>{{ $key1 }}</strong></td>
<td>{{ $value1 }}</td>
</tr>
@endforeach
</tbody>
@endforeach

<thead>
<tr>
<th colspan="2">Payment</th>
</tr>
</thead>
<tbody>
@foreach ($data['data']['summary']['receipt'] as $key => $value)
<tr>
<td><strong>{{ $key }}</strong></td>
<td>{{ $value }}</td>
</tr>
@endforeach
</tbody>
</table>
<br>
<img src="{{ $message->embed(public_path(). '/' . $data['receipt']) }}">
<p>Thanks,</p>
<p>{{ config('app.name') }}</p>
</x-mail::message>
