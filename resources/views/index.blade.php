<!DOCTYPE html>
<html>
<head>
    <title>Updated Items Table</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(to right, #283048, #859398);
        }

        .table-rounded {
            border-radius: 20px;
            overflow: hidden;
        }

        .tback {
            background-color: rgba(255, 255, 255, 0.9);
            color: black;
        }

        .custom-table {
            width: 50%; /* Set the desired width for the table */
            margin: 0 auto; /* Center the table horizontally */
        }

        .font {
            font-family: 'Poppins', sans-serif;
        }

        .instock-green {
            color: rgb(0, 212, 0);
            font-weight: bold;
        }

        .custom-heading {
            color: white;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .table-icon {
            font-size: 32px;
            margin-right: 10px;
        }

        .table-light {
            background-color: rgba(224, 224, 224, 0.9); 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="custom-heading">
            <i class="fas fa-table table-icon"></i> UPDATED ITEMS TABLE
        </h1>
        <div class="custom-table">
            <table class="table table-bordered table-rounded">
                <thead class="table-light font">
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>In Stock</th>
                    </tr>
                </thead>
                <tbody class="tback font">
                    @foreach ($updatedData as $item)
                        <tr>
                            <td>{{ $item['title'] }}</td>
                            <td>{{ '$'. $item['data']['price'] }}</td>
                            <td class="instock-green">{{ $item['data']['instock'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
