<?php

if(isset($_SESSION['message'])) :

?>
        <div class="message" id="message">
            <h2>Message!</h2>
            <p><?= $_SESSION['message']; ?></p>
            <button class="button" onclick="closeMessage()">OK</button>
    </div>
    <script>
        let message = document.getElementById("message");

        function closeMessage(){
            message.classList.add("close-message");
        }
    </script>
    <?php
		unset($_SESSION['message']);
		endif;
?>