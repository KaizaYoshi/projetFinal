<?php require "models/displayPokemon.php";
$attaques = array("-", "\u00c0 la Queue", "Abattage", "Ab\u00eeme", "Aboiement", "Abri", "Acidarmure", "Acide", "Acide Malique", "Acrobatie", "Acupression", "Aegis Maxima", "A\u00e9roblast", "A\u00e9ropique", "Affilage", "Aff\u00fbtage", "Aiguisage", "Aile d Acier", "Air Veinard", "Aire de Feu", "Aire d Eau", "Aire d Herbe", "All\u00e8gement", "Amass Sable", "Amn\u00e9sie", "Ampleur", "Ancrage", "Anneau Hydro", "Anti-Air", "Anti-Brume", "Anti-Soin", "Appel Attaque", "Appel D\u00e9fense", "Appel Soins", "Apr\u00e8s Vous", "Aqua-Br\u00e8che", "Aqua-Jet", "Aria de l \u00c9cume", "Armure", "Aromath\u00e9rapie", "Arrogance", "Assistance", "Assurance", "Astuce Force", "Atout", "Atterrissage", "Attraction", "Attrition", "Aurasph\u00e8re", "Aurore", "Avalanche", "Avale", "Babil", "B\u00e2illement", "Bain de Smog", "Balance", "Balayage", "Balayette", "Ball Brume", "Balle Graine", "Ball Glace", "Ball M\u00e9t\u00e9o", "Ball Ombre", "Ballon Br\u00fblant", "Bang Sonique", "Barrage", "Baston", "Bec Vrille", "Bec-Canon", "B\u00e9lier", "Berceuse", "Big Splash", "Blabla Dodo", "Blizzard", "Blocage", "Blockhaus", "Bluff", "Bombaimant", "Bomb-Beurk", "Bombe Acide", "Bomb \u0152uf", "Boost", "Botte Sucrette", "Bouclier", "Bouclier Royal", "Boue-Bombe", "Boul Armure", "Boule \u00c9lek", "Boule Pollen", "Boule Roc", "Bourdon", "Boutefeu", "Branchicrok", "Brouhaha", "Brouillard", "Brume", "Brume Capiteuse", "Bu\u00e9e Noire", "Bulldoboule", "Bulles d O", "Caboche-Kaboum", "Cadeau", "Cage-\u00c9clair", "Calcination", "C\u00e2linerie", "Camaraderie", "Camouflage", "Canicule", "Canon Dynamax", "Canon Floral", "Canon Graine", "Carapi\u00e8ge", "Carnareket", "Cascade", "Casse-Brique", "Cauchemar", "Cavalerie Lourde", "C\u00e9l\u00e9bration", "Centrifugifle", "Champ Brumeux", "Champ \u00c9lectrifi\u00e9", "Champ Herbu", "Champ Psychique", "Change \u00c9clair", "Change-C\u00f4t\u00e9", "Chant Antique", "Chant Canon", "Charge", "Charge Foudre", "Charge-Os", "Chargeur", "Charme", "Ch\u00e2timent", "Chatouille", "Chgt Vitesse", "Choc \u00c9motionnel", "Choc Mental", "Choc M\u00e9t\u00e9ore", "Choc Psy", "Choc Venin", "Chute Glace", "Chute Libre", "Clairvoyance", "Claquoir", "Clepto-M\u00e2nes", "Clonage", "Close Combat", "Cogne", "Cognobidon", "Col\u00e8re", "Combo-Griffe", "Confidence", "Constriction", "Contre", "Conversion", "Conversion 2", "Copie", "Copie-Type", "Coquilame", "Corps Perdu", "Cotogarde", "Coud Boue", "Coud Kr\u00e2ne", "Coup Bas", "Coup d Boule", "Coup d Jus", "Coup d Main", "Coup Double", "Coup Varia-Type", "Coup Victoire", "Coup-Croix", "Coupe", "Coupe Psycho", "Coupe-Vent", "Cradovague", "Cr\u00e8vec\u0153ur", "Croc de Mort", "Croc Fatal", "Crochet Venin", "Croco Larme", "Crocs \u00c9clair", "Crocs Feu", "Crocs Givre", "Croissance", "Croque Fort", "Cru-Aile", "Cyclone", "Damocl\u00e8s", "Danse Draco", "Danse du Feu", "Danse \u00c9veil", "Danse Flamme", "Danse Pluie", "Danse-Fleur", "Danse-Folle", "Danse-Lames", "Danse-Lune", "Danse-Plume", "Dard Mortel", "Dard-Nu\u00e9e", "Dard-Venin", "Dark Lariat", "D\u00e9flagration", "D\u00e9gommage", "D\u00e9lugePlasmique", "Demi-Tour", "D\u00e9pit", "Dernier Mot", "Dernier Recours", "Destruction", "D\u00e9tection", "D\u00e9trempage", "D\u00e9tricanon", "D\u00e9tritus", "D\u00e9vor\u00eave", "Direct Toxik", "Distorsion", "Don Naturel", "Double Baffe", "Double Pied", "Double-Dard", "Doux Baiser", "Doux Parfum", "Dracacophonie", "Draco Ascension", "Draco M\u00e9t\u00e9ore", "Dracocharge", "Dracochoc", "Draco-Fl\u00e8ches", "Dracogriffe", "Draco-Marteau", "Draco-Queue", "Draco-Rage", "Dracosouffle", "Dynamopoing", "\u00c9boulement", "\u00c9bullilave", "\u00c9bullition", "\u00c9change", "\u00c9change Psy", "\u00c9cho", "\u00c9clair", "\u00c9clair Croix", "\u00c9clair Fou", "\u00c9clair Gel\u00e9", "\u00c9clat Magique", "\u00c9clate Griffe", "\u00c9clate-Roc", "\u00c9clats Glace", "E-Coque", "\u00c9co-Sph\u00e8re", "\u00c9crasement", "\u00c9cras Face", "\u00c9crous d Poing", "\u00c9cume", "Effort", "\u00c9l\u00e9canon", "\u00c9lectacle", "\u00c9lectrikipik", "\u00c9lectrisation", "Embargo", "Empal Korne", "Encore", "Encornebois", "Engrenage", "Enroulement", "Entrave", "\u00c8re Glaciaire", "\u00c9ructation", "\u00c9ruption", "Escalade", "Escarmouche", "Essorage", "Estocorne", "\u00c9tincelle", "\u00c9tonnement", "\u00c9treinte", "\u00c9trennes", "Ex\u00e9cu-Son", "Exploforce", "Explonuit", "Explosion", "Extrasenseur", "Exuviation", "Fa\u00e7ade", "Fatal-Foudre", "Faux-Chage", "Feinte", "Fertilisation", "Feu d Enfer", "Feu Ensorcel\u00e9", "Feu Follet", "Feu Glac\u00e9", "Feu Sacr\u00e9", "Feuillage", "Feuille Magik", "Fil Toxique", "Flair", "Flamme Bleue", "Flamme Croix", "Flamme Ultime", "Flamm\u00e8che", "Flash", "Flatterie", "Fl\u00e9au", "Flying Press", "Fontaine de Vie", "Force", "Force Ajout\u00e9e", "Force Cach\u00e9e", "Force Chtonienne", "Force Cosmik", "Force G", "Force Poigne", "Force-Nature", "Forte-Paume", "Fouet de Feu", "Fouet Lianes", "Fourbette", "Fracass T\u00eate", "Frappe Atlas", "Frappe Psy", "Fr\u00e9n\u00e9sie", "Frotte-Frimousse", "Frustration", "Fulmifer", "Fulmigraine", "Furie", "Furie Dimension", "Furie-Bond", "Garde Florale", "Garde Large", "Garde-\u00e0-Joues", "Gaz Toxik", "G\u00e9o-Contr\u00f4le", "Gicl\u00e9do", "Giga Impact", "Giga-Sangsue", "Glaciation", "Gladius Maximus", "Glas de Soin", "Gonflette", "Goudronnage", "Gravit\u00e9", "Gr\u00eale", "Gribouille", "Griffe", "Griffe Acier", "Griffe Ombre", "Grimace", "Grincement", "Grobisou", "Grondement", "Groz Yeux", "Guillotine", "Gyroballe", "Halloween", "Hantise", "Harc\u00e8lement", "H\u00e2te", "Hurlement", "Hurle-Temps", "Hydroblast", "Hydrocanon", "Hydroqueue", "Hypnose", "Imitation", "Implore", "Incendie", "Interversion", "Ire de la Nature", "Jackpot", "Jet de Sable", "Jet de Vapeur", "Jet-Pierres", "Joute Astrale", "Jugement", "Koud Korne", "Lait \u00e0 Boire", "Lame d Air", "Lame de Roc", "Lame Ointe", "Lame Pang\u00e9enne", "Lame Sainte", "Lame Solaire", "Lame-Feuille", "Lance-Boue", "Lanc\u00e9crou", "Lance-Flammes", "Lance-Soleil", "Larcin", "Larme \u00e0 l \u0152il", "Laser Glace", "Laser Infinimax", "Laser Prisme", "L\u00e9chouille", "L\u00e9vikin\u00e9sie", "Ligotage", "Lilliput", "Lire-Esprit", "Lumi-\u00c9clat", "Luminocanon", "Lumiqueue", "Lutte", "Lyophilisation", "Mach Punch", "Machination", "M\u00e2chouille", "Magn\u00e9-Contr\u00f4le", "Mains Jointes", "Mal\u00e9diction", "Mal\u00e9fice Sylvain", "Mania", "Marteau de Glace", "Martobois", "Marto-Poing", "Massd Os", "Mawashi Geri", "M\u00e9gacorne", "M\u00e9gafouet", "M\u00e9gaphone", "M\u00e9ga-Sangsue", "M\u00e9talaser", "M\u00e9t\u00e9ores", "M\u00e9tronome", "Mimique", "Mimi-Queue", "Miroi-Tir", "Mitra-Poing", "Moi dAbord", "Morphing", "Morsure", "Mort-Ailes", "Mur de Fer", "Mur Lumi\u00e8re", "Myria-Fl\u00e8ches", "Myria-Vagues", "Nappage", "Nitrocharge", "N\u0153ud Herbe", "Nu\u00e9e de Poudre", "Ocroupi", "Octazooka", "Octoprise", "\u0152il Miracle", "Ombre Nocturne", "Ombre Port\u00e9e", "Onde Bor\u00e9ale", "Onde de Choc", "Onde Folie", "Onde Originelle", "Onde Vide", "Ondes \u00c9tranges", "Orage Adamantin", "Osmerang", "Os Ombre", "Ouragan", "Overdrive", "Papillodanse", "Par Ici", "Parabocharge", "Para-Spore", "Paresse", "Partage Force", "Partage Garde", "Passe-Cadeau", "Passe-Passe", "Patience", "Peign\u00e9e", "Permuc\u0153ur", "Permuforce", "Permugarde", "Permuvitesse", "Photocopie", "Photo-Geyser", "Phytomixeur", "Picanon", "Pico-D\u00e9fense", "Picore", "Picots", "Picpic", "Pics Toxik", "Pied Br\u00fbleur", "Pied Saut\u00e9", "Pied Voltige", "Pi\u00e8ge de Roc", "Pi\u00e8ge de Venin", "Pi\u00e9tisol", "Pilonnage", "Pince-Masse", "Piqu\u00e9", "Piq\u00fbre", "Pistolet \u00e0 O", "Pisto-Poing", "Plaie-Croix", "Plaquage", "Plasma Punch", "Pl\u00e9nitude", "Plong\u00e9e", "Plumo-Queue", "Poing Boost", "Poing Com\u00e8te", "Poing Dard", "Poing de Feu", "Poing M\u00e9t\u00e9or", "Poing Ombre", "Poing-\u00c9clair", "Poing-Glace", "Poing-Karat\u00e9", "Poison-Croix", "Poliroche", "Possessif", "Poudre Dodo", "Poudre Fureur", "Poudre Magique", "Poudre Toxik", "Poudreuse", "Poursuite", "Pouvoir Antique", "Pouvoir Lunaire", "Pr\u00e9l\u00e8vem. Destin", "Prescience", "Presse", "Pr\u00e9vention", "Prise de Bec", "Projecteur", "Projection", "Protection", "Provoc", "Psycho Boost", "Psycho-Croc", "Psyko", "PsykoudBoul", "Puissance", "Puissance Cach\u00e9e", "Punition", "Pur\u00e9dpois", "Purification", "Queue de Fer", "Queue-Poison", "Racines", "Rafale Feu", "Rafale Psy", "R\u00e2le M\u00e2le", "Rancune", "Rapace", "Rayon Charg\u00e9", "Rayon Gemme", "Rayon Lune", "Rayon Signal", "Rayon Simple", "Rayon Spectral", "Rebond", "Rebondifeu", "Recyclage", "Reflet", "Reflet Magik", "Regard M\u00e9dusant", "Regard Noir", "Regard Touchant", "R\u00e9g\u00e9n\u00e9ration", "Rel\u00e2che", "Relais", "Rengorgement", "Renversement", "Repli", "Repos", "Repr\u00e9sailles", "Requiem", "Retenue", "Retour", "R\u00e9veil Forc\u00e9", "Revenant", "Riposte", "Roc-Boulet", "Ronflement", "Roue de Feu", "Roue Libre", "Roulade", "Rugissement", "Rune Protect", "Ruse", "Sabotage", "Sacrifice", "Saisie", "Sanction Supr\u00eame", "Saumure", "S\u00e9cr\u00e9tion", "S\u00e9duction", "S\u00e9isme", "Sheauriken", "Siffl Herbe", "Siphon", "Soin", "Soin Floral", "Sommation", "Sonicboom", "Soucigraine", "Souffle Glac\u00e9", "Souplesse", "Souvenir", "Spatio-Rift", "Spore", "Spore Coton", "Stalagtite", "Stimulant", "Stockage", "Stratopercut", "Strido-Son", "Suc Digestif", "Surchauffe", "Surf", "Surpuissance", "Survinsecte", "Synchropeine", "Synth\u00e8se", "Tacle Feu", "Tacle Lourd", "Taillade", "Tambour Battant", "Tapotige", "Tatamigaeshi", "Techno Buster", "T\u00e9l\u00e9kin\u00e9sie", "T\u00e9l\u00e9port", "Telluriforce", "Temp\u00eate de Sable", "Temp\u00eate Florale", "Temp\u00eate Verte", "T\u00e9nacit\u00e9", "Ten-danse", "T\u00eate de Fer", "Th\u00e9r\u00e9monie", "Tir de Boue", "Tir de Pr\u00e9cision", "Tisse Ombre", "Toile", "Toile \u00c9lek", "Toile Gluante", "Tomberoche", "Tonnerre", "Torgnoles", "Tornade", "Tour Rapide", "Tourbi-Sable", "Tourmagik", "Tourmente", "Tourniquet", "Tout ou Rien", "Toxik", "Tranch Air", "Tranche", "Tranche-Nuit", "Tranch Herbe", "Trempette", "Tr\u00e9pignement", "Tricherie", "Triplattaque", "Triple Pied", "Troquenard", "Trou Noir", "TrouDimensionnel", "Tunnel", "Tunnelier", "Ultimapoing", "Ultimawashi", "Ultime Bastion", "Ultralaser", "Ultrason", "Uppercut", "Vague Psy", "Vampibaiser", "Vampigraine", "Vampipoing", "Vampirisme", "Vantardise", "Vapeur F\u00e9\u00e9rique", "V\u00e9g\u00e9-Attak", "Vendetta", "Vengeance", "Vent Argent\u00e9", "Vent Arri\u00e8re", "Vent F\u00e9\u00e9rique", "Vent Glace", "Vent Mauvais", "Vent Violent", "Verrou Enchant\u00e9", "Verrouillage", "Vibra Soin", "Vibraqua", "Vibr\u00e9caille", "Vibrobscur", "Vif Roc", "Vigilance", "Vitesse Extr\u00eame", "Vive-Attaque", "V\u0153u", "V\u0153u Soin", "Voile Aurore", "Voile Miroir", "Voix Enj\u00f4leuse", "Vol", "Vol Magn\u00e9tik", "Vol-Force", "Vol-Vie", "Vortex Magma", "Yama Arashi", "Yoga", "Z\u00e9nith", "Zone \u00c9trange", "Zone Magique");
$id = $_GET["id"];
echo "<input id='hiddenID' value='$id'>";

$usersPokemon = displayPkmUser($id);
while ($row = $usersPokemon->fetch()): ?>
    <div class="pkmContainer">
        <div class="highBlock">
            <div class="semiBlock">
                <img src="<?= $row['lienBall'] ?>" alt="IMAGE">
                <p class="name"><?= $row["nom"] ?></p>
            </div>
            <div class="semiBlock">
                <img src="images/types/<?= $row['type1'] ?>.png" alt="IMAGE">
                <img src="images/types/<?= $row['type2'] ?>.png" alt="IMAGE">
            </div>
        </div>
        <div class="imageContainer">
            <img src="<?= $row['lienPkm'] ?>" alt="IMAGE">
        </div>
        <div class="rightBlock">
            <div class="left">
                <div>Nature : </div>
                <div>Objet : </div>
                <div>Attaque 1 : </div>
                <div>Attaque 2 : </div>
                <div>Attaque 3 : </div>
                <div>Attaque 4 : </div>
            </div>
            <div class="right">
                <div><?=$row["nature"] ?></div>
                <div><?=$row["objet"] ?></div>
                <div><?=$attaques[$row["att1"]] ?></div>
                <div><?=$attaques[$row["att2"]] ?></div>
                <div><?=$attaques[$row["att3"]] ?></div>
                <div><?=$attaques[$row["att4"]] ?></div>
            </div>
        </div>
        <div>
            <table class="tg" style="undefined;table-layout: fixed; width: 90%">
                <colgroup>
                    <col style="width: 14%">
                    <col style="width: 14%">
                    <col style="width: 14%">
                    <col style="width: 14%">
                    <col style="width: 14%">
                    <col style="width: 14%">
                    <col style="width: 14%">
                </colgroup>
                <tr>
                    <th class="tg-12k0"></th>
                    <th class="tg-73oq">PV<br></th>
                    <th class="tg-73oq">Att</th>
                    <th class="tg-73oq">Déf<br></th>
                    <th class="tg-73oq">AttS<br></th>
                    <th class="tg-73oq">DéfS<br></th>
                    <th class="tg-73oq">Vit</th>
                </tr>
                <tr>
                    <td class="tg-lej4">IVs<br></td>
                    <td class="tg-nt9d"><?= $row["iv1"] ?></td>
                    <td class="tg-nt9d"><?= $row["iv2"] ?></td>
                    <td class="tg-nt9d"><?= $row["iv3"] ?></td>
                    <td class="tg-nt9d"><?= $row["iv4"] ?></td>
                    <td class="tg-j3py"><?= $row["iv5"] ?></td>
                    <td class="tg-j3py"><?= $row["iv6"] ?></td>
                </tr>
                <tr>
                    <td class="tg-12k0">EVs<br></td>
                    <td class="tg-3z1b"><?= $row["ev1"] ?></td>
                    <td class="tg-3z1b"><?= $row["ev2"] ?></td>
                    <td class="tg-3z1b"><?= $row["ev3"] ?></td>
                    <td class="tg-3z1b"><?= $row["ev4"] ?></td>
                    <td class="tg-73oq"><?= $row["ev5"] ?></td>
                    <td class="tg-73oq"><?= $row["ev6"] ?></td>
                </tr>
            </table>
        </div>


    </div>

<?php endwhile;