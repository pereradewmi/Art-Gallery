@extends('layouts.master')

@section('title')
My Orders
@endsection

@section('content')

<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a class="active" href="#">My Orders</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>My Orders</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="main-content-area clearfix">
    <section class="custom-padding no-top gray">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-12 col-xs-12 col-sm-12">
                    <section class="search-result-item">
                        <a class="image-link" href="#"><img class="image center-block" alt="" src="images/users/9.jpg">
                        </a>
                        <div class="search-result-item-body">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <h4 class="search-result-item-heading"><a href="#">Umair</a></h4>
                                    <p class="info">
                                        <span><a href="profile.html"><i class="fa fa-user "></i>Profile </a></span>
                                        <span><a href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Profile
                                            </a></span>
                                    </p>
                                    <p class="description">You last logged in at: 14-01-2017 6:40 AM [ USA time (GMT +
                                        6:00hrs)</p>
                                    <span class="label label-warning">Paid Package</span>
                                    <span class="label label-success">Dealer</span>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="row ad-history">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>374</h2>
                                                <small>Ad Sold</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>980</h2>
                                                <small>Total Listings</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="user-stats">
                                                <h2>413</h2>
                                                <small>Favourites Ads</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> --}}
            </div>

            <div class="row margin-top-40">
                <div class="col-md-12 col-lg-12 col-sx-12">
                    <ul class="list-unstyled">
                        <li>
                            <div class="well ad-listing clearfix">
                                <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                    <div class="img-box">
                                        <img src="images/posting/25.jpg" class="img-responsive" alt="">
                                        <div class="total-images"><strong>8</strong> photos </div>
                                        <div class="quick-view"> <a href="#ad-preview" data-toggle="modal"
                                                class="view-button"><i class="fa fa-search"></i></a> </div>
                                    </div>
                                    <span class="ad-status"> Featured </span>
                                    <div class="user-preview">
                                        <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-7 col-xs-12">
                                    <!-- Ad Content-->
                                    <div class="row">
                                        <div class="content-area">
                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                <h3><a>2016 Audi A6 2.0T Quattro Premium Plus</a></h3>
                                                <ul class="ad-meta-info">
                                                    <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                                    <li>15 minutes ago </li>
                                                </ul>
                                                <div class="ad-details">
                                                    <p>Lorem ipsum dolor sit amet consectetur adiscing das elited
                                                        ultricies facilisis lacinia pell das elited ultricies facilisis
                                                        ... </p>
                                                    <ul class="list-unstyled">
                                                        <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                                        <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                                        <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                                        <li><i class="flaticon-key"></i>Manual</li>
                                                        <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-12 col-sm-12">
                                                <div class="short-info">
                                                    <div class="ad-stats hidden-xs"><span>Condition : </span>Used</div>
                                                    <div class="ad-stats hidden-xs"><span>Type : </span>Coupe</div>
                                                    <div class="ad-stats hidden-xs"><span>Make : </span>Audi</div>
                                                </div>
                                                <div class="price"> <span>$18,640</span> </div>
                                                <button class="btn btn-block btn-default"><i class="fa fa-times"
                                                        aria-hidden="true"></i> UnFavorite</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="well ad-listing clearfix">
                                <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                    <!-- Image Box -->
                                    <div class="img-box">
                                        <img src="images/posting/26.jpg" class="img-responsive" alt="">
                                        <div class="total-images"><strong>4</strong> photos </div>
                                        <div class="quick-view"> <a href="#ad-preview" data-toggle="modal"
                                                class="view-button"><i class="fa fa-search"></i></a> </div>
                                    </div>
                                    <!-- Ad Status --><span class="ad-status"> Featured </span>
                                    <!-- User Preview -->
                                    <div class="user-preview">
                                        <a href="#"> <img src="images/users/6.jpg" class="avatar avatar-small" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-7 col-xs-12">
                                    <!-- Ad Content-->
                                    <div class="row">
                                        <div class="content-area">
                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                <!-- Ad Title -->
                                                <h3><a>2010 Ford Shelby GT500 Coupe</a></h3>
                                                <!-- Ad Meta Info -->
                                                <ul class="ad-meta-info">
                                                    <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                                    <li>15 minutes ago </li>
                                                </ul>
                                                <!-- Ad Description-->
                                                <div class="ad-details">
                                                    <p>Lorem ipsum dolor sit amet consectetur adiscing das elited
                                                        ultricies facilisis lacinia pell das elited ultricies facilisis
                                                        ... </p>
                                                    <ul class="list-unstyled">
                                                        <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                                        <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                                        <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                                        <li><i class="flaticon-key"></i>Manual</li>
                                                        <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-12 col-sm-12">
                                                <!-- Ad Stats -->
                                                <div class="short-info">
                                                    <div class="ad-stats hidden-xs"><span>Condition : </span>Used</div>
                                                    <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                                    <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles
                                                    </div>
                                                </div>
                                                <!-- Price -->
                                                <div class="price"> <span>$900</span> </div>
                                                <!-- Ad View Button -->

                                                <button class="btn btn-block btn-success"><i class="fa fa-eye"
                                                        aria-hidden="true"></i> View Ad.</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Ad Content End -->
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="well ad-listing clearfix">
                                <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                    <!-- Image Box -->
                                    <div class="img-box">
                                        <img src="images/posting/7.jpg" class="img-responsive" alt="">
                                        <div class="total-images"><strong>5</strong> photos </div>
                                        <div class="quick-view"> <a href="#ad-preview" data-toggle="modal"
                                                class="view-button"><i class="fa fa-search"></i></a> </div>
                                    </div>
                                    <!-- User Preview -->
                                    <div class="user-preview">
                                        <a href="#"> <img src="images/users/5.jpg" class="avatar avatar-small" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-7 col-xs-12">
                                    <!-- Ad Content-->
                                    <div class="row">
                                        <div class="content-area">
                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                <!-- Ad Title -->
                                                <h3><a> 2010 Lamborghini Gallardo Spyder</a></h3>
                                                <!-- Ad Meta Info -->
                                                <ul class="ad-meta-info">
                                                    <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                                    <li>15 minutes ago </li>
                                                </ul>
                                                <!-- Ad Description-->
                                                <div class="ad-details">
                                                    <p>Lorem ipsum dolor sit amet consectetur adiscing das elited
                                                        ultricies facilisis lacinia pell das elited ultricies facilisis
                                                        ... </p>
                                                    <ul class="list-unstyled">
                                                        <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                                        <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                                        <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                                        <li><i class="flaticon-key"></i>Manual</li>
                                                        <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-12 col-sm-12">
                                                <!-- Ad Stats -->
                                                <div class="short-info">
                                                    <div class="ad-stats hidden-xs"><span>Condition : </span>Used</div>
                                                    <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                                    <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles
                                                    </div>
                                                </div>
                                                <!-- Price -->
                                                <div class="price"> <span>$120</span> </div>
                                                <!-- Ad View Button -->
                                                <button class="btn btn-block btn-success"><i class="fa fa-eye"
                                                        aria-hidden="true"></i> View Ad.</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Ad Content End -->
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- Ads Archive End -->
                    <div class="clearfix"></div>
                    <!-- Pagination -->
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <ul class="pagination pagination-lg">
                            <li> <a href="#"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                            <li> <a href="#">1</a> </li>
                            <li class="active"> <a href="#">2</a> </li>
                            <li> <a href="#">3</a> </li>
                            <li> <a href="#">4</a> </li>
                            <li><a href="#"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <!-- Pagination End -->
                </div>
                <!-- Middle Content Area  End -->
            </div>
        </div>
        <!-- Main Container End -->
    </section>

</div>
<!-- Main Content Area End -->

@endsection