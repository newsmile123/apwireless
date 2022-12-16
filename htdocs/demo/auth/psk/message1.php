
        	<table border="0" cellpadding="4" style="border-collapse:collapse;">
                    <div align="center">
                                        <?php
                                        include ("up.php");
                                        ?>
                                    </div>
        			<tr>
			  			<td class="bottomline" align="right" valign="top">
                        PMK = <input type="text" name="pmk1" id="pmk1" size="49px" value="<?=(isset($_SESSION['demo']["pmk"])?$_SESSION['demo']["pmk"]:'')?>">
          				</td>
                        <td ></td>
                        <td class="leftline"></td>
      					<td></td>
                        <td class="rightline"></td>
                        <td></td>
      					<td class="bottomline" valign="top">
                        PMK = <input type="text" name="pmk2" id="pmk2" size="49px" value="<?=(isset($_SESSION['demo']["pmk"])?$_SESSION['demo']["pmk"]:'')?>">
                        </td></tr>
                  
    				<tr>
    					<td class="bottomline"></td>
                        <td></td>
                        <td class="leftline"></td>
      					<td class="bottomline">
                        	<div id="success1" align="center">Сообщение успешно передано!</div>
                        	<div id="arrow1">
                            	<div id="left1"></div>
                                <div id="right1"></div>
                            </div>
                        </td>
                        <td class="rightline"></td>
                        <td></td>
    	<td class="bottomline">
            <div class="glass">
    		<table border="0" cellpadding="3" style="border-collapse:collapse;" align="center">
    			<tbody style="font-size:10px; font: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">
       			  <td align="left">Radiotap
            			<table border="1" cellpadding="3" style="border-collapse:collapse;">
            				<td align="left">IEEE 802.1x Header
                    			<table border="1" cellpadding="3" style="border-collapse:collapse;">
            						<td align="left">Logical-Link Control Header
                    					<table border="1" cellpadding="3" style="border-collapse:collapse;">
            								<td align="left">EAPoL 117 bytes
                    							<table border="1" cellpadding="1" style="border-collapse:collapse;">
                    								<tr><td align="center" colspan="2" width="360px"> Descryptor type (1 byte)</td></tr>
                        								<tr><td align="center" width="50%"> Key Info (2 bytes)</td>
                        									<td align="center" width="50%"> Key length (2 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Replay Counter (8 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px">ANonce = <input type="text" name="anonce" id="anonce" size="40px" value="<?=(isset($_SESSION['demo']["anonce"])?$_SESSION['demo']["anonce"]:'')?>"></td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> EAPoL Key IV (16 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Key Recieve Sequence Counter (8 bytes)</td></tr>
                       						 			<tr><td align="center" colspan="2" width="360px"> Key Identifier (8 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Key MIC (16 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Replay Counter (8 bytes)</td></tr>
                        								<tr><td align="center" width="50%"> Key Data Len (2 bytes)</td>
                        									<td align="center" width="50%"> Key Data (2 bytes)</td> </tr>
                    						
                    							</table>
                                           </td>
                    					</table>
                    				</td>
                                </table>
                    		</td>
            		</td>
            </tbody>
            </table>
            
    </tbody>
  </table>
  </div>
  </tr>
  </table>
