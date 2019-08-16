@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-block">
    <center> 
        <div class="page-header-title">
            <h1> HEAD </h1>           
        </div>
        <div class="page-body">
            <a href="#" style="text-decoration:none"> หัวข้อ1 &nbsp; </a>
            <a href="#" style="text-decoration:none"> หัวข้อ2 &nbsp; </a>
            <a href="#" style="text-decoration:none"> หัวข้อ3 &nbsp; </a>
            <a href="#" style="text-decoration:none"> หัวข้อ4 &nbsp; </a>
        </div>
    </center>
    <form action="#" method="POST">

        Short Description : <br>
        <textarea name="editor1" rows="10" cols="50" ></textarea> <br>

        <script type="text/javascript">

            CKEDITOR.replace('editor1', {

                height: "200px", //กำหนดความสูง  

                width: "", //กำหนดความกว้าง  

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

        <input type="submit" class="btn btn-primary" name="submit" value="ยืนยัน">
        <input type="reset" class="btn btn-danger" name="reset" value="ยกเลิก">

    </form>
    </div>
</div>
@endsection
