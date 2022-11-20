<!DOCTYPE html>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
include_once ('controller/function.php');
?>

<body>

    <header>
        <h1>To do list</h1>
    </header>

    <main>
        <article>
            <div class="article__title">
                <h2>To do</h2>
            </div>
            <div class="article__main">
                <ul>
                    <?php 
                     displayElement($todo);
                     
                    ?>
                </ul>

                <form method="POST" action="todo.php" >                   
                    <input type="text" placeholder="Add" name="AddElement" autocomplete="off">
                    <input type="submit" value="+">
                </form>

            </div>
        </article>

        <article>
            <div class="article__title">
                <h2>In progress</h2>
            </div>
            <div class="article__main">
            <ul>
                    <?php 
                    displayElement($inProgress);
                    ?>
                </ul>

                
            </div>
            
        </article>

        <article>
            <div class="article__title">
                <h2>Done</h2>
            </div>
            <div class="article__main">
            <ul>
                    <?php 
                    displayElement($Done);
                    ?>
                </ul>
            </div>
        </article>
    </main>


    <footer>
        <p>&copy;Emanuel Cottarel</p>
    </footer>
</body>

</html>