<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Trek</title>
    <link rel="stylesheet" href="./index.css" />
  </head>
  <body>
    <form
      enctype="multipart/form-data"
      id="form"
      class="whole_login"
      action="./addingTrek.php"
      method="POST"
    >
      <header class="wl_header">HIKEWISE</header>
      <div class="wl_main">
        <div class="wl_m_label">name</div>
        <input
          type="text"
          name="name"
          class="wl_m_input"
          placeholder="enter trek name"
          required
        />
      </div>
      <div class="wl_main">
        <div class="wl_m_label">from</div>
        <input
          type="text"
          name="from"
          class="wl_m_input"
          placeholder="Enter from where the trek start"
          required
        />
      </div>
      <div class="wl_main">
        <div class="wl_m_label">to</div>
        <input
          type="text"
          name="to"
          class="wl_m_input"
          placeholder="Enter where does the trek end"
          required
        />
      </div>
      <div class="wl_main">
        <div class="wl_m_label">km</div>
        <input
          type="number"
          name="km"
          class="wl_m_input"
          placeholder="Enter the distance of the trek"
          required
        />
      </div>
      <div class="wl_main">
        <div class="wl_m_label">day</div>
        <input
          type="number"
          name="day"
          class="wl_m_input"
          placeholder="Enter the number of days"
          required
        />
      </div>
      <div class="wl_main">
        <div class="wl_m_label">night</div>
        <input
          type="number"
          name="night"
          class="wl_m_input"
          placeholder="Enter the number of nights"
          required
        />
      </div>
      <div class="wl_main" id="only_guide">
        <div class="wl_m_label">trek image</div>
        <label for="img_input" id="img_input_label" class="wl_m_input_file"
          >Choose a trek picture</label
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
      <!-- <div class="wl_main">
        <div class="wl_m_label">type</div>
        <select name="" id="select" class="wl_m_input_select">
          <option value="tourist">Tourist</option>
          <option value="guide">Guide</option>
        </select>
      </div> -->
      <div class="wl_main">
        <!-- <div class="wl_m_label">login</div> -->
        <input type="submit" class="wl_m_input_btn" placeholder="password" />
      </div>
      <!-- <div class="wl_main_else">
        <a href="" class="a">Signup?</a>
      </div> -->
    </form>
  </body>
  <script>
    // let select = document.getElementById("select");
    let form = document.getElementById("form");
    // let only_guide = document.getElementById("only_guide");
    // select.onchange = () => {
    //   if (select.value == "tourist") {
    //     form.action = "./userSignup.php";
    //     only_guide.style.display = "none";
    //   } else {
    //     form.action = "./guideSignup.php";
    //     only_guide.style.display = "block";
    //   }
    // };

    function fileinput() {
      let img_input = document.getElementById("img_input");
      let img_input_label = document.getElementById("img_input_label");
      img_input_label.innerText =
        img_input.value.split("\\")[img_input.value.split("\\").length - 1];
      img_input_label.style.color = "black";
    }
  </script>
</html>
