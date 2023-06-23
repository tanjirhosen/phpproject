@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add User</h3></div>
                    <div class="card-body">
                        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="Name" name="name" type="text" placeholder="Name" />
                                    <label for="Name">Name</label>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input class="form-control" id="Email" name="email" placeholder="Email" />
                                    <label for="Email">Email</label>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="Password" name="password" type="password" placeholder="Password" />
                                    <label for="Password">Password</label>
                                </div>


                            {{--                            <div class="mt-4 mb-0 text-center" >--}}
                            {{--                                <input type="submit" class="btn btn-outline-success" value="Create Product">--}}
                            {{--                            </div>--}}

                            <div class="col-12 mt-4 mb-0">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Create User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
