<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php 
      for ($i=0;$i<6;$i++)
      {
        if ($i==0)
        {
          echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'" class="active"></li>';
        }
        else
        {
          echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>';
        }        
      };
    ?>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php 
      for ($i=1;$i<=6;$i++)
      {
        if ($i==1)
        {
          echo '<div class="carousel-item active"><img class="d-block img-fluid" src="../public/uploads/banner'.$i.'.jpg"></div>';
        }
        else
        {
          echo '<div class="carousel-item"><img class="d-block img-fluid" src="../public/uploads/banner'.$i.'.jpg"></div>';
        }        
      };
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>