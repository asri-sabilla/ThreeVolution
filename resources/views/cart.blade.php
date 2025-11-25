<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
<title>Data Cart</title>
</head>
<body>
    
<div class="container text-center p-4 bg-white">
<h1 class="mb-3">Data Cart</h1>
<table class="table table-bordered">
    <tr>
        <th>ID Sayur</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Asal</th>
        <th>Jumlah</th>
    </tr>

    @forelse ($cart as $val)
        <tr>
            <td>{{ $val->idSayur }}</td>
            <td>{{ $val->NamaSayur }}</td>
            <td>Rp {{ number_format($val->Harga) }}</td>
            <td>{{ $val->Asal }}</td>
            <td>{{ $val->Jumlah }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center">Tidak ada data...</td>
        </tr>
    @endforelse
</table>
<div class="row"></div>
</div>
</div>
</div>
</body>
</html>