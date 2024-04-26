{{-- @extends('Admin.master')
@section('content')


    <a href="{{route('bookings.list')}}" class="btn btn-success"> Reset </a>
    <div class="fw-normal mb-2">
        <h2
            class="fw-normal fs-2 mx-auto text-center rounded p-0 w-75 mb-2
            @if ($bookings->count() > 0) bg-success
            @else
                bg-danger text-white @endif">
            @if ($bookings->count() === 1)
                Found 1 matching data for "{{ request()->search }}"
            @elseif ($bookings->count() > 1)
                Found {{ $bookings->count() }} matching data for "{{ request()->search }}"
            @else
                No Data found for "{{ request()->search }}"
            @endif
        </h2>

    </div>
    @if ($bookings->count() > 0)

        <table class="table" style="width:auto;">
            <thead>
                <tr>
                    <th scope="col">SI</th>
                    <th scope="col">Package</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Tran_Id</th>
                    <th scope="col"> Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $key => $booking)
                    <tr>
                        <th scope="row"> {{ $key + 1 }}</th>
                        <td>TMS- {{ $booking->code}}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->destination }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->number }}</td>
                        <td>{{ $booking->transaction_id }}</td>
                        <td>{{ $booking->payment_status }}</td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif
@endsection
 --}}






@extends('Admin.master')
@section('content')
    <div class="container mt-0">
        <h2 class="text-center mb-2">{{ $bookings->first()->destination }} Booking List (TMS) </h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Name</th>
                    <th>Destination</th>
                    <th>Person</th>
                    <th>Room</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Tran_ID</th>
                    <th>Refund </th>
                    {{-- <th>Refund Amount</th> --}}
                    <th>Final Amount</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $totalFinalAmount = 0;
                $totalRefund = 0;
                $totalQuantity = 0;
                $totalSingleBed = 0;
                $totalDoubleBed = 0;
                ?>
                @foreach($bookings as $key => $booking)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>TMS- {{ $booking->code}}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->destination }}</td>
                        <td>{{ $booking->quantity }}</td>

                        <td>
                            @if($booking->payment_status === 'confirm' && $booking->status !== 'canceled')
                                @if($booking->chooseroom === "Single Bed for 2 persons in a room")
                                    Single Bed
                                    <?php $totalSingleBed += ceil($booking->quantity / 2); ?>
                                @elseif($booking->chooseroom === "Double Bed for 4 persons in a room")
                                    Double Bed
                                    <?php $totalDoubleBed += ceil($booking->quantity / 4); ?>
                                @endif
                            @endif
                        </td>
                        <td>
                            @if($booking->payment_status === "Pending")
                                <span class="text-danger">Pending</span>
                            @elseif($booking->payment_status === "confirm")
                                <span class="text-success">Confirm</span>
                            @endif
                        </td>
                        <td>{{ $booking->amount }}</td>
                        <td>{{ $booking->transaction_id}}</td>
                        {{-- <td>
                            @if($booking->status === 'canceled' && !$booking->refund_processed)
                                <a href="{{ route('refund', $booking->id) }}" class="btn btn-warning">Refund</a>
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            @if($booking->refund_processed)
                                {{ $booking->amount * 0.8 }} BDT
                                <?php $totalRefund += ($booking->amount * 0.8); ?>
                            @else
                                -
                            @endif
                        </td> --}}
                        <td>
                            @if($booking->status === 'canceled' && !$booking->refund_processed)
                                <a href="{{ route('refund', $booking->id) }}" class="btn btn-warning">Refund</a>
                                <?php $refundAmount = $booking->amount * 0.8; ?>
                                {{ $refundAmount }} BDT
                            @elseif($booking->status === 'canceled' && $booking->refund_processed)
                                {{ $booking->amount * 0.8 }} BDT
                            @else
                                -
                            @endif
                        </td>

                        <td>
                            @if($booking->refund_processed)
                                {{ $booking->amount * 0.2 }} BDT
                                <?php $totalFinalAmount += ($booking->amount * 0.2); ?>
                            @else
                                {{ $booking->amount }} BDT
                                <?php $totalFinalAmount += $booking->amount; ?>
                            @endif
                        </td>
                        <?php
                        if($booking->payment_status === 'confirm' && $booking->status !== 'canceled') {

                            $totalQuantity += $booking->quantity;
                        }
                        ?>
                    </tr>
                @endforeach

                <tr>
                    <td colspan="9" class="text-right"><strong>Total Refund:</strong></td>
                    <td colspan="3">{{ $totalRefund }} BDT</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Final Amount:</strong></td>
                    <td colspan="3">{{ $totalFinalAmount }} BDT</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Quantity:</strong></td>
                    <td colspan="3">{{ $totalQuantity }} Persons</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Single Bed Room :</strong></td>
                    <td colspan="3">{{ $totalSingleBed }}</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Double Bed Room:</strong></td>
                    <td colspan="3">{{ $totalDoubleBed }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2
@endsection


