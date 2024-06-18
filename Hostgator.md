### Guide to Upload Release to Hostgator Via Cpanel

## Get Started
1. go to https://www.hostgator.com/my-account/login
2. Login using gmail and password
3. Navigate to Site Cpanel

## Preparaing Release and Uploading Release
1. Before you do anything follow the Release Check procedure to verify that the release is working.
2. Go to the directory of the release and compress everything but the public folder and name it ``` frameworks ```.
3. Compress the public folder separately and name it ``` public ```.
4. Go to cpanel navigate into the ``` File Manager ``` then to ``` public_html ```.
5. Upload and Extract ``` frameworks ``` into the ```framworks``` folder of the hosting.
6. Upload and Extract ``` public ``` into the root of the ```public_html ``` make sure to delete the public folder.
7. Open the ``` index.html ``` and make sure the content is like thiis.
   ``` <?php

    use Illuminate\Http\Request;

    define('LARAVEL_START', microtime(true));

    // Determine if the application is in maintenance mode...
    if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
        require $maintenance;
    }

    // Register the Composer autoloader...
    require __DIR__.'/frameworks/vendor/autoload.php';

    // Bootstrap Laravel and handle the request...
    (require_once __DIR__.'/frameworks/bootstrap/app.php')
        ->handleRequest(Request::capture()); ```

8. Modify the .env content and setup the database credentials (PM Ariez) for this.
9. After that go to this link https://aadsoftware-services.com/generatelink, this will generate sym link for the storage.
10. Test if the website is loading.




