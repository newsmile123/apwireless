
        	<table border="0" cellpadding="4" style="border-collapse:collapse;">
                    <div align="center">
                                        <?php
                                        include ("up.php");
                                        ?>
                                    </div>
        			<tr>
			  			<td></td>
      					<td ></td>
                        <td class="leftline"></td>
      					<td></td>
                        <td class="rightline"></td>
                        <td></td>
      					<td class="bottomline" valign="top"><a id="3">
                        <a href="#" class="showTip ptk">PTK</a> = <input name="ptk3" id="ptk3" size="48px" required="required">
                        </td>
                   
    				</tr>
    				<tr>
    					<td class="bottomline"></td>
    					<td ></td>
                        <td class="leftline"></td>
      					<td class="bottomline">
                        <div id="mess3_hidden">
                        <div id="mess3_success1" align="center">Сообщение успешно передано!</div>
                        	<div id="arrow3">
                            	<div id="left3"></div>
                                <div id="right3"></div>
                            </div>
                            </div>
                        </td>
                        <td class="rightline"></td>
                        <td></td>
    	<td class="bottomline"><div class="glass">
    		<table border="1" cellpadding="3" style="border-collapse:collapse;" align="center">
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
                        								<tr><td align="left" colspan="2" width="360px"><a href="#" class="showTip anonce3">Anonce</a> = <input name="anonce3" id="snonce3" size="39px" required="required"></td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> EAPoL Key IV (16 bytes)</td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Key Recieve Sequence Counter (8 bytes)</td></tr>
                       						 			<tr><td align="center" colspan="2" width="360px"> Key Identifier (8 bytes)</td></tr>
                        								<tr><td align="left" colspan="2" width="360px">MIC = <input name="mic3" id="mic3" size="40px" required="required"></td></tr>
                        								<tr><td align="center" colspan="2" width="360px"> Replay Counter (8 bytes)</td></tr>
                        								<tr><td align="center" width="50%"> Key Data Len(2 bytes)</td>
                        									<td align="center" width="50%"> Key Data(2 bytes)</td> </tr>
                    						
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