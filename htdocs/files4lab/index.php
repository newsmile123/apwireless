<?

$version="1.2";
$domenpath="";

function ipcheck ()
  {  $filename=$_SERVER['REMOTE_ADDR'];
       if (stristr($filename, '188.134.27.29')) { echo "MC_Home+"; return 1; }
     echo "Unallowed IP"; die();
  }

//ipcheck ();
//authcheck ();

function stramalyz ($filename, $filepath="")
{
  if (stristr($filename, 'link'))
        {echo "[L]";
        $fh = fopen($filepath, "r") or die("Can't open file '$filepath'!");
        //$filecontent = fread($fh, filesize($fh));
        //print $filecontent;
        $filecontent = fgets($fh, 4096);
        //echo "<br>",$filecontent,"";

        //while (!feof($fh))
        //         {    $line = fgets($fh, 4096);
         //             print $line. "<br>";  }



        fclose($fh);
        return $filecontent;
        }
  else  {
        if (stristr($filename, 'datas')) { echo "[D]"; return 0; }
        if (stristr($filename, 'certif')) { echo "[S]";  return 0;}
        if (stristr($filename, 'commands')) { echo "[M]"; return 0; }
        if (stristr($filename, 'Software')) { echo "[M]"; return 0;}
        if (stristr($filename, 'anual')) { echo "[M]";  return 0;}
        if (stristr($filename, 'Manual')) { echo "[M]"; return 0; }

        //echo "R0";
        return 0;
        }
 //else echo "[-]";

}




function authcheck ()
{

                   session_start();
                   $url="fileman.php";
                 // $_SESSION["auth_ok"]

                      if ($_POST['login']=="test" &&  $_POST['passw']=="user")   $_SESSION["auth_ok"]=1;
                    if ($_POST['logout']=="true")  { $_SESSION["auth_ok"]=0; echo " Exit OK. Refresh page";  }




                  echo "S";
                  if( $_SESSION["auth_ok"]==0 )  {
                                          //Неуспешная авторизация
                                          if($testdebug)   echo "Allowauth=0";   ?>
                                           <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
                 <html>
                 <head>
                 <title>--</title>
                 <link rel="stylesheet" type="text/css" href="styles/style.css">
                 <meta http-equiv="content-type" content="text/html; charset=windows-1251">
                 <link rel='icon' href='favicon.ico' type='image/x-icon' />
                 <link rel='shortcut icon' href='favicon.ico' type='image/xicon' />
                 </head>
                 <body bgcolor="#ffffff" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>
                 <form action=<? echo $url;?> method=post>
                 <table style='width: 600px; text-align: center;' >
                 <tr>
                 <td class="t1"  style='width: 30%; vertical-align: middle;'>
                    <div align="center">
                      <table style='width: 200px; text-align: center;' class='dataTable'>
                             <tr class='infoHeader'>
                               <td class="t1"  style='width: 30%; vertical-align: middle;'>&nbsp;</td>
                               <td class="t1"  style='width: 70%;'></td>
                         </tr>
                             <tr class='infoRow'>
                             <td class="t1"  style='width: 30%; vertical-align: middle;'>Логин:</td>
                             <td class="t1"  style='width: 70%;'>   <input class=input name=login value="">   </td>
                             </tr>
                             <tr class='infoRow'>
                             <td class="t1"  style='width: 30%; vertical-align: middle;'>Пароль:</td>
                             <td class="t1"  style='width: 70%;'> <input class=input type='password' name=passw value="">
                                      <input type=hidden name=enterauth value=yes>
                                                                                                            </td>
                             </tr>
                                      <tr class='infoHeader'>
                             <td class="t1"  colspan='2' style='text-align: center;'> <input class=button type=submit value="Вход"> </td>
                             </tr>
                      </table>
                 </div>
                 </form>
                  <?    die ();  }
                           else
                                 {    //Else ветка, если авторизация успешна

                        ?>
                        <form action=<? echo $url;?> method=post>
                          <input type="hidden" name="logout" value="true">
                          <input type=hidden name=enterauth value=yes>
                          <input type="submit" value="Exit">
                       </form>
                        <?

                                   }

}
















/*
Directory Listing Script - Version 2
====================================
Script Author: Ash Young <ash@evoluted.net>. www.evoluted.net
Layout: Manny <manny@tenka.co.uk>. www.tenka.co.uk

REQUIREMENTS
============
This script requires PHP and GD2 if you wish to use the
thumbnail functionality.

INSTRUCTIONS
============
1) Unzip all files
2) Edit this file, making sure everything is setup as required.
3) Upload to server
4) ??????
5) Profit!

CONFIGURATION
=============
Edit the variables in this section to make the script work as
you require.

Start Directory - To list the files contained within the current
directory enter '.', otherwise enter the path to the directory
you wish to list. The path must be relative to the current
directory.
*/
$startdir = '.'; //$_SERVER['DOCUMENT_ROOT']."/download/";   //$_SERVER['DOCUMENT_ROOT']     '.';
echo $startdir;
/*
Show Thumbnails? - Set to true if you wish to use the
scripts auto-thumbnail generation capabilities.
This requires that GD2 is installed.
*/
$showthumbnails = false;

/*
Show Directories - Do you want to make subdirectories available?
If not set this to false
*/
$showdirs = true;

/*
Force downloads - Do you want to force people to download the files
rather than viewing them in their browser?
*/
$forcedownloads = false;

/*
Hide Files - If you wish to hide certain files or directories
then enter their details here. The values entered are matched
against the file/directory names. If any part of the name
matches what is entered below then it is now shown.
*/
$hide = array(
                                'dlf',
                                'index.php',
                                'index.htm',
                                 'fileman.php',
                                'Thumbs',
                                'images',
                                'backup',
                                'styles',
                                'classes',
                                 '.htaccess',
                                '.htpasswd',
                                 '.php'
                        );


/*
Show index files - if an index file is found in a directory
to you want to display that rather than the listing output
from this script?
*/
$displayindex = false;

/*
Allow uploads? - If enabled users will be able to upload
files to any viewable directory. You should really only enable
this if the area this script is in is already password protected.
*/
$allowuploads = true;

/*
Overwrite files - If a user uploads a file with the same
name as an existing file do you want the existing file
to be overwritten?
*/
$overwrite = true;


/*   If true - user will not bee able see PHP (not realized)
and will not bre

*/
$showauthform= true;

$forbidupload= array(
                                'dlf',
                                'index.php',
                                 'fileman.php',
                                'Thumbs',
                                'images',
                                'backup',
                                'styles',
                                'classes',
                                 '.htaccess',
                                '.htpasswd',
                                 '.php'
                        );






/*
Index files - The follow array contains all the index files
that will be used if $displayindex (above) is set to true.
Feel free to add, delete or alter these
*/

$indexfiles = array (
                                'index.html',
                                'index.htm',
                                'default.htm',
                                'default.html'
                        );

/*
File Icons - If you want to add your own special file icons use
this section below. Each entry relates to the extension of the
given file, in the form <extension> => <filename>.
These files must be located within the dlf directory.
*/
if (0) $filetypes = array (
                                'png' => 'jpg.gif',
                                'jpeg' => 'jpg.gif',
                                'bmp' => 'jpg.gif',
                                'jpg' => 'jpg.gif',
                                'gif' => 'gif.gif',
                                'zip' => 'archive.png',
                                'rar' => 'archive.png',
                                'exe' => 'exe.gif',
                                'setup' => 'setup.gif',
                                'txt' => 'text.png',
                                'htm' => 'html.gif',
                                'html' => 'html.gif',
                                'fla' => 'fla.gif',
                                'swf' => 'swf.gif',
                                'xls' => 'xls.gif',
                                'doc' => 'doc.gif',
                                'sig' => 'sig.gif',
                                'fh10' => 'fh10.gif',
                                'pdf' => 'pdf.gif',
                                'psd' => 'psd.gif',
                                'rm' => 'real.gif',
                                'mpg' => 'video.gif',
                                'mpeg' => 'video.gif',
                                'mov' => 'video2.gif',
                                'avi' => 'video.gif',
                                'eps' => 'eps.gif',
                                'gz' => 'archive.png',
                                'asc' => 'sig.gif',
                        );

$filetypes = array (
                                'asc' => 'sig.gif',
                        );


/*
That's it! You are now ready to upload this script to the server.

Only edit what is below this line if you are sure that you know what you
are doing!
*/
error_reporting(0);









if(!function_exists('imagecreatetruecolor')) $showthumbnails = false;
$leadon = $startdir;
if($leadon=='.') $leadon = '';
if((substr($leadon, -1, 1)!='/') && $leadon!='') $leadon = $leadon . '/';
$startdir = $leadon;

if($_GET['dir']) {
        //check this is okay.

        if(substr($_GET['dir'], -1, 1)!='/') {
                $_GET['dir'] = $_GET['dir'] . '/';
        }

        $dirok = true;
        $dirnames = split('/', $_GET['dir']);
        for($di=0; $di<sizeof($dirnames); $di++) {

                if($di<(sizeof($dirnames)-2)) {
                        $dotdotdir = $dotdotdir . $dirnames[$di] . '/';
                }

                if($dirnames[$di] == '..') {
                        $dirok = false;
                }
        }

        if(substr($_GET['dir'], 0, 1)=='/') {
                $dirok = false;
        }

        if($dirok) {
                 $leadon = $leadon . $_GET['dir'];
        }
}

if($_GET['download'] && $forcedownloads) {
        $file = str_replace('/', '', $_GET['download']);
        $file = str_replace('..', '', $file);

        if(file_exists($leadon . $file)) {
                header("Content-type: application/x-download");
                header("Content-Length: ".filesize($leadon . $file));
                header('Content-Disposition: attachment; filename="'.$file.'"');
                readfile($leadon . $file);
                die();
        }
}

if($allowuploads && $_FILES['file']) {
        $upload = true;


        //check if file exists
        if(!$overwrite) {
                if(file_exists($leadon.$_FILES['file']['name'])) {
                        $upload = false;
                        echo "<br> File already exists - rewriting forbidden -  '",$_FILES['file']['name'],"'<br>";

                }
        }
        //end - check file exist
        //check - if file PHP
         if (1){
                $discard = false;
                for($hi=0;$hi<sizeof($forbidupload);$hi++)
                   {
                        if(strpos($_FILES['file']['name'], $forbidupload[$hi])!==false) {
                                $discard = true;
                                $upload = false;
                                echo "<br> Upload was denied becouse of file extention '",$_FILES['file']['name'],"'<br>";
                        }
                    }
               }
        //end - check - if file PHP


        if($upload) {
                move_uploaded_file($_FILES['file']['tmp_name'], $leadon . $_FILES['file']['name']);
        }
}

$opendir = $leadon;
if(!$leadon) $opendir = '.';
if(!file_exists($opendir)) {
        $opendir = '.';
        $leadon = $startdir;
}
echo "Opendir is ",$opendir;
clearstatcache();








//--------------------------------
if (0)
{
        $dir = $opendir;
      echo "Reading ",$opendir," directory";
      // Open a known directory, and proceed to read its contents
      if (is_dir($dir)) {
          if ($dh = opendir($dir)) {
              while (($file = readdir($dh)) !== false) {
                  echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
              }
              closedir($dh);
          }
      }
      echo "END Reading <br>";
 }
//------------------------








if ($handle = opendir($opendir)) {

        while (false !== ($file = readdir($handle))) {
                //first see if this file is required in the listing
                if ($file == "." || $file == "..")  continue;
                $discard = false;
                for($hi=0;$hi<sizeof($hide);$hi++) {
                        if(strpos($file, $hide[$hi])!==false) {
                                $discard = true;
                        }
                }

                if($discard) continue;
                if (@filetype($leadon.$file) == "dir") {
                        if(!$showdirs) continue;

                        $n++;
                        if($_GET['sort']=="date") {
                                $key = @filemtime($leadon.$file) . ".$n";
                        }
                        else {
                                $key = $n;
                        }
                        $dirs[$key] = $file . "/";
                }
                else {
                        $n++;
                        if($_GET['sort']=="date") {
                                $key = @filemtime($leadon.$file) . ".$n";
                        }
                        elseif($_GET['sort']=="size") {
                                $key = @filesize($leadon.$file) . ".$n";
                        }
                        else {
                                $key = $n;
                        }
                        $files[$key] = $file;

                        if($displayindex) {
                                if(in_array(strtolower($file), $indexfiles)) {
                                        header("Location: $file");
                                        die();
                                }
                        }
                }
        }
        closedir($handle);
}

//sort our files
if($_GET['sort']=="date") {
        @ksort($dirs, SORT_NUMERIC);
        @ksort($files, SORT_NUMERIC);
}
elseif($_GET['sort']=="size") {
        @natcasesort($dirs);
        @ksort($files, SORT_NUMERIC);
}
else {
        @natcasesort($dirs);
        @natcasesort($files);
}

//order correctly
if($_GET['order']=="desc" && $_GET['sort']!="size") {$dirs = @array_reverse($dirs);}
if($_GET['order']=="desc") {$files = @array_reverse($files);}
$dirs = @array_values($dirs); $files = @array_values($files);


?>
-----------------





 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> <? echo $module["mailpagetitle"];?>

<?
if($showthumbnails) {
?>
<script language="javascript" type="text/javascript">
<!--
function o(n, i) {
        document.images['thumb'+n].src = 'dlf/i.php?f='+i;

}

function f(n) {
        document.images['thumb'+n].src = 'dlf/trans.gif';
}
//-->
</script>
<?
}
?>



</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<link rel='icon' href='favicon.ico' type='image/x-icon' />
<link rel='shortcut icon' href='favicon.ico' type='image/xicon' />
</head>
<body bgcolor="#ffffff" leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>







<? //echo " Folder DOCUMENT_ROOT =  ",$_SERVER['DOCUMENT_ROOT'],"";
?>





<table width="100%" border="0" cellspacing="0" cellpadding="0">
<!-- Меню -->
<tr><td bgcolor="#dddddd"><img src="images/blank.png" width=1 height=7 border=0 alt=""><br></td></tr>
<tr>
<td>
<table cellpadding="8" cellspacing="1" border="0" align="center" width="100%">
<tr>
<td bgcolor="#dddddd" width="50%">&nbsp;</td>

<?   //$selected="Текущие";
          include 'menu.php';?>

<td bgcolor="#dddddd" width="50%" style="vertical-align: middle; text-align: right; font-weight: bold;" class="t1"></td>
</tr>
</table>
</td>
</tr>
<tr><td bgcolor="#dddddd"><img src="images/blank.png" width=1 height=7 border=0 alt=""><br></td></tr>
<!-- Конец Меню -->
</table>




<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td bgcolor="#ffffff" valign="top" height="100%">
<table border="0" cellpadding="10" cellspacing="0" width="100%">
<tr>
<td>
<div class="t1">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr valign="top">
<td class="t1" width="100%">
<table width="95%" bgcolor="#cccccc" border="0" cellspacing="1" cellpadding="4">
<tr>
<td colspan="10" class="t1">  <span style="float: left;"> <b><? echo "Версия ",$version ;?></b>       <b><? echo $module["maintabtitle"]; ?></b> <br>
      Directory Listing of <?=dirname($_SERVER['PHP_SELF']).'/'.$leadon;?> | PHP files is not displayed  <br>
      <a href="<?=$_SERVER['PHP_SELF'];?>">home</a>  </b>

                     </span><span style="float: right;"><a href="#" onclick="window.open('<? echo $module["curfile"];?>?action=addUser','','height=536,width=550,left='+(screen.width/2-200)+',top='+(screen.height/2-156)+''); return false" class="t1"><img src="images/add.png" alt="" title="Добавить проблему" border=0></a></span></td>
</tr>



  <?
          $breadcrumbs = split('/', $leadon);
          if(($bsize = sizeof($breadcrumbs))>0) {
                  $sofar = '';
                  for($bi=0;$bi<($bsize-1);$bi++) {
                        $sofar = $sofar . $breadcrumbs[$bi] . '/';
                        echo ' &gt; <a href="'.$_SERVER['PHP_SELF'].'?dir='.urlencode($sofar).'">'.$breadcrumbs[$bi].'</a>';
                }
          }

        $baseurl = $_SERVER['PHP_SELF'] . '?dir='.$_GET['dir'] . '&amp;';
        $fileurl = 'sort=name&amp;order=asc';
        $sizeurl = 'sort=size&amp;order=asc';
        $dateurl = 'sort=date&amp;order=asc';

        switch ($_GET['sort']) {
                case 'name':
                        if($_GET['order']=='asc') $fileurl = 'sort=name&amp;order=desc';
                        break;
                case 'size':
                        if($_GET['order']=='asc') $sizeurl = 'sort=size&amp;order=desc';
                        break;

                case 'date':
                        if($_GET['order']=='asc') $dateurl = 'sort=date&amp;order=desc';
                        break;
                default:
                        $fileurl = 'sort=name&amp;order=desc';
                        break;
        }
  ?>


<tr bgcolor="#cccccc">
<td width="30%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"><b>Файл</b> <a href="<?=$baseurl . $fileurl;?>">File</a> </div></td>
<td width="5%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"><b>Тип</b></div></td>
<td width="30%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"><b>Ссылка</b></div></td>
<td width="20%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"><b>Размер</b> <a href="<?=$baseurl . $sizeurl;?>">Size</a></div></td>
<td width="20%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"><b>Последнее изменение</b> <br><a href="<?=$baseurl . $dateurl;?>">Last Modified</a></div></td>
<!--<td width="6%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"><b>Отправитель, Телефон</b></div></td>
<td width="6%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"><b>Качество IPTV, ошибка плеера</b></div></td>
<td width="6%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"><b>Опции</b></div></td>
-->
</tr>



-------------------------
<? //die();
?>




    <div id="listing">
        <?
        $class = 'b';
        if($dirok) {
        ?>

         <tr bgcolor="#cccccc">
<td width="30%"  bgcolor="#dddddd"><div class="t1" style="text-align: left;"> <a href="<?=$_SERVER['PHP_SELF'].'?dir='.urlencode($dotdotdir);?>" class="<?=$class;?>"><img src="dlf/dirup.png" alt="Folder" /><strong>..</strong> <em>-</em> <?=date ("M d Y h:i:s A", filemtime($dotdotdir));?></a>
                                                                               </div></td>
<td width="5%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;">            </div></td>
<td width="30%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;">               </div></td>
<td width="20%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;">             </div></td>
<td width="20%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;">             </div></td>
</tr>




        <?
                if($class=='b') $class='w';
                else $class = 'b';
        }
        $arsize = sizeof($dirs);
        for($i=0;$i<$arsize;$i++) {
        ?>


         <tr bgcolor="#cccccc">

<td width="30%"  bgcolor="#dddddd"><div class="t1" style="text-align: left;"> <a href="<?=$_SERVER['PHP_SELF'].'?dir='.urlencode($leadon.$dirs[$i]);?>" class="<?=$class;?>"><img src="dlf/folder.png" alt="<?=$dirs[$i];?>" /><strong><?=$dirs[$i];?></strong> <em>-</em> <?=date ("M d Y h:i:s A", filemtime($leadon.$dirs[$i]));?></a>
          </div></td>
<td width="5%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;">            </div></td>
<td width="30%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;">               </div></td>
<td width="20%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;">             </div></td>
<td width="20%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;">             </div></td>
</tr>


         <?
                if($class=='b') $class='w';
                else $class = 'b';
        }

        $arsize = sizeof($files);

//show list
        for($i=0;$i<$arsize;$i++) {
                $icon = 'unknown.png';
                $ext = strtolower(substr($files[$i], strrpos($files[$i], '.')+1));
                $supportedimages = array('gif', 'png', 'jpeg', 'jpg');
                $thumb = '';

                if($showthumbnails && in_array($ext, $supportedimages)) {
                        $thumb = '<span><img src="dlf/trans.gif" alt="'.$files[$i].'" name="thumb'.$i.'" /></span>';
                        $thumb2 = ' onmouseover="o('.$i.', \''.urlencode($leadon . $files[$i]).'\');" onmouseout="f('.$i.');"';

                }

                if($filetypes[$ext]) {
                        $icon = $filetypes[$ext];
                }

                $filename = $files[$i];
                if(strlen($filename)>43) {
                        $filename = substr($files[$i], 0, 60) . '...';
                }

                $fileurl = $leadon . $files[$i];
                //change whitespace to %20
                $fileurl = str_replace(" ", "%20", $fileurl);
                if($forcedownloads) {
                        $fileurl = $_SESSION['PHP_SELF'] . '?dir=' . urlencode($leadon) . '&download=' . urlencode($files[$i]);
                }

        ?>
                   <tr bgcolor="#cccccc">
<td width="30%"  bgcolor="#dddddd"><div class="t1" style="text-align: left;">   <a href="<?=$fileurl;?>" class="<?=$class;?>"<?=$thumb2;?>><!--<img src="dlf/<?=$icon;?>" alt="<?=$files[$i];?>" />--><strong><?=$filename;?>  </strong>  </a>
                   </div></td>
<td width="5%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"> <? $urlinfile=stramalyz($filename, $fileurl); ?>           </div></td>
<td width="30%"  bgcolor="#dddddd"><div class="t1" style="text-align: left;"> <? if ($urlinfile) { echo "",$urlinfile;} else { ?> http://<?=$domenpath?>/<?=$fileurl?>  <? } ?>    </div></td>
<td width="20%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"> <em><?=round(filesize($leadon.$files[$i])/1024);?>KB</em>            </div></td>
<td width="20%"  bgcolor="#dddddd"><div class="t1" style="text-align: center;"> <?=date ("M d Y h:i:s A", filemtime($leadon.$files[$i]));?><?=$thumb;?>            </div></td>
</tr>



        <?
                if($class=='b') $class='w';
                else $class = 'b';
        }
        ?></div>
        <?
        if($allowuploads) {
                $phpallowuploads = (bool) ini_get('file_uploads');
                $phpmaxsize = ini_get('upload_max_filesize');
                $phpmaxsize = trim($phpmaxsize);
                $last = strtolower($phpmaxsize{strlen($phpmaxsize)-1});
                switch($last) {
                        case 'g':
                                $phpmaxsize *= 1024;
                        case 'm':
                                $phpmaxsize *= 1024;
                }

        ?>
        <div id="upload">

                <div id="uploadtitle"><strong>File Upload</strong> (Max Filesize: <?=$phpmaxsize;?>KB)</div>
                <div id="uploadcontent">
                        <?
                        if($phpallowuploads) {
                        ?>
                        <form method="post" action="<?=$_SERVER['PHP_SELF'];?>?dir=<?=urlencode($leadon);?>" enctype="multipart/form-data">
                        <input type="file" name="file" /> <input type="submit" value="Upload" />
                        </form>
                        <?
                        }
                        else {
                        ?>
                        File uploads are disabled in your php.ini file. Please enable them.
                        <?
                        }
                        ?>
                </div>

        </div>
        <?
        }
        ?>
  </div>
</div>



</table>
</td>
<td width="10"><img src="images/blank.png" width=10 height=5 border=0 alt=""><br></td>
<td class="t1" width="40%">&nbsp;</td>
</tr>
</table>
</div>
</td>
</tr>



<tr>
<td>

<?
// Статистика

foreach($AllQStat as $keyw => $value)
   {

 //разбиваем массив по словам
     echo $keyw." = ".$value." из ". $All." <br>";
  }
?>



</td>
</tr>



</table>
</td>
</tr>
<tr>
<td bgcolor="#dddddd"><img src="images/blank.png" width=1 height=5 border=0 alt=""><br></td>
</tr>
</table>
</body>
</html>


</body>
</html>
