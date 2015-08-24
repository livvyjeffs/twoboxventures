<?php
     $str = file_get_contents('ambassadors.json');

$json = json_decode($str, true); // decode the JSON into an associative array

    foreach ($json as $value) {
      
      
      $picture_status = $value['picture'];
      
      // echo '<pre>' . $picture_status . '</pre>';
      
      $filename = str_replace(' ', '', strtolower ($value['filename']));
      $school = $value['university'];
      $name = $value['displayname'];
      
      $html = '<div class="col-xs-4 col-sm-2 col-md-1 col-lg-1">
                <div class="portfolio__item">
                  <div class="portfolio-item__img">
                    <img src="img/ambassadors/'.$filename.'" class="img-responsive" alt="...">
                    <div class="portfolio-item__mask">
                      <div class="portfolio-item-mask__content">
                        <div class="portfolio-item-mask__summary" style="font-size: 8px">
                          <br>'.$school.'</div>
                      </div>
                      <!-- / .portfolio-item-mask__content -->
                    </div>
                    <!-- / .portfolio-item__mask -->
                    <!--</a>-->
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="team-item__name" style="font-size: 8px; max-height: 12px; overflow: hidden">
                        <center>'.$name.'</center>
                      </div>
                    </div>
                  </div>
                  <!-- / .row -->
                </div>
                <!-- / .portfolio__item -->
              </div>';
              
   if (file_exists('img/ambassadors/'.$filename)) {
    // if($picture_status=="X"){
     echo $html;
    // }
}
              
   
    
}

  foreach ($json as $value) {
      
      $picture_status = $value['picture'];
      
      $filename = str_replace(' ', '', strtolower ($value['filename']));
      $school = $value['university'];
      $name = $value['displayname'];
      
      $html = '<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                <div class="portfolio__item">
                  <p>'.$name.'<p>
                </div>
                <!-- / .portfolio__item -->
              </div>';
              
  if (!file_exists('img/ambassadors/'.$filename)) {
    if($picture_status=="X"){
    echo $html;
    }
}
              
   
    
}

?>