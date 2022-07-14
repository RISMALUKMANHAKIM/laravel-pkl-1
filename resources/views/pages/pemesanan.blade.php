<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
        fieldset {
            width: 400px;
        }
    </style>
    <title>Pemesanan</title>
</head>

<body>

    <fieldset>
        <legend>
            <h2>Pemesanan</h2>
        </legend>
        <table>
            <tr>
                <td>Makanan</td>
                <td>:</td>
                <td> <b>{{ $makanan }}</b> </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    @if ($makanan == 'Mie Goreng')
                        Rp5.000
                    @elseif($makanan == 'Seblak')
                        Rp7.500
                    @elseif($makanan == 'Nasi Padang')
                        Rp15.000
                    @else
                        Rp-
                    @endif
                </td>
            </tr>
            <tr>
                <td>Minuman</td>
                <td>:</td>
                <td> <b>{{ $minuman }}</b> </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    @if ($minuman == 'Kopi')
                        Rp5.000
                    @elseif($minuman == 'Jus')
                        Rp10.000
                    @elseif($minuman == 'Teh')
                        Rp7.500
                    @else
                        Rp-
                    @endif
                </td>
            </tr>
            <tr>
                <td>Cemilan</td>
                <td>:</td>
                <td> <b>{{ $cemilan }}</b> </td>
            </tr>
        </table>
    </fieldset>

</body>

</html>
