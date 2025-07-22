<?php
session_start();
if (isset($_SESSION['row_data'])) {
    $row = $_SESSION['row_data']; // get the row data from session
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>
<style>
    :root {
        --primary: #7B2CBF;
        --primary-dark: #5A189A;
        --secondary: #FF9E00;
        --accent: #FF006E;
        --light: #F8F9FF;
        --dark: #212529;
        --gray: #6C757D;
        --light-gray: #E9ECEF;
        --border-radius: 16px;
        --box-shadow: 0 15px 35px rgba(123, 44, 191, 0.2);
        --gradient: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes pulse {
        0%, 100% { box-shadow: 0 0 0 0 rgba(123, 44, 191, 0.4); }
        50% { box-shadow: 0 0 0 15px rgba(123, 44, 191, 0); }
    }

    body {
        font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        background-color: var(--light);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: var(--dark);
        line-height: 1.6;
        background-image: 
            radial-gradient(circle at 20% 30%, rgba(123, 44, 191, 0.05) 0%, transparent 25%),
            radial-gradient(circle at 80% 70%, rgba(255, 158, 0, 0.05) 0%, transparent 25%);
    }

    .registration-container {
        background: rgba(255, 255, 255, 0.95);
        width: 100%;
        max-width: 600px;
        padding: 2.5rem;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        margin: 2rem;
        position: relative;
        overflow: hidden;
        animation: fadeIn 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .registration-container::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: var(--gradient);
        opacity: 0.03;
        z-index: -1;
        animation: rotate 25s linear infinite;
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    h1 {
        text-align: center;
        font-size: 1.8rem;
        margin-bottom: 0.5rem;
        background: var(--gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-weight: 800;
        letter-spacing: -0.5px;
    }

    h3 {
        text-align: center;
        margin-bottom: 2rem;
        font-size: 1.5rem;
        color: var(--primary);
        position: relative;
        display: inline-block;
        width: 100%;
    }

    h3::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: var(--gradient);
        margin: 0.8rem auto;
        border-radius: 4px;
    }

    label {
        display: block;
        margin-top: 1.5rem;
        font-weight: 600;
        font-size: 0.9rem;
        color: var(--dark);
        position: relative;
        padding-left: 0.8rem;
    }

    label::before {
        content: '→';
        position: absolute;
        left: -5px;
        top: 0;
        color: var(--accent);
        font-weight: bold;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
    }

    label:hover::before {
        opacity: 1;
        transform: translateX(0);
    }

    input,
    select {
        width: 100%;
        padding: 1.1rem 1.3rem;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: var(--border-radius);
        font-size: 0.95rem;
        transition: all 0.3s ease;
        margin-top: 0.6rem;
        background-color: rgba(255, 255, 255, 0.8);
        color: var(--dark);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.03);
    }

    input:focus,
    select:focus {
        border-color: var(--primary);
        outline: none;
        box-shadow: 0 0 0 3px rgba(123, 44, 191, 0.2);
        transform: translateY(-2px);
        background-color: white;
    }

    .submit-btn {
        display: block;
        width: 100%;
        margin-top: 2.5rem;
        background: var(--gradient);
        color: white;
        border: none;
        padding: 1.2rem;
        font-size: 1rem;
        font-weight: 700;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(123, 44, 191, 0.3);
        text-transform: uppercase;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(123, 44, 191, 0.4);
    }

    .submit-btn:active {
        transform: translateY(0);
    }

    .submit-btn::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
            to bottom right,
            rgba(255, 255, 255, 0.4) 0%,
            rgba(255, 255, 255, 0) 60%
        );
        transform: rotate(30deg);
        transition: all 0.5s ease;
    }

    .submit-btn:hover::after {
        left: 100%;
    }

    .home-link {
        display: block;
        margin-top: 1.5rem;
        padding: 1rem;
        background: rgba(123, 44, 191, 0.1);
        color: var(--primary);
        text-decoration: none;
        font-weight: 600;
        border-radius: var(--border-radius);
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid rgba(123, 44, 191, 0.2);
        position: relative;
        overflow: hidden;
    }

    .home-link:hover {
        background: rgba(123, 44, 191, 0.15);
        color: var(--primary-dark);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(123, 44, 191, 0.1);
    }

    .home-link:active {
        transform: translateY(0);
    }

    .home-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.4),
            transparent
        );
        transition: all 0.5s ease;
    }

    .home-link:hover::before {
        left: 100%;
    }

    select {
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%237B2CBF' stroke='%237B2CBF' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 1.2rem center;
        background-size: 1em;
    }

    @media (max-width: 640px) {
        .registration-container {
            padding: 2rem 1.5rem;
            margin: 1rem;
            border-radius: 12px;
        }
        
        h1 {
            font-size: 1.5rem;
        }
        
        h3 {
            font-size: 1.3rem;
        }
        
        input,
        select {
            padding: 1rem 1.2rem;
        }
    }
</style>
</head>
<body>
    <div class="registration-container">
        <h1 style="text-align:center;">Grama Niladhari Residents Management System</h1>
        <form method="POST" action="modify_process.php">
            <h3>Modify Details</h3>

            <label>Full Name
                <input type="text" name="fullname" id="fullname" value="<?php echo ($row['full_name']); ?>">
            </label>

            <label>Date Of Birth
                <input type="date" name="dob" id="dob" value="<?php echo ($row['dob']); ?>">
            </label>

            <label>NIC
                <input type="text" name="nic" id="nic" value="<?php echo ($row['nic']); ?>">
            </label>

            <label>Address
                <input type="text" name="address" id="address" value="<?php echo ($row['address']); ?>">
            </label>

            <label>Phone
                <input type="tel" name="phone" id="phone" value="<?php echo ($row['phone']) ; ?>">
            </label>

            <label>Email
                <input type="email" name="email" id="email" value="<?php echo($row['email']) ; ?>">
            </label>

            <label>Occupation
                <input type="text" name="occupation" id="occupation" value="<?php echo ($row['occupation']); ?>">
            </label>

            <label>Gender
                <select name="gender" id="gender">
                    <option value="">Select gender</option>
                    <option value="male" <?php if (isset($row['gender']) && $row['gender'] == 'male') echo 'selected'; ?>>Male</option>
                    <option value="female" <?php if (isset($row['gender']) && $row['gender'] == 'female') echo 'selected'; ?>>Female</option>
                    <option value="other" <?php if (isset($row['gender']) && $row['gender'] == 'other') echo 'selected'; ?>>Other</option>
                </select>
            </label>

            <button type="submit" name="submit" class="submit-btn">Modify</button>

            <a href="index.php" class="home-link">Go to Home</a>
        </form>
    </div>
</body>
</html>
