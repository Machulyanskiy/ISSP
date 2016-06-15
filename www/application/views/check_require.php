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

    <title>Моніторинг вимог</title>

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
            <h2 class="find-header">Перегляд пріорітетних вимог</h1>
            <div class="col-xs-8">
                <div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 720px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="720" height="400"><desc>Created with Highcharts 4.1.5</desc><defs><clipPath id="highcharts-1"><rect x="0" y="0" width="636" height="223"></rect></clipPath><linearGradient x1="0" y1="0" x2="0" y2="1" id="highcharts-5"><stop offset="0" stop-color="#FFF" stop-opacity="1"></stop><stop offset="1" stop-color="#ACF" stop-opacity="1"></stop></linearGradient><linearGradient x1="0" y1="0" x2="0" y2="1" id="highcharts-6"><stop offset="0" stop-color="#9BD" stop-opacity="1"></stop><stop offset="1" stop-color="#CDF" stop-opacity="1"></stop></linearGradient></defs><rect x="0" y="0" width="720" height="400" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background"></rect>
                <g class="highcharts-grid" zIndex="1"></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 74 276.5 L 710 276.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 74 231.5 L 710 231.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 74 187.5 L 710 187.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 74 142.5 L 710 142.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 74 98.5 L 710 98.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 74 52.5 L 710 52.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 126.5 276 L 126.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 179.5 276 L 179.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 232.5 276 L 232.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 285.5 276 L 285.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 338.5 276 L 338.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 391.5 276 L 391.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 444.5 276 L 444.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 497.5 276 L 497.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 550.5 276 L 550.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 603.5 276 L 603.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 656.5 276 L 656.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 710.5 276 L 710.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 73.5 276 L 73.5 286" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 74 276.5 L 710 276.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"><text x="28.125" zIndex="7" text-anchor="middle" transform="translate(0,0) rotate(270 28.125 164.5)" class=" highcharts-yaxis-title" style="color:#707070;fill:#707070;" visibility="visible" y="164.5">Stats)</text></g><g class="highcharts-series-group" zIndex="3">
                <g class="graphic graphic-f highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(74,53) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="13" y="224" width="7" height="0" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="66" y="208" width="7" height="16" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="119" y="212" width="7" height="12" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="172" y="190" width="7" height="34" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="225" y="222" width="7" height="2" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="278" y="221" width="7" height="3" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="331" y="223" width="7" height="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="384" y="86" width="7" height="138" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="437" y="27" width="7" height="197" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="490" y="195" width="7" height="29" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="543" y="224" width="7" height="0" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="596" y="224" width="7" height="0" fill="#7cb5ec" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(74,53) scale(1 1)" clip-path="none"></g>
                <g class="graphic graphic-s highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(74,53) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="23" y="224" width="7" height="0" fill="#434348" rx="0" ry="0"></rect><rect x="76" y="215" width="7" height="9" fill="#434348" rx="0" ry="0"></rect><rect x="129" y="218" width="7" height="6" fill="#434348" rx="0" ry="0"></rect><rect x="182" y="217" width="7" height="7" fill="#434348" rx="0" ry="0"></rect><rect x="235" y="224" width="7" height="0" fill="#434348" rx="0" ry="0"></rect><rect x="288" y="224" width="7" height="0" fill="#434348" rx="0" ry="0"></rect><rect x="341" y="224" width="7" height="0" fill="#434348" rx="0" ry="0"></rect><rect x="394" y="213" width="7" height="11" fill="#434348" rx="0" ry="0"></rect><rect x="447" y="202" width="7" height="22" fill="#434348" rx="0" ry="0"></rect><rect x="500" y="224" width="7" height="0" fill="#434348" rx="0" ry="0"></rect><rect x="553" y="223" width="7" height="1" fill="#434348" rx="0" ry="0"></rect><rect x="606" y="137" width="7" height="87" fill="#434348" rx="0" ry="0"></rect></g>
                <g class="graphic graphic-t highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(74,53) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="34" y="224" width="7" height="0" fill="#90ed7d" rx="0" ry="0"></rect><rect x="87" y="219" width="7" height="5" fill="#90ed7d" rx="0" ry="0"></rect><rect x="140" y="221" width="7" height="3" fill="#90ed7d" rx="0" ry="0"></rect><rect x="193" y="223" width="7" height="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="246" y="224" width="7" height="0" fill="#90ed7d" rx="0" ry="0"></rect><rect x="299" y="224" width="7" height="0" fill="#90ed7d" rx="0" ry="0"></rect><rect x="352" y="224" width="7" height="0" fill="#90ed7d" rx="0" ry="0"></rect><rect x="405" y="220" width="7" height="4" fill="#90ed7d" rx="0" ry="0"></rect><rect x="458" y="198" width="7" height="26" fill="#90ed7d" rx="0" ry="0"></rect><rect x="511" y="223" width="7" height="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="564" y="221" width="7" height="3" fill="#90ed7d" rx="0" ry="0"></rect><rect x="617" y="224" width="7" height="0" fill="#90ed7d" rx="0" ry="0"></rect></g>
                <text x="360" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:18px;fill:#333333;width:656px;" y="24"><tspan>Гістограма частоти вимоги</tspan></text>
                <g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="103.09272486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 103.09272486435069 292)" y="292" opacity="1"><tspan>15-04-2016</tspan></text><text x="156.09272486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 156.09272486435069 292)" y="292" opacity="1"><tspan>25-05-2016</tspan></text><text x="209.09272486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 209.09272486435069 292)" y="292" opacity="1"><tspan>26-05-2016</tspan></text><text x="262.09272486435066" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 262.09272486435066 292)" y="292" opacity="1"><tspan>27-05-2016</tspan></text><text x="315.09272486435066" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 315.09272486435066 292)" y="292" opacity="1"><tspan>28-05-2016</tspan></text><text x="368.09272486435066" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 368.09272486435066 292)" y="292" opacity="1"><tspan>29-05-2016</tspan></text><text x="421.09272486435066" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 421.09272486435066 292)" y="292" opacity="1"><tspan>01-06-2016</tspan></text><text x="474.09272486435066" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 474.09272486435066 292)" y="292" opacity="1"><tspan>02-06-2016</tspan></text><text x="527.0927248643507" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 527.0927248643507 292)" y="292" opacity="1"><tspan>03-06-2016</tspan></text><text x="580.0927248643507" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 580.0927248643507 292)" y="292" opacity="1"><tspan>04-06-2016</tspan></text><text x="633.0927248643507" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 633.0927248643507 292)" y="292" opacity="1"><tspan>12-06-2016</tspan></text><text x="686.0927248643507" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 686.0927248643507 292)" y="292" opacity="1"><tspan>14-06-2016</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="59" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:228px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="279" opacity="1">0</text><text x="59" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:228px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="234" opacity="1">5</text><text x="59" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:228px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="189" opacity="1">10</text><text x="59" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:228px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="145" opacity="1">15</text><text x="59" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:228px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="100" opacity="1">20</text><text x="59" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:228px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="56" opacity="1">25</text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(244,-9999)" opacity="0"><path fill="none" d="M 3.5 0.5 L 102.5 0.5 C 105.5 0.5 105.5 0.5 105.5 3.5 L 105.5 85.5 C 105.5 88.5 105.5 88.5 102.5 88.5 L 3.5 88.5 C 0.5 88.5 0.5 88.5 0.5 85.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)" width="105" height="88"></path><path fill="none" d="M 3.5 0.5 L 102.5 0.5 C 105.5 0.5 105.5 0.5 105.5 3.5 L 105.5 85.5 C 105.5 88.5 105.5 88.5 102.5 88.5 L 3.5 88.5 C 0.5 88.5 0.5 88.5 0.5 85.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)" width="105" height="88"></path><path fill="none" d="M 3.5 0.5 L 102.5 0.5 C 105.5 0.5 105.5 0.5 105.5 3.5 L 105.5 85.5 C 105.5 88.5 105.5 88.5 102.5 88.5 L 3.5 88.5 C 0.5 88.5 0.5 88.5 0.5 85.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)" width="105" height="88"></path><path fill="rgba(249, 249, 249, .85)" d="M 3.5 0.5 L 102.5 0.5 C 105.5 0.5 105.5 0.5 105.5 3.5 L 105.5 85.5 C 105.5 88.5 105.5 88.5 102.5 88.5 L 3.5 88.5 C 0.5 88.5 0.5 88.5 0.5 85.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#7cb5ec" stroke-width="1"></path></g><text x="710" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="395">Highcharts.com</text></svg><div class="highcharts-tooltip" style="position: absolute; left: 244px; top: -9999px; visibility: visible;"><span style="position: absolute; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, Helvetica, sans-serif; font-size: 12px; white-space: nowrap; color: rgb(51, 51, 51); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;" zindex="1"><span style="font-size:10px">29-05-2016</span><table><tbody><tr><td style="color:#7cb5ec;padding:0">Відвідування: </td><td style="padding:0"><b>7</b></td></tr><tr><td style="color:#434348;padding:0">Обчислення: </td><td style="padding:0"><b>0</b></td></tr><tr><td style="color:#90ed7d;padding:0">Авторизації: </td><td style="padding:0"><b>1</b></td></tr></tbody></table></span></div><div class="highcharts-contextmenu" style="position: absolute; z-index: 1000; padding: 24px; display: none; right: -14px; top: 8px;"><div style="-webkit-box-shadow: rgb(136, 136, 136) 3px 3px 10px; box-shadow: rgb(136, 136, 136) 3px 3px 10px; border: 1px solid rgb(160, 160, 160); padding: 5px 0px; background: rgb(255, 255, 255);"><div style="cursor: pointer; padding: 0px 10px; color: rgb(48, 48, 48); font-size: 11px; background: none;">Print chart</div><hr><div style="cursor: pointer; padding: 0px 10px; color: rgb(48, 48, 48); font-size: 11px; background: none;">Download PNG image</div><div style="cursor: pointer; padding: 0px 10px; color: rgb(48, 48, 48); font-size: 11px; background: none;">Download JPEG image</div><div style="cursor: pointer; padding: 0px 10px; color: rgb(48, 48, 48); font-size: 11px; background: none;">Download PDF document</div><div style="cursor: pointer; padding: 0px 10px; color: rgb(48, 48, 48); font-size: 11px; background: none;">Download SVG vector image</div></div></div></div>

            </div>

            <div class="col-xs-4 req-list">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Список вимог
                </div>
                <!-- /.panel-heading -->
                <div class="">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Вакансія</th>
                                    <th>Рівень компетенцій</th>
                                </tr>
                            </thead>
                            <tbody class='vacancy'>
                                <tr id='fir-vac'>
                                    <td>1</td>
                                    <td>ACCOUNT MANAGER</td>
                                    <td>А:30 Б:5 В:50 Г:10 Ґ:75</td>
                                </tr>
                                <tr id='sec-vac'>
                                    <td>2</td>
                                    <td>BUSINESS ANALYST</td>
                                    <td>А:80 Б:10 В:40 Г:20 Ґ:5</td>

                                </tr>
                                <tr id='thir-vac'>
                                    <td>3</td>
                                    <td>SYSTEMS ARCHITECT</td>
                                    <td>А:70 Б:40 В:5 Г:20 Ґ:15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
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
