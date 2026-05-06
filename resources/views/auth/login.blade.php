<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap5-toggle@5.0.0/css/bootstrap5-toggle.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<!-- CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/flaticon.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/spacing.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style>
    /* .bg-gradient-primary {
    background-color: #3b65ad !important;
     background-image:  #3b65ad !important;
    background-size: cover;

}
.text-success {
    color: #ef36a2 !important;
}
.btn-info {
    color: #fff;
    background-color: #58b05c;
    border-color: #58b05c;
} */

    .bg-gradient-primary {
    background-color: #3b65ad !important;
     background-image:  #3b65ad !important;
    background-size: cover;

}
.text-success {
    color: #ef36a2 !important;
}
.btn-info {
    color: #fff;
    background-color: #58b05c;
    border-color: #58b05c;
}
.btn-primary {
    color: #fff;
    background-color: #58b05c;
    border-color: #58b05c;
}
.nav-tabs .nav-item .nav-link.active {
    color: #fff !important;
    background-color: #58b05c !important;
}

.btn-success {
    color: #fff;
    background-color: #58b05c;
    border-color: #58b05c;
}

.nav-link {
    color: #000;
}
.btn-block {
    display: block;
    /*width: 13%;*/
    /* margin-left: 21px; */
}


</style>

<body id="page-top">





<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block login_bg" style="background-image:url(https://demo.phpscriptpoint.com/desix/uploads/login_page_photo_1704942796.jpg)"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 fw-bold">Admin Login</h1>
                                    </div>
<form id="loginForm" class="user">
    @csrf
    <div class="form-group">
        <input type="email" name="email" id="email" class="form-control form-control-user" placeholder="Email Address" required>
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Login
    </button>
</form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="" href="https://demo.phpscriptpoint.com/desix/admin/forget-password">Forget Password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
   document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    let form = this;
    let formData = new FormData(form);

    // Show loader with SweetAlert
    Swal.fire({
        title: 'Logging in...',
        html: '<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>',
        allowOutsideClick: false,
        showConfirmButton: false
    });

    fetch("{{ route('login.attempt') }}", {
        method: "POST",
        body: formData,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => {
        // Handle both JSON and non-JSON responses
        const contentType = response.headers.get("content-type");
        if (contentType && contentType.includes("application/json")) {
            return response.json();
        } else {
            throw new Error('Invalid JSON response');
        }
    })
    .then(data => {
        Swal.close();

        if (data.success) {
            Swal.fire({
                icon: 'success',
                title: 'Login Successful',
                text: 'Redirecting...',
                timer: 1500,
                showConfirmButton: false
            }).then(() => {
                window.location.href = data.redirect;  // ✅ Redirect to dashboard
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text: data.message || 'Invalid credentials. Please try again.'
            });
        }
    })
    .catch(error => {
        Swal.close();
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Something went wrong. Please try again.'
        });
        console.error('Error:', error);
    });
});

</script>

   
    
@include('layouts.footer')