<form method="POST" action="/customer/address/save">
    @csrf

    <label for="address">Address:</label>
    <input type="text" id="address" name="address">
    @error('address')
    <div>{{ $message }}</div>
    @enderror
    <br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city">
    @error('city')
    <div>{{ $message }}</div>
    @enderror
    <br>

    <label for="state">State:</label>
    <input type="text" id="state" name="state">
    @error('state')
    <div>{{ $message }}</div>
    @enderror
    <br>

    <label for="country">Country:</label>
    <input type="text" id="country" name="country">
    @error('country')
    <div>{{ $message }}</div>
    @enderror
    <br>

    <input type="hidden" id="customer_id" name="customer_id" value="{{ $customerId }}">

    <button type="submit">Submit</button>
</form>
