<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
                @font-face {
                    font-family: 'THSarabunNew';
                    font-style: normal;
                    font-weight: normal;
                    src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
                }
                @font-face {
                    font-family: 'THSarabunNew';
                    font-style: normal;
                    font-weight: bold;
                    src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
                }
                @font-face {
                    font-family: 'THSarabunNew';
                    font-style: italic;
                    font-weight: normal;
                    src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
                }
                @font-face {
                    font-family: 'THSarabunNew';
                    font-style: italic;
                    font-weight: bold;
                    src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
                }

                body {
                    font-family: "THSarabunNew";
                }
        </style>
        {{-- <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
    <style>

        body {
            font-family: 'Sarabun', sans-serif;
        }
    </style> --}}
    </head>
    <body>
        <p> test ทดสอบ => {{ $name }} </p>
    </body>
</html>
