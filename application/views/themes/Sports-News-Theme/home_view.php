<?php
    $this->load->helper('text');
    $bu = base_url();
    if (isset($ads) && is_array($ads)) {
        extract($ads);
    }
?>

        <!-- header news Area
        ============================================ -->
        <section class="headding-news">
            <div class="container">
                <div class="row row-margin">
                    <div class="col-xs-12 col-md-6 col-sm-6 col-padding">
                        <div>
                            
                            <?php 

                                for($i=1;$i<=1;$i++){
                                if (!isset($hn['news_title_'.$i]))
                                continue;
                            ?>

                            <div class="item">
                                <div class="post-wrapper  fadeIn" data-wow-duration="2s">
                                    <div class="img-zoom-in">
                                        <?php if(@$hn['image_check_1']!=NULL){?>
                                            <a href="<?php echo html_escape(@$hn['news_link_1']);?>">
                                                <img class="entry-thumb-4 masonry-thumb" src="<?php echo html_escape(@$hn['image_large_1']);?>" alt="<?php echo  html_escape(@$hn['image_alt_1']) ?>">
                                            </a>
                                        <?php } else{ ?>
                                            <a href="<?php echo html_escape(@$hn['news_link_1']);?>" rel="bookmark">
                                                <img  src="http://img.youtube.com/vi/<?php echo html_escape(@$hn['video_1']);?>/0.jpg" alt="" class="entry-thumb-4">
                                            </a>
                                        <?php } ?>
                                    </div>

                                    <div class="post-info">
                                        <span class="color-3"><a href="<?php echo html_escape(@$hn['category_link_'.$i])?>"><?php echo html_escape(@$hn['category_name_'.$i])?></a></span>
                                        
                                        <h3 class="post-title post-title-size"><a href="<?php echo html_escape(@$hn['news_link_'.$i]);?>" rel="bookmark"> <?php echo (@$hn['news_title_'.$i]);?></a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> <?php echo html_escape(@$hn['post_date_as_' . $i]); ?>
                                            </div>
                                            <?php if(@$hn['video_'.$i]!=NULL) {?>
                                            <a class="playvideo pull-right" href="<?php echo html_escape(@$hn['news_link_'.$i]);?>"><i class="fa fa-play-circle-o"></i></a>
                                            <?php } else{?>
                                            <a class="readmore pull-right" href="<?php echo html_escape(@$hn['news_link_'.$i]);?>"><i class="pe-7s-angle-right"></i></a>
                                             <?php } ?>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        <?php }?>

                        </div>
                    </div>


                    <div class="hidden-xs col-md-6 col-sm-6 col-padding-1">
                        <section class="articale-inner">
                            <div class="row">
                                <div id="content-slide-5" class="owl-carousel">
                                    <!-- item-1 -->
                                    <div class="item">
                                        <div class="row rn_block">

                                            <?php 
                                                for($i=2;$i<=5;$i++){
                                                if (!isset($hn['news_title_'.$i]))
                                                continue;
                                            ?>

                                            <div class="col-md-6 col-sm-6 padd">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                    <!-- image -->
                                                    <div class="post-thumb">
                                                        <?php if(@$hn['image_check_'.$i]!=NULL){?>
                                                            <a href="<?php echo html_escape(@$hn['news_link_'.$i]);?>">
                                                                <img class="img-responsive" src="<?php echo html_escape(@$hn['image_thumb_'.$i])?>" alt="<?php echo  html_escape(@$hn['image_alt_'.$i]) ?>">
                                                            </a>
                                                        <?php } else{ ?>
                                                            <a href="<?php echo html_escape(@$hn['news_link_'.$i]);?>" rel="bookmark">
                                                                <img  src="http://img.youtube.com/vi/<?php echo html_escape(@$hn['video_'.$i]);?>/0.jpg" alt=""  class="img-responsive">
                                                            </a>
                                                        <?php }?>
                                                    </div>

                                                    <div class="post-info meta-info-rn">
                                                        <div class="slide">
                                                            <a class="post-badge btn_five" href="<?php echo html_escape(@$hn['category_link_'.$i])?>"><?php echo html_escape(@$hn['category_name_'.$i])?></a>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="post-title-author-details">
                                                    <h4><a href="<?php echo html_escape(@$hn['news_link_'.$i]);?>" > <?php echo (@$hn['news_title_'.$i]);?></a></h4>
                                                </div>
                                                <div class="post-editor-date">
                                                    <i class="pe-7s-clock"></i> <?php echo html_escape(@$hn['post_date_as_' . $i]); ?>
                                                </div>
                                            </div>

                                        <?php }?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </section> 

        <!-- add two -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="banner-add <?php echo (@$lg_status_12==0?'hidden-lg hidden-md':'')?> <?php echo (@$sm_status_12==0?'hidden-xs hidden-sm':'')?>">
                        <?php echo @$home_12; ?>
                    </div> 

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <?php if(@$home_page_positions[1]['status']==1){ ?>
                        <section class="politics_wrapper">
                            <h3 class="category-headding "><a href="<?php echo base_url('category/').$pn['position_1']['category_1']?>"><?php echo html_escape($home_page_positions[1]['cat_name']);?></a></h3>
                            <div class="headding-border"></div>
                            <div class="row">
                                <div id="content-slide-2" class="owl-carousel">
                                    <!-- item-1 -->
                                    <div class="item">
                                        <div class="row">
                                            <!-- main post -->
                                            <div class="col-sm-6 col-md-6">
                                                <?php if(@$pn['position_1']['image_check_1']!=NULL){?>
                                                <div class="home2-post">
                                                    
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                        <!-- post image -->
                                                        <div class="post-thumb">
                                                            <?php if(@$pn['position_1']['image_check_1']!=NULL){?>
                                                                <a href="<?php echo html_escape(@$pn['position_1']['news_link_1']); ?>">
                                                                    <img src="<?php echo html_escape(@$pn['position_1']['image_large_1']); ?>" class="img-responsive" alt="<?php echo html_escape(@$pn['position_1']['image_alt_1'])?>">
                                                                </a>
                                                            <?php } else{?>
                                                             <a href="<?php echo html_escape(@$pn['position_1']['news_link_1']); ?>" rel="bookmark">
                                                                    <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_1']['video_1']); ?>/0.jpg" alt="">
                                                                </a>
                                                            <?php } ?>    
                                                        </div>
                                                        <!-- post title -->
                                                        <h3><a href="<?php echo html_escape(@$pn['position_1']['news_link_1']); ?>"><?php echo html_escape(@$pn['position_1']['news_title_1']); ?></a></h3>
                                                    </div>

                                                    <div class="post-title-author-details">
                                                        <div class="date">
                                                            <ul>
                                                                <li><?php echo display('by')?> <a title="" href="#"><span><?php echo html_escape(@$pn['position_1']['post_by_name_1']); ?></span></a> --</li>
                                                                <li><a title="" href="#"><?php echo html_escape(@$pn['position_1']['ptime_1']); ?></a> </li>
                                                            </ul>
                                                        </div>
                                                         <?php 
                                                            $news_details = $pn['position_1']['full_news_1'];
                                                            $exploded = implode(' ', array_slice(explode(' ', $news_details), 0, 60));
                                                            echo htmlspecialchars_decode($exploded);
                                                        ?>

                                                        <a href="<?php echo html_escape(@$pn['position_1']['news_link_1']); ?>"><?php echo @display('read_more');?></a>
                                                    </div>

                                                </div>
                                                <?php } ?>  
                                            </div>

                                            <!-- right side post -->
                                            <div class="col-sm-6 col-md-6">
                                                <div class="row rn_block">

                                                <?php for($i=2; $i<=5; $i++){
                                                    if (!isset($pn['position_1']['news_title_'.$i]))
                                                    continue;
                                                ?>
                                                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                        <div class="home2-post">
                                                            <!-- post image -->
                                                            <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">

                                                                <?php if(@$pn['position_1']['image_check_'.$i]!=NULL){?>
                                                                    <a href="<?php echo html_escape(@$pn['position_1']['news_link_'.$i]); ?>">
                                                                        <img src="<?php echo html_escape(@$pn['position_1']['image_thumb_'.$i]); ?>" class="img-responsive" alt="<?php echo html_escape(@$pn['position_1']['image_alt_'.$i])?>">
                                                                    </a>
                                                                <?php } else{?>
                                                                 <a href="<?php echo html_escape(@$pn['position_1']['news_link_'.$i]); ?>" rel="bookmark">
                                                                        <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_1']['video_'.$i]); ?>/0.jpg" alt="">
                                                                    </a>
                                                                <?php } ?>

                                                            </div>

                                                            <div class="post-title-author-details">
                                                                <!-- post image -->
                                                                <h5><a href="<?php echo html_escape(@$pn['position_1']['news_link_'.$i]); ?>">
                                                                    <?php echo character_limiter(@$pn['position_1']['news_title_'.$i], 30); ?></a></h5>
                                                                <div class="date">
                                                                    <ul>
                                                                        <li><?php echo display('by')?> <a href="#"><span><?php echo html_escape(@$pn['position_1']['post_by_name_'.$i]); ?></span></a> --</li>
                                                                        <li><a href="#"><?php echo html_escape(@$pn['position_1']['ptime_'.$i]); ?></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- item-2 -->
                                    <div class="item">
                                        <div class="row">
                                            <!-- main post -->
                                            <div class="col-sm-6 col-md-6">
                                                <div class="home2-post">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                        <!-- post image -->
                                                        <div class="post-thumb">
                                                        <?php if(@$pn['position_1']['image_check_6']!=NULL){?>
                                                            <a href="<?php echo html_escape(@$pn['position_1']['news_link_6']); ?>">
                                                                <img src="<?php echo html_escape(@$pn['position_1']['image_large_6']); ?>" class="img-responsive" alt="<?php echo html_escape(@$pn['position_1']['image_alt_6'])?>">
                                                            </a>
                                                        <?php } else{?>
                                                         <a href="<?php echo html_escape(@$pn['position_1']['news_link_6']); ?>" rel="bookmark">
                                                            <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_1']['video_6']); ?>/0.jpg" alt="">
                                                         </a>
                                                        <?php } ?>
                                                        </div>
                                                    <!-- post title -->
                                                    <h3><a href="<?php echo html_escape(@$pn['position_1']['news_link_6']); ?>"><?php echo html_escape(@$pn['position_1']['news_title_6']); ?></a></h3>
                                                </div>

                                                    <div class="post-title-author-details">
                                                        <div class="date">
                                                            <ul>
                                                                <li><?php echo display('by')?> <a title="" href="#"><span><?php echo html_escape(@$pn['position_1']['post_by_name_6']); ?></span></a> --</li>
                                                                <li><a title="" href="#"><?php echo html_escape(@$pn['position_1']['ptime_6']); ?></a> </li>
                                            
                                                            </ul>
                                                        </div>
                                                        <p>

                                                        <?php echo htmlspecialchars_decode(@$pn['position_1']['short_news_6']);?>
                                                        
                                                        <a href="<?php echo html_escape(@$pn['position_1']['news_link_6']); ?>"><?php echo @display('read_more')?></a></p>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- right side post -->
                                            <div class="col-sm-6 col-md-6">
                                                <div class="row rn_block">
                                                   
                                                    <?php for($i=7; $i<=10; $i++){
                                                        if (!isset($pn['position_1']['news_title_'.$i]))
                                                        continue;
                                                    ?>

                                                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                                                        <div class="home2-post">
                                                            <!-- post image -->
                                                            <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                                <?php if(@$pn['position_1']['image_check_'.$i]!=NULL){?>
                                                                    <a href="<?php echo html_escape(@$pn['position_1']['news_link_'.$i]); ?>">
                                                                        <img src="<?php echo html_escape(@$pn['position_1']['image_thumb_'.$i]); ?>" class="img-responsive" alt="<?php echo html_escape(@$pn['position_1']['image_alt_'.$i])?>">
                                                                    </a>
                                                                <?php } else{?>
                                                                 <a href="<?php echo html_escape(@$pn['position_1']['news_link_'.$i]); ?>" rel="bookmark">
                                                                    <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_1']['video_'.$i]); ?>/0.jpg" alt="">
                                                                 </a>
                                                                <?php } ?>     
                                                            </div>
                                                            <div class="post-title-author-details">
                                                                <!-- post image -->
                                                                <h5><a href="<?php echo html_escape(@$pn['position_1']['news_link_'.$i]); ?>">
                                                                    <?php echo character_limiter(@$pn['position_1']['news_title_'.$i], 30); ?>
                                                                    </a></h5>
                                                                <div class="date">
                                                                    <ul>
                                                                        <li><a title="" href="#"><span><?php echo html_escape(@$pn['position_1']['post_by_name_'.$i]); ?></span></a> --</li>
                                                                        <li><a title="" href="#"><?php echo html_escape(@$pn['position_1']['post_date_as_'.$i]); ?></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>

                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.row -->
                        </section> <!-- /.Politics -->
                    <?php } ?> 

                </div>
            </div> 
        </div> 


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="row">
                            
                            <?php if(@$home_page_positions[2]['status']==1){?>
                                <div class="col-sm-6 col-md-6">
                                    <div class="buisness">
                                        <h3 class="category-headding "><a href="<?php echo base_url('category/').$pn['position_2']['category_2']?>"><?php echo html_escape($home_page_positions[2]['cat_name']);?></a></h3>
                                        <div class="headding-border bg-color-5"></div>
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                            <!-- post title -->
                                            <h3><a href="<?php echo $pn['position_2']['news_link_1']?>"><?php echo $pn['position_2']['news_title_1']?></a></h3>
                                            <!-- post image -->
                                            <div class="post-thumb">

                                                <?php if(@$pn['position_2']['image_check_1']!=NULL){?>
                                                    <a href="<?php echo html_escape(@$pn['position_2']['news_link_1'])?>">
                                                        <img class="img-responsive" src="<?php echo html_escape(@$pn['position_2']['image_large_1'])?>" alt="<?php echo html_escape(@$pn['position_2']['image_alt_1'])?>"></a>
                                                <?php } else{?>
                                                 <a href="<?php echo html_escape(@$pn['position_2']['news_link_1']); ?>" rel="bookmark">
                                                    <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_2']['video_1']); ?>/0.jpg" alt="">
                                                 </a>
                                                <?php } ?>

                                            </div>
                                        </div>

                                        <div class="post-title-author-details">
                                            <div class="post-editor-date">
                                                <i class="pe-7s-clock"></i> <?php echo html_escape(@$pn['position_2']['ptime_1']); ?>
                                            </div>

                                            <?php echo htmlspecialchars_decode(@$pn['position_2']['short_news_1']);?>
                                                <a href="<?php echo html_escape(@$pn['position_2']['news_link_1']); ?>"><?php echo @display('read_more')?></a>
                                           
                                        </div>

                                        <?php for($i=1;$i<=4;$i++){
                                        if (!isset($pn['position_2']['news_title_'.$i]))
                                            continue;
                                        ?>

                                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                <div class="img-thumb">

                                                    <?php if(@$pn['position_2']['image_check_'.$i]!=NULL){?>
                                                        <a href="<?php echo html_escape(@$pn['position_2']['news_link_'.$i])?>">
                                                            <img class="entry-thumb" src="<?php echo html_escape(@$pn['position_2']['image_thumb_'.$i])?>" alt="<?php echo html_escape(@$pn['position_2']['image_alt_'.$i])?>" height="70" width="100"></a>
                                                    <?php } else{?>
                                                     <a href="<?php echo html_escape(@$pn['position_2']['news_link_'.$i]); ?>" rel="bookmark">
                                                        <img class="entry-thumb" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_2']['video_'.$i]); ?>/0.jpg" height="70" width="100">
                                                     </a>
                                                    <?php } ?>
                                                </div>
                                                <div class="item-details">
                                                    <h3 class="td-module-title"><a href="<?php echo $pn['position_2']['news_link_'.$i]?>"><?php echo $pn['position_2']['news_title_'.$i]?></a></h3>
                                                    <div class="post-editor-date">
                                                        <i class="pe-7s-clock"></i> <?php echo html_escape(@$pn['position_2']['post_date_as_'.$i]); ?>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php }?>

                                    </div>
                                </div>
                            <?php }?>

                            <?php if(@$home_page_positions[3]['status']==1){?>

                                <div class="col-sm-6 col-md-6">
                                    <div class="buisness">
                                        <h3 class="category-headding "><a href="<?php echo base_url('category/').$pn['position_3']['category_1']?>"><?php echo html_escape($home_page_positions[3]['cat_name']);?></a></h3>
                                        <div class="headding-border bg-color-5"></div>
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                            <!-- post title -->
                                            <h3><a href="<?php echo $pn['position_3']['news_link_1']?>"><?php echo $pn['position_3']['news_title_1']?></a></h3>
                                            <!-- post image -->
                                            <div class="post-thumb">

                                                <?php if(@$pn['position_4']['image_check_1']!=NULL){?>
                                                    <a href="<?php echo html_escape(@$pn['position_3']['news_link_1'])?>">
                                                        <img class="img-responsive" src="<?php echo html_escape(@$pn['position_3']['image_large_1'])?>" alt="<?php echo html_escape(@$pn['position_3']['image_alt_1'])?>"></a>
                                                <?php } else{?>
                                                 <a href="<?php echo html_escape(@$pn['position_3']['news_link_1']); ?>" rel="bookmark">
                                                    <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_3']['video_1']); ?>/0.jpg" alt="">
                                                 </a>
                                                <?php } ?>

                                            </div>
                                        </div>

                                        <div class="post-title-author-details">
                                            <div class="post-editor-date">
                                                <i class="pe-7s-clock"></i> <?php echo html_escape(@$pn['position_3']['ptime_1']); ?>
                                            </div>
                                            <p><?php echo htmlspecialchars_decode(@$pn['position_3']['short_news_1']);?>
                                            <a href="<?php echo html_escape(@$pn['position_3']['news_link_1']); ?>"><?php echo @display('read_more')?></a></p>
                                        </p>
                                        </div>

                                    <?php for($i=1;$i<=4;$i++){
                                    if (!isset($pn['position_3']['news_title_'.$i]))
                                        continue;
                                    ?>

                                        <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                            <div class="img-thumb">
                                                <?php if(@$pn['position_3']['image_check_'.$i]!=NULL){?>
                                                    <a href="<?php echo html_escape(@$pn['position_3']['news_link_'.$i])?>">
                                                        <img class="entry-thumb" src="<?php echo html_escape(@$pn['position_3']['image_thumb_'.$i])?>" alt="<?php echo html_escape(@$pn['position_3']['image_alt_'.$i])?>" height="70" width="100"></a>
                                                <?php } else{?>
                                                 <a href="<?php echo html_escape(@$pn['position_3']['news_link_'.$i]); ?>" rel="bookmark">
                                                    <img class="entry-thumb" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_3']['video_'.$i]); ?>/0.jpg" height="70" width="100">
                                                 </a>
                                                <?php } ?>
                                            </div>
                                            <div class="item-details">
                                                <h3 class="td-module-title"><a href="<?php echo $pn['position_3']['news_link_'.$i]?>"><?php echo $pn['position_3']['news_title_'.$i]?></a></h3>
                                                <div class="post-editor-date">
                                                    <i class="pe-7s-clock"></i> <?php echo html_escape(@$pn['position_3']['post_date_as_'.$i]); ?>
                                                </div>
                                            </div>
                                        </div>

                                    <?php }?>

                                    </div>
                                </div>
                            <?php }?>

                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>





        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8"> 

                    <!-- add three -->
                    <div class="banner-add <?php echo (@$lg_status_13==0?'hidden-lg hidden-md':'')?> <?php echo (@$sm_status_13==0?'hidden-xs hidden-sm':'')?>">
                        <?php echo @$home_13; ?>
                    </div> 

                    <?php
                        if ($home_page_positions[4]['status'] == 1) { 
                    ?>

                    <section class="recent_news_inner">
                        <h3 class="category-headding "><a href="<?php echo base_url('category/').$pn['position_4']['category_1']?>"><?php echo html_escape(@$home_page_positions[4]['cat_name']); ?></a></h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div id="content-slide" class="owl-carousel">
                                <!-- item-1 -->
                                <?php 
                                    for($i=1; $i<=3; $i++){
                                        if (!isset($pn['position_4']['news_title_'.$i]))
                                        continue;
                                ?>
                                <div class="item home2-post">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s"><!-- image -->
                                        <div class="post-thumb">
                                            <?php if(@$pn['position_4']['image_check_'.$i]!=NULL){?>
                                                <a href="<?php echo html_escape(@$pn['position_4']['news_link_'.$i]); ?>">
                                                    <img class="img-responsive" src="<?php echo html_escape(@$pn['position_4']['image_large_'.$i]); ?>" alt="<?php echo html_escape($pn['position_4']['image_alt_'.$i])?>">
                                                </a>
                                            <?php } else{ ?>
                                                <a href="<?php echo html_escape(@$pn['position_4']['news_link_'.$i]); ?>" rel="bookmark">
                                                    <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_4']['video_'.$i]); ?>/0.jpg" alt="">
                                                </a>
                                            <?php }?>
                                        </div>

                                        
                                    </div>

                                    <h3><a href="<?php echo html_escape(@$pn['position_4']['news_link_'.$i]); ?>"><?php echo html_escape(@$pn['position_4']['news_title_'.$i]); ?></a></h3>
                                    <div class="post-title-author-details">
                                        <div class="date">
                                            <ul>
                                                <li><?php echo display('by')?> <a title="" href="#"><span><?php echo html_escape(@$pn['position_4']['post_by_name_'.$i]); ?></span></a> --</li>
                                                <li><a title="" href="#"><?php echo html_escape(@$pn['position_4']['post_date_as_'.$i]); ?></a> </li>
                                            </ul>
                                        </div>
                                        <?php echo ($pn['position_4']['short_news_'.$i]);?>
                                        <a href="<?php echo html_escape(@$pn['position_4']['news_link_'.$i]); ?>"><?php echo display('read_more')?></a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="row rn_block">
                        <?php 
                            for($i=4;$i<=6;$i++){
                                if (!isset($pn['position_4']['news_title_'.$i]))
                                continue;
                        ?>
                            <div class="col-md-4 col-sm-4 padd">
                                <div class="home2-post">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s"><!-- image -->
                                        <div class="post-thumb">
                                            <?php if(@$pn['position_4']['image_check_'.$i]!=NULL){?>
                                             <a href="<?php echo html_escape(@$pn['position_4']['news_link_'.$i]); ?>">
                                                <img class="img-responsive" src="<?php echo html_escape(@$pn['position_4']['image_thumb_'.$i]); ?>" alt="<?php echo html_escape($pn['position_4']['image_alt_'.$i])?>">
                                             </a>
                                            <?php } else{ ?>
                                                <a href="<?php echo html_escape(@$pn['position_4']['news_link_'.$i]); ?>" rel="bookmark">
                                                    <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_4']['video_'.$i]); ?>/0.jpg" alt="">
                                                </a>
                                            <?php }?>
                                        </div>

                                        
                                    </div>
                                    <div class="post-title-author-details">
                                        <h4><a href="<?php echo html_escape(@$pn['position_4']['news_link_'.$i]); ?>"><?php echo html_escape(@$pn['position_4']['news_title_'.$i]); ?></a></h4>
                                        <div class="date">
                                            <ul>
                                                <li><?php echo display('by')?> <a title="" href="#"><span><?php echo html_escape(@$pn['position_4']['post_by_name_'.$i]); ?></span></a> --</li>
                                                <li><a title="" href="#"><?php echo html_escape(@$pn['position_4']['post_date_as_'.$i]); ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </section>
                    <?php }?>

              

                </div> <!-- /.left content inner -->

                <div class="col-md-4 col-sm-4 left-padding">

                    <?php
                    $fa = array('method' =>'GET' ); 
                    echo form_open('search',$fa);?>
                        <div class="input-group search-area"> <!-- search area -->
                            <input type="text" class="form-control" placeholder="<?php echo display('search')?>" required name="q" >
                            <div class="input-group-btn">
                                <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div> <!-- /.search area -->
                    <?php echo form_close();?>

                    
                    


                    <div class="tab-inner">
                        <ul class="tabs">
                            <li><a href="#"><?php echo display('latest_news');?></a></li>
                            <li><a href="#"><?php echo display('most_read'); ?></a></li>
                        </ul><hr> <!-- tabs -->
                        <div class="tab_content">
                            <div class="tab-item-inner">
                            <?php 
                            for($i=1; $i<=6; $i++){
                                if (!isset($ln['news_title_'.$i]))
                                continue; 
                            ?>
                                <div class="box-item wow fadeIn" data-wow-duration="1s">
                                    <div class="img-thumb">
                                        <?php if(@$ln['image_check_' . $i]!=NULL){?>
                                             <a href="<?php echo html_escape(@$ln['news_link_'.$i]);?>" rel="bookmark"><img class="entry-thumb" src="<?php echo @$ln['image_thumb_' . $i]; ?>" alt="<?php echo html_escape(@$ln['image_alt_'.$i])?>" height="80" width="90"></a>
                                       <?php } else{?>
                                        <a href="<?php echo html_escape(@$ln['news_link_'.$i]);?>" rel="bookmark">
                                        <img  src="http://img.youtube.com/vi/<?php echo html_escape(@$ln['video_' . $i]); ?>/0.jpg" alt=""  height="80" width="90">
                                       </a>
                                        <?php }?>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-1">
                                            <a href="<?php echo @$ln['category_link_'.$i];?>"><?php echo html_escape(@$ln['category_'.$i]);?></a>
                                        </h6>
                                        <h3 class="td-module-title"><a href="<?php echo html_escape(@$ln['news_link_'.$i]);?>"><?php echo html_escape(@$ln['news_title_'.$i]);?></a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i><?php echo html_escape(@$ln['post_date_as_'.$i]);?>
                                            </div>
                                            <!-- post comment -->
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div> <!-- / tab item -->

                            <div class="tab-item-inner">
                                <?php for($i=1; $i<=6; $i++){ 
                                    if (!isset($mr['news_title_'.$i]))
                                    continue;
                                ?>
                                <div class="box-item">
                                    <div class="img-thumb">
                                        <?php if(@$mr['image_check_' . $i]!=NULL){?>
                                             <a href="<?php echo html_escape(@$mr['news_link_'.$i]);?>" rel="bookmark"><img class="entry-thumb" src="<?php echo html_escape(@$mr['image_thumb_' . $i]); ?>" alt="<?php echo html_escape(@$mr['image_alt_'.$i])?>" height="80" width="90"></a>
                                        <?php } else{?>
                                            <a href="<?php echo html_escape(@$mr['news_link_'.$i]);?>" rel="bookmark">
                                                <img  src="http://img.youtube.com/vi/<?php echo html_escape(@$mr['video_' . $i]); ?>/0.jpg" alt=""  height="80" width="90">
                                           </a>
                                        <?php }?>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-5">
                                            <a href="<?php echo html_escape(@$mr['category_link_'.$i]);?>"><?php echo html_escape(@$mr['category_'.$i]);?></a>
                                        </h6>
                                        <h3 class="td-module-title">
                                        <a href="<?php echo html_escape(@$mr['news_link_'.$i]);?>"><?php echo html_escape(@$mr['news_title_'.$i]);?></a>
                                        </h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> <?php echo html_escape(@$mr['post_date_as_'.$i]);?>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div> <!-- / tab item -->
                        </div> <!-- / tab_content -->
                    </div> <!-- / tab -->


                </div> <!-- side content end -->
            </div> <!-- row end -->
        </div> <!-- container end -->



        
        <section class="article-post-inner">
            <div class="container">
                <div class="row">

                    <div class="col-sm-8">
                        <!-- add four -->
                        <div class="banner-add <?php echo (@$lg_status_14==0?'hidden-lg hidden-md':'')?> <?php echo (@$sm_status_14==0?'hidden-xs hidden-sm':'')?>">
                            <?php echo @$home_14; ?>
                        </div> 


                        <?php if(@$home_page_positions[5]['status']==1){?>

                            <div class="articale-list">
                                <h3 class="category-headding ">
                                <a href="<?php echo base_url('category/').$pn['position_5']['category_1']?>">
                                <?php echo html_escape($home_page_positions[5]['cat_name'])?></a></h3>
                                <div class="headding-border"></div>


                                <?php for($i=1;$i<=5;$i++){
                                if (!isset($pn['position_5']['news_title_'.$i]))
                                    continue;
                                ?>
                                    <div class="post-style2 wow fadeIn" data-wow-duration="1s">
                                        
                                         <?php if(@$pn['position_5']['image_check_'.$i]!=NULL){?>
                                            <a href="<?php echo html_escape(@$pn['position_5']['news_link_'.$i])?>">
                                                <img src="<?php echo html_escape(@$pn['position_5']['image_thumb_'.$i])?>" alt="<?php echo html_escape(@$pn['position_5']['image_alt_'.$i])?>"></a>
                                        <?php } else{?>
                                         <a href="<?php echo html_escape(@$pn['position_5']['news_link_'.$i]); ?>" rel="bookmark">
                                            <img width="200px;" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_5']['video_'.$i]); ?>/0.jpg" alt="">
                                         </a>
                                        <?php } ?>
                                        <div class="post-style2-detail">
                                            <h3><a href="<?php echo html_escape(@$pn['position_5']['news_link_'.$i])?>" title=""><?php echo html_escape(@$pn['position_5']['news_title_'.$i])?></a></h3>
                                            <div class="date">
                                                <ul>
                                                    <li><img src="<?php echo html_escape(@$pn['position_5']['post_by_image_'.$i])?>" class="img-responsive" alt=""></li>
                                                    <li><?php echo display('by')?> <a title="" href="#"><span><?php echo html_escape(@$pn['position_5']['post_by_name_'.$i])?></span></a> --</li>
                                                    <li><a title="" href="#"><?php echo html_escape(@$pn['position_5']['post_date_as_'.$i])?></a></li>
                                
                                                </ul>
                                            </div>
                                            <p>
                                                <?php echo htmlspecialchars_decode($pn['position_5']['short_news_'.$i]);?>
                                            </p>
                                            <a href="<?php echo html_escape(@$pn['position_5']['news_link_'.$i])?>" class="btn btn-style"><?php echo display('read_more');?></a>
                                        </div>
                                    </div>
                                <?php } ?>
              
                            </div>

                        <?php } ?>

                    </div>


                    <div class="col-sm-4 left-padding">

                        <?php if (@$social_page->fb && ($social_page->status=='1')) { ?>

                            <div class="banner-add hidden-sm hidden-xs">
                                <h3 class="category-headding "><?php echo display('social_pixel')?></h3>
                                <div class="headding-border"></div>
                                <div class="ssm">
                                    <div class="fb-page" data-href="<?php echo html_escape(@$social_page->fb);?>/" data-tabs="timeline" data-width="" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                        <blockquote cite="<?php echo html_escape(@$social_page->fb);?>/" class="fb-xfbml-parse-ignore">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            
                        <?php }?> 

                        <!-- ad area five -->
                        <div class="ads <?php echo (@$lg_status_15==0?'hidden-lg hidden-md':'')?> <?php echo (@$sm_status_15==0?'hidden-xs hidden-sm':'')?>">
                            <?php echo @$home_15;?>
                        </div>

                        <!-- slider widget -->
                        <div class="widget-slider-inner">
                            
                            <h3 class="category-headding "><a href="<?php echo base_url('category/').@$pn['position_6']['category_1']?>"><?php echo  html_escape(@$pn['position_6']['category_1']); ?></a></h3>
                            <div class="headding-border"></div>
                            
                            <div id="widget-slider" class="owl-carousel owl-theme">
                                <!-- widget item -->
                                <?php 
                                for($i=1;$i<=3;$i++){
                                    if (!isset($pn['position_6']['news_link_'.$i]))
                                    continue;
                                ?>
                                <div class="item">

                                    <?php if(@$pn['position_6']['image_check_'.$i]!=NULL){?>
                                        <a href="<?php echo html_escape(@$pn['position_6']['news_link_'.$i])?>">
                                            <img src="<?php echo html_escape(@$pn['position_6']['image_thumb_'.$i])?>" alt="">
                                        </a>
                                    <?php } else{?>
                                        <a href="<?php echo html_escape(@$pn['position_6']['news_link_'.$i]); ?>" rel="bookmark">
                                            <img src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_6']['video_'.$i]); ?>/0.jpg" alt="">
                                        </a>
                                    <?php }?>

                                    <h4><a href="<?php echo html_escape(@$pn['position_6']['news_link_'.$i])?>"><?php echo html_escape(@$pn['position_6']['news_title_'.$i])?></a></h4>
                                    <div class="date">
                                        <ul>
                                            <li><?php echo display('by')?> <a title="" href="#"><span><?php echo html_escape(@$pn['position_6']['post_by_name_'.$i])?></span></a> </li>
                                           
                                        </ul>
                                    </div>

                                    <?php 
                                        $news_details = @$pn['position_6']['full_news_'.$i];
                                        $exploded = implode(' ', array_slice(explode(' ', $news_details), 0, 20));
                                        echo htmlspecialchars_decode($exploded);
                                    ?>
                               
                                </div>
                                <?php } ?>
                     
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>
        

        <!-- add six -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-add <?php echo (@$lg_status_16==0?'hidden-lg hidden-md':'')?> <?php echo (@$sm_status_16==0?'hidden-xs hidden-sm':'')?>">
                        <?php echo @$home_16; ?>
                    </div> 
                </div>
            </div>
        </div>

        <section class="all-category-inner">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-4">
                     <?php if(@$home_page_positions[7]['status']==1){ ?>
                        <!-- sports -->
                        <div class="sports-inner">

                            <h3 class="category-headding ">

                                <a href="<?php echo base_url('category/').$pn['position_7']['category_1']?>">
                                <?php echo html_escape($home_page_positions[7]['cat_name'])?></a></h3>
                                 <div class="headding-border bg-color-1"></div>


                

                            <?php if(@$pn['position_7']['news_title_1']!=NULL){?>

                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="<?php echo html_escape(@$pn['position_7']['news_link_1'])?>"><?php echo html_escape(@$pn['position_7']['news_title_1'])?></a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                    <?php if(@$pn['position_7']['image_check_1']){?>
                                      <a href="<?php echo html_escape(@$pn['position_7']['news_link_1'])?>">
                                            <img src="<?php echo html_escape(@$pn['position_7']['image_large_1'])?>" class="img-responsive" alt="<?php echo html_escape($pn['position_7']['image_alt_1']);?>">
                                        </a>
                                    <?php } else{ ?>
                                        <a href="<?php echo html_escape(@$pn['position_7']['news_link_1'])?>" rel="bookmark">
                                            <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_7']['video_1']);?>/0.jpg" alt="" >
                                        </a>
                                    <?php }?>

                                        
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> <?php echo html_escape(@$pn['position_7']['post_date_as_1'])?>
                                        </div>
                                        <!-- post comment -->
                                    </div>
                                        <?php
                                            echo htmlspecialchars_decode(@$pn['position_7']['short_news_1']); 
                                        ?>
                                        <a href="<?php echo html_escape(@$pn['position_7']['news_link_1'])?>"><?php echo display('read_more');?></a>
                                
                                </div>
                            <?php }?>
                        </div>
                         <?php } ?>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <?php if(@$home_page_positions[8]['status']==1){?>
                        <!-- fashion -->
                        <div class="fashion-inner">
                            <h3 class="category-headding "><a href="<?php echo base_url('category/').$pn['position_8']['category_1']?>"><?php echo html_escape(@$home_page_positions[8]['cat_name'])?></a></h3>
                            <div class="headding-border bg-color-4"></div>
                             <?php if(@$pn['position_8']['news_title_1']!=NULL){?>
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post title -->
                                <h3><a href="<?php echo html_escape(@$pn['position_8']['news_link_1'])?>">
                                <?php echo html_escape(@$pn['position_8']['news_title_1'])?></a></h3>
                                <!-- post image -->
                                <div class="post-thumb">

                                <?php if(@$pn['position_8']['image_check_1']){?>
                                  <a href="<?php echo html_escape(@$pn['position_8']['news_link_1'])?>">
                                        <img src="<?php echo html_escape(@$pn['position_8']['image_large_1'])?>" class="img-responsive" alt="<?php echo html_escape(@$pn['position_8']['image_alt_1']);?>">
                                    </a>
                                <?php } else{ ?>
                                    <a href="<?php echo html_escape(@$pn['position_8']['news_link_1'])?>" rel="bookmark">
                                        <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_8']['video_1']);?>/0.jpg" alt="" >
                                    </a>
                                <?php }?>
                                    
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> <?php echo html_escape(@$pn['position_8']['post_date_as_1'])?>
                                    </div>
                                    <!-- post comment -->
                                </div>
                                <?php
                                    echo  htmlspecialchars_decode(@$pn['position_8']['short_news_1']); 
                                ?>
                                <a href="<?php echo html_escape(@$pn['position_8']['news_link_1'])?>"><?php echo display('read_more');?></a>
                                
                            </div>
                            <?php }?>
                        </div>
                        <?php }?>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <?php if(@$home_page_positions[9]['status']==1){?>
                            <div class="travel-inner">
                                <h3 class="category-headding "><a href="<?php echo base_url('category/').$pn['position_9']['category_1']?>"><?php echo html_escape($home_page_positions[9]['cat_name'])?></a></h3>
                                <div class="headding-border bg-color-3"></div>
                                 <?php if(@$pn['position_9']['news_title_1']!=NULL){?>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="<?php echo html_escape(@$pn['position_9']['news_link_1'])?>"><?php echo html_escape(@$pn['position_9']['news_title_1'])?></a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">

                                    <?php if(@$pn['position_9']['image_check_1']){?>
                                       <a href="<?php echo html_escape(@$pn['position_9']['news_link_1'])?>">
                                            <img src="<?php echo html_escape(@$pn['position_9']['image_large_1'])?>" class="img-responsive" alt="<?php echo html_escape($pn['position_9']['image_alt_1']);?>">
                                        </a>
                                    <?php } else{ ?>
                                        <a href="<?php echo html_escape(@$pn['position_9']['news_link_1'])?>" rel="bookmark">
                                            <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_9']['video_1']);?>/0.jpg" alt="" >
                                        </a>
                                    <?php }?>

                                       
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> <?php echo html_escape(@$pn['position_9']['post_date_as_1'])?>
                                        </div>
                                        <!-- post comment -->
                                    </div>                                
                                        <?php
                                            echo htmlspecialchars_decode(@$pn['position_9']['short_news_1']); 
                                        ?>
                                        <a href="<?php echo html_escape(@$pn['position_9']['news_link_1'])?>"><?php echo display('read_more');?></a>
                                    
                                 </div>
                                 <?php }?>
                            </div>
                        <?php } ?>
                    </div>

                </div>


                <!-- add seven -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-add <?php echo (@$lg_status_17==0?'hidden-lg hidden-md':'')?> <?php echo (@$sm_status_17==0?'hidden-xs hidden-sm':'')?>">
                            <?php echo @$home_17; ?>
                        </div> 
                    </div>
                </div>
            

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <?php if(@$home_page_positions[10]['status']==1){?>
                        <div class="food-inner">
                            <h3 class="category-headding "><a href="<?php echo base_url('category/').$pn['position_10']['category_1']?>"><?php echo html_escape(@$home_page_positions[10]['cat_name'])?></a></h3>
                            <div class="headding-border bg-color-4"></div>
                            <?php if(@$pn['position_10']['news_title_1']!=NULL){?>
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post title -->
                                <h3><a href="<?php echo html_escape(@$pn['position_10']['news_link_1'])?>"><?php echo html_escape(@$pn['position_10']['news_title_1'])?></a></h3>
                                <!-- post image -->
                                <div class="post-thumb">

                                <?php if(@$pn['position_10']['image_check_1']){?>
                                   <a href="<?php echo html_escape(@$pn['position_10']['news_link_1'])?>">
                                        <img src="<?php echo html_escape(@$pn['position_10']['image_large_1'])?>" class="img-responsive" alt="<?php echo html_escape($pn['position_10']['image_alt_1']);?>">
                                    </a>
                                <?php } else{ ?>
                                    <a href="<?php echo html_escape(@$pn['position_10']['news_link_1'])?>" rel="bookmark">
                                        <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_10']['video_1']);?>/0.jpg" alt="" >
                                    </a>
                                <?php }?>
                                </div>
                            </div>
                            <div class="post-title-author-details">
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> <?php echo html_escape(@$pn['position_10']['post_date_as_1'])?>
                                    </div>
                                </div>
                                
                                <?php echo htmlspecialchars_decode(@$pn['position_10']['short_news_1']); ?>
                                <a href="<?php echo html_escape(@$pn['position_10']['news_link_1'])?>"><?php echo display('read_more');?></a>

                           </div>
                           <?php }?>
                        </div>
                        <?php }?>
                    </div>


                    <div class="col-md-4 col-sm-4">
                        <?php if(@$home_page_positions[11]['status']==1){?>
                            <!-- politics -->
                            <div class="politics-inner">
                                <h3 class="category-headding "><a href="<?php echo base_url('category/').$pn['position_11']['category_1']?>"><?php echo html_escape($home_page_positions[11]['cat_name'])?></a></h3>
                                <div class="headding-border bg-color-5"></div>

                                <?php if(@$pn['position_11']['news_title_1']!=NULL){?>
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- post title -->
                                        <h3><a href="<?php echo html_escape(@$pn['position_11']['news_link_1'])?>"><?php echo html_escape(@$pn['position_11']['news_title_1'])?></a></h3>
                                        <!-- post image -->
                                        <div class="post-thumb">

                                        <?php if(@$pn['position_11']['image_check_1']){?>
                                            <a href="<?php echo html_escape(@$pn['position_11']['news_link_1'])?>">
                                                <img src="<?php echo html_escape(@$pn['position_11']['image_large_1'])?>" class="img-responsive" alt="<?php echo html_escape($pn['position_11']['image_alt_1']);?>">
                                            </a>
                                        <?php } else{ ?>
                                            <a href="<?php echo html_escape(@$pn['position_11']['news_link_1'])?>" rel="bookmark">
                                                <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_11']['video_1']);?>/0.jpg" alt="" >
                                            </a>
                                        <?php }?>
                                            
                                        </div>
                                    </div>

                                    <div class="post-title-author-details">
                                        <div class="post-editor-date">
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> <?php echo html_escape(@$pn['position_11']['post_date_as_1'])?>
                                            </div>
                                        </div>
                                      
                                        <?php echo htmlspecialchars_decode(@$pn['position_11']['short_news_1']); ?>
                                        <a href="<?php echo html_escape(@$pn['position_11']['news_link_1'])?>"><?php echo display('read_more');?></a>
                                        
                                     </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>



                    <div class="col-md-4 col-sm-4">
                        <?php if(@$home_page_positions[12]['status']==1){?>
                        <!-- health -->
                        <div class="health-inner">
                            <h3 class="category-headding "><a href="<?php echo base_url('category/').$pn['position_12']['category_1']?>"><?php echo html_escape($home_page_positions[12]['cat_name'])?></a></h3>
                            <div class="headding-border bg-color-3"></div>

                            <?php if(@$pn['position_12']['news_title_1']!=NULL){?>

                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="<?php echo html_escape(@$pn['position_12']['news_link_1'])?>"><?php echo html_escape(@$pn['position_12']['news_title_1'])?></a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">

                                        <?php if(@$pn['position_12']['image_check_1']){?>
                                            <a href="<?php echo html_escape(@$pn['position_12']['news_link_1'])?>">
                                            <img class="img-responsive" src="<?php echo html_escape(@$pn['position_12']['image_thumb_1'])?>" alt="<?php echo html_escape($pn['position_12']['image_alt_1']);?>">
                                        </a>
                                            <?php } else{ ?>
                                                <a href="<?php echo html_escape(@$pn['position_12']['news_link_1'])?>" rel="bookmark">
                                                    <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo html_escape(@$pn['position_12']['video_1']);?>/0.jpg" alt="" >
                                                </a>
                                            <?php }?>
                                    </div>
                                </div>

                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> <?php echo html_escape(@$pn['position_12']['post_date_as_1'])?>
                                        </div>
                                    </div>
                                    <?php
                                        echo  htmlspecialchars_decode(@$pn['position_12']['short_news_1']); 
                                    ?>
                                    <a href="<?php echo html_escape(@$pn['position_12']['news_link_1'])?>"><?php echo display('read_more');?></a>
                                </div>
                            <?php }?>
                        </div>
                        <?php }?>
                    </div>

                </div>

            </div>
        </section>

        


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="banner-add <?php echo (@$lg_status_18==0?'hidden-lg hidden-md':'')?> <?php echo (@$sm_status_18==0?'hidden-xs hidden-sm':'')?>">
                <?php echo @$home_18; ?>
            </div>
        </div>
    </div>
</div>
       

