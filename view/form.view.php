<?php include 'header.view.php'; ?>
<main>

    <form action="" method="post">


        <label for="categorie">Categorie *</label>
            <select name="cat" id="cat">
                <?php foreach ($data1 as $d):?>
                    <option value=" "><?php echo $d['categorie'] ?></option>
                <?php endforeach; ?>
            </select>

        <?php foreach ($data as $d):?>

        <label for="description">Description</label>
        <input name="desc" type="text" value="<?php echo $d['descr'] ?>">
        <br>
        <label for="prix">Prix</label>
        <input name="prix" type="text" value="<?php echo $d['prix'] ?>">
        <br>
        <label for="img">image</label>
        <input name="img" type="text" value="<?php echo $d['img'] ?>">
        <br>
         <?php endforeach; ?>

        <button name="modif" type="submit">Modifier</button>
    </form>
</main>
<?php include 'view/footer.view.php';?>

