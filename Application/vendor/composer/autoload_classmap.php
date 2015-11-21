<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Abstracts\\Validation' => $baseDir . '/Website/Abstracts/Validation.php',
    'BaseControllers\\Webrising' => $baseDir . '/Website/BaseControllers/Webrising.php',
    'CoreApp\\Admin\\BaseControllers\\Admin' => $baseDir . '/Website/CoreApp/Admin/BaseControllers/Admin.php',
    'CoreApp\\Admin\\Controllers\\Home' => $baseDir . '/Website/CoreApp/Admin/Controllers/Home.php',
    'CoreApp\\Admin\\Filters\\Admin' => $baseDir . '/Website/CoreApp/Admin/Filters/Admin.php',
    'CoreApp\\Admin\\Models\\Admin' => $baseDir . '/Website/CoreApp/Admin/Models/Admin.php',
    'CoreApp\\Admin\\Validations\\Admin' => $baseDir . '/Website/CoreApp/Admin/Validations/Admin.php',
    'CoreApp\\Authentication\\Controllers\\Login' => $baseDir . '/Website/CoreApp/Authentication/Controllers/Login.php',
    'CoreApp\\Authentication\\Controllers\\ProcessLogin' => $baseDir . '/Website/CoreApp/Authentication/Controllers/ProcessLogin.php',
    'CoreApp\\Authentication\\Models\\Authentication' => $baseDir . '/Website/CoreApp/Authentication/Models/Authentication.php',
    'CoreApp\\Authentication\\Models\\AuthenticationUserType' => $baseDir . '/Website/CoreApp/Authentication/Models/AuthenticationUserType.php',
    'CoreApp\\Authentication\\Validations\\Authentication' => $baseDir . '/Website/CoreApp/Authentication/Validations/Authentication.php',
    'CoreApp\\Website\\Controllers\\Admin\\JournalAll' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/JournalAll.php',
    'CoreApp\\Website\\Controllers\\Admin\\JournalCategory' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/JournalCategory.php',
    'CoreApp\\Website\\Controllers\\Admin\\JournalCreate' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/JournalCreate.php',
    'CoreApp\\Website\\Controllers\\Admin\\JournalDelete' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/JournalDelete.php',
    'CoreApp\\Website\\Controllers\\Admin\\JournalTag' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/JournalTag.php',
    'CoreApp\\Website\\Controllers\\Admin\\JournalUpdate' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/JournalUpdate.php',
    'CoreApp\\Website\\Controllers\\Admin\\MetaPages' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/MetaPages.php',
    'CoreApp\\Website\\Controllers\\Admin\\Movie\\MovieAll' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Movie/MovieAll.php',
    'CoreApp\\Website\\Controllers\\Admin\\Movie\\MovieComments' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Movie/MovieComments.php',
    'CoreApp\\Website\\Controllers\\Admin\\Movie\\MovieCreate' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Movie/MovieCreate.php',
    'CoreApp\\Website\\Controllers\\Admin\\Movie\\MovieDelete' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Movie/MovieDelete.php',
    'CoreApp\\Website\\Controllers\\Admin\\Movie\\MovieDropzoneDelete' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Movie/MovieDropzoneDelete.php',
    'CoreApp\\Website\\Controllers\\Admin\\Movie\\MovieUpdate' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Movie/MovieUpdate.php',
    'CoreApp\\Website\\Controllers\\Admin\\Photo\\All' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Photo/All.php',
    'CoreApp\\Website\\Controllers\\Admin\\Photo\\Create' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Photo/Create.php',
    'CoreApp\\Website\\Controllers\\Admin\\Photo\\Delete' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Photo/Delete.php',
    'CoreApp\\Website\\Controllers\\Admin\\Photo\\Update' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Photo/Update.php',
    'CoreApp\\Website\\Controllers\\Admin\\Redactor' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/Redactor.php',
    'CoreApp\\Website\\Controllers\\Frontend\\Home' => $baseDir . '/Website/CoreApp/Website/Controllers/Frontend/Home.php',
    'CoreApp\\Website\\Controllers\\Frontend\\Journal' => $baseDir . '/Website/CoreApp/Website/Controllers/Frontend/Journal.php',
    'CoreApp\\Website\\Controllers\\Frontend\\Movie' => $baseDir . '/Website/CoreApp/Website/Controllers/Frontend/Movie.php',
    'CoreApp\\Website\\Controllers\\Frontend\\PhotoGallery' => $baseDir . '/Website/CoreApp/Website/Controllers/Frontend/PhotoGallery.php',
    'CoreApp\\Website\\Models\\JournalCategory' => $baseDir . '/Website/CoreApp/Website/Models/JournalCategory.php',
    'CoreApp\\Website\\Models\\JournalPostCategory' => $baseDir . '/Website/CoreApp/Website/Models/JournalPostCategory.php',
    'CoreApp\\Website\\Models\\JournalPostTag' => $baseDir . '/Website/CoreApp/Website/Models/JournalPostTag.php',
    'CoreApp\\Website\\Models\\JournalTag' => $baseDir . '/Website/CoreApp/Website/Models/JournalTag.php',
    'CoreApp\\Website\\Models\\MetaPages' => $baseDir . '/Website/CoreApp/Website/Models/MetaPages.php',
    'CoreApp\\Website\\Models\\Movie\\MovieCategories' => $baseDir . '/Website/CoreApp/Website/Models/Movie/MovieCategories.php',
    'CoreApp\\Website\\Models\\Movie\\MovieCategory' => $baseDir . '/Website/CoreApp/Website/Models/Movie/MovieCategory.php',
    'CoreApp\\Website\\Models\\Movie\\MovieComments' => $baseDir . '/Website/CoreApp/Website/Models/Movie/MovieComments.php',
    'CoreApp\\Website\\Models\\Movie\\MovieTag' => $baseDir . '/Website/CoreApp/Website/Models/Movie/MovieTag.php',
    'CoreApp\\Website\\Models\\Movie\\MovieTags' => $baseDir . '/Website/CoreApp/Website/Models/Movie/MovieTags.php',
    'CoreApp\\Website\\Models\\Movie\\Movies' => $baseDir . '/Website/CoreApp/Website/Models/Movie/Movies.php',
    'CoreApp\\Website\\Models\\Photo\\Photos' => $baseDir . '/Website/CoreApp/Website/Models/Photo/Photos.php',
    'CoreApp\\Website\\Models\\UserIp' => $baseDir . '/Website/CoreApp/Website/Models/UserIp.php',
    'CoreApp\\Website\\Models\\UserIpSpank' => $baseDir . '/Website/CoreApp/Website/Models/UserIpSpank.php',
    'CoreApp\\Website\\Models\\WebsiteJournal' => $baseDir . '/Website/CoreApp/Website/Models/WebsiteJournal.php',
    'CoreApp\\Website\\Validations\\Contact' => $baseDir . '/Website/CoreApp/Website/Validations/Contact.php',
    'CoreApp\\Website\\Validations\\Journal' => $baseDir . '/Website/CoreApp/Website/Validations/Journal.php',
    'CoreApp\\Website\\Validations\\Meta' => $baseDir . '/Website/CoreApp/Website/Validations/Meta.php',
    'CoreApp\\Website\\Validations\\Movie' => $baseDir . '/Website/CoreApp/Website/Validations/Movie.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'ExampleTest' => $baseDir . '/app/tests/ExampleTest.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'SpankWire' => $baseDir . '/Website/CoreApp/Website/Controllers/Admin/SpankWire.php',
    'SystemTools\\Binds' => $baseDir . '/Website/SystemTools/Binds.php',
    'SystemTools\\Filters' => $baseDir . '/Website/SystemTools/Filters.php',
    'SystemTools\\MailHelper' => $baseDir . '/Website/SystemTools/MailHelper.php',
    'SystemTools\\Router' => $baseDir . '/Website/SystemTools/Router.php',
    'SystemTools\\Tools' => $baseDir . '/Website/SystemTools/Tools.php',
    'SystemTools\\UserSession' => $baseDir . '/Website/SystemTools/UserSession.php',
    'SystemTools\\WebsiteLanguage' => $baseDir . '/Website/SystemTools/WebsiteLanguage.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'null' => $baseDir . '/Website/Templates/Backend/main.blade.php',
    'simple_html_dom' => $baseDir . '/Website/SystemTools/Html_dom.php',
    'simple_html_dom_node' => $baseDir . '/Website/SystemTools/Html_dom.php',
);
