-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 11, 2020 lúc 03:15 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sem1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `name`, `images`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Free Shipping Order $100', 'icon1.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nobis error laborum, voluptate iusto culpa reprehenderit, fuga eligendi. ', '2020-07-14 20:40:36', '2020-07-14 20:44:50'),
(3, '30 Day Easy Return', 'icon2.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit veniam ducimus nostrum dolorem eos aspernatur debitis nam incidunt neque alias recusandae reiciendis cumque', '2020-07-14 20:44:17', '2020-07-14 20:44:17'),
(4, '24/7 Customer Support', 'icon3.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nobis error laborum, voluptate iusto culpa reprehenderit, fuga eligendi.', '2020-07-14 20:45:18', '2020-07-14 20:45:29'),
(11, 'New Season ', '3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2020-07-16 02:57:59', '2020-07-16 02:57:59'),
(12, 'New Season  ', '4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ', '2020-07-16 02:58:42', '2020-07-16 02:58:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`blog_id`, `images`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'tin2.jpg', 'HOW TO CHOOSE JEans PANTS SUITABLE FOR MEN', '<p>Can wear jeans that can wear clothes in their guy\'s clothes. How to do something that can be done Post after you go and when you are using!</p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/quanjen.jpg\" alt=\"\" width=\"250\" height=\"149\" /></p>\r\n<p>Brands based on gentle male size to make standards, thereby raising or reducing the measurements to suit the ownership of different figures. For those who have non-standard measurements, the purchase of jeans meets many obstacles.</p>\r\n<p>However, there are still a few tips to help men choose the ideal jeans for themselves, no matter what they wear.</p>\r\n<p>Before you go out to the store to choose a suitable model for your jeans, first you need to master three important elements: the length of the shirt, the variety of colors and the shape of the pants. Besides, please measure the body indicators and master this measure so that buying takes place more quickly.</p>\r\n<p>Of the three factors above, be especially mindful of the length of the shirt. Please pull out the jeans that you like best, after stopping construction. This measures the distance between the back and the crotch and based on this figure makes a standard for choosing pants.</p>\r\n<p>Why is the shirt length so important? Firstly, the length of the bottom of the shirt has a great impact on the visual effect of the wearer: tall or good, fat or shrunk. Second, when the length of the shirt can be adjusted by the method of shortening or rolling the bear, the length of the bottom of the shirt is not possible.</p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/quanjen1.jpg\" alt=\"\" width=\"250\" height=\"438\" /></p>\r\n<h3><strong>The sick</strong></h3>\r\n<p>People with slender physique often feel more comfortable going shopping. It\'s purely because they have a wider choice of choices, and jeans are no exception. Not limited to smooth or loose-fitting jeans, the sick can freely try out the embroidery, bleaching or breaking tips.</p>\r\n<p>Even so, the sick should still spend the first time wearing a well-worn shirt so that the opposite person does not pay too much attention to his small legs. Moreover, choosing the right fabric also plays a significant role in balancing the body of the wearer.</p>', '2020-07-14 20:56:13', '2020-07-24 05:26:09'),
(3, 'tin1.jpg', 'METHOD OF SELECTING JEANS CLOTHING FOR WOMEN', '<h2 class=\"name\"><span style=\"color: # e03e2d;\"> Method of choosing jeans for women </span></h2>\r\n<h2><strong> Girls always want to choose for themselves the most perfect, especially in choosing their lovely outfits. Today, let\'s talk about choosing jeans that are right for you! </strong></h2>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/quannu.jpg\" alt=\"\" width=\"250\" height=\"250\" /></p>\r\n<h3><strong> Current women\'s jeans trend </strong></h3>\r\n<p>T-shirts for men and women, making them cute, .. Are indispensable needs of women. Beautiful <a href=\"https://thoitrangngaynay.com/quan-dui-jean-nu-ngan\"> beautiful <strong> Women\'s jeans shorts </strong> </a> It\'s like accessories to help girls become extravagant, more attentive than before. The clothes must be professionally suited to the environment, the work, the characteristics and the high level of oneself, in order to create the affection, respect and attention of those around them.</p>\r\n<p>along with the cute, sweet outfit, the gentle, delicate dress evokes the slender, gentle, cute for her. The youthful and advanced sports outfit, jeans combined with T-shirts, will bring a very classy and sophisticated class for girls to confidently walk down the street.</p>\r\n<p>This is a fashion trend that is never out of fashion, is very popular with young people, reminds of women of all ages. Please refer to the article below, to be able to choose for yourself a sample of jeans that both fit the body and fit into the best shape.</p>\r\n<h3><strong> how to choose a women\'s jeans size </strong></h3>\r\n<p>In order to choose the best size pants, you must determine the height, weight, body shape as well as the measurement of your rings. And after stopping construction. This will balance to own the most pleasing pants.</p>\r\n<h4>Determine the measurement of your waist, and your waist</h4>\r\n<p>Then come to measure - put on the shirt that has the most body, make you not be `` swallowed up \'\' in fashionable clothes but big and big, don\'t look cute, and lose completely its worth.</p>\r\n<h4>Measure the length, the secret time in the crotch to the waistband</h4>\r\n<p>For each body shape, the height you should choose the length, short different to not be or the state of the sharp, when wearing. about the secret from the bottom of the shirt to the waist must ensure the most ideal for the girls not feeling, uncomfortable, restrained, clicked, will make the loss of confidence and delight.</p>\r\n<p>The type of jeans high waistband or late waistband will own the appearance as well as the size is different. There are women who work, or work to sit high, travel, the high-waist jeans sample is the perfect, safe choice. It made the ladies grow into class, decent but still extremely stylish, not too revealing.</p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/tin11.jpg\" alt=\"\" width=\"250\" height=\"375\" /></p>', '2020-07-14 21:01:14', '2020-07-24 05:29:03'),
(4, 'tin4.jpg', 'Tips to choose suitable hats for men and women', '<h2 class = \"ten\"> <span style = \"color: # e03e2d;\"> Tips to choose the right hat for men and women </span> </h2>\r\n<p> <span style = \"color: # 000000;\"> <strong> Besides having a headache choosing an impressive outfit, many people are still trying to find a trendy hat for themselves. cute, right? And you will definitely become more outstanding with a hat that suits you. So, what is the technique for giving me a suitable hat? </strong> </span> </p>\r\n<p style=\"text-align: center;\"><span style=\"color: #000000;\"><strong><img src=\"http://localhost/MARCHO/uploads/tinmu.jpg\" alt=\"\" width=\"250\" height=\"165\" /></strong></span></p>\r\n<p> </p>\r\n<p> Hat reserved for long faces </p>\r\n<p> If the customer has a long face, this is one of the perfect faces that you can try with any hat shape. This face is suitable for all kinds of beautiful hats and you can freely buy the poses you want. Compared to the owners of a long face, the most sustainable cone posture for women is the wide-brimmed hat. It will honor the beauty on the faces of consumers, creating a gentle soft charm for the face. </p>\r\n<p> The huge, wide-brimmed hat-shaped postures, made of papyrus material are always the best buy for perfect beauty. Just use sun protection to protect the face skin just balanced fit long face. however, people with long faces are forced to leave their hat positions with small or shallow brim, because these designs will disrupt our faces. </p>\r\n<p> Hats for people with rectangular and rectangular views </p>\r\n<p> there are people who own a rectangular face, the appropriate hat style especially the small brimmed ones, they will help balance your face, creating a lovely and cute appearance for yourself. Besides, hats with no really wide brim or hats, hats or caps are also the perfect decoration for your beauty. </p>\r\n<p> The hat is a compatible design and is used by many girls with a square face. This is a hat shape that makes the harmony and rationality of the basic lines above a square face. </p>\r\n<p> Hats for people with a heart face </p>\r\n<p> A person with a heart-shaped face who possesses points of interest is considered a tall forehead and pointed chin. so choosing the most suitable hat is the average-brimmed hat to outsource part of our forehead, making it look cuter than ever. </p>\r\n<p> Hat reserved for a round face </p>\r\n<p> If the customer is a person with a round and well-rounded face, you should choose high-top hats to increase the length of the face and hat. more round. and the understandable hats, wearing typical jeans of summer day will be the perfect choice for girls with round views. You have to leave the cones with the chop evenly or the tip is reasonable because it only makes your face bigger and bigger. </p>\r\n<p> One of the hats that suits the dynamic transforming girls is the cap. This hat shape will create bold personality, beautiful dynamic for yourself. Suitable for all faces, causing strong and powerful, bold personality but very cute and lovely for me. </p>\r\n<p> Except for hat shape and frieze, the color of the hat is also widely used by many women. Buying easy-to-understand hat styles will simply combine the most fashionable and luxurious clothing. </p>\r\n<h2 style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/tin4.jpg\" alt=\"\" width=\"250\" height=\"292\" /></h2>\r\n<p> hat models not only cover things from rain and sun anymore, they become a fashion accessory for men needed to coordinate with clothing models, increase beauty and the rationality for the entire outfit. . however, choosing a suitable hat sometimes makes it difficult for the brothers. The company shows some interest in how the guys can choose a nice hat. </p>\r\n<p> If you own an oval face, you won\'t have any trouble buying a hat. Your face fits most different types of hats. If you want a more classy and luxurious personality, you can choose a hiphop hat, this will be one of the extremely stable buying options. </p>\r\n<p> If the customer has a round face, to improve the look of the face. We can also choose to buy hats. They will make our face look longer. watermelon hats or military postures, caps are also suitable for those who own a round face. and panicked and yet tried a cowboy hat for a real masculine look. </p>\r\n<p> Possesses guys with a heart-shaped face with vast forehead and pointed chin. You should choose a hat that will help you cover your forehead and make your face more harmonious. </p>\r\n<p> For a guy with a rectangular face, a beret is always a great item. This hat will help you conceal and make your gender stronger. </p>\r\n<p> the baseball cap is almost always the first choice of the boys. it is a hat that fits all faces. Meanwhile, the cap will make it easy to combine with simple everyday clothes, giving you a flexible and quality look. Having a set of shoes, sneakers, women\'s jeans, a T-shirt and a baseball cap, will bring you around the look of freshness and enthusiasm. </p>', '2020-07-14 21:06:08', '2020-07-20 18:31:52'),
(5, 'blog3.jpg', 'HOW TO CLEAN AND STORAGE SPORTS SHOES', '<h2 class = \"ten\"> <span style = \"color: # e03e2d;\"> Cleaning and storage of sports shoes </span> </h2>\r\n<p> <span style = \"color: # 000000;\"> <strong> For a lot of people, the shoes seem to be passionate and loved but sometimes it is they who do not know how to care for and keep preserve it. Let\'s take a look at how to clean and store shoes today! </strong> </span> </p>\r\n<p style=\"text-align: center;\"><span style=\"color: #000000;\"><strong><img src=\"http://localhost/MARCHO/uploads/tingiay.jpg\" alt=\"\" width=\"250\" height=\"250\" /></strong></span></p>\r\n<p> Others have men\'s leather shoes, simple women\'s sports shoes to be completely washable, but you must also pay attention to the concept of hygienic cleaning that makes shoes pure and wash shoes, to ensure Our shoes are always clean and durable. <br /> Outstanding sports shoes are considered to be essentially sweat-absorbing, water-repellent and easy to clean by hand washing. Pure chemical products should only be used for shoe soles, soles of women\'s sports shoes. In the shoe area, you can use a dry brush to remove the dust or if dirty, you can wash your hands according to the following rules. <br /> How often to wash 1 </p>\r\n<p> Normally, there are guys who diligently wash women\'s sports shoes, for example, after every football match, doing ... that is considered to be you in the shoe cleaning addict. If you own friends, you are lazy, or the idea that you should not wash shoes, must not wash shoes all year round but only clean up. <br /> In fact, there is no decision about how long should shoe cleaning in the women\'s sports shoes protection section. But it is best if you have to wash them once a month. For those who regularly get involved in Sports, it is most likely every 3 weeks. and you need to periodically clean, clean and clean your own shoes. <br /> Washing shoes helps prevent shoes from getting moldy, limits odor and skin-related diseases… the uses for which shoe cleaning cannot work. In spite of the fact that we often wash our shoes with a clean truth addiction, our shoes will not be as easy to maintain as the original size of the shoe. <br /> Notice when washing sports shoes jogging </p>\r\n<p> do not wash continuously: if customers dip the water periodically, the shoes will affect the sole glue, or the material of the shoe body will rot ... Because the pattern is only when the shoes are dirty or once every 3 weeks. <br /> Washing by washing machine: washing by washing machine can completely cause the shoe form to be deformed, the shoes will be damaged quickly due to long soaking and the strong rotation speed of the laundry product line will affect the durability of the shoes. <br /> Don\'t soak your shoes in water for too long: The water will cause the glue between the sole and the sole. Quickly lose adhesion, damaging your shoes. <br /> Limit the use of soap: Unless shoes are dirty using impure water, you must use diluted soap. Do not put soap on shoes directly with a strong detergent, more than half will create many layers of foam makes the action cleaner and more competitive. </p>\r\n<p style = \"text-align: center;\"> <img src = \"http: // localhost / MARCHO / uploads / shoes1% 20 (1) .jpg\" alt = \"\" width = \"250\" height = \"141 \"/> </p>\r\n<p> If our women\'s sneakers come with protective instructions, it\'s very good to follow the instructions to keep our shoes very well. during winter, you can also extend the time to clean shoes than summer due to hot sweating climate. Bleach always promotes function in the work of pure stains, smudges on both cheap clothes and shoes. Although sometimes strong, bleaching always discolored shoes, damaging hands skin. Therefore, you should be detailed when communicating with this chemical, you must wear socks and do not wash shoes that own other equipment lines. For example, shoes with a lot of beauty, you have to consider carefully. The process of washing shoes is similar to washing clothes, consumers carefully scrub the stain. This method takes much less labor and time when using the brush but in return harms to the health. Besides erasing a pencil, it can also remove stains. Also done the same time as the previous time, the time when electronic games with 4-button electronic games were popular, or the situation where the inserted tape did not charge, could not enter. Then this time the eraser is a help to the wing. So today, in the work to clean our dear shoes, also often promote remarkable use in dirty work. Consumers just need to understand and simply rub on the stains, smudges on the shoes is the end. <a title=\"normal men\'s shirts\" href=\"https://thoitrangngaynay.com/ao-so-mi-nam-dep\"> <strong> handsome men\'s shirts </strong> </a> then return you clean white sneakers as fresh as when shopping. In addition to the above methods of cleaning, this is the strongest method but it is slightly more reliable than using detergent. you use a little alcohol with makeup remover, or brush. rub the stain most times, continuing to use a dry cloth. </p>', '2020-07-14 21:09:15', '2020-07-20 18:34:27'),
(6, 'sandan.jpg', 'HOW TO CHOOSE SANDAL SHOES', '<h2 class = \"ten\"> <span style = \"color: # e03e2d;\"> How to choose the right sandal for each foot type </span> </h2>\r\n<p> The summer is hot, a period where every girl still wants to put away her shoes, to put her feet on comfortable and comfortable sandals. But to choose meticulously with legs is not considered a simple thing, not always desire to be able to look really beautiful plus sandals. It is because the straps design creates gaps that inadvertently make the weak points or mediocre parts of the feet even more pronounced. The following are considered the most effective and timely share, help your girlfriend to prepare and adjust the design of sandals for yourself. </p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/sandan.jpg\" alt=\"\" width=\"250\" height=\"375\" /></p>\r\n<p> <strong> <span style = \"color: # 000000;\"> 1. Short legs </span> </strong> <br /> <br /> owning a modest height with short feet of course high-heeled sandals designs will always be the most timely and effective salvation of friend. However, not all high heels are reasonable, a short-legged girl like you, need to know how to select the straps design method to make the legs feel more elongated. </p>\r\n<p> <strong> 2. Many ankles </strong> <br /> <br /> Many girls are still subjective to the fact that they are ankles because of the bone structure, and the purchase of sandals is considered to be foot-dependent. The relationship must not be overkind. But in fact, they are extremely rigorously linked together, making the wrong choice even though only a small little detail accidentally coincidentally complements your bow weaknesses. <br /> <strong> 3. Big, rough feet </strong> <br /> <br /> The choice of sandals for big-legged people is always considered a difficult problem, it is difficult to choose the correct answer. perhaps, with big feet, very good women should wear more shoes that are considered sandals, the dress style of sandals will be very easy to clearly show the points of your feet. Although, not yet considered to be impossible to own a thorough solution, the sandals with straps to your ideal medium form this summer </p>\r\n<p> <strong> 4. Tiny, sinewy feet </strong> <br /> <br /> Like our big, bony feet, there is always a need for large, beaded sandals Big flowers to cover. Small, sinewy legs are also better suited to wear shoes, so sandals should be considered too much. <br /> <strong> 5. Excessive long or short feet </strong> <br /> <br /> The way the feet are too short or too long can also cause problems when wearing sandals. can be short, you should favor biased sandals, simplified nights most of the details to make you feel longer, while long-legged model desks are required to be sophisticated in straps. just like the design of sandals. </p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/sandan1.jpg\" alt=\"\" width=\"250\" height=\"375\" /></p>\r\n<p> <strong> 6. Dark brown feet </strong> <br /> <br /> skin elements, the color of the sandals you add will enhance your feet. <a title=\" Men\'s short jeans briefs\" href=\"https://thoitrangngaynay.com/quan-dui-short-jean-nam-ngan\"> <strong> Men\'s short jeans shorts </strong> < / a> possession of white skin, the phenomenon of choosing shoes does not need to be scrutiny Many, but if unfortunately occupying the black feet or being dull due to sunburn, the new gentle and easy-to-understand designs is to select the appropriate. </p>', '2020-07-14 21:23:08', '2020-07-20 18:55:32'),
(7, 'mauda.jpg', 'HOW TO CHOSSE CLOTHES APPROPRITA SKIN COLOR', '<h2 class = \"name\"> <span style = \"color: # e03e2d;\"> How to choose the right skin color </span> </h2>\r\n<p> </p>\r\n<p> To get a great look depends not only on the design but also on the color of the outfit. This is a really important factor. </p>\r\n<p> According to fashion experts, many colors play an extremely important role in honoring, or vice versa, willing to \"submerge\" your trendy clothing sets just because they are too opposed to skin color. Therefore, knowing the list of colors that are consistent with your skin model will help you look and look better. </p>\r\n<p> <strong> 1.like you have dark skin </strong> </p>\r\n<p style=\"text-align: center;\"><strong><img src=\"http://localhost/MARCHO/uploads/mauda%20(1).jpg\" alt=\"\" width=\"250\" height=\"223\" /></strong></p>\r\n<p> owning brunettes, playing with skin color is worth considering the rules of choosing colors with many colors will be very opposite. so, as orange as the skirts have a variety of bright colors, yellow, red, coral, and worthy of investing in colors. <br /> <br /> Not only that, It should be noted away from the colors too bright as neon colors because they will turn you into a \"colorful parrot\" in the town. Brown, black, blue, gray, silver and cool, pale colors are also on the list to limit the search of dark skinned women. They tend to make your skin look golden and lifeless. </p>\r\n<p> <strong> 2. Let\'s say you have brown skin </strong> </p>\r\n<p> Pale colors like pastel, or brown, caramel, orange, gray, or pastel will make brown skin duller. Instead of slow deployment, the girls who own the skin of honey cake should choose for themselves the costumes with bright and warm colors such as gem tones, or dark navy colors, dark pink, bright pink. , raspberry, red or green, deep purple colors </p>\r\n<p> <strong> 3. if you are a yellow girl </strong> </p>\r\n<p> This is the common skin color of Asian girls, and fortunately because this skin color is almost adaptable to any color, typically yellow and brown. However, the most beautiful riches with yellow skin are pink, especially bright pink tones that make your skin plump and full of vitality. Green, from olive green to emerald green makes you more eye-catching by creating the illusion of brown and toned skin. In addition, the costumes in orange range from dark to light, the red colors such as burgundy, magenta, cherry red and rose red, pink brown ... are very religious for the girls of the yellow skin type. </p>\r\n<p> <strong> 4. with white women </strong> </p>\r\n<p style=\"text-align: center;\"><strong><img src=\"http://localhost/MARCHO/uploads/mauda.jpg\" alt=\"\" width=\"250\" height=\"364\" /></strong></p>\r\n<p> You need to distinguish if your skin is pinkish white or bluish white If you are lucky with pink white skin, you will receive the \"privilege\" of wearing beautiful clothes with the majority of diverse colors, in the dark colors such as black, brown, moss green, dark blue ... until the cold colors. < br /> <br /> While at the same time progressing, blue-white skin needs to stay away from the two basic colors that are never outdated: white and black, because white will make your skin pale and lack of vitality , and black creates a contrast that is too strong negative for the skin. Bright and colorful colors should not appear in the closet of her possessed blue white skin. Instead, you get the joy of mixing and matching with lovely, bright colors like peach pink, light pink, apricot, green grass, pink brown, navy blue, gray, rose red or light red ... </p>\r\n<p style = \"text-align: center;\"> </p>', '2020-07-14 21:24:40', '2020-07-20 18:38:40'),
(8, 'blog4.jpg', 'SECRETS FOR CHOOSEING A BOOK SUIT', '<h1 class = \"title-detail\"> 5 Tips to Choose the Bag Right for You </h1>\r\n<p> How to choose the right handbag is not a simple task but for women, nothing is too difficult. In the pocket of a few simple tips, you will easily find \"new friends\" to look beautiful and welcome. </p>\r\n<p> <strong> Use circumstances: </strong> Are you planning to buy bags for special occasions or daily use? For regular use, choose simple and easy-to-match bags. And for important events, you should plan ahead to what you\'ll wear that day to choose. </p>\r\n<p> <strong> Straps and strap: </strong> This is what girls often care about when picking a bag. Most Vascara bags come with a strap, which helps you customize it to your liking: it should be worn on the shoulder or laptop. If you\'re less mobile and only use small bags to hold small items, then compact or no-straps bags are ideal choices. In case you are walking a lot, a strap or handle is very necessary. </p>\r\n<p> <strong> Size: </strong> what you take with you will determine the size of the bag most clearly. If you only have basic items such as phones, wallets, keys ... then small bags will suffice, but in case you have too many accessories such as cosmetics, glasses, perfume ... the medium or large size will suit you better. Also, if you want to store a lot of items, choose bags with many compartments for easier sorting. However, carry just enough to not be heavy-handed or confused when looking for what you need among the loads. One more note for girls riding a motorbike with a large trunk, it would be great if the bag can fit in the trunk but do not try to damage the bag form because of cramming. </p>\r\n<p> <strong> Colors: </strong> Ideally the bag is black or white because it is easy to match with the outfit, followed by neutral colors like brown, gray, beige ... if you like the Other colors look back at your current closet and choose the color you usually wear the most or are the easiest to match. </p>\r\n<p> <strong> Trends: </strong> Constantly updating new seasonal designs will help girls not only be beautiful but also be fashionable. The weather will also determine the color and texture of the bag you choose, for example, in the rainy season, you should choose a dark bag and restrict water, dust ... </p>\r\n<p> The last important thing is that you should choose what you like because the feeling of happiness when holding a bag you love is hard to describe in words. Hopefully these 5 small tips above will help you easily find the ideal bag for yourself. </p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/blog4.jpg\" alt=\"\" width=\"250\" height=\"167\" /></p>', '2020-07-14 21:29:06', '2020-07-20 18:47:14'),
(9, 'tingiay.jpg', 'HOW TO CHOOSE THE RUNNING SHOES?', '<h2 class = \"ten\"> <span style = \"color: # e03e2d;\"> How do you choose running shoes? </span> </h2>\r\n<p> <strong> <span style = \"color: # 000000;\"> With a modern lifestyle, people care more about their health and appearance. That\'s also lalf when a lot of people go to the gym, dance to the rhythm, ... But besides that, a large number of people choose the traditional running method to enhance their health and give themselves a desired figure. to wish. So for us to be comfortable running, the shoes are an important factor that cannot be ignored. So how do we need to choose our shoes? </span> </strong> </p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/thethao.jpg\" alt=\"\" width=\"250\" height=\"167\" /></p>\r\n<p> A pair of suitable running shoes are some shoes that cover your heels but still within 1 to 1.3cm of your toe to toe area. However, you need to make sure that the back of your foot is completely comfortable, not too tight or too loose. </p>\r\n<h2> Expensive shoes are not necessarily good </h2>\r\n<p> When deciding to speculate on a running shoe, the cheapest should choose to buy branded shoes of international safety standards to ensure safety quality. In addition, it is advisable to look carefully at the brand, Review the notice and suggest to be measured and checked the body shape at the store so that the staff can advise you to choose the right shoes. </p>\r\n<p> sneakers are usually priced worthy of their quality. Besides, you don\'t have to buy the most expensive shoes to make a lot of profit when practicing. If your income is not too much, you can still buy a suitable pair of shoes in the mid-range. </p>\r\n<h2> Know what your legs look like </h2>\r\n<p> not everyone has the same leg physique, the wrong running shoes with foot physique easily cause knee and hip pain, ankle strain after exercise. </p>\r\n<p> For people who are inclined to tilt their feet during the run, you\'ll need a pair of training shoes that help stabilize and control the transfer. The movement control shoe has been designed to embellish dangerous foot-slipping errors. They help control the security of the inside of the shoes from being crooked and slow down the tilting stage .. </p>\r\n<p> Conversely, for owners who tend to tilt their feet to the outside at the time of running, the vibration at movement will be less dispersed into the heel than the person inclined their feet in. therefore, some shoes with shock-absorbing padding are the brightest choice. </p>\r\n<p> The majority of Vietnamese wear flat feet, so if you are the type with flat feet, choose a few stable running shoes. This is the most suitable shoe category for runners with mild or moderate inclination. At the lowest level, you should go to the big and prestigious international shoe stores, ask the staff to check the physique of your feet to choose the right type of shoes. when trying on shoes, assuming the heel does not slip down during movement and - the tip of the toe can freely move in the shoe. It is the perfect shoe for you. </p>\r\n<h2> shoe selection procedure </h2>\r\n<p> After you have determined the shape of your legs and the brand of love and order - the following steps will help you review and select the authentic when you buy shoes at the store. </p>\r\n<p> <strong> 1 </strong> Choose shoes with no ankle support, as they are cheap for everyday use. Basketball shoes or too high heels will weaken your ankles. </p>\r\n<p> <strong> 2 </strong> Shoes with a sole are not too narrow. The small sole of the shoe will make the contact surface property smaller, causing discomfort and poor balance and friction </p>\r\n<p> <strong> 3 </strong> Choose a style of shoe with a pretty design or a nice, breathable fabric that doesn\'t absorb or hold moisture </p>\r\n<p> <strong> 4 </strong> Bend the uppers of the shoes. for a long time the shoe may be flexible, the rest should be firm and difficult to bend. </p>\r\n<p> <strong> 5 </strong> Grasp the toe and heels, and try twisting the shoes. Low shoes will not be distorted and deformed. </p>\r\n<p> <strong> 6 </strong> Click on the bottom of the shoe, to check its strength. </p>\r\n<p> <strong> 7 </strong> Review the seams of your shoes, along the outer and inner edges </p>\r\n<p> <strong> 8 </strong> Go try it. Do not be too fond of a variety of models that force yourself to wear a pair of tight shoes. A lot of stuff will stretch after a period of use but remember that you will have to have some tight shoes for a long time. </p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/giay.jpg\" alt=\"\" width=\"250\" height=\"150\" /></p>\r\n<p> an affordable pair of shoes will not only keep you entertained, it will also help you practice better. To make sure you will buy an approved pair of running shoes, buy them directly from quality stores. For example, if you order shoes online, you need to carefully weigh your physique and the reliability of the wholesale women\'s sports shoes shop. Note, change running shoes periodically - once a month. </p>', '2020-07-14 21:30:25', '2020-07-20 18:46:10'),
(10, 'blog1.jpg', 'HOW TO CHOOSE VEST MALE SUIT', '<h2 class = \"name\"> <span style = \"color: # e03e2d;\"> How to choose a suitable vest for men </span> </h2>\r\n<p style=\"text-align: center;\"><span style=\"color: #e03e2d;\"><span style=\"color: #000000;\"><img src=\"http://localhost/MARCHO/uploads/tinvet.jpg\" alt=\"\" width=\"250\" height=\"181\" /></span></span></p>\r\n<p> <strong> Criteria for choosing a cute men\'s vest </strong> </p>\r\n<p> has a polite style men\'s vest, pants must be long enough to reach the pattern finger when closing. Possessing youthful suits, T-shirts for young people, the length can be shorter from the width of the shirt to cherish just around the chest, the width of the chests, the chest. while ensuring the quality of hand movement comfort when wearing. </p>\r\n<p> <strong> <a title=\" Beautiful couple t-shirts\" href=\"https://thoitrangngaynay.com/ao-thun-cap-doi-dep\"> Beautiful couple t-shirts </a> </ strong> <strong> </strong> Are you tall or short? big or small? Be calm and be sure to wear the appropriate vest with you. Let\'s see how to choose the vest for each figure to be synthesized in the space! </p>\r\n<p> <strong> How to choose a men\'s vest for tall and thin people </strong> </p>\r\n<p> - Do not wear vertical stripes because you will look dry. Large horizontal stripes in the chest area can make your shoulders wider. </p>\r\n<p> -Avoid monochrome. If you only wear a one-color men\'s suit from head to toe, especially black, you will get thinner. Therefore, it is advisable to interrupt the look by wearing several different colors. </p>\r\n<p> - Choose a crooked men\'s shirt. Loose, uncluttered shirts will make you look like a mast. However, a very tight-fitting men\'s suit will also press your torso on your mound. </p>\r\n<p> -Avoid pointed toe shoes that will make you look unbalanced. To balance, should wear cheap square toe sneakers, or facets. For example, playing gyms, square toe shoes are relatively hard to find, you should limit the sample to too round only </p>\r\n<p> The secret to choosing a light-colored men\'s vest: white, cream, light blue, light gray suits will help you look less skinny. </p>\r\n<p> Men\'s suits for work: do not choose colors that are too outstanding or too cool for men to wear, should choose dark colors to create seriousness. Wearing this men\'s vest, you should choose fabric containing polyester or natural fabrics with less wrinkle, easy to wash and preserve. <a title=\"Couples and Couples\" href=\"https://thoitrangngaynay.com/ao-khoac-cap-doi-nam-nu\"> <strong> men and women jackets </strong> < / a> </p>\r\n<p> <strong> secret to choosing a men\'s vest for fat adults </strong> </p>\r\n<p> - Stay away from men\'s suits with horizontal stripes, especially in the belly area. What you can wear proudly is a shirt and a shirt with vertical stripes. Vertical stripes will pull your eyes downwards, making your friend look longer and taperier. </p>\r\n<p> 8 methods to choose men\'s suits with small striped men\'s suits are very suitable for you, especially with a black shirt. Small stripes are also great when combining black jeans or black pants. For casual wear, you should buy lightweight, lightweight material with a slender line. </p>\r\n<p> Minimize the double split shirts, especially for pants, as the line will focus attention on your butt. It is cheaper to be able to consume the saw for 1 piece or not. </p>\r\n<p> </p>\r\n<p> <strong> 8 Square toe shoes should be selected. </strong> Pointed toe shoes are suitable only when you are high and the sleeve can cover most of the shoes. If you are small but your shoes are too big or long, you will look a bit like a clown. Should increase the height of shoes and wear long sleeves covering heels. </p>\r\n<p> <strong> -can wear a tie, necklace, or hat to make the face the focus of attention </strong> instead of height. - wearing small people, the large textures on the clothes will engulf them. So choose small motifs, white or black. - Try to use compatible texture with your physique to make the legs appear longer. </p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/blog1.jpg\" alt=\"\" width=\"250\" height=\"167\" /></p>\r\n<p> <strong> 8 Choose a slim pants type. </strong> A large neck type will make your body disproportionate. For example, if you are too short, you should look for a small and short tie. Short body: for gentlemen of modest height, light-colored men\'s suits are the No. 1 choice. restrictive and good. Should choose the simpler men\'s vest, the cheaper, minimize the intricate texture vest. </p>\r\n<p> Vest is a elegant outfit for gentlemen, not only wearing a vest when partying, conferences or having an outstanding event that you can drop off the coordination of toys in a style of dirt cake . </p>\r\n<p> As long as you know the secret to choosing a standard men\'s suit according to the body like above, you can confidently drop your outfit. </p>', '2020-07-14 21:32:07', '2020-07-20 18:44:42'),
(11, 'blog2.jpg', 'WAY FOR MEN TO BE STRIKED', '<h2 class = \"ten\"> <span style = \"color: # e03e2d;\"> HOW TO COLLECT A MEN TO A HAIR ATTRACTOR </span> </h2>\r\n<p> <span style = \"color: # 000000;\"> BEAUTIFUL DRESS UP THE BALANCE FOR GIRLS BROWNED </span> </p>\r\n<p> Just pocket a few methods below, your stork body will be significantly improved and developed into a more balanced, fuller in the eyes of the opposite person. </p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/omgay.jpg\" alt=\"\" width=\"250\" height=\"188\" /></p>\r\n<figure class=\"image\">\r\n<figcaption> HOW TO COLLECT A MEN TO A STRETCHED MAN </figcaption>\r\n</figure>\r\n<p> with a slender physique, in the eyes of the eyes, everyone will think that you are easy to choose and wear, most items are very stylish. But the reality is not so. The slim body can make you feel proud when wearing just a lot of fashionable clothes, but the downside is taking you sexy, seductive - which is the leading factor in creating the attraction of possessing the opposite person. And especially, just choosing the wrong costume, the disadvantages of a skinny physique will appear clearly. </p>\r\n<p> </p>\r\n<p> The simplest example for an unrelated outfit that owns a skinny person is a maxi skirt, the skirt is inherently slender, making the body seem slimmer even more skinny. In the picture, Ha Advanced chose a two-wire maxi dress that clearly exposed her weak and thin shoulders. </p>\r\n<p> Skinny pants are also a limited item, because the specific design is cherished to reveal Ha\'s spindly legs. </p>\r\n<p> In the picture, Thanh Ha\'s thin and curved legs were exposed at a time when the pretty lady wore dark skinny pants and high heels. the black-and-white, oversized shirt pulls the shirt to reveal the shoulders, neck, arms and skinny legs. </p>\r\n<p> In front of the hearts of skinny girls who want to improve their physique through costumes, the shop offers you a couple of cute ways to respect the skinny. You will have the right and safest choices to both solve disadvantages and create a more balanced feeling for your physique. </p>\r\n<p> Don\'t wear clothes that are too cherished or too wide </p>\r\n<p> One of the key tips that skinny girls should pocket is behind schedule is paying attention to the width / tightness of the outfit. If you know how to choose wisely, whether light or dark, thin people like you can still conquer. Wear this dress secret, like if you want to get fat, don\'t rely on costumes that are too popular and you will be engulfed in slow deployment. Not only that, the lines of the dress are not really suitable for you, if you do not want to be skinny, choose the clothes that are not too chiseled or too loose. . </p>\r\n<p> Should wear eye-catching layering </p>\r\n<p> If you are a round girl then this dress up secret is not for you. while It carries a girl with the body of a stork, thin but this method of coordination gives you a fat appearance to realize. Interlocking layers of clothing is a secret to help you cheat your weight to hide your weak body. The way to mix women\'s clothes with eye-catching layer is very simple: a type of feminine skirt with a thin cardigan, or wearing a strong T-shirt, a shirt is also a way for you to increase your flesh. there. </p>\r\n<p> Shirts with elaborate / stylized details </p>\r\n<p> The next technique lies in the intricate needs on the body of the shirt. If the round girl often limited to these shirts, then it would become the end of the majority of her ladies. Therefore, the shirt has a moderate way of framing, thin sweater with a few intricate instructions that will help you a lot. </p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/MARCHO/uploads/omgay1.jpg\" alt=\"\" width=\"250\" height=\"192\" /></p>\r\n<figure class = \"image\">\r\n<figcaption> HOW TO COLLECT A MEN TO A FOOTBALL MAN </figcaption>\r\n</figure>\r\n<p> Wide jeans </p>\r\n<p> Like skirts, the pants assigned to super-thin girls are also stopped at popular, comfortable pants such as baggy, boyfriend jeans, pants with long sleeves. Because only these outfits do not expose limp legs and enhance the appearance of fluttering for the wearer. </p>\r\n<p> Skirts / skirts are not too long </p>\r\n<p> Any dress that is too long and wide is detrimental to your physique, especially the maxi. You are thin so you look very tall and slender, so maxi or long skirt types will make the body even more slim. Instead of stopping construction Here choose but looks smooth or light. The length also do not touch the ground as maxi, just a pillow or a pillow is reasonable. You also should not wear too short because it will put on your thin bones legs. </p>\r\n<p> Horizontal lines, soft patterns </p>\r\n<p> In terms of texture, to fool the opposite with a fuller body, you should choose the shirts with large horizontal patterns in bright colors like white or pastel. In addition, the simple motifs such as flowers, polka dots or any pattern, texture with soft, random lines ... will bring a fuller feeling to the body. </ p>\r\n<p> This slim body is always the desire of popular girls. But if you have a thin, coincidental chance, you must have felt uncomfortable many times and wondered which method to develop more fully. </p>\r\n<p> Here are 8 ways to coordinate for thin people. Suggestions for you to be able to \"create more\" curved streets for your appearance or simply to \"hide\" away the fragile body: </p>\r\n<p> Skinny jeans, an indispensable personality item of any person, but can make skinny girls grow even more \"spindly\". Therefore, flared pants and culottes will be the secret to coordinate clothes for quality skinny people, making a good companion to help your body become fuller. Not to mention, choosing pants with a high waistline can help you create more waistline curves </p>\r\n<p> A-line dresses and skirts are able to create a waist effect and cover small hips of girls with thin and straight bodies </p>\r\n<p> Skirts with minimalistic appearance and many horizontal directions are the secret to owning things that can help you look absolutely elegant and sophisticated and cover your body\'s point. </p>\r\n<p> Try a combination of layer wear trends that discourage you from wearing a cardigan because the cherished body material can make your body even thinner. A handy tip to distract your vision and mask your slim body. The costumes with larger print patterns are also highly effective. In addition, the girls should absolutely minimize the vertical stripes that make you more skinny. The advantage of the slender girls is the universal ant waist that people desire. So, why not hesitate to take advantage of this point or picture? The smartest way to coordinate for skinny people is to mix your croptop plus high-waist skirt or jeans for a look that attracts the eyes! Appearance but also creates more attractive curves for women. This is also a way of coordination that many women may not know. so, \"apply\" now. </p>\r\n<p> Belts! Regardless of whether the large or small version helps the secret to perfect coordination for thin people. Harmonize them with your fluttering, oversize skirts or dresses to add more appeal to your waistline and cover your small hips. </p>\r\n<p> </p>', '2020-07-14 21:34:35', '2020-07-20 18:43:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cate_id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Women\'s shirts', 'womens-shirts', '<p>Áo đẹp</p>', 1, '2020-07-14 19:13:14', '2020-07-20 19:10:37'),
(4, 'Men\'s shirts', 'mens-shirts', '<p>Áo đẹp</p>', 1, '2020-07-14 19:14:22', '2020-07-20 19:10:57'),
(5, 'Men\'s winter jacket', 'mens-winter-jacket', '<p>Áo đẹp</p>', 1, '2020-07-14 19:14:49', '2020-07-20 19:12:30'),
(6, 'Women\'s winter coat', 'womens-winter-coat', '<p>Áo đẹp</p>\r\n<p> </p>', 1, '2020-07-14 19:15:04', '2020-07-20 19:12:52'),
(7, 'Jeans for women', 'jeans-for-women', '<p>Quần đẹp</p>', 1, '2020-07-14 19:15:23', '2020-07-20 19:13:12'),
(8, 'Man\'s jeans', 'mans-jeans', '<p>Quần đẹp</p>', 1, '2020-07-14 19:15:42', '2020-07-20 19:13:39'),
(9, 'Fashion accessories', 'fashion-accessories', '<p>Tổng hợp những phụ kiện nổi bật </p>', 1, '2020-07-14 19:16:20', '2020-07-20 19:14:06'),
(10, 'Dress', 'dress', '<p>Váy đẹp</p>', 1, '2020-07-14 19:18:09', '2020-07-20 19:14:30'),
(11, 'T-shirt', 't-shirt', '<p>Áo đẹp</p>', 1, '2020-07-14 19:45:23', '2020-07-20 19:14:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `colors`
--

CREATE TABLE `colors` (
  `color_id` int(10) UNSIGNED NOT NULL,
  `nameColor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `colors`
--

INSERT INTO `colors` (`color_id`, `nameColor`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đen', '#010901', '2020-07-14 19:22:56', '2020-08-05 05:03:24'),
(3, 'Đỏ', '#df1111', '2020-07-14 19:23:50', '2020-08-05 05:03:15'),
(4, 'Trắng', '#f5f0f0', '2020-07-14 19:24:06', '2020-08-05 05:03:36'),
(5, 'Vàng', '#c3ef25', '2020-07-14 19:24:14', '2020-08-05 05:04:05'),
(6, 'Xanh', '#1ae042', '2020-07-14 19:24:23', '2020-08-05 05:04:15'),
(7, 'Xanh biển', '#2e14f0', '2020-07-14 19:24:48', '2020-08-05 05:04:32'),
(8, 'Xanh lá', '#22c516', '2020-07-14 19:25:00', '2020-08-05 05:04:45'),
(9, 'Tím', '#d30dcc', '2020-07-14 19:25:16', '2020-08-05 05:04:56'),
(10, 'Hồng', '#e70da2', '2020-07-14 19:25:32', '2020-08-05 05:05:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_code` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `remember_token`, `code`, `time_code`, `created_at`, `updated_at`) VALUES
(8, 'Nguyễn Ngọc Linh', 'ngoclinh123@gmail.com', NULL, '$2y$10$l9I.4AxuobqD5xuBq1zice0PtDr4jnNFd83U15k1wEaCu5.9Sjc7K', '0134568934', '238 Hoàng Quốc Việt, Cầu Giấy, Hà Nội', 'dYtu4zHW1hMQI3hwTFbXq0I0CyebI0D21O3v186eJZb4J9QlFi4o83KxH0oT', NULL, NULL, '2020-07-22 00:48:53', '2020-07-22 00:48:53'),
(9, 'Nguyễn Thị Hương', 'huonghuong123@gmail.com', NULL, '$2y$10$fNGTLNlB2SkPhFCkiJ8K2ulL9ZZQn7i.nzuBEDsaUqw/Evi5WfRii', '0335335549', 'Ngõ 4, Phạm Văn Đồng, Cầu Giấy, Hà Nội', 'gXBwv37oRhvPp7p4ImxehS1nRhYtZBKQ0eyj6Qq80V0GWJ7VKAzKKoZzZQ71', NULL, NULL, '2020-07-22 00:50:23', '2020-07-22 00:50:23'),
(10, 'Lê Huyền Trang', 'huyentrang123@gmail.com', NULL, '$2y$10$47QUSQHznH6CGfKth3iL0eh4CUqaM6F8wUd.bjccdvDApFbwBw4ye', '0568972357', '222 Hoàng Quốc Việt, Cầu Giấy, Hà Nội', 'a9q8HY1iwIDKEIkJi6OsE1G4yOUKiAB8uGaQyDhBE49FbLe0pOfxJu4FZTo1', '$2y$10$DpyT0GDvHOZjCSth9687Y.MKA8Wq.xpvdKugZXTajyvwlgfwjqvhi', '2020-08-10 20:26:33', '2020-07-22 00:51:33', '2020-08-10 20:26:33'),
(11, 'Nhật Minh Anh', 'wendtravel68@gmail.com', NULL, '$2y$10$J7UalP0GDqvcPQ86FyumoeDBlDFLZzkd0DduM464zkGBxFJ01DmBO', '0936752489', 'Ngõ 1, Phạm Văn Đồng, Cầu Giấy, Hà Nội', NULL, NULL, NULL, '2020-07-22 00:53:22', '2020-07-22 00:53:22'),
(17, 'Hạnh Hạnh', 'laihanhbb2001@gmail.com', NULL, '$2y$10$mw8/SABzhgqgenZwzubLn.PDFeM2BVC/ZuWjqDKxgnTBkju6mazU6', '0123679832', 'Phạm Văn Đồng , Cầu giấy, Hà Nội', NULL, '$2y$10$KM2DonvaW4fwbz13KVE5eumi6J0rrwXae.hhOD6KX9wV00N5XWnwu', '2020-08-10 20:30:46', '2020-08-10 20:30:28', '2020-08-10 20:31:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `product_id`, `images`, `created_at`, `updated_at`) VALUES
(1, 1, 'ao4.jpg', '2020-07-14 19:33:54', '2020-07-14 19:33:54'),
(2, 1, 'ao4-1.jpg', '2020-07-14 19:33:54', '2020-07-14 19:33:54'),
(3, 1, 'ao3.jpg', '2020-07-14 19:33:54', '2020-07-14 19:33:54'),
(4, 2, 'ao6.jpg', '2020-07-14 19:35:59', '2020-07-14 19:35:59'),
(5, 2, 'ao3.jpg', '2020-07-14 19:35:59', '2020-07-14 19:35:59'),
(6, 2, 'ao2.jpg', '2020-07-14 19:35:59', '2020-07-14 19:35:59'),
(7, 3, 'somicotru.jpg', '2020-07-14 19:37:38', '2020-07-14 19:37:38'),
(8, 3, 'aosomidinhngoc.jpg', '2020-07-14 19:37:38', '2020-07-14 19:37:38'),
(9, 4, 'somichambi.jpg', '2020-07-14 19:39:40', '2020-07-14 19:39:40'),
(10, 4, 'ao7.jpg', '2020-07-14 19:39:40', '2020-07-14 19:39:40'),
(11, 4, 'ao2.jpg', '2020-07-14 19:39:40', '2020-07-14 19:39:40'),
(12, 5, 'aonam3.jpg', '2020-07-14 19:41:24', '2020-07-14 19:41:24'),
(13, 5, 'aonam3-2.jpg', '2020-07-14 19:41:24', '2020-07-14 19:41:24'),
(14, 5, 'aonam3-1.jpg', '2020-07-14 19:41:24', '2020-07-14 19:41:24'),
(18, 7, 'aophong1.jpg', '2020-07-14 19:48:34', '2020-07-14 19:48:34'),
(19, 7, 'aophong1.2.jpg', '2020-07-14 19:48:34', '2020-07-14 19:48:34'),
(20, 7, 'aophong1-1.jpg', '2020-07-14 19:48:34', '2020-07-14 19:48:34'),
(21, 8, 'somicotru.jpg', '2020-07-14 19:52:37', '2020-07-14 19:52:37'),
(22, 8, 'ao9.jpg', '2020-07-14 19:52:37', '2020-07-14 19:52:37'),
(23, 8, 'ao1.jpg', '2020-07-14 19:52:37', '2020-07-14 19:52:37'),
(24, 9, 'aonam1.jpg', '2020-07-14 19:54:23', '2020-07-14 19:54:23'),
(25, 9, 'aonam1-3.jpg', '2020-07-14 19:54:23', '2020-07-14 19:54:23'),
(26, 9, 'aonam1-2.jpg', '2020-07-14 19:54:23', '2020-07-14 19:54:23'),
(27, 9, 'aonam1-1.jpg', '2020-07-14 19:54:23', '2020-07-14 19:54:23'),
(28, 10, 'aonam2.jpg', '2020-07-14 19:57:48', '2020-07-14 19:57:48'),
(29, 10, 'aonam2-3.jpg', '2020-07-14 19:57:48', '2020-07-14 19:57:48'),
(30, 10, 'aonam2-1.jpg', '2020-07-14 19:57:48', '2020-07-14 19:57:48'),
(31, 11, 'kecarro1.jpg', '2020-07-14 20:00:06', '2020-07-14 20:00:06'),
(32, 11, 'aocaro.jpg', '2020-07-14 20:00:06', '2020-07-14 20:00:06'),
(33, 11, 'ao8.jpg', '2020-07-14 20:00:06', '2020-07-14 20:00:06'),
(34, 12, 'sominu.jpg', '2020-07-14 20:02:26', '2020-07-14 20:02:26'),
(35, 12, 'ao9.jpg', '2020-07-14 20:02:26', '2020-07-14 20:02:26'),
(36, 13, 'aophongnam.jpg', '2020-07-14 20:04:34', '2020-07-14 20:04:34'),
(37, 13, 'aophong2.jpg', '2020-07-14 20:04:34', '2020-07-14 20:04:34'),
(38, 13, 'aophong2-1.jpg', '2020-07-14 20:04:34', '2020-07-14 20:04:34'),
(39, 14, 'aophong3.jpg', '2020-07-14 20:06:04', '2020-07-14 20:06:04'),
(40, 14, 'aophong3.3.jpg', '2020-07-14 20:06:04', '2020-07-14 20:06:04'),
(41, 14, 'aophong3.2.jpg', '2020-07-14 20:06:04', '2020-07-14 20:06:04'),
(42, 14, 'aophong3.1.jpg', '2020-07-14 20:06:04', '2020-07-14 20:06:04'),
(43, 15, 'aophong4.jpg', '2020-07-14 20:08:30', '2020-07-14 20:08:30'),
(44, 15, 'aophong4-2.jpg', '2020-07-14 20:08:30', '2020-07-14 20:08:30'),
(45, 15, 'aophong4-1.jpg', '2020-07-14 20:08:30', '2020-07-14 20:08:30'),
(46, 16, 'vay3.jpg', '2020-07-14 20:09:48', '2020-07-14 20:09:48'),
(47, 16, 'vay2.jpg', '2020-07-14 20:09:48', '2020-07-14 20:09:48'),
(48, 16, 'vay1.jpg', '2020-07-14 20:09:48', '2020-07-14 20:09:48'),
(49, 17, 'vayxoe1.jpg', '2020-07-14 20:11:38', '2020-07-14 20:11:38'),
(50, 17, 'vayxoe.jpg', '2020-07-14 20:11:38', '2020-07-14 20:11:38'),
(51, 17, 'vay.jpg', '2020-07-14 20:11:38', '2020-07-14 20:11:38'),
(52, 18, 'damom1.jpg', '2020-07-14 20:12:59', '2020-07-14 20:12:59'),
(53, 18, 'damom1-1.jpg', '2020-07-14 20:12:59', '2020-07-14 20:12:59'),
(54, 18, 'damom.jpg', '2020-07-14 20:12:59', '2020-07-14 20:12:59'),
(55, 19, 'ao3%20(1).jpg', '2020-07-14 20:14:51', '2020-07-14 20:14:51'),
(56, 19, 'ao2%20(1).jpg', '2020-07-14 20:14:51', '2020-07-14 20:14:51'),
(57, 19, 'ao1%20(1).jpg', '2020-07-14 20:14:51', '2020-07-14 20:14:51'),
(58, 20, 'aoda3.jpg', '2020-07-14 20:16:22', '2020-07-14 20:16:22'),
(59, 20, 'aoda2.jpg', '2020-07-14 20:16:22', '2020-07-14 20:16:22'),
(60, 20, 'aoda1%20(1).jpg', '2020-07-14 20:16:22', '2020-07-14 20:16:22'),
(61, 21, 'aoda1.jpg', '2020-07-14 20:17:59', '2020-07-14 20:17:59'),
(62, 21, 'aoda1-2.jpg', '2020-07-14 20:17:59', '2020-07-14 20:17:59'),
(63, 21, 'aoda1-1.jpg', '2020-07-14 20:17:59', '2020-07-14 20:17:59'),
(64, 22, 'aolen1.jpg', '2020-07-14 20:19:53', '2020-07-14 20:19:53'),
(65, 22, 'aolen1-2.jpg', '2020-07-14 20:19:53', '2020-07-14 20:19:53'),
(66, 22, 'aolen1-1.jpg', '2020-07-14 20:19:53', '2020-07-14 20:19:53'),
(67, 23, 'aogio3.jpg', '2020-07-14 20:21:26', '2020-07-14 20:21:26'),
(68, 23, 'aogio2.jpg', '2020-07-14 20:21:26', '2020-07-14 20:21:26'),
(69, 23, 'aogio1.jpg', '2020-07-14 20:21:26', '2020-07-14 20:21:26'),
(70, 24, 'aobeo3.jpg', '2020-07-14 20:22:49', '2020-07-14 20:22:49'),
(71, 24, 'aobeo2.jpg', '2020-07-14 20:22:49', '2020-07-14 20:22:49'),
(72, 24, 'aobeo1.jpg', '2020-07-14 20:22:49', '2020-07-14 20:22:49'),
(73, 25, 'quannu2.jpg', '2020-07-14 20:24:18', '2020-07-14 20:24:18'),
(74, 25, 'quannu1.jpg', '2020-07-14 20:24:18', '2020-07-14 20:24:18'),
(75, 25, 'quanbonu.jpg', '2020-07-14 20:24:18', '2020-07-14 20:24:18'),
(76, 26, 'quannam2.jpg', '2020-07-14 20:25:14', '2020-07-14 20:25:14'),
(77, 26, 'quannam1.jpg', '2020-07-14 20:25:14', '2020-07-14 20:25:14'),
(78, 26, 'quan1.jpg', '2020-07-14 20:25:14', '2020-07-14 20:25:14'),
(79, 27, 'giay2.jpg', '2020-07-14 20:27:03', '2020-07-14 20:27:03'),
(80, 27, 'giay1.jpg', '2020-07-14 20:27:03', '2020-07-14 20:27:03'),
(81, 27, 'giay.jpg', '2020-07-14 20:27:03', '2020-07-14 20:27:03'),
(82, 28, 'giaytr3.jpg', '2020-07-14 20:28:04', '2020-07-14 20:28:04'),
(83, 28, 'giaytr2.jpg', '2020-07-14 20:28:04', '2020-07-14 20:28:04'),
(84, 28, 'giaytr1.jpg', '2020-07-14 20:28:04', '2020-07-14 20:28:04'),
(85, 29, 'vongtay3.jpg', '2020-07-14 20:28:59', '2020-07-14 20:28:59'),
(86, 29, 'vongtay2.jpg', '2020-07-14 20:28:59', '2020-07-14 20:28:59'),
(87, 29, 'vongtay1.png', '2020-07-14 20:28:59', '2020-07-14 20:28:59'),
(88, 30, 'chanvay1.jpg', '2020-07-14 20:30:51', '2020-07-14 20:30:51'),
(89, 30, 'chanvay.jpg', '2020-07-14 20:30:51', '2020-07-14 20:30:51'),
(90, 31, 'mu2.jpg', '2020-07-14 20:32:07', '2020-07-14 20:32:07'),
(91, 31, 'mu1.jpg', '2020-07-14 20:32:07', '2020-07-14 20:32:07'),
(92, 31, 'mu.jpg', '2020-07-14 20:32:07', '2020-07-14 20:32:07'),
(93, 32, 'tui2.jpg', '2020-07-14 20:33:52', '2020-07-14 20:33:52'),
(94, 32, 'tui1.jpg', '2020-07-14 20:33:52', '2020-07-14 20:33:52'),
(95, 32, 'tui.jpg', '2020-07-14 20:33:52', '2020-07-14 20:33:52'),
(96, 33, 'dongho2.jpg', '2020-07-14 20:35:09', '2020-07-14 20:35:09'),
(97, 33, 'dongho1.jpg', '2020-07-14 20:35:09', '2020-07-14 20:35:09'),
(98, 33, 'dongho.jpg', '2020-07-14 20:35:09', '2020-07-14 20:35:09'),
(99, 34, 'kinh2.jpg', '2020-07-14 20:36:03', '2020-07-14 20:36:03'),
(100, 34, 'kinh1.jpg', '2020-07-14 20:36:03', '2020-07-14 20:36:03'),
(101, 34, 'kinh.jpg', '2020-07-14 20:36:03', '2020-07-14 20:36:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_06_23_052323_create_categories_table', 1),
(3, '2020_06_23_070837_create_blogs_table', 1),
(4, '2020_06_23_071208_create_banners_table', 1),
(5, '2020_06_23_072003_create_stars_table', 1),
(6, '2020_06_23_072422_create_wishlists_table', 1),
(7, '2020_06_23_072638_create_order_dtails_table', 1),
(8, '2020_06_23_073001_create_orders_table', 1),
(9, '2020_06_24_042023_create_customers_table', 1),
(10, '2020_06_25_032629_create_colors_table', 1),
(11, '2020_06_25_034009_create_sizes_table', 1),
(12, '2020_06_25_082308_create_products_table', 1),
(13, '2020_06_25_082624_create_images_table', 1),
(14, '2020_06_25_082859_create_product_attrs_table', 1),
(15, '2020_07_07_130636_create_roles_table', 1),
(16, '2020_07_07_131107_create_user_roles_table', 1),
(17, '2020_07_13_094251_create_payments_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `total_amount` int(11) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `total_amount`, `customer_id`, `payment`, `note`, `status`, `created_at`, `updated_at`) VALUES
(52, 210, 10, 'Payment on delivery', 'Giao hàng sớm giúp mình!!!', '0', '2020-08-09 22:14:30', '2020-08-09 22:14:30'),
(55, 300, 9, 'Payment via card', 'Không có', '0', '2020-08-09 22:30:44', '2020-08-09 22:30:44'),
(56, 320, 8, 'Payment on delivery', 'Giao  hàng sớm giúp mình!!!', '0', '2020-08-10 00:22:07', '2020-08-10 00:22:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_dtails`
--

CREATE TABLE `order_dtails` (
  `orderDetail_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_dtails`
--

INSERT INTO `order_dtails` (`orderDetail_id`, `order_id`, `product_id`, `color`, `size`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(57, 52, 3, '3', '1', 2, 90, '2020-08-09 22:14:30', '2020-08-09 22:14:30'),
(59, 55, 7, '1', '5', 3, 90, '2020-08-09 22:30:44', '2020-08-09 22:30:44'),
(60, 56, 3, '4', '4', 1, 90, '2020-08-10 00:22:07', '2020-08-10 00:22:07'),
(61, 56, 5, '4', '1', 2, 100, '2020-08-10 00:22:07', '2020-08-10 00:22:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Payment on delivery', 'The store will send the goods to your address, you look at the goods and then pay for the delivery staff', '2020-07-15 00:04:47', '2020-07-15 00:04:47'),
(2, 'Payment via card', 'Transfer funds to the following account:\r\n  -Number of accounts: 123 456 789\r\n  -Account holder: Nguyen A\r\n  - Viettinbank, Hanoi branch\r\n', '2020-07-15 00:08:49', '2020-07-15 00:08:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `sale_price` double(8,2) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `name`, `cate_id`, `price`, `sale_price`, `images`, `quantity`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lace neckline shirt', 3, 200.00, 150.00, 'ao4.jpg', 3, 'Nice clothes, good fabric suitable for office fashion', 1, '2020-07-14 19:33:54', '2020-07-14 19:33:54'),
(2, 'White shirt with lace mixed', 3, 200.00, 150.00, 'ao6.jpg', 2, 'Nice clothes fabric suitable for office fashion', 1, '2020-07-14 19:35:59', '2020-07-14 19:35:59'),
(3, 'Pearl-attached shirt', 3, 100.00, 90.00, 'aosomidinhngoc.jpg', 2, 'Nice clothes, good fabric and good clothes', 1, '2020-07-14 19:37:38', '2020-07-14 19:37:38'),
(4, 'Polka dots shirt', 3, 200.00, 90.00, 'somichambi.jpg', 3, 'Nice clothes, good fabric, suitable for all ages ', 1, '2020-07-14 19:39:40', '2020-07-14 19:39:40'),
(5, 'White shirt', 4, 150.00, 100.00, 'aonam3-1.jpg', 3, 'Beautiful clothes are usually worn in combination with vet ', 1, '2020-07-14 19:41:24', '2020-07-14 19:41:24'),
(7, 'Men\'s round neck T-shirt', 11, 100.00, 90.00, 'aophong1.jpg', 3, 'Elastic 4-dimensional cotton', 1, '2020-07-14 19:48:34', '2020-07-14 19:48:34'),
(8, 'Neck shirt', 3, 200.00, 170.00, 'somicotru.jpg', 2, 'Beautiful clothes with good fabrics suitable for office fashion', 1, '2020-07-14 19:52:37', '2020-07-14 19:52:37'),
(9, 'Short-sleeved shirts', 4, 150.00, 130.00, 'aonam1-1.jpg', 4, 'Beautiful coat of fine material, unique colors', 1, '2020-07-14 19:54:23', '2020-07-14 19:54:23'),
(10, 'Long sleeve shirts', 4, 200.00, 170.00, 'aonam2-3.jpg', 3, 'Nice clothes with good fabric to absorb sweat, not wrinkle ', 1, '2020-07-14 19:57:48', '2020-07-14 19:57:48'),
(11, 'Checkered shirt', 3, 100.00, 90.00, 'kecarro1.jpg', 3, ' Nice clothes, good fabric ', 1, '2020-07-14 20:00:06', '2020-07-14 20:00:06'),
(12, 'Smooth shirt', 3, 150.00, 130.00, 'ao9.jpg', 2, 'Beautiful clothes with good fabrics suitable for all ages', 1, '2020-07-14 20:02:26', '2020-07-14 20:02:26'),
(13, 'Antique men\'s t-shirt break', 11, 200.00, 150.00, 'aophongnam.jpg', 3, ' Minimalist design of neutral colors and can be combined with costumes of different colors. Wearing to go out, travel or walking the city ', 1, '2020-07-14 20:04:34', '2020-07-14 20:04:34'),
(14, 'Women\'s T-Shir', 11, 200.00, 150.00, 'aophong3.1.jpg', 4, ' Beautiful T-shirts in various colors and styles ', 1, '2020-07-14 20:06:04', '2020-07-14 20:06:04'),
(15, 'T-shirt for breaking women', 11, 200.00, 170.00, 'aophong4-2.jpg', 3, 'Stylish women\'s turtlenecks. Elastic elastic material, designed neck-to-neck flex and personality-style sleeveless sleeves, bringing charm to the wearer', 1, '2020-07-14 20:08:30', '2020-07-14 20:08:30'),
(16, 'Dress empty', 10, 150.00, 140.00, 'vay2.jpg', 3, 'Cold, stretchy cotton with a zippered back', 1, '2020-07-14 20:09:48', '2020-07-14 20:09:48'),
(17, 'Dress spread', 10, 100.00, 90.00, 'vay.jpg', 3, 'Good fabric material, with back zipper suitable for age ', 1, '2020-07-14 20:11:38', '2020-07-14 20:11:38'),
(18, 'Slim dress', 10, 150.00, 130.00, 'damom1.jpg', 3, 'Elastic cotton silk elastic is good for fashion', 1, '2020-07-14 20:12:59', '2020-07-14 20:12:59'),
(19, 'Life jacket', 5, 500.00, 450.00, 'ao2%20(1).jpg', 3, 'Nice clothes with good materials to wear very warm shoes suitable for winter weather today ', 1, '2020-07-14 20:14:51', '2020-07-14 20:14:51'),
(20, 'Leather jacket', 5, 400.00, 370.00, 'aoda3.jpg', 3, 'High quality simili skin, no peeling and scratching', 1, '2020-07-14 20:16:22', '2020-07-14 20:16:22'),
(21, 'Evening dress', 6, 500.00, 470.00, 'aoda1.jpg', 3, 'With lining made from Hong Kong, quality guaranteed', 1, '2020-07-14 20:17:58', '2020-07-14 20:17:58'),
(22, 'Sweater', 6, 300.00, 270.00, 'aolen1-1.jpg', 3, 'Knitted wool made in Guangzhou, quality guaranteed ', 1, '2020-07-14 20:19:53', '2020-07-14 20:19:53'),
(23, 'Wind jacket', 5, 200.00, 150.00, 'aogio1.jpg', 3, 'A heavy windbreaker, good wind resistance to wear on,', 1, '2020-07-14 20:21:26', '2020-07-14 20:21:26'),
(24, 'Fat coat', 6, 200.00, 170.00, 'aobeo1.jpg', 3, 'Beautiful coat of outstanding material and color ', 1, '2020-07-14 20:22:49', '2020-07-14 20:22:49'),
(25, 'Jeans for women', 7, 200.00, 170.00, 'quanbonu.jpg', 3, 'Nice pants, material suitable for fashion ', 1, '2020-07-14 20:24:18', '2020-07-14 20:24:18'),
(26, 'Man\'s jeans', 8, 200.00, 170.00, 'quan1.jpg', 3, ' Nice pants, fashionable material', 1, '2020-07-14 20:25:14', '2020-07-14 20:25:14'),
(27, 'Sport shoes', 9, 500.00, 430.00, 'giay2.jpg', 3, 'High-class material designed professionally for sports activities, youthful and active', 1, '2020-07-14 20:27:03', '2020-07-14 20:27:03'),
(28, 'Necklace', 9, 300.00, 250.00, 'giaytr2.jpg', 3, 'Beautiful and luxurious necklaces', 1, '2020-07-14 20:28:04', '2020-07-14 20:28:04'),
(29, 'Bracelet', 9, 300.00, 200.00, 'vongtay2.jpg', 3, 'Nice quality bracelets', 1, '2020-07-14 20:28:59', '2020-07-14 20:28:59'),
(30, 'Skirt', 10, 150.00, 100.00, 'chanvay1.jpg', 2, 'Beautiful skirts bring a youthful and dynamic feeling', 1, '2020-07-14 20:30:51', '2020-07-14 20:30:51'),
(31, 'Hat', 9, 100.00, 90.00, 'mu.jpg', 3, 'Beautiful hats in popular colors', 1, '2020-07-14 20:32:07', '2020-07-14 20:32:07'),
(32, 'Hand bag', 9, 300.00, 250.00, 'tui2.jpg', 3, 'A book bag is an indispensable fashion accessory for young men and women, it shows the style and personality of the owner', 1, '2020-07-14 20:33:52', '2020-07-14 20:33:52'),
(33, 'Clock', 9, 400.00, 350.00, 'dongho2.jpg', 3, 'Beautiful stone watches suitable for fashion ', 1, '2020-07-14 20:35:09', '2020-07-14 20:35:09'),
(34, 'Glasses', 9, 100.00, 90.00, 'kinh.jpg', 3, ' Beautiful fashion glasses hot style ', 1, '2020-07-14 20:36:02', '2020-07-14 20:36:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attrs`
--

CREATE TABLE `product_attrs` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_attrs`
--

INSERT INTO `product_attrs` (`id`, `product_id`, `color_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 1, '3,4,5', '1,3,4', '2020-07-14 19:33:54', '2020-07-14 19:33:54'),
(2, 2, '4,5', '4,5,6', '2020-07-14 19:35:59', '2020-07-14 19:35:59'),
(3, 3, '3,4,9', '1,4,5', '2020-07-14 19:37:38', '2020-07-14 19:37:38'),
(4, 4, '1,4', '1,5', '2020-07-14 19:39:40', '2020-07-14 19:39:40'),
(5, 5, '4', '1,3,4', '2020-07-14 19:41:24', '2020-07-14 19:41:24'),
(6, 7, '1,5,6', '5,6,7', '2020-07-14 19:48:34', '2020-07-14 19:48:34'),
(7, 8, '4,6,7', '4,5,6', '2020-07-14 19:52:37', '2020-07-14 19:52:37'),
(8, 9, '1,3,4', '5,6,7', '2020-07-14 19:54:23', '2020-07-14 19:54:23'),
(9, 10, '5,6,8', '4,5,6', '2020-07-14 19:57:48', '2020-07-14 19:57:48'),
(10, 11, '3,7,9', '3,4,5', '2020-07-14 20:00:06', '2020-07-14 20:00:06'),
(11, 12, '6,7', '6,7', '2020-07-14 20:02:26', '2020-07-14 20:02:26'),
(12, 13, '1,4,7', '5,6,7', '2020-07-14 20:04:34', '2020-07-14 20:04:34'),
(13, 14, '1,3,4', '1,3,4', '2020-07-14 20:06:04', '2020-07-14 20:06:04'),
(14, 15, '1,3,7', '4,5,6', '2020-07-14 20:08:30', '2020-07-14 20:08:30'),
(15, 16, '1,3,6,7', '1,3,5', '2020-07-14 20:09:48', '2020-07-14 20:09:48'),
(16, 17, '1,3,7,8', '3,4,5', '2020-07-14 20:11:38', '2020-07-14 20:11:38'),
(17, 18, '3,6,7,9', '1,6,7', '2020-07-14 20:12:59', '2020-07-14 20:12:59'),
(18, 19, '1,4', '1,3', '2020-07-14 20:14:51', '2020-07-14 20:14:51'),
(19, 20, '1,4', '3,6,7', '2020-07-14 20:16:22', '2020-07-14 20:16:22'),
(20, 21, '3,5,6', '3,4,5', '2020-07-14 20:17:59', '2020-07-14 20:17:59'),
(21, 22, '1,3,5,6', '1,3,4', '2020-07-14 20:19:53', '2020-07-14 20:19:53'),
(22, 23, '1,6,7', '6,7,8', '2020-07-14 20:21:26', '2020-07-14 20:21:26'),
(23, 24, '3,4,9', '3,4,5', '2020-07-14 20:22:49', '2020-07-14 20:22:49'),
(24, 25, '1,7', '4,5,6', '2020-07-14 20:24:18', '2020-07-14 20:24:18'),
(25, 26, '1,6,7', '3,4,5', '2020-07-14 20:25:14', '2020-07-14 20:25:14'),
(26, 27, '1,3,4', '1,3', '2020-07-14 20:27:03', '2020-07-14 20:27:03'),
(27, 28, '5', '1,3', '2020-07-14 20:28:04', '2020-07-14 20:28:04'),
(28, 29, '1,4', '3,4', '2020-07-14 20:28:59', '2020-07-14 20:28:59'),
(29, 30, '1,9', '1,3,4', '2020-07-14 20:30:51', '2020-07-14 20:30:51'),
(30, 31, '4,5,9', '1,3', '2020-07-14 20:32:07', '2020-07-14 20:32:07'),
(31, 32, '1,3,8', '1,3,4', '2020-07-14 20:33:52', '2020-07-14 20:33:52'),
(32, 33, '5,7', '1,3,4', '2020-07-14 20:35:09', '2020-07-14 20:35:09'),
(33, 34, '1,4', '1,3,4', '2020-07-14 20:36:03', '2020-07-14 20:36:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '[\"admin.error\",\"admin.admin.index\",\"admin.getSearch\",\"admin.getTk\",\"admin.getTimkiem\",\"admin.viewOrder\",\"admin.xoa\",\"admin.viewProduct\",\"admin.category.index\",\"admin.category.create\",\"admin.category.store\",\"admin.category.edit\",\"admin.category.update\",\"admin.category.destroy\",\"admin.product.index\",\"admin.product.create\",\"admin.product.store\",\"admin.product.edit\",\"admin.product.update\",\"admin.product.destroy\",\"admin.color.index\",\"admin.color.create\",\"admin.color.store\",\"admin.color.edit\",\"admin.color.update\",\"admin.color.destroy\",\"admin.size.index\",\"admin.size.create\",\"admin.size.store\",\"admin.size.edit\",\"admin.size.update\",\"admin.size.destroy\",\"admin.banner.index\",\"admin.banner.create\",\"admin.banner.store\",\"admin.banner.edit\",\"admin.banner.update\",\"admin.banner.destroy\",\"admin.blog.index\",\"admin.blog.create\",\"admin.blog.store\",\"admin.blog.edit\",\"admin.blog.update\",\"admin.blog.destroy\",\"admin.customer.index\",\"admin.customer.create\",\"admin.customer.store\",\"admin.customer.edit\",\"admin.customer.update\",\"admin.customer.destroy\",\"admin.order.index\",\"admin.order.create\",\"admin.order.store\",\"admin.order.edit\",\"admin.order.update\",\"admin.order.destroy\",\"admin.payment.index\",\"admin.payment.create\",\"admin.payment.store\",\"admin.payment.edit\",\"admin.payment.update\",\"admin.payment.destroy\",\"admin.role.index\",\"admin.role.create\",\"admin.role.store\",\"admin.role.edit\",\"admin.role.update\",\"admin.role.destroy\",\"admin.user.index\",\"admin.user.create\",\"admin.user.store\",\"admin.user.show\",\"admin.user.edit\",\"admin.user.update\",\"admin.user.destroy\",\"admin.wishlist.index\",\"admin.wishlist.create\",\"admin.wishlist.store\",\"admin.wishlist.edit\",\"admin.wishlist.update\",\"admin.wishlist.destroy\"]', '2020-07-14 22:34:23', '2020-07-28 18:41:47'),
(2, 'Category manager', '[\"admin.category.index\",\"admin.category.create\",\"admin.category.store\",\"admin.category.edit\",\"admin.category.update\",\"admin.category.destroy\",\"admin.getTk\"]', '2020-07-14 22:34:54', '2020-07-14 22:36:23'),
(3, 'Product manager', '[\"admin.product.index\",\"admin.product.create\",\"admin.product.store\",\"admin.product.edit\",\"admin.product.update\",\"admin.product.destroy\",\"admin.color.index\",\"admin.color.create\",\"admin.color.store\",\"admin.color.edit\",\"admin.color.update\",\"admin.color.destroy\",\"admin.size.index\",\"admin.size.create\",\"admin.size.store\",\"admin.size.edit\",\"admin.size.update\",\"admin.size.destroy\",\"admin.getSearch\",\"admin.viewProduct\"]', '2020-07-14 22:36:09', '2020-07-15 00:31:34'),
(4, 'Management', '[\"admin.banner.index\",\"admin.banner.create\",\"admin.banner.store\",\"admin.banner.edit\",\"admin.banner.update\",\"admin.banner.destroy\",\"admin.blog.index\",\"admin.blog.create\",\"admin.blog.store\",\"admin.blog.edit\",\"admin.blog.update\",\"admin.blog.destroy\",\"admin.customer.index\",\"admin.customer.create\",\"admin.customer.store\",\"admin.customer.edit\",\"admin.customer.update\",\"admin.customer.destroy\",\"admin.order.index\",\"admin.order.create\",\"admin.order.store\",\"admin.order.edit\",\"admin.order.update\",\"admin.order.destroy\",\"admin.payment.index\",\"admin.payment.create\",\"admin.payment.store\",\"admin.payment.edit\",\"admin.payment.update\",\"admin.payment.destroy\"]', '2020-07-15 00:32:22', '2020-07-23 06:07:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`size_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'X', '2020-07-14 19:25:44', '2020-07-14 19:25:44'),
(3, 'M', '2020-07-14 19:26:28', '2020-07-14 19:26:28'),
(4, 'S', '2020-07-14 19:26:33', '2020-07-14 19:26:33'),
(5, 'L', '2020-07-14 19:26:38', '2020-07-14 19:26:38'),
(6, 'XL', '2020-07-14 19:26:45', '2020-07-14 19:26:45'),
(7, 'XXL', '2020-07-14 19:27:04', '2020-07-14 19:27:04'),
(8, 'XS', '2020-07-14 19:27:08', '2020-07-14 19:27:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stars`
--

CREATE TABLE `stars` (
  `star_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `star` double NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stars`
--

INSERT INTO `stars` (`star_id`, `customer_id`, `star`, `content`, `product_id`, `created_at`, `updated_at`) VALUES
(5, 10, 5, 'Sản phẩm rất tốt', 31, '2020-07-23 06:52:24', '2020-07-23 06:52:24'),
(10, 8, 3, 'không có j', 7, '2020-07-28 21:53:13', '2020-07-28 21:53:13'),
(11, 10, 5, 'sản phẩm rất tốt', 4, '2020-08-05 19:48:43', '2020-08-05 19:48:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Phương Linh', 'phuonglinh@gmail.com', NULL, '$2y$10$L2j.Q0n8cyV8tHp8RpE9Pe7vOKPFpo9QDW/WV70PZNyL4OWQQkD.2', NULL, '2020-07-15 06:04:27', '2020-07-15 06:04:27'),
(7, 'Bùi văn Sinh', 'buisinh2001@gmail.com', NULL, '$2y$10$88GHrp5/E2ogysP7OlP1LeO6kGHJc.GbWgLhaUpZciIa69OsUy8si', NULL, '2020-07-15 06:13:36', '2020-07-15 06:13:36'),
(8, 'Cầm Tú Anh', 'tuanh2001@gmail.com', NULL, '$2y$10$wLXn4sFglieUrjpElhCfeeoRvJyBeWhU.ttXaVwNHV6Pj/dbjW9RK', NULL, '2020-07-15 06:14:10', '2020-07-15 06:14:10'),
(13, 'Lại Thị Hạnh', 'laihanh698@gmail.com', NULL, '$2y$10$CRL.txQJ0L5gNxsmQqm2M.j8ZK.Z7EF0Yueh0CIdrf3.Bflx1SmMe', NULL, '2020-07-23 01:03:11', '2020-07-23 01:03:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(5, 4),
(7, 2),
(8, 3),
(13, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `wishlist_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_images_product_id` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_orders_customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `order_dtails`
--
ALTER TABLE `order_dtails`
  ADD PRIMARY KEY (`orderDetail_id`),
  ADD KEY `FK_order_details_order_id` (`order_id`),
  ADD KEY `FK_order_details_product_id` (`product_id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `FK_products_cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `product_attrs`
--
ALTER TABLE `product_attrs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_attrs_product_id` (`product_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`),
  ADD UNIQUE KEY `sizes_name_unique` (`name`);

--
-- Chỉ mục cho bảng `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`star_id`),
  ADD KEY `FK_stars_customer_id` (`customer_id`),
  ADD KEY `FK_stars_product_id` (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD UNIQUE KEY `user_roles_role_id_unique` (`role_id`);

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `FK_wishlist_customer_id` (`customer_id`),
  ADD KEY `FK_wishlist_product_id` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `order_dtails`
--
ALTER TABLE `order_dtails`
  MODIFY `orderDetail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `product_attrs`
--
ALTER TABLE `product_attrs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `stars`
--
ALTER TABLE `stars`
  MODIFY `star_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `wishlist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_images_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_dtails`
--
ALTER TABLE `order_dtails`
  ADD CONSTRAINT `FK_order_details_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_order_details_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_cate_id` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cate_id`);

--
-- Các ràng buộc cho bảng `product_attrs`
--
ALTER TABLE `product_attrs`
  ADD CONSTRAINT `FK_product_attrs_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `stars`
--
ALTER TABLE `stars`
  ADD CONSTRAINT `FK_stars_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_stars_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `FK_user_roles_role_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `FK_user_roles_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `FK_wishlist_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_wishlist_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
