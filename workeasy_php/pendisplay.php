<?php
include("penconnection.php");

// Check if search query is present
if(isset($_GET['search']))
{
    $filtervalues = $_GET['search'];
    $query = "SELECT * FROM pennform WHERE CONCAT(name, contact ,address) LIKE '%$filtervalues%'";
}
else
{
    // If no search query, fetch all records
    $query = "SELECT * FROM pennform";
}

$query_run = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-image: url(home-outside-thailand-cornfield-rice.jpg);
  background-position: center;
  background-size: cover;
  overflow-x: hidden;
}

.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.card {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-top: 20px;
}

.card-header {
  background-color: #f2f2f2;
  padding: 10px;
  border-bottom: 1px solid #ddd;
  border-radius: 8px 8px 0 0;
}

.card-body {
  padding: 20px;
}

.input-group {
  margin-bottom: 20px;
  display: flex;
}

.form-control {
  flex: 1;
  padding: 12px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

.btn-primary {
  padding: 12px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-primary:hover {
  background-color: #0056b3;
}

table {
  width: 100%;
  border-collapse: collapse;
  background-color: #fff;
}

th, td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 12px;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
    </style>
    <title>SELECTION</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1> <center> ORDERS</center></h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group">
                                        <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>PRODUCTID</th>
                                    <th>CONTACT</th>
                                    <th>Address</th>
                                    <th>PINCODE</th>
                                    <th>PAYMENT</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                // Loop through fetched records
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $items)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $items['name']; ?></td>
											<td>00006</td>
                                            <td><?= $items['contact']; ?></td>
                                            <td><?= $items['address']; ?></td>
                                            <td><?= $items['pincode']; ?></td>
											<td><a href='http://localhost/crud/payment.php'>paynow</a></td>
                                           
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td colspan="9">No Record Found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
