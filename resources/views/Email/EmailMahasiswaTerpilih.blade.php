@component('mail::message')
{{ $mailData['title'] }}
<p>
Saudara/i <b>{{ $mailData['nama_mahasiswa'] }}</b> (NIM: {{ $mailData['nim'] }}), Anda <b>{{ $mailData['keputusan'] }}</b> untuk mengerjakan topik tugas akhir berikut:<br>
<b>Judul</b><br>
{{ $mailData['judul_topik'] }}<br>
<b>Pembimbing</b><br>
{{ $mailData['nama_dosen'] }}<br>
<b>Bidang</b><br>
{{ $mailData['topik_bidang'] }}<br>

Terima kasih,<br>
<b>Pengelola Siatif</b>

@endcomponent
