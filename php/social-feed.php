<?php

$loadedCount = $_GET['loadedCount'];

if ( $loadedCount == 4 ){

//  "has_items" - the number of not downloaded tweets
//  "login" - user login
//  "feed_txt" - text of feed
//  "href" - link to twitter

    $json_data = '{
        "has_items": 1,
                    "items":[

                        {
                            "id":1,
                            "login": "@jam3sdean",
                            "feed_txt": "Digital creative agencies can get interest-free #business loans of £20k - £250k",
                            "href": "#"
                            },
                        {
                            "id":2,
                            "login": "@jam3sdean",
                            "feed_txt": "Nullam in dui #mauris. Vivamus hendrerit arcu sed erat.",
                            "href": "#"
                            },
                        {
                            "id":3,
                            "login": "@jam3sdean",
                            "feed_txt": "Digital creative agencies can get interest-free #business loans of £20k - £250k",
                            "href": "#"
                            },
                        {
                            "id":4,
                            "login": "@jam3sdean",
                            "feed_txt": "Nullam in dui #mauris. Vivamus hendrerit arcu sed erat.",
                            "href": "#"
                            }

                    ]
    }';

} else {

//  "has_items" - the number of not downloaded tweets
//  "login" - user login
//  "feed_txt" - text of feed
//  "href" - link to twitter

    $json_data = '{

        "has_items": 0,
            "items":[

                        {
                            "id":5,
                            "login": "@jam3sdean",
                            "feed_txt": "Digital creative agencies can get interest-free #business loans of £20k - £250k",
                            "href": "#"
                            },
                        {
                            "id":6,
                            "login": "@jam3sdean",
                            "feed_txt": "Nullam in dui #mauris. Vivamus hendrerit arcu sed erat.",
                            "href": "#"
                            }
            ]
        }';

};
echo $json_data;
exit;
?>
