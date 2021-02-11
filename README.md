**To get the project up and running, Pls Do the following After Cloning:**

- RUN `composer install`

- RUN `npm install`

- RUN `cp .env.example .env` 
or duplicate the `.env.example` file and name the duplicated one `.env`

    - Set up DB connection in .env
    - Provide your algolia credentials(ALGOLIA_APP_ID, ALGOLIA_SECRET, MIX_ALGOLIA_APP_ID, MIX_ALGOLIA_SEARCH)

- RUN `php artisan key:generate`

- RUN `php artisan migrate --seed`

- RUN `php artisan serve` _(To start the application)_

