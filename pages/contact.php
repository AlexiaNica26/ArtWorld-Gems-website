<?php 
    include'../inc/header.php';
?>

<style>
    .conatct_middle p{
        font-size: 100px;
    }
    
    .contact{
        padding: 30px;
    }
    
    .contact_details {
        list-style: none;
        color: #000000;
        font-size: 25px;
    }
    
    .contact_details a{
        color: #000000;
        font-size: 25px;
        text-decoration: none;
    }
    
    .contact_details a:hover{
        color: #FF69B4;
    }
    
    .contact img {
        height: 300px;
        width: auto;
    }
    

        h2 {
            color: hotpink;
        }

        form {
            max-width: 300px;
            margin: 0;
            margin-left: 0px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: hotpink;
        }

        input[type="email"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid hotpink;
        }

        input[type="submit"] {
            background-color: hotpink;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff69b4;
        }

        .success-message {
            display: none;
            max-width: 300px;
            margin: 20px;
            padding: 20px;
            background-color: #dff0d8;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .success-message p {
            margin: 0;
            color: #3c763d;
        }

        .close-button {
            position: relative;
            top: -10px;
            right: -10px;
            float: right;
            font-weight: bold;
            cursor: pointer;
        }
</style>

<div class="conatct_middle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>CONTACT</p>
            </div>
        </div>
    </div>
</div>

<div class="line">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p> </p>
            </div>
        </div>
    </div>
</div>

<script>
    function closeMessage() {
        var message = document.getElementById('success-message');
        message.style.display = 'none';
    }
</script>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="../images/contact_image.png" alt="">
            </div>
            <div class="col-md-10">
                <ul class="contact_details">
                    <li><p>Phone Number: <a href="tel:0777888999">0777888999</a></p></li>
                    <li><p>Mail: <a href="mailto:alexia_nyk@yahoo.ro">alexia_nyk@yahoo.ro</a></p></li>
                    <li><h2>Subscribe to Our Newsletter</h2></li>
                    <li>
                        <form method="POST" action="../inc/process_form.php">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            <br>
                            <input type="submit" value="Subscribe">
                        </form>
                        <div id="success-message" class="success-message">
                            <p>Thank you for subscribing!</p>
                            <span class="close-button" onclick="closeMessage()">x</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    function closeMessage() {
        var message = document.getElementById('success-message');
        message.style.display = 'none';
    }
</script>
    
                            
                   
                            


<?php
    include'../inc/footer.php';
?>