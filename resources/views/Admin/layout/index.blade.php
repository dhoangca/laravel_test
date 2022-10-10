{{-- @INCLUDE('layout.head') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
    

<div id="wrapper">

@INCLUDE('Admin/layout.sidebar')

<!-- Content Wrapper -->

<div id="content-wrapper" CLASS="d-flex flex-column">

<!-- Main Content -->

<div id="content">

@INCLUDE('Admin/layout.navbar')

<!-- Begin Page Content -->

<div CLASS="container-fluid">

@yield('content')

</div>

<!-- /.container-fluid -->

</div>

<!-- End of Main Content -->

@INCLUDE('Admin/layout.footer')

</div>

<!-- End of Content Wrapper -->

</div>

<!-- End of Page Wrapper -->

{{-- @INCLUDE('layout.js') --}}


</body>
</html>
<!-- Page Wrapper -->
