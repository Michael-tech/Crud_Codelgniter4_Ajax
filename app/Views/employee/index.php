
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
    var save_method;
    function create(){
        save_method = 'create';
        $.ajax({
            url:"<?php echo site_url('Employee/form_employee'); ?>",
            success: function(data){
                $('#myModal .modal-dialog .modal-content .modal-body').html(data);
            }
        });
        $('#myModal').modal('show');
        $('#modal-title').text('Form Create Employee');
    }

    function edit(id){
        save_method = 'edit';
        $.ajax({
            url:"<?php echo site_url('Employee/form_employee'); ?>",
            beforeSend: function(data){
                $('#myModal').modal('show');
                 $('#modal-title').text('Form edit Employee');
               
            },
            success: function(data){
                $('#myModal .modal-dialog .modal-content .modal-body').html(data);
                $.ajax({
                    url:"<?php echo site_url('Employee/edit_form_employee') ?>",
                    data: "id="+ id,
                    type: "Post",
                    dataType: "JSON",
                    success: function(data){
                        $('[name=Id]').val(data.Id);
                        $('[name=first_name]').val(data.first_name);
                        $('[name=last_name]').val(data.last_name);
                        $('[name=email]').val(data.email);
                        
                        $('myModal').modal('show');

                    }
                });
            }
        });
       
    }
    

    function update(){
        var url;
        if(save_method=='create'){
            url="<?php echo site_url('Employee/create_employee'); ?>";
        } else {
            url="<?php echo site_url('Employee/edit_employee'); ?>";
        }
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form_employee').serialize(),
            success: function(data){
                $('#myModal').modal('hide');
                reload_table();
            }
        });
      
    }
    
    function deleteemployee(id){ 
        $.ajax({
            url:"<?php echo site_url('Employee/delete_employee'); ?>",
            type: "POST",
            data: "id=" + id,
            success: function(data){

                alert(data);
                reload_table();
            }
        });
      
    }
</script>


<h2>CRUD </h2>
<button class="btn btn-info" onclick="reload_table()" type="button">Reload Table</button>
<button class="btn btn-success" onclick="create()" type="button">Create Employee</button>
<br>
<br>

<div id="table_employee"></div>



