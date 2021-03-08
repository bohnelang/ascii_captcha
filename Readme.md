# ASCII CAPTCHA
This is a PHP class that implements a pure HTML based ASCII captcha function. No graphic or image is usesd. 

![Mode 1](https://github.com/bohnelang/ascii_captcha/blob/master/image1.jpg) 

# Install

git clone https://github.com/bohnelang/ascii_captcha.git



# Usage

First you generate the captcha and output it.

```
session_start();

include ("captcha.class.php");

$captcha = new ascii_captcha();
#$captcha -> debug=true;
$captcha -> setmode(10);
$captcha -> genrand(4);
$captcha -> banner();
$captcha -> renderhtml();
echo $captcha -> output_html();

$_SESSION["chap"] = $captchacaptcha ->getrandstring();

```

Second you compare the session variable with the input value the user entered. 

```
 if(  strtolower($_POST["captcha"]) == (strtolower($_SESSION["chap"]) ) ){

```

# Class HTML output modes
Details are in fond wight and HTML encoding. 

1. Mode1: ![Mode 1](https://github.com/bohnelang/ascii_captcha/blob/master/modes/mode1.jpg)
2. Mode2: ![Mode 2](https://github.com/bohnelang/ascii_captcha/blob/master/modes/mode2.jpg) 
3. Mode3: ![Mode 3](https://github.com/bohnelang/ascii_captcha/blob/master/modes/mode3.jpg) 
4. Mode4: ![Mode 4](https://github.com/bohnelang/ascii_captcha/blob/master/modes/mode4.jpg) 
5. Mode5: ![Mode 5](https://github.com/bohnelang/ascii_captcha/blob/master/modes/mode5.jpg) 
6. Mode6: ![Mode 6](https://github.com/bohnelang/ascii_captcha/blob/master/modes/mode6.jpg) 
7. Mode7: ![Mode 7](https://github.com/bohnelang/ascii_captcha/blob/master/modes/mode7.jpg) 
8. Mode8: ![Mode 8](https://github.com/bohnelang/ascii_captcha/blob/master/modes/mode8.jpg) 
9. Mode9: ![Mode 9](https://github.com/bohnelang/ascii_captcha/blob/master/modes/mode9.jpg) 
10. Mode10: ![Mode 10](https://github.com/bohnelang/ascii_captcha/blob/master/modes/mode10.jpg) 


