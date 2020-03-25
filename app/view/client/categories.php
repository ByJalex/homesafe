<?php
require_once('../../templates/templateClient.php');
$title = 'Iniciar sesión';
$header = template::header($title);
?>

<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div class="container">

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="main_nav" style="">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explorar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="news.php">Noticias</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="news.php">Sobre nosotros</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> Marcas</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Xiaomi</a>
                        <a class="dropdown-item" href="#">Samsumg</a>
                        <a class="dropdown-item" href="#">Philips</a>
                        <a class="dropdown-item" href="#">LG</a>
                        <a class="dropdown-item" href="#">Google</a>
                    </div>
                </li>
            </ul>
        </div> <!-- collapse .// -->
    </div> <!-- container .// -->
</nav>

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Categorias</h2>
        <nav>
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nombre de la categoria</li>
            </ol>
        </nav>
    </div> <!-- container //  -->
</section>

<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-md-3">

                <div class="card">
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                                <i class='icon-control bx bxs-down-arrow'></i>
                                <h6 class="title">Marcas </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_2" style="">

                            <div class="card-body">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" checked="" class="custom-control-input">
                                    <div class="custom-control-label">Xiaomi
                                        <b class="badge badge-pill badge-light float-right">120</b> </div>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" checked="" class="custom-control-input">
                                    <div class="custom-control-label">Samsumg
                                        <b class="badge badge-pill badge-light float-right">15</b> </div>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" checked="" class="custom-control-input">
                                    <div class="custom-control-label">Philips
                                        <b class="badge badge-pill badge-light float-right">35</b> </div>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" checked="" class="custom-control-input">
                                    <div class="custom-control-label">LG
                                        <b class="badge badge-pill badge-light float-right">89</b> </div>
                                </label>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <div class="custom-control-label">Google
                                        <b class="badge badge-pill badge-light float-right">30</b> </div>
                                </label>
                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// -->
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                                <i class='icon-control bx bxs-down-arrow'></i>
                                <h6 class="title">Rango de precios </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_3" style="">
                            <div class="card-body">
                                <input type="range" class="custom-range" min="0" max="100" name="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="$0" type="number">
                                    </div>
                                    <div class="form-group text-right col-md-6">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="$1,0000" type="number">
                                    </div>
                                </div> <!-- form-row.// -->
                                <button class="btn btn-block btn-primary">Apply</button>
                            </div><!-- card-body.// -->
                        </div>
                    </article> <!-- filter-group .// -->
                </div> <!-- card.// -->

            </aside> <!-- col.// -->
            <main class="col-md-9">

                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <span class="mr-md-auto">32 artículos encontrados </span>
                        <select class="mr-2 form-control">
                            <option>Últimos artículos</option>
                            <option>Tendencias</option>
                            <option>Lo mas barato</option>
                        </select>
                        <div class="btn-group">
                            <a href="categorieslist.php" class="btn btn-outline-secondary" data-toggle="tooltip" title="" data-original-title="List view">
                                <i class='bx bx-menu'></i>
                                <a href="categories.php" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="" data-original-title="Grid view">
                                    <i class='bx bxs-grid-alt'></i></a>
                        </div>
                    </div>
                </header><!-- sect-heading -->

                <div class="row">

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <a href="product.php" class="img-wrap"> <img src="../../../public/images/Products/84850.jpg">
                                    <a class="btn-overlay" href="#"><i class='bx bx-search'></i> Vista rápida</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Google Home</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-primary">Añadir al carro </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <a href="product.php" class="img-wrap"><img src="../../../public/images/Products/84850.jpg">
                                    <a class="btn-overlay" href="#"><i class='bx bx-search'></i> Vista rápida</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Google Home</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-primary">Añadir al carro </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <a href="product.php" class="img-wrap"><img src="../../../public/images/Products/84850.jpg">
                                    <a class="btn-overlay" href="#"><i class='bx bx-search'></i> Vista rápida</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Google Home</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-primary">Añadir al carro </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                    <div class="col-md-4">
                        <figure class="card card-product-grid">
                            <div class="img-wrap">
                                <a href="product.php" class="img-wrap"><img src="../../../public/images/Products/84850.jpg">
                                    <a class="btn-overlay" href="#"><i class='bx bx-search'></i> Vista rápida</a>
                            </div> <!-- img-wrap.// -->
                            <figcaption class="info-wrap">
                                <div class="fix-height">
                                    <a href="#" class="title">Google Home</a>
                                    <div class="price-wrap mt-2">
                                        <span class="price">$1280</span>
                                    </div> <!-- price-wrap.// -->
                                </div>
                                <a href="#" class="btn btn-block btn-primary">Añadir al carro </a>
                            </figcaption>
                        </figure>
                    </div> <!-- col.// -->

                </div> <!-- row end.// -->


                <nav class="mt-4" aria-label="Page navigation sample">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

            </main> <!-- col.// -->

        </div>

    </div> <!-- container .//  -->
</section>

<?php
require_once('../../templates/templateClient.php');
$footer = template::footer();
?>