<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
        <script> /* Script written by Adam Khoury @ DevelopPHP.com */ /* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */ function _(el) {
                return document.getElementById(el);
            }
            function subscribeNews() {
                var email = _("email-news").value; // alert(file.name+" | "+file.size+" | "+file.type);
                var formdata = new FormData();
                formdata.append("email-news", email);
                var ajax = new XMLHttpRequest();
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandler, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                ajax.open("POST", "proc_subsnews.php");
                ajax.send(formdata);
                document.getElementById('register_form').style.display = 'none';
                document.getElementById('thanks_subs').style.display = 'block';
            }
            function progressHandler(event) {
                _("loaded_n_total").innerHTML = "Thank you for your registration";
            }
            function completeHandler(event) {
                _("status").innerHTML = event.target.responseText;
                //location.reload();
            }
            function errorHandler(event) {
                _("status").innerHTML = "Registration Failed";
            }
            function abortHandler(event) {
                _("status").innerHTML = "Registration Aborted";
            }

        </script>    
</head>
<body>
<!--                    <form action="proc_subsnews.php" method="post" onsubmit="target_popup(this)">
                    <div class="contact-form">
                        <p class="full-row">
                            <label for="email-news">Enter your Email:</label>
                            <input type="text" id="email-news" name="email-news">
                        </p>
                        <input class="mainBtn" type="submit" name="" value="Subscribe">
                    </div>
                    </form>-->
                            <form id="register_form" enctype="multipart/form-data" method="post">
                                <input type="text" name="email-news" id="email-news"><br> <input type="button" value="Subscribe" onclick="subscribeNews()"> <h3 id="status"></h3> <p id="loaded_n_total"></p>
                                <span id="thanks_subs" style="display: none">Thanks for subscribing!</span>
                            </form> 
</body>
</html>
