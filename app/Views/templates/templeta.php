<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?= $this->include('templates/css'); ?>
</head>
<body>
 
    <?= $this->include('templates/header'); ?>
 
    <div class="container">
        <?= $this->renderSection('content'); ?>    
    </div>
   
    <?= $this->include('templates/js'); ?>
 
</body>
</html>
 