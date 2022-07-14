<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belanja</title>
</head>
<body>
    
    <fieldset>
        <legend>
            <h2>
                Daftar Belanja
            </h2>
        </legend>
        
        @foreach($belanja as $beli)
        @php
            $total = 0;
        @endphp
            Nama : {{ $beli['name'] }} <br />
            Daftar Belanja :
            @foreach($beli['belanja'] as $list)
                <li>{{ $list['produk']. " = Rp" .$list['harga']; }}</li>
                @php
                    $total += $list['harga']
                    
                @endphp
            @endforeach
            <br />
            Total Belanjaan : Rp    {{ $total }} <br />
            @if($total > 250000 && $total < 500000)
                @php
                    $cashback = (5/100) * $total;
                @endphp
                Cashback : Rp{{ $cashback }} <br />
                Total Harga : <b>Rp{{ $total - $cashback }}</b>

                @elseif($total > 500000)
                @php
                    $cashback = (10/100) * $total;
                @endphp
                
                Cashback : Rp{{ $cashback }} <br />
                Total Harga : <b>Rp{{ $total - $cashback }}</b>
            @endif 
            <hr />
        @endforeach
    </fieldset>

</body>
</html>