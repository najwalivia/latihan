<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
    }
    .navbar {
        background-color: #4A90E2; /* Blue color */
    }
    .sidebar {
        background-color: #34495E; /* Dark blue color */
        width: 250px;
    }
    .sidebar-link {
        display: block;
        color: #ECF0F1; /* Light gray color */
        padding: 10px 15px;
        text-decoration: none;
    }
    .sidebar-link:hover {
        background-color: #2C3E50; /* Darker blue shade */
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    #content {
        background-color: #ECF0F1; /* Light gray background */
        width: 100%;
        padding: 20px;
    }
    iframe {
        width: 100%;
        height: 600px;
        border: none;
    }
</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='home_content.html';">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='features_content.html';">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="document.getElementById('contentFrame').src='pricing_content.html';">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar and Content -->
    <div class="d-flex">
        <div class="sidebar">
           
        </div>

        <div id="content">
            <iframe id="contentFrame" src="home_content.html"></iframe>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- File: home_content.html -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home Content</title>
</head>
<body>
    <center><h1>Home Page</h1></center>
    <!-- <p>Welcome to the Home page of your Dashboard. This content is displayed from a separate HTML file.</p> -->
</body>
</html>

