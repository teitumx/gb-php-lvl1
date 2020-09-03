<?php


function getLink()
{
    static $link;
    if (empty($link)) {
        $link = mysqli_connect('localhost', 'root', 'root', 'gbphp');
    }
    return $link;
}

// function see($link)
// {

//     if (empty($_GET['view'])) {
//         return;
//     }
//     $id = (int)$_GET['view'];
//     $sql = "UPDATE `gallery` SET `sees` = `sees` + 1  WHERE id = {$id}";
//     mysqli_query($link, $sql);
// }


function getContent()
{
    $page = 'index';
    if (!empty($_GET['p'])) {
        $page = trim($_GET['p']);
    }

    $fileName = getFullNamePage($page);
    if (!file_exists($fileName)) {
        $fileName = getFullNamePage('index');
    }

    require_once $fileName;

    $action = 'index';

    if (!empty($_GET['a'])) {
        $action = trim($_GET['a']);
    }

    $action .= 'Action';

    if (!function_exists($action)) {
        $action = 'indexAction';
    }

    return $action();
}

function getFullNamePage($page)
{
    return __DIR__ . '/pages/' . $page . '.php';
}

function clearStr($str)
{
    return mysqli_real_escape_string(getLink(), strip_tags(trim($str)));
}

function isAdmin()
{
    return !empty($_SESSION['user']);
}

function isAuth()
{
    return !empty($_SESSION['user']);
}


function getId()
{
    if (empty($_GET['id'])) {
        return 0;
    }
    return (int)$_GET['id'];
}

function postId()
{
    if (empty($_POST['id'])) {
        return 0;
    }
    return (int)$_POST['id'];
}

function redirect($path = '')
{
    if (!empty($path)) {
        header('Location:' . $path);
        return;
    }

    if (isset($_SERVER['HTTP_REFERER'])) {
        header('Location:' . $_SERVER['HTTP_REFERER']);
        return;
    }

    header('Location: ./');
}

function sentMSG($msg)
{
    $_SESSION['msg'] = $msg;
}

function getMSG()
{
    if (empty($_SESSION['msg'])) {
        return '';
    }

    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}

function goodsCount()
{
    if (empty($_SESSION['goods'])) {
        return 0;
    }

    return count($_SESSION['goods']);
}

function render($template, $params = [], $layout = 'main')
{
    $content = renderTemplate($template, $params);

    $title = 'Интернет-магазин';
    if (!empty($params['title'])) {
        $title = $params['title'];
    }

    return renderTemplate(
        $layout,
        [
            'content' => $content,
            'goodCount' => goodsCount(),
            'msg' => getMSG(),
            'title' => $title,
        ]
    );
}

function renderTemplate($template, $params = [])
{
    ob_start();
    extract($params);
    include dirname(__DIR__) . '/view/layouts/' . $template . '.php';
    return ob_get_clean();
}
