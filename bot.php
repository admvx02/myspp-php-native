<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySPP Chatbot</title>
    <link rel="stylesheet" href="style.css">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="shortcut icon" href="assets/img/myspp-logo.png">
</head>

<body>
    <div class="wrapper" data-aos="zoom-out" data-aos-delay="500">
        <div class="title">MySPP Chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hai, Yuk tanya Seputar Aplikasi MySPP</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Butuh bantuan? ketik disini!" required>
                <button id="send-btn">Kirim</button>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#data").on("keypress", function (event) {
                if (event.which === 13) {
                    sendMessage();
                }
            });
            $("#send-btn").on("click", function () {
                sendMessage();
            });

            function sendMessage() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function (result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            }
        });
    </script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script>
        AOS.init();

    </script>
</body>

</html>