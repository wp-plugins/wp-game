<!DOCTYPE html>
<html>
    <head>
    	<base href="<?php echo plugins_url() . '/wp-game/games/Puzzle/Canvas_Tetris/' ?>">
        <title>HTML5 Tetris</title>
        <link rel='stylesheet' href='style.css' />
    </head>
    <body>
        <audio id="clearsound" src="sound/pop.ogg" preload="auto"></audio>
        <canvas width='300' height='600'></canvas>
        <script src='js/tetris.js'></script>
        <script src='js/controller.js'></script>
        <script src='js/render.js'></script>
    <?php wp_footer(); ?>
    </body>
</html>
