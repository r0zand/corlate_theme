<?php
 //Retrieving Section LHS Title
$lhs_title_content     = get_sub_field( 'lhs_title' );

//Retrieving Section RHS Title
$rhs_title_content     = get_sub_field( 'rhs_title' );
?>
<section id="middle">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 wow fadeInDown">
        <div class="skill">
          <?php if ( $lhs_title_content ) { 
            ?>
            <h2><?php echo $lhs_title_content; ?></h2>
            <?php
          }
          $c=1;
          if( have_rows( 'repeat_section' ) ):
            while ( have_rows( 'repeat_section' ) ) : the_row();
              //Retrieving Skill Name
              $skills        = get_sub_field( 'skill_name' );
              //Retrieving Skill Percentage
              $percentage    = get_sub_field( 'skill_percentage' );
              ?>
              <div class="progress-wrap">
                <?php if ( $skills ) { 
                  ?>
                  <h3><?php echo $skills; ?></h3>
                <?php }
                ?>
                <div class="progress">
                  <?php if ( $percentage ) { 
                    ?>
                    <div class="progress-bar  color<?php echo $c; ?>" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentage; ?>">
                      <span class="bar-width"><?php echo $percentage; ?></span>
                    </div>
                  <?php }
                  ?>

                </div>
              </div>
              <?php
              $c++;
            endwhile;
          endif;
          ?>
        </div>
      </div><!--/.col-sm-6-->
      
      <?php 
      //Retrieving RHS Title 
      $rhs_title  = get_sub_field( 'rhs_title' );
      ?>
      <div class="col-sm-6 wow fadeInDown">
        <div class="accordion">
          <?php if ( $rhs_title ) { 
            ?>
            <h2><?php echo $rhs_title; ?></h2>
          <?php }
          ?>
          <div class="panel-group" id="accordion1">
            <?php
            $o = 1;
            if( have_rows( 'repeater_section_rhs' ) ):
              while ( have_rows( 'repeater_section_rhs' ) ) : the_row();
                //Retrieving Image  
                $imgs     = get_sub_field('image_');
                //Retrieving Title 
                $titles   = get_sub_field( 'title' );
                //Retrieving Content 
                $contents = get_sub_field( 'content' );
                ?>
                <div class="panel panel-default">
                  <div class="panel-heading<?php if ( $o==1 ){
                    echo " active"; 
                    }else {
                      echo "";
                    } ?>">
                    <h3 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php if($o==1){
                        echo "One1";
                        }elseif ( $o==2 ) {
                          echo "Two1";
                          }elseif ( $o==3 ) {
                            echo "Three1";
                            }elseif ( $o==4 ) {
                              echo "Four1";
                            }?>">
                            <?php echo $titles; ?>
                            <i class="fa fa-angle-right pull-right"></i>
                          </a>
                        </h3>
                      </div>

                      <div id="collapse<?php if($o==1){
                        echo "One";
                        }elseif ( $o==2 ) {
                          echo "Two";
                          }elseif ( $o==3 ) {
                            echo "Three";
                            }elseif ( $o==4 ) {
                              echo "Four";
                              }?>1" class="panel-collapse collapse<?php if( $o==1 ){
                                echo " in";
                              }?>">
                              <div class="panel-body">
                                <div class="media accordion-inner">
                                  <div class="pull-left">
                                    <img class="img-responsive" src="<?php echo $imgs['url']; ?>">
                                  </div>
                                  <div class="media-body">
                                    <?php echo $contents; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php
                          $o++;
                        endwhile;
                      endif;
                      ?>
                    </div><!--/#accordion1-->
                  </div>
                </div>
              </div><!--/.row-->
            </div><!--/.container-->
</section><!--/#middle-->