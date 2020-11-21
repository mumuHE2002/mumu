<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>走近一中</title>
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/jquery-1.11.0.min.js"></script>

</head>

<body>
  <?php require("./_top.php") ?>
  <div class="zoujing">
    <div class="main">
      <div class="z_nav">
        <h2>走进一中</h2>
        <ul>
          <li><a href="#">一中简介</a></li>
          <li><a href="#">一中领导</a></li>
          <li><a href="#">一中荣誉</a></li>
          <li><a href="#">一中大事</a></li>
        </ul>
      </div>
      <div class="content">
        <div class="news">
          <div class="news_nav">
            <ul>
              <li>一中介绍</li>
              <li>一中荣誉</li>
              <li class="atr">机构设置</li>
            </ul>
          </div>
          <div class="con">
            <ul>
            <li><a href="https://www.gyyz.com.cn/show-22-96.html" target="_blank">贵阳一中复旦大学校友会共庆母校百年华诞</a><span>2019/11/29</span></li>
              <li><a href="#">贵阳一中教研组职能</a><span>2019/11/29</span></li>
              <li><a href="#">贵阳一中教学组设置图</a><span>2019/11/29</span></li>
              <li><a href="#">贵阳一中师德监督邮箱</a><span>2019/11/29</span></li> <li><a href="#">贵阳一中行政机构职能</a><span>2019/11/29</span></li>
              <li><a href="#">贵阳一中教研组职能</a><span>2019/11/29</span></li>
              <li><a href="#">贵阳一中教学组设置图</a><span>2019/11/29</span></li>
              <li><a href="#">贵阳一中师德监督邮箱</a><span>2019/11/29</span></li> <li><a href="#">贵阳一中教学组设置图</a><span>2019/11/29</span></li>
              <li><a href="#">贵阳一中师德监督邮箱</a><span>2019/11/29</span></li>
            </ul>
          </div>
        </div>
        <div class="pictrue">
          <h3>诗画校园</h3>
          <ul>
            <li>
              <img src="./images/picture01.jpg" alt="">
              <p>科技管</p>
            </li>
            <li>
              <img src="./images/picture02.jpg" alt="">
              <p>音乐厅</p>
            </li>
            <li>
              <img src="./images/picture03.jpg" alt="">
              <p>校园文化</p>
            </li>
            <li>
              <img src="./images/picture04.jpg" alt="">
              <p>校园文化</p>
            </li>
            <li>
              <img src="./images/picture05.jpg" alt="">
              <p>校园风光</p>
            </li>
            <li>
              <img src="./images/picture06.jpg" alt="">
              <p>校园风光</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>



  <?php require("./_foot.php") ?>
  <script src="./js/index.js"></script>
  <script>

    $(function() {
      $(".pictrue li").hover(function(){
        console.log(12);
        $(this).children("p").stop().slideUp()
      },function(){
        $(this).children("p").stop().slideDown()

      })

      
    })
  </script>
</body>

</html>