<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `taocauhoi`");
    return $result;
}

function get_list_score() {
    $result = db_fetch_array("SELECT * FROM `diem`");
    return $result;
}

function get_add_list($data){
    return db_insert('taocauhoi', $data);
}