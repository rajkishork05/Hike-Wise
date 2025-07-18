<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIKE WISE</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 10;
      padding: 0;
    }

    header {
      background: #333;
      color: #fff;
      padding: 10px 20px;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }

    header nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
    }

    header nav a:hover {
      text-decoration: underline;
    }

    section {
        padding: 100px 20px;
      min-height: 100vh;
    }

    #section1 {
      background-color: #f4f4f4;
    }

    #section2 {
      background-color:white;
    }

    footer {
      text-align: center;
      padding: 10px 0;
      background: #333;
      color: white;
    }
  </style>
</head>
<body>
  <!-- Header with Navigation -->
  <header>
    <nav>
      <a href="contact.html">CONTACT US</a>
      <a href="find.html">FIND US</a>
    </nav>
  </header>

  <!-- Section 1: Content from the first page -->
  <section id="section1">
    <style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f9f9f9;
        }
        .container {
          width: 80%;
          margin: auto;
          overflow: hidden;
          padding: 20px;
        }
        .form-section, .support-section {
          background: #fff;
          padding: 20px;
          margin: 20px 0;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-section h2, .support-section h2 {
          margin-top: 0;
        }
        .form-group {
          margin-bottom: 15px;
        }
        .form-group label {
          display: block;
          margin-bottom: 5px;
        }
        .form-group input, .form-group textarea, .form-group select {
          width:80%;
          padding: 10px;
          border: 1px solid #ddd;
          border-radius: 5px;
        }
        .form-group textarea {
          height: 100px;
        }
        .submit-btn {
          background: #d63333;
          color: white;
          border: none;
          padding: 10px 20px;
          cursor: pointer;
          border-radius: 5px;
        }
        .support-section ul {
          list-style: none;
          padding: 0;
        }
        .support-section ul li {
          margin-bottom: 10px;
        }
        .support-section ul li span {
          font-weight: bold;
        }
      </style>
    </head>
    
    <body>
        <div class="container">
          <!-- Contact Form -->
          <div class="form-section">
              <h2>Do you have any Query?</h2>
              <p>Please fill this form to raise your query. We will feel happy to help you.</p>
              <form action="#">
                <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input type="text" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="countryCode">Country Code</label>
                  <select id="countryCode" name="countryCode">
                    <option value="+91">+91</option>
                    <option value="+1">+1</option>
                    <option value="+44">+44</option>
                    <!-- Add more country codes as needed -->
                  </select>
                </div>
                <div class="form-group">
                  <label for="phoneNumber">Phone Number</label>
                  <input type="tel" id="phoneNumber" name="phoneNumber" required>
                </div>
                <div class="form-group">
                  <label for="description">Detailed Description</label>
                  <textarea id="description" name="description" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Submit</button
                 
                  
</section>

<!-- Section 2: Content from the second page -->
<section id="section2">
    <style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f9f9f9;
        }
        header {
          background-color:white;
          color: white;
          padding: 3px 0;
          text-align: center;
        }
        .container {
          width: 100%;
          margin: auto;
          overflow: hidden;
          padding: 10px;
        }
        .map-container {
          margin-top: 20px;
        }
        iframe {
          width: 300%;
          height: 600px;
          border: 0;
        }
        footer {
          background-color: #222;
          color: white;
          padding: 20px 0;
          text-align: center;
        }
        footer ul {
          list-style: none;
          padding: 0;
        }
        footer ul li {
          display: inline;
          margin: 0 10px;
        }
        footer ul li a {
          color: white;
          text-decoration: none;
        }
        h1{
            text-align: center;
            font-size: x-large;
            font-family: Arial, Helvetica, sans-serif;
            colour: #000;
            margin: 20px 0;
        }
      </style>
    </head>
    <body>
        <h1>FIND US</h1>
        <header>
          
        </header>
      
        <!-- Map Section -->
        <div class="container">
          <div class="map-container">
            <!-- Embed Google Map -->
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.603203573776!2d77.99225671511753!3d30.316496181796493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929b4c8f9b70f%3A0xa114cda7b3b0982f!2sTrek%20The%20Himalayas!5e0!3m2!1sen!2sin!4v1677751413322!5m2!1sen!2sin"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
</section>

<!-- Footer -->
<footer>
  <p>© 2024 HikeWise. All rights reserved.</p>
</footer>
</body>
</html>