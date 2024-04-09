<x-template.layout title="{{ $title }}" >
  <x-organisms.navbar :path="$shop->path"/>
    <div class="container py-y d-flex flex-column align-items-center gap-3">
      <img src="{{ asset('client/img/success-order.png') }}" class="border rounded rounded-3" style="width:40%;height:auto;">
      <div class="text-center">
        <h4>Cảm ơn bạn đã đặt hàng!</h4>
        <p>Mã đơn hàng : <u><b class="text-danger">{{ $order_code }}</b></u></p>
        <p>Bạn có thể theo dõi quá trình của đơn hàng tại <a href="{{ route('clientCheckOrder') }}"><u>Kiểm tra đơn hàng</u></a>, vui lòng giữ và đừng quên mã đơn hàng để thuận tiện trong việc kiểm tra.</p>
      </div>
      <a href="{{ route('clientCheckOrder') }}" class="btn btn-primary">Kiểm tra đơn hàng ngay</a>
    </div>
  <x-organisms.footer :shop="$shop"/>
</x-template.layout>
