<!DOCTYPE html>
<html class="" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>4. Learning Option Strategy - Students</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/timeline.css">
    <meta class="foundation-mq">
    <style type="text/css">
    .page.heading a.button {
        float: left;
    }
    </style>
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
                                    <li class="timeline done">
                                        Set Goals
                                        <span class="details">Description of point 2</span>
                                    </li>
                                    <li class="timeline done">
                                        Prior Knowledge Activation
                                        <span class="details">Description of point 3</span>
                                    </li>
                                    <li class="timeline done">
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
                            <h2 style="display: block;" align="center">Pilih Strategy Belajar: Stack</h2>
                            <table class="projects table">
                                <thead>
                                    <tr>
                                        <th width="10%">Ambil ?</th>
                                        <th>Strategy</th>
                                        <th width="10%"> Rekomendasi </th>
                                        <th width="25%"> Rekomendasi Kesulitan </th>
                                        <th>Tingkat Kesulitan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input id="control-video" type="checkbox">
                                        </td>
                                        <td>
                                            <a class="button primary hollow">Control Video</a>
                                        </td>
                                        <td>
                                            <span class="label success"> Ambil </span>
                                        </td>
                                        <td>
                                            <span class="label warning"> Sedang </span>
                                        </td>
                                        <td>
                                            <select name="control-video">
                                                <option value="mudah">Mudah</option>
                                                <option value="sedang">Sedang</option>
                                                <option value="sulit">Sulit</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input id="Summary" type="checkbox">
                                        </td>
                                        <td>
                                            <a class="button primary hollow">Summary</a>
                                        </td>
                                        <td>
                                            <span class="label success"> Ambil </span>
                                        </td>
                                        <td>
                                            <span class="label warning"> Sedang </span>
                                        </td>
                                        <td>
                                            <select name="Summary">
                                                <option value="mudah">Mudah</option>
                                                <option value="sedang">Sedang</option>
                                                <option value="sulit">Sulit</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input id="Draw" type="checkbox">
                                        </td>
                                        <td>
                                            <a class="button primary hollow">Draw</a>
                                        </td>
                                        <td>
                                            <span class="success label"> Ambil </span>
                                        </td>
                                        <td>
                                            <span class="label warning"> Sedang </span>
                                        </td>
                                        <td>
                                            <select name="control-video">
                                                <option value="mudah">Mudah</option>
                                                <option value="sedang">Sedang</option>
                                                <option value="sulit">Sulit</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="button success">Submit</a>
                        </div>
                    </div>
                </div>
                <div class="js-off-canvas-exit"></div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/foundation.js"></script>
    <script>
    $(document).foundation();
    </script>
</body>

</html>