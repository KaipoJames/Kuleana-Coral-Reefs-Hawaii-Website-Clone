<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Submission | Kuleana Coral Reefs Hawaii</title>
    <link rel="stylesheet" href="./styles/global.css" />
    <link rel="stylesheet" href="./styles/header.css" />
    <link rel="stylesheet" href="./styles/response.css" />
  </head>
  <body>
    <div class="root">
    <header>
        <div id="header-container">
          <div id="logo-container" class="flex-center">
            <img
              id="logo"
              src="./assets/img/logo.webp"
              alt="logo-img"
              loading="lazy"
            />
          </div>
          <nav id="nav" class="flex-center">
            <ul id="nav-links">
              <!-- prettier-ignore -->
              <li class="nav-item"> <a href="./index.html">Home</a> </li>
              <!-- <a class="nav-item active" href="./index.html"><li class="active-text">Home</li></a> -->
              <li class="nav-item dropdown" id="our-work-dropdown">
                <a href="#" class="dropdown-a">Our Work</a>
                <div class="hover-helper"></div>
                <ul class="sub-menu sub-menu1">
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item"><a href="./coral.html">Coral Restoration</a></li>
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item"><a href="./mapping.html">Monitoring and Mapping</a></li>
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item"><a href="./education.html">Education</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown" id="about-dropdown">
                <a href="#" class="dropdown-a">About</a>
                <div class="hover-helper"></div>
                <ul class="sub-menu sub-menu2" id="about-ul">
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item"><a href="./our-story.html">Our Story</a></li>
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item"><a href="./culture.html">Hawaiian Culture and Values</a></li>
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item"><a href="./coastal.html">Coral Reef Benefits</a></li>
                </ul>
              </li>
              <!-- prettier-ignore -->
              <li class="nav-item" id="nav-science"><a href="./science.html">Science</a></li>
              <!-- prettier-ignore -->
              <li class="nav-item" id="nav-get-involved"><a href="./involved.html">Get Involved</a></li>
              <!-- prettier-ignore -->
              <li class="nav-item" id="nav-donate"><a href="https://charity.gofundme.com/o/en/campaign/kuleana-coral-reefs" target="_blank">Donate</a></li>
              <li class="nav-item dropdown" id="more-dropdown">
                <a href="#" class="dropdown-a">More</a>
                <div class="hover-helper"></div>
                <ul class="sub-menu sub-menu3">
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item" id="more-our-story"><a href="./our-story.html">Our Story</a></li>
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item" id="more-hawaiian"><a href="./culture.html">Hawaiian Culture and Values</a></li>
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item" id="more-coastal"><a href="./coastal.html">Coral Reef Benefits</a></li>
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item" id="more-science"><a href="./science.html">Science</a></li>
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item"><a href="./involved.html">Get Involved</a></li>
                  <!-- prettier-ignore -->
                  <li class="sub-menu-item"><a href="https://charity.gofundme.com/o/en/campaign/kuleana-coral-reefs" target="_blank">Donate</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <ul class="social-links">
            <li>
              <!-- prettier-ignore -->
              <a href="https://www.instagram.com/kuleanacoral/" target="_blank"><img class="ig-img" src="./assets/icon/instagram.webp" alt="" loading="lazy" /></a>
            </li>
            <li>
              <!-- prettier-ignore -->
              <a href="https://www.facebook.com/kuleanacoral/" target="_blank"><img class="fb-img" src="./assets/icon/facebook.webp" alt="" loading="lazy" /></a>
            </li>
            <li>
              <!-- prettier-ignore -->
              <a href="https://twitter.com/kuleanacoral" target="_blank"><img class="twitter-img" src="./assets/icon/twitter.webp" alt="" loading="lazy" /></a>
            </li>
            <li>
              <!-- prettier-ignore -->
              <a href="https://www.pinterest.com/kuleanacoralreefs/_created/" target="_blank"><img class="pinterest-img" src="./assets/icon/pinterest.webp" alt="" loading="lazy" /></a>
            </li>
            <li>
              <!-- prettier-ignore -->
              <a href="https://www.youtube.com/channel/UCX995XFEmrCilxHxGntKmag" target="_blank"><img class="yt-img" src="./assets/icon/youtube.webp" alt="" loading="lazy" /></a>
            </li>
          </ul>
        </div>
      </header>

      <main>
        <div class="response">
          <div class="content">
            <h1>Thank you <?php echo $_GET["first_name"]?>!</h1>
            <p>
              We appreciate the time you took to respond to us and we will be in
              touch shorty!
            </p>
          </div>
        </div>
      </main>

      <footer>
        <div id="footer-container">
          <div class="footer-links">
            <ul class="footer-ul social-links">
              <li>
                <!-- prettier-ignore -->
                <a href="https://www.instagram.com/kuleanacoral/" target="_blank">
                  <img class="ig-img" src="./assets/icon/instagram.webp" alt="" loading="lazy" />
                </a>
              </li>
              <li>
                <!-- prettier-ignore -->
                <a href="https://www.facebook.com/kuleanacoral/" target="_blank">
                  <img class="fb-img" src="./assets/icon/facebook.webp" alt="" loading="lazy" />
                </a>
              </li>
              <li>
                <!-- prettier-ignore -->
                <a href="https://twitter.com/kuleanacoral" target="_blank">
                  <img class="twitter-img" src="./assets/icon/twitter.webp" alt="" loading="lazy" />
                </a>
              </li>
              <li>
                <!-- prettier-ignore -->
                <a href="https://www.pinterest.com/kuleanacoralreefs/_created/" target="_blank">
                  <img class="pinterest-img" src="./assets/icon/pinterest.webp" alt="" loading="lazy" />
                </a>
              </li>
              <li>
                <!-- prettier-ignore -->
                <a href="https://www.youtube.com/channel/UCX995XFEmrCilxHxGntKmag" target="_blank">
                  <img class="yt-img" src="./assets/icon/youtube.webp" alt="" loading="lazy" />
                </a>
              </li>
            </ul>
          </div>
          <h3 id="footer-text">
            © 2020 Kuleana Coral Reefs is a registered nonprofit organization
            under Section 501(c)3 of the Internal Revenue Code.
          </h3>
        </div>
      </footer>
    </div>
  </body>
</html>
