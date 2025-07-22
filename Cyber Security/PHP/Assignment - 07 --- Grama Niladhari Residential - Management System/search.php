<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Residents</title>
    <style>
    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        margin: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    
    .container {
        background: white;
        width: 100%;
        max-width: 600px;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }
    
    h1 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 30px;
        font-weight: 600;
        font-size: 2rem;
    }
    
    .search-container {
        width: 100%;
    }
    
    .search-box {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    input[type="text"] {
        padding: 14px 18px;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        font-size: 1rem;
        width: 100%;
        box-sizing: border-box;
        transition: all 0.3s ease;
        font-family: 'Inter', sans-serif;
    }
    
    input[type="text"]:focus {
        border-color: #3498db;
        outline: none;
        box-shadow: 0 0 0 4px rgba(52, 152, 219, 0.15);
    }
    
    .search-button {
        background: linear-gradient(135deg, #3498db, #2c3e50);
        color: white;
        border: none;
        padding: 16px;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 10px;
        cursor: pointer;
        width: 100%;
        transition: all 0.3s ease;
        margin-top: 10px;
    }
    
    .search-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(52, 152, 219, 0.2);
    }
    
    a {
        display: inline-block;
        margin-top: 25px;
        color: #3498db;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s;
        border-bottom: 2px solid transparent;
        padding-bottom: 2px;
    }
    
    a:hover {
        color: #2980b9;
        border-bottom: 2px solid #2980b9;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Search Residents</h1>
        
        <form method="POST" action="search_results.php">
            <div class="search-container">
                <div class="search-box">
                    <input type="text" name="fullname" id="searchInput" placeholder="Search by Full Name">
                    <input type="text" name="nic" id="searchInput" placeholder="Search by NIC Number">
                    <input type="text" name="address" id="searchInput" placeholder="Search by Address">
                    <button type="submit" class="search-button" name="submit">Search</button>
                </div>
            </div>
            <a href="index.php">Go to Home</a>
        </form>
    </div>
</body>
</html>