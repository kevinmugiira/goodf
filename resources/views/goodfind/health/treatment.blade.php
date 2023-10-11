@extends('goodfind.master')



@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body">
                            <h3>Treatment Categories</h3>
                            <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
                                                <div class="card card-light-blue">
                                                    <div class="card-body">
                                                        <p class="mb-4">Primary Care</p>
                                                        <p class="fs-30 mb-2">Primary Care</p>
{{--                                                        <p>2.00% (30 days)</p>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 stretch-card">
                                                <div class="card" style="background: #2dc26b">
                                                    <div class="card-body">
                                                        <p class="mb-4">Specialized Medical Fields</p>
                                                        <p class="fs-30 mb-2">Specialized Medical</p>
{{--                                                        <p>0.22% (30 days)</p>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
                                                <div class="card " style="background: #2dc26b">
                                                    <div class="card-body">
                                                        <p class="mb-4">Surgical Specialists</p>
                                                        <p class="fs-30 mb-2">Surgical Specialists</p>
{{--                                                        <p>2.00% (30 days)</p>--}}
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
                                                        <p class="mb-4">Dental and Oral Health</p>
                                                        <p class="fs-30 mb-2">Dental and Oral</p>
{{--                                                        <p>2.00% (30 days)</p>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 stretch-card transparent">
                                                <div class="card card-light-danger">
                                                    <div class="card-body">
                                                        <p class="mb-4">Mental Health</p>
                                                        <p class="fs-30 mb-2">Mental Health</p>
{{--                                                        <p>0.22% (30 days)</p>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
                                                <div class="card card-light-blue">
                                                    <div class="card-body">
                                                        <p class="mb-4">Rehabilitation & Physical Therapy</p>
                                                        <p class="fs-30 mb-2">Rehabilitation</p>
{{--                                                        <p>2.00% (30 days)</p>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Category Type</h4>
                            <p class="card-description">
                                Available treatements for<code> Category#</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Category#</th>
                                        <th>Name</th>
                                        <th>Duration</th>
                                        <th>Availability Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>Photoshop</td>
                                        <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                                        <td><label class="badge badge-danger">Pending</label></td>
                                    </tr>
                                    <tr>
                                        <td>Messsy</td>
                                        <td>Flash</td>
                                        <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                                        <td><label class="badge badge-warning">In progress</label></td>
                                    </tr>
                                    <tr>
                                        <td>John</td>
                                        <td>Premier</td>
                                        <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                                        <td><label class="badge badge-info">Fixed</label></td>
                                    </tr>
                                    <tr>
                                        <td>Peter</td>
                                        <td>After effects</td>
                                        <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                                        <td><label class="badge badge-success">Completed</label></td>
                                    </tr>
                                    <tr>
                                        <td>Dave</td>
                                        <td>53275535</td>
                                        <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                                        <td><label class="badge badge-warning">In progress</label></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
