<?php
/*
Plugin Name: Front End Registration and Login
Plugin URI: https://ashraful.info/wordpress/plugins/front-end-registration-and-login
Description: Provides simple front end registration and login forms
Version: 1.0
Author: Md. Ashraful Ahsan
Author URI: https://ashraful.info
*/


/* -----------------------------------------------------
   ------------- user registration form ----------------
   ----------------------------------------------------- */

// registration form fields

function ash_registration_form_fields() {
 
  ob_start(); ?>  

<?php 
  // show any error messages after form submission
  ash_show_error_messages(); 
?>

<div id="plz-select">Please Make a selection</div>

<form id="ash_registration_form" class="ash_form" action="" method="POST">
  <fieldset>
        <div class="container">
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol id="ash-indicator" class="carousel-indicators">
          <li class="active"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ol>
    
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
    
          <!-- Start slider -->
          <div class="item active">
              <section class="content">
                <div class="container">
                  <div class="col-md-offset-2 col-md-3 col-sm-3 col-sm-offset-3">
                    <div id="start-quiz-photo"class="photo">
                    <?php echo '<img  class="img-circle" src="' . plugins_url( 'front-end-registration-login/images/quiz-start-logo.jpg', dirname(__FILE__) ) . '" > '; ?>
                    </div>
                  </div>
                  <div class="col-md-5 col-sm-6">
                    <div class="title">
                      <h1>Ombrella’s got you covered!</h1>
                      <h2>Take this fun 3 minute quiz to reveal what you can get! </h2>
                      <p>Your answers here will help us personalize your Ombrella dating experience.</p>
                      <div class="title-btn">
                        <div class="carousel-btn">
                          <a  id = "ash-arist-button" class="ash-right next" href="#myCarousel" role="button" data-slide="next">start the quiz</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>
          <!-- Do you need to change any Date Personality Profile answers? -->
          <div class="item">
            <section>                 
                  <li class="carousel5 ipsy-style">
                    <div class="carousel-question">
                      <h1>Do you need to change any Date Personality Profile answers?</h1>
                    </div>      
                    <div class="carousel-body">
                      <div class="look-answer answer1">
                        <div class="select-img ipsy1">   
                            <div id="personality">
                                <label class="ash-pre-href">
                                    <input type="radio" id="ash_personality1" name="ash_personality" value="Yes" > 
                                    <div id="ash-asd"></div>
                                    <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/yes.jpg', dirname(__FILE__) ) . '" > '; ?>
                                </label>                              
                            </div>
                        </div>
                        <div class="image-title">Yes</div>
                      </div>

                      <div class="look-answer answer1">
                        <div class="select-img ipsy1">
                            <div id="personality">
                              <label class="ash-pre-href">
                                <input type="radio" id="ash_personality2" name="ash_personality" value="No" > 
                                <div id="ash-asd"></div>
                                <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/no.jpg', dirname(__FILE__) ) . '" > ';  ?>
                              </label>                            
                            </div>
                        </div>
                        <div class="image-title">No</div>
                      </div>
                    </div>
                  
                    <div class="carousel-btn">
                      <a id="ash_last_back" class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                      <a  id="ash_personality_href" class="ash-right next" href="" role="button" data-slide="next">Next</a>
                    </div>
                  </li>
                
            </section>
          </div>
    
          <!-- Is this your first date? -->
          <div class="item">
            
            <section>
    
              <li class="carousel5 ipsy-style">
                <div class="carousel-question">
                  <h1>Is this your first date?</h1>
                </div>        
                <div class="carousel-body">
                  <div class="look-answer answer1">
                    <div class="select-img ipsy1">
                        <div id="personality">                           
                            <label  class="ash-pre-href-2">
                                <input type="radio" id="first_date1" name="ash_first_date" value="Yes" > 
                                <div id="ash-asd"></div>
                                <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/yes.jpg', dirname(__FILE__) ) . '" > '; ?>
                            </label>                              
                        </div>
                    </div>
                    <div class="image-title"><p>Yes</p></div>
                  </div>
                  <div class="look-answer answer1">
                    <div class="select-img ipsy1">
                        <div id="personality">
                            <label  class="ash-pre-href-2">
                                <input type="radio" id="first_date2" name="ash_first_date" value="No"> 
                                <div id="ash-asd"></div>
                                <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/no.jpg', dirname(__FILE__) ) . '" > '; ?>
                            </label>                              
                        </div>
                    </div>
                    <div class="image-title"><p>No</p></div>
                  </div>
                </div>
              
                <div class="carousel-btn">
                  <a class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                  <a   id="ash_personality_href_2"class="ash-right next" href="" role="button" data-slide="next">Next</a>
                </div>
              </li>
    
            </section>
          </div>
          <!-- What is your gender? -->
          <div class="item">
            <section>
              <li class="carousel5 ipsy-style">
                <div class="carousel-question">
                  <h1>What is your gender?</h1>
                </div>        
                <div class="carousel-body">
                  <div class="look-answer mfc answer1">
                    <div class="select-img ipsy1">
                        <div id="personality">
                          <label class="ash-pre-href-3">
                              <input type="radio" id="ash_gender1" name="ash_gender" value="Male" > 
                              <div id="ash-asd"></div>
                              <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/1.jpg', dirname(__FILE__) ) . '" > ';  ?>
                          </label>                              
                        </div>
                    </div>
                    <div class="image-title"><p>Male</p></div>
                  </div>
                  <div class="look-answer mfc answer1">
                    <div class="select-img ipsy1">
                        <div id="personality">
                          <label  class="ash-pre-href-3">
                            <input type="radio" id="ash_gender2" name="ash_gender" value="Female" > 
                            <div id="ash-asd"></div>
                            <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/2.png', dirname(__FILE__) ) . '" > '; ?>
                          </label>                            
                        </div>
                    </div>
                    <div class="image-title"><p>Female</p></div>
                  </div>  
                </div>        
                <div class="carousel-btn">
                  <a class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                  <a   id="ash_personality_href_3" class="ash-right next" href="" role="button" data-slide="next">Next</a>
                </div>
              </li>
            </section>
          </div>
          <!-- What is your partner's gender? -->
          <div class="item">
            <section>
              <li class="carousel5 ipsy-style">
                <div class="carousel-question">
                  <h1>What is your partner's gender?</h1>
                </div>        
                <div class="carousel-body">
                  <div class="look-answer mfc answer1">
                    <div class="select-img ipsy1">
                      <div id="personality">
                          <label class="ash-pre-href-4">
                            <input type="radio" id="partner-gender1" name="ash_partner_gender" value="Male" > 
                            <div id="ash-asd"></div>
                            <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/1(2).jpg', dirname(__FILE__) ) . '" > '; ?>
                          </label>                              
                      </div>
                    </div>
                    <div class="image-title"><p>Male</p></div>
                  </div>
                  <div class="look-answer mfc answer1">
                    <div class="select-img ipsy1">
                        <div id="personality">
                          <label class="ash-pre-href-4">
                            <input type="radio" id="partner-gender2" name="ash_partner_gender" value="Female" > 
                            <div id="ash-asd"></div>
                            <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/2(2).jpg', dirname(__FILE__) ) . '" > ';  ?>
                          </label>                            
                        </div>
                    </div>
                    <div class="image-title"><p>Female</p></div>
                  </div>
                </div>        
                 <div class="carousel-btn">
                  <a class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                  <a  id="ash_personality_href_4" class="ash-right next" href="" role="button" data-slide="next">Next</a>
                </div>
              </li>
            </section>
          </div>
          <!-- Select your age group -->
          <div class="item">
            
            <section>
              <li class="carousel5 ipsy-style">
                <div class="carousel-question">
                  <h1>Select your age group</h1>
                </div>
                <div class="carousel-body">           
    
                   <div class="ash-pre-href-7">
                    <input id="18-25"  data-off-color="warning" data-on-color="success" type="radio" value="18-25" name="ash_age_group" >
                    <label for="18-25">18-25</label>
                  </div>  
                  <div class="ash-pre-href-7">
                    <input id="26-34"  data-off-color="warning" data-on-color="success" type="radio" value="26-34" name="ash_age_group">
                    <label for="26-34">26-34</label>
                  </div>  
                  <div class="ash-pre-href-7">
                    <input id="35-48"  data-off-color="warning" data-on-color="success" type="radio" value="35-48" name="ash_age_group">
                    <label for="35-48">35-48</label>
                  </div>  
                  <div class="ash-pre-href-7">
                    <input id="49-67"  data-off-color="warning" data-on-color="success" type="radio" value="49-67" name="ash_age_group">
                    <label for="49-67">49-67</label>
                  </div>  
                </div>  
              
                <div class="carousel-btn">
                  <a class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                  <a  id="ash_personality_href_7" class="ash-right next" href="" role="button" data-slide="next">Next</a>
                </div>
              </li>
            </section>
          </div>
          <!-- Select your partner's age group? -->
          <div class="item">
            <section>
              <li class="carousel5 ipsy-style">
                <div class="carousel-question">
                  <h1>Select your partner's age group?</h1>
                </div>
                <div class="carousel-body">           
                  <div class="ash-pre-href-8">
                    <input id="18-25"  data-off-color="warning" data-on-color="success" type="radio" name="ash_partner_age_group" value="18-25"  >
                    <label for="18-25">18-25</label>
                  </div>
                  <div class="ash-pre-href-8">
                    <input id="26-34"  data-off-color="warning" data-on-color="success" type="radio" name="ash_partner_age_group" value="26-34">
                    <label for="26-34">26-34</label>
                  </div>  
                  <div class="ash-pre-href-8">
                    <input id="35-48"  data-off-color="warning" data-on-color="success" type="radio" name="ash_partner_age_group" value="35-48">
                    <label for="35-48">35-48</label>
                  </div>  
                  <div class="ash-pre-href-8">
                    <input id="49-67"  data-off-color="warning" data-on-color="success" type="radio" name="ash_partner_age_group" value="49-67">
                    <label for="49-67">49-67</label>
                  </div>  
                </div>        
                 <div class="carousel-btn">
                  <a class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                  <a  id="ash_personality_href_8" class="ash-right next" href="" role="button" data-slide="next">Next</a>
                </div>
              </li>
    
            </section>
          </div>
          <!-- How long have you been in a relationship with your partner? -->
          <div class="item">
            <section>
    
              <li class="carousel5 ipsy-style">
                <div class="carousel-question">
                  <h1>How long have you been in a relationship with your partner?</h1>
                </div>
              
                <div class="carousel-body">
                  <form class="horizontal-form" role="form">
                    <select name="ash_relationship_time" class="form-control">
                      <option>We haven’t</option>
                      <option>Less than a month</option>
                      <option>1-3 months</option>
                      <option>3-6 months</option>
                      <option>6-12 months </option>
                      <option>1-2 years </option>
                      <option>2-4 years </option>
                      <option>4-8 years </option>
                      <option>8-Plus years </option>
                    </select>
                  </form>
                </div>
              
                 <div class="carousel-btn">
                  <a class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                  <a  id="ash_personality_href_8" class="ash-right next" href="#myCarousel" role="button" data-slide="next">Next</a>
                </div>
              </li>
    
            </section>
          </div>
          <!-- What is your budget? -->
          <div class="item">
            
            <section>
    
              <li class="carousel5 ipsy-style">
                <div class="carousel-question">
                  <h1>What is your budget?</h1>
                </div>
              
                <div class="carousel-body">
                  <div class="look-answer4 answer1">
                    <div class="select-img ipsy1">
                        <div id="personality">
                          <label  class="ash-pre-href-5">
                            <input type="radio" id="budget-1" name="your_budget" value="$30-60" > 
                            <div id="ash-asd"></div>
                            <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/30-60.jpg', dirname(__FILE__) ) . '" > ';  ?>
                          </label>                            
                        </div>
                    </div>
                    <div class="image-title"><p>$30-60</p></div>
                  </div>
                  <div class="look-answer4 answer1">
                    <div class="select-img ipsy1">
                      <div id="personality">
                          <label class="ash-pre-href-5">
                            <input type="radio" id="budget-2" name="your_budget" value="Under$100" > 
                            <div id="ash-asd"></div>
                            <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/Under$100.jpg', dirname(__FILE__) ) . '" > ';  ?>
                          </label>                            
                      </div>
                    </div>
                    <div class="image-title"><p>Under$100</p></div>
                  </div>
                  <div class="look-answer4 answer1">
                    <div class="select-img ipsy1">
                      <div id="personality">
                      <label  class="ash-pre-href-5">
                        <input type="radio" id="budget-3" name="your_budget" value="Under$200" > 
                        <div id="ash-asd"></div>
                        <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/Under$200.jpg', dirname(__FILE__) ) . '" > ';  ?>
                      </label>                            
                    </div>
                    </div>
                    <div class="image-title"><p>Under$200</p></div>
                  </div>
                  <div class="look-answer4 answer1">
                    <div class="select-img ipsy1">
                      <div id="personality">
                          <label class="ash-pre-href-5">
                            <input type="radio" id="budget-4" name="your_budget" value="I want to fun" > 
                            <div id="ash-asd"></div>
                            <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/fun.jpg', dirname(__FILE__) ) . '" > ';  ?>
                          </label>                            
                      </div>
                    </div>
                    <div class="image-title"><p>I want to fun</p></div>
                  </div>
                  
                  
                </div>
              
                <div class="carousel-btn">
                  <a class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                  <a  id="ash_personality_href_5" class="ash-right next" href="" role="button" data-slide="next">Next</a>
                </div>
              </li>
    
            </section>
          </div>
          <!-- Is there anything specific you are not interested in doing or trying? -->
          <div class="item">      
    
            <section>
    
              <li class="carousel5 ipsy-style">
                <div class="carousel-question">
                  <h1>Is there anything specific you are not interested in doing or trying? </h1>
                </div>
              
                <div class="carousel-body">
                  <div class="horizontal-form">
                    <label>comment</label>
                    <textarea id="not-interested" name="not_interested" class="form-control"></textarea>
                  </div>           
                    
                </div>
              
                 <div class="carousel-btn">
                  <a class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                  <a  class="ash-right next" href="#myCarousel" role="button" data-slide="next">Next</a>
                </div>
              </li>
    
            </section>
          </div>
          <!-- Are you open to traveling? -->
          <div class="item">
            <section>
    
              <li class="carousel5 ipsy-style">
                <div class="carousel-question">
                  <h1>Are you open to traveling?</h1>
                </div>
              
                <div class="carousel-body">
                  <div class="horizontal-form">
                    <div class="form-group">
                      <label>Zip code</label>
                    <input id="zip-code" name="zip_code" type="text" class="form-control" placeholder="zip code">
                    </div>
                    <div class="form-group">
                      <label>How far?</label>
                    <select id="how-far" name="how_far" class="form-control">
                      <option>5 mileage</option>
                      <option>10 mileage</option>
                      <option>25 mileage</option>
                      <option>50 mileage</option>
                      <option>100 mileage</option>
                      <option>500 mileage</option>
                      <option>Any mileage</option>
                    </select>
                    </div>
                  </div>
                </div>
              
                 <div class="carousel-btn">
                  <a class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                  <a  class="ash-right next" href="#myCarousel" role="button" data-slide="next">Next</a>
                </div>
              </li>
    
            </section>
          </div>
          <!-- Would you like to include car service in your package? -->
          <div class="item">
            
            <section>
    
              <li class="carousel5 ipsy-style">
                <div class="carousel-question">
                  <h1>Would you like to include car service in your package?</h1>
                </div>
              
                <div class="carousel-body">
                  <div class="look-answer answer1">
                    <div class="select-img ipsy1">
                      <div id="personality">
                        <label class="ash-pre-href-6">
                          <input type="radio" id="car-service-1" name="car_service" value="Yes" > 
                          <div id="ash-asd"></div>
                          <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/yes.jpg', dirname(__FILE__) ) . '" > ';  ?>
                        </label>                            
                      </div>
                    </div>
                    <div class="image-title"><p>Yes</p></div>
                  </div>
                  <div class="look-answer answer1">
                    <div class="select-img ipsy1">
                      <div id="personality">
                        <label class="ash-pre-href-6">
                          <input type="radio" id="car-service-2" name="car_service" value="No" > 
                          <div id="ash-asd"></div>
                          <?php echo '<img src="' . plugins_url( 'front-end-registration-login/images/no.jpg', dirname(__FILE__) ) . '" > ';  ?>
                        </label>                            
                      </div>
                    </div>
                    <div class="image-title"><p>No</p></div>
                  </div>
                    
                </div>
              
                 <div class="carousel-btn">
                  <a class="ash-left back" href="#myCarousel" role="button" data-slide="prev">Previous</a>
                  <a   id="ash_personality_href_6" class="ash-right next" href="" role="button" data-slide="next">Next</a>
                </div>
              </li>
    
            </section>
    
          </div>
          <!-- Almost done! -->
          <div class="item">
          
            <section>
    
              <li class="carousel5 carousel-form">
                <div class="carousel-question">
                  <h1>Almost done!</h1>
                  <p>Just a few more details to complete your profile.</p>
                </div>
              
                <div class="carousel-body">
                  <div class="contact-form">
                    
                      <div class="form-group">
                        <label for="ash_user_Login" class="pull-left"><?php _e('Username'); ?></label>
                        <input type="text" name="ash_user_login" id="ash_user_login" class="required form-control" placeholder="&nbsp;"/>
                      </div>    
                      <div class="form-group">
                        <label for="ash_user_email" class="pull-left"><?php _e('Email'); ?></label>
                        <input type="email"  name="ash_user_email" id="ash_user_email" class="required form-control" placeholder="&nbsp;"/>
                      </div>
                      <div class="form-group">
                        <label for="password" class="pull-left"><?php _e('Password'); ?></label>
                        <input type="password" name="ash_user_pass" id="password" class="required form-control"/>
                      </div>
                      <div class="form-group">
                        <label for="password_again" class="pull-left"><?php _e('Password Again'); ?></label>
                        <input type="password" name="ash_user_pass_confirm" id="password_again" class="required form-control"/>
                      </div>
                    
                    <div class="checkbox">
                      <label><input id="ash-tc-cb" type="checkbox"> 
            I have read and agreed to the <span>Terms of Use, Privacy Policy</span> and <span>Community Guidelines</span>, and I opt in to receiving e-mails from ipsy (I can unsubscribe any time).
            </label>
                    </div>
                    
                    
                  
                  </div>
                </div>
    
                <div class="carousel-btn">
                  <input type="hidden" name="ash_register_nonce" value="<?php echo wp_create_nonce('ash-register-nonce'); ?>"/>
                  <input id = "ash-submit-button" class="ash-right next" type="submit" role="button" value="<?php _e('Register Your Account'); ?>"/>
                </div>
              </li>
            </section>
          </div>
        </div>
    
        <!-- Left and right controls -->
    
      </div>
    
    </div>
    </fieldset>
</form>    


<?php     
  return ob_get_clean();
}

function ash_registration_form() {
 
  // only show the registration form to non-logged-in members

  if(!is_user_logged_in()) {
 
    global $ash_load_css;
 
    // set this to true so the CSS is loaded
    $ash_load_css = true;
 
    // check to make sure user registration is enabled
    $registration_enabled = get_option('users_can_register');
 
    // only show the registration form if allowed
    if($registration_enabled) {
      $output = ash_registration_form_fields();
    } else {
      $output = __('User registration is not enabled');
    }
    return $output;
  }else{?>
    
  <section class="article-single dark-wrapper">
    <div class="container">
      <div class="row">
        <p>You have no need to take this quiz again</p>  
      </div>      
    </div>
  </section>

  <?php }
}
add_shortcode('date-night-quiz', 'ash_registration_form');


// register a new user

function ash_add_new_member() {
    if (isset( $_POST["ash_user_login"] ) && wp_verify_nonce($_POST['ash_register_nonce'], 'ash-register-nonce')) {

    $user_login         = $_POST["ash_user_login"]; 
    $user_email         = $_POST["ash_user_email"];
    $ash_personality      = $_POST["ash_personality"];
    $ash_first_date       = $_POST["ash_first_date"];
    $ash_gender         = $_POST["ash_gender"];
    $ash_partner_gender     = $_POST["ash_partner_gender"];
    $ash_age_group        = $_POST["ash_age_group"];
    $ash_partner_age_group    = $_POST["ash_partner_age_group"];
    $ash_relationship_time    = $_POST["ash_relationship_time"];
    $ash_your_budget        = $_POST["your_budget"];
    $ash_not_interested       = $_POST["not_interested"];
    $ash_zip_code        = $_POST["zip_code"];
    $ash_how_far       = $_POST["how_far"];
    $ash_car_service       = $_POST["car_service"];
        
    
    
    $user_pass          = $_POST["ash_user_pass"];
    $pass_confirm         = $_POST["ash_user_pass_confirm"];
 
    // this is required for username checks
    require_once(ABSPATH . WPINC . '/registration.php');
 
    if(username_exists($user_login)) {
      // Username already registered
      ash_errors()->add('username_unavailable', __('Username already taken'));
    }
    if(!validate_username($user_login)) {
      // invalid username
      ash_errors()->add('username_invalid', __('Invalid username'));
    }
    if($user_login == '') {
      // empty username
      ash_errors()->add('username_empty', __('Please enter a username'));
    }
    if(!is_email($user_email)) {
      //invalid email
      ash_errors()->add('email_invalid', __('Invalid email'));
    }
    if(email_exists($user_email)) {
      //Email address already registered
      ash_errors()->add('email_used', __('Email already registered'));
    }
    if($user_pass == '') {
      // passwords do not match
      ash_errors()->add('password_empty', __('Please enter a password'));
    }
    if($user_pass != $pass_confirm) {
      // passwords do not match
      ash_errors()->add('password_mismatch', __('Passwords do not match'));
    }
 
    $errors = ash_errors()->get_error_messages();
 
    // only create the user in if there are no errors
    if(empty($errors)) {
 
      $new_user_id = wp_insert_user(array(
          'user_login'    => $user_login,
          'user_pass'     => $user_pass,
          'user_email'    => $user_email,
          'user_registered' => date('Y-m-d H:i:s'),
          'role'        => 'subscriber'
        )
      );

      add_user_meta( $new_user_id,'ash_personality', $ash_personality ); 
      add_user_meta( $new_user_id,'ash_first_date', $ash_first_date );
      add_user_meta( $new_user_id,'ash_gender', $ash_gender );
      add_user_meta( $new_user_id,'ash_partner_gender', $ash_partner_gender );
      add_user_meta( $new_user_id,'ash_age_group', $ash_age_group );
      add_user_meta( $new_user_id,'ash_partner_age_group', $ash_partner_age_group );
      add_user_meta( $new_user_id,'ash_relationship_time', $ash_relationship_time );
      add_user_meta( $new_user_id,'ash_your_budget', $ash_your_budget );
      add_user_meta( $new_user_id,'ash_not_interested', $ash_not_interested );
      add_user_meta( $new_user_id,'ash_zip_code', $ash_zip_code );
      add_user_meta( $new_user_id,'ash_how_far', $ash_how_far );
      add_user_meta( $new_user_id,'ash_car_service', $ash_car_service );
      

      if($new_user_id) {
        // send an email to the admin alerting them of the registration
        wp_new_user_notification($new_user_id);
 
        // log the new user in
        // wp_setcookie($user_login, $user_pass, true);
        // wp_set_current_user($new_user_id, $user_login);  
        // do_action('wp_login', $user_login);
 
        // send the newly created user to the home page after logging them in
        wp_redirect(site_url('/membership/')); exit;
      }
 
    }
 
  }
}
add_action('init', 'ash_add_new_member');


/* -----------------------------------------------------
   ------------------ user login form ------------------
   ----------------------------------------------------- */


// login form fields

function ash_login_form_fields() {
 
  ob_start(); ?>
 
    <?php
    // show any error messages after form submission
    ash_show_error_messages(); ?>
    <div class="mainwrapper">
        <div class="aaa_login">
          <div class="aaa_regter">
            <form id="ash_login_form"  class="ash_form" action="" method="post">
              <div class="aaa_reg_rgt">
                <p>User Name:</p>
                <input name="ash_user_login" id="ash_user_login" class="required" type="text" value="" placeholder="User Name">
              </div>
            
              <div class="aaa_reg_rgt">
                <p>Password:</p>
                <input name="ash_user_pass" id="ash_user_pass" class="required" type="password" value="" placeholder="Password">
              </div> 
          
              <div class="aaa_reg_rgt">
              <?php
                $user_ID = get_current_user_id();

                $user_data = get_userdata( $user_ID );

                $pw_user_status = get_user_meta( $user_ID, 'pw_user_status', true );

              ?>  
              <?php if($pw_user_status != 'pending'):?>
                <input type="hidden" name="ash_login_nonce" value="<?php echo wp_create_nonce('ash-login-nonce'); ?>"/>
              <?php endif;?>  
                <input  id="ash_login_submit" class="aaa_btn" type="submit" value="Login">
              </div>
            </form> 
          </div>
        </div>
      </div>  
  <?php
  return ob_get_clean();
}


function ash_login_form() {

 
  if(!is_user_logged_in()) {
 
    global $ash_load_css;
 
    // set this to true so the CSS is loaded
    $ash_load_css = true;
 
    $output = ash_login_form_fields();
  } else {
    // could show some logged in user info here
    // $output = 'user info here';
  }
  return $output;
}
add_shortcode('login_form', 'ash_login_form');


// logs a member in after submitting a form

function ash_login_member() {
 
  if(isset($_POST['ash_user_login']) && wp_verify_nonce($_POST['ash_login_nonce'], 'ash-login-nonce')) {
 
    // this returns the user ID and other info from the user name
    $user = get_userdatabylogin($_POST['ash_user_login']);
 
    if(!$user) {
      // if the user name doesn't exist
      ash_errors()->add('empty_username', __('Invalid username'));
    }
 
    if(!isset($_POST['ash_user_pass']) || $_POST['ash_user_pass'] == '') {
      // if no password was entered
      ash_errors()->add('empty_password', __('Please enter a password'));
    }
 
    // check the user's login with their password
    if(!wp_check_password($_POST['ash_user_pass'], $user->user_pass, $user->ID)) {
      // if the password is incorrect for the specified user
      ash_errors()->add('empty_password', __('Incorrect password'));
    }
 
    // retrieve all error messages
    $errors = ash_errors()->get_error_messages();
 
    // only log the user in if there are no errors
    if(empty($errors)) {
 
      wp_setcookie($_POST['ash_user_login'], $_POST['ash_user_pass'], true);
      wp_set_current_user($user->ID, $_POST['ash_user_login']); 
      do_action('wp_login', $_POST['ash_user_login']);
 
      wp_redirect(home_url()); exit;
    }
  }
}
add_action('init', 'ash_login_member');




/* -----------------------------------------------------------------------
   ------------------------  User Profile ----------------------------  
   ----------------------------------------------------------------------- */

function ash_user_profile_form_fields(){

  $user_ID = get_current_user_id();

  if($_GET['id']){
    $user_ID = $_GET['id'];
  }

  $user_data = get_userdata( $user_ID );

  $user_name = $user_data->user_login;
  $user_email = $user_data->user_email;
  $user_fullname = $user_data->display_name;

  $ash_personality = get_user_meta( $user_ID, 'ash_personality', true );
  $ash_first_date = get_user_meta( $user_ID, 'ash_first_date', true );
  $ash_gender = get_user_meta( $user_ID, 'ash_gender', true );
  $ash_partner_gender = get_user_meta( $user_ID, 'ash_partner_gender', true );
  $ash_age_group = get_user_meta( $user_ID, 'ash_age_group', true );
  $ash_partner_age_group = get_user_meta( $user_ID, 'ash_partner_age_group', true );
  $ash_relationship_time = get_user_meta( $user_ID, 'ash_relationship_time', true );
  $ash_your_budget = get_user_meta( $user_ID, 'ash_your_budget', true );
  $ash_not_interested = get_user_meta( $user_ID, 'ash_not_interested', true );
  $ash_zip_code = get_user_meta( $user_ID, 'ash_zip_code', true );
  $ash_how_far = get_user_meta( $user_ID, 'ash_how_far', true );
  $ash_car_service = get_user_meta( $user_ID, 'ash_car_service', true );
?>

  <div class="mainwraper">
    <section>
      <div class="container">
        <div class="col-sm-3">
          <div class="text-center"> <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
          </div><br>
          <ul class="list-group">
            <li class="list-group-item text-muted" contenteditable="false"><strong>Personal Details</strong></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Name:</strong></span><?php echo $user_fullname;?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">User Name:</strong></span><?php echo $user_name;?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class=""><strong>Email:</strong></strong></span><?php echo $user_email;?></li>
            <!-- <li class="list-group-item text-right"><span class="pull-left"><strong class="">Gender:</strong></span><?php echo $ash_gender;?></li> -->
          </ul>
          <!-- <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i> </div>
            <div class="panel-body"><a href="#" class="">yoursite.com</a> </div>
          </div> -->
        </div>
        <div class="col-sm-9">
        
         <div class="aaa_quz">
         <p class="aaa_bld">Do you need to change any Date Personality Profile answers?</p>
         <p>Ans: <?php echo $ash_personality;?></p>
         </div>
         <div class="aaa_quz">
         <p class="aaa_bld">Is this your first date?</p>
         <p>Ans: <?php echo $ash_first_date;?></p>
         </div>
         <div class="aaa_quz">
         <p class="aaa_bld">What is your gender?</p>
         <p>Ans: <?php echo $ash_gender;?></p>
         </div>
         <div class="aaa_quz">
         <p class="aaa_bld">What is your partner's gender?</p>
         <p>Ans: <?php echo $ash_partner_gender;?></p>
         </div>
         <div class="aaa_quz">
         <p class="aaa_bld">Select your age group</p>
         <p>Ans: <?php echo $ash_age_group;?></p>
         </div>
         <div class="aaa_quz">
         <p class="aaa_bld">Select your partner's age group?</p>
         <p>Ans: <?php echo $ash_partner_age_group;?></p>
         </div>
         <div class="aaa_quz">
         <p class="aaa_bld">How long have you been in a relationship with your partner?</p>
         <p>Ans: <?php echo $ash_relationship_time;?></p>
         </div>
         <div class="aaa_quz">
         <p class="aaa_bld">What is your budget?</p>
         <p>Ans: <?php echo $ash_your_budget;?></p>
         </div>
         <div class="aaa_quz">
         <p class="aaa_bld">Is there anything specific you are not interested in doing or trying?</p>
         <p>Ans: <?php echo $ash_not_interested;?></p>
         </div>
         <div class="aaa_quz">
         <p class="aaa_bld">Are you open to traveling?</p>
         <p>Ans: Zip Code: <?php echo $ash_zip_code;?>, Fair: <?php echo $ash_car_service;?></p>
         </div>
         
         <div class="aaa_quz">
         <p class="aaa_bld">Would you like to include car service in your package?</p>
         <p>Ans: <?php echo $ash_car_service;?></p>
         </div><br>
         <div class="clearfix"></div>
         <?php 
            $uid = $_GET['id'];
            if($_GET['id']):
          ?>
            <a class="aaa_edt_btn" href="<?php echo site_url('/edit-profile?id=').$uid;?>">Edit Your Profile</a>           
         <?php else:?>    
            <a class="aaa_edt_btn" href="<?php echo site_url('/edit-profile/');?>">Edit Your Profile</a>           
         <?php endif;?> 
          
         
         
         
        </div>
      </div>
    </section>
  </div>


<?php
}

function ash_user_profile_form() {
 
  // only show the registration form to non-logged-in members

  if(is_user_logged_in()) {
 
    global $ash_load_css;
 
    // set this to true so the CSS is loaded
    $ash_load_css = true;

    $output = ash_user_profile_form_fields();

    return $output;
  }else{
    echo '<p>You are not logged in so you can not edit your profile.</p>';
  }
}
add_shortcode('user_profile_form', 'ash_user_profile_form');



/* -----------------------------------------------------
   -------------    user profile edit   ----------------
   ----------------------------------------------------- */

   // Edit profile form fields

function ash_edit_profile_form_fields() {
 
  ob_start(); ?>  
 
    <?php 

    // show any error messages after form submission

    ash_show_error_messages(); ?>


    <?php 
      $user_ID = get_current_user_id(); 

      if($_GET['id']){
        $user_ID = $_GET['id'];
      }
    ?> 

    

    <?php $user_data = get_userdata( $user_ID );?>

    <?php 
        $ash_personality = get_user_meta( $user_ID, 'ash_personality', true );
        $ash_first_date = get_user_meta( $user_ID, 'ash_first_date', true );
        $ash_gender = get_user_meta( $user_ID, 'ash_gender', true );
        $ash_partner_gender = get_user_meta( $user_ID, 'ash_partner_gender', true );
        $ash_age_group = get_user_meta( $user_ID, 'ash_age_group', true );
        $ash_partner_age_group = get_user_meta( $user_ID, 'ash_partner_age_group', true );
        $ash_relationship_time = get_user_meta( $user_ID, 'ash_relationship_time', true );
        $ash_your_budget = get_user_meta( $user_ID, 'ash_your_budget', true );
        $ash_not_interested = get_user_meta( $user_ID, 'ash_not_interested', true );
        $ash_zip_code = get_user_meta( $user_ID, 'ash_zip_code', true );
        $ash_how_far = get_user_meta( $user_ID, 'ash_how_far', true );
        $ash_car_service = get_user_meta( $user_ID, 'ash_car_service', true );
    ?>
    <?php 
      $users = get_userdata( $user_ID ); 

      // echo "<pre>";
      // print_r($users);
      // echo "</pre>";

      $user_name = $users->user_login;
      $user_email = $users->user_email;
      $full_name = $users->display_name;
    ?> 
<div class="mainwraper">
  <section>
    <div class="container">
      <div class="col-sm-3">
        <div class="text-center"> <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
          <h6>Upload a different photo...</h6>
          <input type="file" class="text-center center-block well well-sm">
        </div>
        <ul class="list-group mxwdth">
          <li class="list-group-item text-muted" contenteditable="false"><strong>Personal Details</strong></li>
          <li class="list-group-item text-right"><span class="pull-left"><strong class="">Name:</strong></span><input name="" value="<?php echo $user_name;?>" type="text" disabled></li>
          <li class="list-group-item text-right"><span class="pull-left"><strong class="">User Name:</strong></span><input name="" value="<?php echo $full_name;?>" type="text" disabled></li>
          <li class="list-group-item text-right"><span class="pull-left"><strong class=""><strong>Email:</strong></strong></span><input name="" value="<?php echo $user_email;?>" type="text" disabled></li>
        </ul>
      </div>
      <div class="col-sm-9">
        
        <form id="ash_edit_registration_form" class="ash_edit_form" action="" method="POST">
          <fieldset>        

             <div class="aaa_quz">
               <p class="aaa_bld">Do you need to change any Date Personality Profile answers?</p>
               <div class="aaa_edt">
                  <input type="radio" name="ash_edit_personality" value="Yes" <?php if($ash_personality == 'Yes'){echo 'checked';}?>> Yes<br>
                  <input type="radio" name="ash_edit_personality" value="No" <?php if($ash_personality == 'No'){echo 'checked';}?>> No<br>
               </div>
             </div>
             <div class="aaa_quz">
               <p class="aaa_bld">Is this your first date?</p>
               <div class="aaa_edt">
                  <input type="radio" name="ash_edit_first_date" value="Yes" <?php if($ash_first_date == 'Yes'){echo 'checked';}?>> Yes<br>
                  <input type="radio" name="ash_edit_first_date" value="No" <?php if($ash_first_date == 'No'){echo 'checked';}?>> No<br>
                </div>
             </div>
             <div class="aaa_quz">
               <p class="aaa_bld">What is your gender?</p>
               <div class="aaa_edt">
                  <input type="radio" name="ash_edit_gender" id="ash_edit_gender1" value="Male" <?php if($ash_gender == 'Male'){echo 'checked';}?>> Male<br>
                  <input type="radio" name="ash_edit_gender" id="ash_edit_gender2" value="Female"  <?php if($ash_gender == 'Female'){echo 'checked';}?>> Female<br>
               </div>
             </div>
             <div class="aaa_quz">
               <p class="aaa_bld">What is your partner's gender?</p>
               <div class="aaa_edt">
                  <input type="radio" name="ash_edit_partner_gender" id="ash_edit_partner_gender_1" value="Male" <?php if($ash_partner_gender == 'Male'){echo 'checked';}?>> Male<br>
                  <input type="radio" name="ash_edit_partner_gender" id="ash_edit_partner_gender_2" value="Female" <?php if($ash_partner_gender == 'Female'){echo 'checked';}?>> Female<br>
               </div>
             </div>         
             <div class="aaa_quz">
                <p class="aaa_bld">Select your age group</p>
                <div class="aaa_edt">
                  <select name="ash_edit_age_group" id="ash_edit_age_group" class="form-control">
                  <option <?php if($ash_age_group == ''){echo 'selected';}?> value="">Select</option>
                  <option <?php if($ash_age_group == '18-25'){echo 'selected';}?> value="18-25">18-25</option>
                  <option <?php if($ash_age_group == '26-34'){echo 'selected';}?> value="26-34">26-34</option>
                  <option <?php if($ash_age_group == '35-48'){echo 'selected';}?> value="35-48">35-48</option>
                  <option <?php if($ash_age_group == '49-67'){echo 'selected';}?> value="49-67">49-67</option>
                  </select>
                </div>
             </div>
             <div class="aaa_quz">
                <p class="aaa_bld">Select your partner's age group?</p>
                <div class="aaa_edt">
                  <select name="ash_edit_partner_age_group" id="ash_edit_partner_age_group" class="form-control">
                    <option <?php if($ash_partner_age_group == ''){echo 'selected';}?> value="">Select</option>
                    <option <?php if($ash_partner_age_group == '18-25'){echo 'selected';}?> value="18-25">18-25</option>
                    <option <?php if($ash_partner_age_group == '26-34'){echo 'selected';}?> value="26-34">26-34</option>
                    <option <?php if($ash_partner_age_group == '35-48'){echo 'selected';}?> value="35-48">35-48</option>
                    <option <?php if($ash_partner_age_group == '49-67'){echo 'selected';}?> value="49-67">49-67</option>
                  </select>
                </div>
             </div>
             <div class="aaa_quz">
                <p class="aaa_bld">How long have you been in a relationship with your partner?</p>
                <div class="aaa_edt">
                  <select name="ash_edit_relationship_time" id="ash_edit_relationship_time" class="form-control">
                    <option <?php if($ash_relationship_time == ''){echo 'selected';}?> value="">Select</option>
                    <option <?php if($ash_relationship_time == '18-25'){echo 'selected';}?> value="18-25">18-25</option>
                    <option <?php if($ash_relationship_time == '26-34'){echo 'selected';}?> value="26-34">26-34</option>
                    <option <?php if($ash_relationship_time == '35-48'){echo 'selected';}?> value="35-48">35-48</option>
                    <option <?php if($ash_relationship_time == '49-67'){echo 'selected';}?> value="49-67">49-67</option>
                  </select>
                </div>
             </div>
             <div class="aaa_quz">
               <p class="aaa_bld">What is your budget?</p>           
               <div class="aaa_edt">
                  <input type="radio" name="ash_edit_your_budget" id="ash_edit_your_budget1" <?php if($ash_your_budget == '$30-60'){echo 'checked';}?> value="$30-60"> $30-60<br>
                  <input type="radio" name="ash_edit_your_budget" id="ash_edit_your_budget2" <?php if($ash_your_budget == 'Under$100'){echo 'checked';}?>value="Under$100"> Under$100<br>
                  <input type="radio" name="ash_edit_your_budget" id="ash_edit_your_budget3" <?php if($ash_your_budget == 'Under$200'){echo 'checked';}?>value="Under$200"> Under$200<br>
                  <input type="radio" name="ash_edit_your_budget" id="ash_edit_your_budget4" <?php if($ash_your_budget == 'I want to fun'){echo 'checked';}?>value="I want to fun"> I want to fun<br>
                </div>
             </div>  
             <div class="aaa_quz">
               <p class="aaa_bld">Is there anything specific you are not interested in doing or trying?</p>
               <div class="aaa_edt"><textarea  name="ash_edit_not_interested" id="ash_edit_not_interested" class="form-control"><?php echo $ash_not_interested;?></textarea></div>
             </div>
             <div class="aaa_quz">
               <p class="aaa_bld">Are you open to traveling?</p>
                <div class="aaa_edt" style="clear:both;">
                  <input class="form-control" type="text" name="ash_edit_zip_code" id="ash_edit_zip_code" value = "<?php echo $ash_zip_code;?>" placeholder="zip-code">
                </div>
             </div>

             <div class="aaa_quz">
               <p class="aaa_bld">How far?</p>
                <div class="aaa_edt">
                  <select name="ash_edit_how_far" id="ash_edit_how_far" class="form-control">
                    <option <?php if($ash_how_far == ''){echo 'selected';}?> value="">Select</option>
                    <option <?php if($ash_how_far == '18-25'){echo 'selected';}?> value="18-25">18-25</option>
                    <option <?php if($ash_how_far == '26-34'){echo 'selected';}?> value="26-34">26-34</option>
                    <option <?php if($ash_how_far == '35-48'){echo 'selected';}?> value="35-48">35-48</option>
                    <option <?php if($ash_how_far == '49-67'){echo 'selected';}?> value="49-67">49-67</option>
                  </select> 
                </div>
             </div>
             <div class="aaa_quz">
              <p class="aaa_bld">Would you like to include car service in your package?</p>
              <div class="aaa_edt">
                  <input type="radio" name="ash_edit_car_service" <?php if($ash_car_service == 'Yes'){echo 'checked';}?> value="Yes"> Yes<br>
                  <input type="radio" name="ash_edit_car_service" <?php if($ash_car_service == 'No'){echo 'checked';}?> value="No"> No<br>
              </div>
             </div>
             <div class="clearfix"></div>
            <p>
              <input type="hidden" name="ash_edit_register_nonce" value="<?php echo wp_create_nonce('ash-edit-register-nonce'); ?>"/>
              <input class="btn btn-primary login-button btn-xs" type="submit" value="<?php _e('Edit Your Account'); ?>"/>
            </p>
          </fieldset>
        </form>
      </div>
    </div>
  </section>        
</div>  
  <?php
  return ob_get_clean();
}

function ash_edit_profile_form() {
 
  // only show the registration form to non-logged-in members

  if(is_user_logged_in()) {
 
    global $ash_load_css;
 
    // set this to true so the CSS is loaded
    $ash_load_css = true;

    $output = ash_edit_profile_form_fields();

    return $output;
  }else{
    echo '<p>You are not logged in so you can not edit your profile.</p>';
  }
}
add_shortcode('edit_user_form', 'ash_edit_profile_form');


function ash_edit_member_profile() {

    if (  wp_verify_nonce($_POST['ash_edit_register_nonce'], 'ash-edit-register-nonce')) {
      
      $ash_edit_personality   = $_POST["ash_edit_personality"];
      $ash_edit_first_date   = $_POST["ash_edit_first_date"];
      $ash_edit_gender   = $_POST["ash_edit_gender"];
      $ash_edit_partner_gender   = $_POST["ash_edit_partner_gender"];      
      $ash_edit_age_group   = $_POST["ash_edit_age_group"];
      $ash_edit_partner_age_group   = $_POST["ash_edit_partner_age_group"];
      $ash_edit_relationship_time   = $_POST["ash_edit_relationship_time"];      
      $ash_edit_your_budget   = $_POST["ash_edit_your_budget"];
      $ash_edit_not_interested   = $_POST["ash_edit_not_interested"];      
      $ash_edit_zip_code   = $_POST["ash_edit_zip_code"];
      $ash_edit_how_far   = $_POST["ash_edit_how_far"];
      $ash_edit_car_service   = $_POST["ash_edit_car_service"];


      $user_ID = get_current_user_id();

      if($_GET['id']){
        $user_ID = $_GET['id'];
      }

      update_user_meta( $user_ID, 'ash_personality', $ash_edit_personality);
      update_user_meta( $user_ID, 'ash_first_date', $ash_edit_first_date);
      update_user_meta( $user_ID, 'ash_gender', $ash_edit_gender);
      update_user_meta( $user_ID, 'ash_partner_gender', $ash_edit_partner_gender);      
      update_user_meta( $user_ID, 'ash_age_group', $ash_edit_age_group);
      update_user_meta( $user_ID, 'ash_partner_age_group', $ash_edit_partner_age_group);
      update_user_meta( $user_ID, 'ash_relationship_time', $ash_edit_relationship_time);
      update_user_meta( $user_ID, 'ash_your_budget', $ash_edit_your_budget);
      update_user_meta( $user_ID, 'ash_not_interested', $ash_edit_not_interested);
      update_user_meta( $user_ID, 'ash_how_far', $ash_edit_zip_code);
      update_user_meta( $user_ID, 'ash_how_far', $ash_edit_how_far);
      update_user_meta( $user_ID, 'ash_car_service', $ash_edit_car_service);


      if ( is_wp_error( $user_ID ) ) {
        echo 'Unsuccess';
      } else {
        echo 'Success';
      } 



    }
}

add_action('init', 'ash_edit_member_profile');



/* -----------------------------------------------------------------------
   ------------------------  Error management ----------------------------  
   ----------------------------------------------------------------------- */



// used for tracking error messages

function ash_errors(){
    static $wp_error; // Will hold global variable safely
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}


// displays error messages from form submissions

function ash_show_error_messages() {
  if($codes = ash_errors()->get_error_codes()) {
    echo '<div class="ash_errors">';
        // Loop error codes and display errors
       foreach($codes as $code){
            $message = ash_errors()->get_error_message($code);
            echo '<span class="error"><strong>' . __('Error') . '</strong>: ' . $message . '</span><br/>';
        }
    echo '</div>';
  } 
}



/* -----------------------------------------------------------------------
   ------------------------  Style management ----------------------------  
   ----------------------------------------------------------------------- */


add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );


function register_plugin_styles() { 

  wp_register_style( 'my-plugin2', plugins_url( 'front-end-registration-login/css/style.css' ) );
  wp_enqueue_style( 'my-plugin2' );

}


function my_scripts_method() {
  wp_enqueue_script('newscript1',plugins_url( '/js/jquery.js' , __FILE__ ));
  wp_enqueue_script('newscript2',plugins_url( '/js/bootstrap.js' , __FILE__ ));
  wp_enqueue_script('newscript3',plugins_url( '/js/ash-custom.js' , __FILE__ ));
  
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );




/* -----------------------------------------------------------------------------------------
   ------------------------ Admin Menu add for all user ------------------------------------
   ----------------------------------------------------------------------------------------- */

add_action('admin_menu', 'my_menu');

function my_menu() {
    add_menu_page('All User Information', 'All User Information', 'manage_options', 'all-user-information', 'all_user_function');
}

function all_user_function() {
  // $args = array(
  //   'role'         => 'subscriber'
  //  ); 
  // $all_u = get_users( $args );
  // echo '<pre>';
  //   print_r($all_u);
  // echo '</pre>';

  // $blogusers = get_users( 'role=subscriber' );
  // Array of WP_User objects.
  
?>
    
    
    <!-- echo '<span>' . esc_html( $user->ID ) . '</span><br/>';
    echo '<span>' . esc_html( $user->user_email ) . '</span><br/>';
    echo '<span>' . esc_html( $user->user_login ) . '</span><br/>'; -->
    <table style="width:90%; padding-top: 10px;" id="table_id" class="display">
        <thead>
            <tr style="font-size: 20px; padding-bottom: 10px;">
                <th style="padding-bottom: 15px;">ID</th>
                <th style="padding-bottom: 15px;">User Name</th>
                <th style="padding-bottom: 15px;">Email</th>
                <th style="padding-bottom: 15px;">Role</th>
                <th style="padding-bottom: 15px;">Status</th>
            </tr>
        </thead>
         
        <tbody>
              <?php 
                $blogusers = get_users( 'role=subscriber' );  
                foreach ( $blogusers as $user ):                
              ?>
              <?php $profile_url = site_url().'/profile?id='.$user->ID; ?>
              <tr>
                  <td style="border: 1px solid #ccc; padding: 10px 0px !important; text-align:center; font-size:15px; text-transform:capitalize"><?php echo $user->ID;?></td>
                  <td style="border: 1px solid #ccc; padding: 10px 0px !important; text-align:center; font-size:15px; text-transform:capitalize"><a style="text-decoration:none" href="<?php echo $profile_url;?>"><?php echo esc_html( $user->user_login )?></a></td>
                  <td style="border: 1px solid #ccc; padding: 10px 0px !important; text-align:center; font-size:15px; text-transform:capitalize"><?php echo $user->user_email;?></td>
                  <td style="border: 1px solid #ccc; padding: 10px 0px !important; text-align:center; font-size:15px; text-transform:capitalize">Subscriber</td>
              </tr>
            <?php endforeach;?>
        </tbody>
    </table>

<?php }
