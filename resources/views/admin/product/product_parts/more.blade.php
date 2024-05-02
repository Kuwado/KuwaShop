<div class="product-add">
    <div class="product-color">
        @include('admin.product.product_parts.color')
        <input type="hidden" name="product-color" id="product-color">
        <input type="hidden" name="product-color-code" id="product-color-code">
    </div>

    <div class="pi product-size">
        @include('admin.product.product_parts.size')
    </div>
</div>