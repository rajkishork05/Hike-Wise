<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account</title>
    <link rel="stylesheet" href="./account.css" />
  </head>
  <body>
    <form id="form" class="whole_login" action="./userLogin.php" method="POST">
      <header class="wl_header">HIKEWISE</header>
      <div class="wl_main">
        <div class="wl_m_label">email</div>
        <input
          type="text"
          name="username"
          class="wl_m_input"
          placeholder="email"
        />
      </div>
      <div class="wl_main">
        <div class="wl_m_label">password</div>
        <input
          type="text"
          name="password"
          class="wl_m_input"
          placeholder="password"
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
        <a href="./signup.php" class="a">Signup?</a>
      </div>
    </form>
  </body>
  <script>
    let select = document.getElementById("select");
    let form = document.getElementById("form");
    select.onchange = () => {
      if (select.value == "tourist") {
        form.action = "./userLogin.php";
      } else {
        form.action = "./guideLogin.php";
      }
    };
  </script>
</html>
