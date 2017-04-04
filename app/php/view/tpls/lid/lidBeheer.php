<?php
  include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/header.php";
?>
<div class="content">
  <form method="POST">
    <caption>Uw persoonlijke gegevens</caption>
    <table>
      <tr>
        <td>
          <span>Naam:</span>
        </td>
        <td>
          <input type="text" name="firstname" placeholder='voornaam' required="required" hidden value="<?= !empty($gebruiker->getFirstname())?$gebruiker->getFirstname():0;?>"/>
        </td>
      </tr>
      <tr>
        <td>
          <span>Tussenvoegsel:</span>
        </td>
        <td>
          <input type="text" placeholder="tussenvoegsel" name="preprovision" value="<?= !empty($gebruiker->getPreprovision())?$gebruiker->getPreprovision():'';?>"/>
        </td>
      </tr>
        <tr>
          <td>
            <span>Achternaam:</span>
          </td>
          <td>
            <input type="text" name="lastname" required="required" placeholder='achternaam' value="<?= !empty($gebruiker->getLastname())?$gebruiker->getLastname():'';?>" />
          </td>
        </tr>
      <tr>
        <td>
          <span>Wachtwoord:</span>
        </td>
        <td>
          <input type="text" name="password" placeholder='wachtwoord' required="required" value="<?= !empty($gebruiker->getPassword())?$gebruiker->getPassword():'';?>" />
        </td>
      </tr>
      <tr>
        <td>
          <span>Geboorte dag:</span>
        </td>
        <td>
          <input type="text" name="dateofbirth" placeholder="geboortedag" required="required" value="<?= !empty($gebruiker->getDateofbirth())?$gebruiker->getDateofbirth():'';?>" />
        </td>
      </tr>
      <tr>
        <td>
          <span>Gender:</span>
        </td>
        <td>
          <input type="text" name="gender" placeholder="gender" required="required" value="<?= !empty($gebruiker->getGender())?$gebruiker->getGender():'';?>" />
        </td>
      </tr>
      <tr>
        <td>
          <span>E-mail:</span>
        </td>
        <td>
          <input type="email" name="emailaddress" placeholder="email" required="required" value="<?= !empty($gebruiker->getEmailaddress())?$gebruiker->getEmailaddress():'';?>" />
        </td>
      </tr>
      <tr>
        <td>
          <span>Straatnaam:</span>
        </td>
        <td>
          <input type="text" name="street" placeholder="straatnaam"  value="<?= !empty($gebruiker->getStreet())?$gebruiker->getStreet():'';?>" />
        </td>
      </tr>
      <tr>
        <td>
          <span>Postcode:</span>
        </td>
        <td>
          <input type="text" name="postalcode" placeholder="postcode" value="<?= !empty($gebruiker->getPostal_code())?$gebruiker->getPostal_code():'';?>" />
        </td>
      </tr>
      <tr>
        <td>
          <span>Woonplaats:</span>
        </td>
        <td>
          <input type="text" name="place" placeholder="woonplaats"  value="<?= !empty($gebruiker->getPlace())?$gebruiker->getPlace():'';?>" />
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
