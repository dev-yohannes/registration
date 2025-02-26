<!DOCTYPE html>
<html>

<head>
  <title>Projection by TEMPLATED</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../../assets/css/main.css" />
</head>

<body>
  <!-- Header -->
  <header id="header">
    <div class="inner">
      <a href="index.html" class="logo"><strong>Projection</strong> by TEMPLATED</a>
      <nav id="nav">
        <a href="../adminProfile.php">Admin Profile</a>
        <a href="../usersProfile.php">Users Profile</a>
        <a href="../logout.php">Logout</a>
      </nav>
      <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    </div>
  </header>

  <!-- Banner -->
  <section id="banner">
    <div class="inner">
      <header>
        <?php
        session_start();

        echo "<h1>Welcome, " . $_SESSION['sess_username'] . " to Projection</h1>";
        ?>
      </header>

      <div class="flex">
        <div>
          <span class="icon fa-car"></span>
          <h3>Aliquam</h3>
          <p>Suspendisse amet ullamco</p>
        </div>

        <div>
          <span class="icon fa-camera"></span>
          <h3>Elementum</h3>
          <p>Class aptent taciti ad litora</p>
        </div>

        <div>
          <span class="icon fa-bug"></span>
          <h3>Ultrices</h3>
          <p>Nulla vitae mauris non felis</p>
        </div>
      </div>

      <footer>
        <a href="#" class="button">Get Started</a>
      </footer>
    </div>
  </section>

  <!-- Three -->
  <section id="three" class="wrapper align-center">
    <div class="inner">
      <div class="flex flex-2">
        <article>
          <div class="image round">
            <img src="images/pic01.jpg" alt="Pic 01" />
          </div>
          <header>
            <h3>
              Lorem ipsum<br />
              dolor amet nullam
            </h3>
          </header>
          <p>
            Morbi in sem quis dui placerat ornare. Pellentesquenisi<br />euismod
            in, pharetra a, ultricies in diam sed arcu. Cras<br />consequat
            egestas augue vulputate.
          </p>
          <footer>
            <a href="#" class="button">Learn More</a>
          </footer>
        </article>
        <article>
          <div class="image round">
            <img src="images/pic02.jpg" alt="Pic 02" />
          </div>
          <header>
            <h3>
              Sed feugiat<br />
              tempus adipicsing
            </h3>
          </header>
          <p>
            Pellentesque fermentum dolor. Aliquam quam lectus<br />facilisis
            auctor, ultrices ut, elementum vulputate, nunc<br />
            blandit ellenste egestagus commodo.
          </p>
          <footer>
            <a href="#" class="button">Learn More</a>
          </footer>
        </article>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="footer">
    <div class="inner">
      <h3>Get in touch</h3>

      <form action="#" method="post">
        <div class="field half first">
          <label for="name">Name</label>
          <input name="name" id="name" type="text" placeholder="Name" />
        </div>
        <div class="field half">
          <label for="email">Email</label>
          <input name="email" id="email" type="email" placeholder="Email" />
        </div>
        <div class="field">
          <label for="message">Message</label>
          <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
        </div>
        <ul class="actions">
          <li>
            <input value="Send Message" class="button alt" type="submit" />
          </li>
        </ul>
      </form>

      <div class="copyright">
        &copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>.
        Images: <a href="https://unsplash.com">Unsplash</a>.
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>