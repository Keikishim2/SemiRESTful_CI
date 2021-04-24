<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Edit Products</title>
    <link rel='stylesheet' type='text/css' href='/assets/css/rest.css'>
</head>
<body>

    <div class='wrapper'>
        <h1>Edit Product <?= $single_record['id'];?></h1>

        <div class='success'>
            <?= $this->session->userdata('update_success');?>
            <?= $this->session->unset_userdata('update_success');?>
        </div>

        <form action="<?= base_url() . 'products/update/' . $single_record['id']; ?>" method='post' id='update_form'>
            <input type='hidden' name='update'>
            <p>
                <label for='name'>Name:</label><br>
                <input type='text' name='name' value="<?= $single_record['name'];?>">
            </p>

            <p>
                <label for='description'>Description</label><br>
                <input type='text' name='description' value="<?= $single_record['description']; ?>">
            </p>

            <p>
                <label for='price'>Price</label><br>
                <input type='text' name='price' value="<?= $single_record['price']; ?>">
            </p>

            <p>
                <input type='submit' value='Update'>
            </p>
        </form>

        <h3><a href="<?= base_url() . 'products/show/' . $single_record['id'];?>">Show</a></h3>
        <h3><a href="<?= base_url() . 'reset'; ?>">Go Home</a></h3>
</div>

</body>
</html>