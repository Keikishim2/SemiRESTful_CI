<!DOCTYPE html>
<html lang='en'>
<head>
    <title>All Products</title>
    <link rel='stylesheet' type='text/css' href='/assets/css/rest.css'>
</head>
<body>

<div class='wrapper'>
    <h1>Products</h1>

    <div class='success'>
        <?= $this->session->userdata('message');?>
        <?= $this->session->unset_userdata('message');?>
        <?= $this->session->userdata('delete_message');?>
        <?= $this->session->unset_userdata('message');?>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th colspan='3'>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach(array_reverse($products) as $row){
                ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td class='price'><?php echo $row['price'];?></td>
                    <td class='link'><a href="<?php echo base_url() . '/products/edit' . $row['id'];?>">Show</a></td>
                    <td class='remove'>
                        <form action="<?php echo base_url() . 'products/remove/' . $row['id'];?>" method='post'>
                            <input type='hidden' name='remove' value="<?php echo $row['id'];?>">
                            <input type='submit' value='Remove'>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h3><a href="<?= base_url() . '/products/new';?>">Add a New Product</a></h3>
    <p><a href="<?= base_url() . 'reset';?>">Reset</a></p>


</div>

</body>
</html>