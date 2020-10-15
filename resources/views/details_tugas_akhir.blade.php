@foreach($detailsTopikTA as $item)
    <?php
        $jumlahPendaftar = $item->jumlah_pendaftar;
        if ($jumlahPendaftar == 0){ $jumlahPendaftar = 'Belum ada'; }
        //if ($jumlahPendaftar != 0){ $jumlahPendaftar = 'Belum ada'; }
    ?>
    Judul: {{ $item->judul_topik }} <br>
    Dosen: {{ $item->nama }} <br>
    Bidang: {{ $item->topik_bidang }} <br>
    Pendaftar: {{ $jumlahPendaftar }} mahasiswa <br>
@endforeach

@foreach($listMahasiswa as $item)
    - {{ $item->nama_mahasiswa }} <br>
@endforeach