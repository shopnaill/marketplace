<x-app-layout>
    <!-- Start Products List -->
<div class="products grid-container">
    <x-product-card id="1" class="product-cart" title="IPhone 13" photo="{{asset('images/iphone.jpg')}}" promo="$1250" price="$1500"/> 
    <x-product-card id="2" class="product-cart" title="Galaxy Fold 3" photo="{{asset('images/fold.webp')}}" price="$1500"/> 
    <x-product-card id="3" class="product-cart" title="Galaxy Watch 4" photo="{{asset('images/watch4.webp')}}" price="$1500"/> 
</div>
    <!-- End Products List -->
</x-app-layout>