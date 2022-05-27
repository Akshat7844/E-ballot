
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Ballots</title>
    <script src="main.js"></script>
    <link rel="stylesheet" href="mainpagestyles.css" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body style="width: 100%;">
<header class="header">
  <div class="navcontainer">
    <div class="navrow align-items-center justify-content-between">
      <div class="navlogo">
        <a href="#">E-Ballots</a>
      </div>
      <input type="checkbox" id="nav-check">
      <label for="nav-check" class="nav-toggler">
        <span></span>
      </label>
      <nav class="nav">
        <ul>
          <li><a href="#" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="https://timesofindia.indiatimes.com/elections" target=”_blank”>News</a></li>
          <li><a href="reachUs.php">Reach Us</a></li>
          <li><a href="agenda.php">Party Agenda</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
</header>

<div class="maintext">
  <p> " In a democracy, a government is chosen by voting in an election: a way for an electorate to elect, i.e., choose,
          among several candidates for rule. However, more than likely, elections will be between two opposing parties.
          These two will be the most established and the most popular. For example, in the US the competition is between
          the Republicans and the Democrats. In an indirect democracy voting is the method by which the person elected
          (in charge) represents their policies and party, whilst making decisions, in regard to other authorities.
          For example, in the UK the prime minister has to make decisions in regard to the House Of Commons and House
          Of Lords. direct democracy, is the complete opposite, the person elected, has more independent control and does
          not need to get policies passed throughout the government. "</p>
</div>

<div class="buttons">
  <div class="mainbutton">
      <p>Click here to find out the results of the latest online voting drive</p>
      <button><b><a href="results.php" target="_blank" style="text-decoration: none; color: black;">Results</a></b></button>
  </div>
</div>



<div class="submain1">
  <p style="text-shadow: 4px 2px 3px blueviolet;">RULES AND REGULATIONS</p>
</div>
<div class="rules">
  <div class="siterules">
    <p><b>RULES FOR USING THE WEBSITE:</b></p>
    <ol>
      <li>You can login to the webiste using the voter ID provided by the association</li>
      <li>You can view the latest news regarding the voting drive using the NEWS tab</li>
      <li>You can view the agenda for each party participating in the voting drive under the AGENDA tab</li>
      <li>The AGENDA and NEWS tab will be disabled while the live voting will be going on</li>
      <li>You can view the results for the previous elections and also for the ongoing ones usder the RESULT tab</li>
    </ol>
  </div>
  <div class="voterules">
    <p><b>RULES FOR VOTING:</b></p>
    <ol>
      <li>You can login to the webiste using the voter ID provided by the association</li>
      <li>You can view the latest news regarding the voting drive using the NEWS tab</li>
      <li>You can view the agenda for each party participating in the voting drive under the AGENDA tab</li>
      <li>The AGENDA and NEWS tab will be disabled while the live voting will be going on</li>
      <li>You can view the results for the previous elections and also for the ongoing ones usder the RESULT tab</li>
    </ol>
  </div>
</div>


<div class="submain2">
  <p>VOTING SECTION</p>
</div>

<div class="intro">
  <p>Following are the parties that are partcipating in the ongoing elections, on the left is the party logo, in the middle
    is the middle is the slogan of the respective party for the year 2022, and on the right hand side is the voting button
    which will turn to green and will show voted against the party you voted for. In case you want to check the party AGENDA
    you can click here and visit the party agendas before voting. Wish you a good voting experience on our website.
</div>

<div class="firstdiv">
  <div class="seconddiv">
    <img class="partylogo" src="icons/bjp.png">
  </div>
  <div class="thirddiv">
    <p class='nara'>"Nayi soch Nayi Umeed"</p>
  </div>
  <div class="fourthdiv">
    <button onclick="voteMade('BJP')" class="partybutton">Vote</button>
  </div>
</div>

<hr>

<div class="firstdiv">
  <div class="seconddiv">
    <img class="partylogo" src="icons/congress.png">
  </div>
  <div class="thirddiv">
    <p class='nara'>"Sabke Saath Nyay – Nyuntam Aay"</p>
  </div>
  <div class="fourthdiv">
    <button onclick="voteMade('CON')" class="partybutton">Vote</button>
  </div>
</div>

<hr>

<div class="firstdiv">
  <div class="seconddiv">
    <img class="partylogo" src="icons/aap.jpg">
  </div>
  <div class="thirddiv">
    <p class='nara'>&nbsp;&nbsp;&nbsp;"Agar hum saath aa jayein toh kuch bhi asambhav nahi hai"</p>
  </div>
  <div class="fourthdiv">
    <button onclick="voteMade('AAP')" class="partybutton">Vote</button>
  </div>
</div>

<hr>

<div class="firstdiv">
  <div class="seconddiv">
    <img class="partylogo" src="icons/samajwadi.jpg">
  </div>
  <div class="thirddiv">
    <p class='nara'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Pradesh ka dil jeeteinge hum milkar apne kaam se "</p>
  </div>
  <div class="fourthdiv">
    <button onclick="voteMade('SAM')"  class="partybutton">Vote</button>
  </div>
</div>

<hr>

<div class="firstdiv">
  <div class="seconddiv">
    <img class="partylogo" src="icons/bsp.jpg">
  </div>
  <div class="thirddiv">
    <p class='nara'>&nbsp;&nbsp;&nbsp;&nbsp;"Gaon gaon ko sehar banane do, behanji ko aane do"</p>
  </div>
  <div class="fourthdiv">
    <button  onclick="voteMade('BSP')" class="partybutton">Vote</button>
  </div>
</div>

<hr>

<div class="firstdiv">
  <div class="seconddiv">
    <img class="partylogo" src="icons/jdu.png">
  </div>
  <div class="thirddiv">
    <p class='nara'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Do haazar baaies ki aasha, janta dal vikas ki nayi paribhasha"</p>
  </div>
  <div class="fourthdiv">
    <button onclick="voteMade('JDU')" class="partybutton">Vote</button>
  </div>
</div>

<hr>
<div class="nota">
  <div class="lasthead">
    <p>I CHOOSE NOT TO VOTE FOR ANY OF THE PARTIES IN THE ONGOING ELECTIONS<p>
  </div>
  <button onclick="voteMade('NOTA')" class="partybutton" style="width: 20%;">NOTA</button>
</div>
<hr>

<div class="last">
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>E-Ballots</h4>
          <ul>
            <li><a href="#" style="width: 37%;">About Us</a></li>
            <li><a href="#" style="width: 50%;">Our Services</a></li>
            <li><a href="#" style="width: 30%;">Copyright</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="#" style="width: 20%;">FAQ</a></li>
            <li><a href="#" style="width: 20%;">Rules</a></li>
            <li><a href="#" style="width: 30%;">Feedback</a></li>
            <li><a href="#" style="width: 54%;">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Facilities</h4>
          <ul>
            <li><a href="#" style="width: 55%;">Party Agenda</a></li>
            <li><a href="#" style="width: 20%;">Results</a></li>
            <li><a href="#" style="width: 20%;">News</a></li>
            <li><a href="#" style="width: 100%;">Create your own website</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow Us</h4>
          <div class="social-links">
            <a href="#"><i class=" fab fa-facebook-f"></i></a>
            <a href="#"><i class=" fab fa-twitter"></i></a>
            <a href="#"><i class=" fab fa-instagram"></i></a>
            <a href="#"><i class=" fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<div class="secondlast">
  <p>Copyright &copy;2022 &nbsp;e_Ballots. Designed by Team Shinigami.&nbsp;&nbsp;&nbsp;<em>All Rights Reserved!!</em></p>
</div>
<script>
  ScrollReveal({ 
    reset: true,
    distance: '80px',
    duration: 2500,
    delay: 400
  });

  ScrollReveal().reveal('.header', { delay: 80, origin: 'top' });
  ScrollReveal().reveal('.maintext', { delay: 120, origin: 'right' });
  ScrollReveal().reveal('.buttons', { delay: 130, origin: 'bottom' });
  ScrollReveal().reveal('.submain1', { delay: 150, origin: 'right' });
  ScrollReveal().reveal('.siterules', { delay: 150, origin: 'left' });
  ScrollReveal().reveal('.voterules', { delay: 150, origin: 'right' });
  ScrollReveal().reveal('.submain2', { delay: 90, origin: 'bottom' });
  </script>
</body>
</html>
