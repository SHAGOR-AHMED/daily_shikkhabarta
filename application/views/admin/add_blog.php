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

<script type="text/javascript">
    function validate(){
        if( document.blog_form.publication_status.value == "-1" || document.blog_form.cat_id.value == "-1" ){

            alert( "Please Select" );
            return false;
        }
        return( true );
    }
</script>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Add Blog</h2>
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
            <form name="blog_form" class="form-horizontal" action="<?php echo base_url('Super_admin/save_blog');?>" method="post" enctype="multipart/form-data" onsubmit="return(validate());">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Title </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="blog_title" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name </label>
                        <div class="controls">
                            <select name="cat_id">
                                <option value="-1">Select Category Name.....</option>
                                <?php
                                    foreach($all_published_category as $v_category){
                                ?>
                                <option value="<?php echo $v_category->cat_id;?>"><?php echo $v_category->cat_name;?></option> -->
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Blog Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="blog_long_des" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="blog_image" >
                        </div>
                        <p>***Not more than 1MB***
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option value="-1">Select Status...</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
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