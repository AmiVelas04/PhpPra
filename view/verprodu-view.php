<div class="row">
    <div class="col-md-12">
        <a href="index.php?controller=note&action=edit" class="btn btn-outline-primary">Crear nota</a>
        <hr>
    </div>
</div>
<?php
if (count($datatoView["data"]) > 0) {
    foreach ($datatoView["data"] as $elem) {
?>
        <div class="col-md-3">
            <div class="card-body border border-secondary rounded">
                <h5><?php echo $elem['nombre']; ?></h5>
                <div class="card-text"><?php echo nl2br($elem["precio"]); ?> </div>
                <hr />
                <a href="index.php?controller=note&action=edit&id=<?php $elem['cantidad']; ?>"></a>
                <a href="index.php?controller=note&action=edit&id=<?php $elem['cantidad']; ?>"></a>
            </div>
        </div>
    <?php
    }
} else {
    ?>
    <div class="alert alert-info">
        Actualmente no hay prods
    </div>
<?php
}
?>
</div>