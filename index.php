<!doctype html>
<html lang="en">
  <?php //load head tags
    $title = "Totalgard Manufacturing - Home";
    include 'src/head.php';
  ?>

  <body class="page01">
    <?php //load navbar
      include 'src/navbar.php';
    ?>

    <!-- The Modal -->

    <div class="modal fade  modal-center" id="myModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-body">
          <div class="col-12 modal-img d-none d-xl-block"><img src="images/newsletter.png" width="100%" height=""/></div>
          <div class="col-12 modal-img-mobile d-xl-none"><img src="images/newsletter.png" width="100%" height=""/></div>
          <div class="modal-title pt-5">SUBSCRIBE AND RECEIVE OUR <br>LATEST NEWS,</div>
          <div class="modal-title">EXCLUSIVE OFFERS DIRECT <br>TO YOUR INBOX!</div>
          <div class="form-group">
            <form>
              <div class="form-group">
                <label for="email">Subscribe</label>
                <table width="100%">
                  <tr class="d-flex">
                    <td width="70%">  <input type="email" class="form-control" id="email" placeholder="Enter your email here !"> </td>
                    <td width="30%">  <button type="submit" class="btn btn-danger" ><i class="fas fa-arrow-right"></i></button></td>
                  </tr>
                </table>
                <!-- Modal footer -->
                <div class="modal-footer2">
                  <button type="button" class="btn" data-dismiss="modal">No thanks, I'll pass</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!-- Modal ends -->



    <section class="content content-nomargin">
      <div class="container-fluid p-0">

<!-- Button to Open the Modal -->
        <!-- <div class="home-play"> -->
        <div class="d-none d-xl-block">
          <i class="far fa-play-circle home-play-button"></i>
          <div class="home-triangle">
            <video class="home-video" autoplay muted loop>
              <source src="images/video.mp4"
                      type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'/>
            </video>
          </div>
        </div>
        <div class="d-xl-none">
          <i class="far fa-play-circle home-play-button home-play-button-mobile"></i>
          <div class="home-triangle-mobile">
            <video class="home-video" autoplay muted loop>
              <source src="images/video-mobile.mp4"
                      type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'/>
            </video>
          </div>
        </div>

        <!-- DESKTOP -->
          <div class="d-none d-xl-block">
            <div class="slider slider-for">
                <div><div><img class="slider-img-main" src="images/home-slider-3-main.png" alt=""></div></div>
              <div><div><img class="slider-img-main" src="images/home-slider-1-main.png" alt=""></div></div>
              <div><div><img class="slider-img-main" src="images/home-slider-2-main.png" alt=""></div></div>

            </div>
            <div class="container">
              <div class="row">

                <div class="col-lg-5 offset-1">

                  <div class="slider slider-for">
                      <div>
                      <div class="home-slider-title">
                        MANUFACTURING
                      </div>
                      <div class="home-slider-text">
                        Window film manufacturing is our core business as of today. Evolving from a perspective of a window film distributor and international supplier, we understand the needs of the market around the world. Today, we have researched and developed the best way to preserve the performance of a window film by embedding various heat rejecting nano-ceramic materials into the PET base film itself via polymerization process. Also, by having a world class coating and lamination line, we are able to produce quality stable window film for our customers.
                      </div>
                    </div>
                    <div>
                      <div class="home-slider-title">
                        OEM/REM SUPPLY
                      </div>
                      <div class="home-slider-text">
                        We are able to supply to any car manufacturer with ease as we have many years of expertise, specialized installation methods and precise film cutting machinery. As of currently, we have installed over more than 1,000,000 cars directly at the car manufacturers’ venue and the numbers are still growing. With a manpower of more than 300 installers, we are able to cope with the high quantity of cars supplied by the car manufacturers.
                      </div>
                    </div>
                    <div>
                      <div class="home-slider-title">
                        PROJECT SERVICES
                      </div>
                      <div class="home-slider-text">
                        We provide solutions and services for the commercial and residential sector, where experiencing heat through windows is a common occurrence every day. We have experienced installers that are able to install window films from residential to high rise buildings. We also install window films for various corporates as well, from banks to shop lots.
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-lg-5 home-slider-top">
                  <div class=" slider slider-nav">
                      <div><div><img class="slider-img" src="images/home-slider-3.png" alt=""></div></div>
                    <div><div><img class="slider-img" src="images/home-slider-1.png" alt=""></div></div>
                    <div><div><img class="slider-img" src="images/home-slider-2.png" alt=""></div></div>
                  </div>
                </div>
              </div>
          </div>
        </div>


        <div class="d-xl-none">
          <div id="mobile-carousel" class="carousel slide" >

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active slider-img-mobile">
              <div><div><img class="slider-img-m" src="images/home-slider-3.png" alt=""></div></div>
                <div class="home-slider-title slider-mobile">
                  MANUFACTURING
                </div>
                <div class="home-slider-text slider-mobile">
                  Window film manufacturing is our core business as of today. Evolving from a perspective of a window film distributor and international supplier, we understand the needs of the market around the world. Today, we have researched and developed the best way to preserve the performance of a window film by embedding various heat rejecting nano-ceramic materials into the PET base film itself via polymerization process. Also, by having a world class coating and lamination line, we are able to produce quality table window film for our customers.
                </div>
              </div>
              <div class="carousel-item slider-img-mobile">
                <div><div><img class="slider-img-m" src="images/home-slider-1.png" alt=""></div></div>
                <div class="home-slider-title slider-mobile">
                  OEM/REM SUPPLY
                </div>
                <div class="home-slider-text slider-mobile">
                  We are able to supply to any car manufacturer with ease as we have many years of expertise, specialized installation methods and precise film cutting machinery. As of currently, we have installed over more than 1,000,000 cars directly at the car manufacturers’ venue and the numbers are still growing. With a manpower of more than 300 installers, we are able to cope with the high quantity of cars supplied by the car manufacturers.
                </div>
              </div>
              <div class="carousel-item slider-img-mobile">

                <div><div><img class="slider-img-m" src="images/home-slider-2.png" alt=""></div></div>
                <div class="home-slider-title slider-mobile">
                  PROJECT SERVICES
                </div>
                <div class="home-slider-text slider-mobile">
                  We provide solutions and services for the commercial and residential sector, where experiencing heat through windows is a common occurrence every day. We have experienced installers that are able to install window films from residential to high rise buildings. We also install window films for various corporates as well, from banks to shop lots.
                </div>
              </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#mobile-carousel" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#mobile-carousel" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
        <div class="col-sm-12 mt-5 text-center">
          <h2 class="font-weight-bold" style="letter-spacing: 2px;">SUSTAINABILITY AT TOTALGARD</h2>
          <div class="container text-center">

            <p class="col-8 offset-2">At Totalgard, sustainability is one of the upmost important thing that
            we pursue. We make use of materials which are unrecycable to produce products
          which are beneficial for people and the planet.</p>
        </div>


        <div class="container mt-5">
          <div class="row">
            <div class="col-sm">

              <div class="container-fluid text-center">
                <img class="gridicon" src="images/i_gif4.gif">
                <!-- <span class="border" style="background-color: #ED1F23; max-width: 2px; min-height: 100%;">x</span> -->
                <div class="index-title index-title-main">CUSTOMER FOCUSED</div>
                <div class="text-justify index-text">
                <p>We are seeking to build a long term and effective customer base.
        We strive to continually meet and surpass customers expectation
        as well as the industry’s standard.</p>
                </div>
              </div>


            </div>
            <!-- <div class="col-sm d-none d-xl-block" style="background-color: red; min-height: 100%; max-width: -1px"></div> -->
            <div class="col-sm">
              <div class="container-fluid text-center">
                <img class="gridicon" src="images/igif_2.gif">
                <div class="index-title">SAFETY</div>
                <div class="text-justify index-text">
                <p>Inside our manufacturing process, we strictly abide to ISO9001:2015 certification to
        ensure that our quality is consistent. All our products are MS certified.</p>
              </div>
              </div>
            </div>

            <div class="col-sm">
              <div class="container-fluid text-center">
                <img class="gridicon" src="images/igif_3.gif">
                <div class="index-title">MEASURED PERFORMANCE</div>
                <div class="text-justify index-text">
                  <p>Effectiveness is another key element that we strive for as a competitive advantage.
        We believe in embracing a well-managed business with good developments.</p>
                </div>
              </div>
            </div>

            <div class="col-sm">
              <div class="container-fluid text-center">
                <img class="gridicon" src="images/igif_4.gif">
                <div class="index-title">QUALITY DRIVEN</div>
                <div class="text-justify index-text">
                <p>We have attained merits from our customers for delivering high
        quality products and our aim is to provide maximum quality from
        the planning stage to the finish products.
              </p>
              </div>
              </div>
            </div>

          </div>
        </div>
        </div>
</div><div class="border border-danger mt-5"></div>

              <div class="container-fluid footer-cert">

                <div class="d-flex">
                  <div class="customer">
                    <img src="images/icontall/cert3.png"/>
                  </div>

                  <div class="d-none d-xl-block home-border"></div>

                  <div class="customer">
                    <img src="images/icontall/cert4.png"/>
                  </div>

                  <div class="d-none d-xl-block home-border"></div>

                  <div class="customer">
                    <img src="images/icontall/cert8.png"/>
                  </div>
                  <div class="customer">
                    <img src="images/icontall/cert7.png"/>
                  </div>

                  <div class="d-none d-xl-block home-border"></div>

                  <div class="customer">
                    <img src="images/icontall/cert8.png"/>
                  </div>
                  <div class="customer">
                    <img src="images/icontall/cert7.png"/>
                  </div>

                  <div class="d-none d-xl-block home-border"></div>

                  <div class="customer">
                    <img src="images/icontall/cert5.png"/>
                  </div>

                  <div class="d-none d-xl-block home-border"></div>

                  <div class="customer">
                    <img src="images/icontall/cert6.png"/>
                  </div>

                </div>
              </div>



    </section>

    <?php //load footer
      include 'src/footer.php';
    ?>
    <?php //load script src
      include 'src/script.php';
    ?>
  </body>
</html>
