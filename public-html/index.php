<?php
    $page = 1;
    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $page = (int) $_GET['page'];
    }

    $img_ext = 'jpg';
    $audio_ext = 'mp3'; // remember to change line 75 if you change this

    $next_page = $page + 1;
    $previous_page = $page - 1;

    $next_page_exists = file_exists("./img/$next_page.$img_ext");
    $previous_page_exists = file_exists("./img/$previous_page.$img_ext");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
        <style>
        :root {
            color-scheme: light dark;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        header {
            margin: 10px;
            width: 100%;
            max-width: 700px;
            display: flex;
            justify-content: space-between;
            font-size: 20px;
        }

        img {
            width: 100%;
            max-width: 700px;
            max-height: 700px;
            height: auto;
            display: block;
            margin: 0 auto;
            object-fit: contain;
            object-position: center;
        }

        audio {
            width: 100%;
            margin-top: 20px;
            min-width: 300px;
        }
        </style>
    </head>
    <body>
        <header>
            <span>
                <?php if ($previous_page_exists) { ?>
                    <a href="?page=<?php echo $previous_page; ?>">Previous</a>
                <?php } ?>
            </span>
            <span>
                <?php if ($next_page_exists) { ?>
                    <a href="?page=<?php echo $next_page; ?>">Next</a>
                <?php } ?>
            </span>
        </header>
        <section>
            <img src="./img/<?php echo $page; ?>.<?php echo $img_ext; ?>" />
            <?php if (file_exists("./audio/$page.$audio_ext")) { ?>
                <audio autoplay controls>
                    <!-- Change the Audio type here if you change it on line 8 -->
                    <source src="./audio/<?php echo $page; ?>.<?php echo $audio_ext; ?>" type="audio/mpeg">
                </audio>
            <?php } ?>
        </section>
    </body>
</html>