<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grama Niladhari Residential Management</title>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        color: #fff;
    }
    
    .container {
        text-align: center;
        background: rgba(0, 0, 0, 0.7);
        padding: 50px;
        border-radius: 16px;
        width: 350px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .container::before {
        content: "";
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, #ff0, #f0f, #0ff, #0f0, #00f);
        z-index: -1;
        animation: borderGlow 8s linear infinite;
        background-size: 400%;
        filter: blur(5px);
        opacity: 0.7;
    }
    
    @keyframes borderGlow {
        0% { background-position: 0 0; }
        50% { background-position: 400% 0; }
        100% { background-position: 0 0; }
    }
    
    h1 {
        color: #fff;
        margin: 20px 0 10px;
        font-size: 26px;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-weight: 500;
    }
    
    h2 {
        color: rgba(255, 255, 255, 0.7);
        margin: 0 0 30px;
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 2px;
    }
    
    .button {
        display: block;
        color: #000;
        text-decoration: none;
        padding: 14px;
        margin: 18px auto;
        border-radius: 8px;
        width: 80%;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        overflow: hidden;
        border: none;
        background-color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 14px;
    }
    
    .button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    
    .button::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
        transition: 0.6s;
    }
    
    .button:hover::before {
        left: 100%;
    }
    
    .register-btn {
        background-color: #00e676;
    }
    
    .search-btn {
        background-color: #ff4081;
    }
    
    .logo {
        width: 90px;
        height: 90px;
        margin: 0 auto 25px;
        background-color: transparent;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 36px;
        font-weight: bold;
        border: 2px solid rgba(255, 255, 255, 0.3);
        /* transform: rotate(45deg); */
        position: relative;
    }
    
    .logo::before {
        /*content: "GN";*/
       /* transform: rotate(-45deg); */
    }
</style>
</head>
<body>
    <div class="container">
        <div class="logo">GN</div>
        <h1>Grama Niladhari Residential</h1>
        <h2>Management System</h2>
        <a href="register.php" class="button register-btn">Register</a>
        <a href="search.php" class="button search-btn">Search</a>
    </div>
</body>
</html>