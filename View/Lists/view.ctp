<h2><?php echo $list['name']; ?></h2>

<h3>Add a New Member</h3>
<p>You will not see the member listed until they click the link in the confirmation email.</p>
<form action="/lists/<?php echo $list['id']; ?>/subscribe" method="post" class="form-inline">
    <input type="email" name="email" placeholder="email address"/>
    <input type="submit" class="btn" value="Add Member"/>
</form>

<h3>Members</h3>
<table class="table table-bordered">
    <tr>
        <th>Email</th>
        <th>Subscribed Since</th>
        <th>Member Rating</th>
    </tr>
    <?php foreach($members as $member) { ?>
        <tr>
            <td><?php echo $member['email']; ?></td>
            <td><?php echo $member['timestamp']; ?></td>
            <td><?php echo $member['member_rating']; ?></td>
        </tr>
    <?php } ?>
</table>