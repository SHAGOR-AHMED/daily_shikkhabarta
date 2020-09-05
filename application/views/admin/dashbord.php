<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class="sortable row-fluid">
    <a data-rel="tooltip" title="<?= count($total_category); ?> Categories." class="well span3 top-block" href="#">
        <span class="icon32 icon-red icon-user"></span>
        <div>Total Categories</div>
        <div><?= count($total_category); ?></div>
    </a>

    <a data-rel="tooltip" title="<?= count($total_blog); ?> Blogs." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-star-on"></span>
        <div>Total Blogs</div>
        <div><?= count($total_blog); ?></div>
    </a>

    <a data-rel="tooltip" title="<?= count($total_slider); ?> Images." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-star-on"></span>
        <div>Total Slide Images</div>
        <div><?= count($total_slider); ?></div>
    </a>
</div>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> Introduction</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h1>Blog Management</h1>
            <p>Its a live template. I have created it to ease the repeat work I have to do on my projects.</p>
            <p><b>All pages in the menu are functional, take a look at all.</b></p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>