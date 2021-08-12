 <section id="content" class="shortcode-item">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7">
        <?php 
        $title = get_sub_field( 'title_lhs' );
        if ( $title ) {  
          ?>
          <h2><?php echo $title; ?></h2> 
          <?php 
        }
        ?>
        <div class="tab-wrap">
          <div class="media">
            <div class="parrent pull-left">
              <ul class="nav nav-tabs nav-stacked">
                <?php
                $c=1;
                if( have_rows( 'repeater_lhs' ) ):
                  while ( have_rows( 'repeater_lhs' ) ) : the_row();
                    $titles = get_sub_field('title');
                    ?>
                    <li class="<?php if ( $c==2 ) { 
                      echo "active"; 
                      }
                      ?>"><a href="#tab<?php echo $c; ?>" data-toggle="tab" class="<?php if($c==1){
                      echo "analistic-01";
                      }elseif($c==2){
                        echo "analistic-02";
                      }
                      else{
                        echo "tehnical";
                      }
                      ?>"><?php echo $titles; ?></a></li>
                      <?php
                      $c++;
                    endwhile;
                  endif;
                  ?>
                </ul>
              </div>

              <div class="parrent media-body">
                <div class="tab-content">
                 <?php
                 $c=1;
                 if( have_rows( 'repeater_lhs' ) ):
                  while ( have_rows( 'repeater_lhs' ) ) : the_row();
                    $imgs = get_sub_field('image');
                    $contents = get_sub_field('content');
                    ?>
                    <div class="tab-pane fade<?php if( $c==2 ){
                      echo " active in";
                    }
                    ?>" id="tab<?php echo $c; ?>">
                    <?php if( $imgs ){ ?>
                      <div class="media">
                        <div class="pull-left">

                          <img class="img-responsive" src="<?php echo $imgs['url']; ?>">
                        </div>
                        <div class="media-body">
                          <?php echo $contents; ?>
                        </div>
                      </div>
                      <?php 
                    }else{
                      echo $contents;
                    }
                    ?>
                  </div>
                  <?php
                  $c++;
                endwhile;
              endif;
              ?>
            </div> <!--/.tab-content-->  
          </div> <!--/.media-body--> 
        </div> <!--/.media-->     
      </div><!--/.tab-wrap-->               
    </div><!--/.col-sm-6-->

    <div class="col-xs-12 col-sm-5">
     <?php $rhs_title = get_sub_field( 'title_rhs' );
     $repeater_rhs = get_sub_field( 'repeater_section_rhs' );
     ?>
     <h2><?php echo $rhs_title; ?></h2>
     <div class="accordion">
      <div class="panel-group" id="accordion1">
       <?php
       $o=1;
       if( have_rows( 'repeater_section_rhs' ) ):
        while ( have_rows( 'repeater_section_rhs' ) ) : the_row();
          // Retreiving the Image 
          $imgs     = get_sub_field('image');
          // Retreiving The Author Name 
          $titles   = get_sub_field( 'author' );
          // Retreiving The Content 
          $contents = get_sub_field( 'content' );
          ?>
          <div class="panel panel-default">
            <div class="panel-heading<?php if ($o==1){
              echo " active"; 
              }else{
                echo "";
              } ?>">
              <h3 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php if($o==1){
                  echo "One1";
                  }elseif($o==2){
                    echo "Two1";
                    }elseif($o==3){
                      echo "Three1";
                      }elseif($o==4){
                        echo "Four1";
                      }?>">
                      <?php echo $titles; ?>
                      <i class="fa fa-angle-right pull-right"></i>
                    </a>
                  </h3>
                </div>

                <div id="collapse<?php if($o==1){
                  echo "One";
                  }elseif($o==2){
                    echo "Two";
                    }elseif($o==3){
                      echo "Three";
                      }elseif($o==4){
                        echo "Four";
                        }?>1" class="panel-collapse collapse<?php if( $o==1 ){
                          echo " in";
                        }?>">
                        <div class="panel-body">
                          <div class="media accordion-inner">
                            <div class="pull-left">
                              <?php if ( $imgs ) { 
                                ?>
                                <img class="img-responsive" src="<?php echo $imgs['url']; ?>">
                                <?php 
                              }
                              ?>
                            </div>
                            <?php if ( $contents ) { 
                              ?>
                              <div class="media-body">
                                <?php echo $contents; ?>
                              </div>
                              <?php 
                            }
                            ?>
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
    </section><!--/#content-->

