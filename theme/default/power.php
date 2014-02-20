<?php 

// getPowerStatistics function
//
// returns
//
// $today
// $hour
// $yesterday
// $week
// $month

?>
<div id="power" class="homeblock">
<h2>Power Usage</h2>
<hr/>

<p>These are estimates, to learn how they are generated please read the documentation.</p>
<br/>
<table class="table table-bordered">
        <thead>
          <tr>
            <th>Time Span</th>
            <th>&pound;</th>
            <th>joules</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Current Day</td>
            <td>&pound;<?php echo $today['pound'];?></td>
            <td><?php echo $today['joules'];?></td>
            <td><?php echo $today['status'];?></td>
          </tr>
          <tr>
            <td>Past Hour</td>
            <td>&pound;<?php echo $hour['pound'];?></td>
            <td><?php echo $hour['joules'];?></td>
            <td><?php echo $hour['status'];?></td>
          </tr>
          <tr>
            <td>Yesterday</td>
            <td>&pound;<?php echo $yesterday['pound'];?></td>
            <td><?php echo $yesterday['joules'];?></td>
            <td><?php echo $yesterday['status'];?></td>
          </tr>
          <tr>
            <td>Last Week</td>
            <td>&pound;<?php echo $week['pound'];?></td>
            <td><?php echo $week['joules'];?></td>
            <td><?php echo $week['status'];?></td>
          </tr>
          <tr>
            <td>Last Month</td>
            <td>&pound;<?php echo $month['pound'];?></td>
            <td><?php echo $month['joules'];?></td>
            <td><?php echo $month['status'];?></td>
          </tr>
        </tbody>
      </table>

</div>
