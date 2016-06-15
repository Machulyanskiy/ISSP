<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ISSP</title>

    <!-- Bootstrap Core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="static/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="static/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">ISSP</a>
            </li>
            <li>
                <a href="#about">Про нас</a>
            </li>
            <li>
                <a href="#services">Сервіси</a>
            </li>
            <li>
                <a href="#portfolio">Портфоліо</a> <hr>
            </li>
            <!--<li>
                <a href="#contact">Contact</a>
            </li>-->
            <li class="user user-name">

            <li>
            <li class="sign">
                <a>Увійти</a>
                <form id="sign-in">
                    <input type="email" name="email"    placeholder="Емейл" maxlength="100" required>
                    <input type="text" name="pass"    placeholder="Пароль" maxlength="20" required>
                    <input type="submit" value="Підтвердити">
                </form>
            </li>
            <li class="sign">
                <a>Зареєструватися</a>
                <form id="sign-up">
                    <input type="text" name="full_name" placeholder="ПІБ" maxlength="100" required>
                    <input type="email" name="email"    placeholder="Емейл" maxlength="100" required>
                    <input type="text" name="pass"    placeholder="Пароль" maxlength="20" required>
                    <input type="text" name="tel"    placeholder="Телефон" maxlength="20" required>
                    <input type="text" name="company"    placeholder="Місце роботи/навчання" maxlength="20" required>
                    <select class="form-control role">
                        <option value="4">Студент</option>
                        <option value="3">Роботодавець</option>
                    </select>
                    <input type="hidden" name="role">
                    <input type="submit" value="Підтвердити">
                </form>
            </li>
            <li class="user">
                <a href="/main/testing">Пройти тест</a>
            <li>
            <li class="employer">
                 <a href="/main/find_specialist">Знайти спеціалістів</a>
            <li>
            <li class="employer">
                 <a href="/main/transaction_requires">Ведення вакансій</a>
            <li>
            <li class="moder admin">
                 <a href="/main/check_require">Рейтинг вимог</a>
            <li>
            <li class="moder admin">
                 <a href="/main/transaction_tests">Ведення тестами</a>
            <li>
            <li class="admin">
                 <a href="/main/users_control">Ведення користувачами</a>
            <li>
            <li class="sign_out">
                <a>Вийти</a>
            <li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h2>Спеціалісти інформаційних систем</h2>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Дізнатися більше</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Сертифікована перевірка знань - суттєве доповнення в резюме</h2>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Наші сервіси</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-graduation-cap fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Тестування</strong>
                                </h4>
                                <p>Дізнайся свій рівень знань в області інформаційних систем.</p>
                                <a href="/main/testing" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-users fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Пошук кадрів</strong>
                                </h4>
                                <p>У нас ви можете знайти необхідного спеціаліста для конкретної ІС</p>
                                <a href="/main/find_specialist" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-tasks fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Моніторинг</strong>
                                </h4>
                                <p>Ми знаємо, які вимоги необхідні сьогоднішньому ринку ІС.</p>
                                <a href="/main/check_require" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-sort-amount-desc fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Рейтинг</strong>
                                </h4>
                                <p>Ви можете переглянути рейтинг усіх тестованих</p>
                                <a href="/main/rating" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center col-lg-offset-6 col-lg-5">
            <h4><i>Якщо ви кажите, що ви чогось не можете - ви маєте рацію. Якщо ви кажите, що ви щось можете - ви теж маєте рацію. [Генрі Форд]</i></h4>
        </div>
    </aside>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>АСОІУ НТУУ "КПІ"</strong>
                    </h4>
                    <p>Київ</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (044)236-19-70</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">fiot@kpi.ua</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Created by Machulyanskiy Dmytro in 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="static/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="static/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="static/js/main_page.js"></script>

</body>

</html>
