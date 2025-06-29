<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Implement Sticky Header and Footer with CSS</title>
<style type="text/css">
    body{        
        padding-top: 60px;
        padding-bottom: 40px;
        margin: 0px;
    }
    .fixed-header, .fixed-footer{
        width: 60%;
        position: fixed;        
        background: #FFFFFF;
        padding: 10px 0;
        color: #000000;
        text-align: center;
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }
    .container{
        width: 80%;
        margin: 0 auto; 
    }
    nav a{
        color: #000000;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
</style>
</head>
<body>
    <div class="fixed-header">
        <img src="header.png" width="100%" /></td>
        <!--
        <div class="container">
            <nav>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Products</a>
                <a href="#">Services</a>
                <a href="#">Contact Us</a>
            </nav>
        </div>
        -->
    </div>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>    
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2016 Your Company</div>        
    </div>
</body>
</html>