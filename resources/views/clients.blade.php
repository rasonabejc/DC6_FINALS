<!DOCTYPE html>
<html>
<head>
    <title>List of Clients</title>
</head>
<body>
    <h1>List of Clients</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client['name'] }}</td>
                <td>{{ $client['email'] }}</td>
                <td>{{ $client['phone'] }}</td>
                <td>{{ $client['company'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
