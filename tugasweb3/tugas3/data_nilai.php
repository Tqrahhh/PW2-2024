<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table border=2 class="table table-light table-borderless">
  
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rata-Rata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>01</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>02</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <tr>

            <td>03</td>
    
            <?php
            /**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/



require_once "libfungsi.php";


if (isset($_POST['submit'])){ 

    $submit = $_POST['submit'];

    $namamahasiswa = $_POST['nama_lengkap'];
    $matakuliah = $_POST['mata_kuliah'];

    $nilaiuts = $_POST['nilai_uts'];
    $nilaiuas = $_POST['nilai_uas'];
    $nilaitugas = $_POST['nilai_tugas'];

    $totalnilai = ($nilaiuts * 0.3) + ($nilaiuas * 0.35) + ($nilaitugas * 0.35);

    $opsi1 = grade($totalnilai);
    $opsi3 = kepuasan($totalnilai);
    $opsi2 = kelulusan($totalnilai);

    
    echo '<td>'.$namamahasiswa;
    echo '<td>'.$matakuliah;

    echo '<td>'.$nilaiuts;
    echo '<td>'.$nilaiuas;
    echo '<td>'.$nilaitugas;
    echo '<td>'.$totalnilai;

    echo '<td>'.$opsi1;
    echo '<td>'.$opsi3;
    echo '<td>'.$opsi2;
}
    // echo '<td>'.$opsi2;
    

?>  
          </tr>
      </tbody>
  </table>
</div>
</body>