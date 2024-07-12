<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>title</title>
    <style>
        body{
            margin:0;
        }
        .main {
            background-color: #333;
            overflow: hidden;
            justify-content: space-between;
            display: flex;
            flex-wrap: wrap;
        }
        .nav {
            margin-top: 50px;
            margin-right: 100px;
        }
        .nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
        }
        .nav li {
            float: left;
        }
        .nav li a {
            display: block;
            font-size: 24px;
            color: white;
            text-align: center;
            padding: 16px 28px;
            text-decoration: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .nav li a:hover {
            background-color: #074db5;
        }
        .menu-icon {
            display: none;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }
        @media screen and (max-width: 768px) {
            .nav {
                display: none;
                width: 100%;
            }
            .nav ul {
                flex-direction: column;
            }
            .nav li {
                width: 100%;
            }
            .menu-icon {
                display: block;
                margin: 50px 20px 0 20px;
            }
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="college.png" width="150px" height="150px" alt="logo" style="border-radius:50px">
        </div>
        <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
        <div class="nav" id="navbar">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="studentreg.php">STUDENT REGISTRATION</a></li>
            </ul>
        </div>
    </div>
    <script>
        function toggleMenu() {
            var nav = document.getElementById('navbar');
            if (nav.style.display === 'block') {
                nav.style.display = 'none';
            } else {
                nav.style.display = 'block';
            }
        }
    </script>
</body>
</html>
