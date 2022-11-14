<html>
    <head>
        <?php # headers ?>
        <?php require_once 'view/menu/headers.php' ?>
        <?php # headers ?>
        <title>Inicio Ciudad</title>
    </head>
    <body class="sb-nav-fixed">
        <?php # Nav del user ?>
        <?php require_once 'view/menu/user_nav.php' ?>
        <?php # Nav del user/ ?>
        
        <div id="layoutSidenav">

            <?php # Menu layout ?>
            <?php require_once 'view/menu/menu_layout.php' ?>
            <?php # Menu layout/ ?>
            
            <?php # Contenido inicio layout ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ciudades</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Semillas de navegación</li>
                        </ol>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h3>Lista de ciudades</h3>
                                <a href="/CiudadController?accion=nuevo" class="btn btn-primary" role="button">Nuevo</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <th scope="row">${item.descripcion}</th>
                                            <td>
                                                <a href="/CiudadController?accion=editar&id=${item.id}" class="btn btn-primary" role="button">Editar</a>
                                                <a href="/CiudadController?accion=eliminar&id=${item.id}" class="btn btn-danger" role="button">Eliminar</a>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                            <!--
                            <div class="card-footer">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>¡Exitoso!</strong> Se ha procesado
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                            -->
                        </div>
                </main>
                <?php # Contenido inicio layout/ ?>
            
        </div>
        <?php require_once 'view/menu/javascript_sources.php' ?>
    </body>
</html>