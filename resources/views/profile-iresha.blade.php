@extends('layouts.master')

@section('title')
My Profile
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
                            <li><a class="active" href="#">My Profile</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>My Profile</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="main-content-area clearfix">
    <section class="section-padding no-top gray">
        <div class="container">

            {{-- <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
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
                </div>
            </div> --}}


            <div class="row margin-top-40">

                <div class="col-md-12 col-xs-12 col-sm-12">

                    <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                            <div class="tab-content">
                                <div class="profile-edit tab-pane fade in active" id="edit">
                                    <h2 class="heading-md">Manage your Security Settings</h2>
                                    <p>Manage Your Account</p>
                                    <div class="clearfix"></div>
                                    <form method="POST" action="{{ route('customer.update-profile') }}">
                                        @csrf

                                        <div class="row">
                                            <input type="hidden" class="form-control margin-bottom-20" id="customer_id"
                                                name="customer_id" value="{{ $customer->id }}">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>First Name <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20"
                                                    name="first_name" value="{{ $customer->first_name }}" required>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Last Name <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20"
                                                    name="last_name" value="{{ $customer->last_name }}" required>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Email <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20" name="email"
                                                    value="{{ $customer->email }}" required>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label>Password</label>
                                                <input type="password" class="form-control margin-bottom-20"
                                                    name="password">
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label>Contact No <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20"
                                                    name="contact_no" value="{{ $customer->contact_no }}" required>
                                            </div>

                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label>Billing Address <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20"
                                                    name="billing_address" value="{{ $customer->billing_address }}"
                                                    required>
                                            </div>

                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label>Shipping Address <span class="color-red">*</span></label>
                                                <input type="text" class="form-control margin-bottom-20"
                                                    name="shipping_address" value="{{ $customer->shipping_address }}"
                                                    required>
                                            </div>
                                        </div>

                                        {{-- <div class="row margin-bottom-20">
                                            <div class="form-group">
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <span class="btn btn-default btn-file">
                                                                Browse… <input type="file" id="imgInp">
                                                            </span>
                                                        </span>
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <img id="img-upload" class="img-responsive" src="images/users/2.jpg"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="clearfix"></div>
                                        <div class="row">
                                            {{-- <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="form-group">
                                                    <div class="skin-minimal">
                                                        <ul class="list">
                                                            <li>
                                                                <input type="checkbox" id="minimal-checkbox-7">
                                                                <label for="minimal-checkbox-7">i agree <a
                                                                        href="#">Terms of Services</a></label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                                <button type="submit" class="btn btn-theme btn-sm">Update My
                                                    Info</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection