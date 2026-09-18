<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>

<h1>Customer Accounts</h1>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customers</a> |
    <a href="/users">Users</a>
</nav>

<table border="1">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

<?php foreach ($customers as $customer): ?>
<tr>
    <td><?= $customer['full_name']; ?></td>
    <td><?= $customer['email']; ?></td>
    <td><?= $customer['phone']; ?></td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>