<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speech Recognition</title>
</head>

<body>
    <label for="speechToText">Speech Recognition</label>
    <input type="text" name="" id="speechToText" placeholder="Speak something" onclick="record()" />

    <script>
        function record() {
            var recognition = new webkitSpeechRecognition() || new SpeechRecognition();
            recognition.lang = "ar";

            recognition.onresult = function(event) {
                console.log(event);
                document.getElementById("speechToText").value =
                    event.results[0][0].transcript;
            };

            recognition.start();
        }
    </script>

</body>

</html>
