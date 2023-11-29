<html>

    <head>
        <title>Pokedex</title>

        <style>

            #pesquisa{

                background: red;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                padding: 20px;
                text-align: center;
            }
            
            .pokemon{
                width: 11%;
                border: solid 6px #555;
                padding: 15px;
                margin: 10px;
                background: #aaa;
                float: left;
            }

            .pokemons img{
                max-width: 100%;
            }

        </style>
    </head>

    <body>

        <div id = "pesquisa" >
            <form>
                <input type="text" placeholder = "Digite um Pokémon" >
                <input type="submit" value = "buscar" >
            </form>
        </div>

        <div id = "pokemons">
            
            <?php
                for ($i = 0; $i < 20; $i++):
            ?>
            <div class = "pokemon">
                <img src = "https://assets.pokemon.com/assets/cms2/img/pokedex/full/1008.png" alt = "Amoonguss" width = "200px">

                <h1>Miraidon</h1>
                <p>altura:3.5m</p>
                <p>peso:240kg</p>
            </div>
            <?php
                endfor;
            ?>
        </div>


    </body>


</html>
