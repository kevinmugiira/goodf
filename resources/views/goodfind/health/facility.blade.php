@extends('goodfind.master')


@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Welcome {{Auth()->user()->name}}</h3>
                            <h6 class="font-weight-normal mb-0">Browse through all available facilities around you!!</h6>
{{--                            <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card tale-bg position-relative">
                        <div class="card-people mt-auto">
                            <div class="ml-2 mt-5 position-absolute">
                                <h6 class="font-weight-normal">Your medical partner!</h6>
                                <h1 class="location font-weight-bold">GoodFind Africa.</h1>
                            </div>
                            <img src="asset/images/dashboard/people.svg" style="height: 250px" alt="people">
                            <div class="weather-info">
                                <div class="d-flex">
                                    <div>
                                        <h2 class="mb-0 font-weight-normal"><i class="icon-heart mr-2"></i>75<sup class="icon-thermometer">bpm</sup></h2>
                                    </div>
                                    </br>
                                    <div class="ml-2">
                                        <h4 class="location font-weight-normal">Healthcare matters.</h4>
                                        <h6 class="font-weight-normal">Your medical partner!</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body">
                            <h3>Categories</h3>
                            <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
                                                <div class="card card-light-blue">
                                                    <div class="card-body">
                                                        <p class="mb-4">Number of Meetings</p>
                                                        <p class="fs-30 mb-2">34040</p>
                                                        <p>2.00% (30 days)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 stretch-card transparent">
                                                <div class="card card-light-danger">
                                                    <div class="card-body">
                                                        <p class="mb-4">Number of Clients</p>
                                                        <p class="fs-30 mb-2">47033</p>
                                                        <p>0.22% (30 days)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
                                                <div class="card card-light-blue">
                                                    <div class="card-body">
                                                        <p class="mb-4">Number of Meetings</p>
                                                        <p class="fs-30 mb-2">34040</p>
                                                        <p>2.00% (30 days)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item mr-3">
                                        <div class="row">
                                            <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
                                                <div class="card card-light-blue">
                                                    <div class="card-body">
                                                        <p class="mb-4">Number of Meetings</p>
                                                        <p class="fs-30 mb-2">34040</p>
                                                        <p>2.00% (30 days)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 stretch-card transparent">
                                                <div class="card card-light-danger">
                                                    <div class="card-body">
                                                        <p class="mb-4">Number of Clients</p>
                                                        <p class="fs-30 mb-2">47033</p>
                                                        <p>0.22% (30 days)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
                                                <div class="card card-light-blue">
                                                    <div class="card-body">
                                                        <p class="mb-4">Number of Meetings</p>
                                                        <p class="fs-30 mb-2">34040</p>
                                                        <p>2.00% (30 days)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="carousel-item">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">--}}
{{--                                                <div class="ml-xl-4 mt-3">--}}
{{--                                                    <p class="card-title">Detailed Reports</p>--}}
{{--                                                    <h1 class="text-primary">$34040</h1>--}}
{{--                                                    <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>--}}
{{--                                                    <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-12 col-xl-9">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-md-6 border-right">--}}
{{--                                                        <div class="table-responsive mb-3 mb-md-0 mt-3">--}}
{{--                                                            <table class="table table-borderless report-table">--}}
{{--                                                                <tr>--}}
{{--                                                                    <td class="text-muted">Illinois</td>--}}
{{--                                                                    <td class="w-100 px-0">--}}
{{--                                                                        <div class="progress progress-md mx-4">--}}
{{--                                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </td>--}}
{{--                                                                    <td><h5 class="font-weight-bold mb-0">713</h5></td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td class="text-muted">Washington</td>--}}
{{--                                                                    <td class="w-100 px-0">--}}
{{--                                                                        <div class="progress progress-md mx-4">--}}
{{--                                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </td>--}}
{{--                                                                    <td><h5 class="font-weight-bold mb-0">583</h5></td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td class="text-muted">Mississippi</td>--}}
{{--                                                                    <td class="w-100 px-0">--}}
{{--                                                                        <div class="progress progress-md mx-4">--}}
{{--                                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </td>--}}
{{--                                                                    <td><h5 class="font-weight-bold mb-0">924</h5></td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td class="text-muted">California</td>--}}
{{--                                                                    <td class="w-100 px-0">--}}
{{--                                                                        <div class="progress progress-md mx-4">--}}
{{--                                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </td>--}}
{{--                                                                    <td><h5 class="font-weight-bold mb-0">664</h5></td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td class="text-muted">Maryland</td>--}}
{{--                                                                    <td class="w-100 px-0">--}}
{{--                                                                        <div class="progress progress-md mx-4">--}}
{{--                                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </td>--}}
{{--                                                                    <td><h5 class="font-weight-bold mb-0">560</h5></td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td class="text-muted">Alaska</td>--}}
{{--                                                                    <td class="w-100 px-0">--}}
{{--                                                                        <div class="progress progress-md mx-4">--}}
{{--                                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </td>--}}
{{--                                                                    <td><h5 class="font-weight-bold mb-0">793</h5></td>--}}
{{--                                                                </tr>--}}
{{--                                                            </table>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6 mt-3">--}}
{{--                                                        <canvas id="south-america-chart"></canvas>--}}
{{--                                                        <div id="south-america-legend"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-0">Facility Name</p>
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-striped table-borderless">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Product</th>--}}
{{--                                        <th>Price</th>--}}
{{--                                        <th>Date</th>--}}
{{--                                        <th>Status</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>Search Engine Marketing</td>--}}
{{--                                        <td class="font-weight-bold">$362</td>--}}
{{--                                        <td>21 Sep 2018</td>--}}
{{--                                        <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Search Engine Optimization</td>--}}
{{--                                        <td class="font-weight-bold">$116</td>--}}
{{--                                        <td>13 Jun 2018</td>--}}
{{--                                        <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Display Advertising</td>--}}
{{--                                        <td class="font-weight-bold">$551</td>--}}
{{--                                        <td>28 Sep 2018</td>--}}
{{--                                        <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Pay Per Click Advertising</td>--}}
{{--                                        <td class="font-weight-bold">$523</td>--}}
{{--                                        <td>30 Jun 2018</td>--}}
{{--                                        <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>E-Mail Marketing</td>--}}
{{--                                        <td class="font-weight-bold">$781</td>--}}
{{--                                        <td>01 Nov 2018</td>--}}
{{--                                        <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Referral Marketing</td>--}}
{{--                                        <td class="font-weight-bold">$283</td>--}}
{{--                                        <td>20 Mar 2018</td>--}}
{{--                                        <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Social media marketing</td>--}}
{{--                                        <td class="font-weight-bold">$897</td>--}}
{{--                                        <td>26 Oct 2018</td>--}}
{{--                                        <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Facility Name</h4>
{{--                            <div class="list-wrapper pt-2">--}}
{{--                                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">--}}
{{--                                    <li>--}}
{{--                                        <div class="form-check form-check-flat">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input class="checkbox" type="checkbox">--}}
{{--                                                Meeting with Urban Team--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <i class="remove ti-close"></i>--}}
{{--                                    </li>--}}
{{--                                    <li class="completed">--}}
{{--                                        <div class="form-check form-check-flat">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input class="checkbox" type="checkbox" checked>--}}
{{--                                                Duplicate a project for new customer--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <i class="remove ti-close"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="form-check form-check-flat">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input class="checkbox" type="checkbox">--}}
{{--                                                Project meeting with CEO--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <i class="remove ti-close"></i>--}}
{{--                                    </li>--}}
{{--                                    <li class="completed">--}}
{{--                                        <div class="form-check form-check-flat">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input class="checkbox" type="checkbox" checked>--}}
{{--                                                Follow up of team zilla--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <i class="remove ti-close"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="form-check form-check-flat">--}}
{{--                                            <label class="form-check-label">--}}
{{--                                                <input class="checkbox" type="checkbox">--}}
{{--                                                Level up for Antony--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <i class="remove ti-close"></i>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="add-items d-flex mb-0 mt-2">--}}
{{--                                <input type="text" class="form-control todo-list-input"  placeholder="Add new task">--}}
{{--                                <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="icon-circle-plus"></i></button>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. <a href="https://bit.ly/kevinmugiira" target="_blank">Kevin Mugiira</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>

    @stop
