
<script type="text/javascript">
    function reload_table(){
        $.ajax({
            url:"<?php echo site_url('Employee/table_employee'); ?>",
            beforeSend:function(f){
                $('#table_employee').html('Load table...');
            },
            success: function(data){
                $('#table_employee').html(data);
            }
        });
    }
</script>

<h2>CRUD </h2>
<button class="btn btn-info" onclick="reload_table()" type="button">Reload Table</button>
<button class="btn btn-success" onclick="create()">Create Employee</button>
<br>
<br>

<div id="table_employee"></div>



