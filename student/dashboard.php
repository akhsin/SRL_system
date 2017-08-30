<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include("../connect.php");
if (isset($_SESSION['idlog']) && isset($_SESSION['namalog'])){
$idlog=$_SESSION['idlog'];
$namalog=$_SESSION['namalog'];
?>

<!DOCTYPE html>
<html class="" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Student</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/asPieProgress.css">
    <meta class="foundation-mq">
</head>

<body onload="progress()">
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
            <div class="sidebar off-canvas position-left reveal-for-large" id="my-info" data-off-canvas="l6sk4l-off-canvas" data-position="left" aria-hidden="true">
                <div class="profile">
                    <img class="thumbnail circle" src="../assets/img/profile-example.png">
                    <h5 class="user name"><?php echo $_SESSION['namalog'];?></h5>
                    <h6 class="matriculation id"><?php echo $_SESSION['idlog'];?></h6>
                </div>
                <ul class="nav">
                    <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
                    <li><a href="../student/deskripsi.php"><i class="fa fa-info" aria-hidden="true"></i>Deskripsi</a></li>
                    <li><a href="panduan.php"><i class="fa fa-question-circle" aria-hidden="true"></i>Panduan</a></li>
                    <li><a href="user-profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i>SRL</a></li>
                    <li><a href="#"><i class="fa fa-unlock"></i> Logout</a></li>
                </ul>
            </div>
            <div class="main off-canvas-content" data-off-canvas-content="">
                <div class="title-bar hide-for-large">
                    <div class="title-bar-left">
                        <button class="menu-icon" type="button" data-open="my-info" aria-expanded="false" aria-controls="my-info"></button>
                        <span class="title-bar-title"><?php echo $_SESSION['namalog'];?></span>
                    </div>
                </div>
                <div class="row main-wrapper rounded">
                    <div class="columns main-wrapper rounded shadow">
                        <div class="page heading">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="row top space">
                            <div class="columns">
                                <div class="top-bar">
                                    <div class="small-12 large-9 columns">
                                        <h4>Notifikasi</h4>
                                        <h6 class="balance">
                                        <span class="warning badge"> 1. </span> Anda belum mengikuti MAI tes</h6>
                                    </div>
                                    <div class="small-12 large-3 columns top space">
                                        <a href="../student/SRL/1-MAI-1.php" class="button expanded success"> MAI tes sekarang </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row top space">
                            <div class="columns">
                                <div class="top-bar">
                                    <div class="small-12 large-12 columns">
                                        <!-- <div class="row top bottom space">
                                            <div class="large-6 columns">
                                                <div class="pie_progress" role="progressbar" data-goal="100" data-barcolor="#d96464" data-barsize="20" aria-valuemin="-100" aria-valuemax="100">
                                                    <div class="pie_progress__content">
                                                        <h4>0 %</h4></div>
                                                </div>
                                            </div>
                                            <div class="small-6 large-6 columns top space">
                                                <h3 class="circle-text">
                          <a href="#">Total Materi yang sudah dipelajari</a>
                          </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small-6 large-6 columns">
                                        <div class="row top bottom space">
                                            <div class="large-6 columns">
                                                <div class="pie_progress" role="progressbar" data-goal="100" data-barcolor="#d96464" data-barsize="20" aria-valuemin="-100" aria-valuemax="100">
                                                    <div class="pie_progress__content">
                                                        <h4>0%</h4></div>
                                                </div>
                                            </div>
                                            <div class="small-6 large-6 columns top space">
                                                <h3 class="circle-text">
                          <a href="#">Self-Regulated Learning Process</a>
                          </h3>
                                            </div>
                                        </div>
                                    </div> -->
                                    <h4>Total Materi Yang Sudah Dipelajari</h4>
<div class="primary progress" role="progressbar" tabindex="0" aria-valuenow="25" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
  <div class="progress-meter" style="width: 25%">
    <p class="progress-meter-text">25%</p>
  </div>
</div>
                                    <h4>    Self-Regulated Learning Process</h4>
<div class="warning progress">
  <div class="progress-meter" style="width: 50%">
    <p class="progress-meter-text">50%</p>
  </div>
</div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="top space">
                                    <table class="projects table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Activity</th>
                                                <th>Duration</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><code>#T-1082</code></td>
                                                <td>
                                                    <a href="#">Log in</a>
                                                </td>
                                                <td> 1 min</td>
                                                <td><span class="status-ongoing"><i class="fa fa-circle"></i> ongoing</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-off-canvas-exit"></div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/foundation.js"></script>
    <script src="../assets/js/jquery-asPieProgress.js"></script>
    <script>
    $(document).foundation();

    function progress() {
        $('.pie_progress').asPieProgress('start');
    }
    jQuery(function($) {
        $('.pie_progress').asPieProgress({
            namespace: 'pie_progress'
        });
        // Example with grater loading time - loads longer
        $('.pie_progress--slow').asPieProgress({
            namespace: 'pie_progress',
            goal: 1000,
            min: 0,
            max: 1000,
            speed: 200,
            easing: 'linear'
        });
        // Example with grater loading time - loads longer
        $('.pie_progress--countdown').asPieProgress({
            namespace: 'pie_progress',
            easing: 'linear',
            first: 120,
            max: 120,
            goal: 0,
            speed: 1200, // 120 s * 1000 ms per s / 100
            numberCallback: function(n) {
                var minutes = Math.floor(this.now / 60);
                var seconds = this.now % 60;
                if (seconds < 10) {
                    seconds = '0' + seconds;
                }
                return minutes + ': ' + seconds;
            }
        });
    });
    </script>
    </script>
</body>
</html>
<?php } 
else
{
header('location:../login/login_mhs.php');
}
?>