@extends('welcome')
@section('content')
<form action="{{route('xu-li-cap-nhat-sinh-vien',['id'=>$sinhvien->id])}}" method="post">
    @csrf
    <div class="form-group">
      <label for="ten">MSSV</label>
      <input type="text" class="form-control" placeholder="Tên lớp học" name="mssv" value="{{$sinhvien->mssv}}">
    </div>
    <div class="form-group">
        <label for="ten">Họ tên</label>
        <input type="text" class="form-control" placeholder="Họ tên" name="ho_ten" value="{{$sinhvien->ho_ten}}">
    </div>
    <label for="ten">Lớp học</label>
    <select name="lop_hoc_id">
        @foreach ($dsLopHoc as $lophoc ){
            @if ($lophoc->id==$sinhvien->lop_hoc_id)
            <option value="{{$lophoc->id}}" selected>{{$lophoc->ten}}</option>
            @else
            <option value="{{$lophoc->id}}" >{{$lophoc->ten}}</option>
            @endif
        @endforeach
    </select>
    <div class="form-group">
        <label for="ten">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$sinhvien->email}}">
    </div>
    <div class="form-group">
        <label for="ten">Điểm trung bình</label>
        <input type="text" class="form-control" placeholder="Điểm trung bình" name="diem_tb" value="{{$sinhvien->diem_tb}}">
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
<a href="/sinh-vien/danh-sach">Back</a>
@endsection
