<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

<style type="text/css">

    label
    {
        display: inline-block;

        width:200px;
    }
</style>

    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top:100px;">
                
            @if(session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">
                    X
                </button>

                {{ session()->get('message') }}

            </div>

            @endif
                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding:15px;">
                        <label >Doctor Name</label>
                        <input type="text" style="color:black;" name="name" placeholder="Write the name" required="">
                    </div>

                    <div style="padding:15px;">
                        <label >Phone Number</label>
                        <input type="number" style="color:black;" name="number" placeholder="Write the number" required="">
                    </div>

                    <div style="padding:15px;">
                        <label >Specialty</label>
                        <select name="specialty" style="color: black; width: 200px;" required="">
                        <option>--Select--</option>
                        <option value="skin">Skin</option>
                        <option value="heart">Heart</option>
                        <option value="eye">Eye</option>
                        <option value="nose">Nose</option>

                       </select>
                    </div>

                    <div style="padding:15px;">
                        <label >Room N0</label>
                        <input type="number" style="color:black;" name="room" placeholder="Write the room number" required="">
                    </div>

                    <div style="padding:15px;">
                        <label >Doctor Image</label>
                        <input type="file" name="file" required="">
                    </div>

                    <div style="padding:15px;">
                        
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>

            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>

</html>
