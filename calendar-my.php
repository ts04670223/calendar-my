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
    overflow: hidden;
    background: linear-gradient(45deg, #4b8baf, #433d99);
    font-family: 'Secular One', sans-serif;
  }
  table {
    margin: auto;
    text-align: center;
    box-shadow: 0 0 10PX rgba(0, 0, 0, 0.3);
    border-spacing: 0;
  }

  thead {
    background: linear-gradient(45deg, rgb(46 64 162), #4f6caa);
  }

  th,
  td {
    font-size: 1.2rem;
    padding: 25px;
    color: #ffffff;
    border: 0;
  }

  tr:nth-child(odd) {
    background-color: rgba(0, 0, 0, 0.1);
  }

  td {
    background-color: rgba(255, 255, 255, 0.15);
  }

  tbody tr td:hover {
    background-color: rgba(120, 172, 240);
    transform: translate3d(8px, -8px, 0);
    box-shadow: #214a7f -1px 1px, #214a7f -2px 2px, #214a7f -3px 3px, #214a7f -4px 4px, #214a7f -5px 5px, #214a7f -6px 6px, #214a7f -7px 7px, #214a7f -8px 8px;
    transition-duration: 0.4s;
    color: #464A52;
    font-weight: bold;
  }

  tbody tr:hover {
    background-color: rgba(120, 172, 240);
    transform: translate3d(8px, -8px, 0);
    box-shadow: #214a7f -1px 1px, #214a7f -2px 2px, #214a7f -3px 3px, #214a7f -4px 4px, #214a7f -5px 5px, #214a7f -6px 6px, #214a7f -7px 7px, #214a7f -8px 8px;
    transition-duration: 0.4s;
  }

  .icon {
    margin: auto;
    align-items: center;
  }
  .table td{
    border: none;
  }
</style>

<body>
  <?php
  $year = date('Y');//未輸入年份時的年份
  $month = date('m');//未輸入月份時的月份
  $todayYear = date('Y');
  $todayMonth = date('m');
  $year = isset($_GET['year']) ? $_GET['year'] : date('Y');//目前年份
  $this_month = strtotime($year . '1');
  $thisMonth = date('m', $this_month);
  $thiM = isset($_GET['month']) ? $_GET['month'] : date('m');// "目前月份"
  $firstDate = strtotime("{$year}-{$thiM}-1"); //y-m-t
  $starDayweek = date('w', $firstDate);//"第一天星期=>"
  $monthDays = date('t', $firstDate);// "這個月天數=>"
  $onMoth = date('t',strtotime("{$year}-{$thiM}-1-1month"));
  $monthLastDay =date('w',strtotime("{$year}-{$thiM}-{$monthDays}"));
  if (!empty($_REQUEST['year'])) {
    $year=$_REQUEST['year'];
    $month=$_REQUEST['month'];
  }else{
    $year=date('Y');
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
  $MonthChange=[
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
    '12' => 'December'
  ];

  ?>
  <div class="container" >
    <div class="row flex-column align-items-center ">
    <h1 class="text-light"><?= $year ?>/<?= $MonthChange[$thiM]?></h1>
    <form class="m-1 text-center" action="calendar-my.php" method="get" >
      <input type="text" name="year" placeholder='Year' required >
      <select  name="month" class="btn btn-light">
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
      <button type="submit" class="btn btn-light " value="查詢" >Serch</button>
    </form>
      <table class="table">
        <thead>
          <td>日</td>
          <td>一</td>
          <td>二</td>
          <td>三</td>
          <td>四</td>
          <td>五</td>
          <td>六</td>
        </thead>
        <?php

        if ($starDayweek+$monthDays<=28) {
          $week=4;
        }elseif($starDayweek+$monthDays>28 && $starDayweek+$monthDays<=35){
          $week=5;
        }elseif($starDayweek+$monthDays>35){
          $week=6;
        }

        for ($i = 0; $i < $week; $i++) {
          echo "<tr>";
          for ($j = 0; $j < 7; $j++) {
            echo "<td>";
            if ($i == 0 && $j < $starDayweek) {
              echo ($j+1+$onMoth-$starDayweek);
            } elseif ((($i * 7) + ($j + 1) - $starDayweek) > $monthDays) {
              echo $j-$monthLastDay;
            } else {
              echo ($i * 7) + ($j + 1) - $starDayweek;

            }
            echo "</td>";
          }
          echo "</tr>";
        }
        ?>
      </table>
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
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
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>