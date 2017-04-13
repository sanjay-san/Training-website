<?php
  include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/header.php";
?>

<div class="content">
  <form method="POST">
    <h1>Lid worden</h1>
    <h4>
      Om gebruik te kunnen maken van de lessen moet je bij ons bekend zijn.<br>
      Vul hieronder alle gegevens in en registreer jezelf.
    </h4>
    <div>
      <?php
      echo $note;
      ?>
    </div>
    <table>
      <tr>
        <td>
          <span>Naam:</span>
        </td>
        <td>
          <input type="text" name="firstname" placeholder='voornaam' required="required" value="<?= !empty($form_data['firstname'])?$form_data['firstname']:'';?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <span>Tussenvoegsel:</span>
        </td>
        <td>
          <input type="text" placeholder="tussenvoegsel" name="preprovision" value="<?= !empty($form_data['preprovision'])?$form_data['preprovision']:'';?>"/>
        </td>
      </tr>
        <tr>
          <td>
            <span>Achternaam:</span>
          </td>
          <td>
            <input type="text" name="lastname" required="required" placeholder='achternaam' value="<?= !empty($form_data['lastname'])?$form_data['lastname']:'';?>"/>
          </td>
        </tr>
      <tr>
      <tr>
        <td>
          <span>Gebruikersnaam:</span>
        </td>
        <td>
          <input type="text" name="loginname" placeholder='loginnaam' required="required" value="<?= !empty($form_data['loginname'])?$form_data['loginname']:'';?>"/>
        </td>
      </tr>
        <td>
          <span>Wachtwoord:</span>
        </td>
        <td>
          <input type="text" name="password" placeholder='wachtwoord' required="required" value="<?= !empty($form_data['password'])?$form_data['password']:'';?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <span>Geboorte dag:</span>
        </td>
        <td>
          <input type="text" name="dateofbirth" placeholder="jaar/maand/dag" required="required" value="<?= !empty($form_data['dateofbirth'])?$form_data['dateofbirth']:'';?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <span>Gender:</span>
        </td>
        <td>
          <input type="text" name="gender" placeholder="gender" required="required" value="<?= !empty($form_data['gender'])?$form_data['gender']:'';?>"/>
        </td>
      </tr>
      <tr>
        <td>Email:</td>
        <td>
          <input type="email" name="email" placeholder="email" required="required" value="<?= !empty($form_data['email'])?$form_data['email']:'';?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <span>Straatnaam:</span>
        </td>
        <td>
          <input type="text" name="street" placeholder="straatnaam"  value="<?= !empty($form_data['street'])?$form_data['street']:'';?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <span>Postcode:</span>
        </td>
        <td>
          <input type="text" name="postalcode" placeholder="postcode" value="<?= !empty($form_data['postalcode'])?$form_data['postalcode']:'';?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <span>Woonplaats:</span>
        </td>
        <td>
          <input type="text" name="place" placeholder="woonplaats"  value="<?= !empty($form_data['place'])?$form_data['place']:'';?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" value=" Update ">
        </td>
      </tr>
    </table>
  </form>
</div>


<?php
  include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/footer.php";
?>
