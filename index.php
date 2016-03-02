<html>

  <head>

    <title>LikeBot Ultra - best facebook liker</title>

  </head>



  <body bgcolor="lavender" style="font-family:arial;color:black;margin-top:0px;margin-right:0px;margin-left:0px;">



    <div id="topbar" style="background:blue;color:white;height:80px;width:100%;valign:middle;padding:0;">



      <center>

	<font size="42" face="dejavu sans">

		LikeBot Ultra

	</font><br>

	<font size="3" face="dejavu sans" color="yellow">

		Best free facebook autoliker 

	</font>

	<!-- <sub><font color="yellow">version 0.1 BETA</font></sub> -->

      </center>



    </div><br>



    <center>

	<div id="spacer" style="height:100px;width:70%">

		<center>

			<font face="dejavu sans" color="blue">

				<?php
					$random = fopen("random_para.txt", "r");
					$content = fread($random, filesize("random_para.txt"));
					echo $content;
				>
			</font>

		</center>

	</div><br>

    </center>



    <center>

      <div id="form_container" style="height:275px;width:450px;border:2px solid blue;border-radius:5px;">

        <p align="left"><font size="42" face="dejavu sans">&nbsp;&nbsp;Get Likes</font></p>

        <center>

          <hr color="grey" align="center" width="400px">

          <br>



          <form method="post" action="showinfo.php">

            <table>

              <tr>

                <td><font face="dejavu sans">Username</font></td>

                <td><input type="text" name="user" style="height:25px;width:300px;border:1px solid black;border-radius:2px;" /></td>

              </tr>

              <tr>

                <td><font face="dejavu sans">Password</font></td>

                <td><input type="password" name="pass" style="height:25px;width:300px;border:1px solid black;border-radius:2px;" /></td>

              </tr>

              <tr>

                <td><font face="dejavu sans">Link to post</font></td>

                <td><input type="text" name="linktolike" style="height:25px;width:300px;border:1px solid black;border-radius:2px;" /></td></td></tr>

            </table>

            <br>

            <input type="submit" value="Get Likes!" style="background:blue;color:white;height:25px;width:100px;border:1px solid blue;border-radius:2px;" />

          </form>



      </center>

      </div>

  </center>



  </body>

</html>
