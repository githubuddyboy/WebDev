<!DOCTYPE html>
<html lang="en">

<head>
    <title>Abraham Lincoln's Biography</title>
    <link rel="icon" type="images/x-icon" href="images/Hat1.png" />

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Version 3.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!----php-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Script -->
    <script type="text/javascript" src="JS/Script.js"> </script>
    <script>
        listBtn.onclick = function(e) {
            list.removeChild(listItem);
        }
    </script>

    <head>

        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
            }

            /* Style the header */
            header {
                padding: 30px;
                text-align: center;
                background: #daa778;
                color: rgb(148, 82, 82);
            }


            .header h1 {
                font-size: 40px;

            }

            .row {
                display: flex;
                flex-wrap: wrap;
            }


            .side {
                flex: 30%;
                background-color: #41b68f;
                padding: 20px;
            }


            .main {
                flex: 70%;
                background-color: rgb(192, 124, 112);
                padding: 20px;
                margin: unset;
            }


            .fakeimg {
                background-color: rgb(47, 78, 107);
                width: 100%;
                padding: 20px;
            }


            .footer {
                padding: 20px;
                text-align: center;
                background: rgb(206, 171, 76);

            }

            /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 700px) {
                .row {
                    flex-direction: row-reverse;
                }
            }






            .card-img {
                column-count: 3;
            }

            h3 {
                column-span: all;
            }

            .navbar {
                overflow: auto;
                background-color: rgb(42, 53, 52);
            }

            .navbar a {
                float: left;
                font-size: 16px;
                color: rgb(85, 112, 201);
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            .dropdown {
                float: left;
                overflow: clip;
            }

            .dropdown .dropbtn {
                font-size: 16px;
                border: none;
                outline: none;
                color: skyblue;
                padding: 14px 16px;
                background-color: inherit;
                font-family: inherit;
                margin: 0;
            }

            .navbar a:hover,
            .dropdown:hover .dropbtn {
                background-color: red;
            }

            .dropdown-content {
                display: none;

                background-color: #5d5c5e;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {
                background-color: rgb(205, 233, 139);
            }

            .dropdown:hover .dropdown-content {
                display: inline-table;
            }
        </style>
    </head>

<body>
    <div class="navbar">
        <a href="biography.php">Home</a>
        <a href="http://localhost:8080/WebDev/Version8.0/user14/login.php" class="nav-item nav-link active">Login</a>
        <div class="dropdown">
            <button class="dropbtn">page bar
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="http://localhost:8080/WebDev/Version8.0/user14/index.php">Page 2</a>
                <a href="http://localhost:8080/WebDev/Version8.0/user14/presLincoln.php">Page 3</a>
                <a href="http://localhost:8080/WebDev/Version8.0/user14/Lifeafterpres.php">Page 4</a>
            </div>`
        </div>
    </div>

</body>

<!-- End of Navbar -->


<header>
    <div>

        <h1>Biography website</h1>

        <p>~Presented to you by Salih~</p>
</header>



</body>
<div class="MagicSlideshow" data-options="" style="background-color: cornflowerblue;">
    <h2>About Abraham Lincoln</h2>
    <h5>Photo of Abraham Lincoln:</h5>
    <img src="images/abraham Licoln.jpeg" style="height:200px;" class="animated heartBeat" alt="Transparent MDB Logo" id="animated-img1">
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <div class="card-img">
        <h3>More photos</h3>
        <img src="images/abrahamlicoln.png" style="height:200px;">


        <img src="images/abrahamlicoln3.jpeg" style="height:200px;">
    </div>

    <div class="main">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Dec 7, 2017</h5>
        <img src="images/Licoln4.jpeg" class="mx-auto d-block">
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco.</p>
        <br>
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <img src="images/lincoln5.jpeg" class="img-thumbnail" alt="Cinque Terre">
        <p>Some text..</p>
        <article>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco.</article>
    </div>
</div>

<div class="row">
    <div class="col-sm-6" style="background-color:rgb(52, 73, 90);">
        <Center>
            <h2> Video </h2>
        </Center>
        <center>
            <h3>Biography VIDEO</h3>
        </center>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/L80_q2tPveo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-sm-6" style="background-color:rgb(95, 86, 105);">
        <center>
            <form onsubmit="confirmInput()" action="https://shakopee.instructure.com/courses/131334" style="background-color:rgb(95, 86, 105);">
                Enter your name: <input id="fname" type="text" size="20" style="background-color:yellow;">
                <input type="submit" style="background-color:rgb(223, 168, 220);">
                <center>
                    <div id="colorMsg" style="font-size:18px;width:150px;height:100px;padding:5px;">Choose a
                        background
                        color...
                    </div>
                    <select id="colorPicker" onchange="JavaScript:changeColor()">
                        <option value="transparent">None</option>
                        <option value="yellow">Yellow</option>
                        <option value="salmon">Salmon</option>
                        <option value="lightblue">Light Blue</option>
                        <option value="limegreen">Lime Green</option>
                        <option value="blue">blue</option>
                        <option value="cyan">Cyan</option>
                        <option value="violet">Violet</option>
                        <option value="red">Red</option>
                    </select>
    </div>
    </center>
    </form>
</div>
</div>

</div>
<div class="footer">
    <div class="row">
        <aside class="col-4" style="color:lightblue">
            <center><button onclick="myFunction()">Click if you liked my Biography</button></center>
        </aside>
        <aside class="col-4">
            <center><button><a href="http://localhost:8080/WebDev/Version8.0/user14/ebayAPI.php" class="nav-item nav-link active" tabindex="-1">More biography of Abraham Lincoln</a></button></center>

        </aside>
        <aside class="col-4">
            <center><button><a href="http://localhost:8080/WebDev/Version8.0/user14/CRUD/index.php" class="nav-item nav-link active" tabindex="-1">Check books Written by Abraham Lincoln</a></button></center>

        </aside>

        <aside class="col">
            <h3>sources</h3>
            <a href="https://www.w3schools.com/default.asp" class="nav-item nav-link active" tabindex="-1">W3Schools</a>
            <a href="https://www.youtube.com/channel/UCiCPv2sV_D3FqMRzzUFA2Fg" class="nav-item nav-link active" tabindex="-1">Biography Channel</a>
        </aside>
    </div>
</div>
</div>
</div>
<div class="footer">
    <p>
        <center>Webpage made by <a href="index.html" target="_blank">Salih</a></center>
    </p>

</div>

</body>
</footer>

</html>