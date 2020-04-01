<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>

    Data Masyarakat Positif Corona Indonesia by Provinsi
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Provinsi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($response['data'] as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['attributes']['Provinsi'] }}</td>
                <td>{{ $item['attributes']['Kasus_Posi'] }}</td>
                <td>{{ $item['attributes']['Kasus_Semb'] }}</td>
                <td>{{ $item['attributes']['Kasus_Meni'] }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="2">Total</td>
                <td>{{ array_sum( array_column(array_column($response['data'], 'attributes'), 'Kasus_Posi') ) }}</td>
                <td>{{ array_sum( array_column(array_column($response['data'], 'attributes'), 'Kasus_Semb') ) }}</td>
                <td>{{ array_sum( array_column(array_column($response['data'], 'attributes'), 'Kasus_Meni') ) }}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>
