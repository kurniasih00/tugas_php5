<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas php5 kurniasih</title>

    <style>
        .table_a {
            background-color: white;
            width: 35%;
            text-align: justify;
            margin: auto;
            overflow: hidden;
            border-collapse: collapse;
            border-radius: 5px;
            color: black;
        }

        form th {
            background-color: rgb(247, 99, 173);
            color: maroon;
            text-align: center;
            font-weight: bold;
            padding: 10px;
            border: 1px solid black;  
        }
    
        form td {
            padding: 10px;
            border: 1px solid black;
        }

        table {
            height: 50px;
            border-collapse: collapse;
            background-color: rgb(247, 99, 173);
        }
        
        th, td {
            border: 1px solid maroon;
            padding: 10px;
            text-align: left;
            }
        
    </style>
</head>
<body>
<form action="" method="POST">
        <table class="table_a">
            <tr>
                <th colspan="2">
                    <h1>Form Nilai Mahasiswa</h1>
                </th>
            </tr>

            <tr>
                <td><label for="nim">Nim</label></td>
                <td><input type="nim" name="nim" id="nim"></td>
            </tr>

            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="nama" name="nama" id="nama"></td>
            </tr>

            <tr>
                <td><label for="kuliah">Kuliah</label></td>
                <td><select id="kuliah" name="kuliah" class="custom-select">
                <option value="">-- Pilih Universitas --</option>
                <option value="Universitas bahagia">Universitas bahagia</option>
                <option value="Universitas ceria">Universitas ceria</option>
                <option value="Universitas gaul">Universitas gaul</option>
                <option value="Universitas keren">Universitas keren</option>
                </select></td>
            </tr>

            <tr>
                <td><label for="mata_kuliah">Mata Kuliah</label></td>
                <td><select id="mata_kuliah" name="mata_kuliah" class="custom-select">
                <option value="">-- Pilih Matkul --</option>
                <option value="UIUX">UIUX</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="PHP">PHP</option>
                </select></td>
            </tr>

            <tr>
                <td><label for="nilai">Nilai</label></td>
                <td><input type="nilai" name="nilai" id="nilai"></td>
            </tr>

            <tr>
                <th colspan="2">  
                <button style="width: 20%; padding: 1%;" name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </th>
            </tr>
        </table>
</form>


<?php
//sertakan file classnya
require_once 'Mahasiswa.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    
// tangkap data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kuliah = $_POST['kuliah'];
$mata_kuliah = $_POST['mata_kuliah'];
$nilai = $_POST['nilai'];

//objek
$ns1 = new Mahasiswa($nim, $nama, $kuliah, $mata_kuliah, $nilai);
?>


    <!-- cetak hasil dengan tabel -->
    <h2 align="center">Daftar Nilai Mahasiswa</h2>
        <table border="1" align="center">
            <thead>
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Kuliah</th>
                    <th>Mata Kuliah</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>   
                    <tr>
                        <td> <?= $ns1->nim ?> </td>
                        <td> <?= $ns1->nama ?> </td>
                        <td> <?= $ns1->kuliah ?> </td>
                        <td> <?= $ns1->mata_kuliah ?> </td>
                        <td> <?= $ns1->nilai ?> </td>
                        <td> <?= $ns1->getGrade() ?> </td>
                        <td> <?= $ns1->getPredikat() ?> </td>
                        <td> <?= $ns1->getStatus() ?> </td>
                    </tr>
            </tbody>
        </table>
    <?php } ?>
</body>
</html>