<!doctype html>
<html class="no-js" lang="es">


<head>
    <?php include 'templates/head.php'; ?>
</head>

<body>

    <div class="wrapper">
        <?php include 'templates/nav.php'; ?>
        <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(assets/images/bg/5.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Acerca de</h2>
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.html">Inicio</a>
                                    <span class="brd-separetor">-</span>
                                    <span class="breadcrumb-item active">Acerca de</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'components/AcercaDescripcion.php'; ?>
        <?php include 'components/Historial.php'; ?>
        <?php include 'components/Logros.php'; ?>
        <?php include 'components/Certificados.php'; ?>
        <?php include 'templates/footer.php'; ?>
    </div>
</body>



</html>