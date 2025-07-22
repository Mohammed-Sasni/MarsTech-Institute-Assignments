<?php
include("config.php");

// Initialize variables
$fullname = $nic = $address = '';
$search_results = [];
$message = '';

if(isset($_POST['submit'])) {
    // Sanitize input data
    $fullname = mysqli_real_escape_string($mysqli, $_POST['fullname'] ?? '');
    $nic = mysqli_real_escape_string($mysqli, $_POST['nic'] ?? '');
    $address = mysqli_real_escape_string($mysqli, $_POST['address'] ?? '');

    // Build the SQL query with conditions for each search field
    $sql = "SELECT * FROM residents WHERE 1=1";
    
    if(!empty($fullname)) {
        $sql .= " AND full_name LIKE '%$fullname%'";
    }
    if(!empty($nic)) {
        $sql .= " AND nic LIKE '%$nic%'";
    }
    if(!empty($address)) {
        $sql .= " AND address LIKE '%$address%'";
    }

    // Execute the query
    $result = mysqli_query($mysqli, $sql);

    if($result && mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $search_results[] = $row;
        }
        $message = count($search_results) . " resident(s) found!";
    } else {
        $message = "No residents found matching your criteria!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Search Results</title>
    <style>
    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        margin: 0;
        padding: 40px 20px;
        color: #2c3e50;
    }
    
    .container {
        max-width: 1000px;
        margin: 0 auto;
        background: white;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }
    
    h1 {
        color: #2c3e50;
        border-bottom: 3px solid #3498db;
        padding-bottom: 15px;
        margin-bottom: 30px;
        font-weight: 600;
    }
    
    .message {
        padding: 18px;
        margin: 25px 0;
        border-radius: 10px;
        font-weight: 500;
        text-align: center;
    }
    
    .success {
        background-color: rgba(46, 204, 113, 0.15);
        color: #27ae60;
        border: 2px solid rgba(46, 204, 113, 0.3);
    }
    
    .error {
        background-color: rgba(231, 76, 60, 0.15);
        color: #e74c3c;
        border: 2px solid rgba(231, 76, 60, 0.3);
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 30px 0;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.05);
    }
    
    th, td {
        padding: 15px 20px;
        text-align: left;
        border-bottom: 1px solid #e0e0e0;
    }
    
    th {
        background-color: #3498db;
        color: white;
        font-weight: 600;
    }
    
    tr:nth-child(even) {
        background-color: #f8f9fa;
    }
    
    tr:hover {
        background-color: #e9f7fe;
    }
    
    .resident-details {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin: 30px 0;
    }
    
    .resident-details h2 {
        color: #3498db;
        margin-top: 0;
        border-bottom: 2px solid #f1f1f1;
        padding-bottom: 15px;
    }
    
    .resident-details p {
        margin: 15px 0;
        font-size: 1.05rem;
    }
    
    .resident-details strong {
        color: #2c3e50;
        font-weight: 600;
    }
    
    .buttons {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }
    
    .btn {
        padding: 12px 24px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .modify-btn {
        background-color: #3498db;
        color: white;
    }
    
    .delete-btn {
        background-color: #e74c3c;
        color: white;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .search-again {
        display: inline-block;
        margin-top: 20px;
        padding: 12px 24px;
        background: linear-gradient(135deg, #3498db, #2c3e50);
        color: white;
        text-decoration: none;
        border-radius: 8px;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    
    .search-again:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(52, 152, 219, 0.2);
    }
</style>
</head>
<body>

    <?php
    session_start();
    include("config.php");

    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $nic = $_POST['nic'];
        $address = $_POST['address'];

        $result = mysqli_query($mysqli, "SELECT * FROM residents WHERE full_name LIKE '%$fullname%' AND nic LIKE '%$nic%'AND address LIKE '%$address%'");
    
                if($result) {
                    if(mysqli_num_rows($result) > 0) {
                        $massage = "Resident Found!";
                        $row = mysqli_fetch_assoc($result);
                        // Process resident data here
                    } else {
                    $massage =  "Resident not found!";
                    }
                } else {
                    echo "Error in query: " . mysqli_error($mysqli);
                }
    }

    ?>
<div class="container">
    <h1><?php echo $massage; ?></h1>

        <div class="resident-details">
            <h2>Resident Details</h2>
            <p><strong>Full Name:</strong> <?php echo $row['full_name']; ?></p>
            <p><strong>Date of Birth:</strong> <?php echo $row['dob']; ?></p>
            <p><strong>NIC:</strong> <?php echo $row['nic']; ?></p>
            <p><strong>Address:</strong> <?php echo $row['address']; ?></p>
            <p><strong>Phone:</strong> <?php echo $row['phone']; ?></p>
            <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
            <p><strong>Occupation:</strong> <?php echo $row['occupation']; ?></p>
            <p><strong>Gender:</strong> <?php echo $row['gender']; ?></p>
            <p><strong>Registered Date:</strong> <?php echo $row['registered_date']; ?></p>
        </div>

        <div class="buttons">
            <?php
            $_SESSION['row_data'] = $row;
            ?>
            <a href="modify.php" class="btn modify-btn">Modify</a>
            <a href="delete.php" class="btn delete-btn">Delete</a>
        </div>
    

    <a href="search.php" class="search-again">Search Again</a>
</div>
</body>
</html>