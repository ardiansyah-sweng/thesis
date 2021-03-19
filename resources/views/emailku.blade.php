<?php

?>
@foreach($mailData as $item)
<h3>Halo, {{ $item->nama_mahasiswa }} !</h3>
<p>{{ $item->nim }}</p>
@endforeach

Anda terpilih/tidak terpilih untuk mengerjakan topik tugas akhir berikut:
Judul: {{ $judul }}
Pembimbing: {{ $dosen }}
Bidang: {{ $bidang }}

Pengelola Siatif
{{ $pengelola }}