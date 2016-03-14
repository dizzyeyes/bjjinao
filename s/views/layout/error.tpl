<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>404页</title>
</head>
<body>
<div style="text-align:center;margin-top:200px;color:red">
    <{if $errorMsg|default:""}> 
      <strong>错误</strong>：<{$errorMsg}>
       <strong><span id = "second"></span>秒后跳转回登录页</strong>
    <{/if}>
</div>

<script>
   var second =3;
   document.getElementById("second").innerHTML = second;
setInterval(changeSecond,1000);
setTimeout(redirectPage, 3000);

function redirectPage(){
    window.location.href="../weibo/login";
}
function changeSecond(){
console.log(second);
        second--;
    document.getElementById("second").innerHTML = second;
}

</script>
</body>
</html>