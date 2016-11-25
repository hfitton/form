<!DOCTYPE HTML>
<html>
<body>
  <head>
  <link rel="stylesheet" href="keasStyle.css">
  <title>ScoutsNZ</title>
     </head>
      <div class='header'>
        <img src="pictures/scoutheader.png" alt="Scout Banner" width=100%>

      </div> <!--closes header div-->
      <div class="container">
          <h2>Consent and application to join Waikanae Scout Group</h2>
          <div class="divider">
              <p>About your son or daughter</p>
          </div>

          <div class = 'left'>
            <form action="" method='post'>

              Surname: <br><input type='text' name='surname' required='required'><br>
              Firstname:<br><input type='text' name='firstname'><br>

              Address:<br><input type='text' name='address'><br>
              Postcode:<br><input type='int' name='postcode'><br>

              Home phone:<br> <input type='int' name='homePhone'><br>
              Mobile phone:<br><input type='int' name='mobile'><br>

              Email:<br><input type='email' name='email'><br>
              Date of birth:<br><input type='int' name='dob'><br>
            </div> <!--closes left div-->

              <div class='right'>

              School Year:<br> <input type='int' name='schoolyr'><br>
              Ethnicity:<br><input type='text' name='ethnicity'><br>

              School:<br><input type='text' name='school'><br>
              Medical Notes:<br><input type='text' name='medical'><br>

              Dietary Notes:<br><input type='text' name='diet'><br>

              Interest and hobbies:<br> <input type='text' name='hobbies'><br>

              <br><label for=genqm>Male:</label> <input type=radio name=gender id=genqm value=male>
              <label for =genqf>Female:</label> <input type=radio name=gender id=genqf value=female>

        </div> <!--closes right div-->
        <!--had to put a separate id else the form didn't flow properly.-->
        <div id="comment">General comments: (Please note any information that may limit you son or daughter from fully participating in activities):
          <input type='text' name='comments'></div><br><br>

    <div class='divider'><p>About You</p></div>

    <div class = 'left'>

      <p>Parent / Caregiver 1</p>

        Surname: <br><input type='text' name='p1surname' required='required'><br>
        Firstname:<br><input type='text' name='p1firstname'><br>

        Address:<br><input type='text' name='p1address'><br>
        Postcode:<br><input type='int' name='p1postcode'><br>

        Home phone:<br> <input type='int' name='p1homePhone'><br>
        Work phone:<br><input type='int' name='p1work'><br>
        Mobile phone:<br><input type='int' name='p1mobile'><br>

        Email:<br><input type='email' name='p1email'><br>
        Relationship to child:<br><input type='text' name='p1relation'><br>
        Occupation:<br> <input type='text' name='p1occupation'><br>
        Skills and qualifications:<br><input type='text' name='p1skills'><br>
        Interests and hobbies:<br><input type='int' name='p1interests'><br>

        Sports and activities:<br><input type='text' name='p1sport'><br>
        Experience / achievement with youth organisations e.g. Scouts, Guides, St John etc as a youth or leader.
        <br><input type='text' name='p1experience'><br>
            </div>

        <div class='right'>
          <p>Parent / Caregiver 2</p>
          Surname: <br><input type='text' name='p2surname' required='required'><br>
          Firstname:<br><input type='text' name='p2firstname'><br>

          Address:<br><input type='text' name='p2address'><br>
          Postcode:<br><input type='int' name='p2postcode'><br>

          Home phone:<br> <input type='int' name='p2homePhone'><br>
          Work phone:<br><input type='int' name='p2work'><br>
          Mobile phone:<br><input type='int' name='p2mobile'><br>

          Email:<br><input type='email' name='p2email'><br>
          Relationship to child:<br><input type='text' name='p2relation'><br>
          Occupation:<br> <input type='text' name='p2occupation'><br>
          Skills and qualifications:<br><input type='text' name='p2skills'><br>
          Interests and hobbies:<br><input type='int' name='p2interests'><br>

          Sports and activities:<br><input type='text' name='p2sport'><br>
          Experience / achievement with youth organisations e.g. Scouts, Guides, St John etc as a youth or leader.
          <br><input type='text' name='p2experience'><br>
    </div>

      <div class='divider'><p>How You Can Support Our Group</p></div>
<div class=questions>
  <p>Please indicate how you can best share in the help needed to make your child’s time in SCOUTS a real adventure.</p>

<p><span style="float:right;"  >Parent / Caregiver 1     Parent / Caregiver 2</p></span><br>
<p>Be a Leader <span style="float:right;">
  <label for =p1y>Yes:</label><input type=radio name=p1leadery id=p1y value=yes>
  <label for =q1>No:</label> <input type=radio name=p1leadern id=q1 value=No>
  <label for =q1n>Yes:</label> <input type=radio name=p2leadery id=q1n value=yes>
    <label for =q1p2>No:</label> <input type=radio name=p2leadern id=q1p2 value=No></span></p>

    <p>Be a Helper at meetings and other activities<span style="float:right;">
      <label for =q21y>Yes:</label><input type=radio name=p1helpMeet id=q21y value=yes>
      <label for =q21n>No:</label> <input type=radio name=p1helpMeet id=q21n value=No>
      <label for =q22y>Yes:</label> <input type=radio name=p2helpMeet id=q22y value=yes>
        <label for =q22n>No:</label> <input type=radio name=p2helpMeet id=q22n value=No></span></p>

        <p>Serve on the Group Committee<span style="float:right;">
          <label for =q31y>Yes:</label><input type=radio name=p1groupComy id=q31y value=yes>
          <label for =q31n>No:</label> <input type=radio name=p1groupComn id=q31n value=No>
          <label for =q32y>Yes:</label> <input type=radio name=p2groupComy id=q32y value=yes>
            <label for =q32n>No:</label> <input type=radio name=p2groupComn id=q32n value=No></span></p>

            <p>Help with financial records<span style="float:right;">
              <label for =q41y>Yes:</label><input type=radio name=p1finance id=q41y value=yes>
              <label for =q41n>No:</label> <input type=radio name=p1finance id=q41n value=No>
              <label for =q42y>Yes:</label> <input type=radio name=p2finance id=q42y value=yes>
                <label for =q42n>No:</label> <input type=radio name=p2finance id=q42n value=No></span></p>

                <p>Secretarial work – i.e. word processing, copying<span style="float:right;" >
                  <label for =q51y>Yes:</label><input type=radio name=p1secretary id=q31y value=yes>
                  <label for =q51n>No:</label> <input type=radio name=p1secretary id=q51n value=No>
                  <label for =q52y>Yes:</label> <input type=radio name=p2secretary id=q52y value=yes>
                    <label for =q52n>No:</label> <input type=radio name=p2secretary id=q52n value=No></span></p>

                    <p>Marketing – Design brochures / distribute these<span style="float:right;"  >
                      <label for =q61y>Yes:</label><input type=radio name=p1marketing id=q61y value=yes>
                      <label for =q61n>No:</label> <input type=radio name=p1marketing id=q61n value=No>
                      <label for =q62y>Yes:</label> <input type=radio name=p2marketing id=q62y value=yes>
                        <label for =q62n>No:</label> <input type=radio name=p2marketing id=q62n value=No></span></p>

                        <p>Publicity – Write newspaper/ newsletter articles<span style="float:right;"  >
                          <label for =q71y>Yes:</label><input type=radio name=p1publicity id=q71y value=yes>
                          <label for =q71n>No:</label> <input type=radio name=p1publicity id=q71n value=No>
                          <label for =q72y>Yes:</label> <input type=radio name=p2publicity id=q72y value=yes>
                            <label for =q72n>No:</label> <input type=radio name=p2publicity id=q72n value=No></span></p>

                            <p>Help with fundraising activities<span style="float:right;"  >
                              <label for =q81y>Yes:</label><input type=radio name=p1fundraising id=q81y value=yes>
                              <label for =q81n>No:</label> <input type=radio name=p1fundraising id=q81n value=No>
                              <label for =q82y>Yes:</label> <input type=radio name=p2fundraising id=q82y value=yes>
                                <label for =q82n>No:</label> <input type=radio name=p2fundraising id=q82n value=No></span></p>

                                <p>Help with repair and maintenance of equipment or hall<span style="float:right;"  >
                                  <label for =q91y>Yes:</label><input type=radio name=p1repair id=q91y value=yes>
                                  <label for =q91n>No:</label> <input type=radio name=p1repair id=q91n value=No>
                                  <label for =q92y>Yes:</label> <input type=radio name=p2repair id=q92y value=yes>
                                    <label for =q92n>No:</label> <input type=radio name=p2repair id=q92n value=No></span></p>

                                    <p>Training and testing for Interest Badges<span style="float:right;"  >
                                      <label for =q101y>Yes:</label><input type=radio name=p1badges id=q101y value=yes>
                                      <label for =q101n>No:</label> <input type=radio name=p1badges id=q101n value=No>
                                      <label for =q102y>Yes:</label> <input type=radio name=p2badges id=q102y value=yes>
                                        <label for =q102n>No:</label> <input type=radio name=p2badges id=q102n value=No></span></p>

                                        <p>Help supervise games and other activities at Kea, Cub, Scout meetings and camps<span style="float:right;"  >
                                          <label for =q111y>Yes:</label><input type=radio name=p1supervise id=q111y value=yes>
                                          <label for =q111n>No:</label> <input type=radio name=p1supervise id=q111n value=No>
                                          <label for =q112y>Yes:</label> <input type=radio name=p2supervise id=q112y value=yes>
                                            <label for =q112n>No:</label> <input type=radio name=p2supervise id=q112n value=No></span></p>

                                            <p>Providing transport for Keas, Cubs, Scouts or Venturers<span style="float:right;"  >
                                              <label for =q121y>Yes:</label><input type=radio name=p1transport id=q121y value=yes>
                                              <label for =q121n>No:</label> <input type=radio name=p1transport id=q121n value=No>
                                              <label for =q122y>Yes:</label> <input type=radio name=p2transport id=q122y value=yes>
                                                <label for =q122n>No:</label> <input type=radio name=p2transport id=q122n value=No></span></p>

                                                <p>Assistance with social functions<span style="float:right;"  >
                                                  <label for =q131y>Yes:</label><input type=radio name=p1social id=q131y value=yes>
                                                  <label for =q131n>No:</label> <input type=radio name=p1social id=q131n value=No>
                                                  <label for =q132y>Yes:</label> <input type=radio name=p2social id=q132y value=yes>
                                                    <label for =q132n>No:</label> <input type=radio name=p2social id=q132n value=No></span></p>

                                                    <p>Other  - Please indicate any other ways you can help<br>
                                                      <input type=text name=other size=60%> <span style="float:right;"  >
                                                      <label for =q141y>Yes:</label><input type=radio name=p1other id=q141y value=yes>
                                                      <label for =q141n>No:</label> <input type=radio name=p1other id=q141n value=No>
                                                      <label for =q142y>Yes:</label> <input type=radio name=p2other id=q142y value=yes>
                                                        <label for =q142n>No:</label> <input type=radio name=p2other id=q142n value=No></span></p>

<div class=divider>Privacy Act</div>

<p>In compliance of the Privacy Act 1993 the following is brought to your attention.<br>
a.	The Scout Association of New Zealand and this Scout Group collect personal information.<br>
b.	The information is collected to: -<br>
i)	enable enrolment in SCOUTS New Zealand<br>
ii)	make arrangements for your son’s and daughter’s participation, safety and welfare<br>
iii)	allow communication with you, your son and daughter and your family<br>
iv)	allow for the planning and delivery of effective services through The Scout Association of New Zealand<br>
c.	The information is being collected by this Group for SCOUTS New Zealand and will be used by the organisers and managers.
 It will form part of a directory of Scout personnel and membership records and is available to your Group,
 Zone and Region. It may be used to inform you about products and services offered or recommended by SCOUTS
  New Zealand, and opportunities to support SCOUTS New Zealand’s work.<br>
d.	The information will be held securely, stored electronically and used for SCOUTS New Zealand purposes only.<br>
e.	You have rights of access to, and correction of, this information subject to the provisions of the Privacy Act 1993.<br>

<div class=divider>Consent to take part in SCOUTS</div>

<p>I agree to my son or daughter becoming part of SCOUTS New Zealand at this Scout Group and fully participating in its adventurous activities.<br>
I agree that photographs taken during the course of activities and events are the property of SCOUTS New Zealand and may be used
 in publicity and marketing of SCOUTS New Zealand.<br>
I agree to share in the organising and running of this Scout Group.</p>

 <span style="text-align:center;">
   <label for =consenty>Yes:</label> <input type=radio name=consent id=consenty value=yes>
  <label for =consentn>No:</label> <input type=radio name=consent id=consentn value=No></span></p>

 <button class="button" type='submit'>Submit</button>
 </form></div>

<div class=footer><img src="pictures/scoutfooter.png" alt="Adventure Plus Banner" width=100%></div>
 <!--
               <input type=text name=q1a />
               <input type=radio name=q1 id=q1y value=1>
               <label for=q1y> Yes </label> -->



<!--next we build the php that will enter the data.-->
<?php
/*

//first test I understand how the welcome message would work.
//echo "<h4>Welcome to this page, ".$_POST['name']. " .</h4>";
//next log into mysql
$mysqli = new mysqli('127.0.0.1', 'user', 'password', 'DB');


//then insert the data
$data = 'insert into chirps (name, comment, feeling) values ("'. $_POST["name"] . '", "' . $_POST["comment"] . '", "' . $_POST["feeling"] . '");';
//if you don't run the next bit, the data won't go into the table.
$mysqli->query($data);
?>
<!--broke the php to insert the html div results for formatting in css-->
  <div class = 'results'>
    <?php
    //next print out the results of the full table below
    //setup query to select everything and return in descending order.
$sql = 'select * from chirps order by id desc;';
//first setup variable people to run a query against the database
$people = $mysqli->query($sql);
echo "<table>\n";
echo "<tr><th>". Title . "</th><th>" . Comment . "</th><th>" . Feeling . "</th><th>" . Time . "</th></tr>\n";
//create while" loop to look for value
while ($person = $people->fetch_assoc()) {
  echo "</tr>" . "<tr><td> " . $person['name'] . "</td><td> " . $person['comment'] . "</td><td> " . $person['feeling'] . "</td><td> " . $person['time'] ."</td>\n";
}
echo "</table>\n";
*/
?>

</div>
</div>
</body>
</html>
