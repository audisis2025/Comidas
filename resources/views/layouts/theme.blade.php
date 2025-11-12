<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SB Admin 2 - Dashboard')</title>
    
    @vite(['resources/css/app.css'])
</head>

<body id="page-top">
    <div id="wrapper">
        
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2024</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @vite(['resources/js/app.js'])
</body>
</html>