<x-app-layout>
    @php
        $countries = ['Egypt', 'China' , 'USA' , 'Japan' ,'Syra'];
    @endphp
     <div class="row">
            <!-- Start Checkout  -->
            <div class="col-6">
            <!-- Start Form Order -->
                @include('product.order_form')
            <!-- End Form Order -->
            </div>
            <!-- End Checkout -->
            <!-- Start Summary -->
            <div class="col-6">
                @include('product.summary_rows')
            </div>
            <!-- End Summary -->
     </div>
</x-app-layout>
