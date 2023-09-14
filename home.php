
<?php include('server.php');?>
<?php
if(!isset($_SESSION['username']))
{
    
    header("location:login.php");
}
?>





<!DOCTYPE html> <html> <head> <title> Student Resourse </title>
<style > 

 body
 {
	font-family: 'Times New Roman';
	 background-image: url('bg.jpg');
	 background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: 100% 100%;
 }

.sem_sel_sec
				{
				 width: 233px; height: 680px; border: solid black;
				border-width: 2px;
				font-size: 140%;
				background-color:rgba(0,0,0,0.5);
				font-weight: 700;
				display: inline-grid;
				text-align: center;
				margin-left: 50px;
				font-family: 'Times New Roman';
				color:whitesmoke;


			} 
			
			hr{ width: 230px; 
				height: 0px; 
				border: solid #151e3d;
				margin: 1px;
			}
			

			.forlogofont{
				font-size: 650%;
				font-weight: 700;
				text-align: center;
				padding: 125px;

			}
			button{
				background-color:#151e3d;
				cursor: pointer;
				color:white;
				font-family: 'Times New Roman';
				font-size: large;
				border-color: white;
				text-transform: uppercase;
				padding-left: 10px;
				padding-right: 10px;
				margin-bottom: 15px;
			
			}
			
            button:hover
			{
				color:yellow;
				border-color: yellow;
				text-decoration: underline;
			}
			
			a{
				transition: width 0.1s, height 0.1s, transform 0.1s;

			}
			 a:hover{
			 	transform: scale(1.125,1.125);
				 

			 }
			</style>

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				
	</head>
	<body>
		<div>	
			 
			<div class="forlogofont" style="color:lightgrey;background-color: rgba(0,0,0,0.7);">
				<b><u>STUDENT RESOURCE</u></b>
				
			</div>
		</div>
		<br><br>

			<br>
			<div style="background-color: rgba(255,255,255,0.7);"><br>
         <h1 style=" color:  black; margin-bottom: 0px;text-align: center;">Greetings</h1>
         <hr style="width: auto; margin-bottom: 40px;">
         <pre style="font-size: x-large; color: black; font-family: 'Times New Roman';text-align: center;">
Welcome!
This is an website where you can find the materials of B.Tech. 
Get Books, Question Papers, Lab Manuals and more...
        </pre>
		<br>
</div>
<br>
<br>

<div  style="background-color:rgba(255,255,255,0.7);"><br>
        <h1 style=" color: black; margin-bottom: 0px;text-align: center;">Resources</h1>
        <hr style="width: auto; margin-bottom: 40px;">

        <br>
        <br>
        <br>

		<div class="sem_sel_sec" style="margin-left: 8%;">
			<img src="ce.jpg" width="233px" height="170">
			<h4><b>COMPUTER <br>ENGINEERING</b></h4><hr><br>
			<a href="ce-01.php" target="_blank"><button>SEM 1</button></a><hr><br>
			<a href="ce-02.php" target="_blank"><button>SEM 2</button></a><hr><br>
			<a href="ce-03.php" target="_blank"><button>SEM 3</button></a><hr><br>
			<a href="ce-04.php" target="_blank"><button>SEM 4</button></a>

		</div>
	
		<div class="sem_sel_sec" style="margin-left:17%;margin-right: 13%;">
			<img src="it.jpg" width="233px" height="170">
			<h4>INFORMATION <br>TECHNOLOGY</h4><hr><br>
			<a href="it-01.php" target="_blank"><button>sem 1</button></a><hr><br>
			<a href="it-02.php" target="_blank"><button>sem 2</button></a><hr><br>
			<a href="it-03.php" target="_blank"><button>sem 3</button></a><hr><br>
			<a href="it-04.php" target="_blank"><button>sem 4</button></a>

		</div>
		<div class="sem_sel_sec" style="margin-right: 8%;">
			<img src="ec.jpg" width="233px">
			<h4>ELECTONICS AND<br>COMMUNICATION</h4><hr><br>
			<a href="ec-01.php" target="_blank"><button>SEM 1</button></a><hr><br>
			<a href="ec-02.php" target="_blank"><button>SEM 2</button></a><hr><br>
			<a href="ec-03.php" target="_blank"><button>SEM 3</button></a><hr><br>
			<a href="ec-04.php" target="_blank"><button>SEM 4</button></a>

		</div>

		<br>
		<br>
		<br>
		<br>
		<br>

		<div class="sem_sel_sec" style="margin-left: 8%;">
			<img src="me.jpg" width="233px" height="170" >
			<h4>MECHANICAL <br>ENGINEERING</h4><hr><br>
			<a href="me-01.php" target="_blank"><button>sem 1</button></a><hr><br>
			<a href="me-02.php" target="_blank"><button>sem 2</button></a><hr><br>
			<a href="me-03.php" target="_blank"><button>sem 3</button></a><hr><br>
			<a href="me-04.php" target="_blank"><button>sem 4</button></a>

		</div>

		<div class="sem_sel_sec" style="margin-left: 17%;margin-right: 13%;">
			<img src="ch.jpg" width="233px" height="170">
			<h4>CHEMICAL <br>ENGINEERING</h4><hr><br>
			<a href="ch-01.php" target="_blank"><button>sem 1</button></a><hr><br>
			<a href="ch-02.php" target="_blank"><button>sem 2</button></a><hr><br>
			<a href="ch-03.php" target="_blank"><button>sem 3</button></a><hr><br>
			<a href="ch-04.php" target="_blank"><button>sem 4</button></a>

		</div>

		<div class="sem_sel_sec" style="margin-right: 8%;">
			<img src="cl.jpg" width="233px" >
			<h4>CIVIL <br>ENGEENRING</h4><hr><br>
			<a href="cl-01.php" target="_blank"><button>sem 1</button></a><hr><br>
			<a href="cl-02.php" target="_blank"><button>sem 2</button></a><hr><br>
			<a href="cl-03.php" target="_blank"><button>sem 3</button></a><hr><br>
			<a href="cl-04.php" target="_blank"><button>sem 4</button></a><br><br>

		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="sem_sel_sec" style="margin-left: 8%;">
			<img src="ic.jpg" width="233px" >
			<h4>INSTURMENTATION AND <br>COMMUNICATION</h4><hr><br>
			<a href="ic-01.php" target="_blank"><button>sem 1</button></a><hr><br>
			<a href="ic-02.php" target="_blank"><button>sem 2</button></a><hr><br>
			<a href="ic-03.php" target="_blank"><button>sem 3</button></a><hr><br>
			<a href="ic-04.php" target="_blank"><button>sem 4</button></a><br><br>

		</div>
		<br><br><br><br><br>
	</div>
</div>

	<br>
<br>
<br><br>
<div class="forlogo">	
			 
			<div class="forlogofont" style="color: yellow; padding: 40px;background-color: rgba(0,0,0,0.7);">
				 <strong><p style="color:lightgrey ;font-size: 30%;"><i>"All power is within you; you can do anything and everything"</i> - Swami Vivekananda</p></strong>
				<!-- <hr style="width: 830px; height: 0px; outline-width: 0px; border-color: darkkhaki;margin-left: 80px;"> -->
			</div>
		</div>
		<br><br><div style="background-color:rgba(255,255,255,0.7);font-size: x-large;"><br>
		<h2 style="text-align: center; color:black; margin-bottom: 0px;">Connect Us</h2>
        <hr style="width: auto; margin-bottom: 40px;">
		<pre style="font-size: x-large; color: black; font-family: 'Times New Roman';">
&#8594 <b>Aagam Modi</b>       <a href="https://www.linkedin.com/in/aagam-modi-45bb50217/" target="_blank"><i class="fa fa-linkedin-square" style="font-size:36px;color:#0072b1"></i></a>
&#8594 <b>Samarth Parekh</b> <a href="https://www.linkedin.com/in/aagam-modi-45bb50217/" target="_blank"><i class="fa fa-linkedin-square" style="font-size:36px;color:#0072b1"></i></a>
	    
		
&#8594 You can also connect us on Gmail:
      <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=studentportal2025@gmail.com">Student Portal</a>
	</pre>

<br>


</div>
    </body>
</html>