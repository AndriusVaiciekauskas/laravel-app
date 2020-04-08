@servers(['web' => '192.168.1.1'])

@story('deploy')
    git
    migrate
    composer
    npm_install
    npm_prod
@endstory

@task('git')
    git pull origin master
@endtask

@task(migrate)
    php artisan migrate
@endtask

@task('composer')
    composer install
@endtask

@task('npm_install')
    npm install
@endtask

@task('npm_prod')
    npm run prod
@endtask
