<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Template</title>
</head>
<body>
    <?php $mode = "light" ?>

    <?php if ($mode == "light"): ?>
        <div style="padding:20px; background: #ccc; color: #111;">
            This is light theme
        </div>
        <?php else: ?>
            <div style="padding:20px; background: #111; color: #333;">
                This is dark theme
            </div>
        <?php endif ?>
            
</body>
</html>