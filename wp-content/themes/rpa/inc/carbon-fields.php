<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
 
add_action( 'carbon_fields_register_fields', 'truemisha_carbon' );
function truemisha_carbon() {
 
	Container::make( 'post_meta', 'Главная секция' )
		->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'page-home.php' )
		->add_fields( array(
            Field::make( 'image', 'rpa_main_img', 'Фоновое изображение' )
            ->set_value_type( 'url' ),
            Field::make( 'textarea', 'rpa_h1', 'Заголовок' ),
            Field::make( 'text', 'rpa_ticker', 'Бегущая строрка' ),
            Field::make( 'textarea', 'rpa_main_p', 'Текст под заголовком' ),
            Field::make( 'text', 'rpa_h_button1', 'Заголовок кнопки 1' ),
            Field::make( 'text', 'rpa_h_button1_link', 'Ссылка кнопки 1' ),
            Field::make( 'text', 'rpa_h_button2', 'Заголовок кнопки 2' ),
            Field::make( 'text', 'rpa_h_button2_link', 'Ссылка кнопки 2' ),
            Field::make( 'media_gallery', 'rpa_partners', 'Логотипы партнеров'  ),
 
	) );
    Container::make( 'post_meta', 'Секция c видео' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'page-home.php' )
    ->add_fields( array(

        Field::make( 'text', 'rpa_video_h2', 'Заголовок' ),
        Field::make( 'textarea', 'rpa_video_p', 'Текст под заголовком' ),
        Field::make( 'text', 'rpa_video_link', 'Ссылка на видео' ),
        Field::make( 'image', 'rpa_video_bg', 'Фоновое изоброжение видео' )
        ->set_value_type( 'url' ),

) );
    Container::make( 'post_meta', 'Секция кейсы' )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'page-home.php' )
        ->add_fields( array(
            Field::make( 'text', 'rpa_case_h2', 'Заголовок' ),
) );

Container::make( 'post_meta', 'Секция шаги интеграции' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-home.php' )
->add_fields( array(
    Field::make( 'text', 'rpa_steps_h2', 'Заголовок' ),
    Field::make( 'complex', 'rpa_steps', 'Шаги' )
    ->add_fields( array(
        Field::make( 'text', 'rpa_steps_day', 'Дней' ),
        Field::make( 'text', 'rpa_steps_title', 'Заголовок' ),
        Field::make( 'textarea', 'rpa_steps_p', 'Описание' ),
    ) )
) );
Container::make( 'post_meta', 'Секция с карточками' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-home.php' )
->add_fields( array(
    Field::make( 'text', 'rpa_card_h2', 'Заголовок' ),
    Field::make( 'text', 'rpa_card_one_h2', 'Заголовок карты 1' ),
    Field::make( 'complex', 'rpa_card_one_link', 'Ссылки' )
    ->add_fields( array(
        Field::make( 'text', 'rpa_card_one_link_for_name', 'Название' ),
        Field::make( 'text', 'rpa_card_one_link_for_url', 'Сссылка' ),
    ) ),
    Field::make( 'text', 'rpa_card_two_h2', 'Заголовок карты 2' ),
    Field::make( 'complex', 'rpa_card_two_link', 'Ссылки' )
    ->add_fields( array(
        Field::make( 'text', 'rpa_card_two_link_for_name', 'Название' ),
        Field::make( 'text', 'rpa_card_two_link_for_url', 'Сссылка' ),
    ) ),
) );
Container::make( 'post_meta', 'Таблица' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-home.php' )
->add_fields( array(
    Field::make( 'text', 'rpa_table_h2', 'Заголовок' ),
    Field::make( 'image', 'rpa_table_img', 'Изображение таблицы' )
    ->set_value_type( 'url' ),
) );
Container::make( 'post_meta', 'Карточки с ценами' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-home.php' )
->add_fields( array(
    Field::make( 'text', 'rpa_card_price_h', 'Заголовок секции' ),
    Field::make( 'text', 'rpa_card_price_one_h2', 'Заголовок карты 1' ),
    Field::make( 'textarea', 'rpa_card_price_one_p', 'Описание карты 1' ),
    Field::make( 'text', 'rpa_card_price_one_price', 'Цена карты 1' ),
    Field::make( 'text', 'rpa_card_price_one_button_h', 'Заголовок кнопки карты 1' ),
    Field::make( 'text', 'rpa_card_price_one_button_link', 'Ссылка кнопки карты 1' ),
    Field::make( 'complex', 'rpa_card_price_one_possibilities', 'Возможности' )
    ->add_fields( array(
        Field::make( 'text', 'rpa_card_price_one_possibilities_for', 'Возможность' ),
    ) ),
    Field::make( 'text', 'rpa_card_price_two_h2', 'Заголовок карты 2' ),
    Field::make( 'textarea', 'rpa_card_price_two_p', 'Описание карты 2' ),
    Field::make( 'text', 'rpa_card_price_two_price', 'Цена карты 2' ),
    Field::make( 'text', 'rpa_card_price_two_button_h', 'Заголовок кнопки карты 2' ),
    Field::make( 'text', 'rpa_card_price_two_button_link', 'Ссылка кнопки карты 2' ),
    Field::make( 'complex', 'rpa_card_price_two_possibilities', 'Возможности' )
    ->add_fields( array(
        Field::make( 'text', 'rpa_card_price_two_possibilities_for', 'Возможность' ),
    ) ),
    Field::make( 'text', 'rpa_card_price_three_h2', 'Заголовок карты 3' ),
    Field::make( 'textarea', 'rpa_card_price_three_p', 'Описание карты 3' ),
    Field::make( 'text', 'rpa_card_price_three_price', 'Цена карты 3' ),
    Field::make( 'text', 'rpa_card_price_three_button_h', 'Заголовок кнопки карты 3' ),
    Field::make( 'text', 'rpa_card_price_three_button_link', 'Ссылка кнопки карты 3' ),
    Field::make( 'complex', 'rpa_card_price_three_possibilities', 'Возможности' )
    ->add_fields( array(
        Field::make( 'text', 'rpa_card_price_three_possibilities_for', 'Возможность' ),
    ) )
));
Container::make( 'post_meta', 'Отзывы' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-home.php' )
->add_fields( array(
    Field::make( 'image', 'rpa_reviews_img_1', 'Изображение отзыва 1' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_reviews_p_1', 'Текст отзыва 1' ),
    Field::make( 'text', 'rpa_reviews_author_1', 'Имя 1' ),
    Field::make( 'text', 'rpa_reviews_position_1', 'Должность 1' ),
    Field::make( 'image', 'rpa_reviews_img_2', 'Изображение отзыва 2' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_reviews_p_2', 'Текст отзыва 2' ),
    Field::make( 'text', 'rpa_reviews_author_2', 'Имя 2' ),
    Field::make( 'text', 'rpa_reviews_position_2', 'Должность 2' ),
    Field::make( 'image', 'rpa_reviews_img_3', 'Изображение отзыва 3' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_reviews_p_3', 'Текст отзыва 3' ),
    Field::make( 'text', 'rpa_reviews_author_3', 'Имя 3' ),
    Field::make( 'text', 'rpa_reviews_position_3', 'Должность 3' ),
    Field::make( 'image', 'rpa_reviews_img_4', 'Изображение отзыва 4' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_reviews_p_4', 'Текст отзыва 4' ),
    Field::make( 'text', 'rpa_reviews_author_4', 'Имя 4' ),
    Field::make( 'text', 'rpa_reviews_position_4', 'Должность 4' ),
    Field::make( 'image', 'rpa_reviews_img_5', 'Изображение отзыва 5' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_reviews_p_5', 'Текст отзыва 5' ),
    Field::make( 'text', 'rpa_reviews_author_5', 'Имя 5' ),
    Field::make( 'text', 'rpa_reviews_position_5', 'Должность 5' ),
));


Container::make( 'post_meta', 'Главная секция' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-partnership.php' )
->add_fields( array(
    Field::make( 'image', 'rpa_partnership_main_img', 'Фоновое изображение' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_partnership_h1', 'Заголовок' ),
    Field::make( 'textarea', 'rpa_partnership_main_p', 'Текст под заголовком' ),
    Field::make( 'text', 'rpa_partnership_h_button1', 'Заголовок кнопки 1' ),
    Field::make( 'text', 'rpa_partnership_h_button1_link', 'Ссылка кнопки 1' ),
    Field::make( 'text', 'rpa_partnership_h_button2', 'Заголовок кнопки 2' ),
    Field::make( 'text', 'rpa_partnership_h_button2_link', 'Ссылка кнопки 2' ),

) );
Container::make( 'post_meta', 'Секция с текстом' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-partnership.php' )
->add_fields( array(
    Field::make( 'textarea', 'rpa_partnership_info', 'Текст' ),

) );
Container::make( 'post_meta', 'Секция статистика' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-partnership.php' )
->add_fields( array(
    Field::make( 'text', 'rpa_partnership_statistic1_h', 'Заголовок 1' ),
    Field::make( 'text', 'rpa_partnership_statistic1_p', 'Текст 1' ),
    Field::make( 'text', 'rpa_partnership_statistic2_h', 'Заголовок 2' ),
    Field::make( 'text', 'rpa_partnership_statistic2_p', 'Текст 2' ),
    Field::make( 'text', 'rpa_partnership_statistic3_h', 'Заголовок 3' ),
    Field::make( 'text', 'rpa_partnership_statistic3_p', 'Текст 3' ),
    Field::make( 'text', 'rpa_partnership_statistic4_h', 'Заголовок 4' ),
    Field::make( 'text', 'rpa_partnership_statistic4_p', 'Текст 4' ),

) );
Container::make( 'post_meta', 'Cекция subscription' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-partnership.php' )
->add_fields( array(
    Field::make( 'image', 'rpa_partnership_subscription_img', 'Фоновое изображение' )
    ->set_value_type( 'url' ),
    Field::make( 'text', 'rpa_partnership_subscription_h1', 'Заголовок' ),
    Field::make( 'textarea', 'rpa_partnership_subscription_main_p', 'Текст под заголовком' ),
) );
Container::make( 'post_meta', 'Cекция с програмами' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-partnership.php' )
->add_fields( array(
    Field::make( 'image', 'rpa_partnership_programm_img', 'Фоновое изображение' )
    ->set_value_type( 'url' ),
    Field::make( 'text', 'rpa_partnership_programm_h', 'Заголовок' ),
    Field::make( 'textarea', 'rpa_partnership_programm_main_p', 'Текст под заголовком' ),
    Field::make( 'text', 'rpa_partnership_programm_button1', 'Заголовок кнопки 1' ),
    Field::make( 'text', 'rpa_partnership_programm_button1_link', 'Ссылка кнопки 1' ),
    Field::make( 'text', 'rpa_partnership_programm_button2', 'Заголовок кнопки 2' ),
    Field::make( 'text', 'rpa_partnership_programm_button2_link', 'Ссылка кнопки 2' ),
) );
Container::make( 'post_meta', 'Таблица' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-partnership.php' )
->add_fields( array(
    Field::make( 'text', 'rpa_table_partnership_h2', 'Заголовок' ),
    Field::make( 'image', 'rpa_table_partnership_img', 'Изображение таблицы' )
    ->set_value_type( 'url' ),
) );
Container::make( 'post_meta', 'Секция результат' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-partnership.php' )
->add_fields( array(
    Field::make( 'text', 'rpa_partnership_results_h', 'Заголовок секции' ),
    Field::make( 'text', 'rpa_partnership_results1_h', 'Заголовок 1' ),
    Field::make( 'text', 'rpa_partnership_results1_p', 'Текст 1' ),
    Field::make( 'text', 'rpa_partnership_results2_h', 'Заголовок 2' ),
    Field::make( 'text', 'rpa_partnership_results2_p', 'Текст 2' ),
    Field::make( 'text', 'rpa_partnership_results3_h', 'Заголовок 3' ),
    Field::make( 'text', 'rpa_partnership_results3_p', 'Текст 3' ),
    Field::make( 'text', 'rpa_partnership_results4_h', 'Заголовок 4' ),
    Field::make( 'text', 'rpa_partnership_results4_p', 'Текст 4' ),

) );
Container::make( 'post_meta', 'Карточки с ценами' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-partnership.php' )
->add_fields( array(
    Field::make( 'text', 'rpa_card_price_partnership_h', 'Заголовок секции' ),
    Field::make( 'text', 'rpa_card_price_partnership_one_h2', 'Заголовок карты 1' ),
    Field::make( 'textarea', 'rpa_card_partnership_price_one_p', 'Описание карты 1' ),
    Field::make( 'text', 'rpa_card_price_partnership_one_price', 'Цена карты 1' ),
    Field::make( 'text', 'rpa_card_price_partnership_one_button_h', 'Заголовок кнопки карты 1' ),
    Field::make( 'text', 'rpa_card_price_partnership_one_button_link', 'Ссылка кнопки карты 1' ),
    Field::make( 'complex', 'rpa_card_price_partnership_one_possibilities', 'Возможности' )
    ->add_fields( array(
        Field::make( 'text', 'rpa_card_price_partnership_one_possibilities_for', 'Возможность' ),
    ) ),
    Field::make( 'text', 'rpa_card_price_partnership_two_h2', 'Заголовок карты 2' ),
    Field::make( 'textarea', 'rpa_card_partnership_price_two_p', 'Описание карты 2' ),
    Field::make( 'text', 'rpa_card_price_partnership_two_price', 'Цена карты 2' ),
    Field::make( 'text', 'rpa_card_price_partnership_two_button_h', 'Заголовок кнопки карты 2' ),
    Field::make( 'text', 'rpa_card_price_partnership_two_button_link', 'Ссылка кнопки карты 2' ),
    Field::make( 'complex', 'rpa_card_price_partnership_two_possibilities', 'Возможности' )
    ->add_fields( array(
        Field::make( 'text', 'rpa_card_price_partnership_two_possibilities_for', 'Возможность' ),
    ) ),
    Field::make( 'text', 'rpa_card_price_partnership_three_h2', 'Заголовок карты 3' ),
    Field::make( 'textarea', 'rpa_card_price_partnership_three_p', 'Описание карты 3' ),
    Field::make( 'text', 'rpa_card_price_partnership_three_price', 'Цена карты 3' ),
    Field::make( 'text', 'rpa_card_price_partnership_three_button_h', 'Заголовок кнопки карты 3' ),
    Field::make( 'text', 'rpa_card_price_partnership_three_button_link', 'Ссылка кнопки карты 3' ),
    Field::make( 'complex', 'rpa_card_price_partnership_three_possibilities', 'Возможности' )
    ->add_fields( array(
        Field::make( 'text', 'rpa_card_price_partnership_three_possibilities_for', 'Возможность' ),
    ) ),
));
Container::make( 'post_meta', 'Отзывы' )
->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'page-partnership.php' )
->add_fields( array(
    Field::make( 'image', 'rpa_reviews_partnership_img_1', 'Изображение отзыва 1' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_reviews_partnership_p_1', 'Текст отзыва 1' ),
    Field::make( 'text', 'rpa_reviews_partnership_author_1', 'Имя 1' ),
    Field::make( 'text', 'rpa_reviews_partnership_position_1', 'Должность 1' ),
    Field::make( 'image', 'rpa_reviews_partnership_img_2', 'Изображение отзыва 2' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_reviews_partnership_p_2', 'Текст отзыва 2' ),
    Field::make( 'text', 'rpa_reviews_partnership_author_2', 'Имя 2' ),
    Field::make( 'text', 'rpa_reviews_partnership_position_2', 'Должность 2' ),
    Field::make( 'image', 'rpa_reviews_partnership_img_3', 'Изображение отзыва 3' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_reviews_partnership_p_3', 'Текст отзыва 3' ),
    Field::make( 'text', 'rpa_reviews_partnership_author_3', 'Имя 3' ),
    Field::make( 'text', 'rpa_reviews_partnership_position_3', 'Должность 3' ),
    Field::make( 'image', 'rpa_reviews_partnership_img_4', 'Изображение отзыва 4' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_reviews_partnership_p_4', 'Текст отзыва 4' ),
    Field::make( 'text', 'rpa_reviews_partnership_author_4', 'Имя 4' ),
    Field::make( 'text', 'rpa_reviews_partnership_position_4', 'Должность 4' ),
    Field::make( 'image', 'rpa_reviews_partnership_img_5', 'Изображение отзыва 5' )
    ->set_value_type( 'url' ),
    Field::make( 'textarea', 'rpa_reviews_partnership_p_5', 'Текст отзыва 5' ),
    Field::make( 'text', 'rpa_reviews_partnership_author_5', 'Имя 5' ),
    Field::make( 'text', 'rpa_reviews_partnership_position_5', 'Должность 5' ),
));
}
?>