<?php
// ---------------------------------------- //
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://discord.com/api/v10/users/1155350371930218496");
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Authorization: MTE1NTM1MDM3MTkzMDIxODQ5Ng.GdqHH9.V2fOp7orlVfUXD6PItdZPVCjcXcI8fC16S2I9k',
));
//curl_setopt($curl, CURLOPT_POSTFIELDS, "");
$data = curl_exec($curl);
// ---------------------------------------- //
$decode = json_decode($data, true);
// ---------------------------------------- //
$id = $decode['id'];
$username = $decode['username'];
$global_name = $decode['global_name'];
$av = $decode['avatar'];
$banner = $decode['banner_color'];
$avatar = "https://cdn.discordapp.com/avatars/$id/$av.png";
// ---------------------------------------- //
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $global_name ?></title>
</head>
<body>
    <div class="container">
        <img src="<?php echo $avatar ?>">
        <h1><?php echo $global_name ?></h1>
        <p>@<?php echo $username ?></p>
    </div>
</body>
</html>