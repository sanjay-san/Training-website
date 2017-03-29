<html>
  <head>
    <title>Training website</title>
    <meta charset="utf-8"/>

    <link href="css/main.css" rel="stylesheet"/>
  </head>
  <header>
    <section class="logo">

    </section>
    <section class="login">
      <form  method="post" autocomplete="off">
        <table>
          <tr>
            <td>gebruikersnaam:</td>
            <td>
              <input type="text" autocomplete="off" placeholder="vul uw gebuikersnaam in" name="usn" value='<?= isset($usn)?$usn:"";?>' required="required" />
            </td>
          </tr>
          <tr >
            <td>wachtwoord:</td>
            <td>
              <input type="password" autocomplete="off" name="ww" placeholder="vul uw wachtwoord in" required="required" />
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input type="submit" value="inloggen"><input type="reset" value="reset" />
            </td>
          </tr>
        </table>
      </form>
    </section>
  </header>
  <body>
