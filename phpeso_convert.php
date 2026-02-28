<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title></title>
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
        }
        h1 {
            color: #343a40;
        }
        label {
            font-weight: bold;
        }
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">PHP to Currency Converter</h1>    
<form action="index.php" method="post">
        <label for="amount">Amount in PHP:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>
        <select name="selector" class="currency" id="form-select" class="form-select">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="JPY">JPY</option>
            <option value="GBP">GBP</option>
            <option value="AUD">AUD</option>
            </select>
            
       

        <input id="btn btn-outline-dark" type="submit" value="Convert">
        
        
        </form>
    </div>
</body>

</html>
