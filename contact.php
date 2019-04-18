<!doctype html>
<html lang="en">
  <?php //load head tags
    $title = "Totalgard Manufacturing - Contact Us";
    include 'src/head.php';
  ?>

  <body class="page06">
    <?php //load navbar
      include 'src/navbar.php';
    ?>
    <section class="content content-margin">
      <div class="container">
        <div class="row">
          <div class="contact-column col-lg-6">
            <div class="contact-heading-1">WE'D LOVE TO MEET YOU!</div>
            <div class="w-100">
              <div id="map" class="contact-map"></div>
              <div class="contact-rotate text-nowrap">
                <input id="toggle-on" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
                <label id="contact-map-1" for="toggle-on" class="btn contact-btn-1">HEADQUARTER</label>
                <input id="toggle-off" class="toggle toggle-right" name="toggle" value="true" type="radio">
                <label id="contact-map-2" for="toggle-off" class="btn contact-btn-1">FACTORY</label>
              </div>
            </div>
            <div class="contact-move d-none">
              <div class="contact-heading-2">
                TOTALGARD<br>
                MANUFACTURING<br>
                SDN BHD
              </div>
              <div class="contact-select-1">
                <div class="contact-text-1">
                  No 14, Jalan Metro Perdana<br>
                  Barat 9, Sri Edaran Kepong<br>
                  52100 Kuala Lumpur<br>
                  Malaysia

                </div>
                <div class="contact-heading-1">OPENING HOURS</div>
                <div class="contact-text-1">Monday - Friday 8.30am - 6pm</div>
                <div class="contact-heading-1">EMAIL</div>
                <div class="contact-text-1 mb-5">sales@totalgardmanufacturing.com</div>
              </div>

              <div class="contact-select-2">
                <div class="contact-text-1">
                  Lot No.23 Jalan Zurah 5a<br>
                  Pusat Perindustrian Zurah<br>
                  44200 Hulu Selangor<br>
                  Selangor, Malaysia
                </div>
                <div class="contact-heading-1">OPENING HOURS</div>
                <div class="contact-text-1">Monday - Friday 8.30am - 6pm</div>
                <div class="contact-heading-1">EMAIL US</div>
                <div class="contact-text-1 mb-5">sales@totalgardmanufacturing.com</div>
              </div>
            </div>
          </div>

          <div class="contact-column col-lg-6">
            <div class="contact-heading-1">GET IN TOUCH</div>
            <div class="contact-text-2">Fill this form out to let us know more about you and your needs.</div>
            <form id="contact" >
              <!-- <iframe name="frame" style="display: none;"></iframe> -->
              <ul class="list-unstyled">
                <li><input class="contact-input w-100" type="name" name="name" class="form-control" placeholder="NAME" id="name"></li>
                <li><input class="contact-input w-100" type="email" name="email" class="form-control" placeholder="EMAIL" id="email"></li>
                <li><input class="contact-input w-100" type="subject" name="subject" class="form-control" placeholder="SUBJECT" id="subject"></li>
                <li><textarea class="contact-input no-resize w-100" name="message" rows="12" placeholder="MESSAGE"></textarea></li>
              </ul>
              <button id="submit-btn" type="submit" class="btn contact-btn-2 float-right">SUBMIT</button>
            </form>
             <div id="msg"></div>
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


    <script>
    /* global $ */
    $(document).ready(function(){
      $('#submit-btn').click(function(event){
        event.preventDefault();
         $.ajax({
            dataType: 'JSON',
            url: 'src/contactemail.php',
            type: 'POST',
            data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('SENDING...');
            },
            success: function(response){
              if(response){
                console.log(response);
                if(response['signal'] == 'ok'){
                 $('#msg').html('<div class="alert alert-secondary">'+ response['msg']  +'</div>');
                  $('input, textarea').val(function() {
                     return this.defaultValue;
                  });
                }
                else{
                  $('#msg').html('<div class="alert alert-danger">'+ response['msg'] +'</div>');
                }
              }
            },
            error: function(){
              $('#msg').html('<div class="alert alert-danger">Errors occur. Please try again later.</div>');
            },
            complete: function(){
              $('#submit-btn').html('SEND MESSAGE');
            }
          });
      });
    });
</script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3&callback=initMap" async defer></script>
  </body>
</html>
