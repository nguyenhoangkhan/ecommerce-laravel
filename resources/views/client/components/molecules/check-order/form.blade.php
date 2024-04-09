<div class="container py-3">
    <h3 class="mb-4 font-primary"><b><u>Kiểm tra đơn hàng</u></b></h3>
    <form action="{{ route('clientCheckOrderStatus') }}" method="post">
      @csrf
      <div class="input-group mb-3">
        <input type="text" name="order_code" class="form-control bg-transparent" placeholder="Nhập mã đơn hàng b5K-xxxxx" aria-label="Recipient's username" aria-describedby="button-addon2" required>
        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Kiểm tra</button>
      </div>
    </form>
    <hr/>
</div>
