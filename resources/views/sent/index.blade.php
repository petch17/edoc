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
            <li class="breadcrumb-item"><a href="javascript:window.location"><i class="fa fa-file"></i> รายการเอกสาร</a>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="card">
                    <div class="card-header">
                            <i class="fa fa-file"></i> เอกที่ผ่านการอนุมัติ
                    </div>
                <div class="card-body">
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
                                <td align="center">
                                    <img src="{{ asset('img\msg_success.png') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
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
                                <td>3</td>
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
                                <td>4</td>
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
                                <td>5</td>
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
                                <td>6</td>
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
                                <td>7</td>
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
                                <td>8</td>
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
                                <td>9</td>
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
            document.getElementById('sent').classList.add('active');
        });
    </script>
@endsection
