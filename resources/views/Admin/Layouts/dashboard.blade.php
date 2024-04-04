@extends('Admin.master')
@section('content')

<div class="page-holder bg-gray-100">
    <div class="container-fluid px-lg-4 px-xl-5">
        <!-- Page Header-->
        <div class="page-header">
            <h1 class="page-heading">Dashboard</h1>
           
        </div>
        <section class="mb-3 mb-lg-5">
            <div class="row mb-3">
                <!-- Widget Type 1-->
                <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="fw-normal text-red">$10,500</h4>
                                    <p class="subtitle text-sm text-muted mb-0">Earnings</p>
                                </div>
                                <div class="flex-shrink-0 ms-3">
                                    <svg class="svg-icon text-red">
                                        <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#speed-1"> </use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-red-light">
                            <div class="row align-items-center text-red">
                                <div class="col-10">
                                    <p class="mb-0">20% increase</p>
                                </div>
                                <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widget Type 1-->
                <!-- Widget Type 1-->
                <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="fw-normal text-blue">584</h4>
                                    <p class="subtitle text-sm text-muted mb-0">Readers</p>
                                </div>
                                <div class="flex-shrink-0 ms-3">
                                    <svg class="svg-icon text-blue">
                                        <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#news-1"> </use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-blue-light">
                            <div class="row align-items-center text-blue">
                                <div class="col-10">
                                    <p class="mb-0">3% increase</p>
                                </div>
                                <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widget Type 1-->
                <!-- Widget Type 1-->
                <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="fw-normal text-primary">876</h4>
                                    <p class="subtitle text-sm text-muted mb-0">Bookmarks</p>
                                </div>
                                <div class="flex-shrink-0 ms-3">
                                    <svg class="svg-icon text-primary">
                                        <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#bookmark-1"> </use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-primary-light">
                            <div class="row align-items-center text-primary">
                                <div class="col-10">
                                    <p class="mb-0">10% increase</p>
                                </div>
                                <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widget Type 1-->
                <!-- Widget Type 1-->
                <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="fw-normal text-green">3,500</h4>
                                    <p class="subtitle text-sm text-muted mb-0">Visitors</p>
                                </div>
                                <div class="flex-shrink-0 ms-3">
                                    <svg class="svg-icon text-green">
                                        <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#world-map-1">
                                        </use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-green-light">
                            <div class="row align-items-center text-green">
                                <div class="col-10">
                                    <p class="mb-0">5% decrease</p>
                                </div>
                                <div class="col-2 text-end"><i class="fas fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widget Type 1-->
            </div>

        </section>
    </div>



</div>

@endsection
