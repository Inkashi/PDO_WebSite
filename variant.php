<?php
session_start();
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="ru" class="bx-core bx-mac bx-no-touch bx-no-retina bx-chrome">

<head>
  <title>Главная - Югорский государственный университет</title>
  <meta name="title" content="Главная - Югорский государственный университет" />
  <meta name="description" content="ЮГУ - все уровни образования: высшее, СПО,
    ДПО. Топ-20 рейтинга hh.ru. Входит в " Лигу="" вузов"="" Газпрома.="" Базовая="" организация="" Профессионалитет="" -="" ТЭК."="">
  <meta name="keywords" content="университет, Югра, Ханты-Мансийск" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />

  <link rel="icon" href="images/favicon.png" type="image/png" />

  <meta property="og:title" content="Главная - Югорский государственный университет" />
  <meta property="og:description " content="ЮГУ - все уровни образования:
    высшее, СПО, ДПО. Топ-20 рейтинга hh.ru. Входит в " Лигу="" вузов"="" Газпрома.="" Базовая="" организация="" Профессионалитет="" -="" ТЭК."="">
  <meta property="og:image" content="images/og-main2023.png" />

  <meta name="sputnik-verification" content="0zyZW3sjUi77ePPg" />

  <meta name="keywords" content="университет, Югра, Ханты-Мансийск" />
  <meta name="description" content="ЮГУ - все уровни образования: высшее, СПО,
    ДПО. Топ-20 рейтинга hh.ru. Входит в " Лигу="" вузов"="" Газпрома.="" Базовая="" организация="" Профессионалитет="" -="" ТЭК."="">
  <script async="" type="text/javascript" src="js/cnt.js"></script>
  <script type="text/javascript" async="" src="js/code.js"></script>
  <script charset="UTF-8" async="" src="init.html"></script>
  <script async="" src="js/tag.js"></script>
  <script type="text/javascript" async="" src="js/ba.js"></script>
  <script type="text/javascript" data-skip-moving="true">
    (function(w, d, n) {
      var cl = "bx-core";
      var ht = d.documentElement;
      var htc = ht ? ht.className : undefined;
      d
      if (htc === undefined || htc.indexOf(cl) !== -1) {
        return;
      }
      var ua = n.userAgent;
      if (/(iPad;)|(iPhone;)/i.test(ua)) {
        cl += " bx-ios";
      } else if (/Windows/i.test(ua)) {
        cl += " bx-win";
      } else if (/Macintosh/i.test(ua)) {
        cl += " bx-mac";
      } else if (/Linux/i.test(ua) && !/Android/i.test(ua)) {
        cl += " bx-linux";
      } else if (/Android/i.test(ua)) {
        cl += " bx-android";
      }
      cl += /(ipad|iphone|android|mobile|touch)/i.test(ua) ?
        " bx-touch" :
        " bx-no-touch";
      cl +=
        w.devicePixelRatio && w.devicePixelRatio >= 2 ?
        " bx-retina" :
        " bx-no-retina";
      var ieVersion = -1;
      if (/AppleWebKit/.test(ua)) {
        cl += " bx-chrome";
      } else if (/Opera/.test(ua)) {
        cl += " bx-opera";
      } else if (/Firefox/.test(ua)) {
        cl += " bx-firefox";
      }
      ht.className = htc ? htc + " " + cl : cl;
    })(window, document, navigator);
  </script>

  <link href="css/page_ac54fec5360ddfc45bb3accfc0e2f9e0_v1.css" type="text/css" rel="stylesheet" />
  <link href="css/template_272c9eb07a9c778c47de9b623c4f52d7_v1.css" type="text/css" data-template-style="true" rel="stylesheet" />

  <!-- Yandex.Metrika counter -->
  <noscript>
    <div>
      <img src="https://mc.yandex.ru/watch/68599984" style="position: absolute; left: -9999px" alt="" />
    </div>
  </noscript>
  <!-- /Yandex.Metrika counter -->

  <!-- Скрипт для отслеживания посетителей Pixel -->
  <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1439458-5ZB0q" style="position: fixed; left: -999px" alt="" />
  </noscript>

  <!-- Roistat Counter Start -->
  <!-- Roistat Counter End -->
  <script type="text/javascript" async="" src="js/openapi.917ca96d9331f956d945e39706791fde.js"></script>
</head>

<body>
  <div id="panel"></div>

  <header>
    <!-- Добавить new-year-head в Новый год только для главной-->

    <!--'start_frame_cache_LkGdQn'-->

    <div class="yugu-multilevel-menu">
      <div class="multilevel-menu-top-panel">
        <!-- <a href="/" class="logo"></a> -->

        <div class="btn-bar">
          <div class="lang">
            <div class="selected-lang ru">RU</div>
            <div class="list-lang">
              <a href="https://en.ugrasu.ru/" class="lang-item">EN</a>
              <a href="https://fr.ugrasu.ru/" class="lang-item">FR</a>
              <a href="https://ar.ugrasu.ru/" class="lang-item">AR</a>
            </div>
          </div>

          <a class="special_v-header" href="/?special_version=Y" rel="nofollow"></a>
          <a href="#" class="search-ico"></a>
          <!-- <a href="https://itport.ugrasu.ru/login" class="cabinet" target="_blank">
                <div class="cabinet-ico"></div>
                <span>Кабинет</span>
            </a> -->
        </div>

        <div class="close-menu"></div>
      </div>

      <div class="categories-box">
        <div class="categories-list">
          <li>
            <a href="/university/" item-index="0" class="root-item">Университет</a>
          </li>

          <li>
            <a href="/enrollee/" item-index="1" class="root-item">Поступающему</a>
          </li>

          <li>
            <a href="/student/" item-index="2" class="root-item">Студенту</a>
          </li>

          <li>
            <a href="/to-employee/" item-index="3" class="root-item">Сотруднику</a>
          </li>

          <li>
            <a href="/aspirantu/" item-index="4" class="root-item">Аспиранту</a>
          </li>
        </div>
      </div>

      <div class="multilevel-menu-list">
        <div id="title-search">
          <form action="/search/index.php">
            <input class="title-search-input" type="text" name="q" value="" size="40" maxlength="80" autocomplete="on" placeholder="Поиск по сайту" />

            <input name="s" type="submit" value="" class="search-btn-menu" />
          </form>
        </div>

        <div class="big-menu-tab" id="big_menu_index_0">
          <li>
            <a href="/university/" class="parent">Университет</a>
            <i class="menu-arrow"></i>

            <ul>
              <li>
                <a href="/university/university/" class="parent">Университет</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Университет">
                  <li>
                    <a href="/university/university/academic-council/">Ученый совет</a>
                  </li>

                  <li>
                    <a href="/university/university/leadership/">Руководство</a>
                  </li>

                  <li>
                    <a href="/university/university/board-of-trustees/">Попечительский совет</a>
                  </li>

                  <li>
                    <a href="https://minobrnauki.gov.ru/">Министерство науки и высшего образования</a>
                  </li>

                  <li>
                    <a href="https://sveden.ugrasu.ru/sveden/common/">Сведения об образовательной организации</a>
                  </li>

                  <li>
                    <a href="/university/university/infrastructure/">Инфраструктура</a>
                  </li>

                  <li>
                    <a href="/university/university/structure/">Структура</a>
                  </li>

                  <li>
                    <a href="/university/university/contacts-and-requisites/">Контакты и реквизиты</a>
                  </li>

                  <li>
                    <a href="/university/university/official-docs/">Официальные документы</a>
                  </li>

                  <li>
                    <a href="/university/university/internet-reception/">Интернет-приемная</a>
                  </li>

                  <li>
                    <a href="/university/university/career/">Карьера в ЮГУ</a>
                  </li>

                  <li>
                    <a href="/university/university/purchases/">Закупки</a>
                  </li>

                  <li>
                    <a href="/university/university/integrated-security/">Комплексная безопасность</a>
                  </li>

                  <li>
                    <a href="/university/university/media/">Медиа</a>
                  </li>

                  <li>
                    <a href="/university/university/sports-complex/">Спортивный комплекс</a>
                  </li>

                  <li>
                    <a href="/university/university/development-program/">Программа развития ЮГУ</a>
                  </li>

                  <li>
                    <a href="/university/university/dissertation-council/">Диссертационный совет</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="/university/partner/" class="parent">Партнеру</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Партнеру"></ul>
              </li>

              <li>
                <a href="/directory/" class="parent">Справочник</a>
              </li>

              <li>
                <a href="/university/education/" class="parent">Образование</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Образование">
                  <li>
                    <a href="/university/education/sve/">Среднее профессиональное образование</a>
                  </li>

                  <li>
                    <a href="/university/education/higher-education/">Высшее образование</a>
                  </li>

                  <li>
                    <a href="/university/education/higher-education/school/">Высшие школы</a>
                  </li>

                  <li>
                    <a href="/university/education/cdo/">Дополнительное образование</a>
                  </li>

                  <li>
                    <a href="/university/education/inclusive-education/">Инклюзивное образование</a>
                  </li>

                  <li>
                    <a href="/university/education/remote-education/">Дистанционное образование</a>
                  </li>

                  <li>
                    <a href="/university/education/education-opportunities/">Индивидуальная образовательная траектория</a>
                  </li>

                  <li>
                    <a href="/university/education/military-training-center/">Военный учебный центр</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="/university/international/" class="parent">International</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="International">
                  <li>
                    <a href="https://www.ugrasu.ru/iafuu">Ассоциация финно-угорских университетов</a>
                  </li>

                  <li>
                    <a href="/university/international/directions-and-contacts/">Направления международной деятельности и контакты</a>
                  </li>

                  <li>
                    <a href="/university/international/foreign-citizens/">Иностранным гражданам</a>
                  </li>

                  <li>
                    <a href="/university/international/international-students-and-staff/">Иностранным студентам и сотрудникам</a>
                  </li>

                  <li>
                    <a href="/university/international/student-yugu/">Студенту ЮГУ</a>
                  </li>

                  <li>
                    <a href="/university/international/foreign-partners/">Зарубежные партнеры</a>
                  </li>

                  <li>
                    <a href="/university/international/international-projects/">Международные проекты</a>
                  </li>

                  <li>
                    <a href="/university/international/written-translations/">Письменные переводы</a>
                  </li>

                  <li>
                    <a href="/university/international/employment-foreign-citizens/">Трудоустройство иностранных граждан</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="/university/science/" class="parent">Наука</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Наука">
                  <li>
                    <a href="/university/science/scientific-schools/">Научные школы</a>
                  </li>

                  <li>
                    <a href="/university/science/scientific-journals/">Научные журналы</a>
                  </li>

                  <li>
                    <a href="/university/science/scientific-events/">Научные мероприятия</a>
                  </li>

                  <li>
                    <a href="/university/science/centre-collective-usage/">Центр коллективного пользования</a>
                  </li>

                  <li>
                    <a href="/university/science/docs/">Документы</a>
                  </li>

                  <li>
                    <a href="/university/science/intellectual-property/">Интеллектуальная собственность</a>
                  </li>

                  <li>
                    <a href="/university/science/scientific-infrastructure/">Научная инфраструктура</a>
                  </li>

                  <li>
                    <a href="/university/science/scientific-projects/">Научные проекты</a>
                  </li>

                  <li>
                    <a href="/university/science/scientific-competitions/active/">Научные конкурсы</a>
                  </li>

                  <li>
                    <a href="/university/science/unesco-chair/">Кафедра ЮНЕСКО</a>
                  </li>

                  <li>
                    <a href="/university/science/expert-control/">Экспортный контроль</a>
                  </li>

                  <li>
                    <a href="/university/science/nauka-i-universitety/">Наука и университеты</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </div>

        <div class="big-menu-tab" id="big_menu_index_1">
          <li>
            <a href="/enrollee/" class="parent">Поступающему</a>
            <i class="menu-arrow"></i>

            <ul>
              <li>
                <a href="/enrollee/docs/" class="parent">Перечень документов</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Перечень документов">
                  <li>
                    <a href="/enrollee/docs/docs-selece-commit/">Нормативные документы приемной комиссии</a>
                  </li>

                  <li>
                    <a href="/enrollee/docs/Info-app-disabilities/">Информация для абитуриентов с ограниченными
                      возможностями здоровья</a>
                  </li>

                  <li>
                    <a href="/enrollee/docs/docs-spo/">Среднее профессиональное образование</a>
                  </li>

                  <li>
                    <a href="/enrollee/docs/undergraduate/">Бакалавриат, Специалитет</a>
                  </li>

                  <li>
                    <a href="/enrollee/docs/docs-master/">Магистратура</a>
                  </li>

                  <li>
                    <a href="/enrollee/docs/graduate-school/">Аспирантура</a>
                  </li>

                  <li>
                    <a href="/enrollee/docs/targeted-training/">Целевое обучение</a>
                  </li>

                  <li>
                    <a href="/enrollee/docs/benefit/">Льгота</a>
                  </li>

                  <li>
                    <a href="/enrollee/docs/foreign-citizens/">Иностранные граждане</a>
                  </li>

                  <li>
                    <a href="/enrollee/docs/submission-documents/">Бланки документов</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="/enrollee/docs/submission-documents/">Бланки заявлений</a>
              </li>

              <li>
                <a href="https://itport.ugrasu.ru/abiturient#/avgScore">Калькулятор среднего балла</a>
              </li>

              <li>
                <a href="/enrollee/order-settlement/" class="parent">Порядок заселения и проживания</a>
              </li>

              <li>
                <a href="/student/student-handbook/payment-method/">Способ оплаты за обучение</a>
              </li>

              <li>
                <a href="/enrollee/calculator-use/">Калькулятор ЕГЭ</a>
              </li>

              <li>
                <a href="/university/education/additional-education/detyam/">Довузовская подготовка</a>
              </li>

              <li>
                <a href="/enrollee/schoolboy/" class="parent">Профориентационные мероприятия</a>

                <ul class="menu-list" data-parent-link="Профориентационные мероприятия"></ul>
              </li>

              <li>
                <a href="/enrollee/shkolnikam/">Олимпиады</a>
              </li>

              <li>
                <a href="/university/education/">Образование</a>

                <ul class="menu-list" data-parent-link="Образование"></ul>
              </li>

              <li>
                <a href="/university/university/infrastructure/">Инфраструктура</a>

                <ul class="menu-list" data-parent-link="Инфраструктура"></ul>
              </li>

              <li>
                <a href="/student/extracurricular-activities/">Внеучебная деятельность</a>

                <ul class="menu-list" data-parent-link="Внеучебная деятельность"></ul>
              </li>

              <li>
                <a href="/enrollee/schoolboy/vysshee-obrazovanie/">График профориентационных мероприятий</a>

                <ul class="menu-list" data-parent-link="График профориентационных мероприятий"></ul>
              </li>

              <li>
                <a href="https://academia.ugrasu.ru/">Дистанционное образование</a>
              </li>

              <li>
                <a href="/enrollee/schoolboy/" class="parent">Профориентационные мероприятия</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Профориентационные мероприятия">
                  <li>
                    <a href="/enrollee/schoolboy/sredneprofessionalnoe-obrazovanie/">Среднепрофессиональное образование</a>
                  </li>

                  <li>
                    <a href="/enrollee/schoolboy/vysshee-obrazovanie/">Высшее образование</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </div>

        <div class="big-menu-tab" id="big_menu_index_2">
          <li>
            <a href="/student/" class="parent">Студенту</a>
            <i class="menu-arrow"></i>

            <ul>
              <li>
                <a href="https://itport.ugrasu.ru/login" class="parent">Личный кабинет студента</a>
              </li>

              <li>
                <a href="/student/ask-question/" class="parent">Задай вопрос</a>
              </li>

              <li>
                <a href="/student/freshman/" class="parent">Первокурснику</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Первокурснику">
                  <li>
                    <a href="/student/freshman/tutor-office/">Тьюторский офис</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="/student/extracurricular-activities/" class="parent">Внеучебная деятельность</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Внеучебная деятельность">
                  <li>
                    <a href="/student/extracurricular-activities/self-management/">Самоуправление</a>
                  </li>

                  <li>
                    <a href="/student/extracurricular-activities/creation/">Творчество</a>
                  </li>

                  <li>
                    <a href="/university/university/sports-complex/">Спорт</a>
                  </li>

                  <li>
                    <a href="/student/extracurricular-activities/psychological-service/">Психологическая служба</a>
                  </li>

                  <li>
                    <a href="/student/extracurricular-activities/volunteering/">Добровольчество</a>
                  </li>

                  <li>
                    <a href="/student/extracurricular-activities/Im-proud/">Студенческий патриотический клуб «Я горжусь»</a>
                  </li>

                  <li>
                    <a href="/student/extracurricular-activities/russian-student-groups/">Российские студенческие отряды</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="/student/student-handbook/" class="parent">Справочник студента</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Справочник студента">
                  <li>
                    <a href="/student/student-handbook/application-forms/">Бланки заявлений</a>
                  </li>

                  <li>
                    <a href="/student/student-handbook/payment-method/">Способ оплаты за обучение</a>
                  </li>

                  <li>
                    <a href="/student/student-handbook/refund/">Возврат денежных средств</a>
                  </li>

                  <li>
                    <a href="/student/student-handbook/beneficiary-students/">Студентам-льготникам</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="/student/scholarships/" class="parent">Стипендия</a>
              </li>

              <li>
                <a href="/student/transition-to-free-education/" class="parent">Переход с платного на бесплатное обучение</a>
              </li>

              <li>
                <a href="/student/residential-complex/" class="parent">Жилой комплекс</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Жилой комплекс">
                  <li>
                    <a href="/student/residential-complex/Infrastructure-and-contacts/">Студенческий городок</a>
                  </li>

                  <li>
                    <a href="/student/residential-complex/order-check-in-residence/">Порядок заселения и проживания</a>
                  </li>

                  <li>
                    <a href="/student/residential-complex/docs/">Документы</a>
                  </li>

                  <li>
                    <a href="/student/residential-complex/contacts/">Контакты</a>
                  </li>

                  <li>
                    <a href="/acquiring/">Онлайн оплата</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="http://lib.ugrasu.ru/" class="parent">Библиотека ЮГУ</a>
              </li>

              <li>
                <a href="/student/career-and-employment/" class="parent">Центр карьеры</a>

                <i class="menu-arrow"></i>

                <ul class="menu-list" data-parent-link="Центр карьеры">
                  <li>
                    <a href="/student/career-and-employment/studentam/">Студентам</a>
                  </li>

                  <li>
                    <a href="/student/career-and-employment/vypusknikam/">Выпускникам</a>
                  </li>

                  <li>
                    <a href="/student/career-and-employment/partneram-i-rabotodatelyam/">Партнерам и работодателям</a>
                  </li>

                  <li>
                    <a href="/student/competence-assessment-center/">Центр оценки компетенции</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="/student/aumni-association/" class="parent">Ассоциация выпускников</a>

                <ul class="menu-list" data-parent-link="Ассоциация выпускников"></ul>
              </li>

              <li>
                <a href="/student/polls/" class="parent">Опросы</a>
              </li>

              <li>
                <a href="/student/kmns/" class="parent">КМНС</a>
              </li>
            </ul>
          </li>
        </div>

        <div class="big-menu-tab" id="big_menu_index_3">
          <li>
            <a href="/to-employee/" class="parent">Сотруднику</a>
            <i class="menu-arrow"></i>

            <ul>
              <li>
                <a href="https://portal.ugrasu.ru/" class="parent">Личный кабинет сотрудника</a>
              </li>

              <li>
                <a href="/to-employee/polls/" class="parent">Опросы</a>
              </li>

              <li>
                <a href="/to-employee/zarplatnaya-karta/">Зарплатная карта</a>
              </li>
            </ul>
          </li>
        </div>

        <div class="big-menu-tab" id="big_menu_index_4">
          <li>
            <a href="/aspirantu/" class="parent">Аспиранту</a>
            <i class="menu-arrow"></i>

            <ul>
              <li>
                <a href="/aspirantu/code-scientific-specialties/">
                  Шифр научных специальностей</a>
              </li>

              <li>
                <a href="/aspirantu/individual-plan/">Индивидуальный план</a>
              </li>

              <li>
                <a href="/aspirantu/education/">Обучение</a>

                <ul class="menu-list" data-parent-link="Обучение"></ul>
              </li>

              <li>
                <a href="/aspirantu/externu/">Экстерну</a>
              </li>

              <li>
                <a href="/aspirantu/support-department/">Отдел сопровождения аттестации научных и
                  научно-педагогических кадров</a>
              </li>

              <li>
                <a href="/aspirantu/paid-training/">Платное обучение</a>
              </li>

              <li>
                <a href="https://portal.ugrasu.ru/">Личный кабинет аспиранта</a>
              </li>
            </ul>
          </li>
        </div>
      </div>
    </div>

    <!--'end_frame_cache_LkGdQn'-->

    <div class="search-show">
      <div class="container">
        <div id="title-search">
          <form action="/search/index.php">
            <input id="title-search-input" type="text" name="q" value="" size="40" maxlength="80" autocomplete="on" placeholder="Поиск по сайту" />

            <input name="s" type="submit" value="" class="search-btn" />

            <div class="close-search-box"></div>
          </form>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="header-top">
        <a href="/directory/" style="
              width: 40px;
              height: 40px;
              display: table;
              position: absolute;
              left: -150px;
            "></a>
        <a href="/" class="logo"></a>
        <!-- Добавить new-year в Новый год -->
        <div class="btn-bar">
          <div class="lang">
            <div class="selected-lang ru">RU</div>
            <div class="list-lang">
              <a href="https://en.ugrasu.ru/" class="lang-item">EN</a>
              <a href="https://fr.ugrasu.ru/" class="lang-item">FR</a>
              <a href="https://ar.ugrasu.ru/" class="lang-item">AR</a>
            </div>
          </div>

          <a class="special_v-header" href="/?special_version=Y" rel="nofollow"></a>
          <a href="#" class="search-ico"></a>
          <!-- <a href="https://itport.ugrasu.ru/login" class="cabinet" target="_blank">
                    <div class="cabinet-ico"></div>
                    <span>Кабинет</span>
                </a> -->

          <!-- <div class="open-modal btn bell-info" data-modal="#modal2"></div> -->
        </div>
      </div>

      <div class="header-content">
        <div class="header-content-info">
          <?php
          $subject = $_SESSION['subject'];

          $sql = "SELECT * FROM subject WHERE name = '$subject'";
          $result = $link->query($sql);
          foreach ($result as $row) {
            $fullname = $row['fullname'];
            $path = $row['path'];
          ?>
            <h1 class="main-title"><?php echo $fullname ?></h1>
          <?php
          }
          ?>


          <div class="header-second-title">
            Навстречу профессиональному будущему!
          </div>

          <div class="header-buttons">
            <!--                         <div data-modal="#modal32" class="open-modal btn btn-green">Поступай правильно</div> -->
            <!-- <a href="https://lka.ugrasu.ru/auth/login" target="_blank" class="btn btn-blue">Подать документы</a> -->
          </div>
        </div>

        <div class="header-content-video">
          <video muted="muted" loop="loop" poster="/local/templates/yugu2021/img/head-img1.jpg" playsinline="" autoplay="autoplay">
            <source src="media/head-img1.mp4" type="video/mp4" />
          </video>
        </div>
      </div>

      <div class="header-bottom">
        <div class="bread">
          <div class="bread-item"><a href="index.php"><span>Главная</span></a><i></i></div>
          <div class="bread-item"> <a href="ITandIKT.php" class="bread-item"><span><?php echo $_SESSION['subject'] ?></span></a><i></i></div>
          <div class="bread-item"> <a href="Variant.php" class="bread-item"><span><?php echo $_SESSION['number'] ?> Вариант</span></a></div>
        </div>
        <!-- <a href="/directory/" class="hbottom-btn btn-directory">
                    <span>Справочник</span>
                </a> -->
      </div>
    </div>

    <div class="back-font"><?php echo $_SESSION['subject'] ?></div>
  </header>


  <div class="container">
    <h2>Вариант <?php echo $_SESSION['number'] ?></h2>
    
    <div><?php if (isset($_SESSION["points"]) && $_SESSION["try_again"] ) {
              echo $_SESSION["points"] . " % / 100%";
            }?> </div>
    <form action="check.php" method='post'>
      <style>
        .menu-cat {
          color: #000 !important;
        }
      </style>
      <?php
      $variant_id = $_SESSION["variant_id"];
      $sql = "SELECT * FROM exercises WHERE variant_id = $variant_id";
      $result = $link->query($sql);
      $counter = 1;
      if (!isset($_SESSION['try_again'])) {
        $_SESSION['try_again'] = false;
      }
      foreach ($result as $row) {
        $id = $row['id'];
        $type = $row['type'];

        $title = $row['title'];
        if ($type == "input") {
      ?>
          <div class="task">
            <div class="menu-cat"><span><?php if (isset($_SESSION["answers"][$id])) {
                                          if ($_SESSION["answers"][$id] == 1) {
                                            echo "✔️ " . $counter . ". ";
                                          } else if ($_SESSION["answers"][$id] == 0) {
                                            echo "❌ " . $counter . ". ";
                                          }
                                        } else {
                                          echo $counter . ". ";
                                        }
                                        ?></span><?php echo $title ?></div>
            <input type = "text" name="<?php echo $id ?>" <?php if (!empty($_SESSION["give_answers"]) and $_SESSION["give_answers"] == true) {
                                              echo " disabled style='color:grey'";
                                            }
                                            if (!empty($_SESSION["data"][$id])) {
                                              echo " value='{$_SESSION['data'][$id]}'";
                                            } ?>>
          </div>
        <?php

        } else if ($type == "variant") {
          $v1 = $row['v1'];
          $v2 = $row['v2'];
          $v3 = $row['v3'];
          $v4 = $row['v4'];
        ?>
          <div class="task">
            <div class="menu-cat"><span><?php if (isset($_SESSION["answers"][$id])) {
                                          if ($_SESSION["answers"][$id] == 1) {
                                            echo "✔️ " . $counter . ". ";
                                          } else if ($_SESSION["answers"][$id] == 0) {
                                            echo "❌ " . $counter . ". ";
                                          }
                                        } else {
                                          echo $counter . ". ";
                                        }
                                        ?></span><?php echo $title ?></div>
            <checkbox class="block-options v1">
              <div>
                <input type="radio" class="radio-btn" name="<?php echo $id ?>" value="1" <?php if (!empty($_SESSION["give_answers"]) and $_SESSION["give_answers"] == true) {
                                                                          echo " disabled";
                                                                        }
                                                                        if (!empty($_SESSION["data"][$id]) and $_SESSION["data"][$id] == 1) {
                                                                          echo " checked";
                                                                        } ?>><?php echo $v1 ?>
              </div>
              <div>
                <input type="radio" class="radio-btn" name="<?php echo $id ?>" value="2" <?php if (!empty($_SESSION["give_answers"]) and $_SESSION["give_answers"] == true) {
                                                                          echo " disabled";
                                                                        }
                                                                        if (!empty($_SESSION["data"][$id]) and $_SESSION["data"][$id] == 2) {
                                                                          echo " checked";
                                                                        } ?>><?php echo $v2 ?>
              </div>
              <div>
                <input type="radio" class="radio-btn" name="<?php echo $id ?>" value="3" <?php if (!empty($_SESSION["give_answers"]) and $_SESSION["give_answers"] == true) {
                                                                          echo " disabled";
                                                                        }
                                                                        if (!empty($_SESSION["data"][$id]) and $_SESSION["data"][$id] == 3) {
                                                                          echo " checked";
                                                                        } ?>><?php echo $v3 ?>
              </div>
              <div>
                <input type="radio" class="radio-btn" name="<?php echo $id ?>" value="4" <?php if (!empty($_SESSION["give_answers"]) and $_SESSION["give_answers"] == true) {
                                                                          echo " disabled";
                                                                        }
                                                                        if (!empty($_SESSION["data"][$id]) and $_SESSION["data"][$id] == 4) {
                                                                          echo " checked";
                                                                        } ?>><?php echo $v4 ?>
              </div>
            </checkbox>
          </div>
        <?php
        } else if ($type == "photo_variant") {
          $img = $row['photo'];
          $v1 = $row['v1'];
          $v2 = $row['v2'];
          $v3 = $row['v3'];
          $v4 = $row['v4'];
        ?>
          <div class="task">
            <div class="menu-cat"><span><?php if (isset($_SESSION["answers"][$id])) {
                                          if ($_SESSION["answers"][$id] == 1) {
                                            echo "✔️ " . $counter . ". ";
                                          } else if ($_SESSION["answers"][$id] == 0) {
                                            echo "❌ " . $counter . ". ";
                                          }
                                        } else {
                                          echo $counter . ". ";
                                        }
                                        ?></span><?php echo $title ?></div>
            <div class="list-variant">
              <checkbox class="block-options">
                <div>
                  <input type="radio" class="radio-btn" name="<?php echo $id ?>" value="1" <?php if (!empty($_SESSION["give_answers"]) and $_SESSION["give_answers"] == true) {
                                                                            echo " disabled";
                                                                          }
                                                                          if (!empty($_SESSION["data"][$id]) and $_SESSION["data"][$id] == 1) {
                                                                            echo " checked";
                                                                          } ?>><?php echo $v1 ?>
                </div>
                <div>
                  <input type="radio" class="radio-btn" name="<?php echo $id ?>" value="2" <?php if (!empty($_SESSION["give_answers"]) and $_SESSION["give_answers"] == true) {
                                                                            echo " disabled";
                                                                          }
                                                                          if (!empty($_SESSION["data"][$id]) and $_SESSION["data"][$id] == 2) {
                                                                            echo " checked";
                                                                          } ?>><?php echo $v2 ?>
                </div>
                <div>
                  <input type="radio" class="radio-btn" name="<?php echo $id ?>" value="3" <?php if (!empty($_SESSION["give_answers"]) and $_SESSION["give_answers"] == true) {
                                                                            echo " disabled";
                                                                          }
                                                                          if (!empty($_SESSION["data"][$id]) and $_SESSION["data"][$id] == 3) {
                                                                            echo " checked";
                                                                          } ?>><?php echo $v3 ?>
                </div>
                <div>
                  <input type="radio" class="radio-btn" name="<?php echo $id ?>" value="4" <?php if (!empty($_SESSION["give_answers"]) and $_SESSION["give_answers"] == true) {
                                                                            echo " disabled";
                                                                          }
                                                                          if (!empty($_SESSION["data"][$id]) and $_SESSION["data"][$id] == 4) {
                                                                            echo " checked";
                                                                          } ?>><?php echo $v4 ?>
                </div>
              </checkbox>
              <div class="block-options">
                <img alt="pictures" src="<?php echo $img ?>">
              </div>
            </div>
          </div>

      <?php
        }

        $counter++;
      }
      ?>
      <div style="display:flex; justify-content:center;"><button type='submit' class="btn"><?php if ($_SESSION["try_again"] == false) {
                                                                                              echo "Проверить";
                                                                                            } else {
                                                                                              echo "Попробовать еще раз";
                                                                                            } ?></button></div>
    </form>
  </div>
  <?php
  $_SESSION["give_answers"] = false;
  $_SESSION["answers"] = [];
  $_SESSION["data"] = [];
  $_SESSION["points"] = 0;
  ?>
  <!-- <div class="task">
            <div class="menu-cat"><span>1.</span> Описание задачи (задача в которой просто ответ в input)</div>
            <input>
          </div>
          <div class="task">
            <div class="menu-cat"><span>2.</span> Описание задачи (с одним вариантом ответа из предложенных)</div>
              <checkbox class="block-options">
              <div>
                              <input type="radio" name="variant" value="Вариант 1">Венгрия
              </div>
              <div>
                              <input type="radio" name="variant" value="Вариант 1">Венгрия
              </div>
              <div>
                              <input type="radio" name="variant" value="Вариант 1">Венгрия
              </div>
              </checkbox>
          </div>
          <div class="task">
            <div class="menu-cat"><span>3.</span> Описание задачи (множество ответов )</div>
            <checkbox class="block-options">
              <div>
                              <input type="checkbox" name="variant" value="Вариант 1">Венгрия
              </div>
              <div>
                              <input type="checkbox" name="variant" value="Вариант 1">Венгрия
              </div>
              <div>
                              <input type="checkbox" name="variant" value="Вариант 1">Венгрия
              </div>
            </checkbox>
          </div>
          <div class="task">
            <div class="menu-cat"><span>4.</span> Описание задачи (соответствие)</div>
            <div class="list-variant">
              <div class="block-options">
                <div class="list-title">Заголовок</div>
                <div >Варианты ответа:</div>
                <div >Варианты ответа:</div>
                <div >Варианты ответа:</div>
                <div >Варианты ответа:</div>
                <div >Варианты ответа:</div>
              </div>
              <div>
                <div class="list-title">Заголовок</div>
                <div >Варианты ответа 2</div>     
                <div >Варианты ответа 2</div>
              </div>
          </div>
            <input>
          </div>
          <div class="task">
            <div class="menu-cat"><span>5.</span> Описание задачи (картинка)</div>
            <div class="list-variant">
              <div class="block-options">
                <div class="list-title">Заголовок</div>
                <div >Варианты ответа:</div>
                <div >Варианты ответа:</div>
                <div >Варианты ответа:</div>
                <div >Варианты ответа:</div>
                <div >Варианты ответа:</div>
              </div>
              <div class="block-options">
                <img alt="pictures" src="images\1ixemwmr2a7rmofl5ib8agonqs5xqolp.jpg">
              </div>
          </div>
            <input>
          </div> -->


  </div>
  </div>
  </div>
  </div>

  <footer>
    <div class="footer-content">
      <div class="container">
        <div class="row">
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 col-xs-12">
            <a href="#" class="foot-logo"></a>

            <div class="foot-soc-network">
              <!-- <a noindex target="_blank" href="https://www.youtube.com/channel/UCx43iULpSe_8zHtW2htXTtw"
                           class="foot-soc-network-item yt"></a> -->
              <!-- <a noindex target="_blank" href="https://www.instagram.com/ugrauniversity/"
                           class="foot-soc-network-item inst"></a> -->
              <a noindex="" target="_blank" href="https://vk.com/ugrasu" class="foot-soc-network-item vk"></a>

              <a noindex="" target="_blank" href="https://t.me/ugrauniversity" class="foot-soc-network-item tgm"></a>
              <!-- <a noindex target="_blank"
                           href="https://www.facebook.com/411987359224732/posts/1223298851426908/?sfnsn=scwspmo"
                           class="foot-soc-network-item fb"></a>
                        <a noindex target="_blank" href="https://twitter.com/UGRAUNIVERSITY"
                           class="foot-soc-network-item twit"></a> -->

              <a noindex="" target="_blank" href="https://ok.ru/group/61478927269974" class="foot-soc-network-item ok"></a>

              <!-- <a noindex target="_blank" href="https://www.tiktok.com/@ugrauniversity"
                           class="foot-soc-network-item tiktok"></a> -->

              <a noindex="" target="_blank" href="https://rutube.ru/channel/23763366/" class="foot-soc-network-item rutube"></a>

              <a noindex="" target="_blank" href="https://zen.yandex.ru/id/6238634cb3552b0cb95d8070" class="foot-soc-network-item dzen"></a>
            </div>
            <div style="font-size: 12px">
              Делитесь новостями об университете с хештегом #ЮГУ
            </div>

            <a href="/sveden/common/" class="link-sveden">Сведения об образовательной организации</a>
          </div>

          <div class="foot-menu-box col-xl-10 col-lg-9 col-md-8 col-sm-12 col-xs-12">
            <div class="foot-contact-box">
              <div class="foot-contact">
                г. Ханты-Мансийск, ул. Чехова, 16
                <br />Канцелярия: тел.: +7 (3467) 377-000 <br />e-mail:
                <a href="mailto:ugrasu@ugrasu.ru">ugrasu@ugrasu.ru</a>
              </div>

              <a href="https://minobrnauki.gov.ru/" target="_blank" class="minobr">
                Министерство науки и высшего образования Российской
                Федерации
              </a>
            </div>

            <div class="foot-menu">
              <div class="block-menu">
                <a href="https://www.ugrasu.ru/university/" class="menu-cat">Университет</a>
              </div>

              <div class="block-menu">
                <a href="https://www.ugrasu.ru/enrollee/" class="menu-cat">Поступающему</a>
              </div>

              <div class="block-menu">
                <a href="https://www.ugrasu.ru/student/" class="menu-cat">Студенту</a>
              </div>

              <div class="block-menu">
                <a href="https://www.ugrasu.ru/to-employee/" class="menu-cat">Сотруднику</a>
              </div>
            </div>

            <div class="section-foot-menu">
              <a href="https://www.ugrasu.ru/university/university/internet-reception/" class="menu-link">
                Обращения граждан
              </a>

              <a href="https://www.ugrasu.ru/forms/information-period-study/" class="menu-link" target="_blank">
                Cправка для отчисленных и выпускников
              </a>

              <a href="https://www.ugrasu.ru/university/university/integrated-security/anti-corruption/" class="menu-link" target="_blank">
                Противодействие коррупции
              </a>
            </div>

            <div class="footer-qr-box">
              <div>
                Ваше мнение формирует официальный рейтинг организации:
              </div>
              <div class="footer-qr"></div>
              <div>
                Анкета доступна по QR-коду, а так же по прямой
                <a href="https://bus.gov.ru/qrcode/rate/456477">ссылке</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-copy">
      <div class="container">
        <span class="copy">© ФГБОУ ВО ЮГУ 2001–2024</span>

        <div class="foot-banners">
          <div class="foot-banners-item">
            <span id="sputnik-informer"></span>
          </div>

          <div class="foot-banners-item">
            <!-- Rating@Mail.ru logo -->
            <a target="_blank" href="http://top.mail.ru/jump?from=1235539">
              <img src="//top-fwz1.mail.ru/counter?id=1235539;t=479;l=1" style="border=: 0" height="31" width="88" alt="Рейтинг@Mail.ru" />
            </a>
            <!-- //Rating@Mail.ru logo -->
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Rating@Mail.ru counter -->
  <noscript>
    <div style="position: absolute; left: -10000px">
      <img src="//top-fwz1.mail.ru/counter?id=1235539;js=na" style="border: 0" height="1" width="1" alt="Рейтинг@Mail.ru" />
    </div>
  </noscript>
</body>

</html>