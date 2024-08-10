<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 50px;
            font-size: 2rem;
            color: #2d3436;
        }

        button {
            background-color: #0984e3;
            padding: 10px 20px;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        button:hover {
            background-color: #74b9ff;
        }

        table {
            width: 90%;
            max-width: 1000px;
            margin-top: 30px;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: #00a8ff;
            color: #ffffff;
            text-align: left;
        }

        table td, table th {
            padding: 15px 12px;
            text-align: left;
            border-bottom: 1px solid #dcdde1;
        }

        table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        table tbody tr:hover {
            background-color: #e9f5ff;
        }

        table input[type="button"] {
            background-color: #e84118;
            padding: 8px 16px;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        table input[type="button"]:hover {
            background-color: #ff7675;
        }

        a.button-link {
            text-decoration: none;
        }

        /* Media query for responsive design */
        @media (max-width: 768px) {
            table {
                width: 100%;
            }

            button {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="<?php echo base_url('mahasiswa/add');?>">
        <button type="button">Tambah Mahasiswa</button>
    </a>
    <table border="1">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mahasiswa as $key=>$data): ?>
                <tr>
                    <td><?php echo $data["nik"] ?></td>
                    <td><?php echo $data["nama"] ?></td>
                    <td><?php echo $data["tempat_lahir"] ?></td>
                    <td><?php echo $data["tanggal_lahir"] ?></td>
                    <td><?php echo $data["jenis_kelamin"] ?></td>
                    <td><?php echo $data["alamat"] ?></td>
                    <td><?php echo $data["agama"] ?></td>
                    <td><a href="<?php echo base_url('mahasiswa/delete/'.$data['id']) ?>"><input type="button" value="Hapus"></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <br>
    <a href="<?php echo base_url('segitiga');?>" class="button-link">
        <button type="button">Hitung Luas Segitiga</button>
    </a>
            </br>
</body>
</html>
