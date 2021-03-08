<?php
/*
 * Andreas Bohne-Lang, 2021, CC0
 *
 */

class ascii_captcha
{


        protected $glyphs = array(
          "         @@@  @@   @@  @ @   @@@@@          @@     @@@  ",
          "         @@@  @@   @@  @ @  @  @  @@@   @  @  @    @@@  ",
          "         @@@   @   @ @@@@@@@@  @   @@  @    @@      @   ",
          "          @            @ @   @@@@@    @    @@@     @    ",
          "                     @@@@@@@   @  @  @    @   @ @       ",
          "         @@@           @ @  @  @  @ @  @@ @    @        ",
          "         @@@           @ @   @@@@@ @   @@  @@@@ @       ",

          "   @@    @@                                            @",
          "  @        @   @   @    @                             @ ",
          " @          @   @ @     @                            @  ",
          " @          @ @@@@@@@ @@@@@   @@@   @@@@@           @   ",
          " @          @   @ @     @     @@@                  @    ",
          "  @        @   @   @    @      @            @@@   @     ",
          "   @@    @@                   @             @@@  @      ",

          "  @@@     @    @@@@@  @@@@@ @      @@@@@@@ @@@@@ @@@@@@@",
          " @   @   @@   @     @@     @@    @ @      @     @@    @ ",
          "@   @ @ @ @         @      @@    @ @      @          @  ",
          "@  @  @   @    @@@@@  @@@@@ @@@@@@@ @@@@@ @@@@@@    @   ",
          "@ @   @   @   @            @     @       @@     @  @    ",
          " @   @    @   @      @     @     @ @     @@     @  @    ",
          "  @@@   @@@@@ @@@@@@@ @@@@@      @  @@@@@  @@@@@   @    ",

          " @@@@@  @@@@@          @@@      @           @     @@@@@ ",
          "@     @@     @  @@@    @@@     @             @   @     @",
          "@     @@     @  @@@           @     @@@@@     @        @",
          " @@@@@  @@@@@@         @@@   @                 @     @@ ",
          "@     @      @         @@@    @     @@@@@     @     @   ",
          "@     @@     @  @@@     @      @             @          ",
          " @@@@@  @@@@@   @@@    @        @           @       @   ",

          " @@@@@    @   @@@@@@  @@@@@ @@@@@@ @@@@@@@@@@@@@@ @@@@@ ",
          "@     @  @ @  @     @@     @@     @@      @      @     @",
          "@ @@@ @ @   @ @     @@      @     @@      @      @      ",
          "@ @ @ @@     @@@@@@@ @      @     @@@@@@  @@@@@  @  @@@@",
          "@ @@@@ @@@@@@@@     @@      @     @@      @      @     @",
          "@     @@     @@     @@     @@     @@      @      @     @",
          " @@@@@ @     @@@@@@@  @@@@@ @@@@@@ @@@@@@@@       @@@@@ ",

          "@     @  @@@        @@    @ @      @     @@     @@@@@@@@",
          "@     @   @         @@   @  @      @@   @@@@    @@     @",
          "@     @   @         @@  @   @      @ @ @ @@ @   @@     @",
          "@@@@@@@   @         @@@@    @      @  @  @@  @  @@     @",
          "@     @   @   @     @@  @   @      @     @@   @ @@     @",
          "@     @   @   @     @@   @  @      @     @@    @@@     @",
          "@     @  @@@   @@@@@ @    @ @@@@@@@@     @@     @@@@@@@@",

          "@@@@@@  @@@@@ @@@@@@  @@@@@ @@@@@@@@     @@     @@     @",
          "@     @@     @@     @@     @   @   @     @@     @@  @  @",
          "@     @@     @@     @@         @   @     @@     @@  @  @",
          "@@@@@@ @     @@@@@@@  @@@@@    @   @     @@     @@  @  @",
          "@      @   @ @@   @        @   @   @     @ @   @ @  @  @",
          "@      @    @ @    @ @     @   @   @     @  @ @  @  @  @",
          "@       @@@@ @@     @ @@@@@    @    @@@@@    @    @@ @@ ",

          "@     @@     @@@@@@@@ @@@@@ @       @@@@@    @          ",
          " @   @  @   @      @  @      @          @   @ @         ",
          "  @ @    @ @      @   @       @         @  @   @        ",
          "   @      @      @    @        @        @               ",
          "  @ @     @     @     @         @       @               ",
          " @   @    @    @      @          @      @               ",
          "@     @   @   @@@@@@@ @@@@@       @ @@@@@        @@@@@@@",

          "  @@@                                                   ",
          "  @@@     @@   @@@@@   @@@@  @@@@@  @@@@@@ @@@@@@  @@@@ ",
          "   @     @  @  @    @ @    @ @    @ @      @      @    @",
          "    @   @    @ @@@@@  @      @    @ @@@@@  @@@@@  @     ",
          "        @@@@@@ @    @ @      @    @ @      @      @  @@@",
          "        @    @ @    @ @    @ @    @ @      @      @    @",
          "        @    @ @@@@@   @@@@  @@@@@  @@@@@@ @       @@@@ ",

          "                                                        ",
          " @    @    @        @ @    @ @      @    @ @    @  @@@@ ",
          " @    @    @        @ @   @  @      @@  @@ @@   @ @    @",
          " @@@@@@    @        @ @@@@   @      @ @@ @ @ @  @ @    @",
          " @    @    @        @ @  @   @      @    @ @  @ @ @    @",
          " @    @    @   @    @ @   @  @      @    @ @   @@ @    @",
          " @    @    @    @@@@  @    @ @@@@@@ @    @ @    @  @@@@ ",

          "                                                        ",
          " @@@@@   @@@@  @@@@@   @@@@   @@@@@ @    @ @    @ @    @",
          " @    @ @    @ @    @ @         @   @    @ @    @ @    @",
          " @    @ @    @ @    @  @@@@     @   @    @ @    @ @    @",
          " @@@@@  @  @ @ @@@@@       @    @   @    @ @    @ @ @@ @",
          " @      @   @  @   @  @    @    @   @    @  @  @  @@  @@",
          " @       @@@ @ @    @  @@@@     @    @@@@    @@   @    @",

          "                       @@@     @     @@@   @@    @ @ @ @",
          " @    @  @   @ @@@@@@ @        @        @ @  @  @ @ @ @ ",
          "  @  @    @ @      @  @        @        @     @@ @ @ @ @",
          "   @@      @      @  @@                 @@        @ @ @ ",
          "   @@      @     @    @        @        @        @ @ @ @",
          "  @  @     @    @     @        @        @         @ @ @ ",
          " @    @    @   @@@@@@  @@@     @     @@@         @ @ @ @"

        );

        public $randomstring;
        public $debug=false;
        private $bannerstring;
        private $htmlstring;
        private $mode = 9;

public function __construct( $mode=10,  $debug=false) {
        $this->mode = $mode;
        $this->debug = $debug;
}

public function setmode($mode)
{
        $this->mode = $mode;
}

public function getrandstring()
{
        return $this->randomstring;
}

public function setrandstring($in)
{
        $this->randomstring = $in;
}


public function getbannerstring()
{
        return $this->bannerstring;
}


public function genrand($len)
{
        # Ignore glyphs the looks similar like 8, B and 3 or D, O and 0
        $alp="1457ACEFHIJKLMNPRTUVWXYZ";
        $ret="";

        for($i=0; $i<$len;$i++){
                $ret .= substr($alp,rand()%strlen($alp),1);
        }
        $this->randomstring = $ret;
        if($this->debug) printf("genrand:\n%s\n",$this->randomstring);
}

public function renderhtml()
{
        $ret="";
        $in = $this->bannerstring;
        $alp="01234567890?ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz*+#/\$";
        for($i=0; $i<strlen($in);$i++){
                $c=substr($in,$i,1);
                if(ord($c)<32){
                        $ret .= "\n";
                }else {
                        $fsr = 16+rand()%50;
                        $fsg = 16+rand()%50;
                        $fsb = 16+rand()%50;
                        $fwr = 200 + rand()%50;
                        $fwg = 200 + rand()%50;
                        $fwb = 200 + rand()%50;
                        $nc=substr($alp,rand()%strlen($alp),1);
                        $cols = sprintf("%x%x%x",$fsr,$fsg,$fsb);
                        $colw = sprintf("%x%x%x",$fwr,$fwg,$fwb);
                        switch($this->mode){
                                case 1: $ret .= ($c=='@')?"<font color=\"#$cols\"><b>$nc</b></font>":"<font color=\"#$colw\">$nc</font>"; break;
                                case 2: $ret .= ($c=='@')?"<font color=\"#000000\">#</font>":"<font color=\"#FFFFFF\">#</font>"; break;
                                case 3: $ret .= ($c=='@')?"<font color=\"#$cols\">#</font>":"<font color=\"#$colw\">&nbsp;</font>"; break;
                                case 4: $ret .= ($c=='@')?"<b>#</b>":"#"; break;
                                case 5: $ret .= ($c=='@')?"#":"."; break;
                                case 6: $ret .= ($c=='@')?"#":"&nbsp;"; break;
                                case 7: $ret .= ($c=='@')?"X":"&nbsp;"; break;
                                case 8: $ret .= ($c=='@')?"<font color=\"#$cols\">#</font>":"<font color=\"#$colw\">#</font>"; break;
                                case 9: $ret .= ($c=='@')?"<b><font color=\"#$cols\">#</font></b>":"<b><font color=\"#$colw\">#</font></b>"; break;
                                case 10: $ret .= ($c=='@')?"<span style=\"font-weight:bold; color:#$cols\">#</span>":"<span style=\"color:#$colw\">#</span>"; break;
                        }
                }
        }
        $this->htmlstring = $ret;
        if($this->debug) printf("renderhtml:\n%s\n",$this->htmlstring);
}

public function banner()
{
        $word = $this->randomstring;
        $ret="";
        $block=0;
        for ($zeile = 0; $zeile < 7; $zeile++) {
                $line="";
                for ($buchstabe = 0; $buchstabe < strlen($word); $buchstabe++) {
                        $ind = ord(substr($word,$buchstabe,1)) - 32 ;
                        $a=floor($ind / 8) * 7 + $zeile;
                        $b=($ind % 8 * 7) + $block;
                        $ll=substr($this->glyphs[$a],$b,7)."   ";
                        $line .= $ll;
                }
                $ret .= sprintf("%s\n", $line);
        }
        $ret .= sprintf("\n");
        $this->bannerstring = $ret;
        if($this->debug) printf("banner:\n%s\n",$this->bannerstring);
}

public function output_html()
{
        $ret="";
        $ret .= "<pre style=\"font-size: 12px; line-height: 12px;\" >\n";
        $ret .= $this->htmlstring;
        $ret .= "</pre>";
        return $ret;

}

} // class

/*
$x = new ascii_captcha();
#$x -> debug=true;
$x -> setmode(10);
$x -> genrand(8);
$x -> banner();
$x -> renderhtml();
echo $x -> output_html();
*/

?>
