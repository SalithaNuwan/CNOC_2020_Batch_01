@extends('layouts.main.mainApp')

@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Update User details</a></li> --}}
            </ol>
        </div>
        <!-- row -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Profile</h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12 text-center">
                        <img src="images/Profile/5.jpg" width="20%" alt="">
                    </div>
                    <br>
                    <br>
                    <form action="updateUser" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="text-label form-label">Role*</label>
                                    <select class="form-control" name="role" required>
                                        <option ></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="text-label form-label"> Name*</label>
                                    <input type="text" name="name" class="form-control" placeholder="Cellophane Square"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="text-label form-label">Email Address*</label>
                                    <input type="email" class="form-control" id="emial1" name="email"
                                        placeholder="example@example.com.com"  required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="text-label form-label">Phone Number*</label>
                                    <input type="text" name="phone"  class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="text-label form-label">Nic Number*</label>
                                    <input type="text" name="nic" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="text-label form-label">Address*</label>
                                    <textarea name="address" class="form-control" id=""></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <input type="file" class="form-file-input form-control" name="image">
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
@endsection
@section('script')
<script>

</script>
<!-- Datatable -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>
@endsection