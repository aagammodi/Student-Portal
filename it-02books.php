<?php include('server.php');?>
<?php
if(!isset($_SESSION['username']))
{
    
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <style>
    pre
    {
        font-size:110%;
    }

    body 
    {     
      font-family: 'times new roman';
      background-image: url('bg.jpg') ; 
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
          
          font-size: 18px;
          line-height: 1.5;
    }

    button 
    {
        background-color: #04aa6d;
        color: #ffffff;
        padding: 10px 32px;
        font-size: 20px;
        transition: width 0.1s, height 0.1s, transform;
    }

    button:hover
    {
        background-color: darkgreen;
        text-decoration: underline;
        transform: scale(1.125, 1.125);
    }

    
    .mydiv 
    {   
        
        background-color:rgba(0,0,0,0.7);
        text-align: center;
        padding : 70px;
        margin:0px;
    }

    .mydiv1
    {
        color:black;
    }
	
	h2
	{
	  color:black;
	  font-size: xx-large;
	  text-align:center;
	}

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT-02-Books</title>
</head>
<body>

    <div class="mydiv">
        <strong><h1 style="color:lightgrey ;font-size: 50px;"><u>IT SEM-2 BOOKS</u></h1></strong>

    </div>

    <hr margin:10px>

    <div style="background-color:rgba(255,255,255,0.7);color:#151e3d;font-size:x-large;"><br>
    <h2 style="color:#151e3d;font-size: xx-large;">1) <u>BOOKS</u></h2>

<pre><b>
    
    a) MATHS                           : Higher Enginnering Mathematics by BS Grewal (42<sup>nd</sup> Edition)    <a style="text-align: center;" download href="IT-02-Books\Higher Engineering Mathematics by B.S.Grewal.pdf"><button>Download </button></a><br>
    b) Programming for Problem Solving : ANSI C++ by E Balagurusamy                  (5<sup>th</sup> Edition)     <a style="text-align: center;" download href="IT-02-Books\OOP in C++ by E Balaguruswamy.pdf"><button>Download </button></a><br>
    c) Physics                         : Electronic Principles by Albert Malvino     (8<sup>th</sup> Edition)     <a style="text-align: center;" download href="IT-02-Books\Electronic Principles by Albert Paul Malvino.pdf"><button>Download </button></a><br>
                                       : Semiconductor Devices by Simon Sze          (3<sup>rd</sup> Edition)     <a style="text-align: center;" download href="IT-02-Books\Semiconductor Devices by Simon Sze.pdf"><button>Download </button></a><br>
    d) Enviromental Studies            : Enviromental Studies by Erach Bharucha      (3<sup>rd</sup> Edition)     <a style="text-align: center;" download href="IT-02-Books\Enviromental Studies by Erach Bharucha.pdf"><button>Download </button></a><br>
    </b></pre>
<br>
</div>



<div class="mydiv">
    <strong><p style="color:lightgrey ;font-size:40px;"><i>“To succeed in your mission, you must have single-minded devotion to your goal.”</i> - Sir APJ Abdul Kalam</p></strong>

</div>
     

    
</body>
</html>