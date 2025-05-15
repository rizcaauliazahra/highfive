<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Monitoring Jamur Tiram</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
    </style>
</head>
<body>
    <h1>Riwayat Monitoring Suhu & Kelembapan Jamur Tiram</h1>

    <table>
        <thead>
            <tr>
                <th>Waktu Pencatatan</th>
                <th>Lokasi</th>
                <th>Suhu (°C)</th>
                <th>Kelembapan (%)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitorings as $monitoring)
                <tr>
                    <td>{{ $monitoring->recorded_at ?? $monitoring->created_at }}</td>
                    <td>{{ $monitoring->location }}</td>
                    <td>{{ $monitoring->temperature }}</td>
                    <td>{{ $monitoring->humidity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $monitorings->links() }}
</body>
</html>
