<html> 
<head> 
    <title>Login Brin Group</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <style type="text/css"> 
    body { 
        font: <?=$font_size?> "open sans", "segoe ui", tahoma; 
        background-color: <?=$background_color?>; 
    } 
    h3 { 
        margin-top: 0; 
        margin-bottom: 10px; 
    } 
    div { 
        margin-bottom: 5px; 
    } 
    select { 
        padding: 5px 10px; 
        font-size: <?=$font_size?>; 
        border: 1px solid #CCCCCC; 
        color: #5d5d5d; 
        text-align: right; 
        width: 200px; 
        margin-bottom: 10px; 
    } 
    form { 
        margin: 0; 
    } 
    .container { 
        width: 250px; 
        margin: auto; 
        margin-top: 15px; 
        border: 0; 
        padding: 20px 20px 15px; 
        background-color: #FFFFFF; 
    } 
    .copyright { 
        padding: 0; 
        background: none; 
        text-align: center; 
        margin-top: 10px; 
        color: #FFFFFF; 
        font-size: smaller; 
    } 
    .button { 
        border: 0; 
        padding: 7px 20px; 
        float: left; 
        font-family: "open sans"; 
        color: #FFFFFF; 
        font-size: <?=$font_size?>; 
        margin-right: 5px; 
        margin-bottom: 5px; 
        cursor: pointer; 
    } 
    .blue { 
        background-color: #3e97e2; 
    } 
    .copyright a { 
        text-decoration: none; 
        color: #e4e4e4; 
        margin-top: 3px; 
        display: inline-block; 
    } 
    .clearfix::before, 
    .clearfix::after 
    { 
        content: ""; 
        float: none; 
        clear: both; 
        display: block; 
    } 
    .remember { 
        margin-bottom: 12px; 
    } 
    .success { 
        background-color: #abffc1; 
        padding: 5px 10px; 
        color: #696969; 
    } 
    </style> 
     
</head> 
<body> 
<div class="container"> 
    <div class="blue">
    <form method="post" action="model.php"> 
        <table> 
        <h3 ><center>LOGIN</center></h3>
                <tr> 
                    <td>Username</td> 
                    <td> 
                        <td><input type="text" name="username" size="20"></td> 
                    </td> 
                     
                </tr> 
                <tr> 
                    <td>Password</td> 
                    <td> 
                        <td><input type="password" name="password" size="20"></td> 
                    </td> 
                </tr> 
                <tr> 
                    <td><center><input type="submit" name="login" value="Login"></center></td> 
                </tr> 
            </table> 
    </form> 
</div>
</div> 
</body> 
</html> 