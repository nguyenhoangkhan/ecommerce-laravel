@extends('admin.layout')
@section('content')
<div class="row">
  <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body px-3 py-4-5">
              <div class="row">
                  <div class="col-md-4">
                      <div class="stats-icon purple">
                          <i class="iconly-boldWallet"></i>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Đã bán</h6>
                      <h6 class="font-extrabold mb-0">$
                        {{ $sales }}
                      </h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body px-3 py-4-5">
              <div class="row">
                  <div class="col-md-4">
                      <div class="stats-icon blue">
                          <i class="iconly-boldBuy"></i>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Hoàn thành</h6>
                      <h6 class="font-extrabold mb-0">{{ $order }}</h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body px-3 py-4-5">
              <div class="row">
                  <div class="col-md-4">
                      <div class="stats-icon green">
                          <i class="iconly-boldBag-2"></i>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Tổng sản phẩm</h6>
                      <h6 class="font-extrabold mb-0">{{ $product }}</h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-6 col-lg-3 col-md-6">
    <a href="">
      <div class="card">
          <div class="card-body px-3 py-4-5">
              <div class="row">
                  <div class="col-md-4">
                      <div class="stats-icon red">
                          <i class="iconly-boldCategory"></i>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <h6 class="text-muted font-semibold">Tổng danh mục</h6>
                      <h6 class="font-extrabold mb-0">{{ $category }}</h6>
                  </div>
              </div>
          </div>
      </div>
    </a>
  </div>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mã đơn hàng</th>
                    <th>Người đặt</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th width="20%">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newOrder as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->order_code }}</td>
                    <td>{{ $row->name }}</td>
                    <td>${{ $row->total }}</td>
                    <td>
                      @if($row->status == 0)
                        <span class="badge bg-warning">Chưa xử lý</span>
                      @elseif($row->status == 1)
                        <span class="badge bg-info">Đã xác nhận</span>
                      @elseif($row->status == 2)
                        <span class="badge bg-primary">Đã xử lí</span>
                      @elseif($row->status == 3)
                        <span class="badge bg-danger">Chờ</span>
                      @elseif($row->status == 4)
                        <span class="badge bg-secondary">Đang giao</span>
                      @elseif($row->status == 5)
                        <span class="badge bg-success">Hoàn thành</span>
                      @endif
                    </td>
                    <td>
                        <a href="{{ route('orderDetail', $row->order_code) }}"><span class="btn btn-sm btn-outline-primary">Chi tiết</span></a>
                    </td>
                </tr>
                @endforeach
                <tbody>
        </table>
    </div>
</div>
@endsection
