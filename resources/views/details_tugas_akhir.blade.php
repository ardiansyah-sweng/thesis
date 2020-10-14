@foreach($detailsTopikTA as $item)
    Judul: {{ $item->judul_topik }} <br>
    Dosen: {{ $item->nama }} <br>
    Bidang: {{ $item->topik_bidang }} <br>
@endforeach