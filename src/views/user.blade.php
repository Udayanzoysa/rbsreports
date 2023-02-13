<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    {{-- Current Active Users: {{ $products }} --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" colspan="2" class="text-center">
                    <h1>Asses Report</h1>
                </th>
            </tr>
            <tr>
                <th scope="col" class="text-center">
                    <h5>Date Name</h5>
                </th>
                <th scope="col" class="text-center">
                    <h5>Sort By : value</h5>
                </th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Asset Name</th>
                <th scope="col">Asset No</th>
                <th scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->Asset }}</td>
                    <td>{{ $product->AssetNo }}</td>
                    <td>{{ $product->Value }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
