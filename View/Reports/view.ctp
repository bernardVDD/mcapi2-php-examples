<h2>Report for:  <?php echo $campaign['title']; ?></h2>

<table class="table table-bordered">

    <tr>
        <th>Hard Bounces</th>
        <th>Soft Bounces</th>
        <th>Abuse Reports</th>
        <th>Unsubscribes</th>
    </tr>

    <tr>
        <td><?php echo $report['hard_bounces']; ?></td>
        <td><?php echo $report['soft_bounces']; ?></td>
        <td><?php echo $report['abuse_reports']; ?></td>
        <td><?php echo $report['unsubscribes']; ?></td>
    </tr>

</table>

<table class="table table-bordered">

    <tr>
        <th>Opens</th>
        <th>Unique Opens</th>
        <th>Last Open</th>
    </tr>

    <tr>
        <td><?php echo $report['opens']; ?></td>
        <td><?php echo $report['unique_opens']; ?></td>
        <td><?php echo $report['last_open']; ?></td>
    </tr>

</table>

<table class="table table-bordered">

    <tr>
        <th>Clicks</th>
        <th>Unique Clicks</th>
        <th>Last Click</th>
        <th>Users who Clicked</th>
    </tr>

    <tr>
        <td><?php echo $report['clicks']; ?></td>
        <td><?php echo $report['unique_clicks']; ?></td>
        <td><?php echo $report['last_click']; ?></td>
        <td><?php echo $report['users_who_clicked']; ?></td>
    </tr>

</table>

