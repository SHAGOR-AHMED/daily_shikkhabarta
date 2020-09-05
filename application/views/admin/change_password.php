<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Change your password here</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div class="inner_content_w3_agile_info">   
                <div class="registration admin_agile">                              
                    <div class="signin-form profile admin">
                        <?php if($this->session->userdata('message')){ ?>

                            <div class="alert alert-block alert-success">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                                <i class="ace-icon fa fa-check green"></i>
                                <?php 
                                    print $this->session->userdata('message');
                                    $this->session->unset_userdata('message');
                                ?>
                            </div>
                            
                        <?php } ?>

                        <div class="login-form">
                            <form class="form-horizontal" action="<?php echo base_url('Admin/update_password');?>" method="post">
                                <fieldset>

                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">Old Password</label>
                                        <div class="controls">
                                            <input type="password" class="span6 typeahead" name="old_password" value="" placeholder="Enter your old password">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">New Password</label>
                                        <div class="controls">
                                            <input type="password" class="span6 typeahead" name="new_password" value="" placeholder="Enter your new password">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">Confirm Password</label>
                                        <div class="controls">
                                            <input type="password" class="span6 typeahead" name="confirm_password" value="" placeholder="Enter re-password">
                                        </div>
                                    </div>

                                    <input type="hidden" name="admin_id" value="<?= $adminID ?>">

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>

                                </fieldset>
                            </form>  
                        </div>                                                                     
                    </div>  
                </div>
            </div>  
        </div>
    </div><!--/span-->
</div><!--/row-->