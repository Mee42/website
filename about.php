<!DOCTYPE html>
<html lang="us">
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title>Mee42</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <style>
        .gray-out {
            filter: grayscale(100%);

        }
        .gray-out.gray-inverse {
            filter: invert(50%)
        }
        .desc-a {
            text-decoration: none;
        }
        /*#content-bar a :not(.gray-out) {*/
        /*    filter: none;*/
        /*}*/

        .desc {
            display: none;
            text-align: center;
        }
    </style>
</head>
<body>

<?php include "topbar.html" ?>

<div class="content">
    <h1>I'm Carson Graham</h1>
    <h2>A highschool sophomore interested in all aspects of Computer Science.</h2>

    <script>
        const contentBar = document.getElementById("content-bar");
        const desc = document.getElementById("desc");
        const selectable = ['github','discord','email','gpg'];
        function select(name){
            console.log(name);
            function sel(t){
                return document.getElementById("desc-" + t)
            }
            selectable.forEach(s => {
                console.log(s);
                sel(s).style.display = "none";
                if(!sel("a-" + s).classList.contains("gray-out"))
                    sel("a-" + s).classList.add("gray-out")
            });
            sel(name).style.display = "block";
            sel("a-" + name).classList.remove("gray-out")
        }
    </script>
    <div id="content-bar">
        <a id="desc-a-github" class="gray-inverse desc-a" href="https://github.com/mee42" onmouseover="select('github')">
            <img src="https://image.flaticon.com/icons/svg/25/25231.svg" alt="Github" width="100px"/>
        </a>
        <a id="desc-a-discord" href="https://discordapp.com/channels/@me/435168529499815988" class="desc-a" onmouseover="select('discord')">
            <img src="https://www.freepnglogos.com/uploads/discord-logo-png/anthrocon-twitter-quot-discord-user-wanna-21.png" alt="discord" width="100px"/>
        </a>
        <a id="desc-a-email" class="desc-a" href="mailto:carson@mee42.dev" onmouseover="select('email')">
            <img src="http://pluspng.com/img-png/email-hd-png-hd-painting-512.png" alt="email" width="100px"/>
        </a>
        <a id="desc-a-gpg" class="desc-a" href="https://keys.openpgp.org/search?q=carson42g%40gmail.com" onmouseover="select('gpg')">
            <img src="https://blog.flowl.info/wp-content/uploads/2011/06/gnupg.png" alt="gpg" width="100px"/>
        </a>


        <div id="desc">
            <div id="desc-github" class="desc" style="display: block">
                <pre class="prettyprint">
                Mee42: this is the github embed
                </pre>
            </div>
            <div id="desc-discord" class="desc">
                <pre class="prettyprint">
                arson#5069
                </pre>
            </div>
            <div id="desc-email" class="desc">
                <pre class="prettyprint">
                carson@mee42.dev         carson42g@gmail.com
                </pre>
            </div>
            <div id="desc-gpg" class="desc"">
                    <pre class="prettyprint" style="text-align: center">
sec   rsa4096 2019-02-07 [SC]
      BB881A11F78A79D93FAB707D67D77A4726CF8D6F
uid           [ultimate] Carson Graham &lt;carson42g@gmail.com>
                    </pre>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?skin=sons-of-obsidian&lang=kotlin"></script>
</body>
</html>
