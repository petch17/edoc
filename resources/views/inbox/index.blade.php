@extends('layouts.master')

@section('css')
<!-- Main styles for this application-->
<link href="css/style.css" rel="stylesheet">
<link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
<link href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        {{-- <li class="breadcrumb-item" href="{{ url('/home') }}">หนัาหลัก</li> --}}
        <li class="breadcrumb-item"><a href="javascript:window.location"><i class="fa fa-file"></i> รายการเอกสาร</a>
        </li>
        {{-- <li class="breadcrumb-item" href="{{ url('/home') }}">รายการเอกสาร</li> --}}
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                        <i class="fa fa-file"></i> เอกที่รอการอนุมัติ
                    {{-- <form action="{{ route('form.index') }}">
                    @csrf
                    <button>
                        <img src="{{ asset('img\signe.png') }}" width="15px" height="20px">
                    </button>
                    </form> --}}
                    {{-- <i class="fa fa-circle" style="color:red;"></i>ด่วนมาก &nbsp;
                    <i class="fa fa-circle" style="color:orange"></i>ด่วนมาก &nbsp;
                    <i class="fa fa-circle" style="color:yellow"></i>ด่วน &nbsp;
                    <i class="fa fa-circle" style="color:green"></i>ปกติ &nbsp;
                    <i class="fa fa-circle" style="color:black"></i>ลับ --}}

                    {{-- <a href="{{ route('inbox.create') }}" class="float-right btn btn-primary">+ สร้างเอกสาร</a> --}}
                    <a href="{{ route('add') }}" class="float-right">+ เพิ่มเอกสาร</a>
                </div>
                <div class="card-body">
                        <i class="fa fa-circle" style="color:red;"></i> ด่วนที่สุด &nbsp;
                        <i class="fa fa-circle" style="color:orange"></i> ด่วนมาก &nbsp;
                        <i class="fa fa-circle" style="color:yellow"></i> ด่วน &nbsp;
                        <i class="fa fa-circle" style="color:green"></i> ปกติ &nbsp;
                        <i class="fa fa-circle" style="color:black"></i> ลับ <br><br>
                    <table class="table table-striped datatable">
                        <thead>
                            <tr>
                                <th>#</th>
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
</main>
@endsection

@section('js')
<!-- Plugins and scripts required by this view-->
<script src="node_modules/datatables.net/js/jquery.dataTables.js"></script>
<script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<script src="js/datatables.js"></script>

<script>
        $(document).ready(function () {
            document.getElementById('inbox').classList.add('active');
        });
    </script>
@endsection
