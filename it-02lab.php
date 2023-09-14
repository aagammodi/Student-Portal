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
        padding: 18px 32px;
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
    <title>IT-02-Lab Manuals</title>
</head>
<body>

    <div class="mydiv">
        <strong><h1 style="color:lightgrey ;font-size: 50px;">IT SEM-2 LAB MANUALS</h1></strong>>

    </div>

    <hr margin:10px>
   
    <div style="background-color:rgba(255,255,255,0.7);color:#151e3d;font-size:x-large;"><br>
     <h2 style="color:#151e3d;font-size: xx-large;">3) <u>Lab Manuals & Tutorials</u></h2>

<pre>
    
    <b>a) Lab manual of PPS</b>                         <a style="text-align: center;" download href="IT-02 Tutorials and Lab Manuals\PPS-II Lab Manual.pdf"><button>Download </button></a><br>
    <b>b) Lab manual of Physics</b>                     <a style="text-align: center;" download href="IT-02 Tutorials and Lab Manuals\PHYSICS Lab Manual - IT02.pdf"><button>Download </button></a><br>
    <b>c) Lab manual of Hardware Workshop</b>           <a style="text-align: center;" download href="IT-02 Tutorials and Lab Manuals\Hardware Workshop Lab Manual.pdf"><button>Download </button></a><br>
    <b>a) Tutorial of Physics</b>                       <a style="text-align: center;" download href="IT-02 Tutorials and Lab Manuals\PHYSICS_TUTORIAL_IT02.pdf"><button>Download </button></a><br>
    
</pre>
<br>


</div>     


<div class="mydiv">
    <strong><p style="color:lightgrey ;font-size: 40px;"><i>“None can destroy iron, but its own rust can! Likewise none can destroy a person, but its own mindset can!”</i> - Sir Ratan TATA</p></strong>

</div>
     

    
</body>
</html>