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
            <h2><i class="icon-edit"></i>Add Slider</h2>
            <h3>
                <?php
                    $msg = $this->session->userdata('message');
                    if($msg)
                    {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                ?>
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url('Slider/save_slider');?>" method="post" enctype="multipart/form-data">
                <fieldset>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="image" >
                        </div>
                        <p>***Not more than 1MB***
                    </div>

                    <div class="form-actions">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->
</div><!--/row-->