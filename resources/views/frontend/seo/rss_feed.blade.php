<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Services</title>
    <style>
        .service {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
        }
        .service img {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Our Services</h1>

    @foreach(service_menu() as $service)
        <div class="service">
            <h2>{{ $service->title }}</h2>

                <img src="https://attorneypema.com/v1/img/bg-1.jpg" alt="{{ $service->title }}">

            <p> {!! $service->details !!}   </p>

            @if($service->category)
                <p><strong>Category:</strong> {{ $service->category->name }}</p>
            @endif
        </div>
    @endforeach
</body>
</html>
