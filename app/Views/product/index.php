<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <table>
        <thead>
            <tr>
                <td>No.</td>
                <td>Name</td>
                <td>Stock</td>
                <td>Price</td>
                <td>Category</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
        <a href="/product/new">Add new product</a>
        <br />
        <br />
        <?php $no = 0; ?>
        <?php foreach ($products as $item): ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['stock'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['category'] ?></td>
                <td>
                    <a href="/product/<?= $item['id'] ?>/edit">Edit</a>
                    <form action="/product/<?= $item['id'] ?>" method="post" onsubmit="return confirm(`Are you sure?`)">
                        <input type="hidden" name="_method" value="delete" />
                        <button type="submit">Delete</button>
                    </form>   
                </td>
            </tr>

        <?php endforeach ?>
        </tbody>
    </table>
<?= $this->endSection() ?>