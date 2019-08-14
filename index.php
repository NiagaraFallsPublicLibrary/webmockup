<?php
include 'header.html';
?>
<div>
<!--Carousel of Adds-->
<div class="carousel w-100">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Images/Banner/banner1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/Banner/banner2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Images/Banner/banner3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--Events-->
<div class="row">
    <div class="events">
        <div class="row h-100">
            <div class="col-xs-12 col-lg-2">
                <div class="div-center">
                    <h1 class="header-NFPL"><strong>Today</strong> at your LIBRARY</h1>
                    <a href="#">View all events</a>
                </div>
            </div>
            <div class="col-xs-12 col-lg-3">
                <div class="main-event div-center">
                    <a href="#" alt="">
                        <img class="img-fluid" src="Images/Stock/example4.png" alt="Main">
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-lg-7">
                <div class="sub-event-container">
                    <a href="#" alt="">
                        <div class="sub-event">
                            <img src="Images/Stock/example10.png" alt="" align="left" />
                            <span class="sub-event-title">STAMFORD COLLEGIATE STUDENT PHOTOGRAPHY EXHIBIT</span>
                            <p class="sub-event-text">
                                Through January<br>
                                <strong>Victoria, Rosberg Gallery</strong>
                            </p>
                        </div>
                    </a>
                    <a href="#" alt="">
                        <div class="sub-event">

                            <div>
                                <img src="Images/Stock/example7.jpg" alt="" align="left" />
                            </div>
                            <span class="sub-event-title">LETTER WRITING</span>
                            <p class="sub-event-text">
                                3pm<br>
                                <strong>Community</strong>
                            </p>
                        </div>
                    </a>
                    <a href="#" alt="">
                        <div class="sub-event">
                            <div>
                                <img src="Images/Stock/example9.jpeg" alt="" align="left" />
                            </div>
                            <span class="sub-event-title">CRAFTERNOONS</span>
                            <p class="sub-event-text">
                                12pm<br>
                                <strong>Victoria, Rosberg Gallery</strong>
                            </p>
                        </div>
                    </a>
                    <a href="#" alt="">
                        <div class="sub-event">
                            <div>
                                <img src="Images/Stock/example8.jpeg" alt="" align="left" />
                            </div>
                            <span class="sub-event-title">READING BUDDIES</span>
                            <p class="sub-event-text">
                                10am<br>
                                <strong>Stamford</strong>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Picks of the month-->
<div class="row">
    <div class="pickList">
        <div class="row w-100 mx-0">
            <div class="col-xs-12 col-lg-2 col-lg-offset-1 d-xs-inherit d-lg-none">
                    <div class="div-center">
                        <h1 class="header-NFPL">Our<br><strong>PICKS</strong><br> of the<br> MONTH</h1><a href="#">View
                            more</a>
                    </div>
            </div>
            <div class="pick-block colour-lightorange col-xs-12 col-lg-9 h-100">
                <!--<img class="img-fluid" src="Images/Stock/example10.png" height="480" width="360" style="margin: 15px;"/>-->
                <div class="pick-overlay-container">
                    <img class="pick-of-month" src="https://live.nflibrary.ca/opac/extras/ac/jacket/medium/r/213176" />
                    <div class="pick-overlay">
                        <div class="centered">
                            <p class="pick-title">He Said She Said</p>
                            <p class="pick-author">Gigi Gorgeous</p>
                        </div>
                        <p class="pick-shelving-location">Autobiography</p>
                    </div>
                </div>
                
                <img class="pick-of-month" src="https://live.nflibrary.ca/opac/extras/ac/jacket/medium/r/213311" />
                <img class="pick-of-month" src="https://live.nflibrary.ca/opac/extras/ac/jacket/medium/r/212639" />
                <img class="pick-of-month" src="https://live.nflibrary.ca/opac/extras/ac/jacket/medium/r/202405" />
                <img class="pick-of-month" src="https://live.nflibrary.ca/opac/extras/ac/jacket/medium/r/205177" />
                <!--<img class="img-fluid" src="https://live.nflibrary.ca/opac/extras/ac/jacket/medium/r/201106" />-->
            </div>
            <div class="col-xs-12 col-lg-2 col-lg-offset-1 d-none d-lg-block">
                <div class="div-center">
                    <h1 class="header-NFPL">Our<br><strong>PICKS</strong><br> of the<br> MONTH</h1><a href="#">View
                        more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Explore-->
<div class="row">
    <div class="explore">
        <div class="row">
            <div class="col-xs-12 col-lg-3">
                <div class="div-center">
                    <h1 class="header-NFPL"><strong>EXPLORE</strong><br> eBooks, music<br> movies &amp; more</h1><a
                        href="#">View more</a>
                </div>
            </div>
            <div class="col-xs-12 col-lg-9">
                <ul class="explore-this d-lg-inline-flex d-xs-block">
                    <li>
                        <a href="#" alt="">
                            <div class="explore-block colour-redpurple text-white text-center">
                                <img class="img-fluid" src="Images/Assets/book_icon.png" alt="Books">
                                <p>eBooks &amp; <br> eAudiobooks</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" alt="">
                            <div class="explore-block colour-redpurple text-white text-center">
                                <img class="img-fluid" src="Images/Assets/movies_icon.png" alt="Movies">
                                <p>Movies</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" alt="">
                            <div class="explore-block colour-redpurple text-white text-center">
                                <img class="img-fluid" src="Images/Assets/music_icon.png" alt="Music">
                                <p>Music</p>
                            </div>
                        </a>
                    </li>
                    <!--       <li>
                        <div class="explore-block-half colour-redpurple text-white d-xs-none d-lg-inherit">
                            
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div></div>
<?php
include 'footer.html';
?>