<html>
    <head>

    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        margin: 0;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: #fff;
        text-align: center;
    }
    
    .success-message {
        background-color: rgba(46, 204, 113, 0.9);
        color: white;
        padding: 20px;
        border-radius: 8px;
        margin: 20px 0;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        max-width: 500px;
        width: 100%;
        animation: fadeIn 0.5s ease-out;
    }
    
    .error-message {
        background-color: rgba(231, 76, 60, 0.9);
        color: white;
        padding: 20px;
        border-radius: 8px;
        margin: 20px 0;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        max-width: 500px;
        width: 100%;
        animation: fadeIn 0.5s ease-out;
    }
    
    a {
        display: inline-block;
        margin-top: 30px;
        padding: 12px 24px;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    
    a:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

    </head>
</html>

<?php
include("config.php");

      session_start();
if (isset($_SESSION['row_data'])) {
    $row = $_SESSION['row_data']; // get the row data from session
}


$id=$row['id'];

$result = mysqli_query($mysqli, "DELETE FROM residents WHERE id=$id");

if ($result) {
    echo "<div class='success-message'>Resident deleted successfully!</div>";
}
else {
    echo "<div class='error-message'>Could not delete resident. Please try again.</div>";
}

?>
<a href="index.php" style="font-size: 28px">Go to Home</a>  
</body>
</html>