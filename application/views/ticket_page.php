<div class="clear"></div>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" role="main">
                <div class="detail-content-wrapper">
                    <div id="section-2" class="detail-content">
                        <div class="detail-item">
                            <div class="row">
                                <div class="col-sm-8 col-md-8">
                                    <div class="itinerary-wrapper">
                                        <div>
                                            <h4 class="title">Description</h4>
                                            <div class="intro-item-body">
                                                <p class="data">
                                                    <?php echo $data[0]['des'];?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-4 col-sm-8 mb-30">
                                    <h4 class="title">Details</h4>
                                    <ul class="list-info no-icon bb-dotted">
                                        <br>
                                        <br>
                                        <li><span class="font600">Ticket by: <span class="info label label-info"><?php echo $data['issuer'];?></span></span>
                                        </li>
                                        <li><span class="font600">Time of Issue:</span> <br><br><span class="info label label-info"><?php echo $data[0]['time'];?></span>
                                        </li>
                                        <li><span class="font600">Likes:</span> <span class="info label label-info">
                                            <?php echo $data[0]['likes'];?></span></br></br><a href="<?php echo base_url('/main/plusone/'.$data[0]['iid'].'/1');?>"><button class="btn btn-outline-info">Like +1</button></a>
                                        </li>
                                        <li><span class="font600">Support :</span> <span class="info label label-info">
                                            <?php echo $data[0]['support'];?></span></br></br><a href="<?php echo base_url('/main/plusone/'.$data[0]['iid'].'/2');?>"><button class="btn btn-outline-info" >Support +1</button></a>
                                        </li>
                                        <li><span class="font600">Status :</span> <span class="info label label-info">
                                            <?php echo $data[0]['status'];?></span>
                                        </li>
                                        <li><span class="font600">Expected Date of Completion:</span> <br><br><span class="info label label-info">
                                            <?php echo $data[0]['edc'];?></span>
                                        </li>
                                        <li><span class="font600">Message: </span> 

                                            <?php echo $data[0]['message'];?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="title">Comments</h4>
                    </div>
                    <div class="review-content">
                        <ul class="review-list">
                            <?php foreach($comment as $c){ ?>
                                <li class="clearfix">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-9 col-lg-offset-1 col-lg-6">
                                                <h6 class="review-text"><span class="commenter"><?php echo $c['commenter'][0]['first_name'];?></span>  commented:</h6>
                                            </div>
                                            <div class="col-sm-3 col-lg-2">
                                                <p class="review-date">
                                                    <?php echo $c['time'];?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="review-text col-sm-9 col-lg-offset-1 col-lg-6">
                                                <p>
                                                    <?php echo $c['comment']?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <?php } ?>

                        </ul>
                    </div>

                </div>

                <div id="leave-comment" class="detail-content" style="padding-top: 30px">

                    <div class="text-left">
                        <h4 class="title">Leave Your Review</h4>
                    </div>

                    <div class="review-form">

                        <form method="POST" action="<?php echo base_url('/main/addcomment/'.$data[0]['iid'])?>">

                            <div class="row">

                                <div class="clear"></div>

                                <div class="col-sm-12 col-md-8">

                                    <div class="form-group">
                                        <textarea class="form-control form-control-sm" name="commentbox" rows="5" placeholder="Comments"></textarea>
                                    </div>
                                </div>

                                <div class="clear"></div>

                                <div class="col-sm-12 col-md-8 mt-10">
                                    <button action="Submit" class="btn btn-outline-info">Comment</button>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                <div class="call-to-action">

                    Question? <a href="#" class="btn btn-outline-info">Make an inquiry</a> or call +66 28 878 5452

                </div>

            </div>

        </div>



    </div>

</div>

</div>

</div>
<!-- end Main Wrapper -->





<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/instagram.min.js"></script>
<script type="text/javascript" src="js/spin.min.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/select2.full.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/readmore.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/validator.min.js"></script>
<script type="text/javascript" src="js/jquery.raty.js"></script>
<script type="text/javascript" src="js/customs.js"></script>

<script>
    /**
     *  Sidebar Sticky
     */

    ! function ($) {

        $(function () {

            var $window = $(window)
            var $body = $(document.body)

            var navHeight = $('.navbar').outerHeight(true) + 50

            $body.scrollspy({
                target: '.scrollspy-sidebar',
                offset: navHeight
            })

            $window.on('load', function () {
                $body.scrollspy('refresh')
            })

            $('.scrollspy-container [href=#]').click(function (e) {
                e.preventDefault()
            })

            // back to top
            setTimeout(function () {
                var $sideBar = $('.scrollspy-sidebar')

                $sideBar.affix({
                    offset: {
                        top: function () {
                            var offsetTop = $sideBar.offset().top
                            var sideBarMargin = parseInt($sideBar.children(0).css('margin-top'), 10)
                            var navOuterHeight = $('.scrollspy-nav').height()

                            return (this.top = offsetTop - navOuterHeight - sideBarMargin)
                        },
                        bottom: function () {
                            return (this.bottom = $('.scrollspy-footer').outerHeight(true))
                        }
                    }
                })
            }, 100)

        })

    }(window.jQuery)
</script>

</body>

</html>