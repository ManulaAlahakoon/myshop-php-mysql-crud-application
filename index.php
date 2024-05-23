<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a href="/myshop/create.php" class="btn btn-primary" role="button">New client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>

                <?php
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "myshop";

                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error) {
                    die("Connection error" . connect_error);
                }

                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query");
                }


                while ($row = $result->fetch_assoc()) {

                    echo "

                <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[address]</td>
                            <td>$row[created_at]</td>
                           
                    <td>
                       <a href='/myshop/edit.php?id=$row[id]' class='btn btn-primary btn-sm'>Edit</a>
                        <a href='/myshop/delete.php?id=$row[id]' class='btn btn-primary btn-sm'>Delete</a>
                    </td>

                </tr>
                    
                        ";
                }

                ?>
                <tr>
                    <td>10</td>
                    <td>Richard</td>
                    <td>rich@gmail.com</td>
                    <td>0702838422</td>
                    <td>London</td>
                    <td>21/05/2024</td>
                    <td>
                        <a href="/myshop/edit.php" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/myshop/delete.php" class="btn btn-primary btn-sm">Delete</a>

                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>