<?php include '../../../public/config/static.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  Lang="en">
<head>
  <?php include '../src/meta.php' ?>
  <title><?php echo $thename ?> | Print</title>
 
</head>
<body>

<h1 class="text-blue-400">Welcome to My Webpage</h1>
  <p class="text-[red] bg-[blue]">This is some content that I want to convert into a PDF.</p>
  <div id="content">
    <h2>This is a special section that will be included in the PDF</h2>
    <p>More content goes here!</p>
  </div>
  <script>
        // Save the content in an external file (simulating this step).
        const contentData = {
            content: document.getElementById('content').innerHTML
        };

        fetch('save_content.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(contentData)
        });
    </script>
</body>