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

    <title>Анкетування</title>

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

        <div class="container">


            <div class="row">
                <div class="col-lg-12">
                    <div class="test-info">
                        <p>Для того, щоб пройти тестування, будь ласка, виберіть ваш поточний рівень компетенції</p>
                        <p>Критерії оцінки:</p>
                        <ul>
                            <li>Нічого = мало або взагалі не знання предмета.</li>
                            <li>Знання = глибоке розуміння концепцій без будь-якого значного досвіду.</li>
                            <li>Досвід = застосування компетенції через кілька рівнів обширного і прямого досвіду.</li>
                            <li>Знання і досвід = глибоке розуміння концепцій і застосування компетенції, спираючись на кілька рівнів безпосереднього досвіду.</li>
                        </ul>
                    </div>
                    <h1 class="page-header">Таблиця запитань</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!--<div class="panel-heading">
                            DataTables Advanced Tables
                        </div>-->
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                                        <thead>
                                            <tr>
                                                <th >A-Планування</th>
                                                <th class="col-1 col-xs-1">Нічого</th>
                                                <th class="col-2 col-xs-1">Знання</th>
                                                <th class="col-3 col-xs-1">Досвід</th>
                                                <th class="col-4 col-xs-1">Знання і досвід</th>
                                            </tr>
                                        </thead>
                                        <tbody class="block-1">
                                            <tr class="odd gradeX">
                                                <td><h4>А.1. ІС і бізнес-стратегії</h4>
                                                    <p>Передбачає довгострокові потреби бізнесу, поліпшення впливу організаційної ефективності процесу. Визначає модель ІС і архітектури підприємства відповідно до політики організації і забезпечує безпечне середовище. Приймає стратегічні рішення, політика для підприємства, включаючи стратегії сорсингу.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question11[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question11[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question11[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question11[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>А.2. Управління рівнем сервісу</h4>
                                                    <p>Визначає, перевіряє і робить чинні угоди про рівень обслуговування (SLA) і лежать в основі контрактів на надання послуг, які надає. Керує рівнями продуктивності послуг з урахуванням потреб і можливостей зацікавлених сторін і бізнесу.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question12[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question12[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question12[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question12[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>А.3. Розробка бізнес-плану</h4>
                                                    <p>Дизайн і структура бізнес-плану або продукту, включаючи виявлення альтернативних підходів, а також повернення інвестицій пропозицій. Розглядаються можливі і прийнятні сорсінгові моделі. Представляє аналіз витрат і вигод, аргументовані доводи на підтримку обраної стратегії. Забезпечує дотримання технологічних і бізнес-стратегій.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question13[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question13[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question13[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question13[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>А.4. Продукт/ Сервіс планування</h4>
                                                    <p>Аналізування, визначає поточний і цільовий стан. Оцінки ефективності витрат, точки ризику, можливості, сильні і слабкі сторони, з критичним підходом. Створює структуровані плани; встановлює тимчасові масштаби і етапи, забезпечуючи оптимізацію діяльності і ресурсів. Визначає кількість поставки і забезпечує огляд додаткових вимог до документації. Визначає правильну обробку продуктів, в тому числі правових питань, відповідно до діючих правил.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question14[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question14[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question14[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question14[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>А.5. Дизайн архітектури</h4>
                                                    <p>Вказує, подрібнює, поновлює і робить доступним формальний підхід до реалізації рішень, необхідних для створення та експлуатації архітектури ІС. Позначає змінити вимоги і компоненти, які беруть участь: обладнання, програмне забезпечення, програми, процеси, інформаційні та технологічної платформи. Бере до уваги сумісність, масштабованість, зручність і безпеку. Підтримує вирівнювання між еволюцією бізнесу і технологічних розробок.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question15[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question15[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question15[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question15[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>А.6. Розробка додатків</h4>
                                                    <p>Аналізи, визначає, оновлює і робить доступною модель для реалізації програм відповідно до політики ІС і користувачів / потреб клієнтів. Вибирає відповідні технічні параметри для проектування додатків, оптимізації балансу між вартістю і якістю. Проекти структури даних і будує моделі структури системи відповідно до результатів аналізу через мов моделювання. Забезпечує, що всі аспекти враховують сумісність, зручність і безпеку. Визначає загальну довідкову базу для перевірки моделей з представником користувачів, заснований на моделі розвитку (наприклад, ітеративний підхід).</p></td>
                                                <td class="column-1 input"><input type='radio' name="question16[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question16[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question16[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question16[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>А.7. Технологічний тренд моніторинг</h4>
                                                    <p>Вивчає новітні технологічні розробки в сфері ІКТ для встановлення розуміння нових технологій. Придумує інноваційні рішення для інтеграції нових технологій в існуючі продукти, програми, послуг або для створення нових рішень.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question17[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question17[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question17[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question17[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>А.8. Стійкий розвиток</h4>
                                                    <p>Оцінки впливу ІКТ-рішень з точки зору екологічних обов'язків, включаючи споживання енергії. Консультує бізнес і ІКТ зацікавлених сторін на стійких альтернатив, які узгоджуються з бізнес-стратегією. Застосовує політику закупівель ІКТ і продажів, яка виконує екологічні функції.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question18[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question18[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question18[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question18[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>А.9. Інновації</h4>
                                                    <p>Придумує творчі рішення для забезпечення нових концепцій, ідей, товарів або послуг. Розгортає нові і відкрите мислення, щоб уявити собі експлуатацію технологічних досягнень для вирішення бізнес / потреб суспільства або наукового напрямку.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question19[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question19[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question19[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question19[]" value='3' required></td>
                                            </tr>
                                        </tbody>

                                        <thead>
                                            <tr>
                                                <th >Б-Розробка</th>
                                                <th class="col-1 col-xs-1">Нічого</th>
                                                <th class="col-2 col-xs-1">Знання</th>
                                                <th class="col-3 col-xs-1">Досвід</th>
                                                <th class="col-4 col-xs-1">Знання і досвід</th>
                                            </tr>
                                        </thead>
                                        <tbody class="block-2">
                                            <tr class="odd gradeX">
                                                <td><h4>Б.1. Розробка програми</h4>
                                                <p>Керуючий проектування додатків для розробки відповідного додатку відповідно до потреб замовника. Адаптує існуючі рішення шляхом, наприклад, перенесення програми на іншу операційну систему. Коди, налагодження, випробування і документи і здійснює зв'язок стадії розробки продукту. Вибирає відповідні технічні можливості для розвитку, таких як повторне використання, поліпшення або зміна конфігурації існуючих компонентів. Оптимізує ефективність, вартість і якість. Підтверджує результати з представниками користувачів, інтегрує спільне рішення.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question21[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question21[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question21[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question21[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Б.2. Інтеграція компонентів</h4>
                                                    <p>Об'єднує апаратні засоби, програмне забезпечення або субпікселів компонентів системи в існуючу або нову систему. Виконує з встановленими процесами і процедурами, такими як, управління конфігураціями та управління пакетами. Беручи до уваги сумісність існуючих і нових модулів для забезпечення цілісності системи, системи взаємодії та інформаційної безпеки. Для перевірки випробувань ємності, продуктивності системи і документування успішної інтеграції.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question22[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question22[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question22[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question22[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>Б.3. Тестування</h4>
                                                    <p>Формує та здійснює систематичні процедури випробувань для систем ІКТ або юзабіліті вимог клієнта, щоб встановити відповідність проектним специфікаціям. Забезпечує нові або змінені компоненти або системи виконують для очікування. Забезпечує нараду внутрішніх, зовнішніх, національних і міжнародних стандартів; включаючи здоров'я і безпеку, зручність використання, продуктивність, надійність і сумісність. Створює документи і звіти на підтвердження вимог до сертифікації.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question23[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question23[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question23[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question23[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Б.4. Розгортання рішення</h4>
                                                    <p>Дотримуючись заздалегідь певні загальні стандарти практики здійснює необхідні заходи, заплановані для реалізації рішення, в тому числі установки, оновлення або виведення з експлуатації. Налаштовує апаратні засоби, програмне забезпечення або мережу для забезпечення сумісності компонентів системи і налагоджує будь-які результуючі несправності або несумісності. Займається додаткові ресурси фахівця, якщо потрібно, наприклад, сторонніх постачальників мережі. Формально руки над повністю працездатною рішення користувача і завершує документацію записи всю відповідну інформацію, в тому числі обладнання адресатам, конфігурації і даних про продуктивність.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question24[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question24[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question24[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question24[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>Б.5. Документування</h4>
                                                    <p>Створює документи, що описують продукти, послуги і компоненти або додатки для встановлення дотримання відповідних вимог до документації. Вибір відповідного стилю і засобів масової інформації для подання матеріалів. Створює шаблони для систем управління документами. Забезпечує функції і можливості задокументовані належним чином. Гарантує, що існуючі документи дійсні і до теперішнього часу.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question25[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question25[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question25[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question25[]" value='3' required></td>
                                            </tr>
                                        </tbody>

                                        <thead>
                                            <tr>
                                                <th >В-Запуск</th>
                                                <th class="col-1 col-xs-1">Нічого</th>
                                                <th class="col-2 col-xs-1">Знання</th>
                                                <th class="col-3 col-xs-1">Досвід</th>
                                                <th class="col-4 col-xs-1">Знання і досвід</th>
                                            </tr>
                                        </thead>
                                        <tbody class="block-3">
                                            <tr class="odd gradeX">
                                                <td><h4>В.1. Підтримка користувачів</h4>
                                                <p>Реагує на запити користувачів і питання, записи відповідної інформації. Запевняє дозвіл або загострюється інцидентів і оптимізує продуктивність системи відповідно до заздалегідь визначених угод про рівень обслуговування (SLA). Розуміє, як контролювати результат рішення і результуючу ступінь задоволеності клієнтів.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question31[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question31[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question31[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question31[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>В.2. Підтримка змін</h4>
                                                    <p>Реалізує і направляє еволюцію рішення в сфері ІКТ. Забезпечує ефективне управління і планування програмних або апаратних модифікацій, щоб запобігти кілька оновлень, створюючи непередбачувані результати. Мінімізація порушення обслуговування як наслідок змін і дотримується певного угоди про рівень обслуговування (SLA). Забезпечує розгляд та дотримання процедур забезпечення інформаційної безпеки.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question32[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question32[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question32[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question32[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>В.3. Організаційна служба </h4>
                                                    <p>Забезпечує надання послуг відповідно до угод про рівень обслуговування встановлені (угоди SLA). Бере участь в активних заходах для забезпечення стабільних і безпечних додатків та інфраструктури ІКТ, щоб уникнути можливих перебоїв обслуговування, увагу до планування потенціалу та інформаційної безпеки. бібліотека оперативний документ поновлення і реєструє всі випадки обслуговування. Підтримує інструменти моніторингу та управління (тобто сценарії, процедури). Підтримує послуги ІС.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question33[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question33[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question33[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question33[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>В.4. Управління проблемами</h4>
                                                    <p>Визначає і усуває основну причину виникнення інцидентів. Приймає активний підхід з метою запобігання або ідентифікації основної причини проблем у сфері ІКТ. Розгортає систему знань, засновану на повторення поширених помилок. Оптимізує системи або компоненти продуктивності.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question34[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question34[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question34[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question34[]" value='3' required></td>
                                            </tr>
                                        </tbody>

                                        <thead>
                                            <tr>
                                                <th >Г-Реалізація</th>
                                                <th class="col-1 col-xs-1">Нічого</th>
                                                <th class="col-2 col-xs-1">Знання</th>
                                                <th class="col-3 col-xs-1">Досвід</th>
                                                <th class="col-4 col-xs-1">Знання і досвід</th>
                                            </tr>
                                        </thead>
                                        <tbody class="block-4">
                                            <tr class="odd gradeX">
                                                <td><h4>Г.1. Розробка інформаційної стратегії безпеки</h4>
                                                <p>Визначає і робить застосовної формальної організаційної стратегії, сфери застосування та культури для підтримки безпеки і захисту інформації від зовнішніх і внутрішніх загроз, тобто цифровий судово для корпоративних розслідувань або розслідування вторгнень. Забезпечує основу для управління інформаційної безпеки, включаючи визначення ролі і відповідальності. Використовує певні стандарти для створення цілі для цілісності інформації, доступності та конфіденційності даних.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question41[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question41[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question41[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question41[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Г.2. Стратегія розвитку якості ІКТ</h4>
                                                    <p>Визначає, покращує і вдосконалює формальну стратегію, щоб задовольнити очікування клієнтів і підвищити ефективність бізнесу (баланс між витратами і ризиками). Визначає критичні процеси, що впливають на надання послуг і продуктивності продукту для визначення в системі менеджменту якості ІКТ. Використовує певні стандарти, щоб сформулювати цілі для управління послугами, якості продукції і процесів. Визначає підзвітність менеджменту якості ІКТ.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question42[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question42[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question42[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question42[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>Г.3. Навчання і підготовка кадрів забезпечення </h4>
                                                    <p>Визначає і реалізує політику навчання ІКТ для вирішення організаційних потреб навичок і прогалин. Структури, організовує і розкладу навчальних програм і оцінює якість навчання за допомогою процесу зворотного зв'язку і здійснює безперервне вдосконалення. Адаптує навчальні плани по боротьбі з мінливого попиту.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question43[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question43[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question43[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question43[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Г.4. Покупка</h4>
                                                    <p>Застосовує послідовну процедуру закупівлі, в тому числі розгортання наступних процесів: підрозділами вимогам специфікацій, ідентифікація постачальника, аналіз пропозицій, оцінка енергетичної ефективності і екологічної відповідності продукції, постачальників і їх процесів, переговори за контрактами, вибір постачальників і розміщення контрактів. Гарантує, що весь процес покупки, придатний для цілей, додає цінність для бізнесу організації сумісної з законодавчим та нормативним вимогам.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question44[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question44[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question44[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question44[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>Г.5. Розвиток пропозиційних продаж</h4>
                                                    <p>Розробляє технічні пропозиції по виконанню вимог рішення клієнта і надати торговий персонал з конкурентоспроможною ставки. Підкреслює енергоефективності та впливу на навколишнє середовище, пов'язаних з пропозицією. Співпрацює з колегами, щоб вирівняти продукт або послугу рішення з потужністю організації для доставки.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question45[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question45[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question45[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question45[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Г.6. Управління каналами</h4>
                                                    <p>Розробляє стратегію управління торгових точок сторонніх виробників. Забезпечує оптимальну продуктивність комерційного каналу реселлери з доданою вартістю (УАК) шляхом надання узгодженої бізнесу та маркетингової стратегії. Визначає цілі для обсягу, географічного охоплення і галузі для ВДП зобов'язань і програм стимулювання структур, що забезпечують безкоштовні результати продажів.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question46[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question46[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question46[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question46[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>Г.7. Управління продажами</h4>
                                                    <p>Досягнення результатів продажів за рахунок створення стратегії продажів. Демонструє додану вартість продукції і послуг організації до нових або існуючих та потенційних клієнтів. Встановлює процедуру підтримки продажів, що забезпечує ефективне реагування на запити продажів, відповідно до стратегії і політики компанії. Створює системний підхід до всього процесу продажів, в тому числі потреби клієнтів розуміння, прогнозування, оцінка перспективи, тактики ведення переговорів і закриття продажів.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question47[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question47[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question47[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question47[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Г.8. Управління контрактами</h4>
                                                    <p>Забезпечує і веде переговори контракту відповідно до організаційними процесами. Гарантує, що контракт і очікувані результати представлені у встановлений термін, відповідають стандартам якості, а також відповідати вимогам відповідності. Адреси недотримання, загострюється істотні проблеми, диски плани відновлення і при необхідності вносить зміни в контракти. Підтримує цілісність бюджету. Оцінює і адреси постачальників відповідність юридичної, здоров'я і безпеки та стандартів безпеки. Активно проводить регулярне спілкування з постачальником.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question48[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question48[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question48[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question48[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>Г.9. Розвиток персоналу</h4>
                                                    <p>Діагностика індивідуальної і групової компетентності, виявлення потреб навичок і прогалин навичок. Відгуки по навчанню і розвитку можливостей і вибирає відповідну методологію з урахуванням вимог окремих, проектів і бізнес. Тренери і / або наставники людей і команди для задоволення потреб у навчанні.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question49[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question49[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question49[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question49[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Г.10. Управління інформацією та знаннями</h4>
                                                    <p>Визначає і управляє структурованої і неструктурованої інформації і розглядає політику поширення інформації. Створює інформаційну структуру для того, щоб експлуатацію і оптимізацію інформації. Розуміє відповідні інструменти, які будуть розгорнуті для створення, вилучення, збереження, оновлювати і поширювати знання бізнесу для того, щоб отримати вигоду з інформаційного активу.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question491[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question491[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question491[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question491[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>Г.11. Розвиток пропозиційних продаж</h4>
                                                    <p>Розробляє технічні пропозиції по виконанню вимог рішення клієнта і надати торговий персонал з конкурентоспроможною ставки. Підкреслює енергоефективності та впливу на навколишнє середовище, пов'язаних з пропозицією. Співпрацює з колегами, щоб вирівняти продукт або послугу рішення з потужністю організації для доставки.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question492[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question492[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question492[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question492[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Г.12. Ідентифікація потребностей</h4>
                                                    <p>Активно слухає внутрішніх / зовнішніх клієнтів, артикулює і уточнює їх потреби. Управляє відносини з усіма зацікавленими сторонами з метою забезпечення того, щоб рішення відповідно до бізнес-вимог. Пропонує різні рішення (наприклад, зробити або купувати) шляхом виконання контекстного аналізу в підтримку центру користувача конструкції системи. Консультує клієнта на вибір відповідних рішень. Діє як адвокат участі в процесі реалізації або настройки вибраного рішення.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question493[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question493[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question493[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question493[]" value='3' required></td>
                                            </tr>

                                        <thead>
                                            <tr>
                                                <th >Ґ-Управління</th>
                                                <th class="col-1 col-xs-1">Нічого</th>
                                                <th class="col-2 col-xs-1">Знання</th>
                                                <th class="col-3 col-xs-1">Досвід</th>
                                                <th class="col-4 col-xs-1">Знання і досвід</th>
                                            </tr>
                                        </thead>
                                        <tbody class="block-5">
                                            <tr class="odd gradeX">
                                                <td><h4>Ґ.1. Розробка прогнозу</h4>
                                                <p>Поянює потреби ринку і оцінює визнання на ринку товарів або послуг. Оцінює потенціал організації для задоволення майбутніх потреб виробництва і якості. Застосовується відповідні показники для того, щоб точно приймати рішення на підтримку виробництва, маркетингу, продажів і функцій розподілу.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question51[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question51[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question51[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question51[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Ґ.2. Управління проектами та потрфоліо</h4>
                                                    <p>Реалізує плани для програми змін. Планує і направляє один або портфель проектів у сфері ІКТ з метою забезпечення координації та управління взаємозалежностей. Оркеструє проекти по розробці або впровадження нових, внутрішніх або зовні певні процеси для задоволення виявлених потреб бізнесу. Визначає дії, обов'язки, найважливіші віхи, ресурси, необхідні навички, інтерфейси і бюджет, оптимізує витрати і використання часу, мінімізує відходи і прагне до високої якості. Розробляє плани дій для вирішення потенційних проблем реалізації. Постачає проект вчасно, в рамках бюджету і відповідно до первинних вимог. Створює і підтримує документи для полегшення моніторингу ходу виконання проекту.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question52[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question52[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question52[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question52[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>Ґ.3. Управління ризиками </h4>
                                                    <p>Реалізовує управління ризиками через інформаційні системи за рахунок застосування на підприємстві визначаються політики управління ризиками та процедури. Оцінює ризик для бізнесу організації, в тому числі мережі, хмари і мобільних ресурсів. Документи потенційного ризику і плани стримування.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question53[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question53[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question53[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question53[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Ґ.4. Управління взаємовідносинами</h4>
                                                    <p>Встановлює і підтримує позитивні ділові відносини між зацікавленими сторонами (внутрішніми або зовнішніми), які впроваджують і дотримуються організаційних процесів. Підтримує постійний зв'язок з клієнтом / партнером / постачальником, а також адреси потреб за допомогою співпереживання з навколишнім їх середовищем і управління ланцюгами поставок комунікацій. Забезпечує зацікавлених сторін потреби, проблеми або скарги розуміються і розглядаються відповідно до політики організації.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question54[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question54[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question54[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question54[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>Ґ.5. Удосконалення процесів</h4>
                                                <p>Заходи ефективності існуючих процесів у сфері ІКТ. Дослідження і критерії оцінки ефективності процесу проектування ІКТ з різних джерел. Слід системної методології для оцінки, розробки і реалізації процесу або технологічних змін для вимірних бізнес-вигоди. Оцінює можливі несприятливі наслідки зміни процесу.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question55[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question55[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question55[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question55[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Ґ.6. Управління якістю в сфері ІКТ</h4>
                                                    <p>Реалізує політику в області якості ІКТ для підтримки та підвищення якості обслуговування і надання продукції. Плани і визначає індикатори для управління якістю стосовно стратегії в області ІКТ. Огляди заходів щодо забезпечення якості та рекомендує удосконалення впливати на неухильне поліпшення якості.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question56[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question56[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question56[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question56[]" value='3' required></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td><h4>Ґ.7. Управління змінами </h4>
                                                    <p>Оцінює наслідки нових цифрових рішень. Визначає вимоги і квантіфіцірует бізнес-переваги. Управляє розгортання змін з урахуванням структурних і культурних питань. Підтримує безперервність бізнес-процесів і процесів протягом зміни, моніторинг впливу, приймати будь-які заходи щодо виправлення становища, необхідне і переробні підхід.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question57[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question57[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question57[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question57[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Ґ.8. Управління безпекою інформації</h4>
                                                    <p>Реалізує політику інформаційної безпеки. Монітори та вживає заходів проти вторгнень, шахрайства та порушення безпеки або витоків. Забезпечує, що ризики безпеки аналізуються і управляються по відношенню до корпоративних даних і інформації. Відгуки інцидентів безпеки, виносить рекомендації щодо політики і стратегії забезпечення безперервного вдосконалення забезпечення безпеки безпеки.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question58[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question58[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question58[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question58[]" value='3' required></td>
                                            </tr>
                                            <tr class="even gradeX">
                                                <td><h4>Ґ.9. ІС управління</h4>
                                                    <p>Визначає, розгортає і контролює управління інформаційними системами відповідно до бізнес-імперативів. Беручи до уваги всі внутрішні і зовнішні параметри, такі як законодавство і відповідність стандартам галузі, щоб впливати на управління ризиками і розгортання ресурсів для досягнення збалансованого бізнес-вигоди.</p></td>
                                                <td class="column-1 input"><input type='radio' name="question59[]" value='0' required></td>
                                                <td class="column-2 input"><input type='radio' name="question59[]" value='1' required></td>
                                                <td class="column-3 input"><input type='radio' name="question59[]" value='2' required></td>
                                                <td class="column-4 input"><input type='radio' name="question59[]" value='3' required></td>
                                            </tr>
                                        </tbody>

                                        </tbody>
                                    </table>
                                    <input class="submit btn btn-primary" type="submit" value="Перевірити">
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                        <div class="results">
                            <div class='res-block'>
                                <h4>Планування</h4>
                                    <div class="user-progress progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100" style="width:44%">
                                            44%
                                        </div>
                                    </div>
                            </div>

                            <div class='res-block'>
                                <h4>Розробка</h4>
                                    <div class="user-progress progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width:12%">
                                            12%
                                        </div>
                                    </div>
                            </div>

                            <div class='res-block'>
                                <h4>Запуск</h4>
                                    <div class="user-progress progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width:36%">
                                            36%
                                        </div>
                                    </div>
                            </div>


                            <div class='res-block'>
                                <h4>Реалізація</h4>
                                    <div class="user-progress progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width:63%">
                                            63%
                                        </div>
                                    </div>
                            </div>


                            <div class='res-block'>
                                <h4>Управління</h4>
                                    <div class="user-progress progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width:15%">
                                            15%
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
