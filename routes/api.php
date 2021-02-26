<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Abilities
    Route::apiResource('abilities', 'AbilitiesController', ['only' => ['index']]);

    // Locales
    Route::get('locales/languages', 'LocalesController@languages')->name('locales.languages');
    Route::get('locales/messages', 'LocalesController@messages')->name('locales.messages');

    // Permissions
    Route::resource('permissions', 'PermissionsApiController');

    // Roles
    Route::resource('roles', 'RolesApiController');

    // Users
    Route::resource('users', 'UsersApiController');

    // Expense Categories
    Route::resource('expense-categories', 'ExpenseCategoryApiController');

    // Income Categories
    Route::resource('income-categories', 'IncomeCategoryApiController');

    // Expenses
    Route::resource('expenses', 'ExpenseApiController');

    // Incomes
    Route::resource('incomes', 'IncomeApiController');

    // Expense Reports
    Route::apiResource('expense-reports', 'ExpenseReportApiController', ['only' => ['index']]);
});
