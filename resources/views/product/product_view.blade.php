<x-app-layout>
    <!-- Start Product Info -->
    <h2>Product Info</h2>
    <div class="product-info">
        <x-product-info id="1" info="Following this release, we’ll be shipping another bugfix and docs update before moving onto additional new features" class="product-info" title="IPhone 13" photo="{{asset('images/iphone.jpg')}}" price="$1500" />
    </div>
    <!-- End Products Info -->
    <!-- Start Products List -->
    <h2>Products Related</h2>
    <div class="products grid-container">
        <x-product-card id="1" class="product-cart" title="IPhone 13" photo="{{asset('images/iphone.jpg')}}" price="$1500"/> 
        <x-product-card id="2" class="product-cart" title="Galaxy Fold 3" photo="{{asset('images/fold.webp')}}" price="$1500"/> 
        <x-product-card id="3" class="product-cart" title="Galaxy Watch 4" photo="{{asset('images/watch4.webp')}}" price="$1500"/> 
    </div>
    <!-- End Products List -->
</x-app-layout>