<?php include "include/header.php" ?>
<?php include "db_connection/database_connection.php" ?>

  <div class="container">

  <?php
  if(array_key_exists("submit_search", $_POST)){

  $location= $_POST['search_keyword'];
  $auction_type_category=$_POST['auction_type'];


  $query="SELECT * FROM auctions_post WHERE post_approve_unapp='approve' AND  (post_tags LIKE {$auction_type_category} OR post_location LIKE '{$location}' )";
  $select_all_post_query=mysqli_query($link,$query);
  while($row=mysqli_fetch_assoc($select_all_post_query)){
    $post_title=$row['post_title'];
    $post_date=$row['post_date'];
     $bid_end_date=$row['bid_end_date'];
    $post_image=$row['post_image'];
    $post_content=$row['post_content'];
    $post_location=$row['post_location'];
    $threshold_bid=$row['threshold_bid'];
  $post_id=$row['post_id'];

?>
      <!-- Project One -->
      <div class="row" style="outline:1px solid black";>
        <div class="col-md-3">

            <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0"  height="200" width="280" src="images/<?php echo $post_image;?>" alt="">
          </a>
        </div>
        <div class="col-md-9">
          <h3><a href="bidding_house.php?id=<?php echo $post_id ?>" role=""><?php echo $post_title ?></a></h3>
           <div class="row">
            <div class="col-md-4"> Location - <?php echo $post_location ?></div>
            <div class="col-md-4">Time left : &nbsp&nbsp                      
             <?php
            $now = strtotime("$post_date"); // or your date as well
              $your_date = strtotime("$bid_end_date");
              $datediff =$your_date-$now;
              echo round($datediff / (60 * 60 * 24))." days remaning";
               ?>
                </div>
            <div class="col-md-4">current bid - <?php echo $threshold_bid ?></div>
          </div>
          <br>
          <p><?php echo $post_content ?></p>
          <br>
          <a class="btn btn-primary"  href='<?php echo "bidding_house.php?id=".$post_id; ?>'>View Details</a>
        </div>
      </div>
      <hr>

<?php
  }
}
  ?>

          
      

      <hr>

<!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>


 

    <?php include "include/footer.php" ?>
	
	<script src="js_lat/slick.min.js"></script>
	<script src="js_lat/jquery.sliderPro.min.js"></script>
	
</body>


</html>