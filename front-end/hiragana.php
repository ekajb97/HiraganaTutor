<!DOCTYPE html>
<html>

  <head>

    <link rel="stylesheet" type="text/css" href="hiragana.css" />
    <script type="text/javascript" src="hiragana.js"></script>
    <div id="header">
      Hiragana Tutor
    </div>


    </div>

    <body>
      <div>
        <audio id="a" src="a.mp3" preload="auto"></audio>
        <audio id="i" src="i.mp3" preload="auto"></audio>
        <audio id="u" src="u.mp3" preload="auto"></audio>
        <audio id="e" src="e.mp3" preload="auto"></audio>
        <audio id="o" src="o.mp3" preload="auto"></audio>
        <audio id="ka" src="ka.mp3" preload="auto"></audio>
        <audio id="ki" src="ki.mp3" preload="auto"></audio>
        <audio id="ku" src="ku.mp3" preload="auto"></audio>
        <audio id="ke" src="ke.mp3" preload="auto"></audio>
        <audio id="ko" src="ko.mp3" preload="auto"></audio>
        <audio id="sa" src="sa.mp3" preload="auto"></audio>
        <audio id="si" src="si.mp3" preload="auto"></audio>
        <audio id="su" src="su.mp3" preload="auto"></audio>
        <audio id="se" src="se.mp3" preload="auto"></audio>
        <audio id="so" src="so.mp3" preload="auto"></audio>
        <audio id="ta" src="ta.mp3" preload="auto"></audio>
        <audio id="chi" src="chi.mp3" preload="auto"></audio>
        <audio id="tsu" src="tsu.mp3" preload="auto"></audio>
        <audio id="te" src="te.mp3" preload="auto"></audio>
        <audio id="to" src="to.mp3" preload="auto"></audio>
        <audio id="na" src="na.mp3" preload="auto"></audio>
        <audio id="ni" src="ni.mp3" preload="auto"></audio>
        <audio id="nu" src="nu.mp3" preload="auto"></audio>
        <audio id="ne" src="ne.mp3" preload="auto"></audio>
        <audio id="no" src="no.mp3" preload="auto"></audio>
        <audio id="ha" src="ha.mp3" preload="auto"></audio>
        <audio id="hi" src="hi.mp3" preload="auto"></audio>
        <audio id="fu" src="fu.mp3" preload="auto"></audio>
        <audio id="he" src="he.mp3" preload="auto"></audio>
        <audio id="ho" src="ho.mp3" preload="auto"></audio>
        <audio id="ma" src="ma.mp3" preload="auto"></audio>
        <audio id="mi" src="mi.mp3" preload="auto"></audio>
        <audio id="mu" src="mu.mp3" preload="auto"></audio>
        <audio id="me" src="me.mp3" preload="auto"></audio>
        <audio id="mo" src="mo.mp3" preload="auto"></audio>
        <audio id="ya" src="ya.mp3" preload="auto"></audio>
        <audio id="yu" src="yu.mp3" preload="auto"></audio>
        <audio id="yo" src="yo.mp3" preload="auto"></audio>
        <audio id="ra" src="ra.mp3" preload="auto"></audio>
        <audio id="ri" src="ri.mp3" preload="auto"></audio>
        <audio id="ru" src="ru.mp3" preload="auto"></audio>
        <audio id="re" src="re.mp3" preload="auto"></audio>
        <audio id="ro" src="ro.mp3" preload="auto"></audio>
        <audio id="wa" src="wa.mp3" preload="auto"></audio>
        <audio id="n" src="n.mp3" preload="auto"></audio>
        <audio id="wo" src="wo.mp3" preload="auto"></audio>
      </div>
<br>
</br>

<div id="quiz">
  <h2 id="msg">Hello! こんにちは</h><br></br>
  This is a webpage to help ou learn basic Hiragana. Hover above each image to see how to draw the character.
   Click the image to hear how to pronounce the character. Each button bellow will pop up a quiz to test you on your knowledge,
   complete thes quizzes, enter a username and password then press save to save your result to a database.
   Each quiz is based off the corresponding column and therefore 'n' is also included with the hiragana with the vowel 'u'.
   <h2 id="msg">Good Luck!  がんばろう</h>
  <table class="quizzes">
      <tr>
          <td><button id="quizA" onclick="quizA()">Quiz from hiragana with A</button></td>
          <td><button id="quizI" onclick="quizI()">Quiz from hiragana with I</button></td>
          <td><button id="quizU" onclick="quizU()">Quiz from hiragana with U</button></td>
          <td><button id="quizE" onclick="quizE()">Quiz from hiragana with E</button></td>
          <td><button id="quizO" onclick="quizO()">Quiz from hiragana with O</button></td>
          <td><button id="box">username</button></td>
          <td><button id="box">password</button></td>
          <td><button id="save" onclick="save()">Save all quiz data</button></td>
      </tr>
      <tr>
          <td id="quiza">Result A</td>
          <td id="quizi">Result I</td>
          <td id="quizu">Result U</td>
          <td id="quize">Result E</td>
          <td id="quizo">Result O</td>
          <td><input type="text" id="in" name="username"></td>
          <td><input type="text" id="in" name="password"></td>
      </tr>
  </table>
</div>
<div id="study">
<table id="tutor">
          <tr>
          <td class="vals"><img class="gif" src="a.gif" onclick="document.getElementById('a').play()" alt="a"><img class="image" src="a.png" alt="a"> a</td>
          <td class="vals"><img class="gif" src="i.gif" onclick="document.getElementById('i').play()" alt="i"><img class="image" src="i.png" alt="i"> i</td>
          <td class="vals"><img class="gif" src="u.gif" onclick="document.getElementById('u').play()" alt="u"><img class="image" src="u.png" alt="u"> u</td>
          <td class="vals"><img class="gif" src="e.gif" onclick="document.getElementById('e').play()" alt="e"><img class="image" src="e.png" alt="e"> e</td>
          <td class="vals"><img class="gif" src="o.gif" onclick="document.getElementById('o').play()" alt="o"><img class="image" src="o.png" alt="o"> o</td>
        </tr>
        <tr>
          <td class="vals"><img class="gif" src="ka.gif" onclick="document.getElementById('ka').play()" alt="ka"><img class="image" src="ka.png" alt="ka"> ka</td>
          <td class="vals"><img class="gif" src="ki.gif" onclick="document.getElementById('ki').play()" alt="ki"><img class="image" src="ki.png" alt="ki"> ki</td>
          <td class="vals"><img class="gif" src="ku.gif" onclick="document.getElementById('ku').play()" alt="ku"><img class="image" src="ku.png" alt="ku"> ku</td>
          <td class="vals"><img class="gif" src="ke.gif" onclick="document.getElementById('ke').play()" alt="ke"><img class="image" src="ke.png" alt="ke"> ke</td>
          <td class="vals"><img class="gif" src="ko.gif" onclick="document.getElementById('ko').play()" alt="ko"><img class="image" src="ko.png" alt="ko"> ko</td>
        </tr>
        <tr>
          <td class="vals"><img class="gif" src="sa.gif" onclick="document.getElementById('sa').play()" alt="sa"><img class="image" src="sa.png" alt="sa"> sa</td>
          <td class="vals"><img class="gif" src="shi.gif" onclick="document.getElementById('shi').play()" alt="si"><img class="image" src="si.png" alt="si"> shi</td>
          <td class="vals"><img class="gif" src="su.gif" onclick="document.getElementById('su').play()" alt="su"><img class="image" src="su.png" alt="su"> su</td>
          <td class="vals"><img class="gif" src="se.gif" onclick="document.getElementById('se').play()" alt="se"><img class="image" src="se.png" alt="se"> se</td>
          <td class="vals"><img class="gif" src="so.gif" onclick="document.getElementById('so').play()" alt="so"><img class="image" src="so.png" alt="so"> so</td>
        </tr>
        <tr>
          <td class="vals"><img class="gif" src="ta.gif" onclick="document.getElementById('ta').play()" alt="ta"><img class="image" src="ta.png" alt="ta"> ta</td>
          <td class="vals"><img class="gif" src="chi.gif" onclick="document.getElementById('chi').play()" alt="ti"><img class="image" src="chi.png" alt="ti"> chi</td>
          <td class="vals"><img class="gif" src="tsu.gif" onclick="document.getElementById('tsu').play()" alt="tu"><img class="image" src="tsu.png" alt="tu"> tsu</td>
          <td class="vals"><img class="gif" src="te.gif" onclick="document.getElementById('te').play()" alt="te"><img class="image" src="te.png" alt="te"> te</td>
          <td class="vals"><img class="gif" src="to.gif" onclick="document.getElementById('to').play()" alt="to"><img class="image" src="to.png" alt="to"> to</td>
        </tr>
        <tr>
          <td class="vals"><img class="gif" src="na.gif" onclick="document.getElementById('na').play()" alt="na"><img class="image" src="na.png" alt="na"> na</td>
          <td class="vals"><img class="gif" src="ni.gif" onclick="document.getElementById('ni').play()" alt="ni"><img class="image" src="ni.png" alt="ni"> ni</td>
          <td class="vals"><img class="gif" src="nu.gif" onclick="document.getElementById('nu').play()" alt="nu"><img class="image" src="nu.png" alt="nu"> nu</td>
          <td class="vals"><img class="gif" src="ne.gif" onclick="document.getElementById('ne').play()" alt="ne"><img class="image" src="ne.png" alt="ne"> ne</td>
          <td class="vals"><img class="gif" src="no.gif" onclick="document.getElementById('no').play()" alt="no"><img class="image" src="no.png" alt="no"> no</td>
        </tr>
        <tr>
          <td class="vals"><img class="gif" src="ha.gif" onclick="document.getElementById('ha').play()" alt="ha"><img class="image" src="ha.png" alt="ha"> ha</td>
          <td class="vals"><img class="gif" src="hi.gif" onclick="document.getElementById('hi').play()" alt="hi"><img class="image" src="hi.png" alt="hi"> hi</td>
          <td class="vals"><img class="gif" src="fu.gif" onclick="document.getElementById('fu').play()" alt="hu"><img class="image" src="fu.png" alt="hu"> fu</td>
          <td class="vals"><img class="gif" src="he.gif" onclick="document.getElementById('he').play()" alt="he"><img class="image" src="he.png" alt="he"> he</td>
          <td class="vals"><img class="gif" src="ho.gif" onclick="document.getElementById('ho').play()" alt="ho"><img class="image" src="ho.png" alt="ho"> ho</td>
        </tr>
        <tr>
          <td class="vals"><img class="gif" src="ma.gif" onclick="document.getElementById('ma').play()" alt="ma"><img class="image" src="ma.png" alt="ma"> ma</td>
          <td class="vals"><img class="gif" src="mi.gif" onclick="document.getElementById('mi').play()" alt="mi"><img class="image" src="mi.png" alt="mi"> mi</td>
          <td class="vals"><img class="gif" src="mu.gif" onclick="document.getElementById('mu').play()" alt="mu"><img class="image" src="mu.png" alt="mu"> mu</td>
          <td class="vals"><img class="gif" src="me.gif" onclick="document.getElementById('me').play()" alt="me"><img class="image" src="me.png" alt="me"> me</td>
          <td class="vals"><img class="gif" src="mo.gif" onclick="document.getElementById('mo').play()" alt="mo"><img class="image" src="mo.png" alt="mo"> mo</td>
        </tr>
        <tr>
          <td class="vals"><img class="gif" src="ya.gif" onclick="document.getElementById('ya').play()" alt="ya"><img class="image" src="ya.png" alt="ya"> ya</td>
          <td class="null"></td>
          <td class="vals"><img class="gif" src="yu.gif" onclick="document.getElementById('yu').play()" alt="yu"><img class="image" src="yu.png" alt="yu"> yu</td>
          <td class="null"></td>
          <td class="vals"><img class="gif" src="yo.gif" onclick="document.getElementById('yo').play()" alt="yo"><img class="image" src="yo.png" alt="yo"> yo</td>
        </tr>
        <tr>
          <td class="vals"><img class="gif" src="ra.gif" onclick="document.getElementById('ra').play()" alt="ra"><img class="image" src="ra.png" alt="ra"> ra</td>
          <td class="vals"><img class="gif" src="ri.gif" onclick="document.getElementById('ri').play()" alt="ri"><img class="image" src="ri.png" alt="ri"> ri</td>
          <td class="vals"><img class="gif" src="ru.gif" onclick="document.getElementById('ru').play()" alt="ru"><img class="image" src="ru.png" alt="ru"> ru</td>
          <td class="vals"><img class="gif" src="re.gif" onclick="document.getElementById('re').play()" alt="re"><img class="image" src="re.png" alt="re"> re</td>
          <td class="vals"><img class="gif" src="ro.gif" onclick="document.getElementById('ro').play()" alt="ro"><img class="image" src="ro.png" alt="ro"> ro</td>
        </tr>
        <tr>
          <td class="vals"><img class="gif" src="wa.gif" onclick="document.getElementById('wa').play()" alt="wa"><img class="image" src="wa.png" alt="wa"> wa</td>
          <td class="null"></td>
          <td class="vals"><img class="gif" src="n.gif" onclick="document.getElementById('n').play()" alt="n"><img class="image" src="n.png" alt="n"> n</td>
          <td class="null"></td>
          <td class="vals"><img class="gif" src="wo.gif" onclick="document.getElementById('wo').play()" alt="wo"><img class="image" src="wo.png" alt="wo"> wo</td>
        </tr>
      </table>
      </div>
      <div id="ref">
          <h3>References:</h><br></br>
            >Help with quiz from tutorial by Mike Dane: <a href="url">https://www.youtube.com/watch?v=LQGTb112N_c</a><br></br>
            >Hiragana gifs and audio: <a href="url">http://www.guidetojapanese.org/learn/complete/hiragana</a><br></br>
            >Hiragan images from their respective page: <a href="url">https://en.wiktionary.org/wiki/%E3%81%82#Japanese</a><br></br>
            >I also looked various pages at <a href="https://www.w3schools.com/">w3 Schools</a> such as window prompts and alerts to drop shadow, hover and z-index.



            </audio>
      </div>
    </body>
  </head>

</html>
