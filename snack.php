<?php 
    $tappa = [
        [
            'casa'=>[
                'squadra'=> 'brescia',
                'punti'=> 50,
            ],
            'strasferta'=>[
                'squadra'=> 'livorno',
                'punti'=> 75,
            ],
        ],
        [
            'casa'=>[
                'squadra'=> 'torino',
                'punti'=> 35,
            ],
            'strasferta'=>[
                'squadra'=> 'bergamo',
                'punti'=> 90,
            ],
        ],
    ];

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks</title>
</head>
<body>
    <!--	Creiamo un assortimento contenente le partite di basket di un'ipotetica tappa del calendario. Ogni schieramento avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
	Olimpia Milano - Cantù | 55-60 -->
    
    <div>
        <h1>snack 1</h1>

        <ul> <?php
		foreach ( $tappa  as  $partita ) { ?>
			<li>
				<span> <?php echo $partita [ 'casa' ][ 'squadra' ] ?> </span>
                 -
				<span> <?php echo $partita [ 'strasferta' ][ 'squadra' ] ?> </span> 
                |
				<span> <?php echo $partita [ 'casa' ][ 'punti' ] ?> </span> 
                -
				<span> <?php echo $partita [ 'strasferta' ][ 'punti' ] ?> </span>
			</li> <?php
		} ?>
	</ul>

    </div>
    <div>
        <h1>snack2</h1>
        <!--Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */-->
        <?php 
        $nome = $_GET['nome']?? '';
        if( strlen($nome) < 3 ){
            echo 'mi spiace ma il nome :' . $nome . ' non è valido.';
        }else{
            echo 'ciao ' . $nome;
        }

        $anni = $_GET['anni']?? '';
        if( is_numeric($anni)){
            echo ' di anni ' . $anni;
        }else{
            echo ' mi spiace gli anni : ' . $anni . ' non è valido.';
        }  

        $mail = $_GET['email']?? '';
        if(strpos($mail , '@' ) == false && strpos($mail , '.' ) == false){
            echo ' questa non è un email.';
        }elseif(strpos($mail , '@' ) == false){
            echo ' manca la chiocciola.';
        }elseif (strpos($mail , '.' ) == false) {
            echo ' manca il punto.';
        }else{
            echo ' email: ' . $mail;
        }
        ?>

    </div>

    <div>
        <!--Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta-->
        <h1>numeri random</h1>
        <?php 
        $numeri_random = [];
        for ($i=0; count($numeri_random) < 15 ; $i++) { 
            $numero = rand(1,100);
            if(in_array($numero,$numeri_random)==false ){
                array_push($numeri_random, $numero);
            }
        }
        ?>

        <ol>
            <?php foreach ($numeri_random as $key){?>
                <li> <?= $key ?></li>
            <?php    
            }?>
        </ol>



    </div>
    <div>
        <!--Snack 5
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.-->
        <?php 
        $text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis sit repudiandae deleniti iste nulla accusamus labore rerum fuga. Quos velit, commodi eaque necessitatibus distinctio expedita labore fugit voluptatibus explicabo aliquam?
        Laboriosam quasi enim, aut earum ab, velit animi porro ullam sequi vero amet. In ea culpa dolore voluptatibus nemo! Magnam dolores incidunt sapiente et, possimus animi. Adipisci sit velit perspiciatis!
        Velit ipsum recusandae quisquam. Quisquam molestiae labore alias, cupiditate consequuntur voluptatem voluptas similique quidem, quam amet quaerat quis consectetur saepe temporibus? Ipsam, veritatis facilis vel saepe soluta perferendis quam inventore.
        Error repellendus tempore beatae nostrum suscipit, magnam, maxime velit, ad placeat libero temporibus! Ex sunt aut id molestias amet? Quas sequi perspiciatis, nisi tempora facilis distinctio nostrum reprehenderit quisquam fuga?
        Fugit quae eveniet distinctio quo accusantium perspiciatis libero, voluptatibus modi nihil consequatur eos suscipit doloremque dolorem amet ea vitae? Dolorem animi veniam provident iste velit, cumque illum aut impedit a!
        Minima atque impedit natus, debitis nihil explicabo quia obcaecati ad totam delectus. Vitae, tempora alias dolore molestias ipsum, laudantium nostrum dolorem esse id beatae laboriosam cumque officiis voluptatibus, iste assumenda.
        Sunt repudiandae sit corporis, eum eligendi mollitia id reiciendis exercitationem voluptatibus, voluptas suscipit, at amet ut accusamus consequuntur quaerat a modi placeat maiores nam earum temporibus vero. Praesentium, nemo modi.
        Sequi unde repellendus itaque placeat, tenetur error facilis dicta possimus iusto quidem eaque non quod, ex dignissimos sapiente harum facere ipsum molestiae aliquid. Voluptate laboriosam porro, distinctio commodi labore ut.
        Provident dolor dolorem eos ab unde incidunt vero sit dolorum in amet rerum earum nulla, itaque aliquam eaque quam nostrum? Harum quo esse iure repudiandae temporibus odio, numquam quia fugiat.
        Mollitia, tempore. Tenetur doloremque blanditiis rerum doloribus sint consequatur fugit, nesciunt amet molestiae aliquid adipisci sed aut rem voluptatibus! Consequatur deserunt ut aut possimus illo, ullam unde vel illum nulla.';
        
        
        $diviso = join('</p><p>', explode('.', $text));
       ?>

        <p><?= $diviso ?></p>


    </div>

</body>
</html>