@extends('admin.master')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h2>Danh Sách Chi Tiết Đặt Phòng</h2>

            <!-- Nút Thêm Mới -->
            <div class="mb-3">
                <!-- <a href="{{ route('bookingdetails.create') }}" class="btn btn-primary">Thêm Chi Tiết Đặt Phòng Mới</a> -->
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Booking ID</th>
                        <th>Số Người</th>
                        <th>CCCD</th>
                        <th>Số Đêm</th>
                        <th>Giá Phòng</th>
                        <th>Giảm Giá</th>
                        <th>Tổng Chi Phí Phòng</th>
                        <th>Ngày Tạo</th>
                        <th>Ngày Cập Nhật</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bookingDetails as $detail)
                        <tr>
                            <td>{{ $detail->id }}</td>
                            <td>{{ $detail->BookingID }}</td>
                            <td>{{ $detail->NumberOfPeople }}</td>
                            <td>{{ $detail->CCCD }}</td>
                            <td>{{ $detail->NumberOfNights }}</td>
                            <td>{{ $detail->RoomRate }}</td>
                            <td>{{ $detail->Discount }}</td>
                            <td>{{ $detail->TotalRoomCost }}</td>
                            <td>{{ $detail->created_at }}</td>
                            <td>{{ $detail->updated_at }}</td>
                            <td>
                                <a href="{{ route('bookingdetails.edit', $detail->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                
                                <form action="{{ route('bookingdetails.destroy', $detail->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa chi tiết đặt phòng này không?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11">Không có chi tiết đặt phòng nào.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection