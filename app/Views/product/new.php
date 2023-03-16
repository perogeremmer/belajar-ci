<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <form action="/product" method="post">
        <label for="name">Product Name</label>
        <br />
        <input type="text" id="name" placeholder="Input product name" name="name" />
        
        <br />
        <br />
        <label for="stock">Stock</label>
        <br />
        <input type="number" min="1" id="stock" placeholder="Input product stock" name="stock" />

        <br /> 
        <br />
        <label for="price">Price</label>
        <br />
        <input type="number" min="0" id="price" placeholder="Input product price" name="price" />

        <br />
        <br />
        <label for="category">Category</label>
        <br />
        <select name="category" id="category">
            <option value="utilities">Utilities</option>
            <option value="food_and_beverages">Food & Beverages</option>
            <option value="books">Books</option>
        </select>
        

        <br />
        <br />
        <button type="submit">Submit</button>
    </form>
<?= $this->endSection() ?>