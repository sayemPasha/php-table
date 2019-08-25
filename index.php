<!DOCTYPE html>
<html>
<head>

    <h1 class="display-1">Read table from database </h1>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

</head>
<body>

<div class="container">
    <table class="table table-bordered" >
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Salary</th>
            <th scope="col">Age</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "mydb");
        $sql = "select * from employee";
        $query = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($query)):
        ?>
        <tr>
            <th scope="row"><?php echo $row["id"] ?></th>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["salary"] ?></td>
            <td><?php echo $row["age"] ?></td>
        </tr>
        <?php endwhile; ?>

        </tbody>
    </table>
</div>

</body>
</html>