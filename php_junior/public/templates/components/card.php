   <div class="col-sm-4">
       <div class="card border-success mb-3" style="max-width: 18rem;">
           <div class="card-header bg-transparent border-success">Колличество товара: <?php echo '0' ?></div>
           <div class="card-body text-success">
               <h5 class="card-title"><strong><?php echo $item->name ?></strong></h5>
               <img class="card-img-top" src="<?php echo 'no' ?>" alt="">
               <p class="card-text"><?php echo $description ?></p>
           </div>
           <div class="card-footer bg-transparent border-success">Цена - <strong><?php echo $item->price ?></strong>грн.</div>
       </div>
   </div>