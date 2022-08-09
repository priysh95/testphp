<?php
define("DIR_NAME", "comments/");

if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["comment"])) {
   $name = $_GET["name"];
   $email = $_GET["email"];
   $comment = $_GET["comment"];
   $random_number = rand();

   $output = "Name: " . $name . "\n";
   $output .= "Email: " . $email . "\n";
   $output .= "Comment: " . $comment . "\n";
   
   $fopen = fopen(DIR_NAME . $random_number . ".txt", "w");
   $fwrite = fwrite($fopen, $output);
   fclose($fopen);

   if ($fwrite) {
      $get_file_content = file_get_contents(DIR_NAME . $random_number . ".txt");
      echo $get_file_content;
   }
} else {
   header("Location: feedback.html");
}

?>