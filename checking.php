<?php if( $allStaffMembers->have_posts() ): ?>
             <div class="row">
                 <div class="col">

                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>


                     <div class="card" id="">
                         <?php $cardNumber = 1; ?>
                         <?php while( $allEvents->have_posts() ): $allEvents->the_post(); ?>
                             <div class="card">
                               <div class="card-header" id="heading<?php echo $cardNumber; ?>">
                                 <h2 class="mb-0">
                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $cardNumber; ?>">
                                       <h5 class="card-title">Card title</h5><?php the_title(); ?>
                                   </button>
                                 </h2>
                               </div>
                               <div id="collapse<?php echo $cardNumber; ?>" class="collapse"  data-parent="#accordionExample">
                                 <div class="card-body">
                                     <?php the_content(); ?>
                                 </div>
                               </div>
                             </div>
                             
                             <?php $cardNumber++; ?>
                         <?php endwhile; ?>
                     </div>




                 </div>
             </div>
         <?php endif; ?>