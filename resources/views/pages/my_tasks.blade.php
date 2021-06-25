@extends('layouts_2.master')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Bin Movement Tasks</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>
        
        <div class="row">

            <a href="#" class="btn btn-info btn-sm btn-rounded btn-icon-split mx-2">
                <span class="text">Print</span>
            </a>

            <a href="#" class="btn btn-info btn-sm btn-rounded btn-icon-split mx-2">
                <span class="text">History</span>
            </a>
        </div>
        <div class="my-2"></div>
        <!-- Content Row -->
        <div class="row">
            <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered nowrap" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="control-input" name="example1">
                            </th>
                            <th></th>
                            <th>Activity</th>
                            <th>Bin Movement Type</th>
                            <th>Object</th>
                            <th>Object Ref</th>
                            <th>Created Date</th>
                            <th>Source</th>
                            <th>Destination</th>
                            <th>Status</th>
                            <th>Quantity</th>
                            <th>C. Quantity</th>
                            <th>User</th>
                            <th>Last Changed Date</th>
                            <th>Descripton</th>
                            <th>Notes</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                            <th>
                                <input type="checkbox" class="control-input" name="example1">
                            </th>
                            <th></th>
                            <th>Activity</th>
                            <th>Bin Movement Type</th>
                            <th>Object</th>
                            <th>Object Ref</th>
                            <th>Created Date</th>
                            <th>Source</th>
                            <th>Destination</th>
                            <th>Status</th>
                            <th>Quantity</th>
                            <th>C. Quantity</th>
                            <th>User</th>
                            <th>Last Changed Date</th>
                            <th>Descripton</th>
                            <th>Notes</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            
        </div>

            

    </div>
    <!-- /.container-fluid -->

@endsection
