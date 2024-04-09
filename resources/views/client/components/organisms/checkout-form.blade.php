<?php
    $voucherValue = session('voucherValue');
?>
<div class="container py-4">
    <form action="{{ route('clientCheckVoucher') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="voucher">Mã giảm giá</label>
            <div class="input-group">
                    <input type="text" name="voucher" id="voucher" class="form-control  @error('voucher') is-invalid @enderror bg-transparent" placeholder="Nhập mã giảm giá (nếu có)" value="{{ !is_null($voucherValue) ? $voucherValue : old('voucher') }}" >
                    <div class="input-group-append">
                      <button id="applyVoucherBtn" class="btn btn-outline-secondary" type="submit">Áp dụng</button>
                    </div>
              </div>
            @error('voucher')
              <small class="text-danger">{{ $message }}</small>
            @enderror
            @if(!is_null($voucherValue) && $voucherValue > 0)
            <small class="text-success">
                Mã giảm giá đã được áp dụng thành công!
            </small>
            @endif
        </div>
   </form>
    <form action="{{ route('clientCheckoutSave') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror bg-transparent" placeholder="Khan" value="{{ old('name') }}" required>
            @error('name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="text" name="phone" id="phone" class="form-control  @error('phone') is-invalid @enderror bg-transparent" placeholder="08122387xxxx" value="{{ old('phone') }}" required>
            @error('phone')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input type="text" name="address" id="address" class="form-control  @error('address') is-invalid @enderror bg-transparent" placeholder="3425 Lê Thị Riêng" value="{{ old('address') }}" required>
            @error('address')
              <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="note">Ghi chú</label>
            <textarea name="note" id="note" cols="30" class="form-control @error('note') is-invalid @enderror bg-transparent" placeholder="Nhập ghi chú cho đơn hàng  . . .">{{ old('note') }}</textarea>
            @error('note')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary float-end">Đặt hàng</button>
    </form>
</div>
@push('js')
    <script>
    autosize();
    function autosize(){
            var text = $('#note');

            text.each(function(){
                $(this).attr('rows',1);
                resize($(this));
                this.style.overflow = 'hidden';
                this.style.backgroundColor = 'transparent';
            });

            text.on('input', function(){
                resize($(this));
            });

            function resize ($text) {
                $text.css('height', 'auto');
                $text.css('height', $text[0].scrollHeight+'px');
            }
    }

    // document.addEventListener("DOMContentLoaded", function() {
    //     const voucherText = document.getElementById("text-voucher")
    //     document.getElementById('applyVoucher').addEventListener('click', function() {
    //         // Lấy giá trị mã voucher từ trường nhập
    //         var voucherCode = document.querySelector('#voucher').value;

    //         // Gửi yêu cầu kiểm tra và tính toán giá cuối cùng dựa trên mã voucher sử dụng Ajax
    //         $.ajax({
    //             type: 'POST',
    //             url: '/apply-voucher',
    //             data: {
    //                 voucher: voucherCode,
    //                 _token: '{{ csrf_token() }}'
    //             },
    //             success: function(response) {
    //                 // Kiểm tra xem có lỗi hay không
    //                 if (response.error) {
    //                     voucherText.innerText(response.error);
    //                 } else {
    //                     // Cập nhật giảm giá và giá cuối cùng của giỏ hàng
    //                    console.log(response.voucherValue);
    //                 }
    //             },
    //             error: function(xhr, status, error) {
    //                 console.error(error);
    //             }
    //         });
    //     });
    // });


    </script>


@endpush
