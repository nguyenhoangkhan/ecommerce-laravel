@extends('admin.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
@endsection
@section('button')
<a href="{{ route('voucherCreate') }}" class="btn btn-outline-primary">Thêm</a>
@endsection
@section('content')
<div class="card">
  <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tên</th>
                    <th>Mã</th>
                    <th>Giá trị</th>
                    <th width="20%">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vouchers as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->code }}</td>
                    <td>{{ $row->value }}%</td>
                      <td>
                        <a href="{{ route('voucherEdit', $row->name ) }}"><span class="btn btn-sm btn-outline-primary">Chi tiết</span></a>
                        <a href="javascript:void(0)" onClick="deletevoucher('{{ route('voucherDelete', $row->name) }}')" class="btn btn-sm btn-outline-danger">Xóa</a>
                    </td>
                </tr>
                @endforeach
                <tbody>
        </table>
  </div>
</div>
@endsection
@section('js')
<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
  let table1 = document.querySelector('#table1');
  let dataTable = new simpleDatatables.DataTable(table1);

  const deletevoucher = (url) => {
    Swal.fire({
        title: 'Chắc chắn xóa sản phẩm này?',
        text: "Sản phẩm này sẽ xóa vĩnh viễn",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Chấp nhận!'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(url);
        }
    })
  }
</script>
@endsection
