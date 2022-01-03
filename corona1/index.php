
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,700&display=swap" rel="stylesheet">


    <style type="text/css">
      
      *{ margin: 0; padding: 0; box-sizing: "border-box"; font-family: 'Alegreya Sans SC', sans-serif; }
      
      .nav_style{background-color: #bfff6b; }
      
      .nav_style a{ color: #000000; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg container-fluid p-3 nav_style">
  <a class="navbar-brand pl-5" href="#">COVID-19 . . . . . INDIA DAY WISE DATA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Privention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    
  </div>
</nav>

<div class="container-fluid bg-light p-5 text-center my-3 ">
        <h1 class="yes">Covid-19 Tracker</h1>
        <h5 class="text-muted yes">An opensource project to keep track of all the COVID-19 cases around the INDIA.</h5>
</div>

<div class="table-responsive">
    <table class="table text-center container my-5" id="tbl">


<?php

$data = file_get_contents('https://api.covid19india.org/data.json');

$daywise = json_decode($data, true);

$totalcount = count($daywise['cases_time_series']);

$i = 0;
while($i < $totalcount){
?>

<tr>
    <th class="text-left" colspan="6">Date : <?php echo $daywise['cases_time_series'][$i]['date'] ."<br>";?></th>   
</tr>

<tr class="text-capitalize text-black ">
    <th style="color: #fff; background: #ff6969;">Total confirmed</th>
    <th style="color: #fff; background: #596aff;">Daily confirmed</th>
    <th style="color: #fff; background: #0fe000;">Daily recovered</th>
    <th style="color: #fff; background: #f947ff;">Daily deceased</th>
    <th style="color: #fff; background: #0396ff;">Total recovered</th>
    <th style="color: #fff; background: #00ba76;">Total deceased</th>
</tr>

<tr class="mb-5">
    <td style="background: #ff6969;"><?php echo $daywise['cases_time_series'][$i]['totalconfirmed'] ; ?></td>
    <td style="background: #596aff;"><?php echo $daywise['cases_time_series'][$i]['dailyconfirmed']  ?></td>
    <td style="background: #0fe000;"><?php echo $daywise['cases_time_series'][$i]['dailyrecovered'] ?></td>
    <td style="background: #f947ff;"><?php echo $daywise['cases_time_series'][$i]['dailydeceased']  ?></td>
    <td style="background: #0396ff;"><?php echo $daywise['cases_time_series'][$i]['totalrecovered']  ?></td>
    <td style="background: #00ba76;"><?php echo $daywise['cases_time_series'][$i]['totaldeceased'] . "<br>"; ?></td>
</tr>
<?php    
   $i++;
}
?>

</div>
</table>
<footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2021___HARSH VATALIYA___</span>
        </div>
</footer>



</body>
</html> 