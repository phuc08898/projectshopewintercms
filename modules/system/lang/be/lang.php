<?php

return [
    'app' => [
        'name' => "Winter CMS",
        'tagline' => "Вяртанне да вытокаў"
    ],
    'directory' => [
        'create_fail' => "Немагчыма стварыць каталог: \":name\""
    ],
    'file' => [
        'create_fail' => "Немагчыма стварыць файл: \":name\""
    ],
    'combiner' => [
        'not_found' => "Аб'яднальны файл \":name\" не знойдзены"
    ],
    'page' => [
        'invalid_token' => [
            'label' => "Няправільны токен бяспекі",
        ],
    ],
    'system' => [
        'name' => "Сістэма",
        'menu_label' => "Сістэма",
        'categories' => [
            'cms' => "CMS",
            'misc' => "Рознае",
            'logs' => "Дзённік",
            'mail' => "Пошта",
            'shop' => "Крама",
            'team' => "Каманда",
            'users' => "Карыстальнікі",
            'system' => "Сістэма",
            'social' => "Сацыяльнае",
            'events' => "Падзеі",
            'customers' => "Кліенты",
            'my_settings' => "Маі налады"
        ]
    ],
    'theme' => [
        'label' => "Тэма",
        'unnamed' => "Тэма без назвы",
        'name' => [
            'label' => "Імя тэма",
            'help' => "Назавіце тэму па яе ўнікальнаму коду. Напрыклад, Winter.Vanilla"
        ],
    ],
    'themes' => [
        'install' => "Усталяваць тэмы",
        'search' => "пошук тэм, каб усталяваць...",
        'installed' => "Усталяваныя тэмы",
        'no_themes' => "Няма тэм, ўсталяваных з крамы",
        'recommended' => "Рэкамендаваныя",
        'remove_confirm' => "Вы ўпэўнены, што жадаеце выдаліць гэтую тэму?"
    ],
    'plugin' => [
        'label' => "Плагін",
        'unnamed' => "Плагін без назвы",
        'name' => [
            'label' => "Назва плагіну",
            'help' => "Назавіце плагін па яго ўнікальнаму коду. Напрыклад, Winter.Blog"
        ]
    ],
    'plugins' => [
        'manage' => "Кіраванне плагінамі",
        'enable_or_disable' => "Уключыць альбо выключыць",
        'enable_or_disable_title' => "Уключыць альбо выключыць плагіны",
        'install' => "Усталяваць плагіны",
        'install_products' => "Усталяваць прадукты",
        'search' => "пошук плагінаў, каб усталяваць...",
        'installed' => "Усталяваныя плагіны",
        'no_plugins' => "Няма плагінаў, усталяваных з крамы",
        'recommended' => "Рэкамендаваныя",
        'remove' => "Выдаліць",
        'refresh' => "Абнавіць",
        'disabled_label' => "Выключаныя",
        'disabled_help' => "Выключаныя плагіны ігнаруюцца прыкладаннем",
        'frozen_label' => "Замарозіць абнаўленні",
        'frozen_help' => "Замарожаныя плагіны не будуць абнаўляцца",
        'selected_amount' => "Абрана плагінаў: :amount",
        'remove_confirm' => "Вы ўпэўнены, што жадаеце выдаліць гэты плагін?",
        'remove_success' => "Плагіны паспяхова выдаленыя",
        'refresh_confirm' => "Вы ўпэўнены?",
        'refresh_success' => "Плагіны паспяхова абноўленыя",
        'disable_confirm' => "Вы ўпэўнены?",
        'disable_success' => "Плагіны паспяхова выключаныя",
        'enable_success' => "Плагіны паспяхова ўключаныя",
        'unknown_plugin' => "Плагін быў выдалены з файлавай сістэмы"
    ],
    'project' => [
        'name' => "Праект",
        'owner_label' => "Уласнік",
        'attach' => "Далучыць праект",
        'detach' => "Аддзяліць праект",
        'none' => "Няма",
        'id' => [
            'label' => "ID праекту",
            'help' => "Як адшукаць ID праекту",
            'missing' => "Калі ласка, укажыце ID праекту, які Вы жадаеце выкарыстоўваць"
        ],
        'detach_confirm' => "Вы ўпэўнены, што жадаеце аддзяліць гэты праект?",
        'unbind_success' => "Праект быў аддзелены"
    ],
    'settings' => [
        'menu_label' => "Налады",
        'not_found' => "Не атрымалася знайці налады",
        'missing_model' => "На старонцы налад не вызначана мадэль",
        'update_success' => ":name налады абноўленыя",
        'return' => "Вярнуцца да сістэмных налад",
        'search' => "Пошук"
    ],
    'mail' => [
        'log_file' => "Log file",
        'menu_label' => "Налады пошты",
        'menu_description' => "Кіраваць наладамі электроннай пошты",
        'general' => "Агульныя налады",
        'method' => "Метад пошты",
        'sender_name' => "Імя адпраўніка",
        'sender_email' => "Адрас пошты адпраўніка",
        'php_mail' => "PHP mail",
        'smtp' => "SMTP",
        'smtp_address' => "Адрас SMTP",
        'smtp_authorization' => "Патрабуецца аўтарызацыя SMTP",
        'smtp_authorization_comment' => "Ужывайце гэты сцяжок, калі Ваш SMTP сервер патрабуе аўтарызацыю",
        'smtp_username' => "Імя",
        'smtp_password' => "Пароль",
        'smtp_port' => "Порт SMTP",
        'sendmail' => "Sendmail",
        'sendmail_path' => "Шлях sendmail",
        'sendmail_path_comment' => "Калі ласка, укажыце шлях дла праграмы sendmail",
    ],
    'mail_templates' => [
        'menu_label' => "Шаблоны пошты",
        'menu_description' => "Змяненне шаблонаў пошты, якія адпраўляюцца карыстальнікам і адміністратарам, змяненне макетаў",
        'new_template' => "Новы шаблон",
        'new_layout' => "Новы макет",
        'template' => "Шаблон",
        'templates' => "Шаблоны",
        'menu_layouts_label' => "Макеты пошты",
        'layout' => "Макет",
        'layouts' => "Макеты",
        'no_layout' => "-- Няма макету --",
        'name' => "Назва",
        'name_comment' => "Унікальнае імя, каб звяртацца да шаблону",
        'code' => "Код",
        'code_comment' => "Унікальны код, каб звяртацца да шаблону",
        'subject' => "Тэма",
        'subject_comment' => "Тэма паштовага ліста",
        'description' => "Апісанне",
        'content_html' => "HTML",
        'content_css' => "CSS",
        'content_text' => "Звычайны тэкст",
        'test_send' => "Адправіць тэставае паведамленне",
        'test_success' => "Тэставае паведамленне адпраўлена",
        'test_confirm' => "Адправіць тэставае паведамленне на адрас :email. Працягнуць?",
        'creating' => "Стварэнне шаблону...",
        'creating_layout' => "Стварэнне макету...",
        'saving' => "Захаванне шаблону...",
        'saving_layout' => "Захаванне макету...",
        'delete_confirm' => "Выдаліць гэты шаблон?",
        'delete_layout_confirm' => "Выдаліць гэты макет?",
        'deleting' => "Выдаленне шаблону...",
        'deleting_layout' => "Выдаленне макету...",
        'sending' => "Адпраўленне тэставага паведамлення...",
        'return' => "Вярнуцца да спісу шаблонаў"
    ],
    'install' => [
        'project_label' => "Далучыць да праекту",
        'plugin_label' => "Усталяваць плагін",
        'theme_label' => "Усталяваць тэму",
        'missing_plugin_name' => "Калі ласка, укажыце назву плагіна, каб усталяваць",
        'missing_theme_name' => "Калі ласка, укажыце назву тэмы, каб усталяваць",
        'install_completing' => "Завяршэнне працэсу ўсталявання",
        'install_success' => "Плагін быў паспяхова ўсталяваны"
    ],
    'updates' => [
        'title' => "Кіраванне абнаўленнямі",
        'name' => "Абнаўленне праграмы",
        'menu_label' => "Абнаўленні і плагіны",
        'menu_description' => "Абнаўленне сістэмы, кіраванне і ўсталяванне плагінаў і тэм",
        'return_link' => "Вярнуцца да абнаўленняў сістэмы",
        'check_label' => "Праверыць абнаўленні",
        'retry_label' => "Паспрабаваць зноў",
        'plugin_name' => "Імя",
        'plugin_code' => "Код",
        'plugin_description' => "Апісанне",
        'plugin_version' => "Версія",
        'plugin_author' => "Аўтар",
        'core_current_build' => "Бягучая зборка",
        'core_build' => "Зборка :build",
        'core_build_help' => "Апошняя зборка даступная",
        'core_downloading' => "Загрузка файлаў прыкладання",
        'core_extracting' => "Распакоўка файлаў прыкладання",
        'plugins' => "Плагіны",
        'themes' => "Тэмы",
        'disabled' => "Адключанае",
        'plugin_downloading' => "Загрузка плагіну: \":name\"",
        'plugin_extracting' => "Распакоўка плагіну: \":name\"",
        'plugin_version_none' => "Новы плагін",
        'plugin_current_version' => "Бягучая версія",
        'theme_new_install' => "Усталяванне новай тэмы",
        'theme_downloading' => "Загрузка тэмы: \":name\"",
        'theme_extracting' => "Распакоўка тэмы: \":name\"",
        'update_label' => "Абнавіць праграму",
        'update_completing' => "Сканчэнне працэсу абнаўлення",
        'update_loading' => "Загрузка даступных абнаўленняў...",
        'update_success' => "Працэс абнаўлення скончаны",
        'update_failed_label' => "Не атрымалася абнавіць",
        'force_label' => "Прымусіць абнаўленне",
        'found' => [
            'label' => "Знойдзены новыя абнаўленні!",
            'help' => "Націсніце \"Абнавіць праграму\", каб пачаць абнаўленне"
        ],
        'none' => [
            'label' => "Няма абнаўленняў",
            'help' => "Не было знойдзена абнаўленняў"
        ],
        'important_action' => [
            'empty' => "Выберыце дзеянне",
            'confirm' => "Пацвердзіць абнаўленне",
            'skip' => "Прапусціць гэты плагін (аднойчы)",
            'ignore' => "Прапусціць гэта плагін (заўсёды)"
        ],
        'important_action_required' => "Патрабуецца дзеянне",
        'important_view_guide' => "Прагледзець кіраўніцтва па абнаўленні",
        'important_alert_text' => "Некаторыя абнаўленні патрабуюць Вашай увагі",
        'details_title' => "Дэталі плагіну",
        'details_view_homepage' => "Прагледзець хатнюю старонку",
        'details_readme' => "Дакументацыя",
        'details_readme_missing' => "Няма дакументацыі",
        'details_changelog' => "Гісторыя змяненняў",
        'details_changelog_missing' => "Няма гісторыі змяненняў",
        'details_upgrades' => "Кіраўніцтва па абнаўленні",
        'details_upgrades_missing' => "Няма кіраўніцтва па абнаўленні",
        'details_licence' => "Ліцэнзія",
        'details_licence_missing' => "Няма тэксту ліцэнзіі",
        'details_current_version' => "Бягучая версія",
        'details_author' => "Аўтар"
    ],
    'server' => [
        'connect_error' => "Памылка падключэння да серверу",
        'response_not_found' => "Немагчыма знайсці сервер абнаўленняў",
        'response_invalid' => "Няправільны адказ з сервера",
        'response_empty' => "Пусты адказ с сервера",
        'file_error' => "Сервер не змог даставіць пакет",
        'file_corrupt' => "Файл з сервера прыйшоў сапсаваны"
    ],
    'behavior' => [
        'missing_property' => "Клас \":class\" павінен вызначаць уласцівасць \"$:property\", якая выкарыстоўваецца паводзінамі \":behavior\""
    ],
    'config' => [
        'not_found' => "Немагчыма адшукаць файл канфігурацыі \":file\", вызначаны ў \":location\"",
        'required' => "Выкарастаная ў \":location\" канфігурацыя павінна мець значэнне для \":property\""
    ],
    'zip' => [
        'extract_failed' => "Немагчыма выняць файл \":file\""
    ],
    'event_log' => [
        'hint' => "Гэты ліст адлюстроўвае спіс магчымых памылак, якія могуць ўзнікнуць у прыкладанні, напрыклад, выключэнні і адладкавая інфармацыя",
        'menu_label' => "Ліст падзей",
        'menu_description' => "Прагледзець сістэмныя падзеі з іх запісаным часам і дэталямі",
        'empty_link' => "Ачысціць спіс падзей",
        'empty_loading' => "Ачыстка спісу падзей...",
        'empty_success' => "Спіс падзей паспяхова ачышчаны",
        'return_link' => "Вярнуцца да спісу падзей",
        'id' => "ID",
        'id_label' => "ID падзеі",
        'created_at' => "Дата і час",
        'message' => "Паведамленне",
        'level' => "Узровень",
        'preview_title' => "Падзея"
    ],
    'request_log' => [
        'hint' => "Гэтыя запісы паказваюць спіс браузерных запытаў, якія могуць патрабаваць увагі. Напрыклад, калі наведвальнік адчыняе старонку, якой няма, будзе створаны запіс з кодам 404",
        'menu_label' => "Спіс запытаў",
        'menu_description' => "Прагледзець дрэнныя запыты альбо перанакіраванні, такія як \"Старонка не знойдзеная\" (404)",
        'empty_link' => "Ачысціць ліст запытаў",
        'empty_loading' => "Ачыстка лісту запытаў...",
        'empty_success' => "Ліст запытаў паспяхова ачышчаны",
        'return_link' => "Вярнуцца да лісту запытаў",
        'id' => "ID",
        'id_label' => "ID запісу",
        'count' => "Лічыльнік",
        'referer' => "Крыніцы",
        'url' => "URL",
        'status_code' => "Статус",
        'preview_title' => "Запыт"
    ],
    'permissions' => [
        'name' => "Сістэма",
        'manage_system_settings' => "Кіраванне сістэмныя налады",
        'manage_software_updates' => "Кіраванне абнаўленнямі праграмнага забеспячэння",
        'access_logs' => "Прагледзець сістэмныя запісы",
        'manage_mail_templates' => "Кіраванне шаблонамі пошты",
        'manage_mail_settings' => "Кіраванне наладамі пошты",
        'manage_other_administrators' => "Кіраванне іншымі адміністратарамі",
        'manage_preferences' => "Кіраванне перавагамі панэлі кіравання",
        'manage_editor' => "Кіраванне перавагамі рэдакатару коду",
        'view_the_dashboard' => "Прагледзець панэль кіравання",
        'manage_branding' => "Наладзіць панэль кіравання"
    ],
    'media' => [
        'invalid_path' => "Няправільны шлях да файлу: \":path\"",
        'folder_size_items' => "аб'ект(аў)",
    ],
];
