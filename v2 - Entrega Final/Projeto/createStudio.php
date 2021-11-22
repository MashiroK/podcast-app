<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/createStudio.css">
</head>
<body>

<div id="modal" class="modal">
    <div id="exists"></div>
    <div class="modal__container">
        <span class="close">
            <svg width="34" height="27" viewBox="0 0 44 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.93934 18.9393C8.35355 19.5251 8.35355 20.4749 8.93934 21.0607L18.4853 30.6066C19.0711 31.1924 20.0208 31.1924 20.6066 30.6066C21.1924 30.0208 21.1924 29.0711 20.6066 28.4853L12.1213 20L20.6066 11.5147C21.1924 10.9289 21.1924 9.97919 20.6066 9.3934C20.0208 8.80761 19.0711 8.80761 18.4853 9.3934L8.93934 18.9393ZM37 18.5L10 18.5L10 21.5L37 21.5L37 18.5Z" fill="#594B6D"/>
            </svg>
        </span>

        <div class="option">
            <p>Criar Podcast</p>
        </div>
        <div class="option__container">               
                <div class="option">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" xml:space="preserve"><path d="M850 974.5H150c-77.3 0-140-65.3-140-145.9V646.3c0-20.1 15.7-36.5 35-36.5h70c19.3 0 35 16.3 35 36.5v109.4c0 40.3 31.3 72.9 70 72.9h560c38.7 0 70-32.7 70-72.9V646.3c0-20.1 15.7-36.5 35-36.5h70c19.3 0 35 16.3 35 36.5v182.3c0 80.6-62.7 145.9-140 145.9zm-65.5-525.3c-14.2 14.8-37.1 14.8-51.3 0L570 279.1v367.2c0 20.1-15.7 36.5-35 36.5h-70c-19.3 0-35-16.3-35-36.5V279.1L266.8 449.2c-14.2 14.8-37.1 14.8-51.3 0l-51.3-53.4c-14.2-14.8-14.2-38.7 0-53.4l289-301.3c1.2-1.3 23.7-15.6 46.4-15.6 22.9 0 45.9 14.3 47.2 15.6l289.1 301.2c14.2 14.8 14.2 38.7 0 53.4l-51.4 53.5z"/></svg>
                        <p>Clique ou arraste para dar upload de uma capa para seu Podcast</p>
                    </a>
                </div>
                

        </div> <!--Option Container end-->

        <div class="info__container">
            <span class="info__container-subcontainerData">
                <span class="info__container-name">
                    <input type="editable" placeholder="Nome do Podcast">
                </span>
                <span class="info__container-desc">
                    <textarea placeholder="Descrição..."></textarea>
                </span>
                    <div class="button">
                        <a href="#">
                            <p>Criar</p>
                        </a>
                    </div>
            </span>
        </div>

    </div> <!--Modal  container end-->
</div> <!--Modal end-->

    <script src="./js/userProfile.js"></script>
    
</body>
