<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>THKD Pharmacy Portal</title>
    </head>

    <style>
        .background {
            background-image: url('background.jpg');
            background-size: cover; 
            background-repeat: no-repeat;
            background-position: center center;
            position: relative;
            width: 100%;
            height: 100vh;
            
            overflow: hidden;
        }
        .buttoncontainer {
            width: 100%;
            height: 30%; 
            margin-top:300px;
            display:flex;
        }
        img {
            width: 100%;
            height: 500px;
        }
        .button{
            flex:1;
            margin-left:5%;
            margin-right:5%;
            background-color: #f0f0f0;
        }
        .buttons {
            width: 300px;
            height: 80px;
            background-color: #3498db; 
            border: none; 
            border-radius: 10px; 
            color: white; 
            font-size: 16px; 
            cursor: pointer; 
            transition: background-color 0.3s, transform 0.3s; 
            margin-left:30%;
        }

        .buttons:hover {
            background-color: #2980b9; 
            transform: translateY(-2px); 
        }

    </style>

    <body>
        <div class = "background">
            <div class = "buttoncontainer">
                <div class = "button">
                    <form action="login.php" >
                        <div class = "imgdiv"><img src="loginicon.jpg" alt="Button Image"></div>
                        <div class = "buttondiv"><button class="buttons" type="submit">Login</button></div>
                    </form>
                </div>
                <div class = "button">
                    <form action="index1.php">
                        <div class = "imgdiv"><img src="comlainicon.jpg" alt="Avatar"></div>
                        <div class = "buttondiv"><button class="buttons" type="submit">Complain</button></div>
                    </form>    
                </div>
            </div>
            
        </div>
    </body>

</html> 