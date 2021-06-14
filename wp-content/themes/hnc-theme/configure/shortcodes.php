<?php

// ALL Shortcode related functions here


// add action for the shortcode
function hnc_register_shortcodes(){
    add_shortcode('signup_email', 'hnc_signup_email');
 }

// display email signup form
function hnc_signup_email(){    
    ob_start();       
        ?>
        <div class="signup_email text-center">        
            <form  method="post" id="hnc_signup">
                <div id="datafetch">
                <p> Get quality content straight to your inbox.</p>               
                    <input type="email" name="email" id="email"></input>
                    <input type="button" id="email_save" name="submit" class="btn btn-lg btn-block btn-primary" onclick="event.preventDefault(), fetch()" value="Submit">
                </div>
            </form>
        </div>
     <?php    
    return ob_get_clean();
}

// ajax code to call ajax function
add_action('wp_footer', 'hnc_save_signup_email');
function hnc_save_signup_email()
{?>

    <script type="text/javascript">
        function fetch() {
            jQuery.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: {
                    action: 'data_email',
                    keyword: jQuery('#email').val()
                },
                success: function(data) {
                    jQuery('#datafetch').html(data);
                }
            });

        }
    </script>
    <?php
}

// ajax function save email in the data base with thank you message.
add_action('wp_ajax_data_email', 'data_email');
add_action('wp_ajax_nopriv_data_email', 'data_email');
function data_email()
{
    
      if (!empty($_POST)) {
          global $wpdb;
          $table = $wpdb->base_prefix.'custom_sign_up';
          $email = sanitize_text_field($_POST['keyword']);
          if (is_email($email)) {
              $data = array(
                  'email' => $email
              );
              $format = array(
                  '%s'
              );
              $success=$wpdb->insert($table, $data, $format);
              if ($success) {
                  echo '<p>Thank you. You email saved.' ;
              }
          }else{
              ?>
             <div id="datafetch">
                <p> Incorrect email. Try again</p>               
                    <input type="email" name="email" id="email"></input>
                    <input type="button" id="email_save" name="submit" class="btn btn-lg btn-block btn-primary" onclick="event.preventDefault(), fetch()" value="Submit">
                </div>
                <?php
          }
      } 
      die();
}



// create table if it does not exist
function hnc_create_table() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();    
    $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->base_prefix}custom_sign_up 
    ( `id` INT NOT NULL AUTO_INCREMENT , `email` TEXT NOT NULL , PRIMARY KEY (`id`)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action( 'init', 'hnc_create_table' );