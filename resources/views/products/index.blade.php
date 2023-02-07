<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <label for="name">Product name:</label>
    <input type="text" id="name" name="name">
    <br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01">
    <br>
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity">
    <br>
    <label for="description">Description:</label>
    <input type="text" id="description" name="description">
    <br>
    <p>Category:</p>
    <input type="checkbox" id="category1" name="categories[]" value="1">
    <label for="category1">Home</label>
    <br>
    <input type="checkbox" id="category2" name="categories[]" value="2">
    <label for="category2">Garden</label>
    <br>
    <input type="checkbox" id="category3" name="categories[]" value="3">
    <label for="category3">Food</label>
    <br>
    <input type="checkbox" id="category4" name="categories[]" value="4">
    <label for="category4">Books</label>
    <br>
    <input type="checkbox" id="category5" name="categories[]" value="5">
    <label for="category5">Pets</label>
    <br>
    <input type="submit" value="Submit">
</form>