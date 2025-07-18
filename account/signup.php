<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link rel="stylesheet" href="./account.css" />
  </head>
  <body>
    <form
      enctype="multipart/form-data"
      id="form"
      class="whole_login"
      action="./userSignup.php"
      method="POST"
    >
      <header class="wl_header">HIKEWISE</header>
      <div class="wl_main">
        <div class="wl_m_label">name</div>
        <input
          type="text"
          name="name"
          class="wl_m_input"
          placeholder="enter your name"
          required
        />
      </div>
      <div class="wl_main">
        <div class="wl_m_label">email</div>
        <input
          type="email"
          name="email"
          class="wl_m_input"
          placeholder="Enter your email address"
          required
        />
      </div>
      <div class="wl_main">
        <div class="wl_m_label">password</div>
        <input
          type="password"
          name="password"
          class="wl_m_input"
          placeholder="Enter a strong password"
          required
        />
      </div>
      <div class="wl_main">
        <div class="wl_m_label">contact</div>
        <input
          type="number"
          name="number"
          class="wl_m_input"
          placeholder="Enter your contact number"
          required
        />
      </div>
      <div class="wl_main" id="only_guide">
        <div class="wl_m_label">profile image</div>
        <label for="img_input" id="img_input_label" class="wl_m_input_file"
          >Choose a profile picture</label
        >
        <input
          id="img_input"
          type="file"
          name="image"
          class="wl_m_input"
          placeholder="Enter your contact number"
          hidden
          onchange="fileinput()"
        />
      </div>
      <div class="wl_main">
        <div class="wl_m_label">type</div>
        <select name="" id="select" class="wl_m_input_select">
          <option value="tourist">Tourist</option>
          <option value="guide">Guide</option>
        </select>
      </div>
      <div class="wl_main">
        <!-- <div class="wl_m_label">login</div> -->
        <input type="submit" class="wl_m_input_btn" placeholder="password" />
      </div>
      <div class="wl_main_else">
        <a href="./" class="a">login?</a>
      </div>
    </form>
  </body>
  <script>
    let select = document.getElementById("select");
    let form = document.getElementById("form");
    let only_guide = document.getElementById("only_guide");
    select.onchange = () => {
      if (select.value == "tourist") {
        form.action = "./userSignup.php";
        only_guide.style.display = "none";
      } else {
        form.action = "./guideSignup.php";
        only_guide.style.display = "block";
      }
    };

    function fileinput() {
      let img_input = document.getElementById("img_input");
      let img_input_label = document.getElementById("img_input_label");
      img_input_label.innerText =
        img_input.value.split("\\")[img_input.value.split("\\").length - 1];
      img_input_label.style.color = "black";
    }
  </script>
</html>
