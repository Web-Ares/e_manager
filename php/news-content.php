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
                            "date": "17 April 2016",
                            "dataDate": "2016-04-17",
                            "info": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis consectetur nisi, ac placerat odio. ",
                            "href": "#"
                            },
                        {
                            "id":2,
                            "title": "A New Conference. Be Inspired, Get Creative.",
                            "picture": "pic/news-01.jpg",
                            "date": "17 April 2016",
                            "dataDate": "2016-04-17",
                            "info": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis consectetur nisi, ac placerat odio. ",
                            "href": "#"
                            },
                        {
                            "id":3,
                            "title": "A New Conference. Be Inspired, Get Creative.",
                            "picture": "pic/news-01.jpg",
                            "date": "17 April 2016",
                            "dataDate": "2016-04-17",
                            "info": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis consectetur nisi, ac placerat odio. ",
                            "href": "#"
                            },
                        {
                            "id":4,
                            "title": "A New Conference. Be Inspired, Get Creative.",
                            "picture": "pic/news-01.jpg",
                            "date": "17 April 2016",
                            "dataDate": "2016-04-17",
                            "info": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis consectetur nisi, ac placerat odio. ",
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
                            "date": "17 April 2016",
                            "dataDate": "2016-04-17",
                            "info": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis consectetur nisi, ac placerat odio. ",
                            "href": "#"
                            },
                        {
                            "id":6,
                            "title": "A New Conference. Be Inspired, Get Creative.",
                            "picture": "pic/news-01.jpg",
                            "date": "17 April 2016",
                            "dataDate": "2016-04-17",
                            "info": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis consectetur nisi, ac placerat odio. ",
                            "href": "#"
                            }
            ]
        }';

};
echo $json_data;
exit;
?>
