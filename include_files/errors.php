
<?php  if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?> 
            <?php echo "<p style='color:red;'>".$error."</p>"; ?>
        <?php endforeach ?>
    </div>
<?php  endif ?>