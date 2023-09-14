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
    <title>IT-02-Papers</title>
</head>
<body>

    <div class="mydiv">
        <strong><h1 style="color:lightgrey ;font-size: 50px;"><u>IT SEM-2 EXAM PAPERS</u></h1></strong>>

    </div>

    <hr margin:10px>

    <div style="background-color:rgba(255,255,255,0.7);color:#151e3d;font-size:x-large;"><br>
    <h2 style="color:#151e3d;font-size: xx-large;">2) <u>Exam Papers</u> </h2>

<pre>

     <b>a) Sessional-1 Papers</b>          <a style="text-align: center;" download href="https://www.amazon.in"><button>Download </button></a><br>
     <b>b) Sessional-2 Papers</b>          <a style="text-align: center;" download href="https://www.amazon.in"><button>Download </button></a><br>
     <b>c) Sessional-3 Papers</b>          <a style="text-align: center;" download href="https://www.amazon.in"><button>Download </button></a><br>
     <b>d) External Papers</b>             <a style="text-align: center;" download href="https://www.amazon.in"><button>Download </button></a><br>
</pre> 
<br>
</div>    

<div class="mydiv">
    <strong><p style="color:lightgrey ;font-size: 40px;"><i>“ My success will not depend on what A or B thinks of me. My success will be what I make of my work.”</i> - Sir Homi J. Bhabha</p></strong>

</div>
     

    
</body>
</html>