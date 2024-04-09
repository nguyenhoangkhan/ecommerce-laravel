@extends('admin.layout')
@section('css')
  <link rel="stylesheet" href="{{ asset('assets/vendors/select-live/dselect.scss') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/dropzone/dropzone.min.css') }}">
  <style>
  .voucher-image-item{
    display: inline-block;
    height: 100px;
    width: 100px;
    text-align: center;
    position: relative;
    overflow: hidden;
    border-radius:8px;
  }

  .voucher-image-item img{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }

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
      <div class="col-md-6 col-12">
        <form action="{{ route('voucherEditSave', ['voucher' => $voucher->name, 'id' => $voucher->id]) }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" placeholder="Chicken nugget spicy" value="{{ old('name') ? old('name') : $voucher->name }}" required>
            @error('name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="code">Mã</label>
            <input type="text" code="code" id="code" name="code" class="form-control  @error('code') is-invalid @enderror" placeholder="Chicken nugget spicy" value="{{ old('code') ? old('code') : $voucher->code }}" required>
            @error('code')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="value">Giá trị (đơn vị: %)</label>
            <input type="number" name="value" id="value" class="form-control  @error('value') is-invalid @enderror" placeholder="1000" value="{{ $voucher->value }}" >
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
<script src="{{ asset('assets/vendors/dropzone/dropzone.js') }}"></script>
<script>

autosize();
function autosize(){
    var text = $('.autosize');

    text.each(function(){
        $(this).attr('rows',1);
        resize($(this));
        this.style.overflow = 'hidden';
    });

    text.on('input', function(){
        resize($(this));
    });

    function resize ($text) {
        $text.css('height', 'auto');
        $text.css('height', $text[0].scrollHeight+'px');
    }
}





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
