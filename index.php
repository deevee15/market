<head>
    <title>Demo page of clothes shop</title>
    <link rel="stylesheet" type="text/css" href="theme.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <script src="https://kit.fontawesome.com/db1017c910.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/jquery-2.2.4.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
	       $(function(){
                $('.content_photo_other img').click(function(){
                    var get_src_clicked = $(this).attr('src');
                    var get_src_main = $('.content_photo_main img').attr('src');
                    $(this).attr('src',get_src_main);
                    $('.content_photo_main img').attr('src',get_src_clicked);
                });
               $('.header_menubutton').click(function(){
                   $('#header_bottompart').toggleClass('htp_slided');
                   $('#content').toggleClass('htp_slided');
                   $('.header_currency').toggleClass('htpslided');
                   $('.header_menubutton_line').toggleClass('active');
               });
            });
        });
    </script>
</head>
<body>
    <div id="header">
        <div id="header_toppart">
            <div class="header_currency htpslided"><img src="https://i1.wp.com/www.youngpioneertours.com/wp-content/uploads/2020/03/russian-flag-russian-flag-russia-flag-of-russia.jpg?fit=1332%2C850&ssl=1" width="16px" height="11px"> <span>rub</span></div>
            <div class="header_logo"><a href="/" style="color:#000;">CLOTHES</a></div>
            <div class="header_cartbutton">Cart (0)</div>
        </div>
        <div id="header_bottompart" class="htp_slided">
            <div class="header_menubutton">
                <div class="header_menubutton_line"></div>
            </div>
            <div class="header_menulist">
                <ul>
                    <a><li>home</li></a>
                    <a><li>men <i class="fal fa-chevron-down"></i></li></a>
                    <a><li>women <i class="fal fa-chevron-down"></i></li></a>
                    <a><li>lookbook</li></a>
                    <a><li>about</li></a>
                    <a><li>blog</li>
                </ul></a>
            </div>
            <div class="header_buttons">
                <div class="header_buttons_like">
                    <a><i class="fal fa-heart"></i></a>
                </div>
                <div class="header_buttons_search">
                    <a><i class="fal fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="htp_slided">
        <div class="content_photo">
            <div class="content_photo_main"><img src="https://static.bershka.net/4/photos2/2020/I/0/1/p/6262/200/800/6262200800_1_1_3.jpg?t=1602843790317" width="660px" height="680px"></div>
            <div class="content_photo_other">
                <img src="https://static.bershka.net/4/photos2/2020/I/0/1/p/6262/200/800/6262200800_2_1_3.jpg?t=1602843790317" height="170px" width="150px">
                <img src="https://static.bershka.net/4/photos2/2020/I/0/1/p/6262/200/800/6262200800_2_2_3.jpg?t=1602843790317" height="170px" width="150px">
                <img src="https://static.bershka.net/4/photos2/2020/I/0/1/p/6262/200/800/6262200800_2_3_3.jpg?t=1602843790317" height="170px" width="150px">
                <img src="https://static.bershka.net/4/photos2/2020/I/0/1/p/6262/200/800/6262200800_2_4_3.jpg?t=1597170290913" height="170px" width="150px">
            </div>
        </div>
        <div class="content_text">
            <div class="content_text_back"><i class="fal fa-chevron-left" style="font-size:8px;line-height:14px;"></i> Back to <span> Women</span></div>
            <div class="content_text_title">Faux leather puffer jacket</div>
            <div class="content_text_reviews">
                <div class="content_text_reviews_stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="content_text_reviews_text">30 review(s) <span>|</span> <a>add a review</a></div>
            </div>
            <div class="content_text_price">6.999 RUB</div>
            <div class="content_text_info">
                <ul>
                    <li>Availability: <span>In stock</span></li>
                    <li>Product code: <span>#8416</span></li>
                    <li>Tags: <span>Fashion, Winter 2020, Jacket</span></li>
                </ul>
            </div>
            <div class="content_text_description">
                Jacket featuring a high collar with hood and long sleeves. Front zip pockets, an adjustable hem with elastic drawstring and a zip-up front.
            </div>
            <div class="content_text_list">
                <ul>
                    <li><span>Faux leather</span></li>
                    <li><span>Regular fit</span></li>
                    <li><span>Free shipping within 7 days</span></li>
                </ul>
            </div>
            <div class="content_text_selection">
                <div class="content_text_selection_color">
                    <p>COLOR</p>
                    <select>
                        <option>Select color</option>
                        <option>Black</option>
                        <option>Red</option>
                        <option>White</option>
                        <option>Violet</option>
                    </select>
                </div>
                <div class="content_text_selection_size">
                    <p>SIZE</p>
                    <select>
                        <option>Select Size</option>
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                    </select>
                </div>
                <div class="content_text_selection_qty">
                    <p>QUANTITY</p>
                    <input type="number" id="quantity" name="quantity" min="1" max="5" value="1">
                </div>
            </div>
            <div class="content_text_buttonclear">
                <a>clear selection</a>
            </div>
            <div class="content_text_buttonmove">
                <button class="content_text_buttonmove_add">add to cart</button>
                <button class="content_text_buttonmove_wish"><i class="far fa-heart"></i> add to wishlist</button>
            </div>
            <div class="content_text_share">
                <p>share this</p>
            </div>
        </div>
    </div>
    <div id="footer">
        <p>Made by DeeVee @ 2020. All rights reserved</p>
    </div>
</body>