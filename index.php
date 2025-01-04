<!DOCTYPE html>
<html>

<head>
  <title>WELCOME | JIEGE</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @charset "utf-8";

    /* 动画 */
    @keyframes fade {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @font-face {
      font-family: "LED";
      src: url('./UnidreamLED.ttf');
    }

    body {
      font-family: sans-serif;
      background-position: center center;
      font-family: Helvetica, Arial, "Open Sans", Arial, 'PingFang SC', 'Hiragino Sans GB', 'Source Han Sans CN',
        'Microsoft Yahei', sans-serif, "LED" !important;
      padding-bottom: 46px;
    }

    a {
      text-decoration: none;
      transition: 0.3s;
      color: #efefef;

    }

    #player {
      width: 300px;
      margin: 20px auto;
    }

    #lrc {
      font-size: 16px;
      text-align: center;
    }

    .current {
      /* border: 1px solid black; */

      font-weight: bold;
      color: red;
    }

    #openCardButton {
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 1001;
      text-align: center;
      height: 46px;
      backdrop-filter: blur(10px);
      background: rgb(0 0 0 / 25%);
      animation: fade 0.3s;
      transition: 0.3s;
      color: #efefef;
      user-select: none;
      line-height: 46px;
    }

    .openCard .smallCard .close {
      border-radius: 5px;
      background-color: #ffffff26;
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .07), 0 1px 5px 0 rgba(0, 0, 0, .1);
      padding: 10px;

      display: flex;
      user-select: none;
      line-height: 10px;
      flex-direction: row;
    }

    .openCard {

      color: #efefef;
      transition: 0.3s;

      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: rgba(0, 0, 0, .5);
      backdrop-filter: blur(20px);
      animation: fade 0.3s;
      padding: 10px;
    }

    .openCard .smallCard {
      overflow: auto;
      width: 80%;
      height: auto;

      background: rgb(255 255 255 / 40%);
      border-radius: 6px;
      -webkit-animation: fade .3s;
      animation: fade .3s;
      padding: 0px 40px 40px 40px;
      z-index: 1000;

    }

    .bg {
      pointer-events: none;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      z-index: -1;
      /* height: 00%; */
      /* width: 100%; */
      background: rgb(0 0 0 / 20%);
      position: fixed;
    }

    ::-webkit-scrollbar-thumb {
      border-radius: 3px;
      background-color: #eee;
    }

    ::-webkit-scrollbar {
      width: 5px;
    }

    /* 版权 */
    #openCardButton * {
      animation: fade 0.3s;
      transition: 0.3s;
    }

    .backg {
      z-index: -1;
      position: fixed;
      top: calc(0px + 0px);
      left: 0;
      width: 100%;
      height: calc(100% - 0px);
      transition: .25s;
    }


    @font-face {
      font-family: "UnidreamLED";
      src: url('./UnidreamLED.ttf') format('truetype');
    }


    .card {
      width: 290px;
      max-height: 168px;
      /* max-width: 290px; */

      display: flex;
      flex-direction: column;
      font-size: 1.10rem;
      letter-spacing: 2px;
      backdrop-filter: blur(10px) !important;

      padding: 30px;
      border-radius: 5px;
      user-select: none;

      margin: 5px;
    }

    .card .nowtime {
      font-family: 'UnidreamLED' !important;
      font-size: 3.25rem;
    }

    .mainPage {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: flex-start;
    }

    .title {
      margin-top: 30px;
      margin-right: 30% !important;
      margin-left: 30% !important;
      display: flex;
      flex-direction: column;
      font-size: 100px;
      color: white;
      text-align: center;
      margin-bottom: 100px;
      user-select: none;
    }

    .top {
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      z-index: 998;
    }

    @media(max-width:780px) {
      .card {
        width: 240px !important;
      }

      .title {
        font-size: 70px !important;

      }

    }

    @media(max-width:550px) {
      .title {
        margin-bottom: 45vh;
        margin-top: 45vh;
        font-size: 50px !important;

      }

      /*
      .card {
        width: 100% !important;
      }
        */
    }

    @media(max-width:400px) {
      .title {
        font-size: 40px !important;

      }

    }

    @media(min-width:1000px) {}

    #website-list .card {
      margin: 0px !important;
    }

    #website-list .underline {
      border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    }

    .loding {

      transition: .45s;
      display: flex;
      Z-INDEX: 100000;
      backdrop-filter: blur(70px);
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      /* background-color: rgb(0 0 0 / 0%); */
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .loding .loding-text {
      animation: fade 1s infinite;
      user-select: none;
      color: white;
      font-size: 50px;
    }
  </style>
</head>

<body>
  <!-- 加载动画 -->
  <div class="loding" id="loding">
    <div class="loding-text" id="loding-text">LODING</div>
    <div class="loding-text" id="loding-text" style="font-size: 30px ;">加载字体、音乐中</div>
    <div class="loding-text" id="loding-text" style="font-size: 30px ;">可能需要一段时间完毕！</div>
  </div>


  <div class="cover">
    <img class="backg" onerror="this.classList.add('error');" src="./download.webp"
      style="transform: scale(1); filter: blur(0px); transition: 1.5s;">
    <div class="bg" id="bg"></div>
  </div>

  <div class="title">
    <div style="align-self: flex-start;">JIEGE</div>
    <div style="align-self: flex-end;">引导页</div>
  </div>
  <div class="mainPage">
    <div class="left">
      <!-- 时间 -->
      <div class="card openCard" id="time">
        <div> 加载中</div>
        <div>光阴似箭，岁月如梭</div>
      </div>
      <!-- 歌曲 -->
      <div class="openCard card" id="music">
        <div style="margin-bottom:5px">♪MUSIC♪</div>
        <audio id="audio" controls></audio>
      </div>
    </div>
    <div class="right">
      <!-- 网站点 -->
      <div class="openCard card" id="website">
        <div style="margin-bottom:5px">♪WEBSITE♪</div>
        <div id="website-list">
          <div class="card underline">zhangxiaojie.tk</div>
          <div class="card">api.zhangxiaojie.tk</div>
        </div>
      </div>
      <!-- 一言 -->
      <div class="openCard card" onclick="changeYiyan()">
        <div id="yyq">加载中</div>
      </div>
    </div>

  </div>

  <div id="openCardButton">
    <div id="bq" style="display:block;">JIEGE @2024-<?php echo date("Y"); ?> 
      <a href="https://github.com/xiaomingtate/WelcomePage">JIEGE</a>用爱制作</div>
    <div id="LrcTxt" style="display: block;"></div>
  </div>


  <div class="openCard top" id="openCard" style="display:none">
    <div class="smallCard">
      <div class="close">
        <h2>歌词</h2>
        <h2 style="margin-left: auto;"><a id="close-button">X</a></h2>
      </div>
      <div class="main">
        <div id="lrc"></div>
      </div>
    </div>
  </div>
</body>

</html>
<script>
  window.onload = function() {
    var loding = document.getElementById("loding");

    // 获取所有 class 为 loding-text 的元素并隐藏
    var lodingtexts = document.querySelectorAll(".loding-text");
    lodingtexts.forEach(element => {
      element.style.display = "none";
    });

    loding.style.backdropFilter = "blur(0px)";
    loding.style.pointerEvents = "none";
  };
</script>
<script>
  islodingYy = false;

  function changeYiyan() {
    if (islodingYy) return;
    else islodingYy = true;
    document.getElementById("yyq").innerHTML = "加载中";
    fetch("https://api.zhangxiaojie.tk/api.php?wb").then(response => response.json()).then(data => {
      document.getElementById("yyq").innerHTML = data.hitokoto;
    }).catch(error => {
      console.error("【一言】加载失败");
      document.getElementById("yyq").innerHTML = "生活不止眼前的苟且，还有诗和远方";
    })

    /* 延时允许 */
    setTimeout(() => {
      islodingYy = false;
    }, 1000);
  }
  changeYiyan();
</script>
<script>
  const closeButton = document.getElementById('close-button');
  const openCard = document.getElementById('openCard');
  const bg = document.getElementById('bg');

  closeButton.addEventListener('click', () => {
    if (openCard) {
      openCard.style.display = 'none';
      /*bg.style.display = 'none';*/
    }
  });
  const openCardButton = document.getElementById('LrcTxt');
  openCardButton.addEventListener('click', () => {
    if (openCard) {
      openCard.style.display = '';
      bg.style.display = '';
    }
  });
</script>
<?php
if (isset($_GET["name"])) {
  $getname = $_GET["name"];
} else {
  $getname = "JIEGE | NULL";
}
?>
<script>
  LrcTxt = document.getElementById('LrcTxt');
  const audio = document.getElementById('audio');
  const lrcDiv = document.getElementById('lrc');
  let lrcData = [];
  try1 = 0;
  audio.src = '<?php echo $getname . "/" . $getname; ?>.flac';
  //失败时调用
  audio.addEventListener('error', function() {
    if (try1 == 0) {
      audio.src = '<?php echo $getname . "/" . $getname; ?>.mp3';
      try1 = 1;
    } else if (try1 == 1) {
      const p = document.createElement('p');
      p.textContent = "暂无歌词";
      //添加索引
      p.setAttribute('data-index', "1");
      //追加
      lrcDiv.appendChild(p);
      try1 = 2;
    }
  });
  //成功时调用
  audio.addEventListener('canplay', function() {
    //获取歌词
    fetch('<?php echo $getname . "/" . $getname; ?>.lrc')
      .then(response => response.text())
      .then(lyrics => {
        //获取并存入lrcData

        lrcData = parseLRC(lyrics);
        displayLyrics();
      })
      .catch(error => console.error('Error loading lyrics:', error));
  })
  //解析歌词
  function parseLRC(lrcText) {
    const lines = lrcText.split('\n');
    const lyrics = [];
    //匹配歌词
    lines.forEach(line => {
      //匹配时间戳
      const match = line.match(/\[(\d{2}):(\d{2}\.\d{3})\](.*)/);
      console.error(match);
      //匹配时间戳和歌词
      if (match) {

        const minutes = parseInt(match[1], 10);
        const seconds = parseFloat(match[2]);
        const text = match[3].trim();
        const timestamp = minutes * 60 + seconds;
        lyrics.push({
          timestamp,
          text
        });

      }
    });
    //排序
    lyrics.sort((a, b) => a.timestamp - b.timestamp);

    return lyrics;
  }

  //获取歌词并写入HTML
  function displayLyrics() {
    lrcDiv.innerHTML = '';
    lrcData.forEach((lyric, index) => {
      const p = document.createElement('p');
      p.textContent = lyric.text;
      //添加索引
      p.setAttribute('data-index', index);
      //追加
      lrcDiv.appendChild(p);
    });
  }
  //以防万一
  //成功时调用
  audio.addEventListener('canplay', function() {

    //核心逻辑
    audio.addEventListener('timeupdate', () => {
      document.getElementById('bq').style.display = 'none';
      LrcTxt.style.display = 'block';

      let currentLyricIndex = -1;
      //遍历获取适合的歌词
      for (let i = 0; i < lrcData.length; i++) {
        if (audio.currentTime >= lrcData[i].timestamp && (i === lrcData.length - 1 || audio.currentTime < lrcData[i + 1].timestamp)) {
          currentLyricIndex = i;
          break;
        }
      }
      //寻找当前的歌词
      const paragraphs = lrcDiv.querySelectorAll('p');
      paragraphs.forEach(p => p.classList.remove('current'));
      if (currentLyricIndex !== -1) {
        const currentParagraph = paragraphs[currentLyricIndex];
        //打上标记
        currentParagraph.classList.add('current');
        LrcTxt.innerHTML = currentParagraph.textContent;
      }
    });
  })
  //暂停
  audio.addEventListener('pause', () => {
    LrcTxt.style.display = 'none';
    document.getElementById('bq').style.display = 'block';
  });

  //播放载入好时，执行函数
  audio.addEventListener('loadeddata', () => {
    LrcTxt.style.display = 'none';
    document.getElementById('bq').style.display = 'block';
  });
</script>
<script>
  const updatetime = document.getElementById('time');

  function time() {
    clearTimeout(t);
    dt = new Date();
    let y = dt.getYear() + 1900;
    let mm = dt.getMonth() + 1;
    let d = dt.getDate();
    let weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Fourday", "Friday", "Saturday"];
    let day = dt.getDay();
    let h = dt.getHours();
    let m = dt.getMinutes();
    let s = dt.getSeconds();
    if (h < 10) {
      h = "0" + h;
    }
    if (m < 10) {
      m = "0" + m;
    }
    if (s < 10) {
      s = "0" + s;
    }
    updatetime.innerHTML = y + "&nbsp;年&nbsp;" + mm + "&nbsp;月&nbsp;" + d + "&nbsp;日&nbsp;" + "" + weekday[day] + "<br>" + "<div class='nowtime' id='nowtime'>" + h + ":" + m + ":" + s + "</div><div>光阴似箭，岁月如梭</div>";
    t = setTimeout(time, 1000);
  }
  let t = null;
  t = setTimeout(time, 1000);
</script>
