<?php include APPROOT . '/resources/views/admin/incl/header.php';?>
<div class="row">
    <div class="col-md-4">
        <h4><?php echo strtoupper($data['request']);?></h4>
    </div>
    <div class="col-md-8">
        <div class="mx-auto">
            <h4>ADD <?php echo strtoupper($data['request']);?></h4>
        </div>
    </div>
</div>
<?php include APPROOT . '/resources/views/incl/footer.blade.php'; ?>

