<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SB Admin 2 - Dashboard')</title>
    
    <!-- Cargar estilos de SB Admin 2 -->
    @vite(['resources/css/app.css'])
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- ESTO LO COPIAREMOS DESPUÉS DE TU PLANTILLA -->
        <!-- Sidebar irá aquí -->
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar irá aquí -->
                
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Tu contenido principal -->
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2024</span>
                    </div>
                </div>
            </footer>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Cargar scripts de SB Admin 2 -->
    @vite(['resources/js/app.js'])
</body>
</html>