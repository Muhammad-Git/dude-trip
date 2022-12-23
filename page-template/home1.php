<?php /* Template Name: home Template */ ?>
<?php get_header();

$banner = get_field('banner');
$section_1 = get_field('section_1');
$where = get_field('where');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 =get_field('section_4');
$section_5 =get_field('section_5');



?>
    <section class="home-banner" style="background-image:url(<?php echo $banner['image']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                    <?php echo $banner['content']; ?>
                     <p class="newtxt">For those of you that don’t know me, I am Brian Gardner. You have received the link to this site along with credentials to login. Please keep the credentials private because I would like to keep this trip and the attendees private. If you have been to one of my parties, then you know this is going to be a fun time. I came up with this idea initially on Abdul’s bachelor party but then didn’t do anything with it. Right before Memorial Day (Brian Gardner vs COVID II) I was with some of my “New York Friends” as I like to call them. I told them about the idea, and everyone was really into it. With my boredom of sitting around with COVID I decided to buy the domain and make this thing a reality.</p>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="home-section-1" id="when" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="text">
                        <div class="heading">
                        <?php echo $section_1['heading'];  ?>
                            
                        </div>
                        <?php echo $section_1['content_1'];  ?>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="vid-box text-right">
                        <!-- <img src="assets/images/home/section-2.png" class="img-fluid" alt=""> -->
                        <video controls>
                            <source src="<?php echo $section_1['video'];  ?>" type="video/mp4">
                            Error Message
                        </video>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="text heading text-center">
                        <h5 class="mt-5"><?php echo $where['heading'];  ?></h5>
                        <img src="<?php echo $where['logo'];  ?>" class="img-fluid mt-2 mb-4" alt="">
                        <p class="mt-1"><?php echo $where['content'];  ?></p>
    
                    </div>
                </div>
                
            </div>
        </div>

    </section>

    <section class="home-section-2" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="img-box">
                        <img src="<?php echo $section_2['image']; ?>" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="text">
                        <div class="heading">
                           <?php echo $section_2['heading']; ?>
                        </div>

                        <?php echo $section_2['content']; ?>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <section class="home-section-3" id="cool">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="text">
                        <div class="heading">
                            <?php echo $section_3['heading']?>
                        </div>

                        <?php echo $section_3['content']?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <section class="home-section-4" id="travel">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="text">
                        <div class="heading">
                            <?php echo $section_4['heading']?>
                        </div>

                        <?php echo $section_4['content']?>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="img-box">
                        <img src=" <?php echo $section_4['image']?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="home-section-5" id="rsvp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <?php echo $section_5['heading'];  ?>
                    </div>
                   
                    <?php echo do_shortcode('[contact-form-7 id="71" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
        <img src="<?php echo $section_5['bg_image'];  ?>" class="img-fluid w-100" alt="">
    </section>

   
   

<?php get_footer(); ?>