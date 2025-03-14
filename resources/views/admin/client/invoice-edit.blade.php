<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap WYSIWYG editor (v1.1.4)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="{{ asset('editor/dist/') }}/css/wysiwyg.css" rel="stylesheet">
    <link href="{{ asset('editor/dist/') }}/css/highlight.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <div class="container">
        <form action="{{ route('update.invoice',$invoice->id) }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="row">
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-10">
                    <div class="well" style="margin: 2rem 0;">
                        <div class="form-group">
                            <label class="control-label" for="editor">Client Invoice Edit:</label>
                            <textarea id="editor" class="form-control" rows="3" name="invoice">
                                {{ $invoice->invoice }}
                            </textarea>

                        </div>




                        <div class="form-group" style="text-align: right">
                            <label for="form-lable" class="form-label"></label>
                            <button class="btn btn-info float-end">Submit</button>
                        </div>
                    </div>
                    <div class="col-md-1">&nbsp;</div>
                </div>
            </div>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="{{ asset('editor/dist/') }}/js/wysiwyg.js"></script>
        <script src="{{ asset('editor/dist/') }}/js/highlight.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#editor').wysiwyg({
                    highlight: true,
                    debug: true
                });
            });
        </script>
</body>

</html>
