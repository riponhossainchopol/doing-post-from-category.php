 <?php 
$left_category=get_the_category_by_ID($redux_demo['left']);
      $national=new WP_Query(array(
            'post_type'=>'cour',
            'posts_per_page'=>4,
            'category_name'=>$left_category,
          
            ))
            ?>
            <!--           first row-->
        <?php while($national->have_posts()):$national->the_post()?>
            <div class="row">
                <div class="sec">
                    <div class="mest">
                        <div class="title">
                            <h3>course</h3> 
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            <!--            end here--> 
            
            
            <?php 
$right_category=get_the_category_by_id($redux_demo['right']);
      $international=new WP_Query(array(
            'post_type'=>'cour',
            'posts_per_page'=>4,
            'category_name'=>$right_category,
          
            ))
            ?>
            <!--       first row-->
<?php while($international->have_posts()):$international->the_post()?>
            <div class="row">
                <div class="tech">
                    <div class="test">
                        <div class="vitle">
                            <h3>course</h3> 
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            
            <!--            end here-->
            
<!--    in redux framework-->
      <?php       
Redux::setSection( $opt_name, array(
    'title'      => __( 'category test', 'redux-framework-demo' ),
    'desc'       => __( 'upload company achievement', 'redux-framework-demo' ),
    'fields' => array(
    array(
    'id'       => 'left',
    'type'     => 'select', 
    'data'     => 'category', 
    'title'    => __('upload teacher taking class', 'redux-framework-demo'),
        'default'=>1,
    ),
    array(
    'id'       => 'right',
    'type'     => 'select', 
    'data'     => 'category', 
    'default'=>1,
    'title'    => __('upload teacher taking class', 'redux-framework-demo'),
    ),
      
    ),

        )
                 );   
          
         
        