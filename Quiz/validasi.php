<html>
    <head><title>PHP Form Validation</title></head>
    <body>
        <h2>PHP Form Validation</h2>
        <p><font color='red'>* require field</font></p>
        <FORM ACTION="" METHOD="POST" NAME="input">
            Name : <input type="text" name="nama"><font color='red'> *</font><br>
            Email : <input type="text" name="email"><font color='red'> *</font><br>
            Website : <input type="text" name="web"><br>
            Comment : <textarea name="komen" cols="40" rows="5"></textarea><br>
            Gender : <input type="radio" name="gender" value="Female"> Female 
            <input type="radio" name="gender" value="Male"> Male<font color='red'> *</font><br><br>

            <input type="submit" name="input" value="Submit">
        </FORM>
        <h2>Your Input</h2>
        <?php
        if (isset($_POST['input'])){
            $nama = $_POST['nama'];
            $imel = $_POST['email'];
            $web = $_POST['web'];
            $komen = $_POST['komen'];
            $jender = $_POST['gender'];
            echo $nama."<br>". $imel."<br>".$web."<br>".$komen."<br>".$jender;
        }
        ?>
    </body>
</html>
