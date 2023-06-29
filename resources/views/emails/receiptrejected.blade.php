

<x-mail::message>
    
<img src="{{ $message->embed(public_path(). '/' . 'assets/data-privacy/lvcclogo.png') }}" style="height:100px; width:100px">

# La Verdad Christian College
## Enrollment Payment Validation System
***
Hi {{$data['data']['name']}}

Your receipt is **Invalid**. Kindly send a valid receipt. **Make sure the date, time, reference, and amount are visible**.
Thank you!

<img src="{{ $message->embed($data['data']['receipt']) }}">

Please refer to the sample valid receipts below.

<img src="{{ $message->embed($data['data']['sampleReceipt']) }}">

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
