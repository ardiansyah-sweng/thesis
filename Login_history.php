<?php
include 'koneksi.php';
$batasan = 7;

//Proses untuk membuat url halaman
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batasan) - $batasan : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

//Penghitungan jumlah halaman
$data = mysqli_query($connect_history, "SELECT * FROM log_history");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batasan);                        

$tanggal_now = strtotime(date('Y-m-d H:i:s'));
$awal = date('Y-m-d H:i:s', strtotime('-7 day', $tanggal_now));         
$akhir = date('Y-m-d H:i:s');                                         

//Query menampilkan data hari ini sampai 7 hari kebelakang
$data_log_history = mysqli_query($connect_history, "SELECT * FROM log_history WHERE sign_time BETWEEN '$awal' AND '$akhir' limit $halaman_awal, $batasan");
$nomor = $halaman_awal + 1;

?>


<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background-image: url(ground.png);
            background-size: cover;
            font-family: sans-serif;
        }
    </style>

    <title>Log History</title>
</head>

<body>
    <div class="container justify-content-center">

        <div class="table-responsive">
            <table class="table text-center" border="1px">
                <div class="text-center" style="margin-top: 10%;">
                    <h2 class="mb-4"><u> LOG AKTIVITAS</u></h2>
                </div>
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>History</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($result = mysqli_fetch_array($data_log_history)) {
                    ?>
                        <tr>
                            <td>
                                <p class="font-weight-bold"><?php echo $no++ ?></p>
                            </td>
                            <td>
                                <p><?php echo $result['email'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $result['sign_time'] ?></p>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" <?php if ($halaman > 1) {
                                                echo "href='?halaman=$previous'";
                                            } ?>>Previous</a>
                </li>
                <?php
                for ($k = 1; $k <= $total_halaman; $k++) { // Perulangan untuk menampilkan jumlah halaman yang ada
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $k ?>"><?php echo $k; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item"><a class="page-link" <?php if ($halaman < $total_halaman) {
                                                                echo "href='?halaman=$next'";
                                                            } ?>>Next</a></li>
            </ul>
        </nav>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>