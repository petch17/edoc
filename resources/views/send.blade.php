@extends('layouts.master')

@section('css')
<!-- Main styles for this application-->
<link href="{{asset('css/style.css" rel="stylesheet')}}">
<link href="{{asset('vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
<link href="{{asset('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <form action="{{ route('form.index') }}">
          @csrf
          <button>
              <img src="{{ asset('img\signe.png') }}" width="15px" height="20px" >
          </button>
        </form>
        <a> <i class="fa fa-circle" style="color:red;"></i> ด่วนมาก</a> &nbsp; 
        <a> <i class="fa fa-circle" style="color:orange;"></i> ด่วนมาก</a> &nbsp; 
        <a> <i class="fa fa-circle" style="color:yellow;"></i> ด่วน</a> &nbsp; 
        <a> <i class="fa fa-circle" style="color:green;"></i> ปกติ</a> &nbsp; 
        <a> <i class="fa fa-circle" style="color:black;"></i> ลับ</a>
    </div>
    <div class="card-body">
    <table class="table table-striped table-bordered datatable">
        <thead>
        <tr>
            <th>No.</th> 
            <th>ทะเบียน</th>
            <th>เอกสาร</th>
            <th>วันที่</th>
            <th>เวลา</th>
            <th>เรื่อง</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>1 <i class="fa fa-circle" style="color:red;"></i></td>
                <td>2885</td>
                <td>Anton Phunihel</td>
                <td>2012/01/01</td>
                <td>time</td>
                <td>ลดโลกร้อน</td>
                <td align="center"  >
                    <img src="{{ asset('img\msg_success.png') }}">
                </td>
            </tr>
            <tr>
                <td>2 <i class="fa fa-circle" style="color:red;"></i></td>
                <td>2885</td>
                <td>Anton Phunihel</td>
                <td>2012/01/01</td>
                <td>time</td>
                <td>ลดโลกร้อน</td>
                <td align="center">
                    <img src="{{ asset('img\msg_success.png') }}">
                </td>
            </tr>
            <tr>
                <td>3 <i class="fa fa-circle" style="color:green;"></i></td>
                <td>2885</td>
                <td>Anton Phunihel</td>
                <td>2012/01/01</td>
                <td>time</td>
                <td>ลดโลกร้อน</td>
                <td align="center">
                    <img src="{{ asset('img\msg_success.png') }}">
                </td>
            </tr>
            <tr>
                <td>4 <i class="fa fa-circle" style="color:black;"></i></td>
                <td>453543</td>
                <td>Anton Phunihel</td>
                <td>2012/01/01</td>
                <td>time</td>
                <td>ลดโลกร้อน</td>
                <td align="center">
                    <img src="{{ asset('img\msg_success.png') }}">
                </td>
            </tr>
            <tr>
                <td>5 <i class="fa fa-circle" style="color:yellow;"></i></td>
                <td>4351</td>
                <td>Anton Phunihel</td>
                <td>2012/01/01</td>
                <td>time</td>
                <td>ลดโลกร้อน</td>
                <td align="center">
                    <img src="{{ asset('img\msg_success.png') }}">
                </td>
            </tr>
            <tr>
                <td>6 <i class="fa fa-circle" style="color:black;"></i></td>
                <td>4353</td>
                <td>Anton Phunihel</td>
                <td>2012/01/01</td>
                <td>time</td>
                <td>ลดโลกร้อน</td>
                <td align="center">
                    <img src="{{ asset('img\msg_success.png') }}">
                </td>
            </tr>
            <tr>
                <td>7 <i class="fa fa-circle" style="color:orange;"></i></td>
                <td>2455</td>
                <td>Anton Phunihel</td>
                <td>2012/01/01</td>
                <td>time</td>
                <td>ลดโลกร้อน</td>
                <td align="center">
                    <img src="{{ asset('img\msg_success.png') }}">
                </td>
                
            </tr>
            <tr>
                <td>8 <i class="fa fa-circle" style="color:green;"></i></td>
                <td>4277</td>
                <td>Anton Phunihel</td>
                <td>2012/01/01</td>
                <td>time</td>
                <td>ลดโลกร้อน</td>
                <td align="center">
                    <img src="{{ asset('img\msg_success.png') }}">
                </td>
                
            </tr>
            <tr>
                <td>9 <i class="fa fa-circle" style="color:green;"></i></td>
                <td>1818</td>
                <td>Anton </td>
                <td>2012/01/01</td>
                <td>time</td>
                <td>ลดโลกร้อน</td>
                <td align="center">
                    <img src="{{ asset('img\msg_success.png') }}">
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection

@section('js')
<!-- Plugins and scripts required by this view-->
<script src="{{asset('node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('js/datatables.js')}}"></script>
@endsection
