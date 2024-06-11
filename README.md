### Mail AAD Website built in Laravel

## Get Started
1. Clone this repository.
2. Do ``` composer install```.
3. Do ``` npm install ```.
4. Configure the .env for database and smtp.
5. Do the migration
6. ``` php artisan serve ```

## Release check
1. Download the Release build (zip).
2. Extract it in your computer to any folder of your choosing.
3. Open it in VSCode or any code editor of your choice.
4. run ``` composer install```.
5. run ``` npm install ```.
6. Copy env ``` cp .env.example .env```
7. Fill in the database section of the .env as follows
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=aad
    DB_USERNAME=root
    DB_PASSWORD=
8. Make sure you have a mysql installed you can install XAMPP for local testing
9. Execute the migration using ``` php artisan migrate:fresh```
10. Generate App key by executing ``` php artisan key:generate```

## Contributors
1. Clone this repository.
2. PR needs to have an issue attached to it, if not the branch should be named ```hotfix/no-ref/<name>``` otherwise it would be ```hotfix/issue-000```.
3. Go PR for change request.
4. Have at least 1 Reviewer review the changes.
5. When approved merge it.
6. Check in production that the changes works and revert if there is an issue.

## For issues
1. Create issue.
2. Put description, and if possible attached screenshot and instruction to recreate the issue.
3. If you can fix the issue create a PR and proceed to follow the contributors guide.
