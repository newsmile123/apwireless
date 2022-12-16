
        	<table border="0" cellpadding="4" style="border-collapse:collapse;">
                    <div align="center">
                                        <?php
                                        include ("up.php");
                                        ?>
                                    </div>
        			<tr>
			  			<td class="bottomline" align="right" valign="top">
                        <a href="#" class="showTip pmk">PMK</a> = <input name="pmk1" id="pmk1" size="49px" required="required">
          				</td>
                        <td ></td>
                        <td class="leftline"></td>
      					<td></td>
                        <td class="rightline"></td>
                        <td></td>
      					<td class="bottomline" valign="top">
                        <a href="#" class="showTip pmk">PMK</a> = <input name="pmk2" id="pmk2" size="49px" required="required">
                        </td></tr>
                  
    				<tr>
    					<td class="bottomline"></td>
                        <td></td>
                        <td class="leftline"></td>
      					<td class="bottomline">
                        <div id="mess1_hidden">
                        	<div id="mess1_success1" align="center">Сообщение успешно передано!</div>
                            <div id="mess1_success2" align="center">Сообщение успешно передано, однако, парный мастер-ключ на стороне клиента не рассчитан или введен неверно.</div>
                        	<div id="arrow1">
                            	<div id="left1"></div>
                                <div id="right1"></div>
                            </div>
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
                        								<tr><td align="center" colspan="2" width="360px"><a href="#" class="showTip anonce1">ANonce</a> = <input name="anonce" id="anonce" size="40px" required="required"></td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> EAPoL Key IV (16 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Key Recieve Sequence Counter (8 bytes)</td></tr>
                       						 			<tr><td align="center" colspan="2" width="360px"> Key Identifier (8 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Key <a href="#" class="showTip mic">MIC</a> (16 bytes)</td></tr>
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
