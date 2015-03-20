<!--Footer-->
<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>ADDRESS</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Address:</strong> Tulshipur Chowk, Ghorahi<br>Dang-Rapti (Nepal)
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong> info@iitinfotrain.com
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Website:</strong> www.iitinfotrain.com
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Cell:</strong> 9801329699
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span3">
                <h4>Site Map</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="admission.php">Admission</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="news_events.php">News & Events</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="downloads.php">Downloads</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>  
            </div>
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span3">
                <h4>USEFUL LINKS</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">www.hcch.net</a></li>
                        <li><a href="#">www.imo.org</a></li>
                        <li><a href="#">www.icrc.org</a></li>
                        <li><a href="#">www.senate.gov</a></li>
                        <li><a href="#">www.ustr.gov</a></li>
                        <li><a href="#">www.icrc.org</a></li>
                        <li><a href="#">www.senate.gov</a></li>
                        <li><a href="#">www.ustr.gov</a></li>
                    </ul>
                </div>
            </div>
            <!--End Archives-->

            <div class="span3">
                <h4>GALLERY</h4>
                <div class="row-fluid first">
                    <ul class="thumbnails">
                        <li class="span3">
                            <a href="#" title="01 (254) by Victor1558, on Flickr"><img src="<?php echo front_template_path()?>images/sample/gallery/1.jpg" width="75" height="75" alt="01 (254)"></a>
                        </li>
                        <li class="span3">
                            <a href="#" title="01 (196) by Victor1558, on Flickr"><img src="<?php echo front_template_path()?>images/sample/gallery/2.jpg" width="75" height="75" alt="01 (196)"></a>
                        </li>
                        <li class="span3">
                            <a href="#" title="01 (65) by Victor1558, on Flickr"><img src="<?php echo front_template_path()?>images/sample/gallery/3.jpg" width="75" height="75" alt="01 (65)"></a>
                        </li>
                        <li class="span3">
                            <a href="#" title="01 (6) by Victor1558, on Flickr"><img src="<?php echo front_template_path()?>images/sample/gallery/4.jpg" width="75" height="75" alt="01 (6)"></a>
                        </li>
                    </ul>
                </div>
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span3">
                            <a href="#" title="01 (6) by Victor1558, on Flickr"><img src="<?php echo front_template_path()?>images/sample/gallery/4.jpg" width="75" height="75" alt="01 (6)"></a>
                        </li>
                        <li class="span3">
                            <a href="#" title="01 (254) by Victor1558, on Flickr"><img src="<?php echo front_template_path()?>images/sample/gallery/3.jpg" width="75" height="75" alt="01 (254)"></a>
                        </li>
                        <li class="span3">
                            <a href="#" title="01 (196) by Victor1558, on Flickr"><img src="<?php echo front_template_path()?>images/sample/gallery/2.jpg" width="75" height="75" alt="01 (196)"></a>
                        </li>
                        <li class="span3">
                            <a href="#" title="01 (65) by Victor1558, on Flickr"><img src="<?php echo front_template_path()?>images/sample/gallery/1.jpg" width="75" height="75" alt="01 (65)"></a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!--/row-fluid-->
    </div>
    <!--/container-->

</section>
<!--/bottom-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2015 <a target="_blank" href="#" title="The IIT Pvt. Ltd.">iitinfotrain.com</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>                  
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="<?php echo front_template_path()?>js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?php echo front_template_path()?>js/vendor/bootstrap.min.js"></script>
<script src="<?php echo front_template_path()?>js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="<?php echo front_template_path()?>js/jquery.ba-cond.min.js"></script>
<script src="<?php echo front_template_path()?>js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
    $(function() {
        var Page = (function() {

            var $navArrows = $( '#nav-arrows' ),
            slitslider = $( '#slider' ).slitslider( {
                autoplay : true
            } ),

            init = function() {
                initEvents();
            },
            initEvents = function() {
                $navArrows.children( ':last' ).on( 'click', function() {
                    slitslider.next();
                    return false;
                });

                $navArrows.children( ':first' ).on( 'click', function() {
                    slitslider.previous();
                    return false;
                });
            };

            return { init : init };

        })();

        Page.init();
    });
</script>
<!-- /SL Slider -->
<?php if($subview=='gallery'){ ?>
<!-- gallery -->
<script src="<?php echo front_template_path()?>assets/gallery/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo front_template_path()?>assets/gallery/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo front_template_path()?>assets/gallery/js/masonry.pkgd.min.js"></script>
<script type="text/javascript">
    $(function(){

        $('.view-work').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] 
            },
            image: {
                tError: 'The image could not be loaded.',
                titleSrc: function(item) {
                    return item.el.parent('.work-bottom').siblings('img').attr('alt');
                }
            },
            callbacks: {
                elementParse: function(item) {
                    item.src = item.el.attr('href');
                }
            }
        });

        $('.portfolio-masonry').masonry({
            columnWidth: '.portfolio-box', 
            itemSelector: '.portfolio-box',
            transitionDuration: '0.5s'
        });

        $('.portfolio-filters a').on('click', function(e){
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                $('.portfolio-filters a').removeClass('active');
                var clicked_filter = $(this).attr('class').replace('filter-', '');
                $(this).addClass('active');
                if(clicked_filter != 'all') {
                    $('.portfolio-box:not(.' + clicked_filter + ')').css('display', 'none');
                    $('.portfolio-box:not(.' + clicked_filter + ')').removeClass('portfolio-box');
                    $('.' + clicked_filter).addClass('portfolio-box');
                    $('.' + clicked_filter).css('display', 'block');
                    $('.portfolio-masonry').masonry();
                }
                else {
                    $('.portfolio-masonry > div').addClass('portfolio-box');
                    $('.portfolio-masonry > div').css('display', 'block');
                    $('.portfolio-masonry').masonry();
                }
            }
        });

$(window).on('resize', function(){ $('.portfolio-masonry').masonry(); });

$('.portfolio-box img').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] 
    },
    image: {
        tError: 'The image could not be loaded.',
        titleSrc: function(item) {
            return item.el.siblings('.portfolio-box-text').find('h3').text();
        }
    },
    callbacks: {
        elementParse: function(item) {              
            if(item.el.hasClass('portfolio-video')) {
                item.type = 'iframe';
                item.src = item.el.data('portfolio-video');
            }
            else {
                item.type = 'image';
                item.src = item.el.attr('src');
            }
        }
    }
});


})
</script>
<!-- gallery -->
<?php } ?>
</body>
</html>