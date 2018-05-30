# laravel5

# Tinker with the Data in Your Laravel Apps with Php Artisan Tinker
php artisan tinker<br/>  

# check the database for users
App\User::all();<br/>  

# To get the total number of users in our database
App\User::count();<br/>  

# Creating a New User
$user = new App\User;  
$user->name = "Wruce Bayne";     
$user->email = "iambatman@savegotham.com";  
$user->save();  

# Deleting a User
$user = App\User::find(1);  
$user->delete();  
