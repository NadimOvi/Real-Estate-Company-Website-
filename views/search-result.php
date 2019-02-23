<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Realtor.com</span>
    <h2>Realtor.com</h2>
</div>
</div>



<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form">
    <h4><span class="glyphicon glyphicon-search"></span> Search of Properties</h4>
		<form action="search-result.php" method="get" class="form form-group">
            <input type="text" class="form-control" name="search" placeholder="Search by Name/Address/price">
            
            <button class="btn btn-primary">Find Now</button>
		</form>
  </div>



<div class="hot-properties hidden-xs"></div>

</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result"></div>

</div>
<div class="row">

    <!-- Php code block 1 of 1 starts -->
    <?php
    require_once ('../vendor/autoload.php');
    use App\Classes\RealEstate\RealEstate;
    $real_estate = new RealEstate();
    if(isset($_REQUEST['search'])){
        $allData = $real_estate->index();
        ################## search  block1 start ##################
        if(isset($_REQUEST['search']) )$allData =  $real_estate->search($_REQUEST);

        $availableKeywords=$real_estate->getAllKeywords();
        $comma_separated_keywords= '"'.implode('","',$availableKeywords).'"';
        ################## search  block1 end ##################


        ################## search  block2 start ##################

        if(isset($_REQUEST['search']) ) {
            $someData = $real_estate->search($_REQUEST);
            $serial = 1;
        }
        ################## search  block2 end ##################
    if(count($someData) <= 0){
        echo "<br>No Result Found";
    }
    foreach ($someData as $oneData){
        $image = explode(",",$oneData->images);
    ?>

     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="../resources/images/properties/<?php echo $image[0];?>" class="img-responsive" alt="properties">
        </div>
        <h4><a href="property-detail.php?id=<?php echo $oneData->id;?>"><?php echo $oneData->name;?></a></h4>
        <p class="price">Price: $<?php echo $oneData->monthly_charges;?></p>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $oneData->id;?>">View Details</a>
      </div>
      </div>
      <!-- properties -->
    <?php } } ?>
    <!-- Php code block 1 of 1 ends -->

</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>