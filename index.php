<?php
  if (isset($_POST["submit"])) {
     $file_url = $_POST["url"];
     $file_name = basename($file_url);
     
     header("Cache-Control: public");
     header("Content-Description: File Transfer");
     header("Content-Disposition: attachment; Filename=$file_name");
     header("Content-Type: application/zip");
     header("Content-Transfer-Encoding: binary");
     
     readfile($file_url);
    
  }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Magic Card</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="card">
      <header>
        
<h1><span>CORETECH</span> File Downloader</h1>
        
        
        <h3>paste the url of Video,imges and pdf to download For Free</h3>
      </header>
      <form action="" method="POST">
        <input type="url" name="url" id="url" placeholder="Paste file url" required>
        <button name="submit">Download File</button>
      </form>
    </div>
</div>

</body>
</html>
