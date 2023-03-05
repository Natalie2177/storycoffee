<?

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title = "Search";
    ?>
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
</head>
<body>
    <div class="cont">
   
        <? require_once "$path/components/header.php";?>

        <main class = "mainSearch">
            <div class = "mainSearch_window">
                <div class = "mainSearch_window_filter"> Результаты поиска
                
                <div class = "mainSearch_window_cont">
                    <?
                    if(isset($_GET['cat_id'])){
                        
                        $queryCat = $db->query("SELECT * FROM products WHERE cat_id = {$_GET['cat_id']} ORDER BY name");
                        foreach($queryCat as $row){
                            echo <<<html
                            <a href = "#">{$row['name']}</a><br>
                            html;
                        }
                    }
                    if(isset($_GET['searchValueHeader'])){
                        $queryProducts = $db->query("SELECT * FROM products WHERE name LIKE '%{$_GET['searchValueHeader']}%' ORDER BY name");
                            foreach($queryProducts as $row){
                                echo <<<html
                                <a href = "/card"> {$row['name']} </a><br>
                                html;
                            }
                        }
                    ?>
                </div>
            </div>
        </main>

        <? require_once "$path/components/footer.php";?>
        <script>
            function addPointCat(elemRoot, valueName, valueId){
                let newOption = document.createElement("option");
                    newOption.innerText = valueName;
                    newOption.setAttribute("value",valueId);
                    elemRoot.append(newOption);
            }

            fetch("/system/search/searchCat.php")
            .then(response => response.json())
            .then(data => {
                for(let value of data){
                    addPointCat(value.name, value.id);
                }
            })

        </script>
    </div>
</body>
</html>