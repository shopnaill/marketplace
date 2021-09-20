<div class="side-card">
    @include('product.summary')
    <div class="footer-summary">
     <hr>
     <div class="grid-container grid-2">
     <x-form-input name="promo" label="Promo" />
     <x-form-submit>APPLY</x-form-submit>
     </div>
     <hr>
     <div class="grid-container grid-2">
     <h4>TOTAL COST : </h4>
     <h4>$2800</h4>
     </div>
     <x-form-submit>Place Order</x-form-submit>
   </div>
</div>