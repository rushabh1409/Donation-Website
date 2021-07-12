<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Donate</title>
</head>
<style>
    body {
        background-image: url(images/donate.jpg);
        background-size: cover;
        color: #fff;
    }

    h2 {
        font-size: 50px;
        font-family: 'Poppins', sans-serif;
        text-transform: capitalize;
        letter-spacing: 1px;
        margin-top: 100px;
        margin-bottom: 20px;
    }

    .wrapper {
        margin: 150px auto;
        text-align: center;
        width: 100%;
        position: relative;
    }

    .btn3 {
        padding: 15px 100px;
        margin: 80px 10px;
        color: #fff;
        border: 2px solid #fff;
        border-radius: 5px;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        text-align: center;
        position: relative;
        text-decoration: none;
        display: inline-block;
    }

    .btn3::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-color: #000;
        -webkit-transform: scaleX(0.3);
        transform: scaleX(0.3);
        opacity: 0;
        transition: all 0.3s;
    }

    .btn3:hover::before {
        opacity: 1;
        background-color: #edebeb;
         border-radius: 5px;
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
        transition: -webkit-transform 0.8s cubic-bezier(0.08, 0.35, 0.13, 1.02),
            opacity 0.4s;
        transition: transform 0.8s cubic-bezier(0.08, 0.35, 0.13, 1.02), opacity;
    }

    table.transbox {
  margin: 10px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
}

table.transbox tr td {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
    
</style>
<body>
    <form   method="post" action="payment.php">
        <table class="transbox" style="margin-right: auto;margin-left: auto; padding: 10px;">
                <tr>
                    <td colspan="2"><p style="font-size: 55px; color: #094198; text-align: center;"><b>Enter Details</b></p></td>
                </tr>
                <tr>
                    <td style="font-size: 25px;">E-mail: </td>
                    <td><input style="font-size: 25px;" class="input" type="email" name="email" placeholder="Enter E-mail" required></td>
                    <br>
                </tr>
                <tr><td><br></td></tr>
                <tr style="font-size: 25px;">
                    <td>Amount: </td>
                    <td><input style="font-size: 25px;" class="input" type="text" name="amount" placeholder="Enter Amount" required></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td style="font-size: 25px;">Name: </td>
                    <td><input style="font-size: 25px;" class="input" type="text" name="name" placeholder="Enter Name" required></td>
                </tr>
                <tr><td><br></td></tr>

                <tr>
                    <td style="font-size: 25px;">Phone Number: </td>
                    <td><input style="font-size: 25px;" class="input" type="text" name="phone" placeholder="phone" ng-pattern="/^\d{10}$/" required></td>
                </tr>
                <tr><td><br></td></tr>

                <tr><td></td>
                    <td><button style=" margin:0 auto; font-size: 25px; text-align: center;" type="submit" value="submit">Pay </button></td>
                </tr>
            </table>
            <br>
        
    </form>
</body>
</html>