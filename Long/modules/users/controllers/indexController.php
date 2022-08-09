<?php

function construct() {
    load_model('index');
}

function indexAction() {
    load('helper','format');
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}

function addAction() {
    if(isset($_POST['btn_create'])){
        $data = array(
            'NoiDungCauHoi' => $_POST['noidung'],
            'DAn1' => $_POST['D1'],
            'DAn2' => $_POST['D2'],
            'DAn3' => $_POST['D3'],
            'DapAn' => $_POST['dapAnDung'],
            'DAn4' => $_POST['D4'],
        );
        get_add_list($data);
        header("Location: ?mod=users&action=show");
    }
}

function showAction(){
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('home', $data);
}

function essayAction(){
    load_view('collect');
}

function scoreAction(){
    load_view('course');
}

function courseAction(){
    $list_score = get_list_score();
    $data['list_score'] = $list_score;
//    show_array($list_score);
    load_view('detail',$data);
}
