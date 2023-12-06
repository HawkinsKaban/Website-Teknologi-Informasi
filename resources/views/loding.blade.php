<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Menggunakan Bootstrap 5.3.2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Teknologi Informasi</title>
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/responsive.css') }}">
</head>
<body>
    <div class="preloader loading">
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
    </div>
</body>
<script>
        // Wait for 2 seconds and then redirect to home
        setTimeout(function () {
            window.location.href = "{{ url('/home') }}";
        }, 5000);
</script>
</html>
