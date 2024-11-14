<!-- <!DOCTYPE html>
<html>
<head>
    <title>Bulk Email Sender</title>
    <style>
        .mail-body {
            max-width: 600px;
            word-wrap: break-word;
            white-space: normal;
        }
        .processed-body {
            /* Additional styling if needed */
        }
    </style>
</head>
<body>
    <p>{!! $mailData['body'] !!}</p>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <style>
        .mail-body {
            max-width: 600px;
            word-wrap: break-word;
            white-space: normal;
        }
        .processed-body {
            /* Additional styling if needed */
        }
    </style>
</head>
<body>
    <div class="mail-body">
        {!! $mailData['body'] !!}
    </div>
</body>
</html>