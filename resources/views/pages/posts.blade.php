@extends('layouts_2.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Posts</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">All Posts</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>
                        <input type="checkbox" class="control-input" name="example1">
                    </th>
					<th>Title</th>
					<th>Category</th>
                    <th>Tags</th>
					<th>Status</th>
					<th><i class="fa fa-comments"></i></th>
					<th>Date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>
                        <input type="checkbox" class="control-input" name="example1"/>
                    </th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Status</th>
                    <th><i class="fa fa-comments"></i></th>
                    <th>Date</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                    <td>
                        <input type="checkbox" class="control-input" name="example1"/>
                    </td>
                    <td>Organizational Strategy for Small Law Firms: exploring media marketing gaps in the RPC 2007</td>
                    <td>System Architect</td>
                    <td>System Architect</td>
                    <td>Published</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="control-input" name="example1"/>
                    </td>
                    <td>Organizational Strategy for Small Law Firms: exploring media marketing gaps in the RPC 2007</td>
                    <td>Accountant</td>
                    <td>System Architect</td>
                    <td>Published</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="control-input" name="example1"/>
                    </td>
                    <td>Organizational Strategy for Small Law Firms: exploring media marketing gaps in the RPC 2007</td>
                    <td>Junior Technical Author</td>
                    <td>System Architect</td>
                    <td>Published</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="control-input" name="example1"/>
                    </td>
                    <td>Organizational Strategy for Small Law Firms: exploring media marketing gaps in the RPC 2007</td>
                    <td>Senior Javascript Developer</td>
                    <td>System Architect</td>
                    <td>Draft</td>
                    <td>22</td>
                    <td>2012/03/29</td>
				</tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

@push("scripts")
    {{-- $(document).ready( function () {
        $('#dataTable').DataTable();
    } ); --}}
@endpush
