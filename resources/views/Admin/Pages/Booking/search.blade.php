@extends('Admin.master')
@section('content')

    {{-- <a href="" class="btn btn-outline-success m-3 " onclick="printContent('printDiv')">Report</a> --}}
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
    {{-- <div id="printDiv"> --}}
        <table class="table" style="width:auto;">
            <thead>
                <tr>
                    <th scope="col">SI</th>
                    <th scope="col">Package</th>
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
    {{-- </div> --}}
    @endif
@endsection

{{-- @push('reportcode')
    <script type="text/javascript">
        function printContent(el) {
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }
    </script>
@endpush --}}
