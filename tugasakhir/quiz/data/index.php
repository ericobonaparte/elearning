<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>E-Learning System ITS</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/sliding.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        <!-- Preview Photo Script -->
        
		<script language="JavaScript">
	function showPreview(ele)
	{
		document.frmMain.imgAvatar.src=ele.value;
	}
		</script>

  				
        
<!-- Start Of  Validate Form Script -->
        
        <script type="text/javascript">
			function ValidateContactForm()
				{
   					var email = document.ContactForm.Email;

    					if (email.value == "")
    						{
       							 window.alert("Please enter a valid e-mail address.");
       							 email.focus();
       							 return false;
    						}
    							if (email.value.indexOf("@", 0) < 0)
    						{
       							window.alert("Please enter a valid e-mail address.");
        						email.focus();
        						return false;
    						}
    							if (email.value.indexOf(".", 0) < 0)
    						{
       							 window.alert("Please enter a valid e-mail address.");
      							 email.focus();
        							return false;
    						}
  
    					return true;
							}
						</script>

<!-- End Of  Validate Form Script -->

         <script>
			$(function() {
			$( "#datepicker" ).datepicker();
			});
		</script>

    </head>
    <style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        /*{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }*/
		
    </style>
    <body>
        <div>
            
        </div>
        <div id="content">
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" action="/tugasakhir/adm/script/input_user.php" method="POST">
                    
                        <fieldset class="step">
                            <legend>Biodata</legend>
                            <p>
                                <label for="j_id">Jenis Identitas</label>
                                <select id="j_id" name="j_id">
                                    <option value="KTP" selected>KTP</option>
                                    <option value="SIM">SIM</option>
                                    <option value="KTM">KTM</option>
                                    <option value="PASPOR">PASPOR</option>
                                </select>
                            </p>
                            
                            <p>
                                <label for="no_id">No.Identitas</label>
                                <input id="no_id" name="no_id"   autocomplete="off" />
                            </p>
                            
                            <p>
                                <label for="namalengkap">Nama Lengkap</label>
                                <input id="namalengkap" name="namalengkap"   autocomplete="off" />
                            </p>
                            
                            <p>
                                <label for="t_lahir">Tempat Lahir</label>
                                <input id="t_lahir" name="t_lahir"   autocomplete="off" />
                            </p>
                            
                            <p>
                            	<label for="tgl_lahir">Tanggal Lahir</label>
                                <input id="datepicker" name="tgl_lahir" type="text" />
                            </p>
                           
                            <p>
                                <label for="jk">Jenis Kelamin</label>
                                <select id="jk" name="jk">
                                    <option value="L" selected>Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </p>
                            
                            <p>
                                <label for="agama">Agama</label>
                                <select id="agama" name="agama">
                                    <option value="Islam" selected>Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </p>
                            
                        <!--</fieldset>
                        
                        <fieldset class="step">
                            <legend>Info Alamat</legend>
                            <p>
                                <label for="alamat">Alamat Asal</label>
                                <textarea id="alamat" name="alamat" type="text"   autocomplete="off"></textarea>
                            </p>
                            
                            <p>
                                <label for="kota">Kota</label>
                                <input id="kota" name="kota" type="text"  autocomplete="off"/>
                            </p>
                            
                            <p>
                                <label for="propinsi">Propinsi</label>
                                <input id="propinsi" name="propinsi" type="text" autocomplete="off"/>
                            </p>
                            
                            <p>
                                <label for="negara">Negara</label>
                                <input id="negara" name="negara" type="text" autocomplete="on" />
                            </p>
                            
                            <p>	<label for="kodepos">Kode Pos</label>
                            	<input id="kdoepos" name="kodepos" type="number" autocomplete="off"/>
                            </p>
                           
                           <p>
                                <label for="alamatsby">Alamat Surabaya</label>
                                <textarea id="alamatsby" name="alamatsby" type="text"   autocomplete="off"></textarea>
                            </p>
                            
                        </fieldset>
                        
                        
                        <fieldset class="step">
                            <legend>Info Kontak</legend>
                            
                            <p>
                                <label for="phone">No.Telepon</label>
                                <input id="phone" name="phone" placeholder="cth: +6231xxxxxx" type="tel" autocomplete="off" />
                            </p>
                            
                            <p>
                                <label for="hphone">No.Handphone</label>
                                <input id="hphone" name="hphone" placeholder="cth: +6285xxxxxx" type="tel" autocomplete="off" />
                            </p>
                            
                            <p>
                            	<label for="email">Email </label>
                                <input id="email" name="email" placeholder="cth: skkits@its.ac.id" type="email" autocomplete="off"/>
                                </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Upload Foto</legend>
                            	<p>
                                	<label for="photo">Photo</label>
                                    <input id="picField" name="photo" type="file" onChange="showPreview(this)"/>
                        </fieldset>-->
						<fieldset class="step">
                            <legend>Validasi</legend>
							<p>
								Pastikan segala data yang anda masukan sudah sesuai dengan ketentuan.
                                <br>Cek sekali lagi, agar tidak terjadi kesalahan.</br>
							</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">Register</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <!--<div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Biodata</a>
                        </li>
                        <li>
                            <a href="#">Info Alamat</a>
                        </li>
                        <li>
                            <a href="#">Info Kontak</a>
                        </li>
                        <li>
                            <a href="#">Upload Foto</a>
                        </li>
						<li>
                            <a href="#">Validasi</a>
                        </li>
                    </ul>
                </div>-->
            </div>
        </div>
    </body>
</html>
