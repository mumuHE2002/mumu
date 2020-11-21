Date.prototype.Format = function (fmt) { // author: meizz
  var o = {
    "M+": this.getMonth() + 1, // 月份
    "d+": this.getDate(), // 日
    "h+": this.getHours(), // 小时
    "m+": this.getMinutes(), // 分
    "s+": this.getSeconds(), // 秒
    "q+": Math.floor((this.getMonth() + 3) / 3), // 季度
    "S": this.getMilliseconds(), // 毫秒
  };
  if (/(y+)/.test(fmt))
    fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
  for (var k in o)
    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
  return fmt;
}

var time2 = new Date().Format("yyyy-MM-dd hh:mm:ss");
document.querySelector(".show_time").innerHTML = "欢迎访问贵阳一中    当前时间：" + time2
// 获取时间,添加到页面元素中
setInterval(function () {
  var time2 = new Date().Format("yyyy-MM-dd hh:mm:ss");
document.querySelector(".show_time").innerHTML = "欢迎访问贵阳一中    当前时间：" + time2

}, 1000)


//点击切换内容
$(".message_nav ul").on("click", "li",function() {
   var mess_index = $(this).attr("index")
   var huan = $(".huan ul")
   $(this).addClass("atr").siblings().removeClass("atr")

   for(var i=0; i<huan.length; i++) {
     if($(huan[i]).attr("index") == mess_index) {
  
      $(huan[i]).fadeIn().siblings().hide()
     }
   }
})

//点击关闭广告
$("#btn").click(function() {
  $(".henf").hide()
})