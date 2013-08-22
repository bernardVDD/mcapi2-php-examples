<h2>Select a Campaign to View Reports</h2>

<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Type</th>
        <th>Sent at</th>
    </tr>

    <?php foreach ($campaigns as $campaign) { ?>
    <tr>
        <td><a href="/reports/<?php echo $campaign['id']; ?>"><?php echo $campaign['title']; ?></a></td>
        <td><?php echo $campaign['type']; ?></td>
        <td><?php echo $campaign['send_time']; ?></td>
    </tr>
    <?php } ?>

</table>

