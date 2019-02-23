<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Buy</span>
    <h2>Buy</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">


<div class="col-lg-10 col-sm-8 ">

<!-- Php code block 1 of 2 starts -->
<?php
require_once ('../vendor/autoload.php');
use App\Classes\RealEstate\RealEstate;
$real_estate = new RealEstate();
$singleData = $real_estate->viewSingleData($_GET['id']);
?>
<!-- Php code block 1 of 2 ends -->
<h2><?php echo $singleData->name ?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <!-- Php code block 2 of 2 starts -->
        <?php
            $image = explode(",",$singleData->images);
            $image_count = count($image);
            $image_index = 0;
            while ($image_index<$image_count) {
                if ($image_index == 0) {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $image_index; ?>" class="active"></li>
                    <?php
                } else {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $image_index; ?>" class=""></li>
                    <?php
                }
                $image_index++;
            }
            ?>
      </ol>
      <div class="carousel-inner">

        <?php
            $image = explode(",",$singleData->images);
            $image_count = count($image);
            $i = 0;
            while ($i<$image_count){
                if($i == 0){
        ?>
        <!-- Item 1 -->
        <div class="item active">
          <img src="../resources/images/properties/<?php echo $image[$i]; ?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->
        <?php } else{ ?>
        <!-- Item 2 -->
         <div class="item">
           <img src="../resources/images/properties/<?php echo $image[$i]; ?>" class="properties" alt="properties" />
         </div>
         <?php
            }
            $i++;
            }
         ?>
         <!-- Php code block 2 of 2 ends -->
         <!-- #Item 2 -->

      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p><?php echo $singleData->description ?></p>

  </div>


  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price">$ <?php echo $singleData->monthly_charges ?></p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span>Address :  <?php echo $singleData->address ?></p>
  <p class="area"><span class="glyphicon glyphicon-th-list"></span>Floor Space :  <?php echo $singleData->floor_space ?> square feet</p>
  <p class="area"><span class="glyphicon glyphicon-th-list"></span>Access :  <?php echo $singleData->access ?></p>
  <p class="area"><span class="glyphicon glyphicon-th-list"></span>Utility :  <?php echo $singleData->utility ?></p>
</div>


<div class="col-lg-12 col-sm-6 ">
        
</div>
  </div>
</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>