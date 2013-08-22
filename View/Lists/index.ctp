<h2>Lists</h2>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Subscriber Count</th>
        <th>Date Created</th>
        <th>List Rating</th>
    </tr>
    <?php foreach($lists as $list) { ?>
        <tr>
            <td><a href="/lists/<?php echo $list['id']; ?>"><?php echo $list['name']; ?></a</td>
            <td><?php echo $list['stats']['member_count']; ?></td>
            <td><?php echo $list['date_created']; ?></td>
            <td><?php echo $list['list_rating']; ?></td>
        </tr>
    <?php } ?>
</table>