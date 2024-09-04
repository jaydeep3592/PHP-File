<?php

function formattedDate($format,$data){
    return date ($format,strtotime($data));
}