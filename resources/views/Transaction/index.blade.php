@extends('app')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card-header">
        Data Transaksi <br><br>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    </div>

    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="thead-dark text-center">
                <tr align="center">
                    <th scope="col" >No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Id Cust </th>
                    <th scope="col">Id Media</th>
                    <th scope="col">Id Pelayanan</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Data</th>
                    <th scope="col">Id Sosial & Pendudukan</th>
                    <th scope="col">Id Ekonomi & Perdagangan</th>
                    <th scope="col">Id Pertanian & Pertambangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaction as $item)
                <tr>
                    <td>{{ $loop->iteration}}
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->id_customer }}</td>
                    <td>{{ $item->id_media }}</td>
                    <td>{{ $item->id_service }}</td>
                    <td>{{ $item->tujuan }}</td>
                    <td>{{ $item->data }}</td>
                    <td>{{ $item->id_social_population }}</td>
                    <td>{{ $item->id_economy_trade }}</td>
                    <td>{{ $item->id_agriculture_mining}}</td>
                    <td>
                        <div class="row">
                                <div class="col-4">
                                    <a href="{{ route('education.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('education.show', $item->id)}}" class="btn btn-info">Show</a>
                                </div>
                                <div class="col-4">
                                    <form action="{{route('education.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus Jenis Pendidikan ini ?')">Delete</button>
                                    </form>
                                </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    });
    });
</script>
@endsection