<!DOCTYPE html>
<html>
<head>
    <title>How To Notification Message PopUp Using Toastr Js Plugin Laravel 10 Example - shouts.dev</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5>Dashboard</h5>
                </div>
                <div class="card-body">
                    <h5>Welcome to the shouts.dev</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // success message popup notification
    @if(session()->has('success'))
    toastr.success("{{ session()->get('success') }}");
    @endif

    // info message popup notification
    @if(session()->has('info'))
    toastr.info("{{ session()->get('info') }}");
    @endif

    // warning message popup notification
    @if(session()->has('warning'))
    toastr.warning("{{ session()->get('warning') }}");
    @endif

    // error message popup notification
    @if(session()->has('error'))
    toastr.error("{{ session()->get('error') }}");
    @endif
</script>

</body>
</html>
