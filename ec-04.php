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
    <title>EC-04</title>
</head>
<body>

    <div class="mydiv">
        <strong><h1 style="color:yellow ;font-size: 50px;"><u>ELECTRONICS & COMMUNICATION - SEM 4</u></h1></strong>

    </div>
<br>
    <hr width="10px;">
	
	<div style="background-color:rgba(255,255,255,0.7);color:black;font-size:x-large;"><b>
<br>
<h2><u><strong> EC Syllabus(2021-25) </strong></u></h2>

<pre>
    &#8594 Click below button to download the syllabus.
     
</pre></b>


<pre style="text-align: left;">
    <a style="text-align: center;" href="EC Syllabus.pdf" download><button>Download Syllabus</button></a><br><br>
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
    <a style="text-align: center;" target="_blank" href="https://drive.google.com/drive/folders/1yfo9jIKQUv9FTjNtnjl45OU0gpingH0Y?usp=sharing"><button>Download BOOKS</button></a><br><br>
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
    <a style="text-align: center;" href="https://www.amazon.in"><button>Download PAPERS</button></a><br><br>
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
    <a style="text-align: center;" target="_blank" href="https://drive.google.com/drive/folders/1Kp8dO2n_gIZMl-df2eU45JjXSKO537-U?usp=sharing"><button>Download Lab manual & Tutorials</button></a><br><br>
</pre>
</div>     

<br margin:10px>

    <div class="mydiv1" style="background-color:rgba(255,255,255,0.7);"><br>
<h2>4) <u>Email Id of EC Faculty</u> </h2>

<pre>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=pur_dalal.ec@ddu.ac.in">Dr. Purvang D. Dalal</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=hsmazumdar@ddu.ac.in">Prof. (Dr.) M. A. Patel</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=nil_kothari@ddu.ac.in">Dr. Nikhil J. Kothari</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=echardip@ddu.ac.in">Dr. Hardip K. Shah</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=vinay_thumar@ddu.ac.in">Dr. Vinay M. Thumar</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=pallavi.darji.ec@ddu.ac.in">Dr. Pallavi G. Darji</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=shitalthakkar.ec@ddu.ac.in">Prof. Shital Thakkar</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=yogesh_engg2.ec@ddu.ac.in">Dr. Yogesh K. Meghrajani</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=rizwan_alad.ec@ddu.ac.in">Dr. Rizwan H. Alad</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=smith.ec@ddu.ac.in">Prof. Smith. S. Thavalapill</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=shahhetal.ec@ddu.ac.in">Prof. Hetal B. Shah</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=manishpatel_79.ec@ddu.ac.in">Prof. Manishkumar K. Patel</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=ashish.ec@ddu.ac.in">Prof. Ashish B. Pandya</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=jmshah.ec@ddu.ac.in">Prof. Jitendra M.Shah</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=mitesh.ec@ddu.ac.in">Dr. Mitesh J. Limachia</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=hardik.patel.ec@ddu.ac.in">Prof. Hardik B. Patel</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=bhavini123.ec@ddu.ac.in">Prof. Bhavini .D. Parmar</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=harikrushna.rathod.ec@ddu.ac.in">Prof. Harikrushna B. Rathod</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=hmpatel.ec@ddu.ac.in">Prof. Harshitkumar M. Patel</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=vasim.vohra.ec@ddu.ac.in">Prof. Vasim.A. Vohra</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=keyurpatel.ec@ddu.ac.in">Prof. Keyurkumar M. Patel</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=sohil.dabhi.ec@gmail.com">Prof. Sohilkumar A. Dabhi</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=nvc.ec@ddu.ac.in">Prof. Narendra V. Chauhan</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=dipakrabari.ec@ddu.ac.in">Prof. Dipak K. Rabari</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=mitul.shah.ec@ddu.ac.in">Prof. Mitul A. Shah</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=marmiksoni.ec@ddu.ac.in">Prof. Marmik B. Soni</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=biren2787.ec@ddu.ac.in">Prof. Biren B. Patel</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=pinkesh150387.ec@ddu.ac.in">Prof. Pinkesh Patel</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=goralnakum.ec@ddu.ac.in">Prof. Goral Nakum</a>
    &#8594 <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=himanshu.ec@ddu.ac.in">Prof. Himanshu Prajapati</a>

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