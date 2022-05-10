<?php
require_once('db.php');

$sql = "SELECT nom.id, nom.nom FROM nom";

$query = getBdd()->prepare($sql);

$query->execute();

$data = $query->fetchAll();
// echo"<pre>";
// var_dump($data);
// echo"</pre>";



?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AutoCompletion</title>
</head>

<body>
    <script src="script.js">
    </script>

    <script>




        
        document.addEventListener('DOMContentLoaded', function loaded() {
            
            var data = <?php echo json_encode($data); ?>;
            console.log(data);
            let element = document.querySelector('input');
            // // console.log(element);

            element.addEventListener('input', (e) => {
                e.preventDefault();
                let value = e.target.value;


            //     // data = data.toLowerCase();

            //     for(i = 0 ; i < value.lenght; i++){
            //         if(!value[i].innerHTML.toLowerCase().includes(data)){
            //             value[i].style.display = 'none';
            //             console.log(value[i]);
            //         } else{
            //             value[i].style.display = 'list-item';

            //         } 
            //     }



                // console.log(value);
                // console.log(data[1]);
                // 2. check: if input exists and if input is larger than 0
                if (value && value.trim().length > 0) {
                    // 3. redefine 'value' to exclude white space and change input to all lowercase
                    value = value.trim().toLowerCase()

                    
                    
                    //  return the results only if the value of the search is included in the person's name
                    // we need to write code (a function for filtering through our data to include the search input value)
                    console.log(value);

                } else {
                    console.log('error')
                
                    // input is invalid -- show an error message or show no results

                }
                // Object.entries(data).forEach(([key, value]) => {


                // });
                // console.log('event');
            });
        });
    </script>
    <header>

    </header>
    <main>
        <section>
            <article>
                <h1>AutoCompletion</h1>

                <form action="" method="GET">
                    <input type="text" id="recherche" placeholder="recherher" name="recherche">
                </form>
            </article>
        </section>

    </main>
    <footer>

    </footer>
</body>

</html>