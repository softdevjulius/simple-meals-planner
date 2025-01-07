<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Plan Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEJt3WzNpZLoC2tKlxPZp2dBwyHzZp9lIivI40l5nL1CmXtr0BKP5zxfQQdiu" crossorigin="anonymous">

    <!-- Custom CSS for double borders -->
    <style>
        .table th, .table td {
            border: double 3px #000;
        }
    </style>
</head>
<body class="bg-light">

<div class="container-fluid min-vh-100 d-flex flex-column justify-content-center">

    <!-- Table Container -->
    <div class="row justify-content-center">

        <div class="col-12 col-md-10 col-lg-8">
            <h1 class="text-center">Meal Plan Table</h1>
            <a href="{{route("breakfast")}}">Breakfast</a>
            <br>
            <br>
            <a href="{{route("lunch")}}">Lunch</a>
        </div>
        <br>

        <div class="col-12 col-md-10 col-lg-8">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead class="table-dark">
                <tr>
                    <th scope="col">Day of the Week</th>
                    <th scope="col">Meal</th>
                </tr>
                </thead>
                <tbody>
                @forelse($days_of_the_week as $index => $day_of_the_week)
                    <tr>
                        <td>{{ $day_of_the_week }}</td>
                        <td>{{ $meals[$index] }}</td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0FdF+0lzwrbX0K1Ex3n+j6XxEgyNQTmc0du5pWmY63pX0kkS"
        crossorigin="anonymous"></script>
</body>
</html>
