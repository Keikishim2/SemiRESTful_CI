<!DOCTYPE html>
<hmtl lang='en'>
<head>
    <title>Product</title>
    <link rel='stylesheet' type='text/css' href='/assets/css/rest.css'>
</head>
<body>

<div class='wrapper'>
    <h1>Add a New Product</h1>
<?php

    $this->load->helper('form');
    $this->load->library('form_validation');
?>

    <div class='error'>
<?php

    echo validation_errors();
?>
    </div>

    <form action="<?= base_url() . 'products/new';?>" method='post' class='add_product'>
        <input type='hidden' name='add_product'/>
        <p>
            <label for='name'>Name</label><br>
            <input type='text' name='name' value='<?= set_value('name');?>'>
        </p>

        <p>
            <label for='description'>Description</label><br>
            <input type='text' name='description' value='<?= set_value('description');?>'>
        </p>

        <p>
            <label for='price'>Price</label><br>
            <input type='type' name='price' value='<? set_value('price');?>'>
        </p>

        <p>
            <input type='submit' value='Create'>
        </p>
    </form>
    <p><a href="<?= base_url() . 'reset' ?>">Reset Form</a></p>

</div>
</body>
</hmtl>