<?php 

function asset(string $path)
{
    return BASE_URL . '/' . $path;
}

function constructUrl(string $path, array $params = [])
{
    $url = BASE_URL . '/index.php' . $path;

    if ($params) {
        $url .= '?' . http_build_query($params);
    }

    return $url;
}
function dataSecure(string $data){
    $data=trim($data);
    $data=strip_tags($data);
    $data=stripslashes($data);
    return $data;
}
