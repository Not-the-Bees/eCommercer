<h1>1. eCommercer v2.0</h1>
<h4>Les nouveautés</h4>
<ul>
    <li>Passage sur <b>Bootstrap 4</b> (dernière version en date)</li>
    <li>Refonte total du <b>backoffice</b> (nouveau template Bootstrap 4)</li>
    <li>Ajout des sous-menu (nav) sur les pages <b>Produits</b> et <b>Interface</b> dans le backoffice</li>
    <li>Optimisation front des sous-pages <b>SlideShow</b> (Interface), <b>Fiche produit</b> et <b>Catégories</b> (Produits)</li>
    <li>Browse des <b>catégories</b> (Page Catégories)(La fonction Editer et la fonction Supprimer ne sont pas encore codées en back)</li>
    <li>Ajout du <b>système d'authentification</b></li>
    <li>Menu changeant en fonction du <b>rôle de l'utilisateur</b> (l'Admin n'a pas la même nav qu'un user lambda) (Les rôles sont définis <b>manuellement</b> pour le moment)</li>
    <li>Ajout d'un <b>widget</b> sur chaque page du site pour l'Admin lui permettant d'avoir accès au menu du backoffice (Icone Engrenage)</li>
    <li>Ajout d'un <b>système de messagerie / chat</b> interne au site (entre plusieurs admin OU entre l'admin et un user lamba (mais il reste a faire le front pour le rôle de user)</li>
    <li>Remise au "propre" de certains dossiers <b>'view'</b>, de quelques <b>controllers</b> ainsi que de quelques <b>routes</b> mais beaucoup de travail la dessus, c'est l'Irak les dossiers la !</li>
</ul>
<h4>Pour essayer le projet</h4>
<ul>
    <li>Cloner le dossier</li>
    <li>Créer une base de donnée MySQL avec le nom eCommercer</li>
    <li>php artisan make:migration</li>
    <li>php artisan db:seed</li>
    <li>Aucune dépendance (je crois)</li> 
</ul>
<h4>Ce qui ne marche plus</h4>
<ul>
    <li>Tous les imports d'image ne fonctionnent plus (SlideShow ET Produits)</li>
</ul>