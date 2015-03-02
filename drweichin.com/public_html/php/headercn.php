<?php include_once("analyticstracking.php") ?>
<header>	
<table id="headTable" width ="100%">
<?php $isEnglish = False;?>
		<tr>
			<td id="logoCell" width = "1%">
				<a href = "index.html">
					<img id = "logoSVG" 
					src="../images/logo.svg" 
					alt= "Dr. Wei Chin" 
					height ="100" 
					width = "100" 
					border= "1"
					align="left"
					>
				</a>
			</td>
			<td class="headerButton">
				<a href ="testprocedures.html" class = "headLink">Procedures</a>
			</td>
			<td class="headerButton">
				<a href = "faq.html" class = "headLink">FAQ</a></td>
			<td class="headerButton">
				<a href = "contact.html" class = "headLink">Contact Us</a>
			</td>
			<td class = "headerButton">
				<?php include ("../php/changelanguage.php");?>
			</td>

			<td width = "20%"></td>
		</tr>
	</table>
</header>
