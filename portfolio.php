<?php
   function portfolio($name,$hello,$filename){

    $html = '<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                <div class="portfolio__item">
                  <div class="portfolio-item__img">
                    <img src="img/portfolio/'.$filename.'.jpg" class="img-responsive" alt="...">
                    <div class="portfolio-item__mask">
                      <div class="portfolio-item-mask__content">
                        <div class="portfolio-item-mask__summary">
                          <br>'.$hello.'</div>
                      </div>
                      <!-- / .portfolio-item-mask__content -->
                    </div>
                    <!-- / .portfolio-item__mask -->
                    <!--</a>-->
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="team-item__name">
                        <center>'.$name.'</center>
                      </div>
                    </div>
                  </div>
                  <!-- / .row -->
                </div>
                <!-- / .portfolio__item -->
              </div>';

    echo $html;
}
?>