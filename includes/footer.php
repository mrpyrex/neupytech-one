
<!-- Footer
==================
-->

<footer class="main-footer">
    <div class="row">
        <div id="contact" class="col-sm-12 col-md-6 text-center">
            <h5 class="display-4">Contact Us</h5>
            <p><i class="fas fa-road"></i>14, Ring Road Opp. All Weather, Idua, Eket</p>
            <p><i class="fas fa-phone-volume"></i>+234 811 5234 897</p>
            <p><i class="fas fa-envelope"></i>info@neupytech.com</p>
            <a href="https://web.facebook.com/neupytech/" target="_blank"><i class="fab fa-facebook-f mr-4"></i></a>
            <a href="https://twitter.com/neupytech" target="_blank"><i class="fab fa-twitter mr-4"></i></a>
            <a href="" target="_blank"><i class="fab fa-instagram mr-4"></i></a>
        </div>
        <div class="col-sm-12 col-md-6" id="map"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center m-4">Copyright NEUPYTECH &copy; <?php echo date('Y'); ?>. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS
==================
-->
  <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>

<!-- Map JS
==================
-->
  <script>
    function initMap () {
      var options = {
        zoom: 8,
        center: {lat:4.9300,lng:7.8722}
      }
      var map = new google.maps.Map (document.getElementById('map'), options);
      var marker = new google.maps.Marker ({
        position: {lat:4.6467,lng:7.9429},
        map:map
      })
    }
  </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVEe2iQi3o5-_CcZ0CSV5MJ-18pJTJr3o&callback=initMap"
async defer></script>

</body>
</html>
