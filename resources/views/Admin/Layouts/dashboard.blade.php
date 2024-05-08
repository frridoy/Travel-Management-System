@extends('Admin.master')
@section('content')

<div class="page-holder bg-gray-100">
    <div class="container-fluid px-lg-4 px-xl-5">
        <!-- Page Header-->
        <div class="page-header">
            <h1 class="page-heading">TMS Admin Dashboard</h1>

        </div>
        <section class="mb-3 mb-lg-5">
            <div class="row mb-3">
                <!-- Widget Type 1-->
                <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{route('package.list')}}">
                                <div>
                                    <h4 class="fw-normal text-info">Total Packages</h4>
                                    <p class="subtitle text-sm text-muted mb-0">
                                        <span class="value"> {{ $countPackage->count() }} </span>
                                    </p>
                                </div>
                                </a>
                                <div class="flex-shrink-0 ms-3">
                                    <svg class="svg-icon text-red">
                                        <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#speed-1"> </use>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="fw-normal text-primary">Confirmed Booking</h4>
                                    <p class="subtitle text-sm text-muted mb-0">
                                        <span class="value">{{ $countConfirmBooking }}</span>
                                    </p>

                                </div>

                            </div>
                        </div>

                </div>

            </div>

            <!-- Widget Type 1-->
            <div class="mb-4 col-sm-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="fw-normal text-primary">Pending Booking</h4>
                                <p class="subtitle text-sm text-muted mb-0">
                                    <span class="value">{{ $countPendingBooking }}</span>
                                </p>

                            </div>

                        </div>
                    </div>

            </div>

        </div>


        <div class="mb-4 col-sm-6 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="fw-normal text-primary">Cancelled Booking</h4>
                            <p class="subtitle text-sm text-muted mb-0">
                                <span class="value">{{ $countCancelBooking }}</span>
                            </p>

                        </div>

                    </div>
                </div>

        </div>

    </div>


        </section>
    </div>



</div>

@endsection
