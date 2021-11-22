<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/gridScroll.css">
</head>
<body>

<div class="scrollContainer">
    <h1>Episódios Recentes</h1>
    
    <div class="scroller full">
    
    <!--Audio queries / por alguma razão não funciona dentro da query do play / arrumar-->
    
    <audio id="26">
        <source src="./podcast/ear-biscuits/1.mp3" type="audio/mpeg">
    </audio> 
    
    <?php
        $query="select * from podcasts";
        $result=mysqli_query($con, $query);
        while($rows=mysqli_fetch_assoc($result)) {
            
    ?>
        
        <div class="box">
            <div class="epOverlay">
                <div>
            <?php
            echo 'Episódio: '. $rows['podcast_ep'];
            ?>
                </div>
            </div>
            <script>
            let id = "<?php echo $rows['idpodcasts']?>"; //não funciona porque está dentro do array, que acaba iterando até o ultimo ID, arrumar!
            function getID() {
                document.getElementById(id).play();
                songBar();
                //alert(id);
            }
            </script>
            <a type="ep" onclick="getID()">
        
            <?php
            echo '<img src="data:image/jpeg;base64,'.base64_encode($rows['podcast_img']).'"width="100% border-radius:8px"/>';
            ?>
            </a>
            
            </a>
        </div>

    <?php
        }
    ?>
    </div>

    <h1>Podcasts para você</h1>
    
    <div class="scroller2 full">
    <?php
        $queryRandom="select * from podcasts order by rand()";
        $resultRandom=mysqli_query($con, $queryRandom);
        while($rowsR=mysqli_fetch_assoc($resultRandom)) {

    ?>

        <div class="box">
            <a type="ep" href="podcastPage.php" id="<?php $rowsR['idpodcasts']?>">
            <?php
            echo '<img src="'.$rowsR['podcast_img_path'].'" width="100% border-radius:8px"/>';
            //echo '<img src='.$rowsR['podcast_img_path'].'width="100% border-radius:8px"/>';
            //echo '<img src="data:image/jpeg;base64,'.base64_encode($rowsR['podcast_img']).'"width="100% border-radius:8px"/>';
            //quando rodando 2 encodes na mesma página php, o carregamento fica drasticamente mais lento, porém ao remover qualquer um dos dois o comportamento de carregamento normaliza.
            //resolvido ao carregar a imagem por referência no servidor, inutilizando carregamento via blob.
            ?>
            
            </a>
        </div>

    <?php
        }
    ?>
    </div>

</div>
  <script src="./js/gridScroll.js"></script>
  <script src="./js/gridScroll2.js"></script>
  </body>