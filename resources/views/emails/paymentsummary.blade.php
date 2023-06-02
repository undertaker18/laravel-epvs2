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
border-bottom: 1px solid #ddd;
}
img.logo {
height: 100px;
width: 100px;
}
</style>
<img src="{{ $message->embed(public_path('assets/data-privacy/lvcclogo.png')) }}" class="logo">
<h1>La Verdad Christian College</h1>
<h2>Enrollment Payment Validation System</h2>
<hr>
<p>Hi {{ $data['name'] }},</p>
<p>Thanks for filling out the Enrollment Payment Form. Here's what was received:</p>
<table>
<thead>
<tr>
<th colspan="2">Details</th>
</tr>
</thead>
<tbody>
        @foreach ($data['data']['summary']['studentsInfo'] as $key => $value)
            @foreach ($value as $key1 => $value1)
                <tr>
                    <td><strong>{{ $key1 }}</strong></td>
                    <td>{{ $value1 }}</td>
                </tr>
            @endforeach
        @endforeach
        @foreach ($data['data']['summary']['receipt'] as $key => $value)
            <tr>
                <td><strong>{{ $key }}</strong></td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>
<br>
<img src="{{ $message->embed(public_path($data['receipt'])) }}">
<p>Thanks,</p>
<p>{{ config('app.name') }}</p>
</x-mail::message>
