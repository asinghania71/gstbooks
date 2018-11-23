<!DOCTYPE html>
<html>
<head>
	<title>GST Books-Support Page</title>
	<link rel="stylesheet" type="text/css" href="createitem.css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
body {
    font: 14px "Helvetica Neue",Helvetica,Arial,sans-serif;
    color: #393a3d;
    *background: #fbfbfb;
    background-size: 66px;
}
h1, h2, h3, h4, .h1, .h2, .h3, .h4 {
    color: #393a3d;
}
h2, .h2 {
    font-family: "Geogrotesque","Calibri","Trebuchet MS",sans-serif;
    font-family: "Geogrotesque","Calibri","Trebuchet MS",sans-serif !important;
    font-weight: 500;
    font-size: 44px;
    line-height: 48px;
}

h3, .h3 {
    font-size: 19px;
    line-height: 24px;
    font-family: "Avenir Next LT Pro","Avenir Next","Futura",sans-serif !important;
 }
h1, h2, h3, h4, .h1, .h2, .h3, .h4 {
    color: #393a3d;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    -webkit-border-horizontal-spacing: 0px;
    -webkit-border-vertical-spacing: 0px;
}

.ss-section {
    padding: 20px 0;
    padding-top: 20px;
    padding-right: 0px;
    padding-bottom: 20px;
    padding-left: 0px;
}
.ss-section {
    display: block;
    margin: 0;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
 
}
.bg-white {
    background-color: #fff;
}
.ccontainer>* {
    position: relative;
}
.bg-grey {
    background-color: #edeef0;
}
</style>
</head>
<body>
	
	<div id="header">
	<div id="divlogoleft" >
	<img src="logo.png" height="88px"><span>Books</span>

	<span onclick="openNav()"><div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div></span>
	
	</div>

	<div id="divlogoright" style="font-size: 30px">
<br>GST Books Online Support<br><div style="font-size: 17px">Find answers to your questions or
contact us for help</div>
	</div>	
	</div>
	<!-- The overlay -->

<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->

  <!-- Overlay content -->
  <div class="overlay-content">
  <a href="db.php" >Dashboard</a>
  <a href="sales.php">Sales</a>
  <a href="purchase.php">Purchase</a>
  <a href="report.php">Reports</a>
  <a href="ledger.php" >Ledgers</a>
  <a href="#">Help</a>
  </div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->

  <script type="text/javascript">
  	function myFunction(x) {
    x.classList.toggle("change");

}
  	function openNav() {
  	t=document.getElementById("myNav");
  	// alert(t.style.width=="100%")
  	if(t.style.width=="20%"){	 		
    document.getElementById("myNav").style.width = "0%";
    document.getElementById("n").style.width="99%";}
    else{
    document.getElementById("myNav").style.width = "20%";
	document.getElementById("n").style.width="79%";
	}
    	
    }
/* Close when someone clicks on the "x" symbol inside the overlay */
// function closeNav() {
//     document.getElementById("myNav").style.width = "0%";
// }
  </script>
<ul >
  <li ><a href="#About">About</a></li>
  <li ><a  href="#FAQs">Getting Started</a></li>
  <li ><a  href="#Accounts">Accounts</a></li>
  <li ><a  href="#Security">Security</a></li>
  <li ><a  href="#Features">Features</a></li>
  <li ><a  onclick = "parent.location='mailto:GSTBooks@gmail.com'">Contact</a></li>
  
</ul>
<div id="About" class="ctext"><h2>About GSTBooks Online</h2>
</div>
<div id="About" class="ctext"><p><b><span class="h3">What is GSTBooks Online?</span></b></p>
<p>GSTBooks Online is a cloud based financial management software. Its designed to slash the time you spend managing your business finances, by helping you with tasks such as Creating estimates and invoices,Tracking sales and cash flow,Managing your customers and suppliers,Monitoring your tax and making tax return much easier</p>
<p>Being a true cloud solution, there's no need to install any software. You access GSTBooks Online straight from your internet browser on any computer or web enabled device whenever, wherever.</p>
<p>&nbsp;</p>
<p><b><span class="h3">Internet Connection</span></b><br><br>
GSTBooks Online works best with a fast broadband Internet connection.</p>
<p>&nbsp;</p>
<p><b><span class="h3">Which GSTBooks Online plan is right for me and what is the monthly subscription cost?</span></b></p>
<p>There are three plans to choose from to suite your business' needs at an affordable monthly subscription. We recommend you choose the plan with the feature set that meets your business needs today, you can upgrade to a higher plan as your business grows.</p>
<p>&nbsp;</p>
</div>
<section class="ccontainer bg-grey ss-section" style="" id="FAQs">
            <div class="content-container">
<div id="FAQs"><h2>Getting Started</h2>
</div>
<div class="ctext"><table cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td><p><span class="h3"><b>Is there a trial period and how do I sign up?</b></span></p>
<p>There's a 30 day free trial period. Just enter your name, email address and choose a password and you're good to go - we don't ask for your any payment details for trial.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>What information do I need to sign up?</b></span><br>
Getting started is easy. With some very basic information about your business GSTBooks Online will gather information from over 500,000 businesses around the globe and Australia will automatically configure your GSTBooks Online file. You can always customise and update your setting as you go.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>What payment methods do you accept?</b></span><br>
We accept all major credit and debit cards - Visa, MasterCard and AMEX.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>Can I pay the subscription annually?</b></span><br>
No, subscriptions are charged on a monthly basis.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>Is there a minimum subscription period?</b></span><br>
If you cancel within your free 30 day trial period, you won't be charged anything. If you’re a paying subscriber and you cancel your subscription to GSTBooks Online Service for any reason, Intuit is unable to provide you with a pro-rata refund for the rest of the month that you paid for up front. You will continue to get the GSTBooks Online Service for the remainder of the month you paid for which is when the cancellation of the subscription is made effective and when you will no longer have access to the service.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>Does GSTBooks Online provide onsite setup assistance?</b></span><br>
We do not provide on-site support directly. We have a friendly and knowledgeable support team that is here to help you along the way.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>How do I cancel GSTBooks Online if I decide it isn't right for me?</b></span><br>
It's really easy to cancel within your software with a few clicks of your mouse.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>Can I have more than one company file?</b></span><br>
When you sign up for the first time we'll create a GSTBooks Online user account, using the same login you can create as many company files as you need using the same email address. Just select 'already have an Intuit user ID' from after choosing your plan.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>Can multiple users access my GSTBooks Online company file at the same time?</b><br>
 </span>Depending on what GSTBooks Online plan you're using, you can have up to five users accessing the same company file simultaneously. You can also invite your accountant to access your company file.</p>
<p>Plus you can export reports to MS Excel.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>Do I enjoy discounts for signing up more than 1 company files?</b></span><br>
No, GSTBooks Online does not offer any discounts right now.</p>
<p>&nbsp;</p>
</td>
</tr></tbody></table>
</div>
 <section class="ccontainer bg-white ss-section" style="" id="Accounts">
            <div class="content-container">
<div class="ctext"><h2>Account Settings</h2>

</div>
<div class="ctext"><p><span class="h3">How do I reset my password or recover my user ID?</span><br>
</p>
<p>Go to&nbsp;<a href="http://go.qbo.intuit.com/" data-wa-link="faq-accounts-qbologin">http://go.qbo.intuit.com</a></p>
<p>Click '<b>Can't access your account</b>?'</p>
<p>Select&nbsp;<b>I forgot my user ID</b>&nbsp;and enter the email addresses you used when you signed up for QuickBooks Online.</p>
<p>We will send you an email informing you of your user ID</p>

</div>



</div>
           </section>
<section class="ccontainer bg-grey ss-section" style="" id="Security">
            <div class="content-container">
<div class="ctext" id="Security"><h2>Data and Security</h2>
</div>
<div class="ctext"><p><span class="h3"><b>How secure is my data?</b></span><br>
Intuit takes security very seriously and ensures your data is secured and available to you</a>.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>What happens to my data if I cancel?</b></span><br>
If you decide to cancel during the free 30 day trial, we'll delete all traces of your data from our servers immediately. When it's gone, it's gone - so before you cancel, make sure you've saved all the reports you want to keep.</p>
<p>If you're a paying QuickBooks Online subscriber, after you cancel we'll give you read-only access to all your data. This will last for 365 days, after which we'll delete all your data from our servers.
You can also export any QuickBooks Online report to MS Excel.</p>
</div>

</div>
           </section>	
 <section class="ccontainer bg-white ss-section" style="" id="Features">
            <div class="content-container">
  <div class="ctext"><h2>Product Features</h2></div>
<div class="ctext"><p><span class="h3"><b>What are some of the reports available in GSTBooks Online?</b></span><br>
Here are a few commonly used reports: Profit &amp; Loss, Balance Sheet, General Ledger, Trial Balance, Statement of Cash Flows, and Transaction List.</p>
<p>&nbsp;</p>
<p><span class="h3"><b>Can I upload more than 1 company logo?</b></span><br>
No, you can upload up to one company logo per company file.</p>
</div>
</div>
           </section>
</body>
</html>
