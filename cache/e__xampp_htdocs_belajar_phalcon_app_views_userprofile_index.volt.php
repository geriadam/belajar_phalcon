<br />
<a href="userprofile/create" class="btn btn-success add pull-right">Create</a><br><hr>
<?php $this->flashSession->output() ?>
<table class="table table-responsive table-bordered table-striped">
    <thead>
        <th>Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach($userprofile as $data): ?>
        <tr>
            <td><?= $data->user_profile_name; ?></td>
            <td><?= $data->user_profile_address; ?></td>
            <td><?= $data->user_profile_gender; ?></td>
            <td> 
                <a href="userprofile/edit/<?= $data->user_profile_id; ?>"><button class="btn btn-primary">Edit</button></a> | 
                <a href="userprofile/delete/<?= $data->user_profile_id; ?>"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>