call init.bat
php app/console generate:doctrine:crud --entity=BibliothequeBundle:Livre --format=yml --with-write --no-interaction
php app/console generate:doctrine:crud --entity=BibliothequeBundle:Faculte --format=yml --with-write --no-interaction
php app/console generate:doctrine:crud --entity=BibliothequeBundle:Cycle --format=yml --with-write --no-interaction
php app/console generate:doctrine:crud --entity=BibliothequeBundle:Exemplaire --format=yml --with-write --no-interaction
php app/console generate:doctrine:crud --entity=BibliothequeBundle:Emprunt --format=yml --with-write --no-interaction
php app/console generate:doctrine:crud --entity=BibliothequeBundle:Membre --format=yml --with-write --no-interaction
php app/console generate:doctrine:crud --entity=BibliothequeBundle:Reservation --format=yml --with-write --no-interaction
php app/console generate:doctrine:crud --entity=BibliothequeBundle:Theme --format=yml --with-write --no-interaction
php app/console generate:doctrine:crud --entity=BibliothequeBundle:Auteur --format=yml --with-write --no-interaction
pause