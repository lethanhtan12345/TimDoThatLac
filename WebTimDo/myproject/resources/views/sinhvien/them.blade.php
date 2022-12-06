@extends('welcome')
@section('content')
<form action="{{route('xu-li-them-moi-sinh-vien')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="ten">MSSV</label>
      <input type="text" class="form-control" placeholder="Tên lớp học" name="mssv">
    </div>
    <div class="form-group">
        <label for="ten">Họ tên</label>
        <input type="text" class="form-control" placeholder="Họ tên" name="ho_ten">
    </div>
    <label for="ten">Lớp học</label>
    <select name="lop_hoc_id">

        @foreach ($dsLopHoc as $lophoc ){
            <option value="{{$lophoc->id}}">{{$lophoc->ten}}</option>
        }
        @endforeach
    </select>
    <div class="form-group">
        <label for="ten">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email">
    </div>
    <div class="form-group">
        <label for="ten">Điểm trung bình</label>
        <input type="text" class="form-control" placeholder="Điểm trung bình" name="diem_tb">
    </div>

    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
<a href="/sinh-vien/danh-sach">Back</a>
@endsection
