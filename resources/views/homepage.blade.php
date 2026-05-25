<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

    @Vite('resources/css/app.css')
</head>

<body class="bg-black">
    <table class="table-styling">
        @foreach($trains as $train)
        <tr>
            <td class="cell-padding">{{$train['company']}}</td>
            <td class="cell-padding">{{$train['departure_station']}}</td>
            <td class="cell-padding">{{$train['arrival_station']}}</td>
            <td class="cell-padding">{{$train['departure_time']}}</td>
            <td class="cell-padding">{{$train['arrival_time']}}</td>
            <td class="cell-padding">{{$train['train_code']}}</td>
            <td class="cell-padding">{{$train['number_of_wagons']}}</td>
            @if($train['in_time'] == true)
            <td class="cell-padding">IN ORARIO</td>
            @else
            <td class="cell-padding">IN RITARDO</td>
            @endif

            @if($train['cancelled'] == true)
            <td class="cell-padding">CANCELLATO</td>
            @endif
        </tr>
        @endforeach
    </table>
</body>

</html>