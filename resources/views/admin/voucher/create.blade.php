@extends('admin.layout')
@section('css')
  <link rel="stylesheet" href="{{ asset('assets/vendors/select-live/dselect.scss') }}">
  <style>
    .form-select{
      text-align:left !important;
    }
    .dropdown-menu{
      border: 1px solid #dce7f1;
    }
</style>
@endsection
@section('content')
  <div class="card">
    <div class="card-body row">
      <div class="col-md-8 col-12">
        <form action="{{ route('voucherSave') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" placeholder="Tên mã giảm giá" value="{{ old('name') }}" required>
            @error('name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="code">Mã</label>
            <input type="text" name="code" id="code" class="form-control  @error('code') is-invalid @enderror" placeholder="Mã giảm giá" value="{{ old('code') }}" required>
            @error('code')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="value">Giá trị (đơn vị: %)</label>
            <input type="number" name="value" id="value" class="form-control  @error('value') is-invalid @enderror" placeholder="10" value="{{ old('value') }}" required>
            @error('value')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary float-end">Lưu</button>
        </form>
      </div>
    </div>
  </div>
@endsection
@section('js')
<script src="{{ asset('assets/vendors/select-live/dselect.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
<script>
  var select_box_element = document.querySelector('#category')
  dselect(select_box_element, {
      search: true
  });




</script>
@endsection
