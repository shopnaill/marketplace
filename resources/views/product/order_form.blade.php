<h2>Checkout</h2>
<div class="product-info">
<!-- Start Form -->
<x-form class="max-w-lg">
    <!--  Form Group -->
    <div class="group">
        <h3 class="text-xl mb-3">Contact information</h3>
        <x-form-input name="phone" label="Phone Number" />
        <x-form-input type='email' name="phone" label="Email Address" />
        <x-form-checkbox name="news" checked="true" label="Keep me up to date on news and offers." />
    </div>
   <!--  Form Group -->
    <div class="group">
        <h3 class="text-xl mb-3 mt-3">Shipping address</h3>
        <div class="grid-container grid-2">
            <x-form-input name="first_name" label="First Name" />
            <x-form-input name="last_name" label="Last Name" />
        </div>
        <x-form-input name="address" label="Address" />
        <div class="grid-container">
            <x-form-select name="language" :options="$countries" label="Country" />
            <x-form-input name="city" label="City" />
            <x-form-input name="postal_code" label="Postal Code" />
        </div>
        <x-form-checkbox name="save" checked="false" label="Save this information for next time." />
    </div>
</x-form>
<!-- End Form -->
</div>