<!DOCTYPE html>
<html>
<head>
    <title>Customer Recordss</title>
</head>
<body>

<h1>Customer Record</h1>

<form method="POST" action="/customer/save">
    @csrf

    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    @error('name')
    <div>{{ $message }}</div>
    @enderror
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    @error('email')
    <div>{{ $message }}</div>
    @enderror
    <br>

    <label for="phone">Phone:</label>
    <input type="phone" id="phone" name="phone">
    @error('phone')
    <div>{{ $message }}</div>
    @enderror
    <br>

    <button type="submit">Submit</button>
</form>

</body>
</html>

