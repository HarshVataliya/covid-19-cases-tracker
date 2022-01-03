<div class="table-responsive">
    <table class="table text-center" id="tbl">


<?php

$data = file_get_contents('https://api.covid19india.org/data.json');

$daywise = json_decode($data, true);

$totalcount = count($daywise['cases_time_series']);

$i = 0;
while($i < $totalcount){
?>

<tr>
    <th class="text-left" colspan="6">Date & Month</th>
</tr>
<tr>
    <td colspan="6" class="text-left"><?php echo $coronadata['cases_time_series'][$i]['date'] ."<br>"; ?></td>
</tr>
<tr class="text-capitalize text-white">
    <th style="color: #fff; background: #eb7a34;">Total confirmed</th>
    <th style="color: #fff; background: #eb34b4;">Daily confirmed</th>
    <th style="color: #fff; background: #e5eb34;">Daily recovered</th>
    <th style="color: #fff; background: #9234eb;">Daily deceased</th>
    <th style="color: #fff; background: #0ef02c;">Total recovered</th>
    <th style="color: #fff; background: #0400ff;">Total deceased</th>
</tr>
<tr class="mb-5">
    <td style="background: #eb34b4;"><?php echo $coronadata['cases_time_series'][$i]['totalconfirmed'] . "<br>"; ?></td>
    <td style="background: #eb7a34;"><?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed'] . "<br>"; ?></td>
    <td style="background: #9234eb;"><?php echo $coronadata['cases_time_series'][$i]['dailyrecovered'] . "<br>"; ?></td>
    <td style="background: #e5eb34;"><?php echo $coronadata['cases_time_series'][$i]['dailydeceased'] . "<br>"; ?></td>
    <td style="background: #0400ff;"><?php echo $coronadata['cases_time_series'][$i]['totalrecovered'] . "<br>"; ?></td>
    <td style="background: #0ef02c;"><?php echo $coronadata['cases_time_series'][$i]['totaldeceased'] . "<br>"; ?></td>
</tr>
<?php    
   $i++;
}
?>

</div>
</table>