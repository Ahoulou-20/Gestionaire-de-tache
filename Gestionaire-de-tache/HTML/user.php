<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title>
    <link rel="stylesheet" href="../CSS/user.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

</head>

<body>
    <main>
        <aside class="menu">
            <h1>Menu</h1>
            <nav>
                <h4>Informations</h4>
                <ul class="liste-information">
                    <li>Nombre de tâches <span class="nbr-proj">54</span></li>
                </ul>
                <h4>Dashboard</h4>
                <ul class="liste-prj">
                    <li style="background-color:#44bba4" class="lien-accueil"><a href="#accueil"
                            class="lien">Accueil</a><i class="las la-home"></i></li>
                    <li style="" class="lien-taches"><a href="#taches" class="lien">Tâches</a><i
                            class="las la-pencil-alt"></i></li>
                </ul>
                <a class="deconnexion" href="#">Déconnexion <i class="las la-sign-out-alt"></i></a>
            </nav>
            <p class="cpr citation"><i class="las la-copyright"></i>2024 GesTâches - Tous droits réservés</p>
        </aside>
        <section class="principale">
            <header>
                <h2 id="champsCourant">ACCUEIL</h2>
                <figure>
                    <img src="../images/mise-en-forme/img-1.png" alt="votre photo">
                    <figcaption>Ahoulou</figcaption>
                </figure>

            </header>
            <section id="accueil" style="">
                <article class="acc-1">
                    <img src="../images/mise-en-forme/img-2.jpg" alt="quelqu'un qui liste ses tâches">
                    <div class="text">
                        <h2>Pêt à conquerir votre journée ?</h2>
                        <p>Chaque tâche accomplie est un pas de plus en plus vers vos objectifs. <br>
                            Organisez, priorisez et réalisez avec efficacité. Bonne gestion !
                        </p>
                    </div>
                </article>

                <!-- Apperçu tâches -->
                </article>
                <h1>Apperçu des Tâches</h1>
                <article class="acc-2">
                    <div class="prj-container">
                        <div class="prj-elem">
                            <div class="prj-desc">
                                Bonjour comment vas-tu j'ai faim et je veux manger du pouletBonjour comment vas-tu j'ai
                                faim et je veux manger du pouletBonjour comment vas-tu j'ai faim et je veux manger du
                                poulet
                            </div>
                            <div class="prj-info">
                                <h4>Nom</h4>
                                <h4>Date</h4>
                                <h4>Etat</h4>
                            </div>
                        </div>
                        <div class="prj-elem">
                            <div class="prj-desc">
                                Bonjour comment vas-tu j'ai faim et je veux manger du pouletBonjour comment vas-tu j'ai
                                faim et je veux manger du pouletBonjour comment vas-tu j'ai faim et je veux manger du
                                poulet
                            </div>
                            <div class="prj-info">
                                <h4>Nom</h4>
                                <h4>Date</h4>
                                <h4>Etat</h4>
                            </div>
                        </div>
                        <div class="prj-elem">
                            <div class="prj-desc">
                                Bonjour comment vas-tu j'ai faim et je veux manger du pouletBonjour comment vas-tu j'ai
                                faim et je veux manger du pouletBonjour comment vas-tu j'ai faim et je veux manger du
                                poulet
                            </div>
                            <div class="prj-info">
                                <h4>Nom</h4>
                                <h4>Date</h4>
                                <h4>Etat</h4>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <!-- Partie Tâches -->

            <section id="tache" style="display:none">
                <div class="projet-text">
                    <figure>
                        <figcaption>Ici, vous pouvez consulter toutes vos tâches en cours, en attente, et terminées.
                            Gardez un œil sur vos progrès et restez organisé pour atteindre vos objectifs. Bonne
                            gestion et bonne journée !
                            <span class="logo">...!!!</span>
                        </figcaption>

                        <img src="../images/mise-en-forme/img-3.jpg" alt="">
                    </figure>
                </div>
                <div id="projet-search">
                    <label for="search">faire une recherche</label>
                    <div class="input-elem">
                        <input type="text" name="search" id="search" placeholder="exemple: monProjet1">
                        <i class="las la-search"></i>
                    </div>
                </div>
                <p>ou</p>
                <div id="projet-filter">
                    <p>Filtrer par </p>
                    <div class="projet-filter-choice">
                        <input type="radio" name="en-cours" id="en-cours">
                        <label for="en-cours">en attente</label>
                        <input type="radio" name="termine" id="termine">
                        <label for="termine">terminée</label>
                    </div>
                    <i class="las la-list-ul"></i>

                </div>
                <h1>Mes tâches <a href="ajouter.php"><i class="las la-plus-circle"></i></a></h1>
                <article class="prj-1">
                    <table class="box-shadow">
                        <thead>
                            <tr>
                                <th class="nom">Noms</th>
                                <th class="desc">Descriptions</th>
                                <th class="date">Dates</th>
                                <th class="date">heures</th>
                                <th class="etat">Statuts</th>
                                <th class="etat">modifier</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="nom">maTache</td>
                                <td class="desc">Cendre allo</td>
                                <td class="date">12-02-2009</td>
                                <td class="date">10h</td>
                                <td class="etat">En cours</td>
                                <td class="etat"><a href=""><i class="las la-edit"></i></a>
                                    <a href=""><i class="las la-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </article>
            </section>
        </section>
    </main>


    <script src="../JS/user.js"></script>
</body>

</html>