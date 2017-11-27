<?php declare(strict_types = 1);
/**
 * Bootstrap the App
 */
$app = new \App\SparkPlug\Application(realpath(__DIR__.'/../'));

/**
 * Declare Singletons
 */
$app->singleton(\App\SparkPlug\Routing\Router::class);
$app->singleton(\App\SparkPlug\Config::class);
$app->singleton(\App\SparkPlug\Session::class);

switch (config('database.default')) {
    case 'sqlite':
        $dbImplementation = \App\SparkPlug\Database\SqliteDB::class;
        break;

    default:
        throw new Exception("DB Driver for DB ".config('database.default')." not implemented");
}

$app->bind(\App\SparkPlug\Database\DBAccessInterface::class, $dbImplementation);

/**
 * Load Routes
 */
$app->loadRoutes();

/**
 * Set Default Timezone based on config
 */
if (!date_default_timezone_set(config('app.timezone'))) {
    // Fallback if Config is invalid
    date_default_timezone_set(DateTimeZone::listIdentifiers(DateTimeZone::UTC)[0]);
}

return $app;
