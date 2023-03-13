<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       {{-- Includiamo gli assets con la direttiva @vite --}}
       @vite('resources/js/app.js')
    <title>Laravel Migration Seeder</title>
</head>
<body>
    <h1>Treni in partenza oggi</h1>
    @if(count($departingTrains) > 0)
    <table>
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departingTrains as $train)
                <tr>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->coach_number }}</td>
                    <td>{{ $train->on_time ? 'Sì' : 'No' }}</td>
                    <td>{{ $train->cancelled ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Nessun treno in partenza oggi.</p>
@endif
</body>
</html>