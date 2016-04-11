<h2><?php echo $title; ?></h2>

<table>
    <?php

    foreach ($users as $users_details): ?>
        <tr>
            <td><?php echo $users_details['pseudo']; ?></td>
            <td class="main"><?php echo $users_details['score']; ?></td>
            <td><a href="<?php echo site_url('users/' . $users_details['pseudo']); ?>">View Player</a></td>
        </tr>
    <?php endforeach; ?>
</table>
