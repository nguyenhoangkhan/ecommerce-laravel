<x-template.layout title="{{$title}}">
    <x-organisms.navbar cartCount=10 :path="$shop->path"/>
        <div class="container mt-3">
            <h2>Giỏ hàng</h2>
            <hr/>
        </div>
    <x-organisms.carts />
    <x-organisms.footer :shop="$shop"/>
</x-template.layout>
