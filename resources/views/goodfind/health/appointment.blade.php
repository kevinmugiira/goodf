@extends('goodfind.master')


@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row mt-5 mb-5">
                <div class="col-md-6 grid-margin ml-2 stretch-card">
                    <div>
                        <h2 class="mb-0 font-weight-normal">Hi, {{Auth()->user()->name}}<sup></sup></h2>
                        <h5 class="mb-0 font-weight-normal">Let's track your health daily!</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div>
{{--                    <h2 class="mb-0 font-weight-normal">Hi, {{Auth()->user()->name}}<sup></sup></h2>--}}
                    <h3 class="mb-0 font-weight-normal">Upcoming Appointment</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 stretch-card grid-margin">
                    <div class="row col-md-12">
                        <div class="col-md-6 stretch-card grid-margin-md-0">
                            <div class="card data-icon-card-primary" style="background:  url('asset/images/hospital.jpg'); background-size: cover; background-position: center;">
                                <div class="card-body">
                                    <h3>St Theresa Hospital</h3>
                                    <div class="row">
                                        <div class="col-8 text-white">
                                            <p class="text-white font-weight-500 mb-0">Kikuyu, Nairobi Kenya </p>
                                        </div>
                                        <div class="col-4 background-icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card grid-margin-md-0" style="display: grid;">
                            <div class="card data-icon-card-primary mb-2" style="background: #cdd6f7;">
                                <div class="card-body">
                                    <p class="card-title text-white">Doctor Underson Kimathi</p>
                                    <p>physiotherapy</p>
                                </div>
                            </div>
                            <div class="card data-icon-card-primary" style="background: #cdd6f7;">
                                <div class="card-body">
                                    <p class="card-title text-white">Date : Time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">My activities</p>
                            <p class="font-weight-500">Today 12 Dec 2023</p>
                            <div class="d-flex flex-wrap mb-5">
{{--                                <div class="mr-5 mt-3">--}}
{{--                                    <p class="text-muted">Order value</p>--}}
{{--                                    <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>--}}
{{--                                </div>--}}
{{--                                <div class="mr-5 mt-3">--}}
{{--                                    <p class="text-muted">Orders</p>--}}
{{--                                    <h3 class="text-primary fs-30 font-weight-medium">14k</h3>--}}
{{--                                </div>--}}
{{--                                <div class="mr-5 mt-3">--}}
{{--                                    <p class="text-muted">Users</p>--}}
{{--                                    <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>--}}
{{--                                </div>--}}
{{--                                <div class="mt-3">--}}
{{--                                    <p class="text-muted">Downloads</p>--}}
{{--                                    <h3 class="text-primary fs-30 font-weight-medium">34040</h3>--}}
{{--                                </div>--}}
                            </div>
                            <canvas id="order-chart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="card-title">Sales Report</p>
                                <a href="#" class="text-info">View all</a>
                            </div>
                            <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                            <canvas id="sales-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Advanced Table</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="display expandable-table" style="width:100%"> <!--id="example"-->
                                            <thead>
                                            <tr>
                                                <th>Quote#</th>
                                                <th>Product</th>
                                                <th>Business type</th>
                                                <th>Policy holder</th>
                                                <th>Premium</th>
                                                <th>Status</th>
                                                <th>Updated at</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. <a href="https://bit.ly/kevinmugiira" target="_blank">Kevin Mugiira</a> All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>

    @stop
