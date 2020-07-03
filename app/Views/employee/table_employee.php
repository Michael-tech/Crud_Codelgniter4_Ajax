<table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Created at</th>

            </tr>
        </thead>
        <tbody>
         <?php $i= 0; foreach($employee as $key) { $no++; ?>
            <tr>
                <td><?php echo $i; ?>td>
               
                <td><?php echo $key['first_name'] ?> </td>
                <td><?php echo $key['last_name'] ?></td>
                <td><?php echo $key['email'] ?></td>
               
                <td>
                    <a href="{{ url('/empleados/'.$empleado->id. '/edit' ) }}" class="btn btn-primary">Edit</a>

                    |
                    <form action="{{ url('/empleados/'.$empleado->id) }}" method="post" style="display:inline">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('Borrar?');" class="btn btn-danger">Delete</button>

                    </form>
                </td>

            </tr>
            
        <?php } ?>
        </tbody>
    </table>