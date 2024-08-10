<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSP</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f6fa;
        }

        .container {
            background-color: #ffffff;
            padding: 20px 40px;
            border: 1px solid #718093;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
            margin-bottom: 20px;
            color: #00a8ff;
        }

        .container .row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .container .row div:first-child {
            width: 30%;
            font-weight: bold;
            color: #333;
        }

        .container input,
        .container select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .footer {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .footer button {
            background-color: #00a8ff;
            padding: 10px 20px;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin: 0 10px;
        }

        .footer button:hover {
            background-color: #005f9e;
        }

        .footer a button {
            background-color: #e84118;
        }

        .footer a button:hover {
            background-color: #c23616;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Input Biodata</h2>
        <form method="post" action="<?php echo base_url('mahasiswa/create');?>" enctype="multipart/form-data">
            <div class="row">
                <div>NIK:</div>
                <div><input type="text" name="nik"></div>
            </div>
            <div class="row">
                <div>Nama:</div>
                <div><input type="text" name="nama"></div>
            </div>
            <div class="row">
                <div>Tempat Lahir:</div>
                <div><input type="text" name="tempat_lahir"></div>
            </div>
            <div class="row">
                <div>Tanggal Lahir:</div>
                <div><input type="date" name="tanggal_lahir"></div>
            </div>
            <div class="row">
                <div>Jenis Kelamin:</div>
                <div><input type="text" name="jenis_kelamin"></div>
            </div>
            <div class="row">
                <div>Alamat:</div>
                <div><input type="text" name="alamat"></div>
            </div>
            <div class="row">
                <div>Agama:</div>
                <div>
                    <select name="agama">
                        <option value="islam">Islam</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                        <option value="kristen">Kristen</option>
                    </select>
                </div>
            </div>
            <div class="footer">
                <button type="submit">Send</button>
                <a href="<?php echo base_url('mahasiswa');?>"><button type="button">Cancel</button></a>
            </div>
        </form>
    </div>

</body>

</html>
