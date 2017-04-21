<?php
  include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/header.php";
?>

<div class="content">
   <h1>Lessen</h1>
   <p>
     <br>U kunt zich inschrijven voor de volgende lessen:
     <?php foreach ($lesnamen as $lesnaam):?>
       <tr>
         <td><br><?= $lesnaam->getDescription(); ?></td>
       </tr>
     <?php endforeach;?>
   </p>
</div>

<?php
  include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/footer.php";
?>
