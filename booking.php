<!DOCTYPE html>
<html>
<title>Booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
              crossorigin="anonymous">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
                integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" 
                crossorigin="anonymous"/>
          
        </head>
<style>
    .footer .box-container{
        color: white;
        text-decoration: none;
        background-image: url("footer.jpg");
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(10rem,0.5fr));
        gap:2rem;
        padding-top: 30px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 30px
    }
    
        .footer .box-container.box h3{
            text-decoration: none;
            font-size: 2.5rem;
            text-transform: uppercase;
            color: lightseagreen;
            padding: 1rem-0;
            
        }
        .box a{
            text-decoration: none;
            display: block;
            font-size: 1.0rem;
            color: lightseagreen;
            padding: 1rem-0;
    }
body {
  font-family: Verdana, sans-serif;
  margin: 0;
  background: #222;
}

*{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all .2s linear;
        }

        .row{
            padding-left: 10px;
            padding-right: 10px;
        }
.row > .col {
  padding: 0 0px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.col {
  float: left;
  width: 25%;
  padding-left: 10px;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}
.mySlides2 {
  display: none;
}
.mySlides3 {
  display: none;
}
.mySlides4 {
  display: none;
}
.mySlides5 {
  display: none;
}
.mySlides6 {
  display: none;
}
.mySlides7 {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 35%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.gallery img {
  margin-bottom: -4px;
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}


.demo {
  opacity: 0.6;
}

.demo2 {
  opacity: 0.6;
}

.demo3 {
  opacity: 0.6;
}
.demo4 {
  opacity: 0.6;
}
.demo5 {
  opacity: 0.6;
}
.demo6{
  opacity: 0.6;
}
.demo7{
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.demo2:hover {
  opacity: 1;
}

.demo3:hover {
  opacity: 1;
}
.demo4:hover {
  opacity: 1;
}
.demo5:hover {
  opacity: 1;
}
.demo6:hover {
  opacity: 1;
}
.demo7:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 1s;
}

.hover-shadow:hover {
    box-shadow: 0 3px 5px #000;
  transform: scale(1.4);
  height: 200px;
    width: 300px;
    margin: 20px;
    border-radius: 5px;           
    overflow: hidden;
}
.gallery{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 90%;
            margin: 0 auto;
            
        }
   
        
     .t.box-container1{
        color: white;
        text-decoration: none;
        background-image: url("footer.jpg");
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(10rem,0.5fr));
        gap:2rem;
        padding-top: 30px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 30px
    }
    
    .t.box-container1.box1 h3{
            text-decoration: none;
            font-size: 2.5rem;
            text-transform: uppercase;
            color: lightseagreen;
            padding: 1rem-0;
            
    }
    .dropdown {
        float: left;
        overflow: hidden;
      }

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 10px 15px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  width: 170px;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-top: -10px;
  padding-right: 10px;
  padding-left: 10px;
  padding-top: 5px;
  padding-bottom: 5px;
 
}
 .dropdown-content a {
  float: none;
  color: black;
  padding: 0px 0px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}  
.menu-bar{
        background-image: linear-gradient(-90deg,#9eb4ca ,#f6f8fa);
    }
    .navbar-nav{
        margin-left: 40px;
    }
    .navbar-nav a:link {
            font-family: Georgia;
            font-size: 22px;
            text-decoration: none;
            text-align: center;
        }
        .navbar-light .navbar-nav .nav-link{
            color: black;
        }
        .navbar-light .navbar-nav .nav-link:visited {
            color: black;
        }
        .navbar-light .navbar-nav .nav-link:hover{
             font-weight:  600;
            border-bottom: 1px solid #ffffff;
        }
        @media screen and (min-width: 992px){
            .navbar-brand img{
                width: 100px;
            }
            .navbar .container-fluid{
                flex-direction: column;
            }
            .navbar .navbar-nav .nav-item{
                padding: .5em 1em;
            }
        }
        .navbar-brand{
            margin-right: 0px;
        }
        #aboutUs{
            padding: 30px 70px 10px 70px;
            text-align: justify;
            line-height: 30px;
        }
        #aboutUs_part2{
            padding: 10px 70px 30px 70px;
            text-align: justify;
            line-height: 30px;
        }
        footer{
            width:100%;
            text-align: center;
            background-color: #475993;
            color: white;
            padding: 10px 0px 10px 0px;
        }
        .navbar-toggler {
           border: 0 !important;
       }
       .navbar-toggler:focus,
       .navbar-toggler:active,
       .navbar-toggler-icon:focus {
           outline: none !important;
           box-shadow: none !important;
           border: 0 !important;
           align-content: right;
       }

       /* Lines of the Toggler */
       .toggler-icon{
           width: 30px;
           height: 3px;
           background-color: #e74c3c;
           display: block;
           transition: all 0.2s;
       }

       /* Adds Space between the lines */
       .middle-bar{
           margin: 5px auto;
       }

       /* State when navbar is opened (START) */
       .navbar-toggler .top-bar {
           transform: rotate(45deg);
           transform-origin: 10% 10%;
       }

       .navbar-toggler .middle-bar {
           opacity: 0;
           filter: alpha(opacity=0);
       }

       .navbar-toggler .bottom-bar {
           transform: rotate(-45deg);
           transform-origin: 10% 90%;
       }
       /* State when navbar is opened (END) */

       /* State when navbar is collapsed (START) */
       .navbar-toggler.collapsed .top-bar {
           transform: rotate(0);
       }

       .navbar-toggler.collapsed .middle-bar {
           opacity: 1;
           filter: alpha(opacity=100);
       }

       .navbar-toggler.collapsed .bottom-bar {
           transform: rotate(0);
       }
       /* State when navbar is collapsed (END) */

       /* Color of Toggler when collapsed */
       .navbar-toggler.collapsed .toggler-icon {
           background-color: #777777;
       }
       
       .logout{
           float:right; 
           margin-top: 10px;
           margin-right: 20px; 
           width: 100px;
       }
       /*end of menu CSS*/
    
       
   
    @media only screen and (max-width: 600px) {
        .navbar-nav{
             text-align: center;
            margin-left: 0px;
            
        }
        .logout{
           float:right; 
           margin-top: -25px; 
           margin-left: 200px;
           width: 100px;
       }
    }
        
            
 
</style>
<body>
        <div class="menu-bar">
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
      <a class="nav-item nav-link" href="homepage.php" style="padding-top:18px;font-family: 'Comic Sans MT', cursive">Home </a>
          </li>
          <li class="nav-item">
      <a class="nav-item nav-link" href="about.php"style="padding-top:18px;font-family: 'Comic Sans MT', cursive">About Us<span class="sr-only">(current)</span></a>
          </li>
          <a class="navbar-brand" href="demo.php"> <img src="logo.png" width="110" height="100" align="center"></a>
          <div class="dropdown">
          <li class="nav-item">
              <a class="nav-item nav-link dropbtn"href="booking.php"style="padding-top:15px;font-family: 'Brush Script MT', cursive">Portfolio<span class="sr-only">(current)</span> 
                  <i class="fa fa-caret-down"></i></a>
              <div class="dropdown-content">
               <a href="form.php">Booking</a>
              </div>
          </li>
          </div> 
          <li class="nav-item">
      <a class="nav-item nav-link " href="contact.php"style="padding-top:18px;font-family: 'Comic Sans MT', cursive">Contact Us</a>
          </li>
        </ul>
    </div>
  </div>
        
    </div>
       <div class="logout"><button><a href="logout_user.php" style="text-decoration:none">Log Out</a></button></div>
  </nav>
</div> 
    
<h2 style="text-align:center;color: whitesmoke">Our Event Services</h2>
<p style="padding-left:50px;color: whitesmoke">Company Event
    </br>
Opening, Product / Services Launching, Meetings, Conventions, Exhibition, Roadshow, Family Day, Anniversary & Annual Dinner.

</p>
<div class="gallery">
    

<div class="row">
  <div class="col">
    <img src="company.small.jpg"style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="company1.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="company2.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="company3.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>
    <div class="row">
    <div class="col">
    <img src="company4.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="company5.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="company6.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="company7.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
</div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
      
      <div class="mySlides">
      <div class="numbertext">1 / 7</div>
      <img src="company.small.jpg" style="width:100%;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 8</div>
      <img src="company1.jpg" style="width:100%;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 8</div>
      <img src="company2.jpg" style="width:100%;">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 8</div>
      <img src="company3.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">5 / 8</div>
      <img src="company4.jpg" style="width:100%;">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">6 / 8</div>
      <img src="company5.jpg" style="width:100%;">
    </div>
      
    <div class="mySlides">
      <div class="numbertext">7 / 8</div>
      <img src="company6.jpg" style="width:100%;">
    </div>
      
      <div class="mySlides">
      <div class="numbertext">8 / 8</div>
      <img src="company7.jpg" style="width:100%;">
    </div>
   
   
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
    
    <div class="row">
    <div class="col">
        <img class="demo cursor" src="company.small.jpg" style="width:100%" onclick="currentSlide(1)" alt="Company / Factory events"> 

    </div>
    <div class="col">
      <img class="demo cursor" src="company1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Clown Show">
    </div>
    <div class="col">
      <img class="demo cursor" src="company2.jpg" style="width:100%" onclick="currentSlide(3)" alt="Family Games">
    </div>
    <div class="col">
      <img class="demo cursor" src="company3.jpg" style="width:100%" onclick="currentSlide(4)" alt="Kids Game Booth">
    </div>
    <div class="col">
      <img class="demo cursor" src="company4.jpg" style="width:100%" onclick="currentSlide(5)" alt="Food Truck">
    </div>
    <div class="col">
      <img class="demo cursor" src="company5.jpg" style="width:100%" onclick="currentSlide(6)" alt="Pop-Up Stall">
    </div>
    <div class="col">
      <img class="demo cursor" src="company6.jpg" style="width:100%" onclick="currentSlide(7)" alt="Marathon">
    </div>
    <div class="col">
      <img class="demo cursor" src="company7.jpg" style="width:100%" onclick="currentSlide(8)" alt="Dance Performance">
    </div>
    </div>
  </div>
</div>

</br>

<p style="padding-left:50px;color: whitesmoke">Entertainment
    </br>
     Master of Ceremony, music bands, singers, dancers, cultural show, international cabaret show, magic show, fashion show, dragon / lion dance, 24 drums performance, plastic man, games arrangement and etc."
</p>
<div class="gallery">
    

<div class="row">
  <div class="col">
    <img src="perform.jpg"style="width:100%" onclick="openModal2();currentSlide2(1)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="liondance.jpeg" style="width:100%" onclick="openModal2();currentSlide2(2)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="arrangement.jpeg" style="width:100%" onclick="openModal2();currentSlide2(3)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="clown.jpg" style="width:100%" onclick="openModal2();currentSlide2(4)" class="hover-shadow cursor">
  </div>
</div>
    <div class="row">
    <div class="col">
    <img src="24drum.jpg" style="width:100%" onclick="openModal2();currentSlide2(5)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="cabaret.jpg" style="width:100%" onclick="openModal2();currentSlide2(6)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="show.jpg" style="width:100%" onclick="openModal2();currentSlide2(7)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="fashion.jpg" style="width:100%" onclick="openModal2();currentSlide2(8)" class="hover-shadow cursor">
  </div>
</div>
</div>

<div id="myModal2" class="modal">
  <span class="close cursor" onclick="closeModal2()">&times;</span>
  <div class="modal-content">
      
      <div class="mySlides2">
      <div class="numbertext">1 / 7</div>
      <img src="perform.jpg" style="width:100%;">
    </div>

    <div class="mySlides2">
      <div class="numbertext">2 / 8</div>
      <img src="liondance.jpeg" style="width:100%;">
    </div>

    <div class="mySlides2">
      <div class="numbertext">3 / 8</div>
      <img src="arrangement.jpeg" style="width:100%;">
    </div>

    <div class="mySlides2">
      <div class="numbertext">4 / 8</div>
      <img src="clown.jpg" style="width:100%">
    </div>
    
    <div class="mySlides2">
      <div class="numbertext">5 / 8</div>
      <img src="24drum.jpg" style="width:100%;">
    </div>
    
    <div class="mySlides2">
      <div class="numbertext">6 / 8</div>
      <img src="cabaret.jpg" style="width:100%;">
    </div>
      
    <div class="mySlides2">
      <div class="numbertext">7 / 8</div>
      <img src="show.jpg" style="width:100%;">
    </div>
      
      <div class="mySlides2">
      <div class="numbertext">8 / 8</div>
      <img src="fashion.jpg" style="width:100%;">
    </div>
   
   
    <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides2(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption2"></p>
    </div>
    
    <div class="row">
    <div class="col">
        <img class="demo2 cursor" src="perform.jpg" style="width:100%" onclick="currentSlide2(1)" alt="Master of Ceremony">
           
    </div>
    <div class="col">
      <img class="demo2 cursor" src="liondance.jpeg" style="width:100%" height="115px" onclick="currentSlide2(2)" alt="Ci jie lion dance performance">
    </div>
    <div class="col">
      <img class="demo2 cursor" src="arrangement.jpeg" style="width:100%" onclick="currentSlide2(3)" alt="Games Arrangement">
    </div>
    <div class="col">
      <img class="demo2 cursor" src="clown.jpg" style="width:100%" onclick="currentSlide2(4)" alt="Clown Show">
    </div>
    <div class="col">
      <img class="demo2 cursor" src="24drum.jpg" style="width:100%" height="115px" onclick="currentSlide2(5)" alt="Chinese 24 season drum">
    </div>
    <div class="col">
      <img class="demo2 cursor" src="cabaret.jpg" style="width:100%" height="115px" onclick="currentSlide2(6)" alt="international cabaret show">
    </div>
    <div class="col">
      <img class="demo2 cursor" src="show.jpg" style="width:100%" height="115px" onclick="currentSlide2(7)" alt="Music band">
    </div>
    <div class="col">
      <img class="demo2 cursor" src="fashion.jpg" style="width:100%" height="115px" onclick="currentSlide2(8)" alt="Fashion Show">
    </div>
    </div>
  </div>
</div>

</br>

<p style="padding-left:50px;color: whitesmoke">Theme & Decoration
    </br>
    Ballroom / event venue entrance / walkway, flower, balloons, backdrop, banners (art designing, printing materials and etc).
</p>
<div class="gallery">
    

<div class="row">
  <div class="col">
    <img src="ballrom.jpg"style="width:100%" onclick="openModal3();currentSlide3(1)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="walkway.jpg" style="width:100%" onclick="openModal3();currentSlide3(2)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="entrance.jpg" style="width:100%" onclick="openModal3();currentSlide3(3)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="design.jpg" style="width:100%" onclick="openModal3();currentSlide3(4)" class="hover-shadow cursor">
  </div>
</div>
    <div class="row">
    <div class="col">
    <img src="balloon.jpg" style="width:100%" onclick="openModal3();currentSlide3(5)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="backdrop.jpg" style="width:100%" onclick="openModal3();currentSlide3(6)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="banners.jpg" style="width:100%" onclick="openModal3();currentSlide3(7)" class="hover-shadow cursor">
  </div>
    
</div>
</div>

<div id="myModal3" class="modal">
  <span class="close cursor" onclick="closeModal3()">&times;</span>
  <div class="modal-content">
      
      <div class="mySlides3">
      <div class="numbertext">1 / 7</div>
      <img src="ballrom.jpg" style="width:100%;">
    </div>

    <div class="mySlides3">
      <div class="numbertext">2 / 8</div>
      <img src="walkway.jpg" style="width:100%;">
    </div>

    <div class="mySlides3">
      <div class="numbertext">3 / 8</div>
      <img src="entrance.jpg" style="width:100%;">
    </div>

    <div class="mySlides3">
      <div class="numbertext">4 / 8</div>
      <img src="design.jpg" style="width:100%">
    </div>
    
    <div class="mySlides3">
      <div class="numbertext">5 / 8</div>
      <img src="balloon.jpg" style="width:100%;">
    </div>
    
    <div class="mySlides3">
      <div class="numbertext">6 / 8</div>
      <img src="backdrop.jpg" style="width:100%;">
    </div>
      
    <div class="mySlides3">
      <div class="numbertext">7 / 8</div>
      <img src="banners.jpg" style="width:100%;">
    </div>
      
     
   
   
    <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides3(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption3"></p>
    </div>
    
    <div class="row">
    <div class="col">
        <img class="demo3 cursor" src="ballrom.jpg" style="width:100%" onclick="currentSlide3(1)" alt="Decoration Dinner table">
    </div>
    <div class="col">
      <img class="demo3 cursor" src="walkway.jpg" style="width:100%" height="130px" onclick="currentSlide3(2)" alt="Walkway">
    </div>
    <div class="col">
      <img class="demo3 cursor" src="entrance.jpg" style="width:100%" height="130px"onclick="currentSlide3(3)" alt="Event venue entrance">
    </div>
    <div class="col">
      <img class="demo3 cursor" src="design.jpg" style="width:100%"height="130px" onclick="currentSlide3(4)" alt="Flower Design">
    </div>
    <div class="col">
      <img class="demo3 cursor" src="balloon.jpg" style="width:100%"height="130px" onclick="currentSlide3(5)" alt="Balloon Design">
    </div>
    <div class="col">
      <img class="demo3 cursor" src="backdrop.jpg" style="width:100%"height="130px" onclick="currentSlide3(6)" alt="Wedding backdrop">
    </div>
    <div class="col">
      <img class="demo3 cursor" src="banners.jpg" style="width:100%"height="130px" onclick="currentSlide3(7)" alt="Banner Design">
    </div>
    
    </div>
  </div>
</div>

</br>

<p style="padding-left:50px;color: whitesmoke">Team-Building
    </br>
    Tele-match, sports games, water sports activities, paintball, treasure hunt and etc.
</p>
<div class="gallery">
    

<div class="row">
  <div class="col">
    <img src="teambuilding.jpg"style="width:100%" onclick="openModal4();currentSlide4(1)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="equipment.jpeg" style="width:100%" onclick="openModal4();currentSlide4(2)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="reaction.jpeg" style="width:100%" onclick="openModal4();currentSlide4(3)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="dogeball.jpg" style="width:100%" onclick="openModal4();currentSlide4(4)" class="hover-shadow cursor">
  </div>
</div>
    <div class="row">
    <div class="col">
    <img src="passing.jpg" style="width:100%" onclick="openModal4();currentSlide4(5)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="sandcastle.jpg" style="width:100%" onclick="openModal4();currentSlide4(6)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="ball.jpg" style="width:100%" onclick="openModal4();currentSlide4(7)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="water.jpg" style="width:100%" onclick="openModal4();currentSlide4(8)" class="hover-shadow cursor">
  </div>
</div>
</div>

<div id="myModal4" class="modal">
  <span class="close cursor" onclick="closeModal4()">&times;</span>
  <div class="modal-content">
      
      <div class="mySlides4">
      <div class="numbertext">1 / 7</div>
      <img src="teambuilding.jpg" style="width:100%;">
    </div>

    <div class="mySlides4">
      <div class="numbertext">2 / 8</div>
      <img src="equipment.jpeg" style="width:100%;">
    </div>

    <div class="mySlides4">
      <div class="numbertext">3 / 8</div>
      <img src="reaction.jpeg" style="width:100%;">
    </div>

    <div class="mySlides4">
      <div class="numbertext">4 / 8</div>
      <img src="dogeball.jpg" style="width:100%">
    </div>
    
    <div class="mySlides4">
      <div class="numbertext">5 / 8</div>
      <img src="passing.jpg" style="width:100%;">
    </div>
    
    <div class="mySlides4">
      <div class="numbertext">6 / 8</div>
      <img src="sandcastle.jpg" style="width:100%;">
    </div>
      
    <div class="mySlides4">
      <div class="numbertext">7 / 8</div>
      <img src="ball.jpg" style="width:100%;">
    </div>
      
      <div class="mySlides4">
      <div class="numbertext">8 / 8</div>
      <img src="water.jpg" style="width:100%;">
    </div>
   
   
    <a class="prev" onclick="plusSlides4(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides4(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption4"></p>
    </div>
    
    <div class="row">
    <div class="col">
      <img class="demo4 cursor" src="teambuilding.jpg" style="width:100%" onclick="currentSlide4(1)" alt="Teambuilding">
    </div>
    <div class="col">
      <img class="demo4 cursor" src="equipment.jpeg" style="width:100%" onclick="currentSlide4(2)" alt="Telematch games equipment">
    </div>
    <div class="col">
      <img class="demo4 cursor" src="reaction.jpeg" style="width:100%" onclick="currentSlide4(3)" alt="Chained Reaction">
    </div>
    <div class="col">
      <img class="demo4 cursor" src="dogeball.jpg" style="width:100%"height="115px" onclick="currentSlide4(4)" alt="Sands Doegball">
    </div>
    <div class="col">
      <img class="demo4 cursor" src="passing.jpg" style="width:100%" height="115px"onclick="currentSlide4(5)" alt="Passing Hula Hoop">
    </div>
    <div class="col">
      <img class="demo4 cursor" src="sandcastle.jpg" style="width:100%" onclick="currentSlide4(6)" alt="Building Sandcastle">
    </div>
    <div class="col">
      <img class="demo4 cursor" src="ball.jpg" style="width:100%"height="115px" onclick="currentSlide4(7)" alt="VolleyBall Competition">
    </div>
    <div class="col">
      <img class="demo4 cursor" src="water.jpg" style="width:100%"height="115px" onclick="currentSlide4(8)" alt="Passing Water">
    </div>
    </div>
  </div>
</div>

</br>

<p style="padding-left:50px;color: whitesmoke">Equipment Rental
    </br>
    Sound & lighting systems, Karaoke system, LCD projector & screen, meeting & conference equipment (speaker phone), canopy, tents, banquet tables & chairs, inflatable games.
</p>
<div class="gallery">
    

<div class="row">
  <div class="col">
    <img src="stand.jpg"style="width:100%" onclick="openModal5();currentSlide5(1)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="que.jpg" style="width:100%" onclick="openModal5();currentSlide5(2)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="board.jpg" style="width:100%" onclick="openModal5();currentSlide5(3)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="roll.jpg" style="width:100%" onclick="openModal5();currentSlide5(4)" class="hover-shadow cursor">
  </div>
</div>
    <div class="row">
    <div class="col">
    <img src="speaker.jpg" style="width:100%" onclick="openModal5();currentSlide5(5)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="pa.jpg" style="width:100%" onclick="openModal5();currentSlide5(6)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="light.png" style="width:100%" onclick="openModal5();currentSlide5(7)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="led.jpg" style="width:100%" onclick="openModal5();currentSlide5(8)" class="hover-shadow cursor">
  </div>
</div>
</div>

<div id="myModal5" class="modal">
  <span class="close cursor" onclick="closeModal5()">&times;</span>
  <div class="modal-content">
      
      <div class="mySlides5">
      <div class="numbertext">1 / 7</div>
      <img src="stand.jpg" style="width:100%;">
    </div>

    <div class="mySlides5">
      <div class="numbertext">2 / 8</div>
      <img src="que.jpg" style="width:100%;">
    </div>

    <div class="mySlides5">
      <div class="numbertext">3 / 8</div>
      <img src="board.jpg" style="width:100%;">
    </div>

    <div class="mySlides5">
      <div class="numbertext">4 / 8</div>
      <img src="roll.jpg" style="width:100%">
    </div>
    
    <div class="mySlides5">
      <div class="numbertext">5 / 8</div>
      <img src="speaker.jpg" style="width:100%;">
    </div>
    
    <div class="mySlides5">
      <div class="numbertext">6 / 8</div>
      <img src="pa.jpg" style="width:100%;">
    </div>
      
    <div class="mySlides5">
      <div class="numbertext">7 / 8</div>
      <img src="light.png" style="width:100%;">
    </div>
      
      <div class="mySlides5">
      <div class="numbertext">8 / 8</div>
      <img src="led.jpg" style="width:100%;">
    </div>
   
   
    <a class="prev" onclick="plusSlides5(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides5(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption5"></p>
    </div>
    
    <div class="row">
    <div class="col">
      <img class="demo5 cursor" src="stand.jpg" style="width:100%" onclick="currentSlide5(1)" alt="Weeding Backdrop Stand (Gold)">
    </div>
    <div class="col">
      <img class="demo5 cursor" src="que.jpg" style="width:100%" onclick="currentSlide5(2)" alt="Queue Stand">
    </div>
    <div class="col">
      <img class="demo5 cursor" src="board.jpg" style="width:100%" onclick="currentSlide5(3)" alt="Sign Stand">
    </div>
    <div class="col">
      <img class="demo5 cursor" src="roll.jpg" style="width:100%" onclick="currentSlide5(4)" alt="Roll Up Stand">
    </div>
    <div class="col">
      <img class="demo5 cursor" src="speaker.jpg" style="width:100%" onclick="currentSlide5(5)" alt="Speaker Sound System">
    </div>
    <div class="col">
      <img class="demo5 cursor" src="pa.jpg" style="width:100%" onclick="currentSlide5(6)" alt="Pa System Full Set">
    </div>
    <div class="col">
      <img class="demo5 cursor" src="light.png" style="width:100%" onclick="currentSlide5(7)" alt="Big Dipper Wholesale Rental Light ">
    </div>
    <div class="col">
      <img class="demo5 cursor" src="led.jpg" style="width:100%" onclick="currentSlide5(8)" alt="Led Light Rental">
    </div>
    </div>
  </div>
</div>

</br>

<p style="padding-left:50px;color: whitesmoke"> Gifts & Souvenirs 
    </br>
    Award trophies, hampers, shopping vouchers, exclusive premiums (bags, caps, t-shirts, jackets, uniforms, watch, clocks, umbrella, pens, flags, lanyards, non-woven bags, mugs, USB memory keys, key-chains and etc
</p>
<div class="gallery">
    

<div class="row">
  <div class="col">
    <img src="pendrive.jpeg"style="width:100%" onclick="openModal6();currentSlide6(1)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="keychain.jpeg" style="width:100%" onclick="openModal6();currentSlide6(2)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="diary.jpg" style="width:100%" onclick="openModal6();currentSlide6(3)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="mug.jpg" style="width:100%" onclick="openModal6();currentSlide6(4)" class="hover-shadow cursor">
  </div>
</div>
    <div class="row">
    <div class="col">
    <img src="bottle.jpg" style="width:100%" onclick="openModal6();currentSlide6(5)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="medal.jpg" style="width:100%" onclick="openModal6();currentSlide6(6)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="trophy.png" style="width:100%" onclick="openModal6();currentSlide6(7)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="pen.jpg" style="width:100%" onclick="openModal6();currentSlide6(8)" class="hover-shadow cursor">
  </div>
</div>
</div>



<div id="myModal6" class="modal">
  <span class="close cursor" onclick="closeModal6()">&times;</span>
  <div class="modal-content">
      
      <div class="mySlides6">
      <div class="numbertext">1 / 7</div>
      <img src="pendrive.jpeg" style="width:100%;">
    </div>

    <div class="mySlides6">
      <div class="numbertext">2 / 8</div>
      <img src="keychain.jpeg" style="width:100%;">
    </div>

    <div class="mySlides6">
      <div class="numbertext">3 / 8</div>
      <img src="diary.jpg" style="width:100%;">
    </div>

    <div class="mySlides6">
      <div class="numbertext">4 / 8</div>
      <img src="mug.jpg" style="width:100%">
    </div>
    
    <div class="mySlides6">
      <div class="numbertext">5 / 8</div>
      <img src="bottle.jpg" style="width:100%;">
    </div>
    
    <div class="mySlides6">
      <div class="numbertext">6 / 8</div>
      <img src="medal.jpg" style="width:100%;">
    </div>
      
    <div class="mySlides6">
      <div class="numbertext">7 / 8</div>
      <img src="trophy.png" style="width:100%;">
    </div>
      
      <div class="mySlides6">
      <div class="numbertext">8 / 8</div>
      <img src="pen.jpg" style="width:100%;">
    </div>
   
   
    <a class="prev" onclick="plusSlides6(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides6(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption6"></p>
    </div>
    
    <div class="row">
    <div class="col">
      <img class="demo6 cursor" src="pendrive.jpeg" style="width:100%" onclick="currentSlide6(1)" alt="Pendrive (request from Mem???">
    </div>
    <div class="col">
      <img class="demo6 cursor" src="keychain.jpeg" style="width:100%" onclick="currentSlide6(2)" alt="Keychain(request from dell)">
    </div>
    <div class="col">
      <img class="demo6 cursor" src="diary.jpg" style="width:100%" onclick="currentSlide6(3)" alt="Diary">
    </div>
    <div class="col">
      <img class="demo6 cursor" src="mug.jpg" style="width:100%" onclick="currentSlide6(4)" alt="Mug ">
    </div>
    <div class="col">
      <img class="demo6 cursor" src="bottle.jpg" style="width:100%" onclick="currentSlide6(5)" alt="Water Bottle">
    </div>
    <div class="col">
      <img class="demo6 cursor" src="medal.jpg" style="width:100%"height="115px" onclick="currentSlide6(6)" alt="Medal">
    </div>
    <div class="col">
      <img class="demo6 cursor" src="trophy.png" style="width:100%" onclick="currentSlide6(7)" alt="Trophy">
    </div>
    <div class="col">
      <img class="demo6 cursor" src="pen.jpg" style="width:100%" onclick="currentSlide6(8)" alt="Minimal Pen">
    </div>
    </div>
  </div>
</div>

</br>

<p style="padding-left:50px;color: whitesmoke">  Travel & Tour 
    </br>
    Hotel accommodation, air-tickets, coaches, tour ground arrangement, food & beverage arrangement and etc.
</p>
<div class="gallery">
    

<div class="row">
  <div class="col">
    <img src="perhentian.jpg"style="width:100%" onclick="openModal7();currentSlide7(1)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="krabi.jpg" style="width:100%" onclick="openModal7();currentSlide7(2)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="taman.jpg" style="width:100%" onclick="openModal7();currentSlide7(3)" class="hover-shadow cursor">
  </div>
  <div class="col">
    <img src="langkawi.png" style="width:100%" onclick="openModal7();currentSlide7(4)" class="hover-shadow cursor">
  </div>
</div>
    <div class="row">
    <div class="col">
    <img src="sunway.jpg" style="width:100%" onclick="openModal7();currentSlide7(5)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="redang.png" style="width:100%" onclick="openModal7();currentSlide7(6)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="bukit.jpg" style="width:100%" onclick="openModal7();currentSlide7(7)" class="hover-shadow cursor">
  </div>
    <div class="col">
    <img src="melaka.jpg" style="width:100%" onclick="openModal7();currentSlide7(8)" class="hover-shadow cursor">
  </div>
</div>
</div>

<div id="myModal7" class="modal">
  <span class="close cursor" onclick="closeModal7()">&times;</span>
  <div class="modal-content">
      
      <div class="mySlides7">
      <div class="numbertext">1 / 7</div>
      <img src="perhentian.jpg" style="width:100%;">
    </div>

    <div class="mySlides7">
      <div class="numbertext">2 / 8</div>
      <img src="krabi.jpg" style="width:100%;">
    </div>

    <div class="mySlides7">
      <div class="numbertext">3 / 8</div>
      <img src="taman.jpg" style="width:100%;">
    </div>

    <div class="mySlides7">
      <div class="numbertext">4 / 8</div>
      <img src="langkawi.png" style="width:100%">
    </div>
    
    <div class="mySlides7">
      <div class="numbertext">5 / 8</div>
      <img src="sunway.jpg" style="width:100%;">
    </div>
    
    <div class="mySlides7">
      <div class="numbertext">6 / 8</div>
      <img src="redang.png" style="width:100%;">
    </div>
      
    <div class="mySlides7">
      <div class="numbertext">7 / 8</div>
      <img src="bukit.jpg" style="width:100%;">
    </div>
      
      <div class="mySlides7">
      <div class="numbertext">8 / 8</div>
      <img src="melaka.jpg" style="width:100%;">
    </div>
   
   
    <a class="prev" onclick="plusSlides7(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides7(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption7"></p>
    </div>
    
    <div class="row">
    <div class="col">
      <img class="demo7 cursor" src="perhentian.jpg" style="width:100%" height="115px" onclick="currentSlide7(1)" alt="Perhentian Island Resort">
    </div>
    <div class="col">
      <img class="demo7 cursor" src="krabi.jpg" style="width:100%" onclick="currentSlide7(2)" alt="Maya Bay Krabi Thailand">
    </div>
    <div class="col">
      <img class="demo7 cursor" src="taman.jpg" style="width:100%" onclick="currentSlide7(3)" alt="Mutiara Taman Negara">
    </div>
    <div class="col">
      <img class="demo7 cursor" src="langkawi.png" style="width:100%"  height="115px" onclick="currentSlide7(4)" alt="Langkawi">
    </div>
    <div class="col">
      <img class="demo7 cursor" src="sunway.jpg" style="width:100%"  height="115px" onclick="currentSlide7(5)" alt="Sunway Lagoon">
    </div>
    <div class="col">
      <img class="demo7 cursor" src="redang.png" style="width:100%"height="115px" onclick="currentSlide7(6)" alt="Pulau Redang">
    </div>
    <div class="col">
      <img class="demo7 cursor" src="bukit.jpg" style="width:100%"  height="115px" onclick="currentSlide7(7)" alt="Bukit Tinggi">
    </div>
    <div class="col">
      <img class="demo7 cursor" src="melaka.jpg" style="width:100%" height="115px"onclick="currentSlide7(8)" alt="Melaka">
    </div>
    </div>
  </div>
</div>

</br>

 <section class="footer">
    <div class="box-container">
        
        <div class="box">
            <h3>Quick links</h3>
           <a href="homepage.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg></i> Home Page</a></p>
        <a href="about.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
  <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg> About Us</a></p>
        <p><a href="demo.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg></i> Event Management Group</p><!-- comment -->
         <a href="booking.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-bell" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg> Booking</a></p>
        <a href="contact.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg></i> Contact Us</a></p>
        
        </div>
    
        <div class="box">
            <h3>Lets Go Social</h3>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg> Facebook</a></p>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg> Instagram</a></p>
        <p> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg> Twitter</a></p><!-- comment -->
 <p> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> Whatsapp</a></p><!-- comment -->
                    </div>  
       
        <div class="box">
            <h3>Contact</h3>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-envelope-heart" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l3.235 1.94a2.76 2.76 0 0 0-.233 1.027L1 5.384v5.721l3.453-2.124c.146.277.329.556.55.835l-3.97 2.443A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741l-3.968-2.442c.22-.28.403-.56.55-.836L15 11.105V5.383l-3.002 1.801a2.76 2.76 0 0 0-.233-1.026L15 4.217V4a1 1 0 0 0-1-1H2Zm6 2.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
</svg> Emgroup@gmail.com</a></p>
          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-phone-vibrate" viewBox="0 0 16 16">
  <path d="M10 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z"/>
  <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z"/>
</svg> 012-3456789</a></p>
        <p> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-geo" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
</svg></i> Location: Malaysia:Plaza Vads, No. 1,Jalan Tun Mohd Fuad,Taman Tun Dr Ismail,60000 Kuala Lumpur</a></p><!-- comment -->        
        </div>
        
      </section>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

//Entertainment
function openModal2() {
  document.getElementById("myModal2").style.display = "block";
}

function closeModal2() {
  document.getElementById("myModal2").style.display = "none";
}

var slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}

function currentSlide2(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  var i;
  var slides2 = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("demo2");
  var captionText2 = document.getElementById("caption2");
  if (n > slides2.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
      slides2[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block";
  dots[slideIndex2-1].className += " active";
  captionText2.innerHTML = dots[slideIndex2-1].alt;
  }
  //Theme/Decoration
function openModal3() {
  document.getElementById("myModal3").style.display = "block";
}

function closeModal3() {
  document.getElementById("myModal3").style.display = "none";
}

var slideIndex3 = 1;
showSlides3(slideIndex3);

function plusSlides3(n) {
  showSlides3(slideIndex3 += n);
}

function currentSlide3(n) {
  showSlides3(slideIndex3 = n);
}

function showSlides3(n) {
  var i;
  var slides3 = document.getElementsByClassName("mySlides3");
  var dots = document.getElementsByClassName("demo3");
  var captionText3 = document.getElementById("caption3");
  if (n > slides3.length) {slideIndex3 = 1}
  if (n < 1) {slideIndex3 = slides3.length}
  for (i = 0; i < slides3.length; i++) {
      slides3[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides3[slideIndex3-1].style.display = "block";
  dots[slideIndex3-1].className += " active";
  captionText3.innerHTML = dots[slideIndex3-1].alt;
}

//Telematch
function openModal4() {
  document.getElementById("myModal4").style.display = "block";
}

function closeModal4() {
  document.getElementById("myModal4").style.display = "none";
}

var slideIndex4 = 1;
showSlides4(slideIndex4);

function plusSlides4(n) {
  showSlides4(slideIndex4 += n);
}

function currentSlide4(n) {
  showSlides4(slideIndex4 = n);
}

function showSlides4(n) {
  var i;
  var slides4 = document.getElementsByClassName("mySlides4");
  var dots = document.getElementsByClassName("demo4");
  var captionText4 = document.getElementById("caption4");
  if (n > slides4.length) {slideIndex4 = 1}
  if (n < 1) {slideIndex4 = slides4.length}
  for (i = 0; i < slides4.length; i++) {
      slides4[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides4[slideIndex4-1].style.display = "block";
  dots[slideIndex4-1].className += " active";
  captionText4.innerHTML = dots[slideIndex4-1].alt;
}

//Equipment Rental
function openModal5() {
  document.getElementById("myModal5").style.display = "block";
}

function closeModal5() {
  document.getElementById("myModal5").style.display = "none";
}

var slideIndex5 = 1;
showSlides5(slideIndex5);

function plusSlides5(n) {
  showSlides5(slideIndex5 += n);
}

function currentSlide5(n) {
  showSlides5(slideIndex5 = n);
}

function showSlides5(n) {
  var i;
  var slides5 = document.getElementsByClassName("mySlides5");
  var dots = document.getElementsByClassName("demo5");
  var captionText5 = document.getElementById("caption5");
  if (n > slides5.length) {slideIndex5 = 1}
  if (n < 1) {slideIndex5 = slides5.length}
  for (i = 0; i < slides5.length; i++) {
      slides5[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides5[slideIndex5-1].style.display = "block";
  dots[slideIndex5-1].className += " active";
  captionText5.innerHTML = dots[slideIndex5-1].alt;
}

// Gifts & Souvenirs  
function openModal6() {
  document.getElementById("myModal6").style.display = "block";
}

function closeModal6() {
  document.getElementById("myModal6").style.display = "none";
}

var slideIndex6 = 1;
showSlides6(slideIndex6);

function plusSlides6(n) {
  showSlides6(slideIndex6 += n);
}

function currentSlide6(n) {
  showSlides6(slideIndex6 = n);
}

function showSlides6(n) {
  var i;
  var slides6 = document.getElementsByClassName("mySlides6");
  var dots = document.getElementsByClassName("demo6");
  var captionText6 = document.getElementById("caption6");
  if (n > slides6.length) {slideIndex6 = 1}
  if (n < 1) {slideIndex6 = slides6.length}
  for (i = 0; i < slides6.length; i++) {
      slides6[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides6[slideIndex6-1].style.display = "block";
  dots[slideIndex6-1].className += " active";
  captionText6.innerHTML = dots[slideIndex6-1].alt;
}

//  Travel & Tour  
function openModal7() {
  document.getElementById("myModal7").style.display = "block";
}

function closeModal7() {
  document.getElementById("myModal7").style.display = "none";
}

var slideIndex7 = 1;
showSlides7(slideIndex7);

function plusSlides7(n) {
  showSlides7(slideIndex7 += n);
}

function currentSlide7(n) {
  showSlides7(slideIndex7 = n);
}

function showSlides7(n) {
  var i;
  var slides7 = document.getElementsByClassName("mySlides7");
  var dots = document.getElementsByClassName("demo7");
  var captionText7 = document.getElementById("caption7");
  if (n > slides7.length) {slideIndex7 = 1}
  if (n < 1) {slideIndex7 = slides7.length}
  for (i = 0; i < slides7.length; i++) {
      slides7[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides7[slideIndex7-1].style.display = "block";
  dots[slideIndex7-1].className += " active";
  captionText7.innerHTML = dots[slideIndex7-1].alt;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
        crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" 
        crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>      
    
</body>
</html>

