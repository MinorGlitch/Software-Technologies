Setup instructions for the blogs:

!! The steps for preparing the calculators are pretty much the same, just skip the database part in the instructions.

PHP and Symfony:

1. Pull the project.

2. Start your MySQL Server from XAMPP or standalone.

3. Go to the root of the project and open a Command prompt / PowerShell window.

4. Execute “php composer.phar install” to restore its Composer dependencies.

5. Create the database with “php bin/console doctrine:database:create --if-not-exists” command.

6. All done!

JavaScript and Node.js

1. Pull the project.

2. Go to the root of the project and open a Command prompt / PowerShell window.
3. Start your MongoDB instance with the “mongod.exe --dbpath path/to/dbdir” command.

4. Run “npm install” to resolve its Node.js dependencies which are described in the package.json file.

5. All done!

