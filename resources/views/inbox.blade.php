@extends('layouts.master')

@section('css')
  <!-- Main styles for this application-->
  <link href="css/style.css" rel="stylesheet">
  <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
  <link href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="card">
      <div class="card-header">
        <form action="{{ route('form.index') }}">
          @csrf
          <button>
              <img src="{{ asset('img\signe.png') }}" width="15px" height="20px" >
          </button>
        </form>
          <a> <i class="fa fa-circle" style="color:red"></i> ด่วนมาก</a> &nbsp;
          <a> <i class="fa fa-circle" style="color:orange"></i> ด่วนมาก</a> &nbsp;
          <a> <i class="fa fa-circle" style="color:yellow"></i> ด่วน</a> &nbsp;
          <a> <i class="fa fa-circle" style="color:green"></i> ปกติ</a> &nbsp;
          <a> <i class="fa fa-circle" style="color:black"></i> ลับ</a>
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
              <td>1</td>
              <td>2885</td>
              <td>Anton Phunihel</td>
              <td>2012/01/01</td>
              <td>time</td>
              <td>ลดโลกร้อน</td>
              <td>
                <span class="badge badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>2885</td>
              <td>Anton Phunihel</td>
              <td>2012/01/01</td>
              <td>time</td>
              <td>ลดโลกร้อน</td>
              <td>
                <span class="badge badge-success">Active</span>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>2885</td>
              <td>Anton Phunihel</td>
              <td>2012/01/01</td>
              <td>time</td>
              <td>ลดโลกร้อน</td>
              <td>
                <span class="badge badge-danger">Banned</span>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>453543</td>
              <td>Anton Phunihel</td>
              <td>2012/01/01</td>
              <td>time</td>
              <td>ลดโลกร้อน</td>
              <td>
                <span class="badge badge-warning">Pending</span>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>4351</td>
              <td>Anton Phunihel</td>
              <td>2012/01/01</td>
              <td>time</td>
              <td>ลดโลกร้อน</td>
              <td>
                <span class="badge badge-dark">Inactive</span>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>4353</td>
              <td>Anton Phunihel</td>
              <td>2012/01/01</td>
              <td>time</td>
              <td>ลดโลกร้อน</td>
              <td>
                <span class="badge badge-dark">Inactive</span>
              </td>
              
            </tr>
            <tr>
              <td>7</td>
              <td>2455</td>
              <td>Anton Phunihel</td>
              <td>2012/01/01</td>
              <td>time</td>
              <td>ลดโลกร้อน</td>
              <td>
                <span class="badge badge-warning">Pending</span>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>4277</td>
              <td>Anton Phunihel</td>
              <td>2012/01/01</td>
              <td>time</td>
              <td>ลดโลกร้อน</td>
              <td>
                <span class="badge badge-dark">Inactive</span>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>1818</td>
              <td>Anton </td>
              <td>2012/01/01</td>
              <td>time</td>
              <td>ลดโลกร้อน</td>
              <td>
                <span class="badge badge-danger">Banned</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
  <!-- Plugins and scripts required by this view-->
  <script src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
  <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="js/datatables.js"></script>
@endsection