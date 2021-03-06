<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Airtable Key
    |--------------------------------------------------------------------------
    |
    | This value can be found in your Airtable account page:
    | https://airtable.com/account
    |
     */
    'key' => env('AIRTABLE_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Airtable Base
    |--------------------------------------------------------------------------
    |
    | This value can be found once you click on your Base on the API page:
    | https://airtable.com/api
    | https://airtable.com/[BASE_ID]/api/docs#curl/introduction
    |
     */
    'base' => env('AIRTABLE_BASE'),

    /*
    |--------------------------------------------------------------------------
    | Default Airtable Table
    |--------------------------------------------------------------------------
    |
    | This value can be found on the API docs page:
    | https://airtable.com/[BASE_ID]/api/docs#curl/table:tasks
    | The value will be hilighted at the beginning of each table section.
    | Example:
    | Each record in the `Tasks` contains the following fields
    |
     */
    'default' => 'default',

    'tables' => [

        'default' => [
            'name' => env('AIRTABLE_TABLE'),
        ],

        'course' => [
            'name' => env('AIRTABLE_COURSE_TABLE', 'Курс'),
        ],

        'user' => [
            'name' => env('AIRTABLE_USER_TABLE', 'Пользователь'),
        ],

        'course_set' => [
            'name' => env('AIRTABLE_COURSE_SET_TABLE', 'Постановка курса'),
        ],

        'lesson' => [
            'name' => env('AIRTABLE_LESSON_TABLE', 'Уроки'),
        ],

        'role' => [
            'name' => env('AIRTABLE_ROLE_TABLE', 'Роль'),
        ],

        'channel' => [
            'name' => env('AIRTABLE_CHANNEL_TABLE', 'Каналы'),
        ],

        'user_channel' => [
            'name' => env('AIRTABLE_USER_CHANNEL_TABLE', 'Канал пользователя'),
        ],

        'user_lesson' => [
            'name' => env('AIRTABLE_USER_LESSON_TABLE', 'Уроки_пользователей'),
        ],

        'test' => [
            'name' => env('AIRTABLE_TEST_TABLE', 'Тест'),
        ],

        'answer' => [
            'name' => env('AIRTABLE_ANSWER_TABLE', 'Ответы'),
        ],

    ],

    'log_http' => env('AIRTABLE_LOG_HTTP', false),
    'log_http_format' => env('AIRTABLE_LOG_HTTP_FORMAT', '{request} >>> {res_body}'),

    'typecast' => env('AIRTABLE_TYPECAST', false),
];
