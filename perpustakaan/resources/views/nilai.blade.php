@php
$nama = "Faiz Kamaluzaman";
$nilai = 95.99;
@endphp

{{-- struktur kendali if --}}
@if ($nilai >= 60)
 @php $ket = "Lulus"; @endphp
@else
 @php $ket = "Gagal"; @endphp
@endif

<p>Siswa {{ $nama }} dengan nilai {{ $nilai }}
dinyatakan {{ $ket }}</p>