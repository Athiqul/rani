<?php
    $bu = base_url();
    if (isset($ads) && is_array($ads)) {
        extract($ads);
    }

?>

<section class="block-inner header-bg-image" data-image-src="<?php echo base_url().html_escape(@$cat_imgae->category_imgae)?>">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><?php  echo html_escape(ucwords(@$pn['category_1'])); ?></h1>
                <div class="breadcrumbs">

                    <ul>
                        <li><i class="pe-7s-home"></i> <a href="<?php echo base_url(); ?>" title=""><?php echo display('home')?></a></li>
                        <li>
                        <a href="<?php echo  html_escape(@$pn['category_link_1']); ?>" title=""><?php  echo html_escape(ucwords(@$pn['category_1']));  ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="banner-add <?php echo (html_escape(@$lg_status_21)==0?'hidden-lg hidden-md':'')?> <?php echo (html_escape(@$sm_status_21)==0?'hidden-xs hidden-sm':'')?>">
                <?php echo htmlspecialchars_decode(@$category_21); ?>
            </div>
            <div class="row">
                <div class="col-sm-6">
            <?php
            for($i = 1; $i <= 4; $i++) {
                if (!isset($pn['news_title_' . $i]))
                    continue;
            ?>
           
                        <div class="post-style1">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <!-- post image -->
                                <?php
                                    if (@$pn['image_check_' . $i]!=NULL) {
                                        echo'<a href="'.html_escape($pn['news_link_'.$i]).'"><img src="'.html_escape(@$pn['image_large_' . $i]).'" class="img-responsive" alt=""></a>';
                                    } else {
                                        echo '<a href="'.html_escape($pn['news_link_'.$i]).'"><img width="100%" src="http://img.youtube.com/vi/' . html_escape($pn['video_' . $i]) . '/0.jpg" alt="photography" /></a>';
                                    }
                                ?>
                                <div class="post-info meta-info-rn">
                                    <div class="slide">
                                    <?php
                                        if ($pn['video_' . $i]!=NULL) {
                                            echo '<a class="playvideo pull-right" href="'. html_escape(@$pn['news_link_'.$i]).'"><i class="fa fa-play-circle-o"></i></a>';
                                        } else {
                                            echo '<a class="readmore pull-right" href="'.html_escape($pn['news_link_'.$i]).'"><i class="pe-7s-angle-right"></i></a>';
                                        }
                                    ?>  
                                    </div>
                                </div>
                            </div>
                            <!-- post title -->
                            <h3><a href="<?php echo html_escape(@$pn['news_link_'.$i]);?>"><?php echo character_limiter(@$pn['news_title_'.$i],30);?></a></h3>
                            <div class="post-title-author-details">
                                <div class="date">
                                    <ul>
                                        <li><img src="<?php echo html_escape(@$pn['post_by_image_'.$i]);?>" class="img-responsive" alt=""></li>
                                        <li><?php echo display('by')?> <a href="<?php echo html_escape(@$pn['author_profile_'.$i]); ?>"><span><?php echo html_escape(@$pn['post_by_name_'.$i]);?></span></a> --</li>
                                        <li><a ><?php echo html_escape(@$pn['post_date_as_'.$i]);?></a> </li>
                                    </ul>
                                </div>

                                <?php echo htmlspecialchars_decode(@$pn['short_news_' . $i]);?>
                                <?php echo '<a href="' . html_escape(@$pn['news_link_' . $i]) . '"> '.display('read_more').'</a>'; ?>
                            
                            </div>
                        </div>
                 
                <?php
                    } 
                ?>
                </div>
        
        <div class="col-sm-6">
        <?php
            for($i = 5; $i <= 8; $i++) {
            if (!isset($pn['news_title_' . $i]))
            continue;
        ?>
            
                <div class="post-style1">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">

                        <?php
                            if (@$pn['image_check_' . $i]!=NULL) {
                                echo'<a href="'.html_escape($pn['news_link_'.$i]).'"><img src="'.html_escape(@$pn['image_large_' . $i]).'" class="img-responsive" alt=""></a>';
                            } else {
                                echo '<a href="'.html_escape($pn['news_link_'.$i]).'"><img width="100%" src="http://img.youtube.com/vi/' . html_escape($pn['video_' . $i]) . '/0.jpg" alt="photography" /></a>';
                            }
                        ?>
                        <div class="post-info meta-info-rn">
                            <div class="slide">
                            <?php
                                if ($pn['video_' . $i]!=NULL) {
                                    echo '<a class="playvideo pull-right" href="'. html_escape(@$pn['news_link_'.$i]).'"><i class="fa fa-play-circle-o"></i></a>';
                                } else {
                                    echo '<a class="readmore pull-right" href="'.html_escape($pn['news_link_'.$i]).'"><i class="pe-7s-angle-right"></i></a>';
                                }
                            ?>  
                            </div>
                        </div>

                    </div>
                    <!-- post title -->
                    <h3><a href="<?php echo html_escape(@$pn['news_link_'.$i]);?>"><?php echo character_limiter(@$pn['news_title_'.$i],30);?></a></h3>
                    <div class="post-title-author-details">
                        <div class="date">
                            <ul>
                                <li><img src="<?php echo html_escape(@$pn['post_by_image_'.$i]);?>" class="img-responsive" alt=""></li>
                                <li><?php echo display('by')?> <a href="<?php echo html_escape(@$pn['author_profile_'.$i]); ?>"><span><?php echo html_escape(@$pn['post_by_name_'.$i]);?></span></a> --</li>
                                <li><a > <?php echo html_escape(@$pn['post_date_as_'.$i]);?></a> </li>
                            </ul>
                        </div>
                    
                        <?php echo htmlspecialchars_decode(@$pn['short_news_' . $i]);?>
                        <?php echo '<a href="' . html_escape(@$pn['news_link_' . $i]) . '"> '.display('read_more').'</a>'; ?>
                   
                    </div>
                </div>
                 
            <?php
                } 
            ?></div>
                 </div>
           </div>


            <aside class="col-sm-4 left-padding">
                <?php echo form_open('search',array('method' =>'GET' ));?>
                        <div class="input-group search-area"> <!-- search area -->
                            <input type="text" class="form-control" placeholder="<?php echo display('search')?>..." name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div> <!-- /.search area -->
                <?php echo form_close();?>


                <div class="banner-add <?php echo (html_escape(@$lg_status_23)==0?'hidden-lg hidden-md':'')?> <?php echo (html_escape(@$sm_status_23)==0?'hidden-xs hidden-sm':'')?>">
                    <?php echo htmlspecialchars_decode(@$category_23); ?>
                </div>                

                <div class="banner-add">
                    <h3 class="category-headding "><?php echo display('social_pixel')?></h3>
                    <div class="headding-border"></div>
                    <div class="ssm">
                        <?php if (@$social_page->fb) { ?>
                                <div class="fb-page" data-href="<?php echo html_escape(@$social_page->fb);?>/" data-tabs="timeline" data-width="" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="<?php echo html_escape(@$social_page->fb);?>/" class="fb-xfbml-parse-ignore">
                        <?php }?>
                    </div>
                </div>
                <br><br>


                <div class="tab-inner">
                        <ul class="tabs">
                            <li><a href="#"><?php echo  display('latest_news');?></a></li>
                            <li><a href="#"><?php echo  display('most_read'); ?></a></li>
                        </ul><hr> <!-- tabs -->
                        <div class="tab_content">
                            <div class="tab-item-inner">
                            <?php 
                            for($i=1; $i<=3; $i++){ 
                                if(!isset($ln['news_title_'.$i]))
                                continue
                            ?>
                                <div class="box-item wow fadeIn" data-wow-duration="1s">
                                    <div class="img-thumb">
                                        <?php if(@$ln['image_check_' . $i]){?>
                                        
                                       <a href="<?php echo html_escape(@$ln['news_link_'.$i]);?>" rel="bookmark">
                                             <img class="entry-thumb" src="<?php echo html_escape(@$ln['image_thumb_' . $i]); ?>" alt="" height="80" width="90">
                                             </a>  
                                       <?php } else{?>
                                        <a href="<?php echo html_escape(@$ln['news_link_'.$i]);?>" rel="bookmark">
                                        <img  src="http://img.youtube.com/vi/<?php echo html_escape(@$ln['video_' . $i]); ?>/0.jpg" alt=""  height="80" width="90">
                                       </a>
                                        <?php }?>
                                    </div>

                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-1">
                                            <a href="<?php echo html_escape(@$ln['category_link_'.$i])?>"><?php echo html_escape(@$ln['category_'.$i]);?></a>
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
                             <?php 
                             for($i=1; $i<=3; $i++){ 
                                if(!isset($mr['news_title_'.$i]))
                                continue
                            ?>
                                <div class="box-item">
                                    <div class="img-thumb">
                                        <?php if(@$mr['image_check_' . $i]){?>
                                            
                                         <a href="<?php echo html_escape(@$mr['news_link_'.$i]);?>" rel="bookmark"><img class="entry-thumb" src="<?php echo html_escape(@$mr['image_thumb_' . $i]); ?>" alt="" height="80" width="90"></a>
                                        <?php } else{?>
                                        <a href="<?php echo html_escape(@$mr['news_link_'.$i]);?>" rel="bookmark">
                                        <img  src="http://img.youtube.com/vi/<?php echo html_escape(@$mr['video_' . $i]); ?>/0.jpg" alt=""  height="80" width="90">
                                       </a>
                                            
                                        <?php }?>
                               
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-5">
                                            <a href="<?php echo html_escape(@$mr['category_link_'.$i])?>"><?php echo html_escape(@$mr['category_'.$i]);?></a>
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
                </div> 
                <!-- / tab -->


                <div class="banner-add <?php echo (html_escape(@$lg_status_24)==0?'hidden-lg hidden-md':'')?> <?php echo (html_escape(@$sm_status_24)==0?'hidden-xs hidden-sm':'')?>">
                    <!-- add -->
                    <span class="add-title"></span>
                    <?php echo htmlspecialchars_decode(@$category_24); ?>
                </div>
           
                <!-- slider widget -->
                <div class="widget-slider-inner">
                    <h3 class="category-headding "><?php echo  html_escape(@$Editor['hn']['category_1']); ?></h3>
                    <div class="headding-border"></div>
                    <div id="widget-slider" class="owl-carousel owl-theme">
                       
                      <!-- widget item -->
                                <?php 
                                for($i=1;$i<=3;$i++){
                                   if(!isset($Editor['hn']['news_title_'.$i]))
                                    continue
                             ?>
                                <div class="item">
                                   <a href="<?php echo html_escape(@$Editor['hn']['news_link_'.$i])?>">
                                    <?php
                                        if (@$Editor['hn']['image_check_'.$i]) {
                                                echo'<img  src="'. html_escape(@$Editor['hn']['image_thumb_'.$i]).'" alt="">';
                                            } else {
                                                echo '<img  class="img-responsive"  src="http://img.youtube.com/vi/' . html_escape(@$Editor['hn']['video_'.$i]) . '/0.jpg" alt="photography" />';
                                            }
                                        ?>
                                    </a>
                                   
                                    <h4><a href="<?php echo html_escape(@$Editor['hn']['news_link_'.$i])?>"><?php echo html_escape(@$Editor['hn']['news_title_'.$i])?></a></h4>
                                    <div class="date">
                                        <ul>
                                            <li><?php echo display('by')?><a title="" href="#"><span><?php echo html_escape(@$Editor['hn']['post_by_name_'.$i])?></span></a> --</li>
                                            <li><a title="" href="#"><?php echo html_escape(@$Editor['hn']['post_date_as_'.$i])?></a></li>
                                        </ul>
                                    </div>
                                    <p>
                                    <?php 
                                        $news_details = @$Editor['hn']['short_news_'.$i];
                                        echo htmlspecialchars_decode($news_details);
                                    ?></p>
                                </div>
                            <?php } ?>
                    </div>
                </div>
                
            </aside>
        </div>
        <!-- pagination -->


            <!-- pagination -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <?php echo htmlspecialchars_decode($this->pagination->create_links()); ?> 
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="banner <?php echo (html_escape(@$lg_status_22)==0?'hidden-lg hidden-md':'')?> <?php echo (html_escape(@$sm_status_22)==0?'hidden-xs hidden-sm':'')?>">
                        <?php echo htmlspecialchars_decode(@$category_22); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>



