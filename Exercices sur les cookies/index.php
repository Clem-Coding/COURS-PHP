<?php
setcookie("colorChoice", $_POST['color']);
$color = $_COOKIE["colorChoice"];


if (isset($_COOKIE["colorChoice"])) {
    if ($color === "1") {
        $css_file = "default.css";
    } elseif ($color === "2") {
        $css_file = "red.css";
    } else {
        $css_file = "blue.css";
    }
} else {
    $css_file = "default.css";
}



?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Exercice cookie</title>
    <link rel="stylesheet" href="<?= $css_file ?>" />
</head>

<body>
    <h1>
        Sed sint laboriosam et blanditiis architecto cum aspernatur placeat.
    </h1>
    <p>
        Lorem ipsum dolor sit amet. Nam error beatae sed vitae ipsa et libero officiis ut minus eaque hic porro quidem eum dolor aliquam? Et molestiae beatae in odit magni eos sapiente dignissimos!
    </p>
    <h2>
        Est omnis quas sed voluptatem dicta eum vitae itaque!
    </h2>
    <p>
        Ea ratione minima et nihil excepturi non itaque iure aut assumenda velit a quisquam amet et dolorem maxime et dicta illum. At architecto quia id voluptatem quisquam sit aspernatur sapiente quo aperiam sequi sit mollitia veritatis. Nam placeat distinctio ut soluta doloremque ab debitis quis?
    </p>
    <h3>
        Aut magni consequuntur in omnis error aut internos molestias.
    </h3>
    <p>
        Aut culpa recusandae sed ducimus velit vel omnis velit et beatae quae At galisum quam ut explicabo delectus in nisi suscipit. Ab distinctio dolorum in quam quam et provident rerum.
    </p>
</body>

</html>