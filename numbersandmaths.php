<?php
//the code below demonstrates string functions, maths and numbers, constants and conditional statements
//php strings and its functions
//I will demonstrate a few in this project
$str = addcslashes("Hello World!" ,"r"); //This will add a backslash infront of character r.
echo "$str<br>";//echo is a function that will output one or more strings
{
    $str = "An example of a long word is: Pneumonoultramicroscopicsilicovolcanoconiosis<br>";
    echo wordwrap($str,15,"<br>\n");//The wordwrap() function wraps a string into new lines when it reaches a specific length
}
{

    echo similar_text("Hello World","Hello Peter");// similar_text()Calculates the similarity between two strings and return the matching characters:
    echo "<br>";
}
{
    echo number_format("1000000")."<br>";
    echo number_format("1000000",2)."<br>";
    echo number_format("1000000",2,",",".");//number_format ()function formats a number with grouped thousands.
    echo "<br>";

}
{
    echo setlocale(LC_ALL,"US");//The setlocale() function sets locale information.language, monetary, time and other information specific for a geographical area.
    echo "<br>";
}

{
    echo ucfirst("hello world!"); //ucfirst() Converts the first character of "hello" to uppercase:
echo "<br>";
}
//The math functions can handle values within the range of integer and float types.

echo(abs(6.7) . "<br>");//	abs()Returns the absolute (positive) value of a number
echo(abs(-6.7) . "<br>");
echo(abs(-3) . "<br>");
echo(abs(3));
echo "<br>";
{
    echo(acos(0.64) . "<br>"); //acos() Returns the arc cosine of different numbers:
    echo(acos(-0.4) . "<br>");
    echo(acos(0) . "<br>");
    echo(acos(-1) . "<br>");
    echo(acos(1) . "<br>");
    echo(acos(2));
    echo "<br>";
}
{

    echo(sqrt(0) . "<br>");//returns the square root of different numbers:
    echo(sqrt(1) . "<br>");
    echo(sqrt(9) . "<br>");
    echo(sqrt(0.64) . "<br>");
    echo(sqrt(-9));
    echo "<br>";

}
{
    echo(round(0.60) . "<br>");//round() function rounds a floating-point number.
    echo(round(0.50) . "<br>");
    echo(round(0.49) . "<br>");
    echo(round(-4.40) . "<br>");
    echo(round(-4.60));
    echo "<br>";
}
{
    echo(log10(2.7183) . "<br>");//log10() Returns the base-10 logarithm of different numbers
    echo(log10(2) . "<br>");
    echo(log10(1) . "<br>");
    echo(log10(0));



}
{
    echo(pi());//pi() returns the value of pi
    echo "<br>";
}
//php constants and operators
{
    define("GREETING", "Welcome to Cyber Craft Academy!");
    echo GREETING;
    echo"<br>";
    define("THANK", "Thank you for attending the class lessons");
    echo THANK;//note constants are global and can be used across the entire script.
    echo"<br>";
}
{
//conditional statements
    $t = date("H");
    echo "<p>The hour (of the server) is " . $t;
    echo ", and will give the following message:</p>";

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
}










?>