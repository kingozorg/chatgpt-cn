<?php
$type = "Personal";
//  if (substr($_SERVER["REMOTE_ADDR"],0,9)!="127.0.0.1"){
//    if (strpos($_SERVER["HTTP_USER_AGENT"],"MicroMessenger")){
//      echo "<div style='height:100%;width:100%;text-align:center;margin-top:30%;'><h1>请点击右上角，选择”在浏览器打开“</h1></div>";
//      exit;
//    }
//    if (!isset($_SERVER['PHP_AUTH_USER'])) {
//      header('WWW-Authenticate: Basic realm="Please input username and password."');
//      header('HTTP/1.0 401 Unauthorized');
//      echo 'Bye, honey.';
//      exit;
//    } else {
//      if (($_SERVER['PHP_AUTH_USER']=="admin")&&($_SERVER['PHP_AUTH_PW']=="admin")){
//        $type = "Extranet";
//      } else {
//        echo 'Wrong password, bye...';
//        exit;
//      }
//    }
//  } else {
//    $type = "Intranet";
//  }
// zh-CN

// New English v1.1
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>ChatGPT<?= $type ?>Dedicated version</title>
    <link rel="stylesheet" href="css/common.css?v1.1">
    <link rel="stylesheet" href="css/wenda.css?v1.1">
    <link rel="stylesheet" href="css/hightlight.css">
</head>

<body>
    <div class="layout-wrap">
        <header class="layout-header">
            <div class="container" data-flex="main:justify cross:start">
                <div class="header-logo">
                    <h2 class="logo"><a class="links" id="clean" title="Clear dialogue messages"><span class="logo-title">Clear dialogue messages</span></a></h2>
                </div>
                <div class="header-logo">
                <h2 class="logo"><a class="links" id="showlog" title="log"><span class="logo-title">Protokoll</span></a></h2>
                </div>
            </div>
        </header>
        <div class="layout-content">
            <div class="container">
                <article class="article" id="article">
                    <div class="article-box">
                        <div class="precast-block" data-flex="main:left">
                            
                            <div class="input-group">
                                <span style="text-align: center;color:#9ca2a8">&nbsp;&nbsp;API-KEY&nbsp;&nbsp;</span>
                                <input type="password" id="key" style="border:1px solid grey;display:block;max-width:270px;width:calc(100% - 70px);" onload="this.focus();">
                            </div>
                            <!--
                            <div class="input-group">
                                <span style="text-align: center;color:#9ca2a8">&nbsp;&nbsp;Continuous Dialogue：</span>
                                <input type="checkbox" id="keep" checked="" style="min-width:220px;">
                                <label for="keep"></label>
                            </div>
                            -->

                            <div class="input-group">
                                <span style="text-align: center;color:#9ca2a8">&nbsp;&nbsp;Pre-set phrases：</span>
                                <select id="preset-text" onchange="insertPresetText()" style="width:calc(100% - 90px);max-width:280px;">
                                    <option value="">Please select</option>
                                    <option value="Write CODE. Make a table in markdown code format of the following information. Write code only. Make a row for every category as needed. Information:">Make Markdown Table from Info</option>
                                    <option value="Create a scaffold for someone wanting to create their own abstract from the following text:">Create a scaffold from text.</option>
                                    <option value="I want you to act as a Linux terminal. I will enter commands and you will reply with what the terminal should display. I want you to reply to the terminal output only in a unique block of code, and nothing else. Do not write explanations. Do not type commands unless I instruct you to do so. When I need to tell you something in English, I will put the text in brackets [like this]. My first command is pwd">Act as a Linux terminal</option>
                                </select>
                            </div>
                        </div>
                        <ul id="article-wrapper">
                        </ul>
                        <div class="creating-loading" data-flex="main:center dir:top cross:center">
                            <div class="semi-circle-spin"></div>
                        </div>
                        <div id="fixed-block">
                            <div class="precast-block" id="kw-target-box" data-flex="main:left cross:center">
                                <div id="target-box" class="box">
                                    <textarea name="kw-target" placeholder="Ask a question here, press Ctrl+Enter to send" id="kw-target" autofocus rows=1></textarea>
                                </div>
                                <div class="right-btn layout-bar">
                                    <p class="btn ai-btn bright-btn" id="ai-btn" data-flex="main:center cross:center"><i class="iconfont icon-wuguan"></i>Send</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <script src="js/remarkable.js"></script>
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/jquery.cookie.min.js"></script>
    <script src="js/layer.min.js"></script>
    <script src="js/chat.js?v2.8"></script>
    <script src="js/highlight.min.js"></script>
    <script src="//cdn.bootcss.com/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
        showProcessingMessages: false,
        messageStyle: "none",
        extensions: ["tex2jax.js"],
        jax: ["input/TeX", "output/HTML-CSS"],
        tex2jax: {
            inlineMath:  [ ["$", "$"] ],
        displayMath: [ ["$$","$$"] ],
        skipTags: ['script', 'noscript', 'style', 'textarea', 'pre','code','a'],
        ignoreClass:"comment-content"
            },
        "HTML-CSS": {
            availableFonts: ["STIX","TeX"],
        showMathMenu: false
            }
        });
    </script>
</body>

</html>
