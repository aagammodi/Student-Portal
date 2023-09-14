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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <title>IT-02</title>
</head>
<body>

    <div class="mydiv">
        <strong><h1 style="color:yellow ;font-size: 50px;"><u>INFORMATION & TECHNOLOGY - SEM 2</u></h1></strong>

    </div>
<br>
    <hr width="10px;">
	
	<div style="background-color:rgba(255,255,255,0.7);color:black;font-size:x-large;"><b>
<br>
<h2><u><strong> IT Syllabus(2021-25) </strong></u></h2>

<pre>
    &#8594 Click below button to download the syllabus.
     
</pre></b>


<pre style="text-align: left;">
    <a style="text-align: center;" href="IT Syllabus.pdf" download><button>Download Syllabus</button></a><br><br>
</pre>   
</div>
<br>
    <div style="background-color:rgba(255,255,255,0.7);color:black;font-size:x-large;"><br>
<h2>1) <u>BOOKS</u></h2>
<pre><b>
    <b>a) MATHS</b>                           : Higher Enginnering Mathematics by BS Grewal (42<sup>nd</sup> Edition)
    <b>b) Programming for Problem Solving </b>: ANSI C++ by E Balagurusamy                  (5<sup>th</sup> Edition) 
    <b>c) Physics</b>                         : Electronic Principles by Albert Malvino     (8<sup>th</sup> Edition)
                                       : Semiconductor Devices by Simon Sze          (3<sup>rd</sup> Edition)
    <b>d) Enviromental Studies</b>            : Enviromental Studies by Erach Bharucha
</pre></b>
<br>
<pre style="text-align: left;">
    <a style="text-align: center;" href="it-02books.php"><button>Download BOOKS</button></a><br><br>
</pre>
</div>

<br margin:10px>
    
    <div style="background-color:rgba(255,255,255,0.7);"><br>
<h2>2) <u>Exam Papers</u> </h2>
<pre>

     <b>a) Sessional-1 Papers</b>
     <b>b) Sessional-2 Papers</b>
     <b>c) Sessional-3 Papers</b>
     <b>d) External Papers</b> 
</pre> 
<br>

<pre style="text-align: left;">
    <a style="text-align: center;" href="it-02papers.php"><button>Download PAPERS</button></a><br><br>
</pre>   
</div>    

<br margin:10px>

     <div style="background-color:rgba(255,255,255,0.7);"><br>
<h2>3) <u>Lab Manuals & Tutorials</u> </h2>
<pre>
    
    <b>a) Lab manual of PPS</b>
    <b>b) Lab manual and Tutorials of Physics</b>
    <b>c) Lab manual of Hardware Workshop</b>
</pre>
<br>

<pre style="text-align: left;">
    <a style="text-align: center;" target="_blank" href="it-02lab.php"><button>Download Lab manual & Tutorials</button></a><br><br>
</pre>
</div>     

<br margin:10px>

    <div class="mydiv1" style="background-color:rgba(255,255,255,0.7);"><br>
<h2>4) <u>Email Id of IT Faculty</u> </h2>

<pre>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=vipuldabhi.it@ddu.ac.in">Dr. Vipul K. Dabhi</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=prajapatihb.it@ddu.ac.in">Dr. Harshadkumar B. Prajapati</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=nikitadesai.it@ddu.ac.in">Prof. Nikita Desai</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=mgoswami.it@ddu.ac.in">Dr. Mukesh M. Goswami</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=zankhana.it@ddu.ac.in">Prof. Zankhana V. Dabhi</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=ravi.it@ddu.ac.in">Prof. Ravindra A. Vyas</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=yogendra.it@ddu.ac.in">Prof. Yogendra L. Patel</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=anand.it@ddu.ac.in">Prof. Anandkumar D. Dave</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=brijesha.it@ddu.ac.in">Prof. Brijesha P. Kothari</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=sandeepsuthar.it@ddu.ac.in">Prof. Sandeep R. Suthar</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=tanvigoswami.it@ddu.ac.in">Prof. Tanvi R. Goswami</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=anvyas.it@ddu.ac.in">Prof. Archana N Vyas</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=deepakvegda.it@ddu.ac.in">Prof. Deepak C Vegda</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=sunilvithlani.it@ddu.ac.in">Prof. Sunil K. Vithlani</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=viranchipatel.it@ddu.ac.in">Prof. Viranchi N Patel</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=viralshah.it@ddu.ac.in">Prof. Viral H. Shah</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=kunalsahitya.it@ddu.ac.in">Prof. Kunal J. Sahitya</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=bhargavdave.it@ddu.ac.in">Prof. Bhargav D. Dave</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=fatemavhora.it@ddu.ac.in">Prof. Fatema Vhora</a>
   
</pre>
<br><br><br>
</div>

<div class="mydiv">
    <strong><p style="color:yellow ;font-size: 50px;font-family:times new roman;"><i>“Success can come to you by courageous devotion to the task lying in front of you.”</i> - Sir C.V. Raman</p></strong>

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