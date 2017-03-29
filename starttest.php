<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>startquiz</title>
<link href="css/header.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/chicle:n4:default.js" type="text/javascript"></script>
</head>

<body>
<?php include "header.php"; ?>
<main class="start">
                <div class="startimg">
       		   		   <a href="sampletests.php">	 <img class="imgstart" src="img/play.png" width="256" height="256" alt=""/></a> 
                </div>
  <div class="content">
    <table " class="infotable">
      <tbody>          <tr> 
						 <td >Select The Number Of Questions</td>
                        <td  scope="row">
							<select name="countque" id="countque">
								<option>10</option>
								<option>15</option>
								<option>20</option>
								<option>25</option>
							</select>
						</td>
                       
                      </tr>
                      <tr>
                        <td  scope="row"><img src="img/time.png"  alt="" class="startimg"/></td>
                        <td >Time Limit is 2 minutes </td>
                      </tr>
                      <tr>
                        <td scope="row"><img src="img/compulsory.jpg" class="startimg" alt=""/></td>
                        <td>All Question are compulsary</td>
                      </tr>
                      <tr>
                        <td scope="row"><img src="img/refresh.png"class="startimg" alt=""/></td>
                        <td >Donot refresh page until you finish</td>
                      </tr>
                       <tr>
                        <td scope="row"><img src="img/question.jpg" class="startimg" alt=""/></td>
                        <td >Total number of questions are 10 </td>
                      </tr>
                    </tbody>
                  </table>
  </div>

</main>
</body>
</html>
