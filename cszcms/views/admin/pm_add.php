<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i><span class="glyphicon glyphicon-globe"></span></i> <?php echo  $this->lang->line('pm_header') ?>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="h2 sub-header"><?php echo  $this->lang->line('pm_new_msg') ?> <a role="button" href="<?php echo BASE_URL?>/admin/pm/newpm" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span> <?php echo $this->lang->line('pm_new_msg') ?></a></div>
        <?php echo form_open(BASE_URL . '/admin/pm/insert'); ?>
        
        <div class="control-group">	
            <?php echo form_error('to', '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
            <label class="control-label" for="to"><?php echo $this->lang->line('pm_to'); ?>*</label>
            <?php
                $att = 'name="to[]" id="to" class="form-control select2" multiple="multiple" required="required" autofocus="true"';
                $data = array();
                if (!empty($users) && $users !== FALSE) {
                    foreach ($users as $u) {
                        $data[$u['user_admin_id']] = $u['name'];
                    }
                }
                echo form_dropdown('', $data, '', $att);
            ?>
        </div> <!-- /control-group -->
        
        <div class="control-group">	
            <?php echo form_error('title', '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
            <label class="control-label" for="title"><?php echo $this->lang->line('pm_subject'); ?>*</label>
            <?php
            $data = array(
                'name' => 'title',
                'id' => 'title',
                'required' => 'required',
                'autofocus' => 'true',
                'class' => 'form-control',
                'maxlength' => '255',
                'value' => set_value('title', '', FALSE)
            );
            echo form_input($data);
            ?>			
        </div> <!-- /control-group -->
        
        <div class="control-group">	
            <?php echo form_error('message', '<div class="alert alert-danger text-center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>'); ?>
            <label class="control-label" for="message"><?php echo $this->lang->line('pm_message'); ?>*</label>
            <?php
            $data = array(
                'name' => 'message',
                'id' => 'message',
                'required' => 'required',
                'autofocus' => 'true',
                'class' => 'form-control',
                'value' => set_value('message', '', FALSE)
            );
            echo form_textarea($data);
            ?>			
        </div> <!-- /control-group -->

        <br><br>
        <div class="form-actions">
            <?php
            $data = array(
                'name' => 'submit',
                'id' => 'submit',
                'class' => 'btn btn-lg btn-primary',
                'value' => $this->lang->line('pm_send'),
            );
            echo form_submit($data);
            ?> 
            <a class="btn btn-lg" href="<?php echo $this->csz_referrer->getIndex(); ?>"><?php echo $this->lang->line('btn_cancel'); ?></a>
        </div> <!-- /form-actions -->
        <?php echo form_close(); ?>
        <!-- /widget-content --> 
    </div>
</div>