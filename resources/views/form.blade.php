@extends('layouts.master')

@section('css')
  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')

<div class="card">
    <div class="card-block">
    <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>ตั้งแท่นเอกสาร</strong> 
                  </div>
                  <div class="card-body">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="date-input">เลขที่รับส่วนงาน</label>
                          <div class="col-md-3">
                              <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Text">
                          <span class="help-block">This is a help text</span>
                          </div>
                        </div>
                      
                      <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="text-input">เลขที่หนังสือ</label>
                        <div class="col-md-3">
                          <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Text">
                          <span class="help-block">This is a help text</span>
                        </div>
                        <label class="col-md-2 col-form-label" for="text-input">ประเภทเอกสาร</label>
                        <div class="col-md-3">
                          <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Text">
                          <span class="help-block">This is a help text</span>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="date-input">Date Input</label>
                        <div class="col-md-3">
                          <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date">
                          <span class="help-block">Please enter a valid date</span>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="textarea-input">Textarea</label>
                        
                        <div class="col-md-9">
                            <textarea name="editor1" rows="10" cols="50"></textarea>            
                        </div>
<script type="text/javascript">

    CKEDITOR.replace('editor1', {

        // height: "200px", //กำหนดความสูง  

        // width: "", //กำหนดความกว้าง  

        toolbar: //กลุ่มเครื่องมือ ตัดออก เพิ่มเข้าได้  

                [
                    [
                        'Bold', 'Italic', 'Underline', '-',
                        'Subscript', 'Superscript', '-',

                        'NumberedList', 'BulletedList', '-',
                        'Link', 'Unlink', '-',
                        'Cut', 'Copy', 'Paste', '-',
                        'Undo', 'Redo'
                    ],

                    [
                        'Outdent', 'Indent', '-',
                        'JustifyCenter', 'JustifyRight', 'JustifyBlock'
                    ],

                    '/',

                    [
                        'Image', 'Table', 'HorizontalRule', '-',
                        'Font', 'FontSize', 'TextColor', 'BGColor'
                    ]
                ]

    }
    );

</script> <br>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="file-input">File input</label>
                          <div class="col-md-3">
                            <input id="file-input" type="file" name="file-input">
                            <span class="help-block" color="red">เอกสารต้องเป็นไฟล์ PDF แนวตั้งเท่านั้น</span>
                          </div>
                        </div>

                      
                      {{-- <div class="form-group row">
                          <label class="col-md-2 col-form-label">Inline Radios</label>
                          <div class="col-md-3 col-form-label">
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                              <label class="form-check-label" for="inline-radio1">One</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="inline-radios">
                              <label class="form-check-label" for="inline-radio2">Two</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="inline-radios">
                              <label class="form-check-label" for="inline-radio3">Three</label>
                            </div>
                          </div>
                        </div> --}}


                    
                      <div class="form-group row">
                        <label class="col-md-2 col-form-label">เลือกตำแหน่งตราประทับ</label>
                        <div class="col-md-3 col-form-label">
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-checkbox1" type="checkbox" value="check1">
                            <label class="form-check-label" for="inline-checkbox1">มุมซ้าย</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-checkbox2" type="checkbox" value="check2">
                            <label class="form-check-label" for="inline-checkbox2">ตรงกลาง</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" id="inline-checkbox3" type="checkbox" value="check3">
                            <label class="form-check-label" for="inline-checkbox3">มุมขวา</label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-2 col-form-label" for="textarea-input">เกษียนหนังสือ</label>
                          <div class="col-md-6">
                            <textarea class="form-control" id="textarea-input" name="textarea-input" rows="9" placeholder="เรียน"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="date-input">ตำแหน่ง</label>
                            <div class="col-md-3">
                                <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Text">
                         
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label"></label>
                            <div class="col-md-3 col-form-label">
                              <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                                <label class="form-check-label" for="inline-radio1">One</label>
                              </div>
                              <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="inline-radios">
                                <label class="form-check-label" for="inline-radio2">Two</label>
                              </div>
                              <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="inline-radios">
                                <label class="form-check-label" for="inline-radio3">Three</label>
                              </div>
                            </div>

                        </div>  

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">ชั้นความเร็ว</label>
                                <div class="col-md-3 col-form-label">
                                  <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-radio1" type="radio" value="option1" name="inline-radios">
                                    <label class="form-check-label" for="inline-radio1">ปกติ</label>
                                  </div>
                                  <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-radio2" type="radio" value="option2" name="inline-radios">
                                    <label class="form-check-label" for="inline-radio2">ด่วน</label>
                                  </div>
                                  <div class="form-check form-check-inline mr-1">
                                    <input class="form-check-input" id="inline-radio3" type="radio" value="option3" name="inline-radios">
                                    <label class="form-check-label" for="inline-radio3"> ด่วนมาก </label>
                                  </div>
                                  <div class="form-check form-check-inline mr-1">
                                      <input class="form-check-input" id="inline-radio4" type="radio" value="option4" name="inline-radios">
                                      <label class="form-check-label" for="inline-radio4"> ด่วนมากที่สุด </label>
                                    </div>
                                </div>
                            </div>  
                      
                    </form>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">
                          <i class="fa fa-dot-circle-o"></i>ส่ง</button>
                        <button class="btn btn-sm btn-danger" type="reset">
                          <i class="fa fa-ban"></i> ยกเลิก</button>
                      </div>
                    </div>
                  </div>
                  
                
                  
    
<!-- 
        <input type="submit" class="btn btn-primary" name="submit" value="ยืนยัน">
        <input type="reset" class="btn btn-danger" name="reset" value="ยกเลิก"> -->

    </form>
    </div>
</div>

@endsection
