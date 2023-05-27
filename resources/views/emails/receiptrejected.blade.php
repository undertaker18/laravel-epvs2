<x-mail::message>
Hi {{$data['data']['name']}}

Your receipt is **Invalid**. Kindly send a valid receipt. **Make sure the date, time, reference, and amount are visible**.

Thank you!

Please refer to the sample valid receipts below.


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
