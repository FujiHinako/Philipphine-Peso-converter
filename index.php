<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            justify-content: center;
            align-items: center;
        }
        
        </style>
    <title></title>
</head>
<body>
    <div class="container" id="result"><?php
        
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $amount = floatval($_POST['amount']);
            $selector = $_POST['selector'];
            $converted_amount = 0;

            if ($selector === "USD") {
                $converted_amount = $amount * 0.017;
            } elseif ($selector === "EUR") {
                $converted_amount = $amount * 0.015;
            } elseif ($selector === "JPY") {
                $converted_amount = $amount * 2.70;
            } elseif ($selector === "GBP") {
                $converted_amount = $amount * 0.013;
            } elseif ($selector === "AUD") {
                $converted_amount = $amount * 0.024;
            }
        
            echo "<p id='result'>Original Amount: " ."PHP </p>";
            echo "<input type id='result' disabled value=" . number_format($amount, 2) . " /input>";

            echo "<p id='result'>Converted Amount: " . htmlspecialchars($selector) . "</p>";
            echo "<input type id='result' disabled value=" . number_format($converted_amount, 3) . " "  . "</input>";
        
            }
        
        ?></div>
    
</body>
</html>