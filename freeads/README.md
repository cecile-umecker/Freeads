<h1>FreeAds</h1>
<p>Developer: Cécile UMECKER</p>

<p>INTRODUCTION </br>
Le but de ce projet est de faire un site de petites annonces en utilisant le Framework Laravel.
Lisez bien la documentation de Laravel, ce sera votre meilleur outil durant ce projet 
</br></br>
JOUR 01 </br>
1. Installer«Lavarel»:https://laravel.com/docs/8.x/installation </br>
2. Créerunenouvelleapplicationnommée«freeads»àlaracinedevotredossierweb.
   Tout ce qui sera effectué par la suite se fera dans ce dossier.
   

3. Lancerleserveurdedéveloppementavec«artisan»etaccéderàl’applicationsurlenavigateurpour voir si Laravel est bien installé.
4. Créerunepaged’accueil.
   a. Créerunevuenommée«index.php»quicontientlastructureHTMLdebase. b. Créeruncontrôleurnommé«IndexController».
   i. Ajouteruneméthode«showIndex»quiappellevotrevue.
5. Créerlaroutepermettantd’accéderàlapaged’accueil.
6. Fairedestests,parexempleildoitêtrepossibled’accéderàl’URLhttp://localhost:3000.
   Une route existe déjà de base, la supprimer pour la remplacer par la vôtre. </br>
   
   JOUR 02 </br>
1. Créeruneressource«Utilisateur»enutilisant«artisan»pourgénérerlesfichiers.
2. Créerunformulaired’inscription.
   a. Envoyerunmaildeconfirmationpouractiverlecompteutilisateur.
3. Créerunformulairedeconnexion(Cf.documentation,partie«Authentification»).
4. CréerunCRUDpourmodifierlesinformationsutilisateurs.
   Par exemple : mail, mot de passe, etc. . .
5. Fairedestests </br>
   

JOUR 03</br>
1. Créerlemodèle«Annonce»ainsiquesoncontrôleur. a. Uneannonceestcomposéeaumoinsde:
   • Untitre
   • Unedescription
   • Unephotographie • Unprix
2. Créerleformulairedecréationd’annonce.
3. Créerunepagequivalistertouteslesannonces.
4. Faireensortedepouvoirmodifieretsupprimersespropresannonces.
5. Faireensortequ’ilsoitpossibled’avoirplusieursphotographiedansuneannonce. 6. Tester.
   </br>
   JOUR 04 </br>
   
1. Compléterlesressources«Annonces»et«Utilisateurs»afind’ajouter:
   a. Larecherched’annonces.
   b. Lefiltraged’annoncesparcritères.
   c. Lalistedesannoncespubliées.
   d. Lalistedesannonceslesplusrécentes.
   e. Lalistedesannonceslesplusintéressantes(matching).

2. Tester encore
   </br>
   
   JOUER 05
   </br>
1. Créerlaressource«Message».
2. Créerunepaged’envoietunepagederéception.
3. Indiquerlenombredenouveauxmessagesreçusdanslemenu.
   4
</p>
