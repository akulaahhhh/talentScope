<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Forms - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <x-head-content-dashboard />
</head>

<body>
    <div class="wrapper">
        <x-sidebar-dashboard />

        <div class="main-panel">
            <div class="main-header">

                <x-navbar-dashboard />
            </div>
            <x-alert/>
            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Profile Setting</h3>
                        <ul class="breadcrumbs mb-3">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="icon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Profile Setting</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">About</div>
                                </div>
                                <form action="{{ route('talentScope.organizer_dashboard.update_profile_setting') }}" method="POST">
                                  @csrf

                                    <div class="card-body">
                                        <div class="row gy-3">
                                            <div class="col-md-3">
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="col-md-9">


                                                <span class="input-group-text fw-bolder" id="basic-addon1">@
                                                    {{ $user->username }}</span>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ $user->email }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <label for="role">Role</label>
                                            </div>
                                            <div class="col-md-9">
                                                <label class="selectgroup-item">
                                                    <span class="selectgroup-button"
                                                        style="color: black; background: rgb(146, 195, 197);">{{ $user->role }}</span>
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="org">Organization Name</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="org"
                                                    name="org_name" value="{{ $user->organizer->org_name }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <label for="ssm">SSM Number</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control" id="ssm" name="ssm"
                                                    value="{{ $user->organizer->ssm }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <label for="type">Organization Type</label>
                                            </div>
                                            <div class="col-md-9">
                                                <select class="form-select form-control" id="defaultSelect"
                                                    name="type">
                                                    <option value="MNC"
                                                        {{ $user->organizer->type == 'MNC' ? 'selected' : '' }}>MNC
                                                    </option>
                                                    <option value="GLC"
                                                        {{ $user->organizer->type == 'GLC' ? 'selected' : '' }}>GLC
                                                    </option>
                                                    <option value="NGO"
                                                        {{ $user->organizer->type == 'NGO' ? 'selected' : '' }}>NGO
                                                    </option>
                                                    <option value="Institution"
                                                        {{ $user->organizer->type == 'Institution' ? 'selected' : '' }}>
                                                        Institution</option>
                                                    <option value="Others"
                                                        {{ $user->organizer->type == 'Others' ? 'selected' : '' }}>
                                                        Others</option>
                                                </select>

                                            </div>
                                            <div class="col-md-3">
                                                <label for="desc">Description</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="desc" name="desc"
                                                    value="{{ $user->organizer->description }}" />
                                            </div>
                                            <div class="col-md-3">
                                                <label for="address">Address</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="address" name="address"
                                                    value="{{ $user->organizer->address }}" />
                                            </div>
                                            {{-- <div class="col-md-3">
                                                <label for="address">Change Password</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="address" name="address"
                                                    value="{{ $user->organizer->address }}" />
                                            </div> --}}



                                        </div>

                                    </div>
                                    <div class="card-action">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Change Password</div>
                                </div>
                                <form action="{{ route('talentScope.organizer_dashboard.update_password_org') }}" method="POST">
                                    @csrf
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-md-3">
                                                <label for="address">Change Password</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="password" class="form-control" name="password"  placeholder="New Password" required/>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="password" class="form-control"  name="password_confirmation" placeholder="Confirm Password" required />
                                            </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <x-footer-dashboard />
        </div>


    </div>
    <!--   Core JS Files   -->
    <x-script-dashboard />
</body>

</html>
