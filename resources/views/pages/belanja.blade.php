<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CSS --}}
    {{-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> --}}
    <style>
        fieldset {
            width: 500px;
        }
    </style>
    <title>Belanja</title>
</head>

<body>

    <fieldset>
        <legend>
            <h2>
                Daftar Belanja
            </h2>
        </legend>

        @foreach ($belanja as $beli)
            @php
                $total = 0;
            @endphp
            Nama : {{ $beli['name'] }} <br />
            Daftar Belanja :
            @foreach ($beli['belanja'] as $list)
                <li>{{ $list['produk'] . ' = Rp' . number_format($list['harga'], 2, ',', '.') }}</li>
                @php
                    $total += $list['harga'];
                    
                @endphp
            @endforeach
            <br />
            Total Belanjaan : Rp{{ number_format($total, 2, ',', '.') }} <br />
            @if ($total > 250000 && $total < 500000)
                @php
                    $cashback = (5 / 100) * $total;
                @endphp
                Cashback : Rp{{ number_format($cashback, 2, ',', '.') }} <br />
                Total Harga : <b>Rp{{ number_format($total - $cashback, 2, ',', '.') }}</b>
            @elseif($total > 500000)
                @php
                    $cashback = (10 / 100) * $total;
                @endphp

                Cashback : Rp{{ number_format($cashback, 2, ',', '.') }} <br />
                Total Harga : <b>Rp{{ number_format($total - $cashback, 2, ',', '.') }}</b>
            @endif
            <hr />
        @endforeach
    </fieldset>

</body>

</html>
