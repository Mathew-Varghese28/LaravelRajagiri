@extends("theme")

@section("content")

<body class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
                <img height="100px" src="images\2535_logo.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <h1 style="color: cornsilk;">
                       <center><b><u>
                        Login
                       </center> 
                    </u></b>
                    </h1>
                        <tr>
                            <td style="color: cornsilk;"> Student name:</td>
             >               <td><input type="text" class="form-control"> </td>
                        </tr>
                        <tr>
                            <td  style="color: cornsilk;">Password:</td>
                            <td><input type="password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-light">Login</button></td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
</body>   

@endsection