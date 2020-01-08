<form action="{{route('product.store')}}" method="post">
        @csrf
    <input type="text" name='productName'>
    <input type="number" name='productLineId'>
    <input type="text" name='productScale'>
    <input type="text" name='productVendor'>
    <input type="text" name='productDescription'>
    <input type="smallint" name='quantityInStock'>
    <input type="decimal" name='buyPrice'>
    <input type="number" name='MSRP'>
    <button>add</button>
</form>