<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Kontak</title>
    <link rel="stylesheet" href="{{ asset('themes/ezone/assets/css/contact.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{ asset('themes/ezone/assets/js/app2.js') }}"></script>
    
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="{{ asset('themes/ezone/assets/img/favicon.png') }}" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Silahkan Hubungi Kami!</h3>
          <p class="text">
           Untuk pemesanan dan pertanyaan bisa langsung hubungi info kontak ini ya.
          </p>

          <div class="info">
            <div class="information">
              <img src="{{ asset('themes/ezone/assets/img/contact/location.png') }}" class="icon" alt="" />
              <p>Boyolali, Salatiga, Semarang</p>
            </div>
            <div class="information">
              <img src="{{ asset('themes/ezone/assets/img/contact/email.png') }}" href="thinkthrift24@gmail.com" class="icon" alt="" />
              <p>thinkthrift@gmail.com</p>
            </div>
            <div class="information">
              <img src="{{ asset('themes/ezone/assets/img/contact/phone.png') }}" class="icon" alt="" />
              <p>085876690907</p>
            </div>
          </div>

          <div class="social-media">
            <p>Jangan Lupa Kepoin Kita :</p>
            <div class="social-icons">
            <a href="https://www.youtube.com/@parshayt1626/videos">
              <i class='bx bxl-youtube' ></i>
          </a>
              <a href="#">
                <i class="bx bxl-twitter"></i>
              </a>
              <a href="https://www.instagram.com/thinkthrift2024/">
                <i class='bx bxl-instagram' ></i>
              </a>
              <a href="https://api.whatsapp.com/send/?phone=6285876690907&text&type=phone_number&app_absent=0">
                <i class='bx bxl-whatsapp' ></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
