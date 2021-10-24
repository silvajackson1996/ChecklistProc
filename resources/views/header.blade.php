<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" /> -->
    <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png" /> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>teste</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ url('/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ url('/assets/css/material-dashboard.css?v=1.3.0' )}}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ url('/assets/css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.5/css/bootstrap-select.min.css">

</head>

<body >
<div class="wrapper">
    <div class="sidebar" data-active-color="green" data-background-color="black" data-image="{{ url('/assets/img/sidebar-5.jpg') }}">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="#" class="simple-text logo-normal text-center">
                Checklist PROC
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid" style="padding-top: 3.5%">

