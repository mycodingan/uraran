<!-- resources/views/absensi/pdf.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Absensi Kehadiran PDF</title>
    <style>
        /* Add your styling for the PDF here */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Absensi Kehadiran</h2>

    <table>
        <thead>
            <tr>
                <th>Nama Pembayar</th>
                <th>Laporan Pembayaran</th>
                <th>Nominal Pembayaran</th>
                <th>Tanggal Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absensiKehadirans as $absensiKehadiran)
                <tr>
                    <td>{{ $absensiKehadiran->nama_pembayar }}</td>
                    <td>{{ $absensiKehadiran->laporan_pembayaran }}</td>
                    <td>{{ $absensiKehadiran->nominal_pembayaran }}</td>
                    <td>{{ $absensiKehadiran->tanggal_pembayaran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
