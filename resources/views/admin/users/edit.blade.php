@extends('layouts.admin')

@section('content')
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit User </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/users" class="breadcrumb-link">All Users</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit User</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="" novalidate="">
                                        <div class="form-group">
                                            <label for="inputfirstname">First Name</label>
                                            <input id="inputfirstname" type="text" name="fname" data-parsley-trigger="change" required="" placeholder="Enter first name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputlastname">Last Name</label>
                                            <input id="inputlasttname" type="text" name="lname" data-parsley-trigger="change" required="" placeholder="Enter last name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputemail">Email</label>
                                            <input id="inputemail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputpassword">Password</label>
                                            <input id="inputpassword" type="password" name="password" data-parsley-trigger="change" required="" placeholder="Enter password" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputrole">Role</label>
                                            <select class="form-control" id="inputrole">
                                                <option value="admin">Admin</option>
                                                <option value="employee">Employee</option>
                                            </select>
                                        </div>
                                        
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        
                    </div>
                    
            </div>
            
@endsection


