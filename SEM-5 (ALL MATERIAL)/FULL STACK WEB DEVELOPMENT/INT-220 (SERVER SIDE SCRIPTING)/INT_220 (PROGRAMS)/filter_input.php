<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
E-mail: <input type="text" name="email">
<input type="submit" name="submit" value="Submit"> 
</form>

<?php
if (isset($_GET["email"])) {
    if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL) === false) {
        echo("Email is valid");
    } else {
        echo("Email is not valid");
    }
}
?>