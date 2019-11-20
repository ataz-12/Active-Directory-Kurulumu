<?php include '../tema/sidebar.php';  ?>
<?php
$sistemsor1=$db ->prepare("select * from sistem where sistem_id=1");
$sistemsor1->execute(array(0));
$sistemcek1=$sistemsor1->fetch(PDO::FETCH_ASSOC);
?>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <style>
 .center {
   display: block;
   margin-left: auto;
   margin-right: auto;
   width: 50%;
 }</style>
      <!-- Blog Post (Right Sidebar) Start -->
                <div class="col-md-9">
                   <div class="col-md-12 page-body">
                     <div class="row">
                             <div class="sub-title">
                             <h2><?php echo $sistemcek1['sistem_title']; ?></h2>
                            </div>
                    <div class="col-md-12 content-page">
                      <div class="container">




                          <div class="card">
  <div class="card-header"> <button type="button" class="btn btn-primary btn-block">
                                                     <h2><?php echo $sistemcek1['sistem_title']; ?></h2>
                                                       </button></h2></div>
  <div class="card-body">
       <div>
                                            <img  src="<?php echo $sistemcek1['sistem_foto']; ?>"alt="" class="center" >
                                             </div>
       <?php echo $sistemcek1['sistem_icerik']; ?></div>

</div>




                      </div>
                    </div>
                    <?php include   '../tema/footer.php';  ?>
                </div>
             </div>
          </div>


   <!-- Back to Top Start -->
   <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
   <!-- Back to Top End -->


   <!-- All Javascript Plugins  -->
   <script type="text/javascript" src="../js/jquery.min.js"></script>
   <script type="text/javascript" src="../js/plugin.js"></script>

   <!-- Main Javascript File  -->
   <script type="text/javascript" src="../js/scripts.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </body>
</html>
