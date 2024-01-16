<!DOCTYPE html>
<html>
<head>
    <title>Keluahan List - PDF</title>
</head>
<body>
    <h2>Keluahan List</h2>

    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>Nama Pengeluh</th>
                <th>Judul Keluhan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keluahans as $keluhan)
                <tr>
                    <td>{{ $keluhan->nama_pengeluh }}</td>
                    <td>{{ $keluhan->judul_keluhan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
