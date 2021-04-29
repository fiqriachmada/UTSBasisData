<?php
    require_once("koneksi.php");
    require_once("model\ModelAuth.php");
    require_once("model\ModelAuthor.php");
    require_once("model\ModelCatatan.php");
    
    if(isset($_GET['page']) && isset($_GET['aksi'])){
        session_start();
        $page = $_GET['page'];
        $aksi = $_GET['aksi'];
        if ($page == "auth") {
            $auth = new ModelAuth();
            if ($aksi == 'view') {
                $auth->index();
            } else if ($aksi == 'authAuthor') {
                $auth->authAuthor();
            }else {
                echo "Method Not Found";
            }
        } else if ($page == "author") {
            if($_SESSION['role']=='author'){
                $author = new ModelAuthor();
                require_once("View/menu/menu.php");
                if ($aksi == 'view'){
                    $author->index();
                } else if ($aksi == 'nilai') {
                    $aslab->nilai();
                } else if ($aksi == 'createCatatan') {
                    require_once("View/author/create.php");
                } else if ($aksi == 'store') {
                    $author->addCatatan();
                } else {
                    echo "Method Not Found";
                }
            }else{
                header("location: index.php?page=auth&aksi=loginAslab");
            }
        }
    }else {
        header("location: index.php?page=auth&aksi=view");
    }
?>