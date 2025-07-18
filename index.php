<?php
  require("./db/connection.php");
  require("./db/find.php");
  $all = getAll($conn,"trek");
  $allGuide = getAll($conn,"guide");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./index.css" />
  </head>
  <body>
    <header class="header">
      <div class="logo">HIKEWISE</div>
      <nav class="nav_section">
        <a href="#trek" class="a">Treks</a>
        <a href="#guides" class="a">Guides</a>
        <a href="./about" class="a">About</a>
        <a href="./contact" class="a">Contact</a>
      </nav>
      <div class="search">
        <div class="insearch">
          <input
            type="text"
            class="in_search_input"
            placeholder="Search trek"
          />
          <svg
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="s_svg"
          >
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g
              id="SVGRepo_tracerCarrier"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M16.6725 16.6412L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                stroke="#000000"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></path>
            </g>
          </svg>
        </div>
      </div>
      <a class="auth_section" href="/hikewise/account">
        <svg
          viewBox="0 0 24 24"
          class="account_svg"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g
            id="SVGRepo_tracerCarrier"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></g>
          <g id="SVGRepo_iconCarrier">
            <path
              opacity="0.4"
              d="M12 2C9.38 2 7.25 4.13 7.25 6.75C7.25 9.32 9.26 11.4 11.88 11.49C11.96 11.48 12.04 11.48 12.1 11.49C12.12 11.49 12.13 11.49 12.15 11.49C12.16 11.49 12.16 11.49 12.17 11.49C14.73 11.4 16.74 9.32 16.75 6.75C16.75 4.13 14.62 2 12 2Z"
              fill="#fff"
            ></path>
            <path
              d="M17.0809 14.1499C14.2909 12.2899 9.74094 12.2899 6.93094 14.1499C5.66094 14.9999 4.96094 16.1499 4.96094 17.3799C4.96094 18.6099 5.66094 19.7499 6.92094 20.5899C8.32094 21.5299 10.1609 21.9999 12.0009 21.9999C13.8409 21.9999 15.6809 21.5299 17.0809 20.5899C18.3409 19.7399 19.0409 18.5999 19.0409 17.3599C19.0309 16.1299 18.3409 14.9899 17.0809 14.1499Z"
              fill="#fff"
            ></path>
          </g>
        </svg>
      </a>
    </header>

    <div class="section1">
      <img src="./images/img.jpg" alt="" class="section1_img" />
    </div>

    <div class="section2" id="trek">
      <div class="title_section">Our Best Treks</div>
      <div class="des_section">
        “Conquer Heights, Create Memories – Discover the Best Treks with Us!"
      </div>

      <div class="section2_imgs">

        <?php

        for($i = 0;$i<count($all);$i++){
          ?>

<div class="section2_img_indi">
          <div class="s2_img_div">
            <img src="./uploads/<?php echo $all[$i]["image"] ?>" alt="" class="s2_img_img" />
          </div>
          <div class="s2_trek_name"><?php echo $all[$i]["name"] ?> · <?php echo $all[$i]["km"] ?>km · <?php echo $all[$i]["day"] ?>D/<?php echo $all[$i]["night"] ?>N</div>
          
          <div class="bn_btn_s2" onclick="display_booking('<?php echo $all[$i]['id'] ?>', 'trek')">Book now</div>
        </div>

          <?php
        }

        ?>

        
      </div>
    </div>

    <div class="section2" id="guides">
      <div class="title_section">Our Guides</div>
      <div class="des_section">
        "Leading You to Peaks, Stories, and Adventures – Your Trusted Trek
        Guides!"
      </div>
      <div class="section2_imgs">
        <?php
          for($i = 0;$i<count($allGuide);$i++){
            ?>
              <div class="section2_img_indi">
          <div class="s2_img_div">
            <img src="./uploads/<?php echo $allGuide[$i]["image"] ?>" alt="" class="s2_img_img" />
          </div>
          <div class="s2_trek_name"><?php echo $allGuide[$i]["name"] ?> · <?php echo $allGuide[$i]["contactNumber"] ?></div>
          
          <div class="bn_btn_s2" onclick="display_booking('<?php echo $allGuide[$i]['id'] ?>', 'guide')">Book now</div>
        </div>
            <?php
          }
        ?>
        
      </div>
    </div>

    <div class="aside_right">
      <div class="ar_left" onclick="close_booking()"></div>
      <form method="post" action="./booking.php" class="ar_main">
        <div class="ar_title">Booking</div>
        <div class="ar_input_section">
          <div class="ar_i_label">Name</div>
          <input type="text" name="name" class="ar_input" placeholder="Enter your name" />
        </div>
        <div class="ar_input_section">
          <div class="ar_i_label">Email</div>
          <input type="text" name="email" class="ar_input" placeholder="Enter your email" />
        </div>
        <div class="ar_input_section">
          <div class="ar_i_label">Date</div>
          <input type="date" name="date" class="ar_input" placeholder="Enter your name" />
        </div>
        <div class="ar_input_section">
          <div class="ar_i_label">Number of people</div>
          <input name="people" type="number" class="ar_input" placeholder="Enter number of people" />
        </div>
        <div class="ar_input_section">
          <div class="ar_i_label">Choose Guide</div>
          <select name="guide" id="" class="ar_input_select">
            <?php
          for($i = 0;$i<count($allGuide);$i++){
            ?>

            <option value="<?php echo $allGuide[$i]["id"] ?>"><?php echo $allGuide[$i]["name"]  ?></option>

            <?php
          }
            ?>
          </select>
        </div>
        <div class="ar_input_section">
          <div class="ar_i_label">Choose Trek</div>
          <select name="trek" id="" class="ar_input_select">
            <?php
          for($i = 0;$i<count($all);$i++){
            ?>

            <option value="<?php echo $all[$i]["id"] ?>"><?php echo $all[$i]["name"]  ?></option>

            <?php
          }
            ?>
          </select>
        </div>
        <div class="ar_input_section">
          <button class="ar_input_btn">Book</button>
        </div>
        </form>
    </div>

    <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .why-choose-us {
      padding: 50px;
      background-color: #f9f9f9;
    }

    .why-choose-us h1 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .why-choose-us .content {
      display: flex;
      gap: 30px;
    }

    .why-choose-us .content .text {
      flex: 1;
    }

    .why-choose-us .content .text p {
      font-size: 16px;
      line-height: 1.6;
      color: #555;
    }

    .why-choose-us .content .images-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
      flex: 1;
    }

    .why-choose-us .content .images-grid img {
      width: 100%;
      border-radius: 8px;
      object-fit: cover;
    }

  </style>

  <section class="why-choose-us">
    <h1>Why Choose Us</h1>
    <div class="content">
      <div class="text">
        <i>"Discover, Explore, and Create Memories That Last a Lifetime."</i>
        <p>"Choosing the right travel companion is essential for a seamless and enriching journey. At HikeWise, we bridge the gap between your wanderlust and reality, offering tailored travel experiences that cater to every need. With years of expertise, a passion for exploration, and a commitment to excellence, we’ve crafted a platform that connects you with trusted guides, and unforgettable adventures.</p>
          <p>Whether you seek serene escapes, thrilling expeditions, or cultural immersions, we are here to turn your travel dreams into cherished memories.</p>
          <p> Let us take care of the details while you embrace the journey!"</p>
      </div>
      <div class="images-grid">
        <img src="imagesGrid/img1.jpg" alt="Image 1">
        <img src="imagesGrid/img2.jpg" alt="Image 2">
        <img src="imagesGrid/img3.jpg" alt="Image 3">
        <img src="imagesGrid/img4.jpg" alt="Image 4">
      </div>
    </div>
  </section>
  <footer>
    <div class="footer-container">
      <!-- Social Media Section -->
      <div class="social-media">
        <h4>Follow Us:</h4>
        <div class="social-icons">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube" ></i></a>
          <a href="#"><i class="fab fa-facebook" ></i></a>
        </div>
      </div>

      <!-- Links Section -->
      <div class="footer-links">
        <div>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div>
          <ul>
            <li><a href="#">Policies</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Website Privacy</a></li>
            <li><a href="#">Terms & Condition</a></li>
          </ul>
        </div>
      </div>

      <!-- Contact Info Section -->
      <div class="contact-info">
        <h4>Contact Info</h4>
        
        <div class="item">
        <i class="fas fa-map-marker-alt"></i>
        <span>Address: Hikewise, Kothiyalsain <br> Near IT Gopeshwar CHAMOLI-246424, Uttarakhand</span>
        </div>
        <div class="item">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <span>Phone: 8534044586 (Mon-Sat 10 AM to 10 PM)</span>
        </div>
        <div class="item">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        <span>Email: <a href="mailto:info@hikewise.com">info@hikewise.com</a></span>
        </div>
    
      </div>
    </div>
    <div class="footer-bottom">
      <p>2024 Hikewise. All rights reserved</p>
    </div>
  </footer>

    <div class="es"></div>
  </body>
  <script>
    function display_booking(id, type) {
      let a = document.getElementsByClassName("aside_right")[0];
      a.style.display = "flex";
    }

    function close_booking() {
      let a = document.getElementsByClassName("aside_right")[0];
      a.style.display = "none";
    }

    // display_booking();
  </script>
</html>
