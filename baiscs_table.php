<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="tablestyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css"/>
        <script src ="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src ="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
        <script src ="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <body> 
        <form action="new_task98.php" method="post" name="form3" id="form3">  
            <div class="col-sm-12"> 
                <div class="card-body">
                    <button class="btn btn-info btn-sm pull-right" name="report" id="report"  style="float:left; margin-left:-19px;">Go Back</button>        
                </div>
            </div>
        </form>
        <br>
        <div class="card bg-light text-dark">
            <div class="card-body"> 
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th> id   </th>
                            <th> customer name </th>
                            <th> guardian type  </th>
                            <th> guardian name </th>
                            <th> marital status  </th>
                            <th> married    </th>
                            <th> mobile_no    </th>
                            <th> address     </th>
                            <th> state    </th>
                            <th> district  </th>
                            <th> city </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $servername = "localhost";                            
                        $username = "root";
                        $password = "";
                        $db = "demo";

                        $connectQuery = mysqli_connect($servername, $username, $password, $db);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                            else {
                            $selectquery = "SELECT * FROM total";
                            ?>
                            <?php
                            $i = 1;
                            $result = mysqli_query($connectQuery, $selectquery);
                            while ($row = $result->fetch_assoc()) {
                                ?>
                        
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo ucwords($row['customername']); ?></td>                          
                                    <td><?php echo ucwords($row['guardiantype']); ?></td>
                                    <td><?php echo ucwords($row['guardianname']); ?></td>
                                    <td><?php echo ucwords($row['maritalstatus']); ?></td>
                                    <td><?php echo ucwords($row['married']); ?></td>
                                    <td><?php echo $row['mobile_no']; ?></td>
                                    <td><?php echo ucwords($row['address']); ?></td>
                                    <td><?php echo ucwords($row['state']); ?></td>
                                    <td><?php echo ucwords($row['district']); ?></td>
                                    <td><?php echo ucwords($row['city']); ?></td> 
                                </tr>
                                <?php 
                            }
                        }
                        ?>
                                    
                            
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>


