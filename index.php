<?php include('Constants.php'); ?>

<!doctype html>
<html xmlns:og="http://ogp.me/ns" lang="pt-br">
<head>
	<meta charset="utf-8" />

	<title><?php echo _TITLE ?></title>

  <!-- META TAGS -->
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="apple-touch-fullscreen" content="yes" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="format-detection" content="telephone=yes">
  <meta http-equiv="cleartype" content="on">

  <!-- Facebook  -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.dddmg.org" />
  <meta property="og:title" content="DDD|MG 2015 - International Simposium on Digital Disease Detection for Mass Gathering." />
  <meta property="og:image" content="" />
  <meta property="og:description" content="The symposium DDDMG presents an opportunity to exchange experiences and dissemination of DDD use of strategies during mass gatherings." />

  <!-- Twitter -->
  <meta name="twitter:card" value="summary_large_image">
  <meta name="twitter:card" value="summary">
  <meta name="twitter:creator" value="@dddmg2015">
  <meta name="twitter:site" value="@dddmg2015">
  <meta name="twitter:title" content="International Simposium on Digital Disease Detection for Mass Gathering.">
  <meta name="twitter:description" content="The symposium DDDMG presents an opportunity to exchange experiences and dissemination of DDD use of strategies during mass gatherings.">
  <meta name="twitter:image:src" content="">

  <!-- Apple Touch Icon -->
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="touch-icon@2x.png">
  <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="120x120" href="touch-icon@2x.png">
  <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad@2x.png">

  <!-- Humans -->
  <link type="text/plain" rel="author" href="http://www.dddmg.org/humans.txt" />

  <!-- CSS -->
  <link rel="stylesheet" href="dist/css/style.min.css">
</head>

<body>
  <div class="container-fluid">
    <header id="header-primary" class="row header-primary">

      <div id="image-header" class="image-header"></div>
      <div id="pattern-header" class="pattern-header"></div>

      <div class="col-xs-6 col-xs-offset-6 col-sm-offset-8 col-md-2 col-md-offset-10">
        <div id="switch-language" class="switch-language">
          <button data-language="pt" class="pt" title="PT">PT</button>
          <button data-language="en" class="en" title="EN">EN</button>
        </div>
      </div>

      <h1 id="logo-primary" class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4 logo-primary">
        <a href="#" title="DDD MG">DDD|MG 2015</a>
      </h1>

      <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4 subtitle">
        <time data-i18n="date.first" datetime="2015-03-25">March 25 -</time><time data-i18n="date.second" datetime="2015-03-27">27</time>
        <p data-i18n="date.local">Recife, PE - Brazil</p>
      </div>

      <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4 countdown" id="countdown">
        <p id="days" data-time=""></p>
        <p id="hours" data-time="hr"></p>
        <p id="minutes" data-time="min"></p>
        <p id="seconds" data-time="sec"></p>
      </div>

      <div id="down" class="down"></div>

      <nav id="nav-primary" class="col-xs-12 nav-primary">
        <ul class="nav-list">
          <li class="col-xs-2 nav-item"><a href="#header-primary" data-i18n="nav.home;[title]nav.aboutHome" class="nav-link" title="Home">Home</a></li>
          <li class="col-xs-2 nav-item"><a href="#about" data-i18n="nav.about;[title]nav.aboutTitle" class="nav-link" title="About">About</a></li>
          <li class="col-xs-4 nav-item nav-logo"><a href="#about" class="nav-link" title="Logo Aqui!">Logo Aqui!</a></li>
          <li class="col-xs-2 nav-item"><a href="#agenda" data-i18n="nav.agenda;[title]nav.agendaTitle" class="nav-link" title="Agenda">Agenda</a></li>
          <li class="col-xs-2 nav-item"><a href="#register" data-i18n="nav.register;[title]nav.registerTitle" class="nav-link" title="Register">Register</a></li>
        </ul>
      </nav>
    </header>

    <main id="main" class="main">
      <section id="about" class="row about"> <!-- About -->
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
          <h3 data-i18n="about.title" class="section-title">About</h3>
        </div>

        <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-5">
          <p data-i18n="about.text01" class="section-text">
            Mass gatherings provide a meeting point for great numbers of people,
            but with this comes an increased risk for the spread of infectious
            disease. To varying degrees, depending on each event’s size and
            participants, mass gatherings heighten systematic contact between
            individuals from diverse places and backgrounds. Such events often
            become catalysts for outbreaks and epidemics.
          </p>

          <p data-i18n="about.text02" class="section-text">
            During these gatherings, leaders in health risk management must
            fully grasp a range of possible scenarios, in order to identify
            and control new disease hotspots. By deploying the latest tools
            in epidemiology and public health, these professionals can improve
            the detection of heath threats among event participants and thus
            reduce overall risks.
          </p>

          <p data-i18n="about.text03" class="section-text">
            Digital Disease Detection has shown, on numerous occasions
            throughout the world, that it is possible to promptly identify
            threats and disseminate information in order to control the
            occurrence before a major outbreak can spread. Tools such as
            Facebook and Twitter, and strategies like participatory reporting
            and data-mining of health-related web activity can augment the
            existing defenses that protect public health.
          </p>
        </div>

        <div class="col-xs-12 col-sm-5 col-sm-offset-0 col-md-5">
          <p data-i18n="about.text04" class="section-text">
            As a branch of the international Digital Disease Detection
            Conference series (healthmap.org/ddd), the DDDMG symposium will
            offer an opportunity to share past experiences and successful
            strategies for using DDD specifically during mass events.
          </p>

          <p data-i18n="about.text05" class="section-text">
            The symposium will take place in Recife, Pernambuco, known as the
            Silicon Valley of Brazil. A cradle of innovation, Recife is home
            to the nation’s largest tech research park and is rich in human
            capital in the fields of information and communication technology.

            The 3-day symposium will include lively discussions of past
            experiences, along with formal conference panels and presentations.
          </p>
        </div>
      </section>

      <section id="agenda" class="row agenda"> <!-- Agenda -->
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
          <h3 data-i18n="agenda.title" class="section-title">agenda at glance</h3>
        </div>

        <aside class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
          <h4 data-i18n="agenda.conferencesTitle" class="agenda-title conferences">Conferences</h4>
          <ul class="agenda-list">
            <li class="agenda-item" data-i18n="agenda.conferenceList01">Challenges in the Mass Gathering Health Surveillance.</li>
            <li class="agenda-item" data-i18n="agenda.conferenceList02">Innovation and Health: New waves of innovation in the world and how epidemiology can provide the tools.</li>
            <li class="agenda-item" data-i18n="agenda.conferenceList03">Using social media as a strateagy to spread a new model of health communication.</li>
            <li class="agenda-item" data-i18n="agenda.conferenceList04">Potential risks of pandemics: Projections to 2016.</li>
          </ul>
        </aside>

        <aside class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
          <h4 data-i18n="agenda.panelsTitle" class="agenda-title panels">Panels</h4>
          <ul class="agenda-list">
            <li class="agenda-item" data-i18n="agenda.panelsList01">OMG...Is there a Crystal Ball for Pandemics?</li>
            <li class="agenda-item" data-i18n="agenda.panelsList02">Limits of ethics in Public Health 2.0 age.</li>
            <li class="agenda-item" data-i18n="agenda.panelsList03">Epidemic Intelligence for Mass Gatherings.</li>
            <li class="agenda-item" data-i18n="agenda.panelsList04">Strategies for Participatory Surveillance for Mass Gathering.</li>
            <li class="agenda-item" data-i18n="agenda.panelsList05">Perspectives of Health Managment for Olympics 2016.</li>
          </ul>
        </aside>

        <aside class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
          <h4 data-i18n="agenda.rapidTitle" class="agenda-title rapid-fire">Rapid fire talks</h4>
          <ul class="agenda-list">
            <li class="agenda-item" data-i18n="agenda.rapidFireList01">Coming soon</li>
          </ul>
        </aside>
      </section>

      <section id="register" class="row register"> <!-- Register -->
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
          <h3 data-i18n="register.title" class="section-title">Register</h3>

          <p data-i18n="register.text01" class="section-text">
            Stay tuned for the opening of registration, and if you wish, sign up to receive updates about the event.
          </p>
        </div>

        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1">
          <form action="javascript:;" id="form-register" class="form form-register">
            <div class="form-group">
              <label data-i18n="register.inputName" for="inputName">Name</label>
              <input data-i18n="[placeholder]register.namePlaceholder" id="inputName" type="text" class="form-control input-primary" placeholder="Name">
            </div>

            <div class="form-group">
              <label data-i18n="register.inputEmail" for="inputEmail">Email</label>
              <input data-i18n="[placeholder]register.emailPlaceholder" id="inputEmail" type="email" class="form-control input-primary" placeholder="Email">
            </div>

            <div class="form-group">
              <label data-i18n="register.inputOrganization" for="inputOrganization">Organization</label>
              <input data-i18n="[placeholder]register.organizationPlaceholder" id="inputOrganization" type="text" class="form-control input-primary" placeholder="Organization">
            </div>

             <div class="form-group">
              <label data-i18n="register.inputCountry" for="inputCountry">Country</label>
              <select class="form-control input-primary" name="country" id="inputCountry">
                <option value="1" data-i18n="countries.country1">AFGHANISTAN</option>
                <option value="2" data-i18n="countries.country2">AKROTIRI E DEKÉLIA</option>
                <option value="3" data-i18n="countries.country3">SOUTH AFRICA</option>
                <option value="4" data-i18n="countries.country4">ALBANIA</option>
                <option value="5" data-i18n="countries.country5">GERMANY</option>
                <option value="6" data-i18n="countries.country6">AMERICAN SAMOA</option>
                <option value="7" data-i18n="countries.country7">ANDORRA</option>
                <option value="8" data-i18n="countries.country8">ANGOLA</option>
                <option value="9" data-i18n="countries.country9">ANGUILLA</option>
                <option value="10" data-i18n="countries.country10">ANTIGUA AND BARBUDA</option>
                <option value="11" data-i18n="countries.country11">NETHERLANDS ANTILLES</option>
                <option value="12" data-i18n="countries.country12">SAUDI ARABIA</option>
                <option value="13" data-i18n="countries.country13">ALGERIA</option>
                <option value="14" data-i18n="countries.country14">ARGENTINA</option>
                <option value="15" data-i18n="countries.country15">ARMENIA</option>
                <option value="16" data-i18n="countries.country16">ARUBA</option>
                <option value="17" data-i18n="countries.country17">AUSTRALIA</option>
                <option value="18" data-i18n="countries.country18">AUSTRIA</option>
                <option value="19" data-i18n="countries.country19">AZERBAIJAN</option>
                <option value="20" data-i18n="countries.country20">BAHAMAS, THE</option>
                <option value="21" data-i18n="countries.country21">BANGLADESH</option>
                <option value="22" data-i18n="countries.country22">BARBADOS</option>
                <option value="23" data-i18n="countries.country23">BAHRAIN</option>
                <option value="24" data-i18n="countries.country24">BASSAS DA INDIA</option>
                <option value="25" data-i18n="countries.country25">BELGIUM</option>
                <option value="26" data-i18n="countries.country26">BELIZE</option>
                <option value="27" data-i18n="countries.country27">BENIN</option>
                <option value="28" data-i18n="countries.country28">BERMUDA</option>
                <option value="29" data-i18n="countries.country29">BELARUS</option>
                <option value="30" data-i18n="countries.country30">BOLIVIA</option>
                <option value="31" data-i18n="countries.country31">BOSNIA AND HERZEGOVINA</option>
                <option value="32" data-i18n="countries.country32">BOTSWANA</option>
                <option value="33" data-i18n="countries.country33" selected>BRAZIL</option>
                <option value="34" data-i18n="countries.country34">BRUNEI DARUSSALAM</option>
                <option value="35" data-i18n="countries.country35">BULGARIA</option>
                <option value="36" data-i18n="countries.country36">BURKINA FASO</option>
                <option value="37" data-i18n="countries.country37">BURUNDI</option>
                <option value="38" data-i18n="countries.country38">BHUTAN</option>
                <option value="39" data-i18n="countries.country39">CAPE VERDE</option>
                <option value="40" data-i18n="countries.country40">CAMEROON</option>
                <option value="41" data-i18n="countries.country41">CAMBODIA</option>
                <option value="42" data-i18n="countries.country42">CANADA</option>
                <option value="43" data-i18n="countries.country43">QATAR</option>
                <option value="44" data-i18n="countries.country44">KAZAKHSTAN</option>
                <option value="45" data-i18n="countries.country45">CENTRAL AFRICAN REPUBLIC</option>
                <option value="46" data-i18n="countries.country46">CHAD</option>
                <option value="47" data-i18n="countries.country47">CHILE</option>
                <option value="48" data-i18n="countries.country48">CHINA</option>
                <option value="49" data-i18n="countries.country49">CYPRUS</option>
                <option value="50" data-i18n="countries.country50">COLOMBIA</option>
                <option value="51" data-i18n="countries.country51">COMOROS</option>
                <option value="52" data-i18n="countries.country52">CONGO</option>
                <option value="53" data-i18n="countries.country53">CONGO DEMOCRATIC REPUBLIC</option>
                <option value="54" data-i18n="countries.country54">KOREA NORTH</option>
                <option value="55" data-i18n="countries.country55">KOREA SOUTH</option>
                <option value="56" data-i18n="countries.country56">IVORY COAST</option>
                <option value="57" data-i18n="countries.country57">COSTA RICA</option>
                <option value="58" data-i18n="countries.country58">CROATIA</option>
                <option value="59" data-i18n="countries.country59">CUBA</option>
                <option value="60" data-i18n="countries.country60">DENMARK</option>
                <option value="61" data-i18n="countries.country61">DOMINICA</option>
                <option value="62" data-i18n="countries.country62">EGYPT</option>
                <option value="63" data-i18n="countries.country63">UNITED ARAB EMIRATES</option>
                <option value="64" data-i18n="countries.country64">ECUADOR</option>
                <option value="65" data-i18n="countries.country65">ERITREA</option>
                <option value="66" data-i18n="countries.country66">SLOVAKIA</option>
                <option value="67" data-i18n="countries.country67">SLOVENIA</option>
                <option value="68" data-i18n="countries.country68">SPAIN</option>
                <option value="69" data-i18n="countries.country69">UNITED STATES</option>
                <option value="70" data-i18n="countries.country70">ESTONIA</option>
                <option value="71" data-i18n="countries.country71">ETHIOPIA</option>
                <option value="72" data-i18n="countries.country72">GAZA STRIP</option>
                <option value="73" data-i18n="countries.country73">FIJI</option>
                <option value="74" data-i18n="countries.country74">PHILIPPINES</option>
                <option value="75" data-i18n="countries.country75">FINLAND</option>
                <option value="76" data-i18n="countries.country76">FRANCE</option>
                <option value="77" data-i18n="countries.country77">GABON</option>
                <option value="78" data-i18n="countries.country78">GAMBIA</option>
                <option value="79" data-i18n="countries.country79">GHANA</option>
                <option value="80" data-i18n="countries.country80">GEORGIA</option>
                <option value="81" data-i18n="countries.country81">GIBRALTAR</option>
                <option value="82" data-i18n="countries.country82">GRENADA</option>
                <option value="83" data-i18n="countries.country83">GREECE</option>
                <option value="84" data-i18n="countries.country84">GREENLAND</option>
                <option value="85" data-i18n="countries.country85">GUADELOUPE</option>
                <option value="86" data-i18n="countries.country86">GUAM</option>
                <option value="87" data-i18n="countries.country87">GUATEMALA</option>
                <option value="88" data-i18n="countries.country88">GUERNSEY</option>
                <option value="89" data-i18n="countries.country89">GUYANA</option>
                <option value="90" data-i18n="countries.country90">FRENCH GUIANA</option>
                <option value="91" data-i18n="countries.country91">GUINEA</option>
                <option value="92" data-i18n="countries.country92">EQUATORIAL GUINEA</option>
                <option value="93" data-i18n="countries.country93">GUINEA-BISSAU</option>
                <option value="94" data-i18n="countries.country94">HAITI</option>
                <option value="95" data-i18n="countries.country95">HONDURAS</option>
                <option value="96" data-i18n="countries.country96">HONG KONG</option>
                <option value="97" data-i18n="countries.country97">HUNGARY</option>
                <option value="98" data-i18n="countries.country98">YEMEN</option>
                <option value="99" data-i18n="countries.country99">BOUVET ISLAND</option>
                <option value="100" data-i18n="countries.country100">CHRISTMAS ISLAND</option>
                <option value="101" data-i18n="countries.country101">CLIPPERTON ISLAND</option>
                <option value="102" data-i18n="countries.country102">JUAN DE NOVA ISLAND</option>
                <option value="103" data-i18n="countries.country103">ISLE OF MAN</option>
                <option value="104" data-i18n="countries.country104">NAVASSA ISLAND</option>
                <option value="105" data-i18n="countries.country105">EUROPA ISLAND</option>
                <option value="106" data-i18n="countries.country106">NORFOLK ISLAND</option>
                <option value="107" data-i18n="countries.country107">TROMELIN ISLAND</option>
                <option value="108" data-i18n="countries.country108">ASHMORE AND CARTIER ISLANDS</option>
                <option value="109" data-i18n="countries.country109">CAYMAN ISLANDS</option>
                <option value="110" data-i18n="countries.country110">COCOS (KEELING) ISLANDS</option>
                <option value="111" data-i18n="countries.country111">COOK ISLANDS</option>
                <option value="112" data-i18n="countries.country112">CORAL SEA ISLANDS</option>
                <option value="113" data-i18n="countries.country113">FALKLAND ISLANDS (ISLAS MALVINAS)</option>
                <option value="114" data-i18n="countries.country114">FAROE ISLANDS</option>
                <option value="115" data-i18n="countries.country115">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                <option value="116" data-i18n="countries.country116">NORTHERN MARIANA ISLANDS</option>
                <option value="117" data-i18n="countries.country117">MARSHALL ISLANDS</option>
                <option value="118" data-i18n="countries.country118">PARACEL ISLANDS</option>
                <option value="119" data-i18n="countries.country119">PITCAIRN ISLANDS</option>
                <option value="120" data-i18n="countries.country120">SOLOMON ISLANDS</option>
                <option value="121" data-i18n="countries.country121">SPRATLY ISLANDS</option>
                <option value="122" data-i18n="countries.country122">UNITED STATES VIRGIN ISLANDS</option>
                <option value="123" data-i18n="countries.country123">BRITISH VIRGIN ISLANDS</option>
                <option value="124" data-i18n="countries.country124">INDIA</option>
                <option value="125" data-i18n="countries.country125">INDONESIA</option>
                <option value="126" data-i18n="countries.country126">IRAN</option>
                <option value="127" data-i18n="countries.country127">IRAQ</option>
                <option value="128" data-i18n="countries.country128">IRELAND</option>
                <option value="129" data-i18n="countries.country129">ICELAND</option>
                <option value="130" data-i18n="countries.country130">ISRAEL</option>
                <option value="131" data-i18n="countries.country131">ITALY</option>
                <option value="132" data-i18n="countries.country132">JAMAICA</option>
                <option value="133" data-i18n="countries.country133">JAN MAYEN</option>
                <option value="134" data-i18n="countries.country134">JAPAN</option>
                <option value="135" data-i18n="countries.country135">JERSEY</option>
                <option value="136" data-i18n="countries.country136">DJIBOUTI</option>
                <option value="137" data-i18n="countries.country137">JORDAN</option>
                <option value="138" data-i18n="countries.country138">KIRIBATI</option>
                <option value="139" data-i18n="countries.country139">KUWAIT</option>
                <option value="140" data-i18n="countries.country140">LAOS</option>
                <option value="141" data-i18n="countries.country141">LESOTHO</option>
                <option value="142" data-i18n="countries.country142">LATVIA</option>
                <option value="143" data-i18n="countries.country143">LEBANON</option>
                <option value="144" data-i18n="countries.country144">LIBERIA</option>
                <option value="145" data-i18n="countries.country145">LIBYAN ARAB JAMAHIRIYA</option>
                <option value="146" data-i18n="countries.country146">LIECHTENSTEIN</option>
                <option value="147" data-i18n="countries.country147">LITHUANIA</option>
                <option value="148" data-i18n="countries.country148">LUXEMBOURG</option>
                <option value="149" data-i18n="countries.country149">MACAO</option>
                <option value="150" data-i18n="countries.country150">MACEDONIA</option>
                <option value="151" data-i18n="countries.country151">MADAGASCAR</option>
                <option value="152" data-i18n="countries.country152">MALAYSIA</option>
                <option value="153" data-i18n="countries.country153">MALAWI</option>
                <option value="154" data-i18n="countries.country154">MALDIVES</option>
                <option value="155" data-i18n="countries.country155">MALI</option>
                <option value="156" data-i18n="countries.country156">MALTA</option>
                <option value="157" data-i18n="countries.country157">MOROCCO</option>
                <option value="158" data-i18n="countries.country158">MARTINIQUE</option>
                <option value="159" data-i18n="countries.country159">MAURITIUS</option>
                <option value="160" data-i18n="countries.country160">MAURITANIA</option>
                <option value="161" data-i18n="countries.country161">MAYOTTE</option>
                <option value="162" data-i18n="countries.country162">MEXICO</option>
                <option value="163" data-i18n="countries.country163">MYANMAR BURMA</option>
                <option value="164" data-i18n="countries.country164">MICRONESIA</option>
                <option value="165" data-i18n="countries.country165">MOZAMBIQUE</option>
                <option value="166" data-i18n="countries.country166">MOLDOVA</option>
                <option value="167" data-i18n="countries.country167">MONACO</option>
                <option value="168" data-i18n="countries.country168">MONGOLIA</option>
                <option value="169" data-i18n="countries.country169">MONTENEGRO</option>
                <option value="170" data-i18n="countries.country170">MONTSERRAT</option>
                <option value="171" data-i18n="countries.country171">NAMIBIA</option>
                <option value="172" data-i18n="countries.country172">NAURU</option>
                <option value="173" data-i18n="countries.country173">NEPAL</option>
                <option value="174" data-i18n="countries.country174">NICARAGUA</option>
                <option value="175" data-i18n="countries.country175">NIGER</option>
                <option value="176" data-i18n="countries.country176">NIGERIA</option>
                <option value="177" data-i18n="countries.country177">NIUE</option>
                <option value="178" data-i18n="countries.country178">NORWAY</option>
                <option value="179" data-i18n="countries.country179">NEW CALEDONIA</option>
                <option value="180" data-i18n="countries.country180">NEW ZEALAND</option>
                <option value="181" data-i18n="countries.country181">OMAN</option>
                <option value="182" data-i18n="countries.country182">NETHERLANDS</option>
                <option value="183" data-i18n="countries.country183">PALAU</option>
                <option value="184" data-i18n="countries.country184">PALESTINE</option>
                <option value="185" data-i18n="countries.country185">PANAMA</option>
                <option value="186" data-i18n="countries.country186">PAPUA NEW GUINEA</option>
                <option value="187" data-i18n="countries.country187">PAKISTAN</option>
                <option value="188" data-i18n="countries.country188">PARAGUAY</option>
                <option value="189" data-i18n="countries.country189">PERU</option>
                <option value="190" data-i18n="countries.country190">FRENCH POLYNESIA</option>
                <option value="191" data-i18n="countries.country191">POLAND</option>
                <option value="192" data-i18n="countries.country192">PUERTO RICO</option>
                <option value="193" data-i18n="countries.country193">PORTUGAL</option>
                <option value="194" data-i18n="countries.country194">KENYA</option>
                <option value="195" data-i18n="countries.country195">KYRGYZSTAN</option>
                <option value="196" data-i18n="countries.country196">UNITED KINGDOM</option>
                <option value="197" data-i18n="countries.country197">CZECH REPUBLIC</option>
                <option value="198" data-i18n="countries.country198">DOMINICAN REPUBLIC</option>
                <option value="199" data-i18n="countries.country199">ROMANIA</option>
                <option value="200" data-i18n="countries.country200">RWANDA</option>
                <option value="201" data-i18n="countries.country201">RUSSIAN FEDERATION</option>
                <option value="202" data-i18n="countries.country202">WESTERN SAHARA</option>
                <option value="203" data-i18n="countries.country203">EL SALVADOR</option>
                <option value="204" data-i18n="countries.country204">SAMOA</option>
                <option value="205" data-i18n="countries.country205">SAINT HELENA</option>
                <option value="206" data-i18n="countries.country206">SAINT LUCIA</option>
                <option value="207" data-i18n="countries.country207">HOLY SEE</option>
                <option value="208" data-i18n="countries.country208">SAINT KITTS AND NEVIS</option>
                <option value="209" data-i18n="countries.country209">SAN MARINO</option>
                <option value="210" data-i18n="countries.country210">SAINT PIERRE AND MIQUELON</option>
                <option value="211" data-i18n="countries.country211">SAO TOME AND PRINCIPE</option>
                <option value="212" data-i18n="countries.country212">SAINT VINCENT AND THE GRENADINES</option>
                <option value="213" data-i18n="countries.country213">SEYCHELLES</option>
                <option value="214" data-i18n="countries.country214">SENEGAL</option>
                <option value="215" data-i18n="countries.country215">SIERRA LEONE</option>
                <option value="216" data-i18n="countries.country216">SERBIA</option>
                <option value="217" data-i18n="countries.country217">SINGAPORE</option>
                <option value="218" data-i18n="countries.country218">SYRIA</option>
                <option value="219" data-i18n="countries.country219">SOMALIA</option>
                <option value="220" data-i18n="countries.country220">SRI LANKA</option>
                <option value="221" data-i18n="countries.country221">SWAZILAND</option>
                <option value="222" data-i18n="countries.country222">SUDAN</option>
                <option value="223" data-i18n="countries.country223">SWEDEN</option>
                <option value="224" data-i18n="countries.country224">SWITZERLAND</option>
                <option value="225" data-i18n="countries.country225">SURINAME</option>
                <option value="226" data-i18n="countries.country226">SVALBARD</option>
                <option value="227" data-i18n="countries.country227">THAILAND</option>
                <option value="228" data-i18n="countries.country228">TAIWAN</option>
                <option value="229" data-i18n="countries.country229">TAJIKISTAN</option>
                <option value="230" data-i18n="countries.country230">TANZANIA</option>
                <option value="231" data-i18n="countries.country231">BRITISH INDIAN OCEAN TERRITORY</option>
                <option value="232" data-i18n="countries.country232">HEARD ISLAND AND MCDONALD ISLANDS</option>
                <option value="233" data-i18n="countries.country233">TIMOR-LESTE</option>
                <option value="234" data-i18n="countries.country234">TOGO</option>
                <option value="235" data-i18n="countries.country235">TOKELAU</option>
                <option value="236" data-i18n="countries.country236">TONGA</option>
                <option value="237" data-i18n="countries.country237">TRINIDAD AND TOBAGO</option>
                <option value="238" data-i18n="countries.country238">TUNISIA</option>
                <option value="239" data-i18n="countries.country239">TURKS AND CAICOS ISLANDS</option>
                <option value="240" data-i18n="countries.country240">TURKMENISTAN</option>
                <option value="241" data-i18n="countries.country241">TURKEY</option>
                <option value="242" data-i18n="countries.country242">TUVALU</option>
                <option value="243" data-i18n="countries.country243">UKRAINE</option>
                <option value="244" data-i18n="countries.country244">UGANDA</option>
                <option value="245" data-i18n="countries.country245">URUGUAY</option>
                <option value="246" data-i18n="countries.country246">UZBEKISTAN</option>
                <option value="247" data-i18n="countries.country247">VANUATU</option>
                <option value="248" data-i18n="countries.country248">VENEZUELA</option>
                <option value="249" data-i18n="countries.country249">VIETNAM</option>
                <option value="250" data-i18n="countries.country250">WALLIS AND FUTUNA</option>
                <option value="251" data-i18n="countries.country251">ZAMBIA</option>
                <option value="252" data-i18n="countries.country252">ZIMBABWE</option>
              </select>
            </div>

            <div class="form-group">
              <label data-i18n="register.inputCaptcha" for="inputCaptcha">Enter code here</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <figure>
                   <img src="sys/captcha.png" alt="Captcha">
                  </figure>
                </span>
                <input data-i18n="[placeholder]register.captchaPlaceholder" type="text" id="inputCaptcha" class="form-control input-primary" placeholder="Enter code here">
              </div>
            </div>

            <div class="form-group btn-send">
              <input data-i18n="[value]register.send" type="submit" class="btn btn-primary" value="send">
            </div>

            <div id="feedback" class="alert"></div>
          </form>
        </div>
      </section>
    </main>

    <footer class="row footer-primary">
      <div class="col-xs-12 col-sm-7 col-md-5 organizers">
        <a href="http://epitrack.com.br" target="_blank" class="organizers-links epitrack" title="Epitrack"></a>
        <a href="http://www.skollglobalthreats.org/" target="_blank" class="organizers-links skoll" title="Skoll"></a>
        <a href="http://healthmap.org" target="_blank" class="organizers-links healthmap" title="HealthMap"></a>
      </div>

      <div class="col-xs-12 col-sm-2 col-sm-offset-3 col-md-1 col-md-offset-6 social">
        <a href="https://www.facebook.com/pages/DDDMG-2015/723298371057302" target="_blank" class="social-links facebook" title="Facebook">Facebook</a>
        <a href="https://twitter.com/dddmg2015" target="_blank" class="social-links twitter" title="twitter">Twitter</a>
      </div>
    </footer>
  </div>

	<!-- JS -->
  <script src="dist/js/scripts.min.js"></script>
  <script src="dist/js/libs.min.js"></script>

  <script src="bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
  <script src="src/js/APP.Parallax.js"></script>
  <script src="src/js/APP.Countdown.js"></script>
  <script>APP.init()</script>

  <!-- BrowserSync -->
  <!--
  <script type='text/javascript'>//<![CDATA[
;document.write("<script defer src='//HOST:3000/socket.io/socket.io.js'><\/script><script defer src='//HOST:3001/client/browser-sync-client.0.9.1.js'><\/script>".replace(/HOST/g, location.hostname));
//]]></script>
 -->


  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-57021707-1', 'auto');
    ga('send', 'pageview');
  </script>

</body>
</html>
