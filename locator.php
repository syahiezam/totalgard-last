<!doctype html>
<html lang="en">
  <?php //load head tags
    $title = "Totalgard Manufacturing - Installer Locator";
    include 'src/head.php';
  ?>

  <body class="page05">
    <?php //load navbar
      include 'src/navbar.php';
    ?>

    <section class="content">
      <div class="container">
        <div class="row">

          <div class="col-lg-4">
            <div class="locator-map d-none d-xl-block">
              <img id="locator-map" src="images/locator-map.png" alt="">
            </div>
            <div class="locator-map-mobile d-xl-none">
              <img id="locator-map-m" src="images/locator-map.png" alt="">
            </div>
          </div>

          <div class="col-lg-8">
            <div class="locator-bar">
              <div class="locator-header d-none d-md-block text-center">PARTNER LOCATOR</div>
              <div class="locator-header-m d-md-none text-center">PARTNER LOCATOR</div>
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-3">
                    <div class="d-none d-md-block"><div class="locator-title align-items-end d-flex">CORPORATE & INTERNATIONAL OFFICES</div></div>
                    <div class="d-md-none"><div class="locator-title-sm text-sm-center">CORPORATE & INTERNATIONAL OFFICES</div></div>

                    <!-- dropdown 1 -->
                    <div class="locator-dropdown locator-dropdown-1 p-0">
                      <div class="locator-dropdown-content">
                        <span class="locator-dropdown-text-1 float-left"></span>
                        <span class="locator-dropdown-triangle float-right d-flex align-items-center">
                        <span class="locator-dropdown-triangle-rotate triangle-1"></span></span>
                      </div>
                      <div class="locator-dropdown-menu dropdown-1 shadow">
                        <div class="locator-dropdown-hover locator-dropdown-1-1">DISTRIBUTOR</div>
                        <div class="locator-dropdown-hover locator-dropdown-1-2">RETAIL SHOP</div>
                      </div>
                    </div>

                  </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="d-none d-md-block"><div class="locator-title align-items-end d-flex">COUNTRY</div></div>
                    <div class="d-md-none"><div class="locator-title-sm text-sm-center">COUNTRY</div></div>

                    <!-- dropdown 2 -->
                    <div class="locator-dropdown locator-dropdown-2 p-0">
                      <div class="locator-dropdown-content">
                        <span class="locator-dropdown-text-2 float-left"></span>
                        <span class="locator-dropdown-triangle float-right d-flex align-items-center">
                        <span class="locator-dropdown-triangle-rotate triangle-2"></span></span>
                      </div>
                      <!-- dropdown 1-1 -->
                      <div class="locator-dropdown-menu shadow dropdown-2 dropdown-1-1 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-2-1">MALAYSIA</div>
                        <div class="locator-dropdown-hover locator-dropdown-2-2">SINGAPORE</div>
                        <div class="locator-dropdown-hover locator-dropdown-2-3">INDONESIA</div>
                      </div>
                      <!-- dropdown 1-2 -->
                      <div class="locator-dropdown-menu shadow dropdown-2 dropdown-1-2 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-2-4">INDONESIA</div>
                      </div>
                    </div>

                  </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="d-none d-md-block"><div class="locator-title align-items-end d-flex">REGION</div></div>
                    <div class="d-md-none"><div class="locator-title-sm text-sm-center">REGION</div></div>

                    <!-- dropdown 3 -->
                    <div class="locator-dropdown locator-dropdown-3 p-0">
                      <div class="locator-dropdown-content">
                        <span class="locator-dropdown-text-3 float-left"></span>
                        <span class="locator-dropdown-triangle float-right d-flex align-items-center">
                        <span class="locator-dropdown-triangle-rotate triangle-3"></span></span>
                      </div>
                      <div class="locator-dropdown-menu shadow dropdown-3 dropdown-2-1 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-3-1">KUALA LUMPUR</div>
                        <div class="locator-dropdown-hover locator-dropdown-3-2">PETALING JAYA</div>
                        <div class="locator-dropdown-hover locator-dropdown-3-3">SARAWAK</div>
                      </div>
                      <div class="locator-dropdown-menu shadow dropdown-3 dropdown-2-2 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-3-4">EAST WEST REGION</div>
                      </div>
                      <div class="locator-dropdown-menu shadow dropdown-3 dropdown-2-3 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-3-5">WEST JAVA</div>
                      </div>
                      <div class="locator-dropdown-menu shadow dropdown-3 dropdown-2-4 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-3-6">WEST JAVA</div>
                      </div>
                    </div>

                  </div>
                  <div class="col-sm-6 col-md-3">
                    <div class="d-none d-md-block"><div class="locator-title align-items-end d-flex">CITY</div></div>
                    <div class="d-md-none"><div class="locator-title-sm text-sm-center">CITY</div></div>

                    <!-- dropdown 4 -->
                    <div class="locator-dropdown locator-dropdown-4 p-0">
                      <div class="locator-dropdown-content">
                        <span class="locator-dropdown-text-4 float-left"></span>
                        <span class="locator-dropdown-triangle float-right d-flex align-items-center">
                        <span class="locator-dropdown-triangle-rotate triangle-4"></span></span>
                      </div>
                      <div class="locator-dropdown-menu shadow dropdown-4 dropdown-3-1 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-4-1">KEPONG</div>
                      </div>
                      <div class="locator-dropdown-menu shadow dropdown-4 dropdown-3-2 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-4-2">PUCHONG</div>
                      </div>
                      <div class="locator-dropdown-menu shadow dropdown-4 dropdown-3-3 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-4-3">KUCHING</div>
                      </div>
                      <div class="locator-dropdown-menu shadow dropdown-4 dropdown-3-4 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-4-4">ANG MO KIO</div>
                      </div>
                      <div class="locator-dropdown-menu shadow dropdown-4 dropdown-3-5 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-4-5">CIREBON</div>
                      </div>
                      <div class="locator-dropdown-menu shadow dropdown-4 dropdown-3-6 d-none">
                        <div class="locator-dropdown-hover locator-dropdown-4-6">BEKASI</div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="locator-content-main">
              <div class="locator-content locator-content-1 text-center d-none">
                <div class="locator-content-title">GOLDCREST DISTRIBUTOR</br>SDN BHD</div>
                <div class="locator-content-text-1">No 14, Jalan Metro Perdana Barat 9</br>Sri Edaran Kepong<br>52100 Kuala Lumpur, Malaysia</div>
                <div class="locator-content-header">OPENING HOURS</div>
                <div class="locator-content-text-1">Monday-Friday 9am - 6pm</div>
                <div class="locator-content-header">EMAIL US</div>
                <div class="locator-content-text-1">sales@totalgardmanufacturing.com</div>
                <div class="locator-content-text-2">For questions and feedback about our Store, you can call us on +03-6258 1588 (office hour) or send an email to sales@totalgardmanufacturing.com. When you contact Customer Service your personal data will be processed in accordance with our Privacy Notice.</div>
              </div>
              <div class="locator-content locator-content-2 text-center d-none">
                <div class="locator-content-title">TOTALGARD</br>PUCHONG</div>
                <div class="locator-content-text-1">No 16, Jalan Puteri 2/2B</br>Bandar Puteri, 47100, Puchong<br>Selangor, Malaysia</div>
                <div class="locator-content-header">OPENING HOURS</div>
                <div class="locator-content-text-1">Monday-Friday 9am - 6pm</div>
                <div class="locator-content-header">EMAIL US</div>
                <div class="locator-content-text-1">sales@totalgardmanufacturing.com</div>
                <div class="locator-content-text-2">For questions and feedback about our Store, you can call us on +03-6259 3018 (office hour) or send an email to sales@totalgardmanufacturing.com. When you contact Customer Service your personal data will be processed in accordance with our Privacy Notice.</div>
              </div>
              <div class="locator-content locator-content-3 text-center d-none">
                <div class="locator-content-title">TOTALGARD</br>EAST MALAYSIA</div>
                <div class="locator-content-text-1">Ground Floor, S17, Lot 521 & 522</br>Jln Datuk Tawi Sli, 93350 Kuching, Sarawak</div>
                <div class="locator-content-header">OPENING HOURS</div>
                <div class="locator-content-text-1">Monday-Friday 9am - 6pm</div>
                <div class="locator-content-header">EMAIL US</div>
                <div class="locator-content-text-1">eastmalaysia@totalgardmanufacturing.com</div>
                <div class="locator-content-text-2">For questions and feedback about our Store, you can call us on +03-6258 8669 (office hour) or send an email to eastmalaysia@totalgardmanufacturing.com. When you contact Customer Service your personal data will be processed in accordance with our Privacy Notice.</div>
              </div>
              <div class="locator-content locator-content-4 text-center d-none">
                <div class="locator-content-title">TOTALGARD</br>SINGAPORE</div>
                <div class="locator-content-text-1">3 Ang Mo Kio ST.62</br>#02-13 Link@AMK<br>Singapore 569139</div>
                <div class="locator-content-header">OPENING HOURS</div>
                <div class="locator-content-text-1">Monday-Friday 9am - 6pm</div>
                <div class="locator-content-header">EMAIL US</div>
                <div class="locator-content-text-1">singapore@totalgardmanufacturing.com</div>
                <div class="locator-content-text-2">For questions and feedback about our Store, you can call us on +65-97332149 / +65-92472424 (office hour) or send an email to singapore@totalgardmanufacturing.com. When you contact Customer Service your personal data will be processed in accordance with our Privacy Notice.</div>
              </div>
              <div class="locator-content locator-content-5 text-center d-none">
                <div class="locator-content-title">TOTALGARD</br>INDONESIA</div>
                <div class="locator-content-text-1">Jalan Ayani No. 51 Bypass, 45143</br>Cirebon-Jawa Barat, Indonesia</div>
                <div class="locator-content-header">OPENING HOURS</div>
                <div class="locator-content-text-1">Monday-Friday 9am - 6pm</div>
                <div class="locator-content-header">EMAIL US</div>
                <div class="locator-content-text-1">indonesi@totalgardmanufacturing.com</div>
                <div class="locator-content-text-2">For questions and feedback about our Store, you can call us on +62 812 9172 0511 (office hour) or send an email to info@amretamotorindonesia.com. When you contact Customer Service your personal data will be processed in accordance with our Privacy Notice.</div>
              </div>
              <div class="locator-content locator-content-6 text-center d-none">
                <div class="locator-content-title">TOTALGARD</br>INDONESIA</div>
                <div class="locator-content-text-1">Jl. Sedap Malam Perumahan Pondok Timur Mas</br>Block B2 No. 12, Grand Galaxy Bekasi<br>Jawa Barat, Indonesia</div>
                <div class="locator-content-header">OPENING HOURS</div>
                <div class="locator-content-text-1">Monday-Friday 9am - 6pm</div>
                <div class="locator-content-header">EMAIL US</div>
                <div class="locator-content-text-1">indonesi@totalgardmanufacturing.com</div>
                <div class="locator-content-text-2">For questions and feedback about our Store, you can call us on +62 812 9922 0576 (office hour) or send an email to info@amretamotorindonesia.com. When you contact Customer Service your personal data will be processed in accordance with our Privacy Notice.</div>
              </div>
            </div>
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
