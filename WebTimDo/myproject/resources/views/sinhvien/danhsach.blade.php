@extends('welcome')
@section('content')
<h1>DANH SÁCH SINH VIÊN</h1>
<a href="/sinh-vien/them">Thêm mới</a>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">MSSV</th>
        <th scope="col">Họ tên</th>
        <th scope="col">Lớp</th>
        <th scope="col">Email</th>
        <th scope="col">Điểm TB</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($listSinhVien as $sinhvien)
        <tr>
            <th scope="row">{{$sinhvien->id}}</th>
            <td>{{$sinhvien->mssv}}</td>
            <td>{{$sinhvien->ho_ten}}</td>
            <td>{{$sinhvien->lopHoc->ten}}</td>
            <td>{{$sinhvien->email}}</td>
            <td>{{$sinhvien->diem_tb}}</td>   
            <td><a href="/sinh-vien/chi-tiet/{{$sinhvien->id}}" class="btn btn-primary">Xem</a></td>
            <td><a href="/sinh-vien/cap-nhat/{{$sinhvien->id}}" class="btn btn-success">Cập nhật</a></td>
            <td><a href="/sinh-vien/xoa/{{$sinhvien->id}}" class="btn btn-warning">Xóa</a></td> 
                   
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
