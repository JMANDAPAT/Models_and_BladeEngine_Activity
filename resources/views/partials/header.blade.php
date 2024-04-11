<!-- resources/views/includes/header.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <style>
        /* Header styles */
        header {
            background-color: #2c3e50; /* Dark blue */
            color: #fff;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        header h1 {
            margin: 0;
            font-size: 28px;
        }

        /* Navigation styles */
        nav {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #34495e; /* Darker blue */
        }
    </style>
</head>
<body>

<header>
    <h1>Bookstore</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">Books</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
</header>
