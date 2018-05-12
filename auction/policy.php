<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>The Online Auction</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="accept.js" >
</script>
</head>
<?php 
if(empty($_SESSION))//if the session not yet started
 session_start();
if(!isset($_SESSION['myusername'])){
		include 'header.php';
	}
	else{
		include'header_session.php';
	}

?>

<body><BR>
<center><h1><b>Terms and Conditions</b></h1><br></center>

	You shall not host, display, upload, modify, publish, transmit, update or share any information which:<br>
(a) belongs to another person and to which You does not have any right to;<br>
(b) is grossly harmful, harassing, blasphemous, defamatory, obscene, pornographic, paedophilic, libellous, invasive of another's privacy, hateful, or racially, ethnically objectionable, disparaging, relating or encouraging money laundering or gambling, or otherwise unlawful in any manner whatever; or unlawfully threatening or unlawfully harassing 
(c) is misleading in any way;<br>
(d) is patently offensive to the online community, such as sexually explicit content, or content that promotes obscenity, paedophilia, racism, bigotry,<br> hatred or physical harm of any kind against any group or individual;
(e) harasses or advocates harassment of another person;<br>
(f) involves the transmission of "junk mail", "chain letters", or unsolicited mass mailing or "spamming";<br>
(g) promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libellous;<br>
(h) infringes upon or violates any third party's rights [including, but not limited to, intellectual property rights, rights of privacy (including without limitation unauthorized disclosure of a person's name, email address, physical address or phone number) or rights of publicity];<br>
(i) promotes an illegal or unauthorized copy of another person's copyrighted work (see "Copyright complaint" below for instructions on how to lodge a complaint about uploaded copyrighted material), such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files;<br>
(j) contains restricted or password-only access pages, or hidden pages or images (those not linked to or from another accessible page);<br>
(k) provides material that exploits people in a sexual, violent or otherwise inappropriate manner or solicits personal information from anyone;<br>
(l) provides instructional information about illegal activities such as making or buying illegal weapons, violating someone's privacy, or providing or creating computer viruses;<br>
(m) contains video, photographs, or images of another person (with a minor or an adult).
<br>(n) tries to gain unauthorized access or exceeds the scope of authorized access to the Website or to profiles, blogs, communities, account information, bulletins, friend request, or other areas of the Website or solicits passwords or personal identifying information for commercial or unlawful purposes from other users;
<br>(o) engages in commercial activities and/or sales without Our prior written consent such as contests, sweepstakes, barter, advertising and pyramid schemes, or the buying or selling of "virtual" products related to the Website. 
<br>(p) solicits gambling or engages in any gambling activity which We, in Our sole discretion, believes is or could be construed as being illegal;
<br>(q) interferes with another USER's use and enjoyment of the Website or any other individual's User and enjoyment of similar services;
<br>(r) refers to any website or URL that, in Our sole discretion, contains material that is inappropriate for the Website or any other website, contains content that would be prohibited or violates the letter or spirit of these Terms of Use.

<br>(t) infringes any patent, trademark, copyright or other proprietary rights or third party's trade secrets or rights of publicity or privacy or shall not be fraudulent or involve the sale of counterfeit or stolen products;

<br>(v) deceives or misleads the addressee/ users about the origin of such messages or communicates any information which is grossly offensive or menacing in nature;
<br>(w) impersonate another person;
<br>(x) contains software viruses or any other computer code, files or programs designed to interrupt, destroy or limit the functionality of any computer resource; or contains any trojan horses, worms, time bombs, cancelbots, easter eggs or other computer programming routines that may damage, detrimentally interfere with, diminish value of, surreptitiously intercept or expropriate any system, data or personal information;
<BR>
<form action="index.php" method="POST" onsubmit="return checkCheckBox(this)">
<BR><center>I accept: <input type="checkbox" value="0" name="agree"><BR>
<input type="submit" value="Continue">&nbsp&nbsp&nbsp;
<input type="button" value="Exit" onclick="document.location.href='/public_6/register.php';">
</form>


</body></html>
