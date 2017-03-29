<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>
            sample quiz code
        </title>
<style type="text/css">
</style>
    </head>
    <body>
<?php
print '<form action="display_code_2.php" method="post">';
//BEGINNING OF QUESTION ONE 
print '<p>(1) The capital of Egypt is</p>';
if ($_POST['answer1']=="a")
print '<input type="radio" checked="checked" name="answer1" value="a"/>Alexandria<br/>';
else
print '<p><input type="radio" name="answer1" value="a"/>Alexandria<br/>';
if ($_POST['answer1']=="b")
print '<input type="radio" checked="checked" name="answer1" value="b"/>Nairobi<br/>';
else
print '<input type="radio" name="answer1" value="b"/>Nairobi<br/>';
if ($_POST['answer1']=="c")
print '<input type="radio" checked="checked" name="answer1" value="c"/>Mombasa<br/>';
else
print '<input type="radio" name="answer1" value="c"/>Mombasa<br/>';
if ($_POST['answer1']=="d"){
print '<input type="radio" checked="checked" name="answer1" value="d"/>Cairo<br/>';
$correct++;
}
else
print '<input type="radio" name="answer1" value="d"/>Cairo<br/></p>';
print '<p>(2) The capital of Honduras is</p>';
if ($_POST['answer2']=="a"){
print '<p><input type="radio" checked="checked" name="answer2" value="a"/>Tegucigalpa<br/>';
$correct++;
}
else
print '<p><input type="radio" name="answer2" value="a"/>Tegucigalpa<br/>';
if ($_POST['answer2']=="b")
print '<input type="radio" checked="checked" name="answer2" value="b"/>San Salvador<br/>';
else
print '<input type="radio" name="answer2" value="b"/>San Salvador<br/>';
if ($_POST['answer2']=="c")
print '<input type="radio" checked="checked" name="answer2" value="c"/>Belmopan<br/>';
else
print '<input type="radio" name="answer2" value="c"/>Belmopan<br/>';
if ($_POST['answer2']=="d")
print '<input type="radio" checked="checked" name="answer2" value="d"/>Mazatenango<br/>';
else
print '<input type="radio" name="answer2" value="d"/>Mazatenango<br/><br/></p>';
print '<p>(3) The capital of Cambodia is</p>';
if ($_POST['answer3']=="a")
print '<input type="radio" checked="checked" name="answer3" value="a"/>Kuala Lumpur<br/>';
else
print '<input type="radio" name="answer3" value="a"/>Kuala Lumpur<br/>';
if ($_POST['answer3']=="b"){
print '<input type="radio" checked="checked" name="answer3" value="b"/>Phnom Penh<br>';
$correct++;
}
else
print '<input type="radio" name="answer3" value="b"/>Phnom Penh<br/>';
if ($_POST['answer3']=="c")
print '<input type="radio" checked="checked" name="answer3" value="c"/>Bangkok<br/>';
else
print '<input type="radio" name="answer3" value="c"/>Bangkok<br/>';
if ($_POST['answer3']=="d")
print '<input type="radio" checked="checked" name="answer3" value="d"/>Saigon<br/><br/>';
else
print '<input type="radio" name="answer3" value="d"/>Saigon<br/><br/>';
foreach ($_POST as $value){
if (isset ($value)){
$done++;
}
}
if ($done !=4)
print '<input type="submit" name="submit" value="check answers" /><br/><br/>';
if (($done > 0)&&($done < 4))
print 'You haven&#8217;t answered all the questions. Please finish the quiz and re-submit your answers.';
if($done==4){
if ($correct==0)
$correct="0";
print "Your score is $correct/3.<br/><br/>";
print 'The correct answers: (1) Cairo&nbsp;&nbsp; (2) Tegucigalpa&nbsp;&nbsp; (3) Phnom Penh';
}
print '</form>';
?>
    </body>
</html>