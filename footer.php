    <!--Footer-->
    <footer class="text-center text-lg-start text-white">
    <!-- Grid container -->
    </div>
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">In-person</h5>

          <p>
            In-person events are back and better than ever. Use FestEvent to gather attendees,
            track which content they interact with, and automate emails to bring them back next time.
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Digital</h5>

          <p>
            Say goodbye to one camera and a Zoom link. Utilize Event Hub,
            livestreaming integrations, and audience engagement to harness the power of digital.
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Hybrid Experience</h5>

          <p>
            And then some. Cultivate the benefits of digital and in-person to give all of your attendees
            and presenters and experience they'll want to return to, from any location.
          </p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="main.html">FestEvent</a>
    </div>
    <!-- Copyright -->

    <div class="text-center">
    <?php
    $fname = basename($_SERVER['PHP_SELF']) ;
    $last_modified = filemtime($fname);
    echo "Last modified on: " . date('l jS \o\f F Y, h:i:s A', $last_modified);
    ?>
  </div>

  </footer>
  <!--Footer ends-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>