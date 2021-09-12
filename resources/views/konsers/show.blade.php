<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="title m-b-md">
           {{ $konser->title }}
        </div>
        <h2> {{ $konser->subtitle }}</h2>
        <p>{{ $konser->formatted_date }}</p>
        <p>Doors at {{ $konser->formatted_start_time }}</p>
        <p>{{ $konser->ticket_price_in_dollars }}</p>
        <p>{{ $konser->venue }}</p>
        <p>{{ $konser->venue_address }}</p>
        <p>{{ $konser->city }}</p>
        <p>{{ $konser->state }}</p>
        <p>{{ $konser->zip }}</p>
        <p>{{ $konser->additional_information }}</p>
    </div>
</body>
</html>