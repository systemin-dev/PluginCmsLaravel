## License

This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for details.

Require projet laravel / breeze 


Lancer la commande : 
composer require systemin/plugincmslaravel
php artisan migrate
php artisan plugin-cms:seed
npm i bootstrap-icons
mkdir public/assets 
cp -r vendor/lilian/plugincmslaravel/assets/cms public/assets

dans le modele app/Models/User.php : 

use Lilian\PluginCmsLaravel\Traits\UserTrait; // Importation du trait

class User extends Authenticatable
{
    use UserTrait; // Inclusion du trait

    et dans le fillable: 
        'role_id',
        'avatar',
        'bio',

    // Le reste de ton modèle User
}

dans config/app.php, ajouter

    'langages' => ['fr', 'en'],

dans resources/css/app.css, 

@import '../../vendor/lilian/plugincmslaravel/resources/css/main.css' ;
