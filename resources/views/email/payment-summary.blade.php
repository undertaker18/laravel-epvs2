<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPVS</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/data-privacy/lvcclogo.png') }}">
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<body>
    <img src="{{public_path() .'/assets/data-privacy/lvcclogo.png' }}">
    <!--  section  -->
    <section  class="image-bg">
        <main class="container-fluid">


        {{-- Hi {{ $data['data']['name'] }},<br><br> --}}
Your receipt is invalid. <br><br> Kindly send a valid receipt. Make sure the date, time, reference, and amount are visible. Thank you!

Please refer to the sample valid receipts below:
<br><br>
{{-- {{ $data['attachment']['path']}} --}}
{{-- <a href="{{ $data['attachment']['path']}}">KLIK</a>** --}}

    <img src="{{ asset('assets/landing/LVCC.png')}}">

          </main>
        <main class="container-fluid ">
            <table>
                @foreach ($data['summary'] as $key => $value )
                    @if ($key !== 'payment')
                        <tr>
                            <td><strong>{{$key}}</strong></td>
                            <td>{{$value}}</td>
                        </tr>
                    @endif
                @endforeach

                @foreach ($data['summary']['payment'] as $key => $value )
                    <tr>
                        <td colspan="2" style="background-color:seashell"><strong>Student {{$key}}</strong></td>
                    </tr>
                     @foreach ($value as $key1 => $value1 )
                    <tr>
                        <td><strong>{{$key1}}</strong></td>
                        <td>{{$value1}}</td>
                    </tr>
                    @endforeach
                @endforeach

        </table>
        </main>
    </section>


    <!--  check box button  -->


    <!--  cdn for bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <!--  end cdn for bootstrap  -->

    <!--  ionicons  -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--  end ionicons  -->

</body>
</html>



