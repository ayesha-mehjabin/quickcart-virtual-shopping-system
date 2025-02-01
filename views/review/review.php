<html>
    <head></head>
    <body>
    <h4 text align ="center">Reviews</h4>
        <h1 text align ="center">What Our Customer Say</h1>
        <input type="submit" value="Home">
        <form action="../control/reg_control.php" method="POST">
            <fieldset>
                <legend>Thank you for reviews</legend>
                <table style="width:50%">         
                <tr>
                        <td><lable for="fname">UserName:</lable></td>
                        <td><input type="text"name="fname"name="name"></td>
</tr>
<tr>
                        <td><lable for="product-code">Product code:</lable></td>
                        <td><input type="number"name="product-code"name="product-code"></td>
</tr>
<tr>
     <td><h4 text=>Reting :</h4></td>
    
                    <td><input type="radio" id="html" name="rate" value="5-star">
                    <label for="5-star">5 Star</label><br>
                    <input type="radio" id="4-star" name="rate" value="4-star">
                    <label for="4-star">4 Star</label><br>
                    <input type="radio" id="3-star" name="rate" value="3-star">
                    <label for="3-star">3 Star</label><br>
                    <input type="radio" id="2-star" name="rate" value="2-star">
                    <label for="2-star">2 Star</label><br>
                    <input type="radio" id="1-star" name="rate" value="1-star">
                    <label for="1-star">1 Star</label></td>
</tr>
<tr>
                        <td><lable for="review">Review:</lable></td>
                        <td><textarea rows="4" cols="50" name="review"></textarea></td>
</tr>
<tr>
    <td>
    <input type="submit" value="Submit">
</td>
</tr>
</table>
</fieldset>
</form>
    </body>
    </html>