<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lobster&family=Secular+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
  body {
    margin: auto;
    height: 100vh;
    width: 100vw;
    /* background: linear-gradient(45deg, #4b8baf, #433d99); */
    background-image: url(https://picsum.photos/1920/768/?random=1);
    background-size: cover;
    font-family: 'Secular One', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  table {
    margin: auto;
    text-align: center;
    box-shadow: 0 0 10PX rgba(0, 0, 0, 0.3);
    border-spacing: 0;
    background-color: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(10px);
  }

  thead {
    background: linear-gradient(45deg, rgba(63 102 191/.3), rgba(89 119 181/ .7));
  }

  th {
    font-size: 1.5rem;
    color: #ffffff;
    text-shadow: 1px 1px #4d5981, 2px 2px #4d5981, 3px 3px #4d5981, 4px 4px #4d5981;
  }

  td {
    position: relative;
    font-size: 1.2rem;
    color: #ffffff;
    background-color: rgba(255, 255, 255, 0.15);
    height: 70px;
    width: 14%;
    line-height: 60px;
  }

  td .T {
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    background-color: #2463a7;
    background-color: rgba(120, 172, 240, 0.3);
    transform: translate3d(8px, -8px, 0);
    box-shadow: #214a7f -1px 1px, #214a7f -2px 2px, #214a7f -3px 3px, #214a7f -4px 4px, #214a7f -5px 5px, #214a7f -6px 6px, #214a7f -7px 7px, #214a7f -8px 8px;
    transition-duration: 0.4s;
    color: #464A52;
    z-index: 11;
  }

  tr:nth-child(odd) {
    background-color: rgba(0, 0, 0, 0.1);
  }

  td:nth-child(6n+1) {
    color: #ffd900;
  }

  tbody tr td:hover {
    background-color: rgba(120, 172, 240, .4);
    transform: translate3d(8px, -8px, 0);
    box-shadow: #214a7f -1px 1px, #214a7f -2px 2px, #214a7f -3px 3px, #214a7f -4px 4px, #214a7f -5px 5px, #214a7f -6px 6px, #214a7f -7px 7px, #214a7f -8px 8px;
    transition-duration: 0.4s;
    color: #464A52;
    font-weight: bold;
    z-index: 12;
  }

  h1 {
    text-shadow: 1px 1px #4d5981, 2px 2px #4d5981, 3px 3px #4d5981, 4px 4px #4d5981;
  }

  tbody tr:hover {
    background-color: rgba(120, 172, 240, .4);
    transform: translate3d(8px, -8px, 0);
    box-shadow: #214a7f -1px 1px, #214a7f -2px 2px, #214a7f -3px 3px, #214a7f -4px 4px, #214a7f -5px 5px, #214a7f -6px 6px, #214a7f -7px 7px, #214a7f -8px 8px;
    transition-duration: 0.4s;
  }

  .icon {
    margin: auto;
    align-items: center;
  }

  .c {
    color: #214a7f;
  }

  .hol {
    position: absolute;
    left: 0;
    right: 0;
    bottom: -10%;
  }

  .navbar-toggler {
    font-size: 1rem;
  }

  .bgV {
    background-color: rgba(137, 166, 194, 0.4);
    backdrop-filter: blur(10px);
  }

  .maL {
    margin-left: .2rem;
    margin-top: .2rem;
  }

  .maLS {
    margin-left: .2rem;
    margin-top: .2rem;
  }

  @media screen and (min-width: 0px)and (max-width: 576px) {
    body {
      display: block;
    }

    td {
      width: 14%;
      font-size: 0.5rem;
      height: 30px;
      line-height: 30px;
    }

    h1 {
      font-size: 1.6rem;
    }

    th {
      font-size: .6rem;
    }

    .none {
      display: none !important;
    }

    .none2 {
      display: block !important;
    }

    .maL {
      margin-left: .2rem;
    }

    .maLS {
      margin-left: .2rem;
    }
  }

  @media screen and (min-width: 576px)and (max-width: 987px) {
    body {
      display: block;
    }

    td {
      width: 14%;
      font-size: 1.2rem;
      height: 40px;
      line-height: 40px;
    }

    h1 {
      font-size: 2.5rem;
    }

    th {
      font-size: 1.5rem;
    }

    .none {
      display: none !important;
    }

    .none2 {
      display: block !important;
    }

    .maL {
      margin-left: .2rem;
      margin-top: .2rem;
    }

    .maLS {
      margin-left: .2rem;
      margin-top: .2rem;
    }
  }
</style>

<body>
  <?php
  $year = date('Y'); //未輸入年份時的年份
  $month = date('m'); //未輸入月份時的月份
  $todayYear = date('Y');
  $todayMonth = date('m');
  $year = isset($_GET['year']) ? $_GET['year'] : date('Y'); //目前年份
  $this_month = strtotime($year . '1');
  $thisMonth = date('m', $this_month);
  $thiM = isset($_GET['month']) ? $_GET['month'] : date('m'); // "目前月份"
  $firstDate = strtotime("{$year}-{$thiM}-1"); //y-m-t
  $starDayweek = date('w', $firstDate); //"第一天星期=>"
  $monthDays = date('t', $firstDate); // "這個月天數=>"
  $onMoth = date('t', strtotime("{$year}-{$thiM}-1-1month"));
  $monthLastDay = date('w', strtotime("{$year}-{$thiM}-{$monthDays}"));

  if (!empty($_REQUEST['year'])) {
    $year = $_REQUEST['year'];
    $month = $_REQUEST['month'];
  } else {
    $year = date('Y');
  }
  $nextyear = $year;
  $nextmonth = $thiM + 1;
  if ($thiM >= 12) {
    $nextyear = $year + 1;
    $nextmonth = 1;
  }

  $lastyear = $year;
  $lastmonth = $thiM - 1;
  if ($lastmonth < 1) {
    $lastyear = $year - 1;
    $lastmonth = 12;
  }
  $MonthChange = [
    '1' => 'January',
    '2' => 'February',
    '3' => 'March',
    '4' => 'April',
    '5' => 'May',
    '6' => 'June',
    '7' => 'July',
    '8' => 'August',
    '9' => 'September',
    '10' => 'October',
    '11' => 'November',
    '12' => 'December',
    '01' => 'January',
    '02' => 'February',
    '03' => 'March',
    '04' => 'April',
    '05' => 'May',
    '06' => 'June',
    '07' => 'July',
    '08' => 'August',
    '09' => 'September'
  ];
  $holiday = [
    '12-25' => '聖誕節',
    '10-10' => '國慶日',
    '10-31' => '萬聖節',
  ];

  ?>

  <div class="container text-center">
    <div class="row flex-column align-items-center ">
      <h1 class="none text-light text-center sticky-top rounded "><?= $year ?>/<?= $MonthChange[$thiM] ?></h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bgV">
      <h1 class="none2 d-none text-light text-center sticky-top rounded "><?= $year ?>/<?= $MonthChange[$thiM]?></h1>
      <button class="navbar-toggler h6" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <form class="m-1 text-center form-inline " action="calendar-my.php" method="get">
              <input class=" form-control " type="text" name="year" placeholder='Year' required>
              <select name="month" class="btn btn-light maL ">
                <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> -->
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
      </div>
      </select>
      <button type="submit" class="btn btn-light  maLS" value="查詢">Serch</button>
      </form>
      </li>
      </ul>
  </div>
  </nav>
  <table class="table table-borderless">
    <thead>
      <th>日</th>
      <th>一</th>
      <th>二</th>
      <th>三</th>
      <th>四</th>
      <th>五</th>
      <th>六</th>
    </thead>
    <?php

    if ($starDayweek + $monthDays <= 28) {
      $week = 4;
    } elseif ($starDayweek + $monthDays > 28 && $starDayweek + $monthDays <= 35) {
      $week = 5;
    } elseif ($starDayweek + $monthDays > 35) {
      $week = 6;
    }

    for ($i = 0; $i < $week; $i++) {
      echo "<tr>";
      for ($j = 0; $j < 7; $j++) {
        echo "<td class='holM'>";
        $date = '';
        if ($year == date('Y') && $thiM == date('m') && (($i * 7) + ($j + 1)) == date('j')) { //標註今日
          echo "<div class='T'>" . date('j') . "</div>";
        } elseif ($i == 0 && $j < $starDayweek) {
          $lM = '';
          $lM = ($j + 1 + $onMoth - $starDayweek);
          echo "<div class='c'>{$lM}</div>";
        } elseif ((($i * 7) + ($j + 1) - $starDayweek) > $monthDays) {
          $NM = $j - $monthLastDay;
          echo "<div class='c'>$NM</div>";
        } else {
          echo ($i * 7) + ($j + 1) - $starDayweek;
          $date = (($i * 7) + ($j + 1) - $starDayweek);
        }
        if ($thiM == 5 && $starDayweek == 0 && $j == 0 && $i > 0 && $i < 2) {
          echo "<div class='hol'>母親節</div>";
        } elseif ($thiM == 5 && $starDayweek > 0 && $j == 0 && $i > 1 && $i < 3) {
          echo "<div class='hol'>母親節</div>";
        }
        if (!empty($holiday[$thiM . '-' . $date])) {
          echo "<div class='hol'>{$holiday[$thiM . '-' .$date]}</div>";
        }
        echo "</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
  <div class="btn-group btn-group-toggle  mx-auto" data-toggle="button">
    <a class="btn btn-light material-icons" href="?year=<?php echo $year - 1 ?>&month=<?php echo $thiM ?>">fast_rewind</a>
    <a class="btn btn-light material-icons" href="?year=<?php echo $lastyear ?>&month=<?php echo $lastmonth ?>">keyboard_arrow_left</a>
    <a class="btn btn-light material-icons" href="?year=<?php echo $todayYear ?>&month=<?php echo $todayMonth ?>">date_range</a>
    <a class="btn btn-light material-icons" href="?year=<?php echo $nextyear ?>&month=<?php echo $nextmonth ?>">keyboard_arrow_right</a>
    <a class="btn btn-light material-icons" href="?year=<?php echo $year + 1 ?>&month=<?php echo $thiM ?>">fast_forward</a>
  </div>
  <div class="dropdown mt-2 btn-sm">
    <div>
    </div>
  </div>
  </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>