<!-- start Main Wrapper -->
<div class="main-wrapper">

    <div class="flexslider-hero-slider">
        <div id="mainFlexSlider">
            <div class="flexslider">
                <ul class="slides">
                    <li class="slide">
                        <div class="flexslider-image-bg" style="background-color: black; background-size:cover"></div>
                    </li>
                    <!-- slide1 end -->




                </ul>
                <!-- slides end -->

                <div class="flexslider-overlay"></div>

            </div>
            <!-- flexslider end -->
        </div>

        <div class="main-search-holder">
            <form id="filter_form" action="<?php echo base_url('/main/postticket');?>" method="post">
                <div class="container" align="center">

                    <div class="row">

                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                            <h1 class="hero-title">What's the Issue?</h1>
                            <p class="lead">Shout it Out!</p>

                        </div>

                    </div>

                    <div class="main-search-wrapper full-width" align="center">

                        <div class="row" align="center">

                            <div class="col-lg-offset-2 col-lg-8">

                                <div class="form-group">
                                    <input type="text" name="issue" required="" placeholder="Please be brief" class="form-control" style="color: black; text-align: center">

                                </div>

                            </div>
                            </div>
                            <div class="row" align="center">

                            <div class="col-lg-offset-3 col-lg-3">

                                <div class="form-group">

                                    <select name="tags" id="tags" class="select2-multi form-control" data-placeholder="Choose a Category" required>
                                        <option value=""></option>
                                        <option value="Mess">Mess</option>
                                        <option value="Hostel">Hostel</option>
                                        <option value="Admin">Admin</option>


                                    </select>

                                </div>

                            </div>

                            <div class="col-lg-3">

                                <div class="form-group">

                                    <button type="submit" class="btn btn-outline-info btn-block">Post Issue</button>

                                </div>

                            </div>

                        </div>

                    </div>
            </form>

            </div>

        </div>


    </div>