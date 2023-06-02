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
</style>
<img src="{{ $message->embed(public_path('assets/data-privacy/emaillogo.jpg')) }}" class="logo">
<h1>La Verdad Christian College</h1>
<h2>Enrollment Payment Validation System</h2>
<hr>
<p>Hi {{ $data['name'] }},</p>
<p>Thanks for filling out the Enrollment Payment Form. Here's what we received:</p>
<?php
$id_student = 1;
?>
<table>
@foreach ($data['data']['summary']['studentsInfo'] as $key => $value)
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
<br>    
@endforeach
</tbody>

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

<img src="{{ $message->embed(public_path($data['receipt'])) }}">
<p>Thanks,</p>
<p>{{ config('app.name') }}</p>
</x-mail::message>
