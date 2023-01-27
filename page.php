<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['username'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J&k Administration</title>
    <link rel="stylesheet" href="page.css">
    <script src="https://d3js.org/d3.v7.min.js"></script> 
</head>


<body>
<div class="body">
    <div class="topbar">
        <ul>
            
            <li>
              <a href="login.html">Home</a>
            </li>
            <li class="last">
                <a href="#">Contact Us</a>
            </li>
        </ul>
        <br class="clear">
    </div>
    <div class="logo">

        <img src="images/Logo.png">
    </div> 
    
<div class="jk">

    <p>Jammu & Kashmir Revenue Department</p>
    <!--<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Government_of_Jammu_and_Kashmir.svg/640px-Government_of_Jammu_and_Kashmir.svg.png" alt="logo" width="128" height="120">
    -->
</div> 


<div>
    <nav class="navbar-dark">
        <div class="container">
            <div class="topnav" id="navbar">
                    <a class="active" aria-current="page" href="#">Dashboard</a>
                    <a href="input.html">Inspection Details</a>
                    <a href="login.html" class="right">Logout</a>  
            </div>
        </div>
    </nav>
</div>
    
<div class="headers">
    
    <p>Total No. of Land</p>
    <p>Quantum of Halka Land</p>
    <p>Total Encroached Land</p>
    <p>Total Recovered Land</p><br/>
</div>
<div class="num">
    
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42,431</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;25,251</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7,891</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13,211</p>
</div>


<div class="Gpie">
    <img src="images/piechart.jpg" alt="pie">
    <p>75% Recovered Land<p>
        <p>25% Encroached Land</p>

        
</div>
<div class="left">
    <img src="images/photograph.png" alt="photo" width="180px" height="180px">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username'] ?></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['usertype'] ?></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Designation</p>
</div>  

<div class="d3image">
<script>
    d3.csv("marksheet.csv").then(function) (data)
    {
        var canvas=d3.select("body").append("svg")
        .attr('width',500 )
        .attr('height',500)

       canvas.selectAll("rect")
       .data(data)
       .enter()
           .append("rect") 
           .attr("width",function(d){return d.recovered})
           .attr("height",48)
           .attr("y",function(d,i){return i*50})
           .attr("fill","green");

        canvas.selectAll("text")
        .data(data)
        .enter()
          .append("text")
          .attr("fill","white")
          .attr("y",function(d,i){
            return i*50;
          })
          .text(function(d){return d.week})
             
    } 
</script>



   
</div>
     
    




</div> 
<div class="container common-container four_content carousel-container">
    <div id="flexCarousel" class="flexslider carousel">
       <ul class="slides">
          <li><a target="_blank" href="http://digitalindia.gov.in/"
                title="Digital India, External Link that opens in a new window"><img
                   src="images/digital.jpeg" alt="Digital India"></a></li>
          <li><a target="_blank" href="http://www.makeinindia.com/"
                title="Make In India, External Link that opens in a new window"> <img
                   src="Images/makeinindia.jpeg" alt="Make In India"></a></li>
          
          <li><a target="_blank" href="https://data.gov.in/"
                title="Data portal, External Link that opens in a new window"><img
                   src="images/data.jpeg" alt="Data portal"></a></li>
          <li><a target="_blank" href="https://mygov.in/"
                title="MyGov, External Link that opens in a new window"><img
                   src="images/mygov.jpeg" alt="MyGov Portal"></a></li>
       </ul>
    </div>
 </div>
<div class="footer-bottom-wrapper">
<div class="footer-bottom-wrapper">
<div class="container common-container four_content footer-bottom-container">
   <div class="footer-content">
      <!-- <div class="copyright-content"> Website Content Managed by <strong>Department Name, Ministry Name,
         </strong> -->
         <span>Designed, Developed and Hosted by
            <a target="_blank" title="JaKeGA, External Link that opens in a new window" href="https://jakega.jk.gov.in/">
               <strong>Jammu and Kashmir eGovernance Agency</strong>
            </a>
            <strong> ( JaKeGA )</strong>
         </span>
      </div>
      <div class="last-updated">
         <strong>Last Updated: 23-01-2023</strong>
      </div>
   </div>
</div>
</div>
     <div id="footer">
      <div id="newsletter">
           <div class="footbox">
        <h2>Image Gallery</h2>     
             <a href="Gallery.aspx">  <img class="btmspace-15" src="images/ofiice/gallery.jpg" alt=""/> </a>
      </div>
      
      </div>
         <div class="footbox">     
     <a href="http://meity.gov.in/divisions/national-e-governance-plan" target="_blank"> <img src="images/ofiice/negp.jpg" width="290" height="80" /></a>    
              </div>
        <div class="footbox">
        <h2>Contact Us</h2>
       <ul>
        <li> Srinagar, Room No. 173, 1st Floor</li>
         <li>  Civil Secretariat, 190001</li>
         <li>  Jammu, Room No. 3/36, 3rd Floor, Mini Block</li>
         <li>  Civil Secretariat, 180001</li>
         <li>Tel. No.:- 0191-2572733</li> 
       </ul>     
        </div>
        
     
     
      <br class="clear" />
    </div>
  
   
  

</body>


</html>