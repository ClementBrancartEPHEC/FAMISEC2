<?php


session_start();


require 'header.php';


$options = ['cost' => 12]; // Cost du hashage bCrypt


function Genere_Token($size)


{


    $characters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "@", "&", "#", "$", "*");


    for($i=0;$i<$size;$i++){


        $token .= ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];


    }


    return $token;


}


function tokenValidTime($nbMinute){


    $minutesAjout = $nbMinute;


    $time = new DateTime();


    $time->add(new DateInterval('PT' . $minutesAjout . 'M'));


    return $time->format('Y-m-d H:i:sa');


}


if (!empty($_POST['emailOubli'])){


    $oubliMail = $_POST['emailOubli'];


    if (filter_var($oubliMail, FILTER_VALIDATE_EMAIL)) {


        $requete = $pdo->prepare("SELECT userEmail, userPrenom, userNom FROM users WHERE userEmail = :Email");


        $requete->bindParam(':Email', $oubliMail);


        $requete->execute();


        $result = $requete->fetch();


        if ($result['userEmail']){


            $mail = $result['userEmail'];


            $variable = Genere_Token(60);


            $tempValidToken = tokenValidTime(40);


            $avtivationToken = hash_hmac('ripemd160', $mail . 'Et ouai fallait pas me chercher !' . $variable . $tempValidToken, 'secret');


            $requeteToken = $pdo->prepare("UPDATE `users` SET `actvationToken` = '$avtivationToken', `tempValidToken` = '$tempValidToken' WHERE `users`.`userEmail` = '$oubliMail';;");


            $requeteToken->execute();


             // Déclaration de l'adresse de destination.


            if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.


            {


                $passage_ligne = "\r\n";


            }


            else


            {


                $passage_ligne = "\n";


            }


            $message_html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">


	<head>


		<title>Oubli de mot de passe</title>


		<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />


		<meta name="viewport" content="width=device-width, initial-scale=1.0" />


		<style type="text/css">


			* {


				-ms-text-size-adjust:100%;


				-webkit-text-size-adjust:none;


				-webkit-text-resize:100%;


				text-resize:100%;


			}


			a{


				outline:none;


				color:#40aceb;


				text-decoration:underline;


			}


			a:hover{text-decoration:none !important;}


			.nav a:hover{text-decoration:underline !important;}


			.title a:hover{text-decoration:underline !important;}


			.title-2 a:hover{text-decoration:underline !important;}


			.btn:hover{opacity:0.8;}


			.btn a:hover{text-decoration:none !important;}


			.btn{


				-webkit-transition:all 0.3s ease;


				-moz-transition:all 0.3s ease;


				-ms-transition:all 0.3s ease;


				transition:all 0.3s ease;


			}


			table td {border-collapse: collapse !important;}


			.ExternalClass, .ExternalClass a, .ExternalClass span, .ExternalClass b, .ExternalClass br, .ExternalClass p, .ExternalClass div{line-height:inherit;}


			@media only screen and (max-width:500px) {


				table[class="flexible"]{width:100% !important;}


				table[class="center"]{


					float:none !important;


					margin:0 auto !important;


				}


				*[class="hide"]{


					display:none !important;


					width:0 !important;


					height:0 !important;


					padding:0 !important;


					font-size:0 !important;


					line-height:0 !important;


				}


				td[class="img-flex"] img{


					width:100% !important;


					height:auto !important;


				}


				td[class="aligncenter"]{text-align:center !important;}


				th[class="flex"]{


					display:block !important;


					width:100% !important;


				}


				td[class="wrapper"]{padding:0 !important;}


				td[class="holder"]{padding:30px 15px 20px !important;}


				td[class="nav"]{


					padding:20px 0 0 !important;


					text-align:center !important;


				}


				td[class="h-auto"]{height:auto !important;}


				td[class="description"]{padding:30px 20px !important;}


				td[class="i-120"] img{


					width:120px !important;


					height:auto !important;


				}


				td[class="footer"]{padding:5px 20px 20px !important;}


				td[class="footer"] td[class="aligncenter"]{


					line-height:25px !important;


					padding:20px 0 0 !important;


				}


				tr[class="table-holder"]{


					display:table !important;


					width:100% !important;


				}


				th[class="thead"]{display:table-header-group !important; width:100% !important;}


				th[class="tfoot"]{display:table-footer-group !important; width:100% !important;}


			}


		</style>


	</head>


	<body style="margin:0; padding:0;" bgcolor="#eaeced">


		<table style="min-width:320px;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#eaeced">


			<!-- fix for gmail -->


			<tr>


				<td class="hide">


					<table width="600" cellpadding="0" cellspacing="0" style="width:600px !important;">


						<tr>


							<td style="min-width:600px; font-size:0; line-height:0;">&nbsp;</td>


						</tr>


					</table>


				</td>


			</tr>


			<tr>


				<td class="wrapper" style="padding:0 10px;">


					<!-- module 1 -->


					


					<!-- module 2 -->


					<table data-module="module-2" data-thumb="thumbnails/02.png" width="100%" cellpadding="0" cellspacing="0">


						<tr>


							<td data-bgcolor="bg-module" bgcolor="#eaeced">


								<table class="flexible" width="600" align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0">


									<tr>


										<td class="img-flex"><img src="https://mazerine.n-voss.be/img/logoMail.png" style="vertical-align:top;" width="600" alt="" /></td>


									</tr>


									<tr>


										<td data-bgcolor="bg-block" class="holder" style="padding:58px 60px 52px;" bgcolor="#f9f9f9">


											<table width="100%" cellpadding="0" cellspacing="0">


												<tr>


													<td data-color="title" data-size="size title" data-min="25" data-max="45" data-link-color="link title color" data-link-style="text-decoration:none; color:#292c34;" class="title" align="center" style="font:35px/38px Arial, Helvetica, sans-serif; color:#292c34; padding:0 0 24px;">


														Bonjour ' . $result['userPrenom'] . ' ' . $result['userNom'] . ' !


													</td>


												</tr>


												<tr>


													<td data-color="text" data-size="size text" data-min="10" data-max="26" data-link-color="link text color" data-link-style="font-weight:bold; text-decoration:underline; color:#40aceb;" align="center" style="font:bold 16px/25px Arial, Helvetica, sans-serif; color:#888; padding:0 0 23px;">


														Si vous recevez cet email, c\'est que vous avez fait la d&eacute;marche de mot de passe oubli&eacute;.<br>


														Si vous n\'avez pas fait cette d&eacute;marche, ignorez cet email.<br>


														Pour r&eacute;initialiser votre mot de passe, cliquez sur ce bouton<br>


														<strong>Attention, ce lien est valide pendant 40 minutes !</strong>


													</td>


												</tr>


												<tr>


													<td style="padding:0 0 20px;">


														<table width="300" align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0">


															<tr>


																<td data-bgcolor="bg-button" data-size="size button" data-min="10" data-max="16" class="btn" align="center" style="font:12px/14px Arial, Helvetica, sans-serif; color:#f8f9fb; text-transform:uppercase; mso-padding-alt:12px 10px 10px; border-radius:2px;" bgcolor="#7bb84f">


																	<a target="_blank" style="text-decoration:none; color:#f8f9fb; display:block; padding:12px 10px 10px;" href="https://mazerine.n-voss.be/administration/resetPassword.php?t=' . $avtivationToken . '">R&eacute;initialiser votre mot de passe</a>


																</td>


															</tr>


														</table>


													</td>


												</tr>


											</table>


										</td>


									</tr>


								</table>


							</td>


						</tr>


					</table>


					<!-- module 3 -->


					<table data-module="module-3" data-thumb="thumbnails/03.png" width="100%" cellpadding="0" cellspacing="0">


						<tr>


							<td data-bgcolor="bg-module" bgcolor="#eaeced">


								<table class="flexible" width="600" align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0">


									<tr>


										<td class="img-flex"><img src="https://mazerine.n-voss.be/img/separateur2.jpg" style="vertical-align:top;" width="600" height="249" alt="" /></td>


									</tr>


									<tr>


										<td data-bgcolor="bg-block" class="holder" style="padding:65px 60px 50px;" bgcolor="#f9f9f9">


											<table width="100%" cellpadding="0" cellspacing="0">


												<tr>


													<td data-color="title" data-size="size title" data-min="20" data-max="40" data-link-color="link title color" data-link-style="text-decoration:none; color:#292c34;" class="title" align="center" style="font:30px/33px Arial, Helvetica, sans-serif; color:#292c34; padding:0 0 24px;">


														Plus d\'informations ?


													</td>


												</tr>


												<tr>


													<td data-color="text" data-size="size text" data-min="10" data-max="26" data-link-color="link text color" data-link-style="font-weight:bold; text-decoration:underline; color:#40aceb;" align="center" style="font:16px/29px Arial, Helvetica, sans-serif; color:#888; padding:0 0 21px;">


														Rendez-vous sur notre site internet


													</td>


												</tr>


												<tr>


													<td style="padding:0 0 20px;">


														<table width="134" align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0">


															<tr>


																<td data-bgcolor="bg-button" data-size="size button" data-min="10" data-max="16" class="btn" align="center" style="font:12px/14px Arial, Helvetica, sans-serif; color:#f8f9fb; text-transform:uppercase; mso-padding-alt:12px 10px 10px; border-radius:2px;" bgcolor="#f5ba1c">


																	<a target="_blank" style="text-decoration:none; color:#f8f9fb; display:block; padding:12px 10px 10px;" href="https://mazerine.n-voss.be">La Mazerine</a>


																</td>


															</tr>


														</table>


													</td>


												</tr>


											</table>


										</td>


									</tr>


									<tr><td height="28"></td></tr>


								</table>


							</td>


						</tr>


					</table>


					<!-- module 4 -->


					


					<!-- module 7 -->


					<table data-module="module-7" data-thumb="thumbnails/07.png" width="100%" cellpadding="0" cellspacing="0">


						<tr>


							<td data-bgcolor="bg-module" bgcolor="#eaeced">


								<table class="flexible" width="600" align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0">


									<tr>


										<td class="footer" style="padding:0 0 10px;">


											<table width="100%" cellpadding="0" cellspacing="0">


												<tr class="table-holder">


													<th class="tfoot" width="400" align="left" style="vertical-align:top; padding:0;">


														<table width="100%" cellpadding="0" cellspacing="0">


															<tr>


																<td data-color="text" data-link-color="link text color" data-link-style="text-decoration:underline; color:#797c82;" class="aligncenter" style="font:12px/16px Arial, Helvetica, sans-serif; color:#797c82; padding:0 0 10px;">


																	la Mazerine, 2018. &nbsp; All Rights Reserved.


																</td>


															</tr>


														</table>


													</th>


													<th class="thead" width="200" align="left" style="vertical-align:top; padding:0;">


														<table class="center" align="right" cellpadding="0" cellspacing="0">


															<tr>


																<td class="btn" valign="top" style="line-height:0; padding:3px 0 0;">


																	<a target="_blank" style="text-decoration:none;" href="https://www.facebook.com/Centre-commercial-La-Mazerine-496630597176027/"><img src="images/ico-facebook.png" border="0" style="font:12px/15px Arial, Helvetica, sans-serif; color:#797c82;" align="left" vspace="0" hspace="0" width="6" height="13" alt="fb" /></a>


																</td>


															</tr>


														</table>


													</th>


												</tr>


											</table>


										</td>


									</tr>


								</table>


							</td>


						</tr>


					</table>


				</td>


			</tr>


			<!-- fix for gmail -->


			<tr>


				<td style="line-height:0;"><div style="display:none; white-space:nowrap; font:15px/1px courier;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div></td>


			</tr>


		</table>


	</body>


</html>';


                            $boundary = "-----=".md5(rand());


                            $sujet = "Vous avez oublie votre mot de passe ?";


                            $header = "From: \"La Mazerine - no-reply\"<no-reply@lamazerine.com>".$passage_ligne;


                            $header.= "Reply-to: \"La Mazerine - no-reply\" <no-reply@lamazerine.com>".$passage_ligne;


                            $header.= "MIME-Version: 1.0".$passage_ligne;


                            $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;


                            $message = $passage_ligne."--".$boundary.$passage_ligne;


                            $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;


                            $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;


                            $message.= $passage_ligne.$message_txt.$passage_ligne;


                            $message.= $passage_ligne."--".$boundary.$passage_ligne;


                            $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;


                            $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;


                            $message.= $passage_ligne.$message_html.$passage_ligne;


                            $message.= $passage_ligne."--".$boundary."--".$passage_ligne;


                            $message.= $passage_ligne."--".$boundary."--".$passage_ligne;


                            mail($mail,$sujet,$message,$header);


            $_SESSION['success'] = "Un email vous a été envoyé à l'adresse " . $mail ."<br>Lien valable <strong>40 minutes</strong>.";


            header('Location: ../administration/connexion.php');


        }else{


            $_SESSION['erreur'] = "Désolé, mais votre adresse " . $mail ." n'est pas inscrite chez nous !";


            header('Location: ../administration/connexion.php');


        }


    }else{


        $_SESSION['erreur'] = "Votre adresse email n'est pas valide !";


        header('Location: ../administration/connexion.php');


    }


}else{


    $_SESSION['erreur'] = "Il manque des infos!";


    header('Location: ../administration/connexion.php');


}