<?php

function isActive($page, $ubicacion)
{

    if ($ubicacion == $page) {
        echo 'active';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Home
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->

    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />

    <style>
    label.error {
        color: red
    }

    .loading__wraper {
        position: absolute;
        z-index: 500;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(100, 100, 100, .5);
        display: none;
    }

    .lds-dual-ring {
        display: inline-block;
        width: 80px;
        height: 80px;
    }

    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 64px;
        height: 64px;
        margin: 8px;
        border-radius: 50%;
        border: 6px solid #fff;
        border-color: #fff transparent #fff transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }

    .tabla-container-hide,
    #form-selectProyectos {
        display: none;
    }

    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>
</head>


<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Leads admin
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item <?= isActive('home', $ubicacion); ?>">
                        <a class="nav-link" href="<?= base_url('home'); ?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?= isActive('clientes', $ubicacion); ?>">
                        <a class="nav-link" href="<?php echo base_url('clientes'); ?>">
                            <i class="material-icons">folder_shared</i>
                            <p>Clientes</p>
                        </a>
                    </li>
                    <li class="nav-item <?php isActive('proyectos', $ubicacion); ?>">
                        <a class="nav-link" href="<?php echo base_url('proyectos'); ?>">
                            <i class="material-icons">business_center</i>
                            <p>Proyectos</p>
                        </a>
                    </li>
                    <li class="nav-item <?php isActive('leads', $ubicacion); ?>">
                        <a class="nav-link" href="<?php echo base_url('leads'); ?>">
                            <i class="material-icons">contacts</i>
                            <p>Leads</p>
                        </a>
                    </li>

                    <li class="nav-item <?php isActive('notificaciones', $ubicacion); ?>">
                        <a class="nav-link" href="<?php echo base_url('notificaciones'); ?>">
                            <i class="material-icons">notifications</i>
                            <p>Notificaciones</p>
                        </a>
                    </li>
                    <li class="nav-item <?php isActive('contactos', $ubicacion); ?>">
                        <a class="nav-link" href="<?php echo base_url('notificaciones'); ?>">
                            <i class="material-icons">contact_mail</i>
                            <p>Contactos</p>
                        </a>
                    </li>
                    <li class="nav-item <?php isActive('perfil', $ubicacion); ?>">
                        <a class="nav-link" href="<?php echo base_url('notificaciones'); ?>">
                            <i class="material-icons"> account_circle</i>
                            <p>Perfil</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">

                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->