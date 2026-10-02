<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>

<h1>Customer List</h1>

<p>
    /customers/newAdd Customer</a>
</p>

<hr>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
    </tr>

    <?php foreach ($customers as $customer): ?>
    <tr>
        <td><?= $customer['id']; ?></td>
        <td><?= $customer['full_name']; ?></td>
        <td><?= $customer['email']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>