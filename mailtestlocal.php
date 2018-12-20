<!DOCTYPE html>
<html>
<head>
  <title>send mail</title>
</head>
<body>
  <?php
    ?>
    <div style="margin-left: 50px;">
    <form method="post" action="">
      <label>To</label><br>
      <select id="to" name="to" required autofocus>
      <option value="-1">Please Select A section</option>
        <option value="a">A</option>
        <option value="b">B</option>
      </select><br>
      <label>Subject</label><br>
      <input type="test" name="subject" id="subject" placeholder="subject" required><span id="errSubject"></span><br>
      <label>Message</label><br>
      <textarea id="message" name="message" rows="5" cols="50" required></textarea><br>
      <input type="submit" name="send" value="send">
    </form>
    </div>
</body>
</html>
<?php
  extract($_POST);
    if ($to==-1) 
    {
      echo "ok";
      ?>
      <script type="text/javascript">
        document.getElementById("errSubject").innerHTML="ok";
      </script>
      <?php
    }
  if (isset($send)&&(!empty($to))&&($to!=-1)&&(!empty($message))&&(!empty($message)))
  {
     echo "$to<br>";
     echo "$subject<br>";
     echo "$message<br>";
     echo "$send<br>";
   } 
?>