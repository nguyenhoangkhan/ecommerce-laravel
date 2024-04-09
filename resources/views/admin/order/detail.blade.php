@extends('admin.layout')
@section('css')
  <style>
    .order-info > tbody > tr{
      height:35px !important;
    }
  </style>
@endsection
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 col-12">
          <table class="order-info">
            <tr>
              <td><b>Trạng thái</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td>
                <button type="button" data-bs-toggle="modal" data-bs-target="#modalUpdateStatus" style="background-color:transparent;border:none;">
                  @if($order->status == 0)
                    <span class="badge bg-warning" >Chưa xử lí</span>
                  @elseif($order->status == 1)
                    <span class="badge bg-info">Đã xác nhận</span>
                  @elseif($order->status == 2)
                    <span class="badge bg-primary">Đã xử lí</span>
                  @elseif($order->status == 3)
                    <span class="badge bg-danger">Chờ</span>
                  @elseif($order->status == 4)
                    <span class="badge bg-secondary">Đang giao hàng</span>
                  @elseif($order->status == 5)
                    <span class="badge bg-success">Completed</span>
                  @endif
                </button>
              </td>
            </tr>
            <tr>
              <td><b>Tổng</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td><b><u>${{ $order->total }}</u></b></td>
            </tr>
            <tr>
              <td><b>Tên</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td>{{ $order->name }}</td>
            </tr>
            <tr>
              <td><b>Số điện thoại</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td>{{ $order->phone }}</td>
            </tr>
            <tr>
              <td><b>Địa chỉ</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td>{{ $order->address }}</td>
            </tr>
            <tr>
              <td><b>Ghi chú</b></td>
              <td>&nbsp; : &nbsp;</td>
              <td>{{ $order->note }}</td>
            </tr>
          </table>
        </div>
        <div class="col-md-8 col-12 ">
          <h4>Chi tiết đơn hàng</h4>
          <div class="table-responsive">
            <table class="table table table-striped table-bordered">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Tiêu đề</td>
                  <td>Đơn giá</td>
                  <td>Số lượng</td>
                  <td>Tổng giá</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($orderDetail as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{!! str_replace('-', ' ', ucwords($item->title)) !!}</td>
                    <td>${{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${!! $item->price * $item->quantity !!}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <a href="javascript:void(0)" onclick="alertconfirm('{{route('orderDelete', $order->order_code)}}')" class="btn btn-danger float-end">Xóa đơn hàng</a>
    </div>
  </div>

  <!-- Modal Update Status -->
  <div class="modal fade" id="modalUpdateStatus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUpdateStatusLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalUpdateStatusLabel">Cập nhật trạng thái đơn hàng</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('orderUpdateStatus', $order->order_code) }}" method="post">
            @csrf
            <div class="input-group">
              <select class="form-select" id="inputGroupSelect01" name="status">
                <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Chưa xử lí</option>
                <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Đã xác nhận</option>
                <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Đã xử lí</option>
                <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Chờ</option>
                <option value="4" {{ $order->status == 4 ? 'selected' : '' }}>Đang giao hàng</option>
                <option value="5" {{ $order->status == 5 ? 'selected' : '' }}>Hoàn thành</option>
              </select>
              <button type="submit" class="input-group-text btn btn-primary" for="inputGroupSelect01">Lưu</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
  <script>
    const alertconfirm = (url) => {
    Swal.fire({
        title: 'Chắc chắn xóa đơn hàng này?',
        text: "Đơn hàng này sẽ bị xóa vĩnh viễn",
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
