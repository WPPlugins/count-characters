<?php
/*

Plugin Name: Text Counter
Plugin URI: http://www.devilhunter.net/
Description: Go to Appearance > Widgets, and drag 'Text Counter' in sidebar or footer or in any widgetized area. This PlugIn will automatically match your theme's color. No need to use any short-code or to edit settings.
Version: 2.0
Author: Tawhidur Rahman Dear
Author URI: http://www.facebook.com/tawhidurrahmandear/ 
License: GPLv2 or later 

Tawhidur Rahman Dear
Mailing Address: 
House - 304, Road - 10 Rupnagar Tinshed,
Pallabi, Mirpur,
Dhaka - 1216
BANGLADESH
tawhidurrahmandear@gmail.com
+8801716816283, (also in Viber, DUO, WhatsApp, IMO)
Skype & Google Hangout: tawhidurrahmandear
Facebook: http://www.facebook.com/tawhidurrahmandear/ 
Google Plus: http://plus.google.com/+tawhidurrahmandear/about
Personal Blog: http://tawhidurrahmandear.blogspot.com 
 
 */


namespace deareleven\dear\wordpress;

{require_once(__DIR__ . "/pluginfiles/widget.php");}

  class S extends Widget {
    static $widgetTitle = "deareleven_textcounter";

    public function __construct() {
      parent::__construct(null, "Text Counter");
    }


    public function widgetContent($args, $instance)
    {
      ?>
<form action="" method="post">
<p align="center">
<textarea rows="10" name="field1" id="field1" class="word_count" onfocus="javascript:if(this.value=='Copy and paste your text here to start counting characters.') this.value='';" style="font-weight: bold; border-style: solid; border-width: 2"></textarea>
</p>
<p align="center">
<b>
<span class="counter" id="counter"><font size="4">0 Characters | 0 words | 0 sentences | 0 paragraphs</font></span></b></p>
</form>
<script>
function switchb(e){var t=document.getElementsByName("switch");var n="none";for(var r=0;r<t.length;r++){if(t[r].checked){n="block";break}}document.getElementById(e).style.display=n}var x;var count;var text=document.getElementById("field1").value;setInterval(function(){var e=0;var t=0;var n=0;var r=0;text=document.getElementById("field1").value;s=text;s=s.replace(/(^\s*)|(\s*$)/gi,"");s=s.replace(/[ ]{2,}/gi," ");s=s.replace(/\n /,"\n");x=s.split(" ").length;count=text.length;if(text==""){x=0}sentences=text;sentencesDot=sentences.replace(/\!/g,".").replace(/\?/g,".");sentencesCount=sentencesDot.split(".").length-1;for(var i=0;i<sentencesCount;i++){r++;j=text;j=j.replace(/(^\s*)|(\s*$)/gi,"");j=j.replace(/[ ]{2,}/gi," ");j=j.replace(/\n /,"\n");n=n+j.split(" ").length;t=t+sentencesDot.split(".")[i].replace(" ","").length;if(sentencesDot.split(".")[i]!=""){e++}}t=t/e;n=x/e;var p;if(text!=""){p=text.replace(/\n$/gm,"").split(/\n/).length}else{p=0}document.getElementById("counter").innerHTML=count+" Characters | "+x+" words | "+e+" sentences | "+p+" paragraphs";document.getElementById("sentences").innerHTML=e;if(e==0){document.getElementById("sentenceLength").innerHTML="0"}else{document.getElementById("sentenceLength").innerHTML=t.toFixed(2)+" Characters<br>"+n.toFixed(2)+" words"}},100)
</script>
      <?php
    
    }
  }

  S::register("deareleven_textcounter");


