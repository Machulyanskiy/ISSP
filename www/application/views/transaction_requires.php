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

    <title>Ведення вакансій</title>

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
            <h2 class="find-header">Ведення вакансій</h1>
            <div class="col-xs-offset-1 col-xs-10">
                <div id="start-warning" class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Список вакансій відсутній. Натисніть кнопку "Додати вакансію".
                </div>

                <div class="panel-body vac-list">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Назва вакансії</th>
                                    <th class='icon'></th>
                                    <th class='icon'></th>
                                    <th class='icon'></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td>1</td>
                                    <td class='vac-el'>ACCOUNT MANAGER</td>
                                    <td class='icon' title='знайти спеціалістів'><i class="fa fa-search vac-find" aria-hidden="true"></i></td>
                                    <td class='icon' title='редагувати вимогу'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                    <td class='icon' title='видалити вимогу'><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>

                <div class="col-xs-4 vac-req">
                    <ul class="comp-lvl-list">
                        <li>
                                <div>
                                    <p>
                                        <strong>Планування</strong>
                                        <span class="pull-right text-muted">40%</span>
                                    </p>
                                    <a href="#"><div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div></a>
                                </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <p>
                                        <strong>Розробка</strong>
                                        <span class="pull-right text-muted">20%</span>
                                    </p>
                                    <a href="#"><div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div></a>
                                </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <p>
                                        <strong>Запуск</strong>
                                        <span class="pull-right text-muted">60%</span>
                                    </p>
                                    <a href="#"><div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div></a>
                                </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <p>
                                        <strong>Реалізація</strong>
                                        <span class="pull-right text-muted">80%</span>
                                    </p>
                                    <a href="#"><div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div></a>
                                </div>
                        </li>
                        <li>

                                <div>
                                    <p>
                                        <strong>Управління</strong>
                                        <span class="pull-right text-muted">50%</span>
                                    </p>
                                    <a href="#"><div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete (danger)</span>
                                        </div>
                                    </div></a>
                                </div>

                        </li>
                    <ul>
                </div>
                <div class="col-xs-8 vac-req">
                    <h3 class="own-req-title"> Власні вимоги </h3>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Список власних вимог відсутній.
                    </div>
                </div>


                <form class="col-xs-12 add-vac">
                      <div class="form-group">
                        <label for="VacancyName">Назва вакансії</label>
                        <input type="text" class="form-control" id="VacancyName" placeholder="Назва вакансії">
                      </div>
                      <div class="form-group">
                            <p><strong>Рівень компетенцій</strong> (вказується від 0 до 100)</p>
                            <br><label class="comp-lvl">Планування</label>
                            <input class="form-control comp-lvl-input" type="number" min="0" max="100" value="0" placeholder="Планування">
                            <br><label class="comp-lvl">Розробка</label>
                            <input class="form-control comp-lvl-input" type="number" min="0" max="100" value="0" placeholder="Розробка">
                            <br><label class="comp-lvl">Запуск</label>
                            <input class="form-control comp-lvl-input" type="number" min="0" max="100" value="0" placeholder="Запуск">
                            <br><label class="comp-lvl">Реалізація</label>
                            <input class="form-control comp-lvl-input" type="number" min="0" max="100" value="0" placeholder="Реалізація">
                            <br><label class="comp-lvl">Управління</label>
                            <input class="form-control comp-lvl-input" type="number" min="0" max="100" value="0" placeholder="Управління">
                      </div>
                      <div class="form-group own-req-list">
                          <button type="button" id='own-req-add' class=" btn btn-default">Додати власну вимогу</button>
                      </div>
                </form>

                <div class="col-xs-12 panel panel-default vac-res">
                    <div class="panel-heading">
                        Список спеціалістів
                        <button type="button" id='close-res' class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>ПІБ</th>
                                        <th>Відповідність</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Яремчук Андрій Максимович</td>
                                        <td>89%</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Бровій Богдан Юрійович</td>
                                        <td>85%</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Воронцов Павло Ігоревич</td>
                                        <td>81%</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Побережний Дмитро Андрійович</td>
                                        <td>76%</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Южин Ярослав Іванович</td>
                                        <td>66%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 save-vac">
                    <input class="vac-sub btn btn-primary" type="button" value="Додати вакансію">
                    <input class="save-new-vac btn btn-primary" type="button" value="Зберегти вакансію">
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
