<?php

$loadedCount = $_GET['loadedCount'];

if ( $loadedCount == 4 ){

//  "has_items" - the number of not downloaded images
//  "title" - title of news
//  "picture" - preview picture
//  "date" - date of news
//  "href" - link to main news

    $json_data = '{
        "has_items": 1,
                    "items":[

                        {
                            "id":1,
                            "title": "A New Conference. Be Inspired, Get Creative.",
                            "picture": "pic/news-01.jpg",
                            "date": "17 Feb. 2016",
                            "href": "#"
                            },
                        {
                            "id":2,
                            "title": "A New Conference. Be Inspired, Get Creative.",
                            "picture": "pic/news-01.jpg",
                            "date": "17 Feb. 2016",
                            "href": "#"
                            },
                        {
                            "id":3,
                            "title": "A New Conference. Be Inspired, Get Creative.",
                            "picture": "pic/news-01.jpg",
                            "date": "17 Feb. 2016",
                            "href": "#"
                            },
                        {
                            "id":4,
                            "title": "A New Conference. Be Inspired, Get Creative.",
                            "picture": "pic/news-01.jpg",
                            "date": "17 Feb. 2016",
                            "href": "#"
                            }

                    ]
    }';

} else {

//  "has_items" - the number of not downloaded news
//  "title" - title of news
//  "picture" - preview picture
//  "date" - date of news
//  "href" - link to main news

    $json_data = '{

        "has_items": 0,
            "items":[

                        {
                            "id":5,
                            "title": "A New Conference. Be Inspired, Get Creative.",
                            "picture": "pic/news-01.jpg",
                            "date": "17 Feb. 2016",
                            "href": "#"
                            },
                        {
                            "id":6,
                            "title": "A New Conference. Be Inspired, Get Creative.",
                            "picture": "pic/news-01.jpg",
                            "date": "17 Feb. 2016",
                            "href": "#"
                            }
            ]
        }';

};
echo $json_data;
exit;
?>
