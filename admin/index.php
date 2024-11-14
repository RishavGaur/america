<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="../static/img/logos/wbg-faviconn.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: aliceblue;
    }

    .nav {
        background-color: lightgrey;
        height: 8vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav img {
        object-fit: contain;
        width: 30%;
    }

    table {
        border: 1px solid black;
        border-collapse: collapse;
        width: 100%;
        overflow: hidden;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #D6EEEE;
    }

    tr:hover:not(.table-head) {
        background-color: lightblue;
    }
    @media screen and (max-width: 772px){
        .nav img {
            object-fit: contain;
            width: 52%;
        }
    }
</style>

<body>
    <div class="nav">
        <img src="../static/img/logos/america.svg" alt="Bank of America">
    </div>
    <div class="container-fluid py-5">
        <nav class="navbar mb-3">
            <div class="container-fluid justify-content-center">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="row mb-5">
            <div class="col-md-12" style="overflow-x:auto;">
                <table>
                    <tr class="table-head">
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>Email ID</th>
                        <th>Zip Code</th>
                        <th>Bank Name</th>
                        <th>Account Number</th>
                        <th>Created</th>
                    </tr>
                    <?php
                        include "../sql/connection.php";
                        $sql= "SELECT * FROM `users`";
                        $result= mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)>0){
                            while($row= mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['full_name']; ?></td>
                        <td><?php echo $row['phone_num']; ?></td>
                        <td><?php echo $row['email_id']; ?></td>
                        <td><?php echo $row['zip_code']; ?></td>
                        <td><?php echo $row['bank_name']; ?></td>
                        <td><?php echo $row['account_num']; ?></td>
                        <td><?php echo $row['created']; ?></td>
                    </tr>
                    <?php  
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>