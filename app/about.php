<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "lib.php"; ?>
    <style type="text/css">
      .mytop li:nth-child(1) a{
        opacity: .7 !important;
        border: 1px solid #22c5a8;
      }
      .mytop li:nth-child(1):hover a{
        opacity: .9 !important;
        border: 1px solid #fff;
      }
      .mytop li:nth-child(2) a{
        opacity: 1 !important;
        border: 1px solid #fff;
      }
    </style>
  </head>
  <body>
    <!-- Navigation -->
    <?php include "menu.php"; ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <?php include "slide-left.php"; ?>
        <!-- /.col-lg-3 -->
        <div class="col-lg-10">
          <?php include "slide.php"; ?>
          <div class="row" style="font-size: 18px">
            <h1 class="ml-auto mr-auto">- About Riot Games -</h1>
            <p><i>"We aspire to be the most player-focused game company in the world. We were established in 2006 by a couple of entrepreneurial gamers who believe player-focused game development can result in awesome games. In 2009, we released our debut title, League of Legends, to critical and player acclaim. Over 67 million play every month.<br><br>We know players form the foundation of our community and it’s for them that we continue to evolve and improve the League of Legends experience.</i></p>
            <ol style="width: 100%;">
              <p class="text-center"><img src="../public/uploads/Brandon_Beck_&_Marc_Merrill.jpg" style="width: 700px;"></p>
              <hr>
            </ol>
            <h1 class="ml-auto mr-auto">- Structure -</h1>
            <p>A Company at roughly <b>5000</b> employees, many of Riot Games developers and publishers are split into various teams in order to improve the quality of their products.</p>
            <ol>
              <li><b>LEADERSHIP</b>: Overall management of Riot Games as well as having the final say on the direction the company will take.</li>
              <li><b>CORPORATE</b>: Looking at the future of the company's financial situation and to make sure it is financially successful.</li>
              <li><b>PRODUCTION</b>: Making sure everything is done on schedule as well as planning ahead in areas such as company resources, requirements, and probable situations.</li>
              <li><b>OPERATIONS</b>: Overseeing day-to-day activity in the company, making sure each department is running smoothly.</li>
              <li><b>ENGINEERING</b>: Creating and maintaining the systems needed to run the company, as well as developing additional features for the game.</li>
              <li><b>ART</b>: Creative activities within and outside the game, such as artwork for maps, champions, as well as alternative skins.</li>
              <li><b>DESIGN</b>: Creating, planning, and designing new content for the game.</li>
              <li><b>COMMUNITY</b>: Creating a centralized information hub for their players, keeping them informed about their services, news, and events.</li>
              <li><b>QUALITY ASSURANCE</b>: Making sure the game is working correctly and that players are provided adequate game-related services.</li>
              <li><b>CUSTOMER SERVICE</b>: Helping customers on a regular basis by answering their questions and assisting them with any inquiries they may have.</li>
              <p class="text-center"><img src="../public/uploads/WeAreRioters_Carousel_3.jpg" style="width: 890px;"></p>
              <hr>
            </ol>
            <h1 class="ml-auto mr-auto">- Company Offices -</h1>
            <p>Riot Games HQ is based in West LA (12333 Olympic Blvd Los Angeles, CA 90025, United States), previous HQ was in Santa Monica (CA 90404, United States) close to their new location. Also, Riot has 19 offices across the globe. Their international teams ensure that player experiences aren’t lost in translation - no matter where your desk is, you’re still a Rioter.<br>The Current Offices are in:</p>
            <ul style="list-style-type: square;width: 100%;">
              <li>Bay Area, United States of America.</li>
              <li>Berlin, Federal Republic of Germany.</li>
              <li>Dublin, Republic of Ireland.</li>
              <li>Hong Kong, People's Republic of China.</li>
              <li>Istanbul, Republic of Turkey.</li>
              <li>London, United Kingdom of Great Britain and Northern Ireland.</li>
              <li>Mexico City, United Mexican States.</li>
              <li>Los Angeles, United States of America.</li>
              <li>Tokyo, State of Japan.</li>
              <p class="text-center"><img src="../public/uploads/Riot_Office_locations.jpg"></p>
              <hr>
            </ul>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php include "footer.php"; ?>
    <?php include "toolbar.php"; ?>
    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
  </body>
</html>