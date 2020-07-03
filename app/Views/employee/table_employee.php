<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php $i = 0;
        foreach ($employee as $key) {
            $i++; ?>
            <tr>
                <td> <?php echo $i; ?></td>
                <td> <?php echo $key['first_name'] ?> </td>
                <td> <?php echo $key['last_name'] ?> </td>
                <td> <?php echo $key['email'] ?> </td>

                <td>
                    <button class="btn btn-warning" onclick="edit(<?php echo $key['Id']; ?>)">Edit</button>
                    |
                    <button class="btn btn-danger" onclick="deleteemployee(<?php echo $key['Id']; ?>)">Delete</button>

                </td>

            </tr>

        <?php } ?>
    </tbody>
</table>