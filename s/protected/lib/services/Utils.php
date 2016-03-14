<?php

define("USER_ID", 'user_id');
define("ITEM_ID", 'id');
define("ITEM_TIME", 'time');
define("ITEM_CONTENT", 'text');
define("ITEM_COUNT", 'weibo_count');
define("USER_NAME", 'name');
define("USER_GENDER", 'gender');
define("USER_LOCATION", 'location');
define("USER_PROVINCE", 'province');
define("USER_CITY", 'city');
define("IS_FOLLOWER", 'isfollower');
define("VERIFIED_TYPE", 'verified_type');
define("REPOST_COUNT", 'repost_count');
define("COMMENT_COUNT", 'comment_count');
define("AVATAR_LARGE", 'avatar_large');
define("PROFILE_IMAGE_URL", 'profile_image_url');
define("FANS_COUNT", 'follower_count');
define("FRIENDS_COUNT", 'friends_count');
define("USER_CREATED_TIME", 'user_time');
define("USER_DESCRIPTION", 'description');
define("USER_URL", 'user_url');
define("PIC_URL", 'picture_url');
define("ORIGIN_CONTENT", 'retweet_weibo_text');
define("WEIBO_URL", 'url');
define("WEIBO_TYPE", 'weibo_type');
define("ORIGIN_URL", 'retweet_weibo_url');

function match_at_username($text) {
    $pattern = "/@[0-9a-zA-Z_\x{4e00}-\x{9fa5}]+/u";
    $matchs = array();
    preg_match_all($pattern, $text, $matchs);
    foreach ($matchs[0] as &$at_name) {
        $at_name = trim($at_name, "@");
    }
    return $matchs[0];
}

function toUser(&$user, $node) {
    if (isset($node->{USER_NAME})) {
        $user->name = $node->{USER_NAME};
    } else {
        $user->name = "";
    }
    if (isset($node->{USER_ID})) {
        $user->user_id = $node->{USER_ID};
    } else {
        $user->user_id = "";
    }
    if (isset($node->{USER_GENDER})) {
        $user->sex = $node->{USER_GENDER};
    } else {
        $user->sex = "";
    }
    if (isset($node->{USER_LOCATION})) {
        $user->location = $node->{USER_LOCATION};
    } else {
        $user->location = "";
    }
    $user->image_url = $node->{AVATAR_LARGE};
    $user->thumb_url = $node->{PROFILE_IMAGE_URL};
    if (isset($node->{IS_FOLLOWER})) {
        $user->is_my_fans = $node->{IS_FOLLOWER};
    } else {
        $user->is_my_fans = "";
    }
    if (isset($node->{VERIFIED_TYPE})) {
        $user->verified_type = $node->{VERIFIED_TYPE};
    } else {
        $user->verified_type = "";
    }
    if (isset($node->{USER_PROVINCE})) {
        $user->province = $node->{USER_PROVINCE};
    } else {
        $user->province = "";
    }
    if (isset($node->{USER_CITY})) {
        $user->city = $node->{USER_CITY};
    } else {
        $user->city = "";
    }
    if (isset($node->{ITEM_COUNT})) {
        $user->item_count = $node->{ITEM_COUNT};
    } else {
        $user->item_count = "";
    }
    if (isset($node->{FANS_COUNT})) {
        $user->fans_count = $node->{FANS_COUNT};
    } else {
        $user->fans_count = "";
    }
    if (isset($node->{USER_CREATED_TIME})) {
        $user->register_time = $node->{USER_CREATED_TIME};
    } else {
        $user->register_time = "";
    }
    if (isset($node->{USER_DESCRIPTION})) {
        $user->description = $node->{USER_DESCRIPTION};
    } else {
        $user->description = "";
    }
    if (isset($node->{USER_URL})) {
        $user->user_url = $node->{USER_URL};
    } else {
        $user->user_url = "";
    }
    if (isset($node->{FRIENDS_COUNT})) {
        $user->idol_count = $node->{FRIENDS_COUNT};
    } else {
        $user->idol_count = "";
    }
}

function toItem(&$item, $node) {
    if (isset($node->{ITEM_TIME})) {
        $item->created_time = $node->{ITEM_TIME};
    } else {
        $item->created_time = "";
    }
    if (isset($node->{REPOST_COUNT})) {
        $item->repost_count = $node->{REPOST_COUNT};
    } else {
        $item->repost_count = "";
    }
    if (isset($node->{COMMENT_COUNT})) {
        $item->comment_count = $node->{COMMENT_COUNT};
    } else {
        $item->comment_count = "";
    }
    if (isset($node->{ITEM_ID})) {
        $item->item_id = $node->{ITEM_ID};
    } else {
        $item->item_id = "";
    }
    if (isset($node->{ITEM_CONTENT})) {
        $item->content = $node->{ITEM_CONTENT};
    } else {
        $item->content = "";
    }
    if (isset($node->{PIC_URL})) {
        $item->pic_url = $node->{PIC_URL};
    } else {
        $item->pic_url = "";
    }
    if (isset($node->{ORIGIN_CONTENT})) {
        $item->origin_content = $node->{ORIGIN_CONTENT};
    } else {
        $item->origin_content = "";
    }
    if (isset($node->{WEIBO_URL})) {
        $item->weibo_url = $node->{WEIBO_URL};
    } else {
        $item->weibo_url = "";
    }
    if (isset($node->{ORIGIN_URL})) {
        $item->origin_url = $node->{ORIGIN_URL};
    } else {
        $item->origin_url = "";
    }
    if (isset($node->{WEIBO_TYPE})) {
        $item->weibo_type = $node->{WEIBO_TYPE};
    } else {
        $item->weibo_type = "";
    }
}

?>