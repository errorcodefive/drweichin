<?php include_once("analyticstracking.php") ?>
<header>
<?php $isEnglish=True;?>	
</header>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-typography--display-2">Dr. Wei Chin</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">

      	<a class="mdl-typography--title" style="text-decoration: none" href="index.html">Home</a>
      	&nbsp&nbsp
        <a class="mdl-typography--title" style="text-decoration: none" href="procedures.html">Procedures</a>
        &nbsp&nbsp
        <a class="mdl-typography--title" style="text-decoration: none" href="faq.html">FAQ</a>
        &nbsp&nbsp
        <a class="mdl-typography--title" style="text-decoration: none" href="contact.html">Contact Us</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer mdl-layout--small-screen-only">
    <span class="mdl-typography--display-1">Dr. Wei Chin</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="index.html">
      <div class = "mdl-typography--title">
      Home
      </div>
      </a>
      <a class="mdl-navigation__link" href="procedures.html">
      <div class = "mdl-typography--title">
      Procedures
      </div>
      </a>
      <a class="mdl-navigation__link" href="faq.html">
      <div class = "mdl-typography--title">
      FAQ
      </div>
      </a>
      <a class="mdl-navigation__link" href="contact.html">
      <div class = "mdl-typography--title">
      Contact 
      </div>
      </a>
    </nav>
  </div>

	<span>
		<div align ="right">
			<?php include_once("php/changelanguage.php") ?>
		</div>
	</span>

