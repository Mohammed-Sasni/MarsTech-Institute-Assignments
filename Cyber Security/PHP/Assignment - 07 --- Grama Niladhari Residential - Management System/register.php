<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    :root {
        --primary: #6C5CE7;
        --primary-dark: #5649BE;
        --secondary: #00CEFF;
        --accent: #FF3E7F;
        --light: #F9F9FF;
        --dark: #2D3436;
        --gray: #636E72;
        --light-gray: #DFE6E9;
        --border-radius: 12px;
        --box-shadow: 0 10px 30px rgba(108, 92, 231, 0.15);
        --gradient: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.02); }
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    body {
        font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        background: var(--light);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: var(--dark);
        line-height: 1.6;
        background-image: 
            radial-gradient(circle at 10% 20%, rgba(108, 92, 231, 0.05) 0%, transparent 20%),
            radial-gradient(circle at 90% 80%, rgba(0, 206, 255, 0.05) 0%, transparent 20%);
    }

    .registration-container {
        background: white;
        width: 100%;
        max-width: 600px;
        padding: 2.5rem;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        margin: 2rem;
        position: relative;
        overflow: hidden;
        animation: fadeIn 0.6s ease-out;
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(5px);
    }

    .registration-container::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: var(--gradient);
        opacity: 0.05;
        z-index: -1;
        animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .form-header {
        text-align: center;
        margin-bottom: 2.5rem;
        position: relative;
    }

    .form-header::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: var(--gradient);
        margin: 1rem auto;
        border-radius: 2px;
    }

    .form-title {
        font-size: 2.2rem;
        margin-bottom: 0.5rem;
        background: var(--gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-weight: 800;
        letter-spacing: -0.5px;
    }

    .form-subtitle {
        color: var(--gray);
        font-size: 0.95rem;
        font-weight: 400;
        position: relative;
        display: inline-block;
    }

    .form-subtitle::after {
        content: '✧';
        display: inline-block;
        margin-left: 0.5rem;
        color: var(--accent);
        animation: float 3s ease-in-out infinite;
    }

    label {
        display: block;
        margin-top: 1.5rem;
        font-weight: 500;
        font-size: 0.9rem;
        color: var(--dark);
        position: relative;
        padding-left: 0.5rem;
    }

    label::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 3px;
        background: var(--primary);
        border-radius: 3px;
        transform: scaleY(0);
        transform-origin: bottom;
        transition: transform 0.3s ease;
    }

    label:hover::before {
        transform: scaleY(1);
    }

    input, select, textarea {
        width: 100%;
        padding: 1rem 1.2rem;
        border: 1px solid var(--light-gray);
        border-radius: var(--border-radius);
        font-size: 0.95rem;
        transition: all 0.3s ease;
        margin-top: 0.5rem;
        background-color: white;
        color: var(--dark);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.03);
    }

    input:focus,
    select:focus,
    textarea:focus {
        border-color: var(--primary);
        outline: none;
        box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.2);
        transform: translateY(-2px);
    }

    .error {
        color: var(--accent);
        font-size: 0.8rem;
        margin-top: 0.5rem;
        display: block;
        opacity: 0;
        transform: translateY(-10px);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        font-weight: 500;
        padding-left: 0.5rem;
    }

    .error.show {
        opacity: 1;
        transform: translateY(0);
    }

    button[type="submit"] {
        display: block;
        width: 100%;
        margin-top: 2.5rem;
        background: var(--gradient);
        color: white;
        border: none;
        padding: 1.1rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(108, 92, 231, 0.3);
        animation: pulse 2s infinite;
    }

    button[type="submit"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(108, 92, 231, 0.4);
        animation: none;
    }

    button[type="submit"]:active {
        transform: translateY(0);
    }

    button[type="submit"]::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
            to bottom right,
            rgba(255, 255, 255, 0.3) 0%,
            rgba(255, 255, 255, 0) 60%
        );
        transform: rotate(30deg);
        transition: all 0.3s ease;
    }

    button[type="submit"]:hover::after {
        left: 100%;
    }

    .success-message {
        padding: 1rem;
        background: rgba(0, 206, 255, 0.1);
        color: var(--secondary);
        border: 1px solid rgba(0, 206, 255, 0.3);
        border-radius: var(--border-radius);
        margin-top: 1.5rem;
        text-align: center;
        font-weight: 500;
        font-size: 0.9rem;
        animation: fadeIn 0.6s ease-out;
        backdrop-filter: blur(5px);
    }

    a.home-link {
        display: inline-block;
        margin-top: 1.5rem;
        color: var(--primary);
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        position: relative;
    }

    a.home-link:hover {
        color: var(--primary-dark);
    }

    a.home-link::before {
        content: '←';
        transition: transform 0.3s ease;
    }

    a.home-link:hover::before {
        transform: translateX(-5px);
    }

    select {
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%236C5CE7' stroke='%236C5CE7' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 1em;
    }

    @media (max-width: 640px) {
        .registration-container {
            padding: 1.8rem;
            margin: 1rem;
            border-radius: 8px;
        }
        
        .form-title {
            font-size: 1.8rem;
        }
        
        button[type="submit"] {
            margin-top: 2rem;
        }
    }
</style>
</head>
<body>

<div class="registration-container">
    <div class="form-header">
        <h1 class="form-title">Register Resident</h1>
        <p class="form-subtitle">Please provide accurate information for registration.</p>
    </div>

    <?php
    // PHP Validation & DB Insert Code Here (Same as in your file)
    $fullnameerr = $doberr = $nicerr = $addresserr = $phoneerr = $emailerr = $gendererr = "";
    $fullname = $dob = $nic = $address = $phone = $email = $gender = $occupation = "";

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include("config.php");

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Full name validation
        if (empty($_POST["fullname"])) {
            $fullnameerr = "Full Name is required";
        } else {
            $fullname = test_input($_POST["fullname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $fullname)) {
                $fullnameerr = "Only letters and white space allowed";
            }
        }

        // Date of birth
        if (empty($_POST["dob"])) {
            $doberr = "Date of birth is required";
        } else {
            $dob = test_input($_POST["dob"]);
        }

        // NIC validation
        if (empty($_POST["nic"])) {
            $nicerr = "NIC is required";
        } else {
            $nic = test_input($_POST["nic"]);
            if (!preg_match("/^([0-9]{9}[VXvx]|[0-9]{12})$/", $nic)) {
                $nicerr = "Invalid NIC. Format must be 9 digits + V/X or 12 digits";
            }
        }

        // Address
        if (empty($_POST["address"])) {
            $addresserr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
        }

        // Phone validation
        if (empty($_POST["phone"])) {
            $phoneerr = "Phone number is required";
        } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9]{10}$/", $phone)) {
                $phoneerr = "Invalid phone number. Only 10 digits allowed";
            }
        }

        // Email validation
        if (empty($_POST["email"])) {
            $emailerr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailerr = "Invalid email format";
            }
        }

        // Gender validation
        if (empty($_POST["gender"])) {
            $gendererr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        // Occupation (optional)
        if (!empty($_POST["occupation"])) {
            $occupation = test_input($_POST["occupation"]);
        }

        // Proceed only if all error variables are empty
        if (empty($fullnameerr) && empty($doberr) && empty($nicerr) && empty($addresserr) && empty($phoneerr) && empty($emailerr) && empty($gendererr)) {

            // Check for duplicate NIC
            $check_nic = mysqli_query($mysqli, "SELECT nic FROM residents WHERE nic = '$nic'");
            if (mysqli_num_rows($check_nic) > 0) {
                $nicerr = "NIC already exists in the system";
            } else {
                // Insert data
                $result = mysqli_query($mysqli, "INSERT INTO residents (full_name, dob, nic, address, phone, email, occupation, gender) 
                            VALUES ('$fullname', '$dob', '$nic', '$address', '$phone', '$email', '$occupation', '$gender')");

                if ($result) {
                    echo '<div style="padding: 10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; margin: 10px 0;">Data stored successfully</div>';
                    // Optionally reset form values
                    $fullname = $dob = $nic = $address = $phone = $email = $gender = $occupation = "";
                } else {
                    echo '<div style="color:red;">Data not stored: ' . mysqli_error($mysqli) . '</div>';
                }
            }
        }
    }
?>
   

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label>Full Name
            <input type="text" name="fullname" id="fullname" value="<?php echo $fullname; ?>">
        </label>
        <span class="error"><?php echo $fullnameerr;?></span>

        <label>Date Of Birth
            <input type="date" name="dob" id="dob" value="<?php echo $dob; ?>">
        </label>
        <span class="error"><?php echo $doberr;?></span>

        <label>NIC
            <input type="text" name="nic" id="nic" value="<?php echo $nic; ?>">
        </label>
        <span class="error"><?php echo $nicerr;?></span>

        <label>Address
            <input type="text" name="address" id="address" value="<?php echo $address; ?>">
        </label>
        <span class="error"><?php echo $addresserr;?></span>

        <label>Phone
            <input type="tel" name="phone" id="phone" value="<?php echo $phone; ?>">
        </label>
        <span class="error"><?php echo $phoneerr;?></span>

        <label>Email
            <input type="email" name="email" id="email" value="<?php echo $email; ?>">
        </label>
        <span class="error"><?php echo $emailerr;?></span>

        <label>Occupation
            <input type="text" name="occupation" id="occupation" value="<?php echo $occupation; ?>">
        </label>

        <label>Gender
            <select name="gender" id="gender">
                <option value="">Select gender</option>
                <option value="male" <?php if ($gender === "male") echo "selected"; ?>>Male</option>
                <option value="female" <?php if ($gender === "female") echo "selected"; ?>>Female</option>
                <option value="other" <?php if ($gender === "other") echo "selected"; ?>>Other</option>
            </select>
        </label>
        <span class="error"><?php echo $gendererr;?></span>

        <button type="submit" class="submit-btn">Register Resident</button>

        <?php if (!empty($success_msg)) echo "<div class='success-message'>$success_msg</div>"; ?>
    </form>

    <a href="index.php" class="home-link">← Go to Home</a>
</div>

</body>
</html>