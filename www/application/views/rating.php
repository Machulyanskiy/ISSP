<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Рейтинг тестованих</title>

    <!-- Bootstrap Core CSS -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/static/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/static/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">ISSP</a>
            </div>
            <!-- /.navbar-header -->
        </nav>

        <div class="container">
            <h2 class="find-header">Загальний рейтинг тестованих</h1>

            <div class="col-xs-offset-1 col-xs-10">
            <!--<div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Вкажіть</strong> необхідний рівень компетенцій та натисніть кнопку "знайти".
            </div> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Список спеціалістів
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>ПІБ</th>
                                    <th class="text-center">Відповідність</th>
                                    <th class="text-center">Рівень компетенцій</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>1</td>
                                    <td>Яремчук Андрій Максимович</td>
                                    <td class="text-center">89%</td>
                                    <td class="text-center">А:90 Б:95 В:89 Г:76 Ґ:82</td>
                                </tr>
                                <tr class="warning">
                                    <td>2</td>
                                    <td>Бровій Богдан Юрійович</td>
                                    <td class="text-center">85%</td>
                                    <td class="text-center">А:82 Б:78 В:90 Г:80 Ґ:75</td>
                                </tr>
                                <tr class="danger">
                                    <td>3</td>
                                    <td>Воронцов Павло Ігоревич</td>
                                    <td class="text-center">81%</td>
                                    <td class="text-center">А:60 Б:85 В:76 Г:80 Ґ:87</td>
                                </tr>
                                <tr class="info">
                                    <td>4</td>
                                    <td>Побережний Дмитро Андрійович</td>
                                    <td class="text-center">76%</td>
                                    <td class="text-center">А:45 Б:57 В:90 Г:85 Ґ:70</td>
                                </tr>
                                <tr class="success">
                                    <td>5</td>
                                    <td>Южин Ярослав Іванович</td>
                                    <td class="text-center">66%</td>
                                    <td class="text-center">А:88 Б:45 В:76 Г:76 Ґ:82</td>
                                </tr>
                                <tr class="warning">
                                    <td>5</td>
                                    <td>Шедов Констянтин Валерійович</td>
                                    <td class="text-center">65%</td>
                                    <td class="text-center">А:83 Б:40 В:77 Г:80 Ґ:82</td>
                                </tr>
                                <tr class="danger">
                                    <td>5</td>
                                    <td>Южин Алиса Дмітрієвна</td>
                                    <td class="text-center">60%</td>
                                    <td class="text-center">А:40 Б:65 В:55 Г:84 Ґ:76</td>
                                </tr>
                                <tr class="info">
                                    <td>5</td>
                                    <td>Строчкин Андрей Александрович</td>
                                    <td class="text-center">45%</td>
                                    <td class="text-center">А:35 Б:10 В:55 Г:62 Ґ:32</td>
                                </tr>
                                <tr class="success">
                                    <td>5</td>
                                    <td>Гапко Олексій Павлович</td>
                                    <td class="text-center">13%</td>
                                    <td class="text-center">А:10 Б:5 В:0 Г:35 Ґ:41</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="/static/js/jquery-1.11.0.js"></script>
    <script src="/static/js/main_page.js"></script>

</body>

</html>
