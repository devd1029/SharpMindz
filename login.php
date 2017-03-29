<input type="button" value="close" onclick="f1(1)">
								<p>hello</p>
								<td valign="top"><form name="form1" method="post" action="">
						  <table width="200" border="0">
							<tr>
							  <td><span class="style2">Login ID </span></td>
							  <td><input name="loginid" type="text" id="loginid2"></td>
							</tr>
							<tr>
							  <td><span class="style2">Password</span></td>
							  <td><input name="pass" type="password" id="pass2"></td>
							</tr>
							<tr>
							  <td colspan="2"><span class="errors">
								<?php
							  if(isset($found))
							  {
								echo "Invalid Username or Password";
							  }
							  ?>
							  </span></td>
							  </tr>
							<tr>
							  <td colspan=2 align="center" class="errors">
							  <input name="submit" type="submit" id="submit" value="Login">		  </td>
							</tr>
							<tr>
							  <td colspan="2" bgcolor="#CC3300"><div align="center"><span class="style4">New User ? <a href="signup.php">Signup hear</a></span></div></td>
							   <td colspan="2" bgcolor="#CC3300"><div align="center"><span class="style4">Forgot Password ? <a href="forgotpassword.php">Click hear</a></span></div></td>
							
							  </tr>
						  </table>
						  <div align="center">
							<p class="style5"><img src="images/topleft.jpg" width="134" height="128">          </p>
							</div>
						</form></td>
					  </tr>
					</table>