@extends('dashboard.layouts.app')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="page-category">
            <div class="edit_information">
                <form id="editUserForm">
                    <h3 class="text-center">Edit User Information</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="profile_details_text">User name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="profile_details_text">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="profile_details_text">Role:</label>
                                <input type="text" name="role" id="role" class="form-control" value="{{$user->role}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit">
                            <div class="form-group" style="display: flex;align-items: center;justify-content: center;">
                                <button type="button" id="submitBtn" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#submitBtn').click(function(e) {
        e.preventDefault();
        let name = $('#name').val();
        let email = $('#email').val();
        let role = $('#role').val();
        let id = {{$user->id}};

        if (!name && !email && !role) {
            toastr.error('At least one field is required');
            return;
        }

        if (role !== 'client' && role !== 'admin') {
            toastr.error('Role can only be "client" or "admin"');
            return;
        }

        $.ajax({
            url: '{{ route('user.update', $user->id) }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                name: name,
                email: email,
                role: role
            },
            success: function(response) {
                toastr.success('User information updated successfully');
                window.location.reload();
            },
            error: function(xhr) {
                toastr.error('Something went wrong');
            }
        });
    });
</script>
@endsection