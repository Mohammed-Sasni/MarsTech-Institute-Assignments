<html>
    <head>
        <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #4546E5, #6A11CB);
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        text-align: center;
    }
    
    h1, h2 {
        color: white;
        font-weight: 600;
        margin: 20px 0;
    }
    
    .success-message {
        background-color: rgba(46, 204, 113, 0.9);
        color: white;
        padding: 20px 30px;
        border-radius: 8px;
        margin: 20px 0;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        animation: fadeIn 0.5s ease-out;
        max-width: 500px;
        width: 90%;
    }
    
    .error-message {
        background-color: rgba(231, 76, 60, 0.9);
        color: white;
        padding: 20px 30px;
        border-radius: 8px;
        margin: 20px 0;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        animation: fadeIn 0.5s ease-out;
        max-width: 500px;
        width: 90%;
    }
    
    a {
        display: inline-block;
        margin-top: 30px;
        padding: 14px 28px;
        background-color: white;
        color: #4546E5;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    a:hover {
        background-color: #f8f9fa;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .success-message::before {
        content: "✓";
        margin-right: 10px;
        font-weight: bold;
    }
    
    .error-message::before {
        content: "✗";
        margin-right: 10px;
        font-weight: bold;
    }
</style>
    </head>
<body>

<div class="container">
    <h1>Update Resident</h1>

    <?php
    include("config.php");
    if (isset($_POST['submit'])){

        session_start();
        if (isset($_SESSION['row_data'])) {
        $row = $_SESSION['row_data']; // get the row data from session
    }
        $id = $row['id'];

    

        $fullname = $_POST['fullname'];
        $dob = $_POST['dob'];
        $nic = $_POST['nic'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $occupation = $_POST['occupation'];
        $gender = $_POST['gender'];



        $result = mysqli_query($mysqli, "UPDATE residents SET full_name='$fullname', dob='$dob', nic='$nic', address='$address', phone='$phone', email='$email', occupation='$occupation', gender='$gender' WHERE id=$id");

        if ($result) {
            echo "<div class='success-message'>✅ Resident Details Updated Successfully!</div>";
        } else {
            echo "<div class='error-message'>❌ Could not update resident details. Please try again.</div>";
        }
    }
 ?>



    <a href="search.php" class="home-link">← Search Again</a>
    <a href="index.php" class="home-link">← Go to Home</a>

</div>

</body>
</html>