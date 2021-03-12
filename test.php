<?php
/*
 * Test ASCII-captcha
 *
 * Andreas Bohne-Lang, 2021, CC0
 *
 */

# Set script URL here.
$ttt="./test.php";

session_start();

require_once("./captcha.class.php");

echo "<html><body>\n";

if (! isset($_POST["captcha"]) || empty($_POST["captcha"]) ){

        $captcha = new ascii_captcha();
        $captcha -> genrand(4);
        $captcha -> setmode(10);
        $_SESSION["chap"] = $captcha ->getrandstring();
        $captcha -> banner();
        $captcha ->  renderhtml();
        $cstr= $captcha -> output_html();


        echo "<form name=\"lgi\" action=\"$ttt\" method=post> <table border><tbody> ";
        echo "<tr><td colspan=2 align=center><p> $cstr <p>";
        echo "<b>Please enter the 4 characters here:</b>";
        echo " <input type=text size=\"4\" maxlength=\"4\" name=\"captcha\"> </td></tr>" ;
        echo " <tr><td colspan=2 align=center> <input type=submit name=Submit value='Anmelden'> </td></tr>";
        echo " </tbody> </table> </form>  <p>";




} else {

        $input_captcha = $_POST["captcha"];

        $session_captcha = (isset($_SESSION["chap"])?$_SESSION["chap"]:"");

        if(  strtolower($input_captcha) == (strtolower($session_captcha) ) ){
                echo "Yep - you entered the right captcha";
        } else {
                echo "Oh no - ths captcha was wrong.";
        }
        echo "<p> <a href=\"$ttt\"> Again </a>\n";
}

echo "</body></html>\n";
?>
