<?php 
// Originl JSON API for assessment.
// provided json got bug. It got extra comma after each .jpg file  
$request = wp_remote_get( 'https://dev.horseandcountry.tv/example.json' );
// below is temperory fix is there was a bug in the above json format.
$request=str_replace('.jpg",','.jpg"',$request);

// Fixed JSON Hence use a different JSON API
// please uncomment below request to see two sliders
$request = wp_remote_get( 'https://webodream.com/example.json' );
    if( is_wp_error( $request ) ) {
        return false; 
    }
    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body );			
    foreach($data as $key=>$records){  ?> <!-- check array of object  -->
  
        <div class="container-fluid pt-3 pb-3">
            <div class="carousel_header">
                <h2><?php echo ucfirst($key); ?></h2>  
            </div>
            <div class="carousel">
                <?php     
                foreach($records as $record){
                $value=$record->gist;
                ?>
                <div class="corousel-card">
                    <a href="<?php echo $value->permalink; ?>" target="_blank">
                        <div class="image">
                            <img src="<?php echo $value->videoImageUrl; ?>" class="product-image" alt="">
                        </div>
                        <h2 class="title"><?php echo $value->title; ?></h2>
                    </a>	
                </div>
                <?php  } ?>
            </div>
        </div>
<?php  }