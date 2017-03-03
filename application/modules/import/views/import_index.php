<div id="headerbar">
    <h1 class="headerbar-title"><?php echo trans('import_data'); ?></h1>
</div>

<div id="content">

    <?php $this->layout->load_view('layout/alerts'); ?>

    <div class="panel panel-default">

        <div class="panel-heading">
            <h5><?php echo trans('import_from_csv'); ?></h5>
        </div>

        <div class="panel-body">
            <form method="post" action="<?php echo site_url($this->uri->uri_string()); ?>">

                <input type="hidden" name="_ip_csrf" value="<?= $this->security->get_csrf_hash() ?>">

                <?php foreach ($files as $file) { ?>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="files[]" value="<?php echo $file; ?>"> <?php echo $file; ?>
                        </label>
                    </div>
                <?php } ?>
                <input type="submit" class="btn btn-default" name="btn_submit"
                       value="<?php echo trans('import'); ?>">
            </form>
        </div>
    </div>

</div>
