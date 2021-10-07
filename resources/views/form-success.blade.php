<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>event Name: {{$eventName}}</p>
    <p>band Names: {{$bandNames}}</p>
    <p>start Date: {{$startDate}}</p>
    <p>end Date: {{$endDate}}</p>
    <p>portfolio: {{$portfolio}}</p>
    <p>ticketPrice: {{$ticketPrice}}</p>
    @switch($status)
        @case(1)
            <p>Status: Đang diễn ra</p>
            @break
        @case(2)
            <p>Status: Sắp diễn ra</p>
            @break
        @case(3)
            <p>Status: Đã diễn ra</p>
            @break
    @endswitch
</body>
</html>
