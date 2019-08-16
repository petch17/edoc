@extends('layouts.master')

@section('content')
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="card">
              <div class="card-header">
              <div class="col-md-3 py-4">

                   <th>
                    <button class="btn btn-info btn-ladda" data-style="slide-left"> <a href="{{ route('from.index') }}">เพิ่ม</a></button>
                   

                    <td> <i class="fa fa-circle text-danger"></i> ด่วนมาก</th>
                    <td>ด่วนมาก</th>
                    <td>ด่วน</th>
                    <td>ปกติ</th>
                    <td>ลับ</th>
                    <td>ปกติ</th>
                    <td>ลับ</th>

                 </th>
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
      </main>
      @endsection