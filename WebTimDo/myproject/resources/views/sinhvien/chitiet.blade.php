@extends('welcome')
@section('content')
<h1>MSSV: {{$sinhvien->mssv}}</h1>
<p>Họ tên: {{$sinhvien->ho_ten}}</p>
<p>Lớp: {{$sinhvien->ho_ten}}</p>
<p>Email: {{$sinhvien->email}}</p>
<p>Điểm TB: {{$sinhvien->diem_tb}}</p>
<a href="/sinh-vien/danh-sach">Back</a>
@endsection
