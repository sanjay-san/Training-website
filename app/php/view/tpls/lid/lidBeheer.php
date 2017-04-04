<?php
include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/header.php";?>
<section ><br>
            <form  method="post">

                <table>
                    <caption>Uw persoonlijke gegevens</caption>
                    <tr>
                        <td>Naam:</td>
                        <td>
                            <input type="text" name="firstname" placeholder='voornaam' required="required" hidden value="<?= !empty($gebruiker->getFirstname())?$gebruiker->getFirstname():0;?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Tussenvoegsel:</td>
                        <td>
                            <input type="text" placeholder="tussenvoegsel" name="preprovision" value="<?= !empty($gebruiker->getPreprovision())?$gebruiker->getPreprovision():'';?>"/>
                        </td>
                    </tr>
                    <tr >
                        <td>Achternaam:</td>
                        <td>
                            <input type="text" name="lastname" required="required" placeholder='achternaam' value="<?= !empty($gebruiker->getLastname())?$gebruiker->getLastname():'';?>" />
                        </td>
                    </tr>
                    <tr >
                        <td>Wachtwoord:</td>
                        <td>
                            <input type="text" name="password" placeholder='wachtwoord' required="required" value="<?= !empty($gebruiker->getPassword())?$gebruiker->getPassword():'';?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Geboorte dag:</td>
                        <td><input type="text" name="dateofbirth" placeholder="geboortedag" required="required" value="<?= !empty($gebruiker->getDateofbirth())?$gebruiker->getDateofbirth():'';?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="text" name="gender" placeholder="gender" required="required" value="<?= !empty($gebruiker->getGender())?$gebruiker->getGender():'';?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="email" name="emailaddress" placeholder="email" required="required" value="<?= !empty($gebruiker->getEmailaddress())?$gebruiker->getEmailaddress():'';?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Straatnaam:</td>
                        <td><input type="text" name="street" placeholder="straatnaam"  value="<?= !empty($gebruiker->getStreet())?$gebruiker->getStreet():'';?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Postcode:</td>
                        <td><input type="text" name="postalcode" placeholder="postcode" value="<?= !empty($gebruiker->getPostal_code())?$gebruiker->getPostal_code():'';?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Woonplaats:</td>
                        <td>
                            <input type="text" name="place" placeholder="woonplaats"  value="<?= !empty($gebruiker->getPlace())?$gebruiker->getPlace():'';?>" />
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value=" Update ">
                        </td>
                    </tr>

                </table>

            </form>
            <br >
        </section>

<?php include str_replace("\\", DIRECTORY_SEPARATOR, BASE_NAMESPACE)."view/tpls/include/footer.php"; ?>
