<?php 
session_start();
include('auth.php');
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="./css/userProfile.css">
</head>

<body>
    <div class="user__menu">
        <ul>
            <li class="user__profile" id="profileUsr">
                <a href="#">
                    <p><?php echo $_SESSION['usuario'];?>'s Pod</p>
                    <svg viewBox="0 0 175 168" width="48" height="50"><rect width="100%" height="100%" fill="none"/><g class="currentLayer color000 svgShape"><circle cx="87.387" cy="83.459" r="72.386" fill="#81d0c3" class="colorff6726 svgShape"/><defs transform="translate(15 11.071)"><circle id="a" cx="72.387" cy="72.386" r="72.386" fill="#000" class="color000 svgShape"/></defs><clipPath id="b" transform="translate(15 11.071)"><use overflow="visible" xlink:href="#a"/></clipPath><g clip-path="url(#b)" class="color000 svgShape"><ellipse cx="87.512" cy="73.792" fill="#10303f" rx="29.635" ry="29.828" class="color10303f svgShape"/><path fill="#f1c9a5" d="M122.178 128.012c-4.666-8.833-34.666-14.376-34.666-14.376s-30 5.543-34.666 14.376c-3.449 12.258-6.334 27.833-6.334 27.833h82s-1.948-16.7-6.334-27.833z" class="colorf1c9a5 svgShape"/><path fill="#e4b692" d="M87.512 113.636s30 5.543 34.666 14.376c4.386 11.133 6.334 27.833 6.334 27.833h-41v-42.209z" class="colore4b692 svgShape"/><path fill="#f1c9a5" d="M79.345 95.678h16.334v27.336H79.345z" class="colorf1c9a5 svgShape"/><path fill="#e4b692" d="M87.512 95.678h8.167v27.336h-8.167z" class="colore4b692 svgShape"/><path fill="#ddac8c" d="M79.345 108.345c1.469 4.217 7.397 6.634 11.751 6.634 1.575 0 3.107-.264 4.583-.747V95.678H79.345v12.667z" opacity=".1" class="colorddac8c svgShape"/><path fill="#f1c9a5" d="M108.512 78.43c0-17.075-9.402-26.784-21-26.784s-21 9.71-21 26.783 9.402 30.917 21 30.917c11.597 0 21-13.843 21-30.917z" class="colorf1c9a5 svgShape"/><path fill="#e4b692" d="M106.065 90.27c-3.807-.393-6.377-4.43-5.732-9.013.637-4.586 4.242-7.99 8.051-7.6 3.805.39 6.371 4.424 5.729 9.011-.639 4.586-4.241 7.99-8.048 7.601z" class="colore4b692 svgShape"/><path fill="#f1c9a5" d="M61.102 82.668c-.643-4.587 1.924-8.62 5.727-9.012 3.811-.39 7.416 3.015 8.055 7.601.643 4.583-1.93 8.62-5.734 9.012-3.808.388-7.41-3.015-8.048-7.6z" class="colorf1c9a5 svgShape"/><path fill="#e4b692" d="M108.512 78.43c0-17.075-9.402-26.784-21-26.784v57.7c11.597 0 21-13.843 21-30.917z" class="colore4b692 svgShape"/><path fill="#10303f" d="M88.719 46.42c-12.551 0-23.932 13.977-23.932 27.222 0 .051.003.1.003.15h11.852l1.122-8.839v8.84h12v-8.84l2.104 8.84h7.614v-7.34l1.826 7.34h8.924c0-.052.003-.1.003-.15.001-13.246-8.965-27.223-21.516-27.223z" class="color10303f svgShape"/><path fill="#10303f" d="M101.679 55.557s11.167-24.5 27.167-11.667-11.418 52.364 12.916 49.864c-8.666 9.167-20.416 4.137-21.416-16.03s-10.109-13-10.109-13m-36.62-9.167S62.45 31.057 46.45 43.89s10.896 51.614-13.438 49.114c8.666 9.167 20.938 4.887 21.938-15.28s10.109-13 10.109-13" class="color10303f svgShape"/><path fill="#9566ff" d="M86.811 55.955c10.84 0 19.845 6.258 21.678 14.495.224-1.006.347-2.04.347-3.097 0-9.715-9.86-17.592-22.024-17.592-12.163 0-22.024 7.877-22.024 17.592 0 1.057.123 2.091.348 3.097 1.831-8.237 10.835-14.495 21.675-14.495z" class="colorfae43e svgShape"/><path fill="#b3b10a" d="M122.178 128.012c-1.232-2.333-4.235-4.434-7.982-6.266-5.871 1.085-15.63 1.796-26.684 1.796s-20.812-.71-26.684-1.796c-3.747 1.832-6.75 3.933-7.982 6.266-3.449 12.258-6.334 27.833-6.334 27.833h82s-1.948-16.7-6.334-27.833z" class="colorb3b10a svgShape"/></g><path fill="none" stroke="#000" stroke-width="4" d="M15.755 85.071c0-40.252 32.139-72.857 71.816-72.857s71.817 32.605 71.817 72.857c0 40.253-32.139 72.858-71.817 72.858-39.677 0-71.816-32.605-71.816-72.858z" class="colorStroke000 svgStroke"/></g></svg></svg>
                </a>
            </li>
        </ul>
    </div>    

    <div id="overlay">
        <div id="suboverlay"></div>
        <!--Overlay Start-->
        <div id="modal" class="modal">
            <div class="modal__container">
                <span class="close">
                    <svg width="34" height="27" viewBox="0 0 44 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.93934 18.9393C8.35355 19.5251 8.35355 20.4749 8.93934 21.0607L18.4853 30.6066C19.0711 31.1924 20.0208 31.1924 20.6066 30.6066C21.1924 30.0208 21.1924 29.0711 20.6066 28.4853L12.1213 20L20.6066 11.5147C21.1924 10.9289 21.1924 9.97919 20.6066 9.3934C20.0208 8.80761 19.0711 8.80761 18.4853 9.3934L8.93934 18.9393ZM37 18.5L10 18.5L10 21.5L37 21.5L37 18.5Z" fill="#594B6D"/>
                    </svg>
                </span>
                <div class="profile">
                    <svg preserveAspectRatio="xMaxYMax meet" viewBox="0 0 178 168" xmlns="http://www.w3.org/2000/svg" width="168" height="168"><rect width="100%" height="100%" fill="none"/><g class="currentLayer color000 svgShape"><circle cx="87.387" cy="83.459" r="72.386" fill="#81d0c3" class="colorff6726 svgShape"/><defs transform="translate(15 11.071)"><circle id="a" cx="72.387" cy="72.386" r="72.386" fill="#000" class="color000 svgShape"/></defs><clipPath id="b" transform="translate(15 11.071)"><use overflow="visible" xlink:href="#a"/></clipPath><g clip-path="url(#b)" class="color000 svgShape"><ellipse cx="87.512" cy="73.792" fill="#10303f" rx="29.635" ry="29.828" class="color10303f svgShape"/><path fill="#f1c9a5" d="M122.17800072 128.01242878c-4.666-8.833-34.666-14.376-34.666-14.376s-30 5.543-34.666 14.376c-3.449 12.258-6.334 27.833-6.334 27.833h82s-1.948-16.7-6.334-27.833z" class="colorf1c9a5 svgShape"/><path fill="#e4b692" d="M87.51200072 113.63642878s30 5.543 34.666 14.376c4.386 11.133 6.334 27.833 6.334 27.833h-41v-42.209z" class="colore4b692 svgShape"/><path fill="#f1c9a5" d="M79.34500122 95.67842865h16.33399963v27.33600044H79.34500122z" class="colorf1c9a5 svgShape"/><path fill="#e4b692" d="M87.51200104 95.67842865h8.16699982v27.33600044h-8.16699982z" class="colore4b692 svgShape"/><path fill="#ddac8c" d="M79.34500072 108.34542878c1.469 4.217 7.397 6.634 11.751 6.634 1.575 0 3.107-.264 4.583-.747v-18.554h-16.334v12.667z" opacity=".1" class="colorddac8c svgShape"/><path fill="#f1c9a5" d="M108.51200072 78.42942878c0-17.074-9.402-26.783-21-26.783s-21 9.709-21 26.783 9.402 30.917 21 30.917c11.597 0 21-13.843 21-30.917z" class="colorf1c9a5 svgShape"/><path fill="#e4b692" d="M106.06500072 90.26942878c-3.807-.392-6.377-4.429-5.732-9.012.637-4.586 4.242-7.991 8.051-7.601 3.805.391 6.371 4.425 5.729 9.012-.639 4.586-4.241 7.989-8.048 7.601z" class="colore4b692 svgShape"/><path fill="#f1c9a5" d="M61.10200072 82.66842878c-.643-4.587 1.924-8.621 5.727-9.012 3.811-.391 7.416 3.015 8.055 7.601.643 4.583-1.93 8.62-5.734 9.012-3.808.388-7.41-3.015-8.048-7.601z" class="colorf1c9a5 svgShape"/><path fill="#e4b692" d="M108.51200072 78.42942878c0-17.074-9.402-26.783-21-26.783v57.7c11.597 0 21-13.843 21-30.917z" class="colore4b692 svgShape"/><path fill="#10303f" d="M88.71900072 46.42042878c-12.551 0-23.932 13.977-23.932 27.222 0 .051.003.1.003.15h11.852l1.122-8.839v8.839h12v-8.839l2.104 8.839h7.614v-7.339l1.826 7.339h8.924c0-.051.003-.1.003-.15.001-13.245-8.965-27.222-21.516-27.222z" class="color10303f svgShape"/><path fill="#10303f" d="M101.67900072 55.55742878s11.167-24.501 27.167-11.667-11.418 52.364 12.916 49.864c-8.666 9.167-20.416 4.137-21.416-16.03s-10.109-13-10.109-13m-36.62-9.167s-11.167-24.501-27.167-11.667 10.896 51.614-13.438 49.114c8.666 9.167 20.938 4.887 21.938-15.28s10.109-13 10.109-13" class="color10303f svgShape"/><path fill="#9566ff" d="M86.81100072 55.95542878c10.84 0 19.845 6.258 21.678 14.495.224-1.006.347-2.04.347-3.097 0-9.715-9.86-17.592-22.024-17.592-12.163 0-22.024 7.877-22.024 17.592 0 1.057.123 2.091.348 3.097 1.831-8.237 10.835-14.495 21.675-14.495z" class="colorfae43e svgShape"/><path fill="#b3b10a" d="M122.17800072 128.01242878c-1.232-2.333-4.235-4.434-7.982-6.266-5.871 1.085-15.63 1.796-26.684 1.796s-20.812-.711-26.684-1.796c-3.747 1.832-6.75 3.933-7.982 6.266-3.449 12.258-6.334 27.833-6.334 27.833h82s-1.948-16.7-6.334-27.833z" class="colorb3b10a svgShape"/></g><path fill="none" stroke="#000" stroke-width="4" d="M15.75510406 85.07142575c0-40.2525632 32.13879653-72.85713938 71.81632311-72.85713938s71.8163231 32.60457619 71.8163231 72.85713938c0 40.2525632-32.13879652 72.85713938-71.8163231 72.85713938-39.67752658 0-71.8163231-32.60457618-71.8163231-72.85713938z" class="colorStroke000 svgStroke"/></g></svg>
                    <p>Jane Doe</p>
                </div>
                <div class="profile__container">
                    <ul>
                        <li class="option">
                            <a href="./studio.php">
                                <svg id="studioSVG" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 350 350"><path id="studioP" d="M169.013 49.939c-20.586 9.587-34.268 27.844-38.48 51.351l-1.735 9.678h68.504c54.981 0 68.504-.672 68.504-3.403 0-44.503-54.849-77.158-96.793-57.626m-47.632 86.666c-3.756 7.018-3.426 44.834.425 48.685 5.28 5.28 150.712 4.342 152.757-.985 2.9-7.558 1.703-46.362-1.531-49.595-6.022-6.023-148.366-4.244-151.651 1.895m-27.833 66.394c-3.842 1.551-4.092 15.923-.545 31.301 8.956 38.825 43.029 72.319 82.091 80.696l13.293 2.851v22.798h-26.781c-27.936 0-34.471 2.375-31.052 11.286 1.916 4.992 130.928 6.527 133.976 1.594 6.077-9.832-.99-12.88-29.865-12.88h-28.213v-22.339L220 315.217c46.728-10.653 82.144-51.593 82.929-95.862.468-26.462-10.954-25.53-15.814 1.29-18.948 104.585-164.033 105.256-178.794.826-2.841-20.103-4.766-22.509-14.773-18.472m36.691 15.711c14.218 77.235 122.182 78.153 134.497 1.143l1.73-10.821H128.458l1.781 9.678" fill-rule="evenodd"/></svg>
                                <p id="studioSVG">Podcast Studio</p>
                        </li>
                        <li class="option">
                            <a href="#">
                                <svg id="settingsSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 25" width="50" height="50"><path id="settingsSVG" d="M24 13.616v-3.232c-1.651-.587-2.694-.752-3.219-2.019v-.001c-.527-1.271.1-2.134.847-3.707l-2.285-2.285c-1.561.742-2.433 1.375-3.707.847h-.001C14.366 2.693 14.2 1.643 13.616 0h-3.232c-.582 1.635-.749 2.692-2.019 3.219h-.001c-1.271.528-2.132-.098-3.707-.847L2.372 4.657c.745 1.568 1.375 2.434.847 3.707C2.692 9.635 1.635 9.802 0 10.384v3.232c1.632.58 2.692.749 3.219 2.019.53 1.282-.114 2.166-.847 3.707l2.285 2.286c1.562-.743 2.434-1.375 3.707-.847h.001c1.27.526 1.436 1.579 2.019 3.219h3.232c.582-1.636.75-2.69 2.027-3.222h.001c1.262-.524 2.12.101 3.698.851l2.285-2.286c-.744-1.563-1.375-2.433-.848-3.706.527-1.271 1.588-1.44 3.221-2.021zM12 16c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z"/></svg>
                                <p id="settingsID">Configura????es</p>
                            </a>
                        </li>
                        <li class="option">
                            <a href="#">
                                <svg id="helpSVG" xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="ionicon" viewBox="0 0 512 512"><path id="helpSVG" d="M256 64C150 64 64 150 64 256s86 192 192 192 192-86 192-192S362 64 256 64zm-6 304a20 20 0 1120-20 20 20 0 01-20 20zm33.44-102C267.23 276.88 265 286.85 265 296a14 14 0 01-28 0c0-21.91 10.08-39.33 30.82-53.26C287.1 229.8 298 221.6 298 203.57c0-12.26-7-21.57-21.49-28.46-3.41-1.62-11-3.2-20.34-3.09-11.72.15-20.82 2.95-27.83 8.59C215.12 191.25 214 202.83 214 203a14 14 0 11-28-1.35c.11-2.43 1.8-24.32 24.77-42.8 11.91-9.58 27.06-14.56 45-14.78 12.7-.15 24.63 2 32.72 5.82C312.7 161.34 326 180.43 326 203.57c0 33.83-22.61 49.02-42.56 62.43z"/></svg>
                                <p id="helpID">Ajuda</p>
                            </a>
                        </li>
                        <li class="option">
                                <a href="#">
                                    <svg id="leaveSVG" width="40" height="40" viewBox="0 0 64 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path id="leaveSVG" d="M63.7963 28.6336C63.6603 28.3082 63.4657 28.0122 63.2177 27.7642L55.2203 19.7668C54.1777 18.7268 52.4923 18.7268 51.4497 19.7668C50.4071 20.8094 50.4071 22.4974 51.4497 23.5374L54.8977 26.9854H40.0016C38.527 26.9854 37.335 28.1801 37.335 29.6521C37.335 31.1241 38.527 32.3187 40.0016 32.3187H54.8976L51.4496 35.7667C50.407 36.8093 50.407 38.4973 51.4496 39.5373C51.9696 40.0599 52.6522 40.3187 53.335 40.3187C54.0177 40.3187 54.7003 40.0601 55.2203 39.5373L63.2177 31.5399C63.4657 31.2946 63.6603 30.9986 63.7963 30.6706C64.0656 30.0202 64.0656 29.2842 63.7963 28.6336Z" fill="#4E7378"/><path id="leaveSVG" d="M45.3357 37.6527C43.8611 37.6527 42.6691 38.8473 42.6691 40.3193V53.6527H32.0024V10.986C32.0024 9.80996 31.2291 8.76996 30.1011 8.43134L20.8397 5.65271H42.6691V18.9861C42.6691 20.4581 43.8611 21.6527 45.3357 21.6527C46.8103 21.6527 48.0023 20.4581 48.0023 18.9861V2.98609C48.0023 1.51396 46.8103 0.319336 45.3357 0.319336H2.66907C2.57307 0.319336 2.48769 0.359336 2.39444 0.369961C2.26907 0.383336 2.15444 0.404586 2.03444 0.433961C1.75444 0.505961 1.50107 0.615336 1.26382 0.764586C1.20519 0.801961 1.13319 0.804586 1.07719 0.847211C1.05569 0.863336 1.04769 0.892711 1.02632 0.908711C0.735691 1.13796 0.493066 1.41796 0.317066 1.75134C0.279691 1.82334 0.271691 1.90071 0.242441 1.97534C0.157066 2.17796 0.0638164 2.37534 0.0318164 2.59934C0.0184414 2.67934 0.0424414 2.75396 0.0398164 2.83134C0.0371914 2.88471 0.00244141 2.93271 0.00244141 2.98596V56.3193C0.00244141 57.5913 0.901066 58.6847 2.14644 58.9327L28.8131 64.2661C28.9864 64.3035 29.1624 64.3195 29.3357 64.3195C29.9463 64.3195 30.5463 64.1088 31.0263 63.7141C31.6423 63.2075 32.0023 62.4527 32.0023 61.6527V58.9861H45.3357C46.8103 58.9861 48.0023 57.7915 48.0023 56.3195V40.3193C48.0023 38.8473 46.8103 37.6527 45.3357 37.6527Z" fill="#4E7378"/></svg> 
                                    <p id="leaveID">Sair</p>
                                </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Overlay End-->
    </div>
    <script src="./js/userProfile.js"></script> <!--Needs to be here-->

</body>
