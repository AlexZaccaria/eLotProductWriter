<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      <title>Falce di Luna || <?php echo $tipologia ?></title>
      <style type="text/css">
         body {
         background-color: #000000;
         margin-top: 0px;
         margin-bottom: 0px;
         }
         body,td,th {
         font-family: verdana;
         font-size: 12px;
         color: #4d7098;
         }
         a:link {
         color: #9999FF;
         }
         a {
         font-size: 9px;
         }
         a:visited {
         color: #9999FF;
         }
         a:hover {
         color: #9999FF;
         }
         a:active {
         color: #9999FF;
         }
      </style>
      <?php if ($debug) : ?>
      <script>
         function update(name, value, mode)
         {
            console.log(name);
            name = name + "debug";
            
            if (mode === 1)
               document.getElementById(name).innerHTML = value;
            else
               document.getElementById(name).src = "/v2/prodotti/"+value;
         }
      </script>
      <?php endif; ?>
   </head>
   <body>
      <?php
         if ($debug)
         { echo ("<form action='/v2/writer.php?t=t001' method='post'>"); }
      ?>
      <div align="center">
         <blockquote>
            <blockquote>
               <table border="0" width="90%">
                  <tbody>
                     <tr>
                        <td align="center"><img src="/v2/statics/t001/top.jpg" alt="" height="266" width="850"></td>
                     </tr>
                     <tr>
                        <td align="center">
                           <p style="font-family: Lucida Handwriting; text-align: center;"><big><big><big><span style="font-style: italic;"><br>
                              <?php if (empty($datalot)) : ?>
                                 <span id='datalotdebug'>Anno ??? - Mese ?° - Giorno ??°</span><br>
                                 <input size=35 type='text' name='datalot' onkeyup='update(this.name, this.value, 1)' value='Inserisci una data lottiana qui'>
                              <?php else : ?>
                                 <?php echo $datalot; ?>
                              <?php endif; ?>
                              </span><br style="font-style: italic;">
                              <span style="font-style: italic;"><br>
                              </span></big></big></big>
                           </p>
                           <p style="font-family: Lucida Handwriting; text-align: center;"><big><big><big><span style="font-style: italic;"></span></big></big></big><big><big><big><big><big><span style="font-style: italic;">Certificato di proprietà </span><br style="font-style: italic;">
                              <span style="font-style: italic;">
                              <?php if (empty($dest)) : ?>
                                 <span id='destdebug'>* Qui verrà inserito il destinatario (Gilda, Mestiere, PG) *</span><br>
                                 <input size=35 type="text" name='dest' onkeyup='update(this.name, this.value, 1)' value="Inserisci il destinatario (Gilda, Mestiere, PG)">
                              <?php else : ?>
                                 <?php echo $dest; ?>
                              <?php endif; ?>
                               <br style="font-style: italic;">
                              <br>
                              </span></big></big></big></big></big>
                           </p>
                           <p style="font-family: Lucida Handwriting; text-align: center;"><big><big><big><big><big><span style="font-style: italic;">
                              <?php if (empty($tipologia)) : ?>
                                   <span id='tipologiadebug'>* Qui verrà inserita la tipologia *</span><br> 
                                   <input size=35 type='text' name='tipologia' onkeyup='update(this.name, this.value, 1)' value='Inserisci una tipologia qui'>
                              <?php else : ?>
                                 <?php echo $tipologia; ?>
                              <?php endif; ?>
                              <br>
                              <br>
                              </span></big></big></big></big></big>
                           </p>
                           <div style="text-align: center;">
                           </div>
                           <big><big><big><big><big> </big></big></big></big></big>
                           <p><img src="/v2/statics/t001/divider.jpg" alt="" height="42" width="367"><br></p>
                           <table bordercolorlight="#858585" bordercolordark="#ebebeb" background="/v2/statics/t001/background1.jpg" border="1" cellpadding="8" cellspacing="0" width="730">
                              <tbody>
                                 <tr>
                                    <td height="48" width="94%">
                                       <div align="center">
                                          <center>
                                             <table bordercolorlight="#858585" bordercolordark="#ebebeb" background="/v2/statics/t001/background2.jpg" border="1" cellpadding="3" cellspacing="0" width="100%">
                                                <tbody>
                                                   <tr>
                                                      <td height="28">
                                                         <div align="center">
                                                            <center>
                                                               <table bordercolorlight="#858585" bordercolordark="#ebebeb" background="/v2/statics/t001/background1.jpg" border="1" cellpadding="0" cellspacing="3">
                                                                  <tbody>
                                                                     <?php if (empty($file)) : ?>
                                                                        <tr>
                                                                           <td align='middle' width='664'>
                                                                              <img id='filedebug' style='width: 700px; height: 600px;' alt='' src='data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='>
                                                                           </td> 
                                                                        </tr>
                                                                        <tr>
                                                                           <td align='middle' width='664'>
                                                                              <font color=black>
                                                                                 <b>Scegli un prodotto<br> 
                                                                                    <select name='file' onchange='update(this.name, this.value)'>
                                                                                       <option value=''></option>
                                                                                       <?php
                                                                                          foreach ($files as $file)
                                                                                          { echo("<option value='$file'>$file</option>"); }
                                                                                       ?>
                                                                                    </select>
                                                                                 </b>
                                                                              </font>
                                                                           </td>
                                                                        </tr>
                                                                     <?php else : ?>
                                                                        <tr>
                                                                           <td align='middle' width='664'>
                                                                              <img style='width: 700px; height: 600px;' alt='' src='../prodotti/<?php echo $file ?>'>
                                                                           </td> 
                                                                        </tr>                                                                     
                                                                     <?php endif; ?>
                                                                  </tbody>
                                                               </table>
                                                            </center>
                                                         </div>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </center>
                                       </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <br>
                           <br>
                           <br>
                           <br>
                           <table style="text-align: left; width: 746px; height: 26px; margin-left: auto; margin-right: auto;" border="0" cellpadding="0" cellspacing="2">
                              <tbody>
                                 <tr>
                                    <td style="vertical-align: middle; text-align: center;"><big><big><big><span style="font-family: Lucida Handwriting; font-style: italic;">
                                       <?php if (empty($descr)) : ?>
                                          <span id='descrdebug'>* Qui verrà inserita la descrizione *</span><br>
                                          <textarea name='descr' rows='10' cols='100' onkeyup='update(this.name, this.value, 1)'>Inserisci una descrizione qui</textarea>
                                       <?php else : ?>
                                          <?php echo $descr; ?>
                                       <?php endif; ?>
                                       </span></big></big></big>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <p><br></p>
                           <p><img src="/v2/statics/t001/divider.jpg" alt="" height="42" width="367"></p>
                           <?php if (!isset($reg) || !empty($reg)) : ?>
                              <table style="text-align: left; width: 744px; height: 33px;" border="2" cellpadding="2" cellspacing="2">
                                 <tbody>
                                   <tr>
                                     <td style="vertical-align: top;"><big><span style="font-family: Lucida Handwriting; font-style: italic;"><small>
                                          <?php if (!isset($reg)) : ?>
                                             <span id='regdebug'>* Qui verrà inserita la regolamentazione (opzionale) *</span><br>
                                             <textarea name='reg' rows='10' cols='100' onkeyup='update(this.name, this.value, 1)'></textarea>
                                          <?php elseif (!empty($reg)) : ?>
                                             <?php echo $reg; ?>
                                          <?php endif; ?>
                                    </small></span></big></td>
                                   </tr>
                                 </tbody>
                               </table>                           
                              <p><img src="/v2/statics/t001/divider.jpg" alt="" height="42" width="367"></p>
                           <?php endif; ?>                           
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <table border="0" width="100%">
                              <tbody>
                                 <tr>
                                    <td align="center" width="69%">
                                       <p>»,¸,»'```»,¸,»'```»,¸,»'```»,¸,»'``&gt;»,¸,»'```»,¸,»'```»,¸,»'```»,¸,»'``</p>
                                       <p><big><big><span style="font-family: Lucida Handwriting; font-style: italic;">
                                          <?php if (empty($dedica)) : ?>
                                             <span id='dedicadebug'>* Qui verrà inserita la dedica *</span><br>
                                             <textarea name='dedica' rows='5' cols='50' onkeyup='update(this.name, this.value, 1)'>Inserisci la dedica qui</textarea>
                                          <?php else : ?>
                                             <?php echo $dedica; ?>
                                          <?php endif; ?>
                                          <br>
                                          </span></big></big>
                                       </p>
                                       <p>»,¸,»'```»,¸,»'```»,¸,»'```»,¸,»'``&gt;»,¸,»'```»,¸,»'```»,¸,»'```»,¸,»'``</p>
                                    </td>
                                    <td align="right" width="31%"><img src="/v2/statics/t001/firma.png" alt="" height="250" width="343"></td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </blockquote>
         </blockquote>
      </div>
    <audio autoplay loop>
      <source src="/v2/statics/t001/musica.mp3" type="audio/mpeg">
    </audio>
   <?php if ($debug) : ?>
      <center>
         <hr>
         <br><b>Cambia Template</b><br>
         <select onchange='window.location.href="http://lafalcediluna.altervista.org/v2/compilatore.php?t="+this.value'>
            <option value=''></option>
            <?php
               foreach ($templates as $template)
               { echo("<option value='$template'>$template</option>"); }
            ?>
         </select><br><br>
         <hr>
         <br><b>Inserisci la Password</b><br>
         <input type='password' name='pass' style="width: 200px;"><br>
         <input type="submit" value="Salva la Scheda" style="width: 204px;"><br><br>
         <hr>
         </form>
      </center>
   <?php endif; ?>
</body>
</html>