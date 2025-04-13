<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>educonnect hub website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.navbar {
        background-color: #035096;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .search-bar {
        display: flex;
        align-items: center;
        margin-left: auto; /* Keeps search bar to the right */
    }

    .search-bar select,
    .search-bar button {
        padding: 8px 12px; /* Uniform padding for all elements */
        margin-left: 5px; /* Spacing between elements */
        font-size: 16px; /* Readable font size */
        color: #035096;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px; /* Rounded corners */
    }

    .search-bar button {
        cursor: pointer; /* Hand cursor on hover */
        border-color: #035096; /* Specific border color for button */
    }

    /* Dynamically show the second dropdown when needed */
    #subCategory {
        display: none; /* Hidden by default */
    }
    
    #subCategory.visible {
        display: block; /* Show dropdown when it has the 'visible' class */
    }
/* Styling the navigation bar */
.navbar {
  background-color:#035096;
  color: #fff;
  display: flex;
  justify-content: space-between; /* Change to space-between to push items to the edges */
  align-items: center;
  padding: 30px 20px;
} 

.search-bar {
  display: right;
  align-items: center;
}

.search-bar > div {
  display: right;
  align-items: center;
}

.search-bar {
  margin-left: 0; /* Remove the margin */
  margin-right: 20px; /* Add margin to the right */
}

/* Styling the logo */
.navbar h1 {
  margin-right: auto; 
  font-size: 24px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

/* Styling the navigation links */
.navbar ul {
  list-style-type: none;
  display: flex;
}

.navbar ul li {
  margin-right: 20px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.navbar ul li a {
  text-decoration: none;
  color: #fff;
  transition: color 0.3s;
}

.navbar ul li a:hover {
  color: yellow;
}


.search-bar input[type="text"] {
  padding: 10px;
  border: none;
  border-radius: 5px;
  margin-right: 10px;
  width: 300px;
}

.search-bar input[type="text"]::placeholder {
  color: #ccc;
}

.search-bar select {
  padding: 10px;
  border: none;
  border-radius: 5px;
}

.search-bar select option {
  color: black;
}

.search-bar button {
  padding: 10px 20px;
  background-color: #efcc00;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-left: 10px;
}


.search-bar button:hover {
  background-color: #555;
}

        .header {
            width: 100%;
            height: 100vh;
            background: url("gb.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
       
        .content {
            display: flex;
            flex-direction: row-reverse; /* Align content to the left */
            position: absolute;
            justify-content: space-between;
            align-items: center;
            margin-top: 10%;
            margin-right: 3%; /* Adjusted margin-right */
        }
        .content img {
            display: block;
            width: 490px;
            cursor: pointer;
            animation: updown 1s linear infinite;
            animation-delay: 1s;
        }
        @keyframes updown {
            0% {
                transform: translateY(-5px);
                opacity: 1;
            }
            50% {
                transform: translateY(5px);
                opacity: 1;
            }
            100% {
                transform: translateY(-5px);
                opacity: 1;
            }
        }
        .navbar {
    background-color: #035096;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    /* If you use position fixed or absolute, adjust below */
    /* position: fixed; */
    /* width: 100%; */
    /* top: 0; */
    /* left: 0; */
}


/* Ensure that animations for p tags stagger correctly */
@keyframes slideleftp {
    0% {
        transform: translateX(-100px);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}
 /* Adjusted margin-left */

.titles {
    width: 50%; /* Adjusted width */
    display: auto;
    position: relative;
    margin-top: 15%;
    margin-left: 3%; /* Adjusted margin-left */
}

.titles h1 {
    color: #1f4b68;
    font-size: 52px;
    line-height: 30px;
    animation: slidelefth1 1s linear forwards;
    opacity: 0;
    animation-delay: 0s;
    text-align: relative; /* Aligning the text to the left */
}
        @keyframes slidelefth1 {
            0% {
                transform: translate(-180px); /* Adjusted translate */
                opacity: 0;
            }
            100% {
                transform: translate(0px);
                opacity: 1;
            }
        }
        .titles p {
    color: #163661;
    width: 100%;
    font-size: 17px;
    animation: slideleftp 1s linear forwards;
    opacity: 0;
    animation-delay: 1s;
    display: block;
    position: relative;
    text-align: left; /* Aligning the text to the left */
    margin-top: 10spx; /* Adding margin-top for spacing */
}
        @keyframes slideleftp {
            0% {
                transform: translate(-180px); /* Adjusted translate */
                opacity: 0;
            }
            100% {
                transform: translate(0px);
                opacity: 1;
            }
        }
        .titles button {
            font-size: 15px;
            border-style: none;
            padding: 12px 23px;
            border-radius: 30px;
            font-weight: 600;
            letter-spacing: 1px;
            border: 2px solid #fff;
            color: #030303;
            background-color: #ff8968;
            animation: button 1s linear forwards;
            opacity: 0;
            animation-delay: 2s;
            cursor: pointer;
        }
        .titles button:hover {
            background-color: transparent;
        }
        @keyframes button {
            0% {
                transform: translate(-180px); /* Adjusted translate */
                opacity: 0;
            }
            100% {
                transform: translate(0px);
                opacity: 1;
            }
        }
        * Styling for tagline */
        .tagline-container {
  display: flex;
  margin-top: 10%;
  align-items: center;
  justify-content: space-around;
}

.tagline-photo {
  max-width: 100%; /* Adjusted width */
  margin-top: 10%;
  display: flex;
}

.tagline {
  text-align: center; 
  margin-right: 50px;
  font-size: 20px; /* Adjusted font size */
  font-weight: bold;
}

p {
  padding: 0 10px; /* Adjusted padding */
  scroll-margin-right: 50px; /* Moved the paragraphs to the right */
  font-display: flex;
  font-size: 100%;
}


.nav-item .nav-link:hover {
  color: #efcc00;
  /* text-decoration: underline; */
}
.container {
            display: flex;
            /*background-image: url('back.jpg'); */
            justify-content: center;
            align-items: center;
            height: 50vh; /* Set height to viewport height */
        }
        .card {
            background-color: lightgoldenrodyellow; /* Light Purple */
            margin: 0 20px; /* Add margin between cards */
        }
        .btn {
            background-color: #fff; /* White */
            padding: 0.375rem 0.75rem; /* Reduced button size */
            font-size: 0.875rem; /* Reduced font size */
            color: black; /* Text color */
            transition: none; /* Remove transition effect */
        }
        .btn:hover {
            background-color: #fff; /* Maintain white background on hover */
            color: black; /* Maintain black text color on hover */
        }
        footer {
            background-color: #035096; /* Dark blue */
            color: #fff; /* White text */
            padding: 3px 0; /* Add some padding top and bottom */
            margin-bottom: 20%;
            text-align: center; /* Center align text */
        }

        footer p {
            margin-bottom: 10px; /* Add some bottom margin for spacing */
        }

        .social-icons {
            list-style: none; /* Remove bullet points */
            padding: 0; /* Remove default padding */
        }

        .social-icons li {
            display: inline-block; /* Display social icons inline */
            margin-right: 10px; /* Add some right margin for spacing */
        }

        .social-icons a {
            color: #fff; /* White icon color */
            font-size: 20px; /* Adjust icon size */
        }

    </style>
</head>

  <body>
    <form id="searchForm">
    <section class="header">
        <div class="navbar">
            <h1>EduConnect Hub</h1>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="blogs.html">Blogs</a></li>
            </ul>
        
            <div class="search-bar">
              <select id="category" onchange="updateSearchOptions()">
                  <option value="">Search for schools, colleges...</option>
                  <option value="Schools">Schools</option>
                  <option value="Pre-University">Pre-University</option>
                  <option value="Undergraduate">Undergraduate</option>
                  <option value="Post Graduate">Post Graduate</option>
              </select>
              <!-- Ensure the subCategory dropdown is initially visible -->
              <select id="subCategory"></select>
              <button type="submit">Search</button> 
          </div>
        </div>
        <div class="titles">
          <h1>EduConnect Hub</h1>
          <p><b>"Where knowledge meets opportunity, and connections shape futures."</b></p>
          <p>This Website is a gateway to a world of educational resources, networking opportunities, 
              and professional development.</p>
          <button><a href="knowmore">know more</a></button>
      </div>
    </section>
    <script>
      function updateSearchOptions() {
          var category = document.getElementById("category").value;
          var subCategory = document.getElementById("subCategory");
  
          if (category === "Schools") {
              // Show the subCategory dropdown
              subCategory.style.display = 'block';
  
              // Populate with specific options
              subCategory.innerHTML = ''; // Clear existing options first
              ["State", "CBSE", "ICSE"].forEach(function(item) {
                  var option = document.createElement("option");
                  option.value = option.textContent = item;
                  subCategory.appendChild(option);
              });
          } else {
              // Hide the subCategory dropdown if 'Schools' is not selected
              subCategory.style.display = 'none';
          }
      }
  
      document.getElementById("searchForm").addEventListener("submit", function(event) {
          event.preventDefault(); // Prevent default form submission
          var category = document.getElementById("category").value;
          var subCategory = document.getElementById("subCategory").value;
  
          console.log("Category: ", category);
          console.log("Subcategory: ", subCategory);
  
          // Redirect based on the selected category and subcategory
          if (category === "Schools") {
              if (subCategory === "State") {
                  window.location.href = "http://localhost/school.php";
              } else if (subCategory === "CBSE") {
                  window.location.href = "http://localhost/cbse.php";
              }
              else if(subCategory === "ICSE") {
                  window.location.href = "http://localhost/icse.php";
              }
          } else {
              // Submit the form normally if category is not "Schools"
              this.submit();
          }
      });
  </script>
  
    
  
    <script>
        function updateSearchOptions() {
            var category = document.getElementById("category").value;
            var subCategory = document.getElementById("subCategory");
  
            if (category === "Schools") {
                // Show the subCategory dropdown
                subCategory.style.display = 'block';
  
                // Populate with specific options
                subCategory.innerHTML = ''; // Clear existing options first
                ["State", "CBSE", "ICSE"].forEach(function(item) {
                    var option = document.createElement("option");
                    option.value = option.textContent = item;
                    subCategory.appendChild(option);
                });
            } else {
                // Hide the subCategory dropdown if 'Schools' is not selected
                subCategory.style.display = 'none';
            }
        }
    </script>
            
            </body>
            </body>
            
        </div>
        <section>
        <div class="tagline-container">
            <img src="nav.jpg" class="tagline-photo">
         
          </div>
          <h3 style="text-align: center; margin-top: 10px; font-size: 30px;">Exploree Careers</h3>
<p style="text-align: center; margin-top: 10px; font-size: 20px;">Explore your preferred streams to learn about the relevant schools, colleges, and more!</p>
          <div class="d-flex justify-content-center">
            <ul class="nav nav-underline">
                <li class="nav-item">
                  <a class="nav-link" href="#">Primary Education(KG-7th grade)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Secondary Education(8th -10th grade)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pre-University</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Undergraduate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Postgraduate</a>
                  </li>
              </ul>
              </div>
              <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="shanti.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Shanti Sadhan</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  
                  <div class="carousel-item">
                    <img src="JSS.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>JSS Central School</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="classic.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Classic</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Contact Us</h3>
                            <p>Address:SDMCET, Dharwad, India</p>
                            <p>Email: EduConnect@gamil.com</p>
                            <p>Phone: +1234567890</p>
                        </div>
                        <div class="col-md-6">
                            <h3>Follow Us</h3>
                            <p>instagram: EduConnect123</p>
                            <p>facebook: eduhub</p>
                            <!-- Add social icons -->
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <!-- Add more social icons as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        

        </section>
    </section>
  
       
        </div>
       
         
      
   
      </div>
      
    </body>
    </html>