<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        form {
            margin-bottom: 20px;
        }

        form input,
        form textarea,
        form button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        .article {
            background-color: #f9f9f9;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 4px;
        }

        .article h2 {
            margin-top: 0;
        }

        .article p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Blog</h1>
    </header>

    <div class="container">
        <form id="articleForm">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <input type="text" name="category" placeholder="Category" required>
            <input type="text" name="slug" placeholder="Slug" required>
            <button type="submit">Create Article</button>
        </form>

        <div id="articleList">
            
        </div>
    </div> 

    
</body>
</html>
