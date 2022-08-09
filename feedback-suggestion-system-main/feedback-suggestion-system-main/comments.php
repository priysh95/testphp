<?php
if (isset($_POST["submit"])) {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $comment = $_POST["comment"];
   
   if (empty($name) || empty($email) || empty($comment) || !isset($_POST["accept_terms"])) {
      echo "All fields and checkbox are required.<br>";
      echo "<a href='feedback.html'>Feedback</a>";
   } else {
      $output = "<b>Name: </b>" . $name;
      $output .= "<br><b>Email: </b>" . $email;
      $output .= "<br><b>Comment: </b>" . $comment;
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
         rel="stylesheet"
      />
      <title>Feedback Submitting System PHP</title>
   </head>
   <body class="bg-light">
      <div class="container py-5">
         <div class="row">
            <div class="col-md-5 mx-auto p-4 rounded border bg-white">
               <h2 class="text-center fw-bold">Feedback Confirmation</h2>
               <?php echo $output; ?>
               <div class="mt-3">
                  <a href="save-comment.php?name=<?php echo $name; ?>&email=<?php echo $email; ?>&comment=<?php echo $comment; ?>" class="btn btn-primary me-2">Confirm!</a>
                  <a href="feedback.html" class="btn btn-danger">Go back!</a>
               </div>
            </div>
         </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>

<?php
   }
} else {
   header("Location: feedback.html");
}
?>