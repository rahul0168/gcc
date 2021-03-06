<!DOCTYPE html>
<html>
<head>

<title>GCC</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link href="assets/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/css/flag-icons.min.css" integrity="sha512-UwbBNAFoECXUPeDhlKR3zzWU3j8ddKIQQsDOsKhXQGdiB5i3IHEXr9kXx82+gaHigbNKbTDp3VY/G6gZqva6ZQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--<script src="https://unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
  <script src="https://unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" /> -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./dist/css/dd.css?v=4.0">
  <link rel="stylesheet" type="text/css" href="./dist/css/flags.css?v=1.0" />
</head>
<body>
<div class="container-fluid" >
<div class="row" style="background-color: #0A53A0;">
    &nbsp;
</div>
</div>
<div class="container">
<div class="row" style="padding: 12px;">
  <div class="col-md-6"></div>
  <div class="col-md-3">
 
  <select name="countries" id="countries" is="ms-dropdown" data-child-height="315">
  <option value="United Kingdom" data-image="images/united-kingdom.png">United Kingdom</option>
  </select></div>
  <div class="col-md-3">
  <select class="form-control text-right" id="exampleFormControlSelect1">
    <option selected>Select Language</option>
    <option>English</option>
    
  </select>
</div>
</div>
</div>
<div class="container">    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">BE OUR AGENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">OUR SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">TECHNOLOGY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">OUR NETWORK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">CONTACT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link agentbtn" href="#" style="color: #0A53A0;"> <i class="fas fa-lock"></i> AGENT LOGIN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link register" href="#" style="color: #fff;"> <i class="fas fa-user"></i> REGISTER</a>
      </li>

    </ul>
  </div>
</nav>
</div>
<div class="container-fluid" style="background-image: url('images/remit-home.jpg'); height: 100%;  background-position: center;
background-repeat: no-repeat;
background-size: cover;padding: 14px 152px 147px 149px;" >
  <h1 class="text-center" style="color:#0A53A0;">Brand Preferred By Millions...</h1>
  
  <div class="row">
  <div class="col-md-8"></div>
  <div class="col-md-4" style="background-size:cover;background:linear-gradient(0deg, rgba(10, 83, 160, 0.801), rgba(10, 83, 160, 0.801)); background-repeat: no-repeat;padding: 120px; border-radius: 12px;padding: 12px;">
    <div class="text-center">
   <h3 style="color: #fff;"> INSTANT CALCULATOR</h3>
  <h4 style="color: #fff;">You get the Real Exchange Rate</h4>
  <div style="padding: 12px;">  
    <div class="input-group">
      <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Send " >
      <input type="text" class="form-control" aria-label="Text input with dropdown button" value="1000" style="font-weight:700; text-align:right;" >
      <div class="input-group-append" >
       <select name="countries" id="countries" is="ms-dropdown" data-child-height="315">
    <option value='ad' data-image="images/uae.png" data-title="Andorra">AED</option>
 
   
  </select>
      </div>
    </div><br>
    <div class="input-group">
      <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Receive">
      <input type="text" class="form-control" aria-label="Text input with dropdown button" value="19.9084" style="font-weight:700;text-align:right;" >

      <div class="input-group-append">
        <select name="countries" id="countries" is="ms-dropdown" data-child-height="315">
        <option value='ad' data-image="images/india.png" data-title="Andorra">INR</option>


   

  </select>
      </div>
    </div>
</div>
</div>
<div>
  <div class="container">
 <div class="row" style="background-color: #fff; border-radius: 12px; margin-bottom: 12px;">
   <div class="col-md-12">
    <table class="table">
  
      <tbody>
        <tr>
         
          <td style="color: #2E388C;
          font-weight: 700;">You Send</td>
          <td style="color: #2E388C;
          font-weight: 700;">1,000 AED </td>
        
        </tr>
        <tr>
          
          <td>Charges </td>
          <td>15 AED </td>
        
        </tr>
        <tr>
         
          <td style="color: #169B4D;
          font-weight: 700;">Recipient Receives</td>
          <td style="color: #169B4D;
          font-weight: 700;">19908.40 INR</td>
          
        </tr>
      </tbody>
    </table>
    
   </div>
   
 </div>
 <div class="text-center">
 <button class="btn btn-reg">Register With Us</button>
</div>
 </div>
 
</div>
  </div>
</div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
  <div class="card" style="margin-top: -125px;">
    <div class="card-header text-center" style="color: #fff; background-color: #169B4D;font-size: 22px;">
      Transaction Tracker
    </div>
    <div class="card-body">
    <?php

$db = mysqli_connect("localhost","root","","gcc",3308);

if(!$db)
{  
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{		
    $phone_no = $_POST['phone_no'];
    
  

    $insert = mysqli_query($db,"INSERT INTO `transaction_tracker`(`phone_no`) VALUES ('$phone_no')");
      
    if(!$insert)
    {
        echo "not inserted";
      
        //echo"<script>alert('not'); </script>";
    }
    else
    {
        echo "<div class='alert alert-success' role='alert'>Records added successfully.</div>";
        //echo"<script>alert('yes'); </script>";
    }
}

mysqli_close($db); // Close connection
?>
      <div class="row">
        <div class="col-md-6"> <p >Simply enter your 12 digit GTN
          number to know the status of your
          money transfer.
          </p></div>
        <div class="col-md-6">
          <form method="post"  >
          <input type="text" name="phone_no" class="form-control" placeholder="XXXX XXXX XXXX" required><br>
          <button  type="submit" value="sumbit" name="submit" class="btn btn-blue">Transaction Status</button>
          <button type="reset" class="btn btn-blue">Clear</button>
          </form>
          

        </div>
     
        </div>
     
    </div>
    </div>
  </div>
</div>
<div class="col-md-2"></div>
</div>
  <div class="row" style="padding-top: 61px;">
    <div class="col-md-5"></div>
   
 
  <div class="col-md-2">
  <p  class="text-center section-title"> Why GCC Remit
  </p></div>
  <div class="col-md-5"></div>
</div>
<div class="container">
  <div class="row" style="padding-bottom: 44px;">
   

    <div class="col-md-6">
      <div  style="float: right;">
      <img src="images/remit-about-us.png" width="500">
    </div>
    </div>
    <div class="col-md-6"><p align="justify">GCC Remit offers one of the best benefit propositions for Agents among
      instant transfer brands. And we have built many unique features onto our
      revenue structure which would optimize your benefits as an GCC Remit
      Agent. It's no coincidence that we have one of the best agent networks in
      the globe consisting of prestigious banking and non-banking entities.</p>
      <p align="justify">
      As an GCC Remit Agent, you could be a proud partner of one of the fastest
      growing brands in global instant money transfers. Learn how to you can
      become an GCC Remit Agent.</p>
     <button class="btn abtbtn" ><span style="    margin-left: 12px;">Learn More</span>  <i class="fas fa-chevron-circle-right" style="        font-size: 24px;
      color: #169B4D;
      margin-right: -4px;"></i></button>
    </div>
  </div>
  </div>
</div>
<img src="images/text_bar.svg" width="100%" > 
<div class="text-center" style="    margin-top: -85px;    color: #fff;
font-size: 22px;">How<br> To
  Send & Receive Money</div>
<div class="container-fluid " style="background-image: url(images/sendmoney_img.svg); background-repeat: no-repeat; background-size: 12%;">


<div class="container" style="padding: 46px 160px;background-image: url(images/received_money_img.svg);
background-repeat: no-repeat;background-position: right bottom; background-size: 12%; ">
 <div class="row">
   

    <div class="col-md-6">
      <ul style="list-style: none;     border-right: #169B4D 3px solid;">
        <li class="icon-title"><img src="images/visitneargccremit.svg" class="icon-img-left"> Visit the nearest
          GCC Remit Location </li>
        <li class="icon-title"><img src="images/depositmoney.svg" class="icon-img-left"> Deposit the Money  </li>
        <li class="icon-title"><img src="images/gtn_number.svg" class="icon-img-left"> Get a 12-digit GTN
          Number  </li>
        <li class="icon-title"><img src="images/share-gtn.svg" class="icon-img-left"> Share the GTN Number
          the receive  </li>
      </ul>
       
    </div>
    <div class="col-md-6">
      <ul style="list-style: none;">
        <li class="icon-title"> Visit the nearest
          GCC Remit Location  <img src="images/visitneargccremit.svg" class="icon-img"> </li>
        <li class="icon-title"> Share the 12-Digit GTN<br>
          Number and Identity Proof <img src="images/gtn_number.svg" class="icon-img"> </li>
        <li class="icon-title"> Receive the money <img src="images/receive_money-service.svg" class="icon-img"></li>
      
      </ul>
    </div>
  </div>
</div>
<div class="row" style="background-color: #169B4D;">
  &nbsp;
</div>  
  </div>
  <div class="container-fluid" style="background-color: #2E388C; padding: 48px 160px;">
    <div class="row"><div class="col-md-4"></div>
 
  <div class="col-md-4">
    <p class="text-center section-title-style2 ">Product & Services</p></div>
  <div class="col-md-4"></div>
</div>
   
  <div class="row">
    <div class="col-md-6">
      <div class="card mb-3" >
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="images/cashpickup.svg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Cash Pickup</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="col-md-2 square " >
            <i class="fa fa-angle-right" aria-hidden="true" style="color: #fff; font-size: 40px;"></i>
            
          </div>
        </div>
      </div>
      <div class="card mb-3 " >
        <div class="row no-gutters ">
          <div class="col-md-4">
            <img src="images/cashtomobile.svg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Cash To Mobile</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        
        <div class="col-md-2 square " >
            <i class="fa fa-angle-right" aria-hidden="true" style="color: #fff; font-size: 40px;"></i>
            
          </div>
          </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card mb-3 " >
        <div class="row no-gutters ">
          <div class="col-md-4">
            <img src="images/cashtohome.svg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Cash To Home
              </h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          
          <div class="col-md-2 square " >
            <i class="fa fa-angle-right" aria-hidden="true" style="color: #fff; font-size: 40px;"></i>
            
          </div>
          <!-- <div id="DivForHoverItem">
            <div id="HiddenText"><p>Hidden text</p> <i class="fa fa-angle-right" aria-hidden="true" style="color: #fff; font-size: 40px;"></i></div>
          </div> -->
        </div>
      </div>
      <div class="card mb-3" >
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="images/cashtoaccount.svg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Cash To Account</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="col-md-2 square " >
            <i class="fa fa-angle-right" aria-hidden="true" style="color: #fff; font-size: 40px;"></i>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid " style=" background-size:cover;background:linear-gradient(0deg, rgba(22, 155, 77, 0.801), rgba(22, 155, 77, 0.801)), url(images/chooseyour_regionbg.jpg); background-repeat: no-repeat;padding: 120px; ">
 
  
 <div class="row">
   <div class="col-md-6">
   <h1 style="color: #fff;">CHOOSE YOUR REGION</h1>
   <h4 style="color: #fff;">Located in more than 90 countries - easy to find</h4>
   <select class="selectedbox text-right" id="exampleFormControlSelect1">
    <option selected>India</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
   </div>
   <div class="col-md-6">
  <img src="images/chooseregion_map.svg" width="100%" >
   
  </div>
</div>
</div>
<div class="container-fluid" style=" background-size:cover;background:linear-gradient(0deg, rgba(10, 83, 160, 0.801), rgba(10, 83, 160, 0.801)),url(images/aboutus.jpg); background-repeat: no-repeat;padding: 65px; ">
  <div class="row">
    <div class="col-md-3">
      <img src="images/footerlogo.png"><br><br>
      <ul style="list-style: none;" class="footer-text">  
        <li><img src="images/call-white.svg"></i>
          +971-4-4432003  </li>
        <li><img src="images/fax-white.svg"> +971-4-4431884  </li>
        <li><img src="images/email-white.svg"> info@gccremit.com
        </li>
      </ul>
    </div>
    <div class="col-md-2">
      
      <ul style="list-style: none;" class="footer-text">  
        <li class="footer-title"> QUICK LINKS</li>

        <li> Who We Are   </li>
        <li>Why GCC Remit  </li>
        <li> FAQs 
        </li>
      </ul>
    </div>
    <div class="col-md-2">
      
      <ul style="list-style: none;" class="footer-text">  
        <li class="footer-title"> TECHNOLOGY </li>
        <li> System Integration </li>
        <li>API  </li>
        <li>FTP </li>
        <li> FAQs 
        </li>
      </ul>
    </div>
    <div class="col-md-2">
     
      <ul style="list-style: none;" class="footer-text">  
        <li class="footer-title">OUR SERVICES  </li>
        <li> Send Money   </li>
        <li>Receive Money    </li>
        <li>Why GCC Remit  </li>
        <li>Become an Agent FAQs 
        </li>
      </ul>
    </div>
    <div class="col-md-3">
    
      <ul style="list-style: none;" class="footer-text">  
        <li class="footer-title">CONTACT US </li>
        <li> Address </li>
        <li> Get in Touch  </li>
        <li>Careers  </li>
       
      </ul>
     
    </div>
   <div class="row">
    <div class="col-md-4">
      </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-4 text-center">
        
        <i class="fab fa-facebook"></i>
        <i class="fab fa-whatsapp"></i>
        <i class="fab fa-twitter"></i>
        
        <i class="fab fa-youtube"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin"></i>
      </div>
   </div>
  </div>

</div>
<div class="row">
  <div class="col-md-12 text-center" style="padding: 34px;background-color: black;color: #fff;">
    AML POLICY | PRIVACY POLICY | FEEDBACK FORM | DISCLAIMER
  </div>
</div>


</body>
</html>
<script>
  function showMe(evt) {
    console.log("evt.value ",evt.value);
  }
  function makeDd() {
    'use strict';
    let json = new Function(`return ${document.getElementById('json_data').innerHTML}`)();
    /*  new MsDropdown("#json_dropdown", {
          byJson: {
              data: json, selectedIndex:1
          }
      })*/
    MsDropdown.make("#json_dropdown", {
      byJson: {
        data: json, selectedIndex:0
      }
    });
  }

</script>
<script src="./dist/js/dd.min.js?ver=4.0"></script>