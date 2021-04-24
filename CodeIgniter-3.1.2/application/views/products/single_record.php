<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Record</title>
    <link rel='stylesheet' type='text/css' href='/assets/css/rest.css'>
</head>
<body>

<div class='wrapper'>
    <h1><?= $single_record['id'];?></h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $single_record['id'];?></td>
                <td><?= $single_record['name'];?></td>
                <td><?= $single_record['description'];?></td>
                <td class='link'><?= $single_record['price'];?></td>
            </tr>
        </tbody>
    </table>

    <h3><a href="<?= base_url() . '/products/edit_prod/' . $single_record['id']; ?>">Edit</a></h3>
    <h3><a href="<?= base_url() . 'reset';?>">Back</a></h3>


</div>

</body>
</html>