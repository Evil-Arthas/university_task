<?php

if ($_COOKIE['language'] === 'ru') {
    $MESS['HELP_INFO'] = 'Если у вас возникнут вопросы связанные с использование веб приложения, пожалуйста обратитесь на кафедру Компьютерные науки и информационные
            технологии Харьковского Национального Университета Имени О. М. Бекетова';
    $MESS['DEVELOPED'] = 'Данное веб приложение разработано студентами 5-го курса кафедры компьютерные науки и информационные
            технологии в 2021 году';
} elseif ($_COOKIE['language'] === 'eng') {
    $MESS['HELP_INFO'] = 'If you have any questions related to the use of the web application, please contact the Department of Computer Science and Information
            technologies of the Kharkiv National University named after O.M. Beketov';
    $MESS['DEVELOPED'] = 'This web application was developed by 5th year students of the Department of Computer Science and Information
            technologies in 2021';
} else {
    $MESS['HELP_INFO'] = "Якщо у вас виникнуть питання пов'язані з використання веб додатку, будь ласка зверніться на кафедру Комп'ютерні науки та інформаційні
            технології Харківського Національного Університету Імені О. М. Бекетова";
    $MESS['DEVELOPED'] = 'Данний веб додаток розроблено студентами 5-го курсу кафедри компютерні науки та інформаційні
            технології в 2021 році';
}