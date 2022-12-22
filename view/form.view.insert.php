
<?php include 'header.view.php'; ?>
<main>

    <form action="" method="post">


            <label for="categorie">Categorie *</label>
            <!--<input type="text" id="categorie" name="categorie" value ="<?php /*echo $categorie; */?>" >-->

            <select name="cat" id="cat">
                <option value="">--Please choose Categorie--</option>
                <?php foreach ($data1 as $d):?>
                <option value=" "><?php echo $d['categorie'] ?></option>
                <?php endforeach; ?>
            </select>


            <br>
            <label for="description">Description</label>
            <input name="desc" type="text" >
            <br>
            <label for="prix">Prix</label>
            <input name="prix" type="text" >
            <br>
            <label for="img">image</label>
            <input name="img" type="file" accept="image/jpeg,image/png"  >
            <br>


        <button name="insert" type="submit">Inserer</button>
    </form>
</main>
<?php include 'view/footer.view.php';?>

