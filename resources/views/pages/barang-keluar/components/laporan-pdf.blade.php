<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .total {
            font-weight: bold;
            text-align: right;
        }

        @media print {
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 20px;
            }

            h2 {
                color: #333;
            }

            table {
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                background-color: #fff;
            }

            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 12px;
            }

            th {
                background-color: #4CAF50;
                color: #fff;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            tr:hover {
                background-color: #f1f1f1;
            }

            .total {
                font-weight: bold;
                text-align: right;
            }
        }
    </style>
</head>
<body>


<h2>Laporan Barang Masuk</h2>

<table>
    <thead>
    <tr>
        <th>Nama Barang</th>
        <th>Tanggal</th>
        <th>Qty</th>
        <th>Status</th>
        <th>Harga</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
        @foreach($laporan as $l)
    <tr>
        <td>{{ $l->barang->nama }}</td>
        <td>{{ $l->tanggal  }}</td>
        <td>{{ $l->qty }}</td>
        <td>{{ $l->status  == 0 ? 'Belum Disetujui' : 'Disetujui' }}</td>
        <td>{{ number_format($l->harga_satuan) }}</td>
        <td>{{ number_format($l->total) }}</td>
    </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
