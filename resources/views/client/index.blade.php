<x-template.layout title="{{ $title }}" >
  <x-organisms.navbar :path="$shop->path"/>
  <x-organisms.hero :dataProduct="$product"/>
  <x-organisms.choosen-us />
  <x-organisms.discounts />
  <x-organisms.products :dataProduct="$product">
    <h1 class="text-center pb-5">Sản phẩm phổ biến</h1>
    <x-slot:productCTA>
      <div class="pt-5">
        <x-molecules.button text="Xem thêm" align="center" icon="bi-arrow-right" arrow="true" link="{{ route('clientProducts') }}"  />
      </div>
    </x-slot:productCTA>
  </x-organisms.products>
  <x-organisms.category :dataCategory="$category">
    <x-molecules.button text="Xem thêm" arrow="true" icon="bi-arrow-right" align="center" link="{{ route('clientCategory') }}"/>
  </x-organisms.category>
  <x-organisms.join-community />
  <x-organisms.footer :shop="$shop"/>
</x-template.layout>
