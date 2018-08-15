<!DOCTYPE html>
<html lang="en">
<body>
    <form action="<?php echo base_url('events/uploadPics');?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</body>
</html>