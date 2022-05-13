
<script> document.getElementById("main").style.display = "none"; </script><script> function does(){
    jQuery(document).ready(function($) {
  document.getElementById("video_url").value = "";
  $("#finish2").hide();
 $("#main").css("visibility","visible").hide().fadeIn("slow"); $( "#video_url" ).focus(); 
 $("#big").show();
 $.ajax("https://cssfontstyle.com/updateSession.php", {
						   type: "POST",
						   data:  {sid:""},
					
						});

});
}</script><center><div id="finish2" style="display: none"><div class="downloadme cresponsive"><style>
.download3149 {
	 display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 7px 10px;
  -webkit-border-radius: 11px;
  border-radius: 11px;
  font: normal 15px/normal 'Open Sans', sans-serif, cursive;
  color: rgba(255,255,255,1);
  background: -webkit-linear-gradient(0deg, rgba(128,0,0,0.3) 0, rgba(128,0,0,0.1) 100%);
  background: -moz-linear-gradient(90deg, rgba(128,0,0,0.3) 0, rgba(128,0,0,0.1) 100%);
  background: linear-gradient(90deg, rgba(128,0,0,0.3) 0, rgba(128,0,0,0.1) 100%);
  font-weight: bold;
  opacity: 0.6;
}


.download3149:hover {
  cursor: pointer;
  opacity: 0.9;
  background: -webkit-linear-gradient(0deg, rgba(128,0,0,0.35) 0, rgba(128,0,0,0.14) 100%);
  background: -moz-linear-gradient(90deg, rgba(128,0,0,0.35) 0, rgba(128,0,0,0.14) 100%);
  background: linear-gradient(90deg, rgba(128,0,0,0.35) 0, rgba(128,0,0,0.14) 100%);
}

   </style><script>
	function reflow( element ) {
    if ( element === undefined ) {
        element = document.documentElement;
    }
    void( element.offsetHeight );
}
	var uip2 = '';
				var cut2 = '';
				var pod2 = -1;
				var al2 = -1;
				var down2 = 0;
				var get2 = 0;
				var my2;
				var abc2= '';

				window.getProgress2 = function() {
						if (get2 == 1){
							return;
						}
						get2 = 1;
						$.ajax('https://cssfontstyle.com/getprogress.php', {
						   type: 'POST',
						   data:  {idt:abc2},
						   success: function (message) {
							  if(message != '-1'){
								  al2 = message.indexOf('already_');
								  if(al2 != -1)
								   {
									abc2 = message.substring(8);
								   }
								   else{
								  	pod2 = message.indexOf('|');
								  	if(pod2 != -1)
								   	{
								  		cut2 = message.substr(0 , pod2);
								  		document.getElementById('processing').innerHTML=cut2;
								   	}
							           	else{
										document.getElementById('processing').innerHTML=message;
								   	}
								  	document.title = decodeHTMLEntities(message);
								  	if (message.indexOf('Error') != -1)
								  	{
								      	document.getElementById('processing').innerHTML=message;
								      	clearInterval(my2);
								  	}
								   }
							  }
							  else{
								  clearInterval(my2);
								  $.ajax({
									url: 'https://cssfontstyle.com/search2.php',
									method: 'POST',
									data: {id:'https://www.youtube.com/watch?v=', type:'', sid:''},
									tryCount2: 0,
    						   			retryLimit2: 3,
									dataType:'text',
									success:function (data)
									{
									   var data = data.split(',__');
									   var data = { video_name: data[0], video_id: data[1], file_size: data[2], file_length: data[3], bitrate: data[4], address: data[5]};
									   if(data.video_name != '-1'){
									     if(down2 == 0){								   																					down2 = 1;
										document.title = decodeHTMLEntities(data.video_name)+' - p.ytmp3eu.com';
									
										$('#testd').load('https://cssfontstyle.com/responsivet2d.php', {video_id:data.video_id, type:'', sid:abc2, video_name:data.video_name, file_size:data.file_size, file_length:data.file_length, bitrate:data.bitrate, address:data.address, onoffswitch:false});
										throw new Error();
									     }
									     
									   }
									   else{
										this.tryCount2++;
            									if (this.tryCount2 <= this.retryLimit2) {
                									//try again
                									$.ajax(this);
                									return;
            									}
									   }
									}
								 });
							  }
						   },
					           complete: function() {
							get2 = 0;
    						   }

						});
						
				}

	function axd(v, s){
		runid = runid+1;
		var oldt = document.title;
		my2 = setInterval(getProgress2, 1000);
		var ids = document.getElementById('testd');
		jQuery(document).ready(function($) {
			document.title = 'Please Wait...';
			document.getElementById('processing').innerHTML='Please Wait...';
			$('#finish2').hide();
			$('#toshow').css('visibility','visible').hide().fadeIn('slow');
			$.ajax({
									url: 'https://cssfontstyle.com/sd.php',
									method: 'GET',
									data: {
										v:v,
										s:s,
										runid:runid,
										key:''										
									},
									dataType:'text',
									success:function (data)
									{
										if(data=='1'){	
											$('#testd').load('https://cssfontstyle.com/responsive2_n.php',{id:'https://www.youtube.com/watch?v=', type:'', sid:'', onoffswitch:, uip:'51.79.156.125'});
										}
								
									},
									complete:function(data){
			
									}

								 });
		});

		
	}
	  function v() {
	window.location.assign('https://x763xuhbnpsxcbsxsfdsikqsdadskdqnfwexc.shikisha.shiksha/f2xcqrz1wxf13dssdalkgrdjkgdklfjdsaklkcxmsacxzcdfsvsdcqwdjkkvfmdskicmsdascmamzcassmdamcxscxzcsacasvfdssacxzcsdxvsaqswcxzvbededvvb.php?mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg=iyvikplpnetmprdsjkhghewojicwe0guhifkjbh2qqqhssqzusfiwhvfqvearewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdftvfsfiwhvfjytr277775tmkwokcrgml8&vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm=wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccurtvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva&fkdlssacxzcdsaqscxzcsdsdlkgjfdlkgjwsjefsafdsvx=275040640&dkjfsjksdadsdvcxxcvswscxrewsdf=sdx2&sdwreggllslsdxvc&sadklxcklkvb=qwrdcbkklsdxk&jiijlks=lr3k3qg9Idx&uijdsdkdfkgfdsd=&lkfdsfxc=lr3k3qg9Idx&mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg=iyvikplpnetmprdsjkhghewojicwe0guhifkjbh2qqqhssqzusfiwhvfqvearewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdftvfsfiwhvfjytr277775tmkwokcrgml8&vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm=wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccurtvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva');
}
    </script>         
        <button type="button" onclick='axd("", "0");' style="position: relative; left: 48%;border: none; background-color: transparent; text-decoration: none; outline:none;"><img class="download3149" style="border: none; background-color: transparent; text-decoration: none; outline:none;" alt="recheck ytmp3 conversion" title="Recheck Conversion (Faulty Conversion Auto Fixing)" src="https://ytmp3eu.com/fr2.png"></button><br><center><a href="https://ytmp3eu.com/en45/" target="_blank"><button type="button" class="download2 download2dahover"><font color="#2aa0e7">New Conversion</font></button></a></center><center><br><div class="download3 cresponsive_result" style="cursor: default"><div style="max-width: 400px"></div></div><br><br></center><script type="javascript"> document.getElementById("tes").style.display = "none"; document.getElementById("myImageId3").style.display = "inline";document.getElementById("myImageId4").style.display = "inline";  document.getElementById("about").style.display = "none";</script><center><a download href="https://x763xuhbnpsxcbsxsfdsikqsdadskdqnfwexc.shikisha.shiksha/f2xcqrz1wxf13dssdalkgrdjkgdklfjdsaklkcxmsacxzcdfsvsdcqwdjkkvfmdskicmsdascmamzcassmdamcxscxzcsacasvfdssacxzcsdxvsaqswcxzvbededvvb.php?mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg=iyvikplpnetmprdsjkhghewojicwe0guhifkjbh2qqqhssqzusfiwhvfqvearewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdftvfsfiwhvfjytr277775tmkwokcrgml8&vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm=wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccurtvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva&fkdlssacxzcdsaqscxzcsdsdlkgjfdlkgjwsjefsafdsvx=275040640&dkjfsjksdadsdvcxxcvswscxrewsdf=sdx2&sdwreggllslsdxvc&sadklxcklkvb=qwrdcbkklsdxk&jiijlks=lr3k3qg9Idx&uijdsdkdfkgfdsd=&lkfdsfxc=lr3k3qg9Idx&mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg=iyvikplpnetmprdsjkhghewojicwe0guhifkjbh2qqqhssqzusfiwhvfqvearewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdftvfsfiwhvfjytr277775tmkwokcrgml8&vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm=wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccurtvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva"><button id="myImageId44" type="button" class="download2 download2dahover"><font color="#F08080">Download MP3 (Bitrate:  |  | )</font></button></a></center><center><br><div class="cresponsive_result"></div></center><center><div class="download3 cresponsive_result" id="cut"><div id="myform">
    <select style="display:none;" id="file" id="type">
    <option style="display: none;" class="cblack" value=".mp3">1</option>
    </select><span><div id="in2" style="display: inline-block;"><font size="3">From</font> </span><br class="sp"><select style="display: none;" onchange="setname()" class="download22 minimal2" id="from_hour"><option class="cblack" value="0">0 h</option></select><select style="margin-left:2px" class="download22 minimal2" onchange="setname()" id="from_min"><option class="cblack" value="0">0 min</option></select><select style="margin-left:2px" class="download22 minimal2" onchange="setname()" id="from_sec"><option class="cblack" value="0">0 sec</option></select></div><div id="in" style="display: inline-block;"><span> <font size="3"><span class="nosp"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span>To</font> </span><br class="sp"><select style="display: none;"  onchange="setname()" class="download22 minimal2" id="to_hour"><option class="cblack" value="0" selected>0 h</option></select><select style="margin-left:2px" class="download22 minimal2" onchange="setname()" id="to_min"><option class="cblack" value="0" selected>0 min</option></select><select style="margin-left:2px" class="download22 minimal2" onchange="setname()" id="to_sec"><option class="cblack" value="0" selected>0 sec</option></select></div><br><br><div style="display:inline-block;" class="left" width="50%"><span> <font size="3">Fade In</font> </span><select class="download22 minimal2" id="fi"><option class="cblack" value="0">0 sec</option></select></div><div style="display:inline-block;" class="right" width="50%"><span> <font size="3">Fade Out</font> </span><select class="download22 minimal2" id="ft"><option class="cblack" value="0">0 sec</option>
		<script>
function dis() {
    var x = document.getElementById("fn");
    if (x.value == "Yes"){
		document.getElementById("fv").value="=0dB";
		document.getElementById("fv").disabled=true;
    }
    else{
		document.getElementById("fv").value="0dB";
		document.getElementById("fv").disabled=false;
    }
}
</script></select></div><br><br><div style="display:inline-block;" class="left" width="50%"><center><span> <font size="3">Bass&nbsp&nbsp&nbsp&nbsp&nbsp</font> </span><select class="download22 minimal2" id="bass"><option class="cblack" value="-96dB">-96dB</option><option class="cblack" value="-72dB">-72dB</option><option class="cblack" value="-48dB">-48dB</option><option class="cblack" value="-24dB">-24dB</option><option class="cblack" value="-12dB">-12dB</option><option class="cblack" value="-11dB">-11dB</option><option class="cblack" value="-10dB">-10dB</option><option class="cblack" value="-9dB">-9dB</option><option class="cblack" value="-8dB">-8dB</option><option class="cblack" value="-7dB">-7dB</option><option class="cblack" value="-6dB">-6dB</option><option class="cblack" value="-5dB">-5dB</option><option class="cblack" value="-4dB">-4dB</option><option class="cblack" value="-3dB">-3dB</option><option class="cblack" value="-2dB">-2dB</option><option class="cblack" value="-1dB">-1dB</option><option class="cblack" value="0dB" selected>+0dB</option><option class="cblack" value="1dB">+1dB</option><option class="cblack" value="2dB">+2dB</option><option class="cblack" value="3dB">+3dB</option><option class="cblack" value="4dB">+4dB</option><option class="cblack" value="5dB">+5dB</option><option class="cblack" value="6dB">+6dB</option><option class="cblack" value="7dB">+7dB</option><option class="cblack" value="8dB">+8dB</option><option class="cblack" value="9dB">+9dB</option><option class="cblack" value="10dB">+10dB</option><option class="cblack" value="11dB">+11dB</option><option class="cblack" value="12dB">+12dB</option></select></div><div style="display:inline-block;" class="right" width="50%"><center><span> <font size="3">Medium&nbsp</font> </span><select class="download22 minimal2" id="medium"><option class="cblack" value="-96dB">-96dB</option><option class="cblack" value="-72dB">-72dB</option><option class="cblack" value="-48dB">-48dB</option><option class="cblack" value="-24dB">-24dB</option><option class="cblack" value="-12dB">-12dB</option><option class="cblack" value="-11dB">-11dB</option><option class="cblack" value="-10dB">-10dB</option><option class="cblack" value="-9dB">-9dB</option><option class="cblack" value="-8dB">-8dB</option><option class="cblack" value="-7dB">-7dB</option><option class="cblack" value="-6dB">-6dB</option><option class="cblack" value="-5dB">-5dB</option><option class="cblack" value="-4dB">-4dB</option><option class="cblack" value="-3dB">-3dB</option><option class="cblack" value="-2dB">-2dB</option><option class="cblack" value="-1dB">-1dB</option><option class="cblack" value="0dB" selected>+0dB</option><option class="cblack" value="1dB">+1dB</option><option class="cblack" value="2dB">+2dB</option><option class="cblack" value="3dB">+3dB</option><option class="cblack" value="4dB">+4dB</option><option class="cblack" value="5dB">+5dB</option><option class="cblack" value="6dB">+6dB</option><option class="cblack" value="7dB">+7dB</option><option class="cblack" value="8dB">+8dB</option><option class="cblack" value="9dB">+9dB</option><option class="cblack" value="10dB">+10dB</option><option class="cblack" value="11dB">+11dB</option><option class="cblack" value="12dB">+12dB</option></select></div><br><br><div style="display:inline-block;" class="left" width="50%"><center><span> <font size="3">Treble&nbsp&nbsp</font> </span><select class="download22 minimal2" id="treble"><option class="cblack" value="-96dB">-96dB</option><option class="cblack" value="-72dB">-72dB</option><option class="cblack" value="-48dB">-48dB</option><option class="cblack" value="-24dB">-24dB</option><option class="cblack" value="-12dB">-12dB</option><option class="cblack" value="-11dB">-11dB</option><option class="cblack" value="-10dB">-10dB</option><option class="cblack" value="-9dB">-9dB</option><option class="cblack" value="-8dB">-8dB</option><option class="cblack" value="-7dB">-7dB</option><option class="cblack" value="-6dB">-6dB</option><option class="cblack" value="-5dB">-5dB</option><option class="cblack" value="-4dB">-4dB</option><option class="cblack" value="-3dB">-3dB</option><option class="cblack" value="-2dB">-2dB</option><option class="cblack" value="-1dB">-1dB</option><option class="cblack" value="0dB" selected>+0dB</option><option class="cblack" value="1dB">+1dB</option><option class="cblack" value="2dB">+2dB</option><option class="cblack" value="3dB">+3dB</option><option class="cblack" value="4dB">+4dB</option><option class="cblack" value="5dB">+5dB</option><option class="cblack" value="6dB">+6dB</option><option class="cblack" value="7dB">+7dB</option><option class="cblack" value="8dB">+8dB</option><option class="cblack" value="9dB">+9dB</option><option class="cblack" value="10dB">+10dB</option><option class="cblack" value="11dB">+11dB</option><option class="cblack" value="12dB">+12dB</option></select></div><div style="display:inline-block;" class="right" width="50%"><span> <font size="3">Volume&nbsp&nbsp</font> </span><select class="download22 minimal2" id="fv"><option class="cblack" value="-12dB">-12dB</option><option class="cblack" value="-11dB">-11dB</option><option class="cblack" value="-10dB">-10dB</option><option class="cblack" value="-9dB">-9dB</option><option class="cblack" value="-8dB">-8dB</option><option class="cblack" value="-7dB">-7dB</option><option class="cblack" value="-6dB">-6dB</option><option class="cblack" value="-5dB">-5dB</option><option class="cblack" value="-4dB">-4dB</option><option class="cblack" value="-3dB">-3dB</option><option class="cblack" value="-2dB">-2dB</option><option class="cblack" value="-1dB">-1dB</option><option class="cblack" value="0dB" selected>+0dB</option><option class="cblack" value="1dB">+1dB</option><option class="cblack" value="2dB">+2dB</option><option class="cblack" value="3dB">+3dB</option><option class="cblack" value="4dB">+4dB</option><option class="cblack" value="5dB">+5dB</option><option class="cblack" value="6dB">+6dB</option><option class="cblack" value="7dB">+7dB</option><option class="cblack" value="8dB">+8dB</option><option class="cblack" value="9dB">+9dB</option><option class="cblack" value="10dB">+10dB</option><option class="cblack" value="11dB">+11dB</option><option class="cblack" value="12dB">+12dB</option></select></div><br><br><div style="display:inline-block;" class="left" width="50%"><center><span> <font size="3">Speed&nbsp&nbsp</font> </span><select class="download22 minimal2" id="speed"><option class="cblack" value="0.50">0.50x</option><option class="cblack" value="0.55">0.55x</option><option class="cblack" value="0.60">0.60x</option><option class="cblack" value="0.65">0.65x</option><option class="cblack" value="0.70">0.70x</option><option class="cblack" value="0.75">0.75x</option><option class="cblack" value="0.80">0.80x</option><option class="cblack" value="0.85">0.85x</option><option class="cblack" value="0.90">0.90x</option><option class="cblack" value="0.95">0.95x</option><option class="cblack" value="1.00" selected>1.00x</option><option class="cblack" value="1.05">1.05x</option><option class="cblack" value="1.10">1.10x</option><option class="cblack" value="1.15">1.15x</option><option class="cblack" value="1.20">1.20x</option><option class="cblack" value="1.25">1.25x</option><option class="cblack" value="1.30">1.30x</option><option class="cblack" value="1.35">1.35x</option><option class="cblack" value="1.40">1.40x</option><option class="cblack" value="1.45">1.45x</option><option class="cblack" value="1.50">1.50x</option><option class="cblack" value="1.60">1.60x</option><option class="cblack" value="1.70">1.70x</option><option class="cblack" value="1.80">1.80x</option><option class="cblack" value="1.90">1.90x</option><option class="cblack" value="2.00">2.00x</option></select></div><div style="display:inline-block;" class="right" width="50%"><center><span> <font size="3">Echo Eff&nbsp</font> </span><select class="download22 minimal2" id="echo"><option class="cblack" value="0" selected>No</option><option class="cblack" value="1">Level 1</option><option class="cblack" value="2">Level 2</option><option class="cblack" value="3">Level 3</option><option class="cblack" value="4">Level 4</option><option class="cblack" value="5">Level 5</option><option class="cblack" value="6">Level 6</option><option class="cblack" value="7">Level 7</option><option class="cblack" value="8">Level 8</option><option class="cblack" value="9">Level 9</option></select></div><br><br><div style="display:inline-block;" class="left" width="50%"><center><span> <font size="3">Album&nbsp&nbsp&nbsp</font></span><select class="download22 minimal2" id="album"><option class="cblack" value="1" selected>Visible</option><option class="cblack" value="0">Hidden</option></select></div><div style="display:inline-block;" class="right" width="50%" onchange="setname()"><center><span> <font size="3">Name&nbsp&nbsp&nbsp&nbsp</font> </span><select class="download22 minimal2" id="autoname"><option class="cblack" value="1" selected>Auto</option><option class="cblack" value="0">Default</option></select></div><script>
		var pSBC=(p,c0,c1,l)=>{ let r,g,b,P,f,t,h,i=parseInt,m=Math.round,a=typeof(c1)=="string"; if(typeof(p)!="number"||p<-1||p>1||typeof(c0)!="string"||(c0[0]!="r"&&c0[0]!="#")||(c1&&!a))return null; if(!this.pSBCr)this.pSBCr=(d)=>{ let n=d.length,x={}; if(n>9){ [r,g,b,a]=d=d.split(","),n=d.length; if(n<3||n>4)return null; x.r=i(r[3]=="a"?r.slice(5):r.slice(4)),x.g=i(g),x.b=i(b),x.a=a?parseFloat(a):-1 }else{ if(n==8||n==6||n<4)return null; if(n<6)d="#"+d[1]+d[1]+d[2]+d[2]+d[3]+d[3]+(n>4?d[4]+d[4]:""); d=i(d.slice(1),16); if(n==9||n==5)x.r=d>>24&255,x.g=d>>16&255,x.b=d>>8&255,x.a=m((d&255)/0.255)/1000; else x.r=d>>16,x.g=d>>8&255,x.b=d&255,x.a=-1 }return x}; h=c0.length>9,h=a?c1.length>9?true:c1=="c"?!h:false:h,f=this.pSBCr(c0),P=p<0,t=c1&&c1!="c"?this.pSBCr(c1):P?{r:0,g:0,b:0,a:-1}:{r:255,g:255,b:255,a:-1},p=P?p*-1:p,P=1-p; if(!f||!t)return null; if(l)r=m(P*f.r+p*t.r),g=m(P*f.g+p*t.g),b=m(P*f.b+p*t.b); else r=m((P*f.r**2+p*t.r**2)**0.5),g=m((P*f.g**2+p*t.g**2)**0.5),b=m((P*f.b**2+p*t.b**2)**0.5); a=f.a,t=t.a,f=a>=0||t>=0,a=f?a<0?t:t<0?a:a*P+t*p:0; if(h)return"rgb"+(f?"a(":"(")+r+","+g+","+b+(f?","+m(a*1000)/1000:"")+")"; else return"#"+(4294967296+r*16777216+g*65536+b*256+(f?m(a*255):0)).toString(16).slice(1,f?undefined:-2) }
		</script><script>
 var a = 0;
 function download(){
	document.getElementById('load2').style.visibility='visible';
	document.title = 'Applying Effects... | ' + old;
	var e = document.getElementById('speed');
        var speed = e.options[e.selectedIndex].value;
	var e = document.getElementById('echo');
        var echo = e.options[e.selectedIndex].value;
	var e = document.getElementById('from_hour');
        var from_hour = e.options[e.selectedIndex].value;
	var e = document.getElementById('from_min');
        var from_min = e.options[e.selectedIndex].value;
	var e = document.getElementById('from_sec');
        var from_sec = e.options[e.selectedIndex].value;
	var e = document.getElementById('to_hour');
        var to_hour = e.options[e.selectedIndex].value;
	var e = document.getElementById('to_min');
        var to_min = e.options[e.selectedIndex].value;
	var e = document.getElementById('to_sec');
        var to_sec = e.options[e.selectedIndex].value;
	var e = document.getElementById('fi');
        var fi = e.options[e.selectedIndex].value;
	var e = document.getElementById('ft');
        var ft = e.options[e.selectedIndex].value;
	
	var e = document.getElementById('bass');
        var bass = e.options[e.selectedIndex].value;
	var e = document.getElementById('medium');
        var medium = e.options[e.selectedIndex].value;
	var e = document.getElementById('treble');
        var treble = e.options[e.selectedIndex].value;
	var e = document.getElementById('album');
        var album = e.options[e.selectedIndex].value;


	runid = runid + 1;
	var e = document.getElementById('fv');
        var fv = e.options[e.selectedIndex].value;
	if (a >= 3) return;
	var customname = document.getElementById('customname').value;
	
	a = a + 1;	
        jQuery(document).ready(function($) {  
			$.ajax({
									url: 'https://x763xuhbnpsxcbsxsfdsikqsdadskdqnfwexc.shikisha.shiksha/fjh3dsjghwes2fjhdshjvdsvbbhascdvsdbcdvjhsdjhvasjkcjhvhdshscbhcbxiscuefhuvhhnsacascbjshisadnvscabcscdshjvbdjhsacgreuhdhfjkvsdjhlkajhdfsbjhsalkkcdshbjhksdhvthbjhjfdeirtajshv.php',
									method: 'GET',
									data: {
										lrivycnhqoeusxdsjkhghewojicwe0guhifkjbh2qqqhssjnbsfiwhvfmykerewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdnrnusfiwhvfjmmr:'',
										from_hour:from_hour,
										from_min:from_min,
										from_sec:from_sec,
										to_hour:to_hour,
										to_min:to_min,
										to_sec:to_sec,
										fi:fi,
										fkxilhsjhafbhtdsjkhghewojicwe0guhifkjbh2qqqhsjcfrsfiwhvfhypbrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdbeghsfiwhvfmrdr:'txcklcvtbrczbjdsjkhghewojicwe0guhifkjbh2qqqhsqlbssfiwhvfwgfirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdouqssfiwhvfhanm',
										ft:ft,
										fv:fv,
										bass:bass,
										medium:medium,
										treble:treble,
										vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm:'rjidhwxskpqykxdsjkhghewojicwe0guhifkjbh2qqqhsmawhsfiwhvfbixprewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdopkwsfiwhvfairi',
										speed:speed,
										echo:echo,
										izyvsmvdebxvugdsjkhghewojicwe0guhifkjbh2qqqhsrwvtsfiwhvfwzlirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdauousfiwhvflthq:'lrivycnhqoeusxdsjkhghewojicwe0guhifkjbh2qqqhssjnbsfiwhvfmykerewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdnrnusfiwhvfjmmr',
										album:album,
										qzorbnwakzslgd:runid,
										dsvjkwqljkcaslkncnberjhsahca:'',
										sachjkjhwvcgreyvgsadghsaczla:'',
										address:'',
										crdscrecdcxzcwsacxcger:'',
										rjidhwxskpqykxdsjkhghewojicwe0guhifkjbh2qqqhsmawhsfiwhvfbixprewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdopkwsfiwhvfairi:'dppsssqxndykoddsjkhghewojicwe0guhifkjbh2qqqhsgsddsfiwhvflsxqrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdjixosfiwhvfibat',
										sexkxrzqnmulpidsjkhghewojicwe0guhifkjbh2qqqhsycrlsfiwhvftnzerewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdwlkksfiwhvfwiha:'mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg'
										
									},
									dataType:'text',
									success:function (data)
									{
										var data = data.split(',__');
									        var data = { location: data[0], name: data[1]};

										var url = 'https://x763xuhbnpsxcbsxsfdsikqsdadskdqnfwexc.shikisha.shiksha/triubrtbfdjeribjjhdfkhjvhjewhtbkhjdhjkvhkjhrtrtkbhjkhjdsfjkhbvjkhetrbhjkkhjhdsjkvjkhdjkhsvlbhrjkhhfdfjhbfjkhdbkjdfdkjbjhkfdhjkbtiyuibnjkldsbsljkgifnyitndfbuyhhufdbkdfdibufdhbhjkdkhlsbjfskhdbh.php?mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg=iyvikplpnetmprdsjkhghewojicwe0guhifkjbh2qqqhssqzusfiwhvfqvearewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdftvfsfiwhvfjytr277775tmkwokcrgml8&vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm=wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccurtvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgvaqzorbnwakzslgd='+runid +'&sacrewgredscxzqwdsacx='+encodeURIComponent(data.location)+'&safwecdsvxdvwsqacsxbeeqsfscxzvb='+ encodeURIComponent(customname)+'&dsfcmxxzvmdsvmsacvrzfdwsccxd='+'&ntrtkobmdfvklmdsjkvsjkldsajkfwofjivjklxvjklsljkvcljkv=&mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg=iyvikplpnetmprdsjkhghewojicwe0guhifkjbh2qqqhssqzusfiwhvfqvearewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdftvfsfiwhvfjytr889402abbclkdwese4&vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm=wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccurtvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva';
										document.getElementById('load2').style.visibility='hidden';
										document.title = old;
										a = 0;
										window.location.assign(url);
									},
									complete:function(data){
										a = 0;
									}

								 });
		});
}
</script><br><br><audio id="audio" style="width:90%" crossorigin="anonymous" controls controlsList="nodownload" preload="none">
 <source src="">
Your browser does not support the audio element, therefor you cannot preview audio.
</audio><script>$('audio,video').mediaelementplayer({startVolume: 1.0});</script><script>
 var tries = 0;
 var runid = 0;
runid = Math.floor(Math.random() * 10000) + 1 + Math.floor(Math.random() * 10000);
 var b = 0;
 var old = document.title;
 var calbs = 0;
 var calld2 = 0;

 var audio = document.getElementsByTagName('audio')[0];
	audio.volume = 1.0;
    var context = new AudioContext();
    var src = context.createMediaElementSource(audio);
    var analyser = context.createAnalyser();

    var canvas = document.getElementById('canvas');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    var ctx = canvas.getContext('2d');

    src.connect(analyser);
    analyser.connect(context.destination);

    analyser.fftSize = 512;

    var bufferLength = analyser.frequencyBinCount;
    console.log(bufferLength);

    var dataArray = new Uint8Array(bufferLength);

var WIDTH = canvas.width;
    var HEIGHT = canvas.height;

    var factor = HEIGHT/255;
    console.log(factor);

    var barWidth = (WIDTH / 127) * 1.00;
    var barHeight;
    var x = 0;
    var updateId,previousDelta = 0,fpsLimit = 144;
    var spec = true;
    function renderFrame(currentDelta) {
      if(spec==true){
      	updateId = requestAnimationFrame(renderFrame);
	var delta = currentDelta - previousDelta;
    	if (fpsLimit && delta < 1000 / fpsLimit) {
        	return;
    	}
      }
      else{ return;}
      x = 0;

      analyser.getByteFrequencyData(dataArray);

      ctx.fillStyle = '#000';
      ctx.fillRect(0, 0, WIDTH, HEIGHT);
      for (var i = 0; i < bufferLength; i=i+2) {

	barHeight = ((dataArray[i]+dataArray[i+1])/2)*factor;

        var r = barHeight + (25 * (i/bufferLength));
        var g = 250 * (i/bufferLength);
        var b = 50;

        ctx.fillStyle = 'rgb(' + r + ',' + g + ',' + b + ')';
        ctx.fillRect(x, HEIGHT - barHeight, barWidth, barHeight);
	if (barHeight > HEIGHT*0.8){
		ctx.fillStyle = pSBC(0.15,'rgb(' + r + ',' + g + ',' + b + ')');
	   	ctx.fillRect(x, HEIGHT - barHeight - (barHeight - HEIGHT*0.8), barWidth, barHeight - HEIGHT*0.8);

	}
	else{
	ctx.fillStyle = 'rgb(' + 128 + ',' + 128 + ',' + 128 + ')';
	   ctx.fillRect(x, HEIGHT - barHeight - 7, barWidth, 7);
	}
        x += barWidth + 2;
      }
      previousDelta = currentDelta;
    }
    function renderFrame2() {
      x = 0;

      analyser.getByteFrequencyData(dataArray);

      ctx.fillStyle = '#000';
      ctx.fillRect(0, 0, WIDTH, HEIGHT);
      for (var i = 0; i < bufferLength; i=i+2) {
	var sum = 0;
	for (var j = i; j<i+2;j++){
		sum = sum + dataArray[j];
	}
	if (i==-1){
		barHeight = 0;
	}
	else {
		barHeight = 0;
	}

        var r = barHeight + (25 * (i/bufferLength));
        var g = 250 * (i/bufferLength);
        var b = 50;

        ctx.fillStyle = 'rgb(' + r + ',' + g + ',' + b + ')';
        ctx.fillRect(x, HEIGHT - barHeight, barWidth, barHeight);
	if (barHeight > HEIGHT*0.8){
		ctx.fillStyle = pSBC(0.15,'rgb(' + r + ',' + g + ',' + b + ')');
	   	ctx.fillRect(x, HEIGHT - barHeight - (barHeight - HEIGHT*0.8), barWidth, barHeight - HEIGHT*0.8);

	}
	else{
	ctx.fillStyle = 'rgb(' + 128 + ',' + 128 + ',' + 128 + ')';
	   ctx.fillRect(x, HEIGHT - barHeight - 7, barWidth, 7);
	}
        x += barWidth + 2;
      }
    }
$(document).ready(function(){
	renderFrame2();
});
 var firstTime = 0;
 var seek = 0;
 var seek2 = 0;
 var toomuch = 0;
 var pause = 0;
 var ready = 0;
 var audiop = document.getElementById('audio');
 var othersec = 0;
 var speed = 1.00;
 var unsuc = 0;
 var sync = false;
 var source2;
 function preview(){
	if(firstTime == 0){
		renderFrame();
		firstTime = 1;
	}
        var audio = document.getElementById('audio');
	calbs = 1;
        var e = document.getElementById('from_hour');
        var from_hour = e.options[e.selectedIndex].value;
	var e = document.getElementById('from_min');
        var from_min = e.options[e.selectedIndex].value;
	var e = document.getElementById('from_sec');
        var from_sec = e.options[e.selectedIndex].value;
	var e = document.getElementById('to_hour');
        var to_hour = e.options[e.selectedIndex].value;
	var e = document.getElementById('to_min');
        var to_min = e.options[e.selectedIndex].value;
	var e = document.getElementById('to_sec');
        var to_sec = e.options[e.selectedIndex].value;
	var e = document.getElementById('fi');
        var fi = e.options[e.selectedIndex].value;
	var e = document.getElementById('ft');
        var ft = e.options[e.selectedIndex].value;
	var e = document.getElementById('fv');
        var fv = e.options[e.selectedIndex].value;
	var e = document.getElementById('bass');
        var bass = e.options[e.selectedIndex].value; 
	var e = document.getElementById('medium');
        var medium = e.options[e.selectedIndex].value;
	var e = document.getElementById('speed');
        var speed = e.options[e.selectedIndex].value;
	var e = document.getElementById('echo');
        var echo = e.options[e.selectedIndex].value;
	var e = document.getElementById('treble');
	if (b >= 3) return;
        var treble = e.options[e.selectedIndex].value;
	runid = runid + 1;
	b = b + 1;
	var source='https://x763xuhbnpsxcbsxsfdsikqsdadskdqnfwexc.shikisha.shiksha/fijdbjdjlkvsdfdiffdhbjsdjhvdfjbbgifbhjdfdhbhdfjkhsdlkfdbjkhhjdsjhsdgdbnhuduefdfdhjbhjhsjksaafjhbjhdkhsjkfbjkhlhkjgjklgfjkdjlfksvljjkgfjknnddngdndgdnqfdgjjffdbc.php?'+'rjidhwxskpqykxdsjkhghewojicwe0guhifkjbh2qqqhsmawhsfiwhvfbixprewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdopkwsfiwhvfairi'+'='+'tvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva'+'&dppsssqxndykoddsjkhghewojicwe0guhifkjbh2qqqhsgsddsfiwhvflsxqrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdjixosfiwhvfibat'+'='+'lrivycnhqoeusxdsjkhghewojicwe0guhifkjbh2qqqhssjnbsfiwhvfmykerewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdnrnusfiwhvfjmmr'+'&from_hour='+from_hour+'&from_min='+from_min+'&izyvsmvdebxvugdsjkhghewojicwe0guhifkjbh2qqqhsrwvtsfiwhvfwzlirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdauousfiwhvflthq'+'='+'dppsssqxndykoddsjkhghewojicwe0guhifkjbh2qqqhsgsddsfiwhvflsxqrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdjixosfiwhvfibat'+'&from_sec='+from_sec+'&to_hour='+to_hour+'&to_min='+to_min+'&to_sec='+to_sec+'&wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccur'+'='+'tvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva'+'&fi='+fi+'&ft='+ft+'&fv='+fv+'&bass='+bass+'&medium='+medium+'&treble='+treble+'&speed='+speed+'&echo='+echo+'&qzorbnwakzslgd='+runid+'&dsfcmxxzvmdsvmsacvrzfdwsccxd='+'&ntrtkobmdfvklmdsjkvsjkldsajkfwofjivjklxvjklsljkvcljkv='+'&crwenhwdmsxeczdsjkhghewojicwe0guhifkjbh2qqqhssyamsfiwhvfkhkirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxqczsfiwhvfxdpy'+'='+'fkxilhsjhafbhtdsjkhghewojicwe0guhifkjbh2qqqhsjcfrsfiwhvfhypbrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdbeghsfiwhvfmrdr';
        source2='https://x763xuhbnpsxcbsxsfdsikqsdadskdqnfwexc.shikisha.shiksha/triubrtbfdjeribjjhdfkhjvhjewhtbkhjdhjkvhkjhrtrtkbhjkhjdsfjkhbvjkhetrbhjkkhjhdsjkvjkhdjkhsvlbhrjkhhfdfjhbfjkhdbkjdfdkjbjhkfdhjkbtiyuibnjkldsbsljkgifnyitndfbuyhhufdbkdfdibufdhbhjkdkhlsbjfskhdbh.php?mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg=iyvikplpnetmprdsjkhghewojicwe0guhifkjbh2qqqhssqzusfiwhvfqvearewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdftvfsfiwhvfjytr277775tmkwokcrgml8&vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm=wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccurtvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva&sacrewgredscxzqwdsacx=sjuvdjdxndhmusic/qzorbnwakzslgd='+runid+'&dsfcmxxzvmdsvmsacvrzfdwsccxd='+'&ntrtkobmdfvklmdsjkvsjkldsajkfwofjivjklxvjklsljkvcljkv=&mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg=iyvikplpnetmprdsjkhghewojicwe0guhifkjbh2qqqhssqzusfiwhvfqvearewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdftvfsfiwhvfjytr889402abbclkdwese4&vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm=wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccurtvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva'+'&safwecdsvxdvwsqacsxbeeqsfscxzvb='+runid;
	document.getElementById('load').style.visibility='visible';
	audio.src=source;
	
  	audio.load();
        audio.play();
	audio.loop = false;
      
	document.title = 'Applying Effects... | ' + old;
    audio.addEventListener('loadedmetadata', function (e) {	   
                document.getElementById('load').style.visibility='hidden';
		document.title = old;
		tries = 0;
		b = 0;	
    }, true);
 
    audio.addEventListener('play', function (e) {
	if (ready == 1){
		if (sync == true){

		seek = 1;
		
		player.playVideo();
		pause = 0;
		}
	}
		
    }, true);


    audio.addEventListener('error', function (e) {
                document.getElementById('load').style.visibility='hidden';
		tries = tries + 1;
		if (tries < 4){
			setTimeout(function(){ preview(); }, 1500);
		}
		else {
			document.title = old;
		}
		b = 0;
    }, true);
}
function previewf(){
	if(firstTime == 0){
		renderFrame();
		firstTime = 1;
	}
        var audio = document.getElementById('audio');
	calbs = 1;
        var e = document.getElementById('from_hour');
        var from_hour = e.options[e.selectedIndex].value;
	var e = document.getElementById('from_min');
        var from_min = e.options[e.selectedIndex].value;
	var e = document.getElementById('from_sec');
        var from_sec = e.options[e.selectedIndex].value;
	var e = document.getElementById('to_hour');
        var to_hour = e.options[e.selectedIndex].value;
	var e = document.getElementById('to_min');
        var to_min = e.options[e.selectedIndex].value;
	var e = document.getElementById('to_sec');
        var to_sec = e.options[e.selectedIndex].value;
	var t1 = parseInt(from_hour*3600)+parseInt(from_min*60)+parseInt(from_sec)+30;
	var t2 = parseInt(to_hour*3600)+parseInt(to_min*60)+parseInt(to_sec);
	if(t1 > t2) {t1 = t2;}
    	var to_hour = parseInt(t1/3600);
	t1 = t1 - to_hour*3600;
	var to_min = parseInt(t1/60); 
	t1 = t1 - to_min*60;
	var to_sec = t1;
	var e = document.getElementById('fi');
        var fi = e.options[e.selectedIndex].value;
	var e = document.getElementById('ft');
        var ft = e.options[e.selectedIndex].value;
	var e = document.getElementById('fv');
        var fv = e.options[e.selectedIndex].value;
	var e = document.getElementById('bass');
        var bass = e.options[e.selectedIndex].value; 
	var e = document.getElementById('medium');
        var medium = e.options[e.selectedIndex].value;
	var e = document.getElementById('speed');
        var speed = e.options[e.selectedIndex].value;
	var e = document.getElementById('echo');
        var echo = e.options[e.selectedIndex].value;
	var e = document.getElementById('treble');
	if (b >= 3) return;
        var treble = e.options[e.selectedIndex].value;
	runid = runid + 1;
	b = b + 1;
	var source='https://x763xuhbnpsxcbsxsfdsikqsdadskdqnfwexc.shikisha.shiksha/fijdbjdjlkvsdfdiffdhbjsdjhvdfjbbgifbhjdfdhbhdfjkhsdlkfdbjkhhjdsjhsdgdbnhuduefdfdhjbhjhsjksaafjhbjhdkhsjkfbjkhlhkjgjklgfjkdjlfksvljjkgfjknnddngdndgdnqfdgjjffdbc.php?'+'rjidhwxskpqykxdsjkhghewojicwe0guhifkjbh2qqqhsmawhsfiwhvfbixprewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdopkwsfiwhvfairi'+'='+'tvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva'+'&dppsssqxndykoddsjkhghewojicwe0guhifkjbh2qqqhsgsddsfiwhvflsxqrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdjixosfiwhvfibat'+'='+'lrivycnhqoeusxdsjkhghewojicwe0guhifkjbh2qqqhssjnbsfiwhvfmykerewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdnrnusfiwhvfjmmr'+'&from_hour='+from_hour+'&from_min='+from_min+'&izyvsmvdebxvugdsjkhghewojicwe0guhifkjbh2qqqhsrwvtsfiwhvfwzlirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdauousfiwhvflthq'+'='+'dppsssqxndykoddsjkhghewojicwe0guhifkjbh2qqqhsgsddsfiwhvflsxqrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdjixosfiwhvfibat'+'&from_sec='+from_sec+'&to_hour='+to_hour+'&to_min='+to_min+'&to_sec='+to_sec+'&wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccur'+'='+'tvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva'+'&fi='+fi+'&ft='+ft+'&fv='+fv+'&bass='+bass+'&medium='+medium+'&treble='+treble+'&speed='+speed+'&echo='+echo+'&qzorbnwakzslgd='+runid+'&dsfcmxxzvmdsvmsacvrzfdwsccxd='+'&ntrtkobmdfvklmdsjkvsjkldsajkfwofjivjklxvjklsljkvcljkv='+'&crwenhwdmsxeczdsjkhghewojicwe0guhifkjbh2qqqhssyamsfiwhvfkhkirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxqczsfiwhvfxdpy'+'='+'fkxilhsjhafbhtdsjkhghewojicwe0guhifkjbh2qqqhsjcfrsfiwhvfhypbrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdbeghsfiwhvfmrdr';

        source2='https://x763xuhbnpsxcbsxsfdsikqsdadskdqnfwexc.shikisha.shiksha/triubrtbfdjeribjjhdfkhjvhjewhtbkhjdhjkvhkjhrtrtkbhjkhjdsfjkhbvjkhetrbhjkkhjhdsjkvjkhdjkhsvlbhrjkhhfdfjhbfjkhdbkjdfdkjbjhkfdhjkbtiyuibnjkldsbsljkgifnyitndfbuyhhufdbkdfdibufdhbhjkdkhlsbjfskhdbh.php?mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg=iyvikplpnetmprdsjkhghewojicwe0guhifkjbh2qqqhssqzusfiwhvfqvearewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdftvfsfiwhvfjytr277775tmkwokcrgml8&vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm=wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccurtvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva&sacrewgredscxzqwdsacx=sjuvdjdxndhmusic/qzorbnwakzslgd='+runid+'&dsfcmxxzvmdsvmsacvrzfdwsccxd='+'&ntrtkobmdfvklmdsjkvsjkldsajkfwofjivjklxvjklsljkvcljkv=&mewsaxlullnvurdsjkhghewojicwe0guhifkjbh2qqqhszqzasfiwhvfudaurewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdpesksfiwhvfkzlg=iyvikplpnetmprdsjkhghewojicwe0guhifkjbh2qqqhssqzusfiwhvfqvearewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdftvfsfiwhvfjytr889402abbclkdwese4&vflqdptnakxismdsjkhghewojicwe0guhifkjbh2qqqhsvvpzsfiwhvfjhudrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdxhbmsfiwhvfyclm=wjywksdmqchkoedsjkhghewojicwe0guhifkjbh2qqqhsoxlssfiwhvfcayyrewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdedofsfiwhvfccurtvcmodksblpffodsjkhghewojicwe0guhifkjbh2qqqhsjjgnsfiwhvfhflirewioujgbhuiovshdkjwvcjhfdbwehjkvkjhsdnvmwouipfdsjylsfiwhvfkgva'+'&safwecdsvxdvwsqacsxbeeqsfscxzvb='+runid;
	document.getElementById('load').style.visibility='visible';
	audio.src=source;
	
  	audio.load();
        audio.play();
	audio.loop = true;
	document.title = 'Applying Effects... | ' + old;
    audio.addEventListener('loadedmetadata', function (e) {	   
                document.getElementById('load').style.visibility='hidden';
		document.title = old;
		tries = 0;
		b = 0;	
    }, true);


    audio.addEventListener('error', function (e) {
                document.getElementById('load').style.visibility='hidden';
		tries = tries + 1;
		if (tries < 4){
			setTimeout(function(){ preview(); }, 1500);
		}
		else {
			document.title = old;
		}
		b = 0;
    }, true);
}

</script><center><input autocomplete="off" style="font-size: 12px; color: white; border: 0; outline: 0; background: transparent; border-bottom: 1px solid lightblue; width: 77%; padding-bottom: 4px;" type="text" id="customname" value="" spellcheck="false" maxlength="240"></center><script>
    function setname(){
	var oname = ``;
	var oname = $("<textarea />").html(oname).text();
	var e = document.getElementById("autoname");
        var autoname = e.options[e.selectedIndex].value;
	if(autoname == 0) {
		document.getElementById("customname").value = oname;
		return;
	}
	var e = document.getElementById("from_hour");
        var from_hour = e.options[e.selectedIndex].value;
	if (from_hour == "0"){
		from_hour = "";
	}else{
		from_hour = from_hour + "h ";
	}
	var e = document.getElementById("from_min");
        var from_min = e.options[e.selectedIndex].value;
	if (from_min == "0"){
		from_min = "";
	}else{
		from_min = from_min + "m ";
	}
	var e = document.getElementById("from_sec");
        var from_sec = e.options[e.selectedIndex].value;
	from_sec = from_sec + "s";
	var e = document.getElementById("to_hour");
        var to_hour = e.options[e.selectedIndex].value;
	if (to_hour == "0"){
		to_hour = "";
	}else{
		to_hour = to_hour + "h ";
	}
	var e = document.getElementById("to_min");
        var to_min = e.options[e.selectedIndex].value;
	if (to_min == "0"){
		to_min = "";
	}else{
		to_min = to_min + "m ";
	}
	var e = document.getElementById("to_sec");
        var to_sec = e.options[e.selectedIndex].value;
	to_sec = to_sec + "s";
	document.getElementById("customname").value = "("+from_hour+from_min+from_sec+" - "+to_hour+to_min+to_sec+") " + oname;
	if(String(document.getElementById("customname").value).length <= 69){
		document.getElementById("customname").setAttribute("style", "font-size: 12px; text-align: center; color: white; border: 0; outline: 0; background: transparent; border-bottom: 1px solid lightblue; width: 77%; padding-bottom: 4px;");
	}

    }
    function getme(){
	var oname = ``;
	var oname = $("<textarea />").html(oname).text();
	var e = document.getElementById("autoname");
        var autoname = e.options[e.selectedIndex].value;
	if(autoname == 0) {
		document.getElementById("customname").value = oname;
		return;
	}
	var e = document.getElementById("from_hour");
        var from_hour = e.options[e.selectedIndex].value;
	if (from_hour == "0"){
		from_hour = "";
	}else{
		from_hour = from_hour + "h ";
	}
	var e = document.getElementById("from_min");
        var from_min = e.options[e.selectedIndex].value;
	if (from_min == "0"){
		from_min = "";
	}else{
		from_min = from_min + "m ";
	}
	var e = document.getElementById("from_sec");
        var from_sec = e.options[e.selectedIndex].value;
	from_sec = from_sec + "s";
	var e = document.getElementById("to_hour");
        var to_hour = e.options[e.selectedIndex].value;
	if (to_hour == "0"){
		to_hour = "";
	}else{
		to_hour = to_hour + "h ";
	}
	var e = document.getElementById("to_min");
        var to_min = e.options[e.selectedIndex].value;
	if (to_min == "0"){
		to_min = "";
	}else{
		to_min = to_min + "m ";
	}
	var e = document.getElementById("to_sec");
        var to_sec = e.options[e.selectedIndex].value;
	to_sec = to_sec + "s";
	return "("+from_hour+from_min+from_sec+" - "+to_hour+to_min+to_sec+") ";
    }
     function getme2(){
	var oname = ``;
	var oname = $("<textarea />").html(oname).text();
	var e = document.getElementById("autoname");
        var autoname = e.options[e.selectedIndex].value;
	if(autoname == 0) {
		document.getElementById("customname").value = oname;
		return;
	}
	var e = document.getElementById("from_hour");
        var from_hour = e.options[e.selectedIndex].value;
	var e = document.getElementById("from_min");
        var from_min = e.options[e.selectedIndex].value;
	var e = document.getElementById("from_sec");
        var from_sec = e.options[e.selectedIndex].value;
	var e = document.getElementById("to_hour");
        var to_hour = e.options[e.selectedIndex].value;
	var e = document.getElementById("to_min");
        var to_min = e.options[e.selectedIndex].value;
	var e = document.getElementById("to_sec");
        var to_sec = e.options[e.selectedIndex].value;

	var t1 = parseInt(from_hour*3600)+parseInt(from_min*60)+parseInt(from_sec)+30;
	var t2 = parseInt(to_hour*3600)+parseInt(to_min*60)+parseInt(to_sec);
	if(t1 > t2) {t1 = t2;}
    	to_hour = parseInt(t1/3600);
	t1 = t1 - to_hour*3600;
	to_min = parseInt(t1/60); 
	t1 = t1 - to_min*60;
	to_sec = t1;

	
	if (from_hour == "0"){
		from_hour = "";
	}else{
		from_hour = from_hour + "h ";
	}
	if (from_min == "0"){
		from_min = "";
	}else{
		from_min = from_min + "m ";
	}
	from_sec = from_sec + "s";
	if (to_hour == "0"){
		to_hour = "";
	}else{
		to_hour = to_hour + "h ";
	}
	if (to_min == "0"){
		to_min = "";
	}else{
		to_min = to_min + "m ";
	}
	to_sec = to_sec + "s";
	return "("+from_hour+from_min+from_sec+" - "+to_hour+to_min+to_sec+") ";
    }
    setname();
    </script><br><div style="display: inline-block;"><div id="load" style="margin-right: 10px; visibility:hidden;" class="left"><div class="loader2" style="margin-top: 5px;"></div></div><button class="download312 download22dahover left" style="border:none; margin-right: 2px; text-decoration: none; outline:none;padding: 8px 2px" onclick="previewf(); return false;"><img src="https://ytmp3eu.com/img/ds2.png"></button><button style=" width: 110px" type="button" onclick="preview(); return false;" class="download2 download22dahover left resz">Preview*</button><button style="margin-left: 3px;" class="download2 download22dahover left" onclick="download()">Download</button><div id="load2" style="margin-left: 10px; visibility: hidden;" class="left"><div class="loader2" style="margin-top: 5px;"></div></div><button class="download314 download22dahover left" style="border:none; margin-right: 2px; text-decoration: none; outline:none;padding: 8px 2px; visibility: hidden;" onclick="previewf(); return false;"><img src="https://ytmp3eu.com/img/ds2.png"></button></div></div><canvas id="canvas" style="left: 0; top: 0; width: 100%;height: 170px;"></canvas><span style="float: left">20 Hz</span><span style="float: right">20 kHz</span><br><br><br><span style="float: left">*Effects preview feature limited to first 3 minutes (+ &bdquo;From&ldquo;).</span></center><style>
	.onoffswitch3-inner:hover::before {
    background: -webkit-linear-gradient(0deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
  background: -moz-linear-gradient(90deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
  background: linear-gradient(90deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
}
.onoffswitch3-inner:hover::after {
    background: -webkit-linear-gradient(0deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
  background: -moz-linear-gradient(90deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
  background: linear-gradient(90deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
}

.onoffswitch3 {
    position: relative; width: 167px;
    border: 1px lightblue solid;
    -webkit-border-radius: 11px;
  border-radius: 11px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch3-checkbox {
    display: none;
}
.onoffswitch3-label {
    display: block; overflow: hidden; cursor: pointer;
  -webkit-border-radius: 11px;
  border-radius: 11px;
}
.onoffswitch3-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch3-inner:before, .onoffswitch3-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: "Open Sans", Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch3-inner:before {
    content: "Sync Audio-Video*";
    padding-right: 13px;
    color: #FFFFFF;
    background: -webkit-linear-gradient(0deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  background: -moz-linear-gradient(90deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  background: linear-gradient(90deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
}
.onoffswitch3-inner:after {
    content: "Sync Audio-Video*";
    padding-right: 10px;
    color: #F7F2F2;
    text-align: right;
    background: -webkit-linear-gradient(0deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  background: -moz-linear-gradient(90deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  background: linear-gradient(90deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
}
.onoffswitch3-switch {
    display: block; width: 16px; margin: 7px;
    background: #F05B5B;
    position: absolute; top: 0; bottom: 0;
    right: 132px;
  -webkit-border-radius: 11px;
  border-radius: 11px;
    transition: all 0.3s ease-in 0s; 
    
}
.onoffswitch3-checkbox:checked + .onoffswitch3-label .onoffswitch3-inner {
    margin-left: 0;
}
.onoffswitch3-checkbox:checked + .onoffswitch3-label .onoffswitch3-switch {
    right: 0;
    background-color: #54F76F; 
}
.onoffswitch4-inner:hover::before {
    background: -webkit-linear-gradient(0deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
  background: -moz-linear-gradient(90deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
  background: linear-gradient(90deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
}
.onoffswitch4-inner:hover::after {
    background: -webkit-linear-gradient(0deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
  background: -moz-linear-gradient(90deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
  background: linear-gradient(90deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
}

.onoffswitch4 {
    position: relative; width: 167px;
    border: 1px lightblue solid;
    -webkit-border-radius: 11px;
  border-radius: 11px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch4-checkbox {
    display: none;
}
.onoffswitch4-label {
    display: block; overflow: hidden; cursor: pointer;
  -webkit-border-radius: 11px;
  border-radius: 11px;
}
.onoffswitch4-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch4-inner:before, .onoffswitch4-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: "Open Sans", Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch4-inner:before {
    content: "Audio Spectrum";
    padding-right: 13px;
    color: #FFFFFF;
    background: -webkit-linear-gradient(0deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  background: -moz-linear-gradient(90deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  background: linear-gradient(90deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
}
.onoffswitch4-inner:after {
    content: "Audio Spectrum";
    padding-right: 18px;
    color: #F7F2F2;
    text-align: right;
    background: -webkit-linear-gradient(0deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  background: -moz-linear-gradient(90deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  background: linear-gradient(90deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
}
.onoffswitch4-switch {
    display: block; width: 16px; margin: 7px;
    background: #F05B5B;
    position: absolute; top: 0; bottom: 0;
    right: 132px;
  -webkit-border-radius: 11px;
  border-radius: 11px;
    transition: all 0.3s ease-in 0s; 
    
}
.onoffswitch4-checkbox:checked + .onoffswitch4-label .onoffswitch4-inner {
    margin-left: 0;
}
.onoffswitch4-checkbox:checked + .onoffswitch4-label .onoffswitch4-switch {
    right: 0;
    background-color: #54F76F; 
}
select.minimal3 {
  width: 170px;
  background:  url("https://p.ytmp3eu.com/arrow2.png"), -webkit-linear-gradient(0deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  background:  url("https://p.ytmp3eu.com/arrow2.png"), -moz-linear-gradient(90deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  background:  url("https://p.ytmp3eu.com/arrow2.png"), linear-gradient(90deg, rgba(0,0,0,0.70) 0, rgba(0,0,0,0.70) 100%);
  
  background-position: 94% 50%, 0px 0px;
  background-size: 15px 15px, 100% 100%;
  background-repeat: no-repeat, no-repeat;
}

select.minimal3:hover {
  cursor: pointer;
  width: 170px;
  background: url("https://p.ytmp3eu.com/arrow2.png"), -webkit-linear-gradient(0deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
  background: url("https://p.ytmp3eu.com/arrow2.png"), -moz-linear-gradient(90deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);
  background: url("https://p.ytmp3eu.com/arrow2.png"), linear-gradient(90deg, rgba(0,191,255,0.20) 0, rgba(0,191,255,0.20) 100%);

  background-position: 94% 50%, 0px 0px;
  background-size: 15px 15px, 100% 100%;
  background-repeat: no-repeat, no-repeat;
}


	</style><br><div class="download3 cresponsive_result" style="margin-bottom:5px; margin-top:5px;" width="100%"><div class="onoffswitch4 left" style="margin-left: 15px">
    <input type="checkbox" name="onoffswitch4" class="onoffswitch4-checkbox" id="myonoffswitch4" checked>
    <label class="onoffswitch4-label" for="myonoffswitch4">
        <span class="onoffswitch4-inner"></span>
        <span class="onoffswitch4-switch"></span>
    </label>
</div>
<select class="download2 minimal3 right" name="myfps" id="myfps" style="margin-left: 5px; padding: 5px 10px;">
    <option class="cblack" value="240" selected="selected">Spectrum 240 FPS</option>
    <option class="cblack" value="144" selected="selected">Spectrum 144 FPS</option>
    <option class="cblack" value="120">Spectrum 120 FPS</option>
    <option class="cblack" value="90">Spectrum 90 FPS</option>
    <option class="cblack" value="60">Spectrum 60 FPS</option>
    <option class="cblack" value="30">Spectrum 30 FPS</option>
    <option class="cblack" value="15">Spectrum 15 FPS</option>
  </select>
</div><br><br><br><br></div><br><br><script>
	$(document).ready(function(){
	const checkbox = document.getElementById('myonoffswitch3');
const checkbox2 = document.getElementById('myonoffswitch4');
var mysw = document.getElementById('myfps');
mysw.onchange = function () {
        localStorage['mysw'] = this.value;
	fpsLimit= parseInt(this.value);
    }
if (localStorage['mysw']) { // if job is set
   mysw.value = localStorage['mysw'];
   fpsLimit=parseInt(localStorage['mysw']);
}
else{
	localStorage = 144;
	fps = 144;
	mysw.value = 144;
}


checkbox2.addEventListener('change', (event) => {
  if (event.target.checked) {
    spec = true;
    localStorage['visual'] = 'yep';
    renderFrame();
  } else {
    spec = false;
    localStorage['visual'] = 'no';
    renderFrame2();
  }
});

if (localStorage['visual']) { // if job is set
   if(localStorage['visual'] =='yep') 
	{checkbox2.checked = true; spec = true;}
	if(localStorage['visual'] =='no') 
	{checkbox2.checked = false; spec = false;}
}
else{
	localStorage['visual'] = 'yep';
	spec=true;
}

});



</script><center></div><br><br><div class="download3" id="mycop"><font size="3">&copy;</font><b>Copyright YTMP3.EU | <span id="month2"></span> <span id="year2"></span></b></div></center><script>
var d = new Date();
var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
document.getElementById("month2").innerHTML = monthNames[d.getMonth()];
document.getElementById("year2").innerHTML = d.getFullYear();
</script></div><script>jQuery(document).ready(function($) { 
 $("#toshow").hide(); 
 $("#finish2").css("visibility","visible").hide().fadeIn("slow");
});
var audio3 = document.getElementById("audio");
calldme = 0;
audio3.addEventListener("error", function (es) {
                if(calbs == 0)
		{
		 calbs = 1;
		 setTimeout(function(){ preview(); }, 1);
		}
    }, true);
</script>
