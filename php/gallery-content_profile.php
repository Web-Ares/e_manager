<?php

$loadedGroup = $_GET['loadedGroup'];


    //  "has_items" - the number of not downloaded images
    //  "title" - text which shows at hover on element
    //  "dummy" - path to preview picture
    //  "href" - path to main picture, which shows in popup, or a link to the video
    //  "video" - if it is a block with a link to video frame

    $json_data = '{
                    "has_items": 1,
                    "items":[

                        {
                            "title": "ITEM TITLE AT MOUSE HOVER",
                            "dummy": "pic/gallery__pic-10.jpg",
                            "href": "pic/big/gallery__pic-1.jpg"
                            },
                        {
                            "title": "ITEM TITLE AT MOUSE HOVER",
                            "dummy": "pic/gallery__pic-11.jpg",
                            "href": "pic/big/gallery__pic-3.jpg"
                            },
                        {
                            "title": "ITEM TITLE AT MOUSE HOVER",
                            "dummy": "pic/gallery__pic-12.jpg",
                            "video": "https://www.youtube.com/embed/YykjpeuMNEk"
                            }

                    ]
                }';


echo $json_data;
exit;
?>
