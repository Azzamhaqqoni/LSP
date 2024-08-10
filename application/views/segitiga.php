<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        td {
            padding: 10px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
        .link {
            text-align: center;
            margin-top: 20px;
        }
        .link a {
            color: #007bff;
            text-decoration: none;
        }
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hitung Luas Segitiga</h1>
        <form method="post" action="<?php echo base_url('segitiga/hitung');?>">
            <table>
                <tr>
                    <td>Alas Segitiga</td>
                    <td>:<input type="number" name="alas" required></td>
                </tr>
                <tr>
                    <td>Tinggi Segitiga</td>
                    <td>:<input type="number" name="tinggi" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Hitung"></td>
                </tr>
            </table>
        </form>
        <?php if(isset($luas_segitiga)){ ?>
            <div class="result">
                Luas segitiga adalah: <?php echo $luas_segitiga; ?>
            </div>
        <?php } ?>
        <a href="<?php echo base_url('mahasiswa');?>" class="button-link">
        <button type="button">Biodata Mahasiswa</button>
    </a>
    </div>
</body>
</html>
