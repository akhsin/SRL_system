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
    <title>1. MAI - Students</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/timeline.css">
    <meta class="foundation-mq">
</head>

<body>
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
            <div class="sidebar off-canvas position-left reveal-for-large" id="my-info" data-off-canvas="l6sk4l-off-canvas" data-position="left" aria-hidden="true">
                <div class="profile">
                    <img class="thumbnail circle" src="../../assets/img/profile-example.png">
                    <h5 class="user name"><?php echo $_SESSION['namalog'];?></h5>
                    <h6 class="matriculation id"><?php echo $_SESSION['idlog'];?></h6>
                </div>
                <ul class="nav">
                    <li><a href="dashboard.php"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a></li>
                    <li><a href="../student/deskripsi.php"><i class="fa fa-info" aria-hidden="true"></i>Deskripsi</a></li>
                    <li><a href="panduan.php"><i class="fa fa-question-circle" aria-hidden="true"></i>Panduan</a></li>
                    <li><a href="user-profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    <li class="active"><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i>SRL</a></li>
                    <li><a href="#"><i class="fa fa-unlock"></i> Logout</a></li>
                </ul>
            </div>
            <div class="main off-canvas-content" data-off-canvas-content="">
                <div class="title-bar hide-for-large">
                    <div class="title-bar-left">
                        <button class="menu-icon" type="button" data-open="my-info" aria-expanded="false" aria-controls="my-info"></button>
                        <span class="title-bar-title">Sarah Ng</span>
                    </div>
                </div>
                <div class="row main-wrapper rounded">
                    <div class="row top space">
                        <div class="columns">
                            <div class="top-bar">
                                <ol class="timeline">
                                    <li class="timeline">
                                        MAI Tes
                                        <span class="details"> Description of point 1 </span>
                                    </li>
                                    <li class="timeline">
                                        Set Goals
                                        <span class="details">Description of point 2</span>
                                    </li>
                                    <li class="timeline">
                                        Prior Knowledge Activation
                                        <span class="details">Description of point 3</span>
                                    </li>
                                    <li class="timeline">
                                        Learning Strategy Option
                                        <span class="details">Description of point 4</span>
                                    </li>
                                    <li class="timeline">
                                        Adaptive-Learning Materials
                                        <span class="details">Description of point 5</span>
                                    </li>
                                    <li class="timeline">
                                        Learning Evaluation
                                        <span class="details">Description of point 6</span>
                                    </li>
                                    <li class="timeline">
                                        Self-Regulation Learning Evaluation
                                        <span class="details">Description of point 7</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="columns main-wrapper rounded shadow">
                        <div class="page heading">
                            <h2 style="display: block;" align="center">Monitoring of Metacognitive Awareness Test</h2>
                            <hr width="75%" />
                            <table class="projects table" id="content">
                                <thead>
                                    <tr>
                                        <th width="5%">Nomor</th>
                                        <th width="85%">Pertanyaan</th>
                                        <th width="10%">Jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>29</code></td>
                                        <td>
                                        Saya mengatur waktu saya untuk mencapai tujuan sebaik-baiknya.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="5" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="5">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>30</code></td>
                                        <td>
                                         Saya berupaya membagi kegiatan belajar saya menjadi langkah-langkah yang lebih kecil.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="6" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="6">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>31</code></td>
                                        <td>
                                           Saya lebih memperhatikan makna umum dari pada makna khusus.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="yes-no" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="yes-no">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>32</code></td>
                                        <td>
                                            Saya bertanya kepada diri sendiri tentang seberapa baik saya bekerja, pada waktu mempelajari sesuatu hal yang baru.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="yes-no" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="yes-no">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>33</code></td>
                                        <td>
                                           Saya bertanya kepada diri sendiri apakah saya belajar sebanyak yang saya mampu, setiap kali saya menyelesaikan tugas.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="1" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="1">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>34</code></td>
                                        <td>
                                       Saya melupakan informasi baru yang tidak jelas.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="2" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="2">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>35</code></td>
                                        <td>
                                       Saya berhenti dan selanjutnya membaca kembali jika saya bingung.
                                        </td>
                                        <td>
                                            <div class="switch large">
                                                <input class="switch-input" id="3" type="checkbox" name="exampleSwitch">
                                                <label class="switch-paddle" for="3">
                                                    <span class="show-for-sr">Do you like me?</span>
                                                    <span class="switch-active" aria-hidden="true">Y</span>
                                                    <span class="switch-inactive" aria-hidden="true">N</span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul class="pagination text-center" role="navigation" aria-label="Pagination" id="page-selection">
                                <li class="pagination-previous"><a href="1-MAI-4.php" aria-label="Previous page">Previous</a></li>
                                <li><a href="1-MAI-1.php" aria-label="Page 1">1</a></li>
                                <li><a href="1-MAI-2.php" aria-label="Page 2">2</a></li>
                                <li><a href="1-MAI-3.php" aria-label="Page 4">3</a></li>
                                <li><a href="1-MAI-4.php" aria-label="Page 4">4</a></li>
                                <li class="current"><span class="show-for-sr">You are on page</span>5</a></li>
                                <li class="pagination-next disabled">Next</li>
                                </ul>
                                <a class="pagination-next button expanded success">Submit</a>
                        </div>
                    </div>
                </div>
                <div class="js-off-canvas-exit"></div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/foundation.js"></script>
        <script src="../../assets/js/jquery.bootpag.js"></script>
    <script>
    $(document).foundation();
            // init bootpag
        $('#page-selection').bootpag({
            total: 7
        }).on("page", function(event, /* page number here */ num){
             $("#content").html("Insert content"); // some ajax content loading...
        });
    </script>
</body>

</html>
<?php } 
else
{
header('location:../login/login_mhs.php');
}
?>
