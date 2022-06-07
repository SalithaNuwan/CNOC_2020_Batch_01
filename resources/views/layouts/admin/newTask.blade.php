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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">New Task</a></li>
            </ol>
        </div>
     
        <!-- row -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">New Task</h4>
                </div>
                <div class="card-body">
                    <form action="createTask" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="text-label form-label">User*</label>
                                    <select class="form-control" name="userId">
                                        <option value="">--select user--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="text-label form-label"> Title*</label>
                                    <input type="text" name="title" class="form-control" placeholder="Cellophane Square"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3">
                                    <label class="text-label form-label">Description*</label>
                                    <textarea name="description" class="form-control" id=""></textarea>
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