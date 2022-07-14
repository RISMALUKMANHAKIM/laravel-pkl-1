<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order | Route Parameter</title>
</head>

<body>

    <h3>Order</h3>
    Saya memesan :
    <table>
        <tr>
            <td>Makanan</td>
            <td>:</td>
            <td>
                <b>{{ $makanan }}</b>
            </td>
        </tr>
        <tr>
            <td>Minuman</td>
            <td>:</td>
            <td>
                <b>{{ $minuman }}</b>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>
                <b>Rp{{ $harga }}</b>
            </td>
        </tr>
    </table>

</body>

</html>
